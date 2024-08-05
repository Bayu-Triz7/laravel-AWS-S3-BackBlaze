<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'test_storage';

        // Proses Upload File ke Object Storage
        $result = Storage::disk('s3')->putFileAs($tujuan_upload, $file, $file->getClientOriginalName());
        // Proses merubah visibility file agar bisa di akses secara public
        Storage::disk('s3')->setVisibility($tujuan_upload . "/" . $file->getClientOriginalName(), "public");
        // Proses mengambil URL hasil upload
        echo Storage::disk('s3')->url($tujuan_upload . "/" . $file->getClientOriginalName());
        echo '<br>';

        print_r($result);
        die;

    }
}
