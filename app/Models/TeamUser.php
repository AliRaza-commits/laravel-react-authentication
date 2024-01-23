<?php

namespace App\Models;

use Laravel\Jetstream\Team as JetstreamTeam;

class TeamUser extends JetstreamTeam
{
    protected $table = 'team_user';
}
