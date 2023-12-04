<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    protected function dashboardPage() {
        return response()->view('Admin.dashboardAdmin');
    }

    protected function postFeedPage() {
        return response()->view('Admin.postFeed');
    }

    protected function reportListPage() {
        return response()->view('Admin.reportList');
    }
}
