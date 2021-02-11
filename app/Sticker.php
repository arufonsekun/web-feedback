<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sticker extends Model
{
    protected $fillable = [
        'data', 'whiteboard_id'
    ];

    public function whiteboard()
    {
        $this->hasOne('App\Whiteboard');
    }
}
