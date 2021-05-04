<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    //
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
