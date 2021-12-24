<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ConsultationInfoIndustry extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'cons_info_industry';
    public $timestamps = false;
    protected $guarded = false;
}
