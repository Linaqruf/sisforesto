<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
       use HasFactory;
        protected $table = 'menu_restoran';
    	protected $fillable = ['menu','restoran_id'];

	public function restoran(){
		return $this->belongsTo(Restoran::class);
	}

}
