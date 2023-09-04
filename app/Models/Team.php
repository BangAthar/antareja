<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'team_name',
    ];

    public function nilaipbb(){
        return $this->hasOne(Nilaipbb::class, 'team_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'team_id');
    }
}
