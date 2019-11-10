<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable
{
    use Notifiable;
    use ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'league_id', 'nombres', 'apellidos', 'city', 'state', 'cedula', 'url_image', 'telefono', 'team', 'association','user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function league()
    {
        return $this->hasOne(League::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'games', 'user_id', 'category_id')->withPivot('jj', 'jg', 'jp', 'pts_p', 'pts_n', 'avg', 'efec', 'pro','z', 'pro_g' , 'season')->wherePivot('season', Carbon::now()->year);
    }

    public function league_player()
    {
        return $this->belongsTo(League::class);
    }

    public function categories_individual()
    {
        return $this->belongsToMany(Category::class, 'games_individual', 'user_id', 'category_id');
    }

    public function captain()
    {
        return $this->hasOne(Captain::class)->where('season', Carbon::now()->year);
    }

    //Relacion vieja
    public function member()
    {
        return $this->belongsTo(Team::class);
    }

/*    public function members()
    {
        return $this->belongsToMany(Team::class)->withPivot('season');
    }*/

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }


}
