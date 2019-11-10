<?php

namespace App\Http\Controllers;

use App\League;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function userLogin()
    {
        return Auth::user();
    }

    public function leagueLogin()
    {
        $user = Auth::user()->id;
        $league = League::where('user_id', $user)->first()->id;

        return $league;
    }


}
