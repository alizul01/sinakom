<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    use HasFactory;

    protected $table = 'questions';
    protected $guarded = ['id'];
    protected $with = ['quiz'];

    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }

    public function answer() {
        return $this->hasMany(Answer::class);
    }
}
