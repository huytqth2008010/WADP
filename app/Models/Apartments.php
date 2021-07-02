<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Apartments extends Model
{

    protected $table = "apartments";
    protected $fillable = ["name","address","price","general_information","detail","image","status"];
}
