<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected function profilePage() {
        return response()->view('Profile.profile');
    }
}
