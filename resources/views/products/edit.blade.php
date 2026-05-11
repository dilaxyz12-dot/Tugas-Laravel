<h1>Edit Produk</h1>

<form action="/products/update/{{ $product->id }}" method="POST">
    @csrf

    <input type="text" name="nama" value="{{ $product->nama }}">
    <br><br>

    <input type="number" name="harga" value="{{ $product->harga }}">
    <br><br>

    <input type="number" name="stok" value="{{ $product->stok }}">
    <br><br>

    <button type="submit">Update</button>
</form>