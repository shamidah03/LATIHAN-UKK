<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table="tb_jurusan";
    protected $primaryKey="id_jurusan";

    protected $fillable=['id_jurusan','nama_jurusan'];
}
