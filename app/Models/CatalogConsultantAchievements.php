<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogConsultantAchievements extends Model
{
    use HasFactory;

    protected $table = 'catalog_cons_achievs';
    public $timestamps = false;
    protected $guarded = false;
}
