<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Searches extends Model
{
    use HasFactory;
    protected $fillable = ['artitle','entitle','image','file','ardes','endes'];

}