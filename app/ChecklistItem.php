<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChecklistItem extends Model
{
    //
    public function checklist()
    {
        return $this->belongsTo('App\Checklist');
    }
}
