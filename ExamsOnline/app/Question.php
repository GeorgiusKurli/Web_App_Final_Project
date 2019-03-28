<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['test_id', 'user_id', 'question'];

	public function choices(){
		return $this->hasMany('App\Choice');
	}
}
