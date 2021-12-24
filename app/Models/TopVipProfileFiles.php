<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopVipProfileFiles extends Model
{
    use HasFactory;
    protected $table = 'top_vip_cons_files';
    protected $guarded = false;
    public $timestamps = false;
}
