<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author_info extends Model
{
    public $table = 'Authors_info';

    public function author()
    {
      return $this->belongsTo('App\Author');
    }
}
