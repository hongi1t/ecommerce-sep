<x-app-layout>
    <div class="p-6">
        <h2>Edit Produk</h2>
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf @method('PUT')
            <input name="name" value="{{ $product->name }}" required><br>
            <input name="price" type="number" value="{{ $product->price }}" required><br>
            <textarea name="description">{{ $product->description }}</textarea><br>
            <button type="submit">Update</button>
        </form>
    </div>
</x-app-layout>
