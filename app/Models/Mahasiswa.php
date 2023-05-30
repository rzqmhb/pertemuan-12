<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable =[
        'nim',
        'nama',
        'foto',
        'tgl_lahir',
        'jurusan',
        'email',
        'no_hp',
        'kelas_id',
    ];
}
