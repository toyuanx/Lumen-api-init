<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract, JWTSubject 
	{
	use Authenticatable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'name', 'email',
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [
	    'password', 'remember_token'
	];

	// jwt 需要实现的方法
	public function getJWTIdentifier() {
		return $this->getKey();
	}

	// jwt 需要实现的方法
	public function getJWTCustomClaims() {
		return [];
	}

}
