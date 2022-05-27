<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsData extends Model
{
 
    use HasFactory;
    protected $fillable = ['image','username','user_sender','api_key'];

}