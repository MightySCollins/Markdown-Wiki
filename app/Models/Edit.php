<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Edit extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'post_id', 'user_id', 'content',
    ];
    
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
    
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
