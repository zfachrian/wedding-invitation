<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rsvp extends Model
{
    public $table = "rsvp";
    protected $fillable = [
        'name', 
        'amount', 
        'email', 
    ];
}
