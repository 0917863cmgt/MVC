<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'role',
        'first_name',
        'middle_name',
        'prefix',
        'last_name',
        'email',
        'password',
        'gender',
        'birthdate',
        'street_name',
        'house_number_and_extension',
        'postal_code',
        'city',
        'country',
        'phone_number',
        'profile_image',
        'background_image',
        'bio'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
    public function setBirthdateAttribute($birthdate){
        $this->attributes['birthdate'] = date('Y-m-d',strtotime($birthdate));
    }
    public function statistic(){
        //hasOne hasMany belongsTo belongsToMany
        return $this->hasOne(Statistic::class);
    }
    public function articles(){
        //hasOne hasMany belongsTo belongsToMany
        return $this->hasMany(Article::class);
    }
    public function followers(){
        //hasOne hasMany belongsTo belongsToMany
        return $this->hasMany(Follower::class);
    }
    public function follows(){
        //hasOne hasMany belongsTo belongsToMany
        return $this->hasMany(Follow::class);
    }
    public function highlights(){
        //hasOne hasMany belongsTo belongsToMany
        return $this->hasMany(Highlight::class);
    }
    public function orders(){
        //hasOne hasMany belongsTo belongsToMany
        return $this->hasMany(Order::class);
    }
}
