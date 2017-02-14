<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function page()
    {
        return $this->belongsTo('App\Page', 'page_id');
    }
}
