<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model {
    use HasFactory;

    protected $table = 'moduls';
    protected $guarded = ['id'];
    protected $with = ['category', 'level', 'submodul'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function level() {
        return $this->belongsTo(Level::class);
    }

    public function submodul() {
        return $this->belongsTo(Submodul::class);
    }

    public function quiz() {
        return $this->hasMany(Quiz::class);
    }
}
