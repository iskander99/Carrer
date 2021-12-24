<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SearchConsultant extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'search_cons';
    protected $guarded = false;

    public function userInfo(){

    }

}

