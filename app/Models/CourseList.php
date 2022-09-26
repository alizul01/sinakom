<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseList extends Model {
    use HasFactory;

    protected $table = 'course_lists';
    protected $guarded = ['id'];

    public function membership() {
        return $this->hasMany(Membership::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
