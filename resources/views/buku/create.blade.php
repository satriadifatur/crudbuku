@include('layout.header')
@include('error')
        <h3>Buat Buku</h3>
        <form action="{{ route('buku.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Judul Buku:</label>
                <input type="text" name="judul" id="" placeholder="Masukkan judul buku" value="{{ old('judul') }}">
            </div>
            <div class="form-group">
                <label for="">Pengarang:</label>
                <input type="text" name="pengarang" id="" placeholder="Masukkan nama pengarang" value="{{ old('pengarang') }}">
            </div>
            <div class="form-group">
                <label for="">Tahun Terbit:</label>
                <input type="text" name="tahun_terbit" id="" placeholder="Masukkan tahun terbit" value="{{ old('tahun_terbit') }}">
            </div>
            <div class="form-group">
                <label for="">Penerbit:</label>
                <select name="penerbit_id" id="">
                    <option value="">--Pilih Penerbit--</option>
                    @foreach ($penerbit as $p )
                    <option value="{{ $p->id }}" {{ old('penerbit_id') == $p->id ? 'selected' : ''}}>{{ $p->nama_penerbit }}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Kategori:</label>
                <select name="kategori_id" id="">
                    <option value="">--Pilih Kategori--</option>
                    @foreach ($kategori as $k )
                    <option value="{{ $k->id }}"  {{ old('kategori_id') == $k->id ? 'selected' : ''}}>{{ $k->nama_kategori }}</option>
                        
                    @endforeach
                </select>
            </div>
            <button type="submit" class="tombol">Submit</button>
        </form>
@include('layout.footer')