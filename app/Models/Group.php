<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = ['admin_id','roles','name','roles'];
    
    protected $casts = [
        'roles'=>'array',
        'users'=>'array'
    ];

    public function usersNumber()
    {
        return $this->hasMany(UserRole::class,'group_id');
    }
}