@extends('layouts.app')

@section('content')
<body>
    <div>
        <a href="{{url('pendaftaran/create')}}">Create</a>
    </div>
    <table border="2" style="float:center;">
        <tr>
            <thead>
                <th>No.</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Asal Sekolah</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </thead>
                <?php
                    $i=1;
                    foreach($pendaftaran as $data){
                ?>
                <td>{{$i++}}</td>
                <td>{{$data->nis}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jk}}</td>
                <td>{{$data->tempat_lahir}}</td>
                <td>{{$data->tgl_lahir}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->asal_sekolah}}</td>
                <td>{{$data->kelas}}</td>
                <td>{{$data->nama_jurusan}}</td>
                <td>
                    <a href="/pendaftaran/{{$data->id_pendaftaran}}/show">Detail</a>    
                    <a href="/pendaftaran/{{$data->id_pendaftaran}}/edit">Edit</a>    
                    <a href="{{route('pendaftaran.destroy',$data->id_pendaftaran)}}">Hapus</a>
                </td>    
        </tr>
        <?php }?>
    </table>
    <a href="/home">Kembali</a>
</body>
@endsection