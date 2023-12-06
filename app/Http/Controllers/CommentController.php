<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = Comment::create([
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
        ]);

        return response()->json(['comment' => $comment]);
    }

    public function getComments()
    {
        $comments = Comment::with('user')->get();
        return response()->json(['comments' => $comments]);
    }

    public function getActiveUserId(Request $request)
    {
        if (Auth::check()) {
            $activeUserId = Auth::id();
            return response()->json(['activeUserId' => $activeUserId]);
        }

        return response()->json(['activeUserId' => null]); 
    }
    
    public function destroy($id)
    {
        // Temukan komentar berdasarkan ID
        $comment = Comment::find($id);

        // Periksa apakah komentar ditemukan
        if (!$comment) {
            return response()->json(['error' => 'Comment not found'], 404);
        }

        // Periksa apakah pengguna yang meminta penghapusan adalah pemilik komentar atau pengguna yang berwenang
        if ($comment->user_id != auth()->user()->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Hapus komentar dari database
        $comment->delete();

        // Hitung ulang jumlah komentar setelah penghapusan
        $commentCount = Comment::count();

        // Kirim respons JSON ke klien
        return response()->json(['commentCount' => $commentCount]);
    }
}
