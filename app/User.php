<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * Active Record
 *
 * @package App\
 */
class User extends Model
{
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token', 'email_verified_at'];
}
