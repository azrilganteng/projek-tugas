<x-app-layout>
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-medium mt-3">Tambah Product</h1>

        <form action="{{ route('admin.product.create') }}" class="max-w-xl w-full mt-3" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" name="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5.5"
            >
                </div>
            

            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                <input type="file" name="gambar"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5.5">
            </div>

            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                <input type="number" name="harga" id="harga"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5.5">
            </div>

            <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Stok</label>
                    <input type="text" name="stok"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5.5">
            </div>



            <button type="submit"class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-5.5 text-center mt-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</x-app-layout>
