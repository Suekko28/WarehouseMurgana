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
use Illuminate\Support\Facades\Storage;


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
            return redirect()->back()->with('success','Berhasil Melakukan Update Data');

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

    public function export($companyId)
    {
        return Excel::download(new ItemExport($companyId), 'Items.xlsx');
    }
    
    public function export_excel(){
        $export = new Export;
        return Excel::download($export, 'Peralatan.xlsx');
    }

    public function import_excel(Request $request){
        // Validate the uploaded file
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx',
        ]);
    
        $file = $request->file('file');
        $company_id = $request->input('company_id'); // Get the selected company ID
    
        // Generate a unique filename for the uploaded file
        $nama_file = $file->hashName();
    
        // Store the file temporarily
        $path = $file->storeAs('public/excel/', $nama_file);
    
        // Create an instance of your import class, passing the company ID
        $import = new Import($company_id);
    
        // Import the data from the uploaded file
        Excel::import($import, storage_path('app/public/excel/' . $nama_file));
    
        // Redirect to the appropriate page
        return redirect('/perusahaan/detail/' . $company_id)->with('success', 'Data berhasil diimpor');
    }

    public function uploadFile(Request $request, $id)
{
    // Validate the file
    $request->validate([
        'file' => 'required|mimes:pdf|max:2048', // Adjust max file size if needed
    ]);

    // Process the file upload
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        if ($file->isValid()) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            // Rest of the code...
        } else {
            return redirect()->back()->with('error', 'Invalid file.');
        }
    } else {
        return redirect()->back()->with('error', 'No file uploaded.');
    }

    // Save file information to the database
    $item = Item::findOrFail($id);
    $item->file = $fileName;
    $item->save();

    return redirect()->back()->with('success', 'File uploaded successfully.');
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