<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    protected function dashboardPage() {
        return response()->view('User.dashboardUser');
    }

    protected function statisticPostPage() {
        return response()->view('User.statistic-post');
    }

    protected function reportListPage() {
        return response()->view('User.report-list');
    }
}
