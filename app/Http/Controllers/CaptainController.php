<?php

namespace App\Http\Controllers;

use App\Captain;
use App\Invitation;
use App\League;
use App\Mail\InvitationUsersTeam;
use App\Team;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;
use function PHPSTORM_META\type;

class CaptainController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user()->id;
        $leagueId = League::where('user_id', $user)->first()->id;
//        $league = League::find($leagueId)->players->pluck('name', 'id');

        $playersCollect = League::find($leagueId)->players()->where('team_id', 0)->orderBy('name', 'asc')->get();

        $players = $playersCollect->map(function ($item) {
            return ['id' => $item->id, 'name' => $item->name];
        });

        $teams = Team::where('league_id', $leagueId)->where('season', Carbon::now()->year)->orderBy('created_at', 'DESC')->with('members')->get();

        return view("captain.panel_captain")->with(array('players' => $players, 'leagueId' => $leagueId, 'teams' => $teams));
    }

    public function create(Request $request)
    {
        $user = Auth::user()->id;
        $league = League::where('user_id', $user)->first();

        DB::beginTransaction();

        try {

            $collection = new Collection($request->toArray());

            $filteredCollection = $collection->filter(function ($value, $key) {
                if ((strpos($key, 'select') !== false) && $value != null) {
                    return $value;
                }
            });

            $team = New Team();
            $team->league_id = $league->id;
            $team->name = $request->nameTeam;
            //            $team->url_logo =
            $team->save();

            $lastTeam = Team::where('league_id', $league->id)->get()->last();

            $captain = New Captain();
            $captain->league_id = $league->id;
            $captain->user_id = $request->captain;
            $captain->team_id = $lastTeam->id;
            $captain->captain = 1;
            $captain->save();

            $Subcaptain = New Captain();
            $Subcaptain->league_id = $league->id;
            $Subcaptain->user_id = $request->subCaptain;
            $Subcaptain->team_id = $lastTeam->id;
            $Subcaptain->save();

            if ($filteredCollection->isNotEmpty()) {
                $filteredCollection->each(function ($item, $key) use ($lastTeam, $league) {
                    $invitation = new Invitation(); //Guarda en Base de datos las invitaciones
                    $invitation->team_id = $lastTeam->id;
                    $invitation->user_id = $item;
                    $invitation->token = str_random(40);
                    $invitation->save();

                    $userEmail = User::find($item);

                    Mail::to($userEmail->email)->send(new InvitationUsersTeam($userEmail, $lastTeam, $league, $invitation));
                });
            }

            $captainUpdate = User::find($request->captain);
            $captainUpdate->team_id = $lastTeam->id;
            $captainUpdate->save();

            $subCaptainUpdate = User::find($request->subCaptain);
            $subCaptainUpdate->team_id = $lastTeam->id;
            $subCaptainUpdate->save();
            DB::commit();


            if (Mail::failures()) {
                return response()->json(['message' => 'Hubo algun problema al mandar los Emails', 'team' => $team]);
            }

            $team = Team::where('league_id', $league->id)->where('season', Carbon::now()->year)->with('members')->get()->last();


        } catch (Exception $e) {
            return response()->json(['message' => 'El Equipo no Fue agregado. Intentelo de nuevo mas tarde']);
        }

        return response()->json(['message' => 'El Equipo Fue agregado Exitosamente y los mails invitacion fueron enviados', 'team' => $team]);

    }


    public function panel_captain_admin(Request $request)
    {
        $teamId = Auth::user()->captain->team_id;
        $leagueId = Auth::user()->league_id;

        $playersTeam = Team::find($teamId)->members->count();

        $playersCollect = League::find($leagueId)->players()->where('team_id', 0)->orderBy('name', 'asc')->get();

        $players = $playersCollect->map(function ($item) {
            return ['id' => $item->id, 'name' => $item->name];
        });

        return view("captain.panel_captain_admin")->with(['playersTeam' => $playersTeam, 'playersCount' => 13 - $playersTeam , 'players' => $players]);

    }


}
