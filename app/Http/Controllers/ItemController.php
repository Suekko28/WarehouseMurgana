<?php

namespace App\Http\Controllers;

use App\Exports\Export;
use App\Exports\ItemExport;
use App\Imports\Import;
use App\Models\Company;
use App\Models\Item;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $per_page=10;
        $items = Item::paginate($per_page);
        return view('user.peralatan', compact('items','per_page'));
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
        // $file = $request;
        // dd($file);
        
        $request->validate([
            'alat' => 'required|max:20',
            'lokasi' => 'required|max:20',
            'pabrik' => 'required|max:20',
            'seri' => 'required|max:20',
            'pengesahan' => 'required|max:20',
            'tgl_msk' => 'required',
            'tgl_klr' => 'required',
            'company_id' => 'required',
        ],[
            'alat.required' => 'Kategori Alat Wajib Diisi',
            'lokasi.required' => 'Lokasi Wajib Diisi',
            'pabrik.required' => 'Lokasi Wajib Diisi',
            'seri.required' => 'No Seri Wajib Diisi',
            'pengesahan.required' => 'No Pengesahan Wajib Diisi',   
            'tgl_msk.required' => 'File Wajib Diupload',   
            'tgl_klr.required' => 'File Wajib Diupload',   
            'company_id.required' => 'File Wajib Diupload'
        ]);
        
        $rand_generator=Str::random(8);
        $file_control=new FileController();
        $tujuan_upload = 'data_file';
        $new_filename=$rand_generator.'_'.$request->file->getClientOriginalName();
        $file_control->store($tujuan_upload,$request->file('file'),$new_filename);
        $data = [
            'alat' => $request->alat,
            'lokasi' => $request->lokasi,
            'pabrik' => $request->pabrik,
            'seri' => $request->seri,
            'pengesahan' => $request->pengesahan,
            'tgl_msk' => $request->tgl_msk,
            'tgl_klr' => $request->tgl_klr,
            'file' => $new_filename,
            'company_id' => $request->company_id,
        ];
        // $data['user_id'] = auth()->user()->id;
        //storing into query
        Item::create($data);
        //storing file
        

        return redirect()->back()->with('success','Berhasil Menambahkan Data');
        // return redirect()->route('perusahaan.index', ['id' => $request->company_id])->with('success', 'Berhasil Menambahkan Data');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $per_page=10;
        $data = Company::findOrFail($id);
        $try=Item::where('company_id','=',$id)->paginate($per_page);
        return view('item.detail', compact('try','data','per_page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([

            'alat' => 'required|max:20',
            'lokasi' => 'required|max:20',
            'pabrik' => 'required|max:20',
            'seri' => 'required|max:20',
            'pengesahan' => 'required|max:20',
            'file' => 'mimes:pdf',
            'tgl_msk' => 'required',
            'tgl_klr' => 'required',
        ],[
            'alat.required' => 'Kategori Alat Wajib Diisi',
            'lokasi.required' => 'Lokasi Wajib Diisi',
            'pabrik.required' => 'Lokasi Wajib Diisi',
            'seri.required' => 'No Seri Wajib Diisi',
            'pengesahan.required' => 'No Pengesahan Wajib Diisi',
            'tgl_msk.required' => 'Tanggal Masuk Wajib Diisi',   
            'tgl_klr.required' => 'Tanggal Keluar Wajib Diisi',   
        ]);
        if($request->hasFile('file')){
            
            $rand_generator=Str::random(8);
            $file_control=new FileController();
            $tujuan_upload = 'data_file';
            $new_filename=$rand_generator.'_'.$request->file->getClientOriginalName();
            $file_control->store($tujuan_upload,$request->file('file'),$new_filename);
            $data = [
                'alat' => $request->alat,
                'lokasi' => $request->lokasi,
                'pabrik' => $request->pabrik,
                'seri' => $request->seri,
                'pengesahan' => $request->pengesahan,
                'tgl_msk' => $request->tgl_msk,
                'tgl_klr' => $request->tgl_klr,
                'file' => $new_filename,
            ];
            $item=Item::find($id);
            $item->alat=$data['alat'];
            $item->lokasi=$data['lokasi'];
            $item->pabrik=$data['pabrik'];
            $item->seri=$data['seri'];
            $item->pengesahan=$data['pengesahan'];
            $item->tgl_msk=$data['tgl_msk'];
            $item->tgl_klr=$data['tgl_klr'];
            $item->file=$data['file'];
            $file_control->delete($item->getOriginal()['file']);
            $item->update();
            return redirect()->back()->with('status','Berhasil Melakukan Update Data');

        }
        else{
            
            $data = [
                'alat' => $request->alat,
                'lokasi' => $request->lokasi,
                'pabrik' => $request->pabrik,
                'seri' => $request->seri,
                'pengesahan' => $request->pengesahan,
                'tgl_msk' => $request->tgl_msk,
                'tgl_klr' => $request->tgl_klr,
            ];
            
            $item=Item::find($id);
            $item->alat=$data['alat'];
            $item->lokasi=$data['lokasi'];
            $item->pabrik=$data['pabrik'];
            $item->seri=$data['seri'];
            $item->pengesahan=$data['pengesahan'];
            $item->tgl_msk=$data['tgl_msk'];
            $item->tgl_klr=$data['tgl_klr'];
            $item->update();
            return redirect()->back()->with('success','Berhasil Melakukan Update Data');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=Item::find($id);
        $item->delete();
        return redirect()->back()->with('delete','Berhasil Melakukan Delete Data');
    }

    public function export($id)
{
    $item = Item::findOrFail($id);

    // Memanggil class export dan export data berdasarkan ID
    return Excel::download(new ItemExport($id), 'item_' . $id . '.xlsx');
}
    
    public function export_excel(){
        $export = new Export;
        return Excel::download($export, 'Peralatan.xlsx');
    }

    public function import_excel(Request $request){
        // validasi
        $this->validate($request, [
            'file'=> 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalExtension();

        // upload ke folder file_item di dalam folder public
        $file->move('file_item', $nama_file);

        // import data
        Excel::import(new Import, public_path('/file_item/' .$nama_file));

        return redirect('/peralatan');
        
    }


    // public function search(Request $request) {
    //     $search = $request->search;
    //     $data = DB::table('items')
    //     ->where('alat', 'like', "%".$search."%")
    //     ->limit(10)
    //     ->get();
    //     $company = DB::table('companies')
    //     ->get();
    //     $try = DB::table('items')
    //     ->get();

    //     if($data->count()==0){
    //         return view('item.search',['kosong'=>true]);
    //     }

    //     return view('item.search', compact('search','data', 'company','try'),['kosong'=>false]);
    // }

    

}