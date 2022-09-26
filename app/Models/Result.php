<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model {
    use HasFactory;

    protected $table = 'results';
    protected $guarded = ['id'];
    protected $with = ['quiz', 'user'];

    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
