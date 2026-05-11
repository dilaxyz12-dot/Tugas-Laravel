<h1>Data Produk</h1>

<a href="/products/create">Tambah Produk</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($products as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->harga }}</td>
        <td>{{ $p->stok }}</td>
        <td>
            <a href="/products/edit/{{ $p->id }}">Edit</a>

            |

            <a href="/products/delete/{{ $p->id }}">
                Hapus
            </a>
        </td>
    </tr>
    @endforeach
</table>