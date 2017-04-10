<?php

namespace App\Models;


class UserTransaction extends \Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount', 'type_id',
    ];

    public function users() {
        return self::belongsTo(User::class);
    }

    public function type() {
        return self::hasOne(UserTransactionType::class);
    }
}
