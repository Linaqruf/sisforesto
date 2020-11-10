<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuCafe extends Model
{
    use HasFactory;
        protected $table = 'menu_cafe';
    	protected $fillable = ['menu','cafe_id'];

	public function cafe(){
		return $this->belongsTo(Cafe::class);
	}
}
