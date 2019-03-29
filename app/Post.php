<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Post extends Model
{
    use Translatable;
    protected $translatable = ['title', 'body', 'meta_description', 'excerpt'];
    protected $guarded = ['id'];

    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
}
