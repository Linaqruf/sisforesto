<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitasCafe extends Model
{
    use HasFactory;
            protected $table = 'fasilitas_cafe';
    	protected $fillable = ['konten_fasilitas','cafe_id'];

	public function cafe(){
		return $this->belongsTo(cafe::class);
	}
}
