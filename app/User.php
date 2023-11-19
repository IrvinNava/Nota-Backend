<?php
namespace App;

use Cartalyst\Sentinel\Users\EloquentUser as SentinelUser;

class User extends SentinelUser
{
    protected $table = "users";
    protected $fillable = ['email', 'password', 'permissions', 'last_login', 'first_name', 'last_name'];
}
