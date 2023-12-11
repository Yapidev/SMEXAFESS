<?php

namespace App\Http\Controllers;

use App\Models\RequestPost;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    protected function homePage()
    {
        $userCount = User::where('role', 'user')->count();
        $carouselData = [
            'userCount' => $userCount,
        ];

        return response()->view('Admin.dashboardAdmin', compact('carouselData'));
    }

    protected function postQueue() {
        $postQueue = RequestPost::all();
        return response()->view('Admin.postQueue', compact('postQueue'));
    }

    protected function postFeedPage()
    {
        return response()->view('Admin.postFeed');
    }

    protected function reportListPage()
    {
        return response()->view('Admin.reportList');
    }    
}
