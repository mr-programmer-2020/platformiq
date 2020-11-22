<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{

    use SoftDeletes;
    
    
    protected $fillable  = ['title','content','category_id','featrued','slug'];  
    
    protected $dates = ['deleted_at']; 
    
    // this function to return the images from public folder by asset 
    public function getFeatruedAttribute($featrued)
    {
        return asset($featrued);
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag'); 
    }
}