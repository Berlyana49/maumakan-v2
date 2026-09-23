<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Master Data Makanan</h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white border-0 shadow-sm rounded-lg overflow-hidden">
            <div class="flex justify-between items-center px-4 py-3 border-b border-gray-200">
                <h5 class="font-semibold">Daftar Makanan</h5>
                <a href="{{ route('foods.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded text-sm">Tambah Makanan</a>
            </div>
            <table class="bg-gray-100 border-0 border-gray-300 text-sm w-full">
                <thead>
                    <tr class="bg-gray-100 border-b border-t border-gray-300 text-sm">
                        <th class="py-2 px-4">Gambar</th>
                        <th class="py-2 px-4">Nama</th>
                        <th class="py-2 px-4">Kategori</th>
                        <th class="py-2 px-4">Harga</th>
                        <th class="py-2 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($foods as $food)
                    <tr class="border-b text-center text-sm">
                        <td class="py-2 px-4">
                            @if($food->image)
                                @if(str_contains('storage', $food->image) )
                                    <img src="{{ $food->image }}" alt="No image" class="w-16 h-16 object-cover mx-auto">
                                @else
                                    <img src="{{ asset('storage/' . $food->image) }}" alt="No image" class="w-16 h-16 object-cover mx-auto">
                                @endif
                            @else
                                <span class="text-gray-400 text-xs">No image</span>
                            @endif
                        </td>
                        <td class="py-2 px-4">{{ $food->name }}</td>
                        <td class="py-2 px-4 font-bold text-green-500">{{ $food->category }}</td>
                        <td class="py-2">{{ "Rp " . number_format($food->price) }}</td>
                        <td class="py-2 px-4">
                            <a href="{{ route('foods.edit', $food->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-2 py-1 rounded text-xs">Edit</a>
                            <form action="{{ route('foods.destroy', $food->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin hapus data ini?')" class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded text-xs">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="py-3 px-4 font-semibold">
                {{ $foods->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
