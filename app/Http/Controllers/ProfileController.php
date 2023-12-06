<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    protected function profilePage()
    {
        $user = Auth::user();
        return response()->view('Profile.profile', compact('user'));
    }

    protected function updatePhotoProfileProcess(Request $request)
    {
        try {
            $request->validate([
                'photoProfile' => 'required|image'
            ], [
                'photoProfile.required' => 'Foto profil harus di isi!',
                'photoProfile.image' => 'Foto harus berupa gambar!'
            ]);

            $user = User::find(Auth::user()->id);

            if ($request->hasFile('photoProfile')) {
                if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                    Storage::disk('public')->delete($user->avatar);
                }

                $nameImage = $request->photoProfile->store('avatars', 'public');
                $user->update(['avatar' => $nameImage]);
            }

            return response()->json(['success' => 'Berhasil mengunggah foto'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal mengunggah foto', 'message' => $e->getMessage()], 422);
        }
        return response()->json(['error' => 'Gagal mengunggah foto'], 500);
    }

    protected function updatePassword(Request $request)
    {
        try {
            $request->validate([
                'currentPass' => 'required',
                'newPass' => 'required|string|min:8|confirmed'
            ], [
                'currentPass.required' => 'Kata sandi saat ini wajib diisi.',
                'newPass.required' => 'Kata sandi baru wajib diisi.',
                'newPass.string' => 'Kata sandi baru harus berupa teks.',
                'newPass.min' => 'Kata sandi baru minimal 8 karakter.',
                'newPass.confirmed' => 'Konfirmasi kata sandi baru tidak cocok.',
            ]);

            $user = User::find(Auth::user()->id);

            if (!Hash::check($request->currentPass, $user->password)) {
                return response()->json([
                    'error' => 'Gagal mengubah password',
                    'message' => 'Kata sandi saat ini salah.'
                ], 422);
            }

            $user->update(['password' => bcrypt($request->newPass)]);

            return response()->json(['success' => 'Kata sandi berhasil diperbarui.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal mengubah password', 'message' => $e->getMessage()], 422);
        }
        return response()->json(['error' => 'Gagal mengubah password'], 500);
    }
}
