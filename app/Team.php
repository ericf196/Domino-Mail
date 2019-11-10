<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $fillable = [
        'league_id',
        'name',
        'url_logo',
        'season',
    ];

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function captains()
    {
        return $this->hasMany(Captain::class);
    }

    //Relacion vieja
    public function members()
    {
        return $this->hasMany(User::class);
    }

/*    public function members()
    {
        return $this->belongsToMany(User::class)->withPivot('season');
    }*/

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }

}
