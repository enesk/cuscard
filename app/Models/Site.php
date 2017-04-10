<?php

namespace App\Models;


class Site extends \Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'domain',
    ];

    public function users() {
        return self::hasMany(User::class);
    }
}
