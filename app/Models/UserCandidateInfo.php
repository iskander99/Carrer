<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserCandidateInfo extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users_cand_info';
    public $timestamps = false;
    protected $guarded = false;
}
