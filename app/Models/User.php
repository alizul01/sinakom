<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'date_birth',
        'address',
        'gender',
        'photo_path',
        'phone'
    ];

    protected $with = ['role'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getPhotoPathAttribute($value) {
        return asset('storage/' . $value);
    }

    public function getDateBirthAttribute($value) {
        return date('d-m-Y', strtotime($value));
    }

    public function membership() {
        return $this->hasMany(Membership::class);
    }

    public function result() {
        return $this->hasMany(Result::class);
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }
}
