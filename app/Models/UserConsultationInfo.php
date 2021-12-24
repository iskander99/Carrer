<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserConsultationInfo extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users_cons_info';
    public $timestamps = false;
    protected $guarded = false;

    public function region(){
       return $this->hasMany(ConsultationInfoRegion::class);
    }

    public function industry(){
        return $this->hasMany(ConsultationInfoIndustry::class);
    }
}
