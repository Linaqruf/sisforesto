<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cafe extends Model
{
    use HasFactory;
    protected $table = 'cafes';
    protected $fillable = ['nama_cafe','alamat_cafe','open','close'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function review()
    {
    	return $this->hasMany(review::class);
    }

    public function fasilitasCafe(){
        return $this->hasMany(FasilitasCafe::class);
    }
    
    public function menuCafe(){
        return $this->hasMany(MenuCafe::class);
    }
}
