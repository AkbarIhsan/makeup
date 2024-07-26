<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mkartist;

class ProfileMua extends Model
{
    use HasFactory;
    protected $table = 'profile_mua';
    protected $fillable = [
        'mua_id',
        'gender',
        'picture',
        'alamat',
        'provinsi',
        'kota',
        'kecamatan',
        'kode_pos',
        'no_hp',
        'deskripsi',
    ];

    public function mkartist(){
        return $this->belongsTo(Mkartist::class, 'mua_id', 'id');
    }
}
