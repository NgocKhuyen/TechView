<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
     * @var array<int, string>
     *
     * */

    protected $table = 'khachhang';
    protected $fillable = [
        'hoten',
        'sodienthoai',
        'email',
        'matkhau',
        'google_id',
        'remember_token',
        'email_verified_at'
    ];

    protected $hidden = [
        'matkhau',
        'vaitro',
        'google_id',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at'
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
