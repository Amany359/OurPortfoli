<?php

namespace App\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> feature/setting
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> feature/Projects
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Notifications\CustomVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
=======


class User extends Authenticatable
>>>>>>> feature/setting
=======


class User extends Authenticatable
>>>>>>> feature/Projects
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
<<<<<<< HEAD
<<<<<<< HEAD
        'remember_token',
        'email_verified_at',
=======
>>>>>>> feature/setting
=======
>>>>>>> feature/Projects
    ];

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
<<<<<<< HEAD
<<<<<<< HEAD

    public function sendEmailVerificationNotification()
    {
        $this->notify(new CustomVerifyEmail);
    }
=======
>>>>>>> feature/setting
=======
>>>>>>> feature/Projects
}
