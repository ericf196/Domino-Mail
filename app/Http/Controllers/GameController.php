<?php

namespace App\Http\Controllers;

use App\League;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function super_polla()
    {
        return view("adminlte::contenido.super_polla");
    }

    public function tabla_super_polla(Request $request)
    {
        $juegos = $request->get('cant_juegos');
        $idUserAdmin = Auth::user()->id;
        $leagueId = League::where('user_id', $idUserAdmin)->first()->id;

        $jugadores = User::where('league_id', '=', $leagueId)->orderBy("name", "asc")->get();
        return view("juegos.super_polla_tabla")->with(array('juegos' => $juegos, 'jugadores' => $jugadores));
    }

    public function batalla_escuderia()
    {

        $leagueId = $this->leagueLogin();
//        $response=League::where('user_id', $leagueId)->with('members', function ($query) {
//            $query->where('created_at','');
//        });

//        $response = League::where('user_id', $leagueId)->filter(function ($item) {
//            return $item->completed < 100;
//        })->count()


        $teams = Team::where('league_id', $leagueId)->orderBy('name', 'ASC')->has('members', '>=', '3')->get();

//        foreach ($teams as $team) {
//            echo '-' . $team->members->count();
//        }

//        dd();

        return view("adminlte::contenido.batalla_escuderia")->with(['teams' => $teams]);
    }

    public function json_batalla_escuderia($id)
    {

        $leagueId = $this->leagueLogin();

        $team = User::where('team_id', $id)->orderBy('name', 'ASC')->get();

        return response()->json(['data' => $team]);
    }

    public function tabla_batalla_escuderia(Request $request)
    {

        $seleccionados=$request->all();
        $juegos=5;

        return view("juegos.batalla_escuderia_tabla")->with(['juegos' => $juegos, 'seleccionados' => $seleccionados]);

    }


}
