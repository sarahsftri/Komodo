<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $fillable = ['name', 'price', 'detail', 'stock', 'image'];

    public function merchandise_histories(){
        return $this->belongsToMany(History::class, "merchandise__histories", "merchandise_id", "history_id");
    }
}
