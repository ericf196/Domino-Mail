<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{

    protected $fillable = [
        'team_id',
        'user_id',
        'status',
        'token',
        'season',
    ];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function player()
    {
        return $this->belongsTo(User::class);
    }


}
