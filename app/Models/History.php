<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['user_id', 'type', 'total_quantity', 'total_price'];

    public function user(){
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function ticket_histories(){
        return $this->belongsToMany(Ticket::class, "ticket__histories", "history_id", "ticket_id");
    }

    public function merchandise_histories(){
        return $this->belongsToMany(History::class, "merchandise__histories", "history_id", "merchandise_id");
    }
}
