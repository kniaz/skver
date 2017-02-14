<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function slides()
    {
        return $this->hasMany('App\Slide', 'page_id');
    }
}
