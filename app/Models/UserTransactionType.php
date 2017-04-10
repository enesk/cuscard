<?php

namespace App\Models;


class UserTransactionType extends \Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function transaction() {
        return self::hasMany(UserTransaction::class);
    }
}
