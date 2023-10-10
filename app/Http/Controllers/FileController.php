<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function open(Request $request){
        try {
            $fileName=$request->file;
            $fileName=preg_replace('/\.{2,}|[\/]/', '',$fileName);
           
            $filePath = storage_path('../public/data_file/'.$fileName); // Replace with your file path
            $fileContents = file_get_contents($filePath);

            return response()->make($fileContents, 200, [
                'Content-Type' => 'application/pdf',
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => 'File not found or could not be opened.'], 404);
        }
    }
    public function store($tujuan_upload,$file){
        $file->move($tujuan_upload,$file->getClientOriginalName());
    }
}
