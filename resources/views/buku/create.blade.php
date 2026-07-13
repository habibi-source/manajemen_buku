@include('layout.header')
<h3>Tambah Buku</h3>
<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" placeholder="Masukkan judul buku" required>
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang:</label>
        <input type="text" name="pengarang" id="pengarang" placeholder="Masukkan nama pengarang" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" placeholder="Masukkan tahun terbit" required>
    </div>
  
    <div class="form-group">
        <label for="kategori_id">Kategori:</label>
        <select name="kategori_id" id="kategori_id" required>
                        <option value="">Pilih Kategori</option>
                @foreach($kategori as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                @endforeach
    </select>
    </div>
    <div class="form-group">
        <label for="penerbit_id">Penerbit:</label>
        <select name="penerbit_id" id="penerbit_id" required>
                        <option value="">Pilih Penerbit</option>
                @foreach($allPenerbit as $p)
                    <option value="{{ $p->id }}">{{ $p->nama_penerbit }}</option>
                @endforeach
    </select>
    </div>
    <button type="submit">Simpan</button>
</form>
@include('layout.footer')