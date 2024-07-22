<?php

namespace App\Exports;

use App\Models\products;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return products::all(['id', 'nama', 'gambar', 'harga', 'stok']);
    }

    public function headings(): array
    {
        return [
            'id',
            'nama',
            'gambar',
            'harga',
            'stok'
        ];
    }
}
