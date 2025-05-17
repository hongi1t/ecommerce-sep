<x-app-layout>
    <div class="p-6">
        <a href="{{ route('products.create') }}" class="bg-blue-500 px-4 py-2 text-white rounded">+ Tambah Produk</a>
        <table class="mt-4 w-full border">
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>Rp{{ number_format($product->price, 0) }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Hapus?')" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if($product->file_path)
                            <a href="{{ asset('storage/' . $product->file_path) }}" target="_blank">Lihat File</a>
                        @else
                            Tidak ada file
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
