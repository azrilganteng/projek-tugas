<x-app-layout>
    <div class="flex flex-col justify-center items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 shadow-lg rounded-lg p-8 mt-20">
                <h1 class="text-2xl font-medium text-white font-extrabold mb-6 text-center">TARUH PERASAAN ANDA DI SINI</h1>
        
                @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" class="mb-4">
        @csrf
        <input type="file" name="file" required class="block mb-2">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Import</button>
    </form>
                    
                </form>
            </div>
        </div>
        
    </div>
</x-app-layout>

