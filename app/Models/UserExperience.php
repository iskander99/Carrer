<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserExperience extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users_exp';
    public $timestamps = false;
    protected $guarded = false;
}
