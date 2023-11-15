<?php

namespace App\Http\Controllers;

use App\Exports\Export;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\ItemExport;
use App\Imports\Import;
use App\Models\Company;
use App\Models\Item;
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
        $per_page = 10;
        $items = Item::paginate($per_page);
        return view('user.peralatan', compact('items', 'per_page'));
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
            'alat' => 'required|max:100',
            'lokasi' => 'required|max:100',
            'pabrik' => 'required|max:100',
            'seri' => 'required|max:100',
            'pengesahan' => 'required|max:100',
            'tgl_msk' => 'required',
            'tgl_klr' => 'required',
            'company_id' => 'required',
            'file' => 'nullable|mimes:pdf', // Make file upload optional
        ], [
            'alat.required' => 'Kategori Alat Wajib Diisi',
            'lokasi.required' => 'Lokasi Wajib Diisi',
            'pabrik.required' => 'Lokasi Wajib Diisi',
            'seri.required' => 'No Seri Wajib Diisi',
            'pengesahan.required' => 'No Pengesahan Wajib Diisi',
            'tgl_msk.required' => 'Tanggal Masuk Wajib Diisi',
            'tgl_klr.required' => 'Tanggal Keluar Wajib Diisi',
            'company_id.required' => 'File Wajib Diupload',
            'file.mimes' => 'File harus berformat PDF',
        ]);

        $data = [
            'alat' => $request->alat,
            'lokasi' => $request->lokasi,
            'pabrik' => $request->pabrik,
            'seri' => $request->seri,
            'pengesahan' => $request->pengesahan,
            'tgl_msk' => $request->tgl_msk,
            'tgl_klr' => $request->tgl_klr,
            'company_id' => $request->company_id,
        ];

        if ($request->hasFile('file')) {
            $rand_generator = Str::random(8);
            $file_control = new FileController();
            $tujuan_upload = 'data_file';
            $new_filename = $rand_generator . '_' . $request->file->getClientOriginalName();
            $file_control->store($tujuan_upload, $request->file('file'), $new_filename);

            $data['file'] = $new_filename;
        }

        Item::create($data);

        return redirect()->back()->with('success', 'Berhasil Menambahkan Data');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $per_page = 10;
        $data = Company::findOrFail($id);
        $try = Item::where('company_id', '=', $id)->paginate($per_page);
        return view('item.detail', compact('try', 'data', 'per_page'));
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
            'alat' => 'required|max:100',
            'lokasi' => 'required|max:100',
            'pabrik' => 'required|max:100',
            'seri' => 'required|max:100',
            'pengesahan' => 'required|max:100',
            'tgl_msk' => 'required',
            'tgl_klr' => 'required',
            'company_id' => 'required',
            'file' => 'nullable|mimes:pdf', // Make file upload optional
        ], [
            'alat.required' => 'Kategori Alat Wajib Diisi',
            'lokasi.required' => 'Lokasi Wajib Diisi',
            'pabrik.required' => 'Lokasi Wajib Diisi',
            'seri.required' => 'No Seri Wajib Diisi',
            'pengesahan.required' => 'No Pengesahan Wajib Diisi',
            'tgl_msk.required' => 'Tanggal Masuk Wajib Diisi',
            'tgl_klr.required' => 'Tanggal Keluar Wajib Diisi',
        ]);
        if ($request->hasFile('file')) {

            $rand_generator = Str::random(8);
            $file_control = new FileController();
            $tujuan_upload = 'data_file';
            $new_filename = $rand_generator . '_' . $request->file->getClientOriginalName();
            $file_control->store($tujuan_upload, $request->file('file'), $new_filename);
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
            $item = Item::find($id);
            $item->alat = $data['alat'];
            $item->lokasi = $data['lokasi'];
            $item->pabrik = $data['pabrik'];
            $item->seri = $data['seri'];
            $item->pengesahan = $data['pengesahan'];
            $item->tgl_msk = $data['tgl_msk'];
            $item->tgl_klr = $data['tgl_klr'];
            $item->file = $data['file'];
            $file_control->delete($item->getOriginal()['file']);
            $item->update();
            return redirect()->back()->with('success', 'Berhasil Melakukan Update Data');

        } else {

            $data = [
                'alat' => $request->alat,
                'lokasi' => $request->lokasi,
                'pabrik' => $request->pabrik,
                'seri' => $request->seri,
                'pengesahan' => $request->pengesahan,
                'tgl_msk' => $request->tgl_msk,
                'tgl_klr' => $request->tgl_klr,
            ];

            $item = Item::find($id);
            $item->alat = $data['alat'];
            $item->lokasi = $data['lokasi'];
            $item->pabrik = $data['pabrik'];
            $item->seri = $data['seri'];
            $item->pengesahan = $data['pengesahan'];
            $item->tgl_msk = $data['tgl_msk'];
            $item->tgl_klr = $data['tgl_klr'];
            $item->update();
            return redirect()->back()->with('success', 'Berhasil Melakukan Update Data');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect()->back()->with('delete', 'Berhasil Melakukan Delete Data');
    }


    public function deleteFile($id)
    {
        $item = Item::findOrFail($id);

        // Hapus file fisik
        $fileControl = new FileController();
        $fileControl->delete($item->file);

        // Hapus referensi file dari database
        $item->file = null;
        $item->save();

        return redirect()->back()->with('success', 'File berhasil dihapus');
    }

    public function export($companyId)
    {
        return Excel::download(new ItemExport($companyId), 'Items.xlsx');
    }

    public function export_excel()
    {
        $export = new Export;
        return Excel::download($export, 'Peralatan.xlsx');
    }

    public function cetak_pdf()
    {
        $items = Item::all(); // or retrieve your data as needed
        $pdf = PDF::loadView('user.peralatan_pdf', ['items' => $items]);
        return $pdf->stream();
    }

    public function exportPdf($id)
    {
        $items = Item::where('company_id', $id)->get();
        $data = Company::findOrFail($id);

        $pdf = PDF::loadView('item.detail_pdf', ['items' => $items, 'data' => $data]);

        return $pdf->stream('peralatan.pdf');
    }


    public function import_excel(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');

        // Menggunakan new Import($id) untuk memberikan nilai $id ke konstruktor Import
        Excel::import(new Import($id), $file);

        return redirect()->back()->with('success', 'Data berhasil diimport.');
    }







    // public function uploadFile(Request $request, $id) {
    //     $request->validate([
    //         'file' => 'required|mimes:pdf|max:2048',
    //     ]);

    //     if ($request->hasFile('file')) {
    //         $file = $request->file('file');
    //         $fileName = time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('/uploads'), $fileName);

    //         $item = Item::findOrFail($id);
    //         $item->file = $fileName;
    //         $item->save();

    //         return redirect()->back()->with('success', 'File uploaded successfully.');
    //     } else {
    //         return redirect()->back()->with('error', 'No file uploaded.');
    //     }
    // }



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