<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'users';
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'birth_day', 'citizenship', 'password', 'img', 'role'];
    public $timestamps = true;


    public function candidateInfo(){
        return $this->hasOne(UserCandidateInfo::class);
    }

    public function consultantInfo(){
        return $this->hasOne(UserConsultationInfo::class);
    }

    public function education(){
        return $this->hasMany(UserEducation::class);
    }

    public function experience(){
        return $this->hasMany(UserExperience::class);
    }

    public function vipProfile(){
        return $this->hasOne(TopVipProfile::class);
    }

    public function inSearchConsultant(){
        return $this->hasOne(SearchConsultant::class);
    }

    public function inSearchCandidate(){
        return $this->hasOne(SearchCandidate::class);
    }

    public function candConsConnectionForConsultant(){
        return $this->hasMany(CandConsConnection::class, 'cons_id');
    }

    public function candConsConnectionForCandidate(){
        return $this->hasOne(CandConsConnection::class, 'cand_id');
        //return $this->hasOneThrough(CandConsConnection::class, User::class, 'id', 'cand_id');
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }
}
