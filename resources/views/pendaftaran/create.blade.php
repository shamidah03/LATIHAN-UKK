@extends('layouts.app')

@section('content')
    @if(session('sukses'))\
        <div class="alert" role="alert">
        {{session('sukses')}}
        </div>
    @endif
</head>
<body>
    <form action="/pendaftaran/store" method="POST">
    {{csrf_field()}}
    <div>
        <label for="">NIS Siswa</label>
        <input type="text" name="nis">
    </div>
    <div>
        <label for="">Nama</label>
        <input type="text" name="nama">
    </div>
    <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <select name="jk">
        <option  >--Pilih--</option> 
            <option value="Perempuan">p</option>
            <option value="Laki-Laki">L</option>
        </select>
    </div>
    <div>
        <label for="">Tempat Lahir</label>
        <input type="text" name="tempat_lahir">
    </div>
    <div>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir">
    </div>
    <div>
        <label for="">Alamat</label>
        <input type="text" name="alamat">
    </div>
    <div>
        <label for="">Asal Sekolah</label>
        <input type="text" name="asal_sekolah">
    </div>
    <div>
        <label for="">Kelas</label>
        <input type="text" name="kelas">
    </div>
    <div class="form-group">
        <label for="">Jurusan</label>
        <select name="id_jurusan">
        <option  >--Pilih--</option> 
        @foreach($jurusan as $row)
            <option value="{{$row['id_jurusan']}}">{{ $row['nama_jurusan']}}</option>
        @endforeach
        </select>
    </div>
    <button type="submit">Simpan</button>
    <a href="/pendaftaran">Kembali</a>
    </form>
</body>
@endsection