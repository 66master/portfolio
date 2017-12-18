<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

	protected $post = 'post';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imageUrl', 'category', 'type', 'title', 'description',
    ];

}