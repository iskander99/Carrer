<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogCandidate extends Model
{
    use HasFactory;

    protected $table = 'catalog_cand';
    protected $guarded = false;
    public $timestamps = ['created_at'];
}
