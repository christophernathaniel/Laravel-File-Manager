<?php

namespace App\Models\Traits;

trait RelatesToTeams
{
    public function scopeForCurrentTeam($query)
    {
        if (auth()->user()->currentTeam) {
            $query->where('team_id', auth()->user()->currentTeam->id);
        }
    }
}
