<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class authController extends Controller
{
    protected function loginPage()
    {
        $title = 'Smexafess';
        return response()->view('Auth.login', compact('title'));
    }

    protected function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus memiliki :min karakter.',
        ]);

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.home')->with('success', 'Anda berhasil login');
            } elseif ($user->role === 'user') {
                return redirect()->route('user.home')->with('success', 'Anda berhasil login');
            }
        } else if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Akun anda tidak di temukan'])->withInput();
        } else if (!Auth::attempt($credentials)) {
            return redirect()->back()->withErrors(['password' => 'Kata sandi Anda salah'])->withInput();
        }
        return redirect()->route('login')->with('error', 'Email atau Kata Sandi Anda Salah');
    }

    protected function registerPage()
    {
        $title = 'Smexafess';
        return response()->view('Auth.register', compact('title'));
    }

    protected function registerProcess(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Username harus diisi.',
            'name.string' => 'Username harus bertipe string.',
            'name.max' => 'Username max 50 karakter.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus memiliki :min karakter.',
        ]);

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ];

        User::create($user);

        return redirect()->route('login')->with('success', 'Anda berhasil register');
    }

    protected function forgotPasswordPage()
    {
        $title = 'Smexafess';
        return response()->view('Auth.forgotPassword', compact('title'));
    }

    protected function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    protected function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $existingAccount = User::where('email', $user->email)->first();

            if ($existingAccount) {
                Auth::login($existingAccount);
            } else {
                $pass = Str::random(16);
                $data = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => 'user',
                    'password' => bcrypt($pass),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $newUser = User::create($data);
                Auth::login($newUser);
            }

            return redirect()->route('user.home')->with('success', 'Berhasil login!');
        } catch (\Exception $e) {
            return redirect('login')->with('error', 'Gagal login menggunakan Google');
        }
    }

    protected function logout()
    {
        try {
            Auth::logout();
            return redirect()->route('login')->woth('success', 'Berhasil logout!');
        } catch (\Throwable $th) {
            return back();
        }
    }

    protected function sendResetLink(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email'], [
                'email.required' => 'Email diperlukan.',
                'email.email' => 'Email harus berupa alamat email yang valid.',
            ]);

            $user = User::where('email', $request->email)->first();
            if (!$user) {
                throw ValidationException::withMessages(['email' => 'Email tidak ditemukan']);
            }

            $status = Password::sendResetLink(
                $request->only('email')
            );

            if ($status === Password::RESET_LINK_SENT) {
                return back()->with('success', 'Reset link telah dikirim. Silakan cek email Anda untuk petunjuk lebih lanjut.');
            } else {
                return back()->withErrors(['email' => 'Tunggu beberapa saat lagi untuk kirim email']);
            }
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors());
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Terjadi kesalahan saat mengirim reset link.']);
        }
    }

    protected function resetPassword()
    {
        $title = 'Smexafess';
        return response()->view('Auth.forgotPassword', compact('title'));
    }

    protected function updatePassword(Request $request)
    {
        try {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6|different:password',
                'confirmPassword' => 'required|same:password',
            ], [
                'token.required' => 'Token diperlukan.',
                'email.required' => 'Email diperlukan.',
                'email.email' => 'Email harus berupa alamat email yang valid.',
                'password.required' => 'Password diperlukan.',
                'password.min' => 'Password harus terdiri dari minimal :min karakter.',
                'password.different' => 'Password baru harus berbeda dengan password lama.',
                'confirmPassword.required' => 'Konfirmasi password diperlukan.',
                'confirmPassword.same' => 'Konfirmasi password harus sama dengan password.',
            ]);

            $status = Password::reset(
                $request->only('email', 'password', 'token'),
                function (User $user, string $password) {
                    $user->forceFill([
                        'password' => bcrypt($password)
                    ])->setRememberToken(Str::random(60));

                    $user->save();

                    event(new PasswordReset($user));
                }
            );

            return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('success', 'Password anda berhasil diubah')
                : back()->with('error', 'Terjadi kesalahan saat reset password');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors());
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Terjadi kesalahan saat memperbarui password.']);
        }
    }

    protected function welcomePage()
    {
        return response()->view('welcome');
    }
}
