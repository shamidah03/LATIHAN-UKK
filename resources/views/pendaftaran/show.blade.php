@extends('layouts.app')

@section('content')
    @if(session('sukses'))\
        <div class="alert" role="alert">
        {{session('sukses')}}
        </div>
    @endif
</head>
<body>
    <form action="/pendaftaran/{{$pendaftaran->id_pendaftaran}}/show" method="POST">
    {{csrf_field()}}
    <div>
        <label for="">NIS Siswa</label>
        <input type="text" name="nis" value="{{$pendaftaran->nis}}" disabled>
    </div>
    <div>
        <label for="">Nama</label>
        <input type="text" name="nama" value="{{$pendaftaran->nama}}" disabled>
    </div>
    <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <input type="text" name="jk" value="{{$pendaftaran->jk}}" disabled>
    </div>
    <div>
        <label for="">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="{{$pendaftaran->tempat_lahir}}" disabled>
    </div>
    <div>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" value="{{$pendaftaran->tgl_lahir}}" disabled>
    </div>
    <div>
        <label for="">Alamat</label>
        <input type="text" name="alamat" value="{{$pendaftaran->alamat}}" disabled>
    </div>
    <div>
        <label for="">Asal Sekolah</label>
        <input type="text" name="asal_sekolah" value="{{$pendaftaran->asal_sekolah}}" disabled>
    </div>
    <div>
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="{{$pendaftaran->kelas}}" disabled>
    </div>
    <div class="form-group">
        <label for="">Jurusan</label>
        <select name="id_jurusan" disabled>
        <option  >--Pilih--</option> 
        @foreach($jurusan as $row)
            <option value="{{$row['id_jurusan']}}" {{ ($pendaftaran->id_jurusan == $row->id_jurusan) ? 'selected' : '' }}>{{ $row['nama_jurusan']}}</option>
        @endforeach
        </select>
    </div>
    <a href="/pendaftaran">Kembali</a>
    <a href="#">Download PDF</a>
    <a href="#">Print</a>
    </form>
</body>
@endsection