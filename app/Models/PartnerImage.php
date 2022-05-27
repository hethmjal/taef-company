<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartnerImage extends Model
{
    use HasFactory;
    protected $fillable = ['partner_id','path'];
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Partners::class,'partner_id');
    }

   

}