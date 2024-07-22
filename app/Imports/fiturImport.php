<?php

namespace App\Imports;

use App\Models\products;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Storage;


class fiturImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        $gambarPath = 'images/' . $row['gambar'];
        return new products([

           
            // Sesuaikan dengan kolom pada database
            'nama'=> $row['nama'],
            'gambar'=> $gambarPath,
            'harga'=> $row['harga'],
            'stok'=> $row['stok'],
            // ...
        ]);
    }
}
