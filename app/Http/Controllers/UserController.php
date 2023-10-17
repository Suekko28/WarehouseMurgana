<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::orderBy('id', 'desc')->paginate(10);

        return view('user.pengguna')->with('data', $data);
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
        $request->validate([
            'name' => 'required|max:20',
            
        ],[
            'name.required' => 'Nama Perusahaan Wajib Diisi',
           

        ]);

       Company::create([
        'name' => $request->name
       ]);

        // $data['user_id'] = auth()->user()->id;
        return redirect()->to('perusahaan')->with('success', 'Berhasil Menambahkan Perusahaan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $data = User::findOrFail($id);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
