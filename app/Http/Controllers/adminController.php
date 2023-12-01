<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    protected function dashboardPage() {
        return response()->view('Admin.dashboardAdmin');
    }
}
