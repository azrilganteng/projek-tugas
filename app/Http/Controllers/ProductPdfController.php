<?php

namespace App\Http\Controllers;

use App\Models\products; // Pastikan baris ini ada
use PDF; // Pastikan alias PDF tersedia

class ProductPdfController extends Controller
{
    public function export()
    {
        $products = products::all();

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.product.pdf', compact('products'));

        return $pdf->download('products.pdf');
    }
}
