<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserGame extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','game','console_id','start','end','review','rating'];


    public function consoles(){
        return $this->belongsTo('App\Models\Console','console_id','id');
    }
}
