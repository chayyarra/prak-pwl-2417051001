<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';

    // Izinkan kolom-kolom ini diisi secara mass assignment
    protected $fillable = [
        'nama',
        'npm',
        'nim',
        'kelas_id',
    ];

    // Relasi ke Model Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    // Method custom getUser() untuk join tabel
    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas')
                    ->get();
    }
}