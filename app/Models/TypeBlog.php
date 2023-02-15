<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBlog extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'name',
    ];

    public function blogs(){
        return $this->hasMany('App\Models\Blog','type_id','id');
    }
}
