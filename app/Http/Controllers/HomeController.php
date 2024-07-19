<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $products = products::all();
        return view('admin.dashboard', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
        'nama'=>'required',
        'gambar'=>'required|image|mimes:png,jpg,jpeg',
        'harga'=>'required',
        'stok'=>'required'
        ]);

         //upload image
         $gambar = $request->file('gambar');
         $gambar->storeAs('public/images', $gambar->hashName());


        products::create([
            'nama' => $request->nama,
            'gambar' => 'storage/images/'.$gambar->hashName(),
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect(route('admin.dashboard'));

    }

    public function show(string $id)
    {
        //get product by ID
        $products = products::findOrFail($id);

        //render view with product
        return view('product.show', compact('products'));
    }

        public function edit(string $id)
        {
            //get product by ID
            $products = products::find($id);

            //render view with product
            return view('admin.product.edit', compact('products'));
        }

        
            

        public function update(Request $request, $id)
        {
            //validate form
            $request->validate([
                'nama'         => 'required|min:5',
                'gambar'       => 'image|mimes:jpeg,jpg,png|max:2048',
                'harga'        => 'required|numeric',
                'stok'         => 'required|numeric'
            ]);

            //get product by ID
            $products = products::find($id);

            //check if image is uploaded
            if ($request->hasFile('image')) {

                //upload new image
                $image = $request->file('images');
                $image->storeAs('public/products', $image->hashName());

                //delete old image
                storage::delete('public/'.$products->images);

                //update product with new image
                $products->update([
                    'nama'         => $request->nama,
                    'gambar'         => $image->hashName(),
                    'harga'         => $request->harga,
                    'stok'         => $request->stok
                ]);

            } else {

                //update product without image
                $products->update([
                    'nama'         => $request->nama,
                    'harga'         => $request->harga,
                    'stok'         => $request->stok
                ]);
            }
            
            return redirect()->route('admin.dashboard')->with(['success' => 'Data Berhasil Diubah!']);

        }
        

        // Method to show the edit form
    // public function edit($id)
    // {
    //     $productS = products::findOrFail($id);
    //     return view('admin.product.edit', compact('productS'));
    // }

    // // Method to update the product
    // public function update(Request $request, $id)
    // {
    //     $product = products::findOrFail($id);

    //     $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'harga' => 'required|numeric',
    //         'stok' => 'required|integer',
    //     ]);

    //     if ($request->hasFile('gambar')) {
    //         $imagePath = $request->file('gambar')->store('products', 'public');
    //         $product->image = $imagePath;
    //     }

    //     $product->nama = $request->input('nama');
    //     $product->harga = $request->input('harga');
    //     $product->stok = $request->input('stok');
    //     $product->save();

    // }
    



    public function destroy($id)
    {
        // Get product by ID
        $product = products::findOrFail($id);

        // Delete image from storage
        storage::delete('public/images/' . $product->gambar);

        // Delete product
        $product->delete();

        return redirect()->back();
    }
}