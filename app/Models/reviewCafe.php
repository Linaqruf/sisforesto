<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviewCafe extends Model
{
    use HasFactory;
    protected $table = 'review_cafe';
    protected $fillable = ['konten','user_id','cafe_id','parent'];

    public function user(){
		return $this->belongsTo(User::class);
	}

	public function cafe(){
		return $this->belongsTo(Cafe::class);
	}
}
