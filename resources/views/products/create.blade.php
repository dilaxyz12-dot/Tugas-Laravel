<h1>Tambah Produk</h1>

<form action="/products/store" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama Produk">
    <br><br>

    <input type="number" name="harga" placeholder="Harga">
    <br><br>

    <input type="number" name="stok" placeholder="Stok">
    <br><br>

    <button type="submit">Simpan</button>
</form>