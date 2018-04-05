<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antwoord extends Model
{
    protected $fillable = [ 'score', 'commentaar', 'locatieID'];
}