<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopVipProfile extends Model
{
    use HasFactory;
    protected $table = 'top_vip_cons';
    protected $guarded = false;

    public function docs(){
        return $this->hasMany(TopVipProfileFiles::class);
    }
}
