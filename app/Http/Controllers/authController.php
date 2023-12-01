<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class authController extends Controller
{
    protected function loginPage()
    {
        $title = 'Smexafess';

        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('dashboardAdmin');
            } else {
                return redirect()->route('dashboardUser');
            }
        }

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
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('dashboardAdmin')->with('success', 'Anda berhasil login');
            } elseif ($user->role === 'user') {
                return redirect()->route('dashboardUser')->with('success', 'Anda berhasil login');
            }
        } else {
            return redirect()->back()->with('error', 'Akun anda tidak di temukan');
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus memiliki :min karakter.',
        ]);

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ];

        User::create($user);

        return redirect()->route('login')->with('succsess', 'Anda berhasil register');
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
            $user = Socialite::driver('google')->user();
            $existingAccount = User::where('email', $user->email)->first();

            if ($existingAccount) {
                Auth::login($existingAccount);
            } else {
                $data = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => 'user',
                    'password' => Str::random(16),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $newUser = DB::table('users')->insertGetId($data);
                Auth::loginUsingId($newUser);
            }

            return redirect('login');
        } catch (\Exception $e) {
            return redirect('login')->with('error', 'Gagal login menggunakan Google');
        }
    }
}
