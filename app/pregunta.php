<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    public $table = "pregunta";
    public $primarykey = "id";
    public $timestamp = false;
    public $guarded = [];
};
