<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table='tb_pendaftaran';
    protected $primaryKey='id_pendaftaran';

    protected $fillable=['id_pendaftaran','nis','nama','jk','tempat_lahir',
                        'tgl_lahir','alamat','asal_sekolah','kelas','id_jurusan'];
    
    public function getJoinJurusan(){
        return $this->select('*')
        ->join('tb_jurusan','tb_pendaftaran.id_jurusan','=','tb_jurusan.id_jurusan')
        ->get();
    }
}
