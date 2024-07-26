<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ProfileCustomer extends Model
{
    use HasFactory;

    protected $table = 'profile_customer';
    protected $fillable = [
        'user_id',
        'gender',
        'picture',
        'alamat',
        'provinsi',
        'kota',
        'kecamatan',
        'kode_pos',
        'no_hp',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
