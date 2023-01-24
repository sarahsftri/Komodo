<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['history_id', 'amount'];

    public function history(){
        return $this->belongsTo(History::class, "history_id", "id");
    }
}
