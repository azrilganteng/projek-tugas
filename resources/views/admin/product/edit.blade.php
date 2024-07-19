<!-- resources/views/products/edit.blade.php -->
<x-app-layout>
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-medium mt-3">Edit Product</h1>

        <form action="{{ route('product.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                        
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label class="font-weight-bold">nama</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="nama" value="{{ old('nama', $products->nama) }}" placeholder="Masukkan Judul Product">
            
                <!-- error message untuk title -->
                @error('nama')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label class="font-weight-bold">gambar</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="gambar">
            
                <!-- error message untuk image -->
                @error('gambar')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">harga</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="harga" value="{{ old('harga', $products->harga) }}" placeholder="Masukkan Harga Product">
                    
                        <!-- error message untuk price -->
                        @error('harga')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok', $products->stok) }}" placeholder="Masukkan Stock Product">
                    
                        <!-- error message untuk stock -->
                        @error('stok')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <a href="admin.dashboard">
            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
            </a>
            
        </form> 
    </div>
</x-app-layout>
