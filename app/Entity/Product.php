<?php
namespace App\Entity;

use Eloquent;

class Product extends Eloquent{
	protected $table = 'product';
	
	public function comments()
	{
		return $this->hasMany('App\Entuty\Comment');
	}
}