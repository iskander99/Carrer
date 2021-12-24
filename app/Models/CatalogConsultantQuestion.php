<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogConsultantQuestion extends Model
{
    use HasFactory;

    protected $table = 'catalog_cons_quest';
    public $timestamps = false;
    protected $guarded = false;
}
