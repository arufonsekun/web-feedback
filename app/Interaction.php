<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    protected $fillable = [ 
        'data', 'sticker_id', 'user_id'
    ];

    public function user()
    {
        $this->hasOne('App\User');
    }

    public function sticker()
    {
        $this->hasOne('App\Sticker');
    }
}
