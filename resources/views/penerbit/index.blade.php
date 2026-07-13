@include('layout.header')
<h3>Penerbit</h3>
<a href="{{ route('penerbit.create') }}" class="tombol">Tambah</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Penerbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($allPenerbit as $key => $p)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $p->nama_penerbit }}</td>
            <td>
                <form action="{{ route('penerbit.destroy', $p->id) }}" method="POST">
                    <a href="{{ route('penerbit.show', $p->id) }}" class="tombol">Detail</a>
                    <a href="{{ route('penerbit.edit', $p->id) }}" class="tombol">Edit</a>
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