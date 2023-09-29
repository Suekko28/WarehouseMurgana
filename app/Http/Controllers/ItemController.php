<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {

        $data = Company::findOrFail($id);
        return view('item.detail')->with('data', $data);
        //
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
            'alat' => 'required|max:20',
            'lokasi' => 'required|max:20',
            'pabrik' => 'required|max:20',
            'seri' => 'required|max:20',
            'pengesahan' => 'required|max:20',
            'keterangan' => 'required',
            'file' => 'required',


        ],[
            'alat.required' => 'Kategori Alat Wajib Diisi',
            'lokasi.required' => 'Lokasi Wajib Diisi',
            'pabrik.required' => 'Lokasi Wajib Diisi',
            'seri.required' => 'No Seri Wajib Diisi',
            'pengesahan.required' => 'No Pengesahan Wajib Diisi',
            'keterangan.required' => 'Keterangan Wajib Diisi',
            'file.required' => 'File Wajib Diupload'




        ]);

        $data = [
            'alat' => $request->alat,
            'lokasi' => $request->lokasi,
            'pabrik' => $request->pabrik,
            'seri' => $request->seri,
            'pengesahan' => $request->pengesahan,
            'keterangan' => $request->keterangan,
            'file' => $request->file
        ];
        // $data['user_id'] = auth()->user()->id;
        Item::create($data);
        return redirect()->to('detail')->with('success', 'Berhasil Menambahkan Data');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
