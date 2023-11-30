<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        $infologin = $request->only('email', 'password');

        if (Auth::attempt($infologin)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('')->with('success', 'anda berhasil login');
            } elseif ($user->role === 'user') {
                dd('sukses');
                return redirect()->route('')->with('success', 'berhasil loogin');
            }
        } else {
            return redirect()->back()->with('error', 'akun anda tidak di temukan');
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

        return redirect()->route('login')->with('succsess', 'berhasil register');
    }
}
