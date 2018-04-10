<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antwoord extends Model
{
    protected $table = 'antwoorden';
    protected $fillable = [ 'Score', 'Commentaar', 'LocatieId'];
}