<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['artitle','enbody','entitle','arbody','image','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}