<?php

namespace App\Http\Controllers;

use App\Models\RequestPost;
use Carbon\Carbon;
use Illuminate\Http\Request;

class requestPostController extends Controller
{
    protected function requestPost(Request $request)
    {
        try {
            $request->validate([
                'from' => 'required|string|max:30',
                'to' => 'required|string|max:30',
                'message' => 'required|string|max:150',
                'photo' => 'nullable|image|max:2048',
            ], [
                'from.required' => 'Kolom "Dari" harus diisi.',
                'from.string' => 'Kolom "Dari" harus berupa teks.',
                'from.max' => 'Kolom "Dari" tidak boleh lebih dari 30 karakter.',
                'to.required' => 'Kolom "Ke" harus diisi.',
                'to.string' => 'Kolom "Ke" harus berupa teks.',
                'to.max' => 'Kolom "Ke" tidak boleh lebih dari 30 karakter.',
                'message.required' => 'Kolom "Pesan" harus diisi.',
                'message.string' => 'Kolom "Pesan" harus berupa teks.',
                'message.max' => 'Kolom "Pesan" tidak boleh lebih dari 150 karakter.',
                'photo.image' => 'File yang diunggah harus berupa gambar.',
                'photo.max' => 'Ukuran foto maksimum adalah 2MB.',
            ]);

            $userRequest = RequestPost::whereHas('user', function($query) {
                $query->where('id', auth()->id());
            })->whereDate('created_at', Carbon::today())->get();

            if ($userRequest) {
                return response()->json(['error' => 'Gagal', 'message' => 'Kamu cuma bisa request sekali dalam sehari!'], 422);
            }

            if ($request->hasFile('photo')) {
                $nameImage = $request->photo->store('post-photo', 'public');
            }

            RequestPost::create([
                'user_id' => auth()->id(),
                'from' => $request->from,
                'to' => $request->to,
                'message' => $request->message,
                'photo' => $nameImage ?: null
            ]);

            return response()->json(['success' => 'Berhasil request postingan!'], 200);
        } catch (\Exception $e) {
            dd($e);
            return response()->json(['error', 'Gagal request postingan', 'message' => $e->getMessage()], 422);
        }
    }
}
