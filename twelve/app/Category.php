<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    //
    
    protected $fillable = ['name', 'slug'];
    
    /*Relation*/
    public function posts() {
        return $this->hasMany('App\Post');
    }
    
    public function setSlugAttribute($value) {
        
        if(empty($value)){
            $this->attributes['slug'] = Str::slug($this->attributes['name']);
        }
        return $this;
        
    }
}
