<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
	    use HasFactory;
	protected $table = 'review';

	protected $fillable = ['konten','user_id','restoran_id','cafe_id','parent'];

	public function user(){
		return $this->belongsTo(User::class);
	}

	public function restoran(){
		return $this->belongsTo(Restoran::class);
	}

	public function cafe(){
		return $this->belongsTo(cafe::class);
	}


}
