<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    protected $table = 'categories';
    protected $fillable = [
        'name', 'slug', 'user_id',
    ];
    
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
