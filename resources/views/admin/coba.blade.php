{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10 mb-10">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">
                <div class="bg-white shadow-md rounded-lg p-8">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">IMAGE</label>
                            <input type="file" class="form-control @error('image') border-red-500 @enderror" name="image">
                            
                            @error('image')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">TITLE</label>
                            <input type="text" class="form-control @error('title') border-red-500 @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Product">
                            
                            @error('title')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">DESCRIPTION</label>
                            <textarea class="form-control @error('description') border-red-500 @enderror" name="description" rows="5" placeholder="Masukkan Description Product">{{ old('description') }}</textarea>
                            
                            @error('description')
                                <div class="text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="flex -mx-2 mb-4">
                            <div class="w-1/2 px-2">
                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2">PRICE</label>
                                    <input type="number" class="form-control @error('price') border-red-500 @enderror" name="price" value="{{ old('price') }}" placeholder="Masukkan Harga Product">
                                    
                                    @error('price')
                                        <div class="text-red-500 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-1/2 px-2">
                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2">STOCK</label>
                                    <input type="number" class="form-control @error('stock') border-red-500 @enderror" name="stock" value="{{ old('stock') }}" placeholder="Masukkan Stock Product">
                                    
                                    @error('stock')
                                        <div class="text-red-500 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">SAVE</button>
                        <button type="reset" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</body>
</html> --}}
