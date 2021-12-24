<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchCandidate extends Model
{
    use HasFactory;
    protected $table = 'search_cand';
    protected $guarded = false;

}
