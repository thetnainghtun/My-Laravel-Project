<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','category_id','title','body'];

    public function user($value='')
    {
    	return $this ->belongsTo('App\User');
    }

    public function category($value='')
    {
    	return $this ->belongsTo('App\Category');
    }
}
