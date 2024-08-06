<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total_score', 'readiness_level'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
