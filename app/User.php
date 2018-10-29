<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Order;
use App\Model\Comments;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'phone',
        'email',
        'address',
        'level',
        'password',
        'status',
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

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function checkLoginAdmin($user, $pass)
    {
        $user = strip_tags($user);
        $password = strip_tags($pass);
        $getUser = User::where('level', '<', 1)->where(['username' => $user, 'password' => $pass, 'status' => 0])->first();
        return $getUser;
    }
}
