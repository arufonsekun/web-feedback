<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whiteboard extends Model
{
    protected $fillable = [
        'hash', 'name', 'user_id', 'data'
    ];

    public function user()
    {
        $this->hasOne('App\User');
    }

    public function stickers()
    {
        $this->hasMany('App\Sticker');
    }
}
