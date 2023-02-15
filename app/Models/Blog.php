<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'publish_at',
        'cover_image',
        'title',
        'content',
        'is_actived',
        'user_id',
        'type_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function type(){
        return $this->belongsTo('App\Models\TypeBlog');
    }
}
