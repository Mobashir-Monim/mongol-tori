<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TeamMember;

class Team extends Model
{
    public function leader ()
    {
        return $this->belongsTo('App\TeamMember', 'leader_id');
    }

    public function members ()
    {
        return $this->hasMany('App\TeamMember');
    }
}
