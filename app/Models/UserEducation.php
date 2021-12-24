<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserEducation extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users_edu';
    public $timestamps = false;
    protected $guarded = false;
}
