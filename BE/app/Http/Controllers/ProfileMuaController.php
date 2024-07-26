<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mkartist;
use App\Models\ProfileMua;
use Illuminate\Support\Facades\Auth;
class ProfileMuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan ID dari pengguna MUA yang saat ini login
        $muaId = Auth::guard('mkartist')->user()->id;

        // Mendapatkan semua Mkartist
        $mkartist = Mkartist::all();

        // Mencari ProfileMua yang memiliki mua_id yang sama dengan id pengguna MUA yang login
        $profileMua = ProfileMua::where('mua_id', $muaId)->first();

        return view('mua.profile', compact('profileMua','mkartist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $muaId = Auth::guard('mkartist')->user()->id;

        // Validasi data
        $validated = $request->validate([
            'gender' => 'required|in:male,female',
            'picture' => 'nullable|image|max:2048',
            'alamat' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'kota' => 'nullable|string|max:255',
            'kecamatan' => 'nullable|string|max:255',
            'kode_pos' => 'nullable|string|max:10',
            'no_hp' => 'nullable|string|max:15',
            'deskripsi' => 'nullable|string',
        ]);

        // Menghandle upload gambar jika ada
        if ($request->hasFile('picture')) {
            $validated['picture'] = $request->file('picture')->store('profile_pictures', 'public');
        }

        // Menyimpan data profil baru
        ProfileMua::create([
            'mua_id' => $muaId,
            'gender' => $validated['gender'],
            'picture' => $validated['picture'] ?? null,
            'alamat' => $validated['alamat'],
            'provinsi' => $validated['provinsi'],
            'kota' => $validated['kota'],
            'kecamatan' => $validated['kecamatan'],
            'kode_pos' => $validated['kode_pos'],
            'no_hp' => $validated['no_hp'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect()->route('mua.index')->with('success', 'Profil berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, profileMua $mua)
    {
    // Validasi data
    $validated = $request->validate([
        'gender' => 'required|in:male,female',
        'picture' => 'nullable|image|max:2048',
        'alamat' => 'nullable|string|max:255',
        'provinsi' => 'nullable|string|max:255',
        'kota' => 'nullable|string|max:255',
        'kecamatan' => 'nullable|string|max:255',
        'kode_pos' => 'nullable|string|max:10',
        'no_hp' => 'nullable|string|max:15',
        'deskripsi' => 'nullable|string',
    ]);

    // Menghandle upload gambar jika ada
    if ($request->hasFile('picture')) {
        $validated['picture'] = $request->file('picture')->store('profile_pictures', 'public');
    }

    // Memperbarui data profil
    $mua->update($validated);

    return redirect()->route('mua.index')->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
