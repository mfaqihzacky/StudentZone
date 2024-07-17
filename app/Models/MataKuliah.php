<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'jadwal_id'];

    public function jadwals(){
        return $this->hasMany(Jadwal::class);
    }

    public function materis()
    {
        return $this->hasMany(Materi::class, 'mata_kuliah_id');
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'mata_kuliah_id');
    }

    public function pengumumen()
    {
        return $this->hasMany(Pengumuman::class, 'mata_kuliah_id');
    }

    public function anggota()
    {
        return $this->belongsToMany(User::class)->withPivot('nilai');
    }
}
