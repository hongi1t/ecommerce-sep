<x-app-layout>
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nama Produk" required>
        <input type="number" name="price" placeholder="Harga" required>
        <textarea name="description" placeholder="Deskripsi"></textarea>

        <label>Upload File yang Akan Dicetak:</label>
        <input type="file" name="file" accept=".pdf,.jpg,.png" required>

        <button type="submit">Simpan</button>
    </form>
</x-app-layout>
