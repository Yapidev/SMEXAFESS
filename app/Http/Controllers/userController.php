<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    protected function homePage() {
        $user = Auth::user();
        return response()->view('User.dashboardUser', compact('user'));
    }

    protected function statisticPostPage() {
        return response()->view('User.statistic-post');
    }

    protected function reportListPage() {
        return response()->view('User.report-list');
    }

    protected function detailPost()
    {
        $comments = Comment::with('user')->get();
        return view('user.detailPost', compact('comments'));
    }
}
