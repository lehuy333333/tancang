<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'cover_image',
        'client',
        'client_website',
        'finish_date',
        'short_description',
        'description',
        'homepage_actived',
        'service_id',
        'isEnglish'
    ];

    public function service(){
        return $this->belongsTo('App\Models\Service');
    }
}
