<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable=['user_id','group_id'];
    
    public function role()
    {
        return $this->belongsTo(Group::class,'group_id');
    }
    use HasFactory;
}