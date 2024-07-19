<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900">
                    {{ __('kamu login') }}

                </div>
            </div>

            <div class="mb-8 ">
                <a
                    href="{{ route('admin.product.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white no-underline font-bold py-2 px-4 rounded cursor-pointer width: 130px; height: 40px; display: inline-flex; align-items: center; justify-content: center;">
                    TambahData</a>
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
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-500">
                            {{ $product->nama }}
                        </th>
                        <td class="px-6 py-4">
                            <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama }}" class="w-full h-48 object-cover">
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->harga }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->stok }}
                        </td>
                        <td class="px-3 py-3">
                           
                            <a  href="{{ route('admin.product.edit',$product->id) }}"
                            class="focus:outline-none text-white bg-green-700
                                hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg
                                 text-sm px-3 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Edit
                        
                            </a>

                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4
                                 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-red-600
                                 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus
                            </button>
                            </form>

                            
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
