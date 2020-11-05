<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author_info extends Model
{
    public function author()
    {
      return $this->belongsTo('App\Author');
    }
}
