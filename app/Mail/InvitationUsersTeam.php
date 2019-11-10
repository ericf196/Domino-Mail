<?php

namespace App\Mail;

use App\Invitation;
use App\League;
use App\Team;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * @property Team team
 * @property User user
 * @property League league
 * @property Invitation invitation
 */
class InvitationUsersTeam extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param Team $team
     * @param League $league
     * @param Invitation $invitation
     */
    public function __construct(User $user, Team $team, League $league,Invitation $invitation)
    {
        $this->user = $user;
        $this->team = $team;
        $this->league = $league;
        $this->invitation = $invitation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.invitationMail')->with(['team' => $this->team, 'user' => $this->user, 'league' => $this->league, 'invitation' => $this->invitation]);
    }
}
