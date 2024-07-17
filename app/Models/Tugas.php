<?php

namespace App\Models;

use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tugas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }

    public function anggota(){
        return $this->belongsToMany(User::class);
    }
}
