<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','city','status','message','service_id','facility_name','job_title'];
    protected $appends = ['service_title','statuss'];

    public function service()
    {
         return $this->belongsTo(Services::class,'service_id');
    }
    
    
    public function getService($id)
    {
        $service = Services::where('id',$id)
        ->select('id','image','created_at',LaravelLocalization::getCurrentLocale().'title'
        .' as title',LaravelLocalization::getCurrentLocale().'des'.' as des')->first();
         return $service->title;
    }
    public function getServiceTitleAttribute()
    {
        $service = Services::where('id',$this->service_id)
        ->select('id','image','created_at',LaravelLocalization::getCurrentLocale().'title'
        .' as title')->first();
         return $service->title;
    }
    
    public function getStatussAttribute()
    
    {
        return trans('dashboard.'.$this->status);
        
    }
    
}