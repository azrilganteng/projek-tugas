<?php

namespace App\Imports;

use App\Models\Products;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Pastikan mengembalikan instance dari model Product
        return new products([
            'id'     => $row['id'],
            'nama'   => $row['nama'],
            'gambar' => $row['gambar'],
            'harga'  => $row['harga'],
            'stok'   => $row['stok'],
        ]);
    }
}
