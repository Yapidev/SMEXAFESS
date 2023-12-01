<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    protected function dashboardPage() {
        return response()->view('User.dashboardUser');
    }
}
