<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; // 👈 IMPORTANTE

class Producto extends Model
{
    protected $fillable = ['nombre', 'precio', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}