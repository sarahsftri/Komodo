<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise_History extends Model
{
    protected $fillable = ['history_id', 'merchandise_id', 'quantity'];

    public function merchandise(){
        return $this->belongsTo(Merchandise::class);
    }

    public function history(){
        return $this->belongsTo(History::class);
    }
}
