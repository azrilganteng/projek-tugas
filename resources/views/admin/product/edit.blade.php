<x-app-layout>
    <div>
    <div class="flex justify-center items-center mt-20 bg-gray-900">
    <h1 class="text-2xl mb-4 text-white font-extrabold">Update Ur Product</h1>
    </div>
    <div class="flex justify-center items-center mb-50 bg-gray-900">
        <div class="bg-gray-800 rounded-lg shadow-lg p-6 max-w-md w-full">
            

            <form action="{{ route('admin.product.create') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-white mb-2">Nama</label>
                    <input type="text" id="nama" name="nama" required class="shadow-lg max-w-md w-full block mb-10 bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="gambar" class="block text-sm font-medium text-white mb-2">Gambar</label>
                    <input type="file" id="gambar" name="gambar" required class="shadow-lg max-w-md w-full block mb-10 bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="harga" class="block text-sm font-medium text-white mb-2">Harga</label>
                    <input type="number" id="harga" name="harga" required class="shadow-lg max-w-md w-full block mb-10 bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="stok" class="block text-sm font-medium text-white mb-2">Stok</label>
                    <input type="text" id="stok" name="stok" required class="shadow-lg max-w-md w-full block mb-10 bg-gray-700 dark:text-white">
                </div>

                <div class="flex justify-start">
                <button type="submit" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
