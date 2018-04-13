<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class token extends Model
{
    protected $table = 'tokens';
    protected $fillable = ['token'];
}
