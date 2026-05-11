@include('layout.header')
<h3>Edit Kategori</h3>
<form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" name="nama_kategori" id="nama_kategori" value="{{ $kategori->nama_kategori }}" placeholder="Masukkan nama kategori" required>
    </div>
    <button type="submit">Update</button>
</form>

@include('layout.footer')