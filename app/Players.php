<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Players extends Model
{
    use HasApiTokens, Notifiable;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','username'
    ]; 

    //get player badges

    public function badges(){
    	return $this->hasMany('App\PlayerBadges');
    }

    //get player levels

    public function level(){
        return $this->hasOne('App\Levels');
    }
    
    //get player points and money

    public function point(){
        return $this->hasOne('App\Points');
    }

}