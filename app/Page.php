<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Page extends \TCG\Voyager\Models\Page
{
    use Translatable;
    protected $translatable = ['title', 'body', 'meta_description', 'excerpt'];
}
