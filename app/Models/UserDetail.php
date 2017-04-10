<?php

namespace App\Models;

class UserDetail extends \Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'street', 'houseno', 'zipcode', 'city', 'tel'
    ];

    public function user() {
        return self::belongsTo(User::class);
    }
}
