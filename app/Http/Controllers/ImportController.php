<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\fiturImport;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,txt', // Sesuaikan dengan format file yang diinginkan
        ]);

        // Ambil file
        $file = $request->file('file');

        // Proses impor data (gunakan package seperti Maatwebsite Excel untuk Excel/CSV)
        Excel::import(new fiturImport, $file);

        // Redirect atau beri feedback
        return back();
    }
}
