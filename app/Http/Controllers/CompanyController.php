<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Item;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Company::orderBy('id', 'desc')->paginate(8);
        return view('company.perusahaan')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        // return view('item.detail');


        return view('company.perusahaan');

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
        return redirect()->to('perusahaan')->with('success', 'Berhasil Menambahkan Data');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Company::findOrFail($id);

        return view('item.detail', compact('data'));
        

        return view('company.detail', compact('data'));

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
