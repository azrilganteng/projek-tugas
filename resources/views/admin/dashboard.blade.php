<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900 flex justify-between items-center">
                    <div>
                        {{ __('Silahkan Masukan Data') }}
                    </div>
                    <div>
                        <a
                            href="{{ route('admin.product.create') }}" 
                            class="bg-blue-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                            Tambah Data
                        </a>
                        
                    </div>
                </div>
            </div>
       
        
            
            
            <table class="w-full text-sm text-center rtl:text-right text-black-500 my-3">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr class="text-center">
                        <th scope="col" class="px-6 py-3">
                            Nama Product
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stok
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>

                <tbody>
                     
                    @foreach ($products as $product)    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $product->nama }}
                        </th>
                        <td class="px-6 py-4 text-gray-900 dark:text-white">
                            <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama }}" class="w-full h-48 object-cover">
                        </td>
                        <td class="px-6 py-4  text-gray-900 dark:text-white">
                            {{ $product->harga }}
                        </td>
                        <td class="px-6 py-4 text-gray-900 dark:text-white">
                            {{ $product->stok }}
                        </td>
                        <td class="px-3 py-3 text-gray-900 dark:text-white">
                           
                        <div class="flex justify-center">
                        <!-- Tombol Edit -->
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="focus:outline-none text-sm mb-2 me-2 bg-blue-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                        Edit
                        </a>

                        <!-- Form Hapus -->
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="focus:outline-non bg-blue-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                        Hapus
                        </button>
                        </form>
                        </div>

                            
                        </td>
                    </tr>
                    @endforeach
                    <!-- Tambahkan baris lain di sini -->
                </tbody>
            </table>
        </div>
    </div>


    <div class="relative overflow-x-auto">


    </div>





</x-app-layout>

