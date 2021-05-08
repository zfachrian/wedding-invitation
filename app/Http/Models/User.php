<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    // use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'password', 'remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}