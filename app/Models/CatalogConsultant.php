<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogConsultant extends Model
{
    use HasFactory;

    protected $table = 'catalog_cons';
    protected $guarded = false;
    public $timestamps = ['created_at'];
}
