<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected function profilePage() {
        $user = Auth::user();
        // dd($user);
        return response()->view('Profile.profile', compact('user'));
    }
}
