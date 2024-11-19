<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $casts =[
        'role_id' => 'int',
        'is_active' => 'bool',
        'created_user_id' => 'int',
        'updated_user_id' => 'int'
    ];

    protected $fillable = [
        'user_ref',
        'name',
        'email',
        'password',
        'role_id',
        'is_active'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
