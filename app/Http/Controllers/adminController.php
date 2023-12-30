<?php

namespace App\Http\Controllers;

use App\Models\RequestPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    protected function postQueue()
    {
        $postQueue = RequestPost::oldest()->where('status', 'notapproved')->get();
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

    protected function rejectPostQueue(Request $request, $id)
    {
        try {
            $request->validate(['rejectReason' => 'required|string']);
            $requestPost = RequestPost::find($id);
            // if ($requestPost->photo) {
            //     Storage::delete($requestPost->photo);
            // }
            // $requestPost->delete();

            // bikinin notifikasi yang isinya request->rejectReason

            return response()->json(['success' => 'Berhasil Menolak Permintaan Post!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'gagal', 'message' => $e->getMessage()], 422);
        }
        return response()->json(['error' => 'Gagal Menolak Permintaan Post'], 500);
    }
}
