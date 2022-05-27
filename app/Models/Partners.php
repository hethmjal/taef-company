<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;
    protected $fillable = ['arname','enname','logo','link','ardes','endes','link'];

    
    public function images()
    {
        return $this->hasMany(PartnerImage::class,'partner_id');
    }
}