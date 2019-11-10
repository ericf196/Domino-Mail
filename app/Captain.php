<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{

    protected $fillable = [
        'league_id',
        'user_id',
        'team_id',
        'captain',
        'season',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }


}
