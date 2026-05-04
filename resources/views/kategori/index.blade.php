 @include('layout.header')
 <h3>Kategori</h3>
    <a href="{{route('kategori.create')}}" class="tombol">Tambah</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          
        </tbody>
    </table>
@include('layout.footer')