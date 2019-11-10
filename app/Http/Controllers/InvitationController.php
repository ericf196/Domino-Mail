<?php

namespace App\Http\Controllers;

use App\Invitation;
use App\Mail\InvitationUsersTeam;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;

class InvitationController extends Controller
{
    public function responseVerify($token, $user, $team)
    {
        try {
            $invitation = Invitation::where(array('token' => $token, 'status' => 'pendent', 'season' => Carbon::now()->year))->first();

            if (isset($invitation)) {
                $invitation->status = 'accept';
                $invitation->save();

                $userInvitation = Invitation::where(array('user_id' => $user, 'status' => 'pendent'));

                $userInvitation->each(function ($item, $key) {
                    $item->status = 'reject';
                    $item->save();
                });

                $user=User::find($user);
                $user->team_id=$team;
                $user->save();

                // return Usted pertenece a x equipo
            }


            // return Hubo un error comuniquese con el admin de su liga
            return $invitation;
        } catch (Exception $e) {
            // return Hubo un error comuniquese con el admin de su liga
        }


    }
}
