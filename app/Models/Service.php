<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'name', 
        'icon',
        'cover_image',
        'description',
        'homepage_actived',
        'isEnglish'
    ];

    public function projects(){
        return $this->hasMany('App\Models\Project','service_id','id');
    }

   
}
