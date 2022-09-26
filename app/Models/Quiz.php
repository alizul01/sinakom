<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model {
    use HasFactory;

    protected $table = 'quizzes';
    protected $guarded = ['id'];
    protected $with = ['modul'];

    public function modul() {
        return $this->belongsTo(Modul::class);
    }

    public function result() {
        return $this->hasMany(Result::class);
    }

    public function question() {
        return $this->hasMany(Question::class);
    }
}
