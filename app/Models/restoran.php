<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restoran extends Model
{
    use HasFactory;
    protected $table = 'restaurants';
    protected $fillable = ['nama_restoran','alamat_restoran','open','close'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function review()
    {
    	return $this->hasMany(Review::class);
    }

    public function fasilitas(){
        return $this->hasMany(Fasilitas::class);
    }
    
    public function menu(){
        return $this->hasMany(Menu::class);
    }

}
