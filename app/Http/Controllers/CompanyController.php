<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Company;
use Illuminate\Http\Request;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        if(auth()->user()->role == 1){
        $data = Company::orderBy('id', 'desc')->paginate(8);
        return view('company.perusahaan')->with('data', $data);
        }
        else{
            $company_id=auth()->user()->company_id;
            $items= new ItemController();
            $result = $items->show($company_id);
            return $result;
        }
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
            'name' => 'required|max:100',

        ],[
            'name.required' => 'Nama Perusahaan Wajib Diisi',
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes


        ]);php

       Company::create([
        'name' => $request->name
       ]);

        // $data['user_id'] = auth()->user()->id;
        return redirect()->to('perusahaan')->with('success', 'Berhasil Menambahkan Perusahaan');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Company::findOrFail($id);

        return view('item.detail', compact('data'));



        //return view('company.detail', compact('data'));


        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Company::where('id', $id)->first();
        return view('company.perusahaan')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:100',

        ],[
            'name.required' => 'Nama Perusahaan Wajib Diisi',


        ]);

        $data = Company::findOrFail($id);

       $data->update([
        'name' => $request->name
       ]);
        // $data['user_id'] = auth()->user()->id;
        return redirect()->to('perusahaan')->with('success', 'Berhasil Melakukan Update Perusahaan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return 'hi'.$id;
        Company::where('id', $id)->delete();
        return redirect()->to('perusahaan')->with('delete', 'Berhasil Melakukan Delete Perusahaan');
    }

<<<<<<< Updated upstream
    public function search(Request $request){
        $search = $request->search;
        $data = DB::table('companies')
        ->where('name', 'like', "%".$search."%")
        ->paginate(8);

        if($data->count()==0){
            return view('search',['kosong'=>True]);
        }

        return view('search', compact('search', 'data'),['kosong'=>False]);
    }










=======









>>>>>>> Stashed changes
}
