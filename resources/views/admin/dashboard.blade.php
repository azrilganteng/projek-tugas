<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('kamu login') }}

                </div>
            </div>
            <table class="w-full text-sm text-center rtl:text-right text-black-500 my-3">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-500">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            <img src="path_to_image.jpg" alt="Apple MacBook Pro 17" class="w-10 h-10">
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>
                        <td class="px-3 py-3">
                            <button class="text-blue-600 hover:text-blue-900">Edit</button>
                            <button class="text-red-600 hover:text-red-900">Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lain di sini -->
                </tbody>
            </table>
        </div>
    </div>


    <div class="relative overflow-x-auto">
        
        
    </div>
    
    
    


</x-app-layout>
