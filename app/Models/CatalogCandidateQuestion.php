<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogCandidateQuestion extends Model
{
    use HasFactory;

    protected $table = 'catalog_cand_quest';
    public $timestamps = false;
    protected $guarded = false;
}
