<x-app-layout>
    <main>
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-2xl font-medium mt-3">Edit Product</h1>

            <form action="{{ route('product.update', $products->id) }}" class="max-w-xl w-full mt-3" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" name="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5.5"
                        value="{{ old('nama', $products->nama) }}" placeholder="Masukkan Judul Product">
                    @error('nama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                    <input type="file" name="gambar"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5.5">
                    @error('gambar')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                    <input type="number" name="harga"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5.5"
                        value="{{ old('harga', $products->harga) }}" placeholder="Masukkan Harga Product">
                    @error('harga')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Stok</label>
                    <input type="number" name="stok"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5.5"
                        value="{{ old('stok', $products->stok) }}" placeholder="Masukkan Stock Product">
                    @error('stok')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-5.5 text-center mt-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    UPDATE
                </button>
            </form>
        </div>
    </main>
</x-app-layout>
