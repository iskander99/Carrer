<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandConsConnection extends Model
{
    use HasFactory;

    protected $table = 'cand_cons_connection';
    protected $guarded = false;

    public function candidateNew(){
        return $this->hasOne(User::class, 'id');
    }

}
