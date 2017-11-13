<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $primaryKey = 'id';
    public $fillable = array('name', 'description', 'imgUrl');
    

    public function questions()
    {
    	return $this->belongsToMany('App\Questions', 'question_categories', 'category_id', 'question_id');
    }

    public function subCategories()
    {

    	return $this->hasMany('App\SubCategory');
    }
}
