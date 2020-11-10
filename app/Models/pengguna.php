<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';
    protected $fillable = ['nama_pengguna','alamat_pengguna','email_pengguna','telp_pengguna','avatar','user_id'];

    public function getAvatar()
    {
    		if(!$this->avatar){
    			return asset('/storage/images/default.png');
    		}

    		return asset('/storage/images/'.$this->avatar);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
