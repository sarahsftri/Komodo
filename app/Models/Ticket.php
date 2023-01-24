<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['price'];

    public function ticket_histories(){
        $this->belongsToMany(History::class, "ticket__histories", "ticket_id", "history_id");
    }
}
