<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function favourite(){
        return $this->belongsToMany('App\Post', 'favourites');
    }

    public function routeNotificationForSlack(){
        return 'https://hooks.slack.com/services/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';
    }
}
