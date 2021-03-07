<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public  $fillable = [
        'name',
        'last_name',
        'identification',
        'email',
        'number',
        'numberHouse',
        'longitude',        
        'latitude'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //RELACION ROL
    public function rol(){
        return $this->hasMany(Rol::class);
            }

    //FG UBICATION
    public function ubication(){
        return $this->hasOne(Ubication::class);
            }        

    public function donation(){
       return $this->hasMany(Donation::class);
                }       
    
    public function request(){
        return $this->hasOne(Request::class);
                }             
                 
}
