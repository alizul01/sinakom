<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submodul extends Model {
    use HasFactory;

    protected $table = 'submoduls';
    protected $guarded = ['id'];
    protected $with = ['modul'];

    public function modul() {
        return $this->belongsTo(Modul::class);
    }
}
