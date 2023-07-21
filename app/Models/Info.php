<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'pesan`',
    ];

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

}