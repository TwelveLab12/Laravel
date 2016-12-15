<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    // Définit les champs que l'on peut modifier manuellement
    protected $fillable = ['title', 'slug', 'content', 'online', 'category_id', 'tags_list'];
    
    
    public static $rules = [ 
            'title' => 'required|min:5',
            'content' => 'required|min:10'
    ];
    /*Relation*/
    public function category() {
        return $this->belongsTo('App\Category');
    }
    
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
    
    
    public function getTagsListAttribute() {
        if($this->id){
            return $this->tags->pluck('id')->toArray();
        }
    }
    public function setTagsListAttribute($value) {
//        dd($value);
        $this->tags()->sync($value);
        return $this;
    }
    
    
    
    /*Scope*/
    public function scopePublished($query) {
        return $query->with(['category' => function($query){
            $query->select('name');
        }])->where('online', 1)->get();
    }
    
    public function scopeSearchByTitle($query, $q) {
        return $query->where('title', 'LIKE', '%' . $q . '%')->get();
    }
    
    public function getTitleAttribute($value) {
        return $value;
    }
    
    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
        return $this;
    }
    
    public function setSlugAttribute($value) {
        
        if(empty($value)){
            $this->attributes['slug'] = Str::slug($this->attributes['title']);
        }
        return $this;
        
    }
    
    public function getDates() {
        return ['created_at', 'updated_at', 'published_at'];
    }
    
    /*
     * Si l'on applique cette fonction, on doit modifier toutes les routes
    public function getRouteKey() {
        return $this->slug();
    }
     * 
     */
    
}
