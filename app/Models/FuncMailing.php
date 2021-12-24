<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuncMailing extends Model
{
    use HasFactory;
    protected $table = 'func_mailings';
    protected $guarded = false;
}
