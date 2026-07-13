@include('layout.header')
<h3>Daftar Buku</h3>
<a href="{{ route('buku.create') }}" class="tombol">Tambah</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($allBuku as $key => $b)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $b->judul }}</td>
            <td>{{ $b->pengarang }}</td>
            <td>{{ $b->tahun_terbit }}</td>
            <td>{{ $b->penerbit?->nama_penerbit }}</td>
            <td>{{ $b->kategori?->nama_kategori ?? '-' }}</td>
            <td>
                <form action="{{ route('buku.destroy', $b->id) }}" method="POST">
                    <a href="{{ route('buku.show', $b->id) }}" class="tombol">Detail</a>
                    <a href="{{ route('buku.edit', $b->id) }}" class="tombol">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="tombol">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('layout.footer')