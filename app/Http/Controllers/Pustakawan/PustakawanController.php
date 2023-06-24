<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Pustakawan;

class PustakawanController extends Controller
{
    public function dashboard(): View
    {
        $idUser = Auth::id();
        $pustakawan = DB::table('pustakawan')->where('user_id',$idUser)->get();
        return view('pustakawan.dashboard',compact('pustakawan'));
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('pustakawan.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        $request->validate([
            'nama_pustakawan' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir_pustakawan' => 'required|date',
            'alamat_pustakawan' => 'required',
            'tlp_pustakawan' => 'required',
        ]);

        $pustakawan = Pustakawan::updateOrCreate([
            'user_id' => $request->user()->id,
            'email_pustakawan' => $request->user()->email
        ], [
            'nama_pustakawan' => $request->input('nama_pustakawan'),
            'alamat_pustakawan' => $request->input('alamat_pustakawan'),
            'tgl_lahir_pustakawan' => $request->input('tgl_lahir_pustakawan'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tlp_pustakawan' => $request->input('tlp_pustakawan'),
        ]
    );
        return Redirect::route('pustakawan.edit')->with('status', 'profile-updated');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
