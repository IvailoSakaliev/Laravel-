<?php
namespace App\Entity;

use Eloquent;

class Comment extends Eloquent{
	protected $table = 'comments';

	public function product()
	{
		return $this->belongsTo('App\Entity\Product');
	}
}