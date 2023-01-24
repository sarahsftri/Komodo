<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'merchandise_id'];

    public function user(){
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function merchandise(){
        return $this->belongsTo(Merchandise::class);
    }
}
