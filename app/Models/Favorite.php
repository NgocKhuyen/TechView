<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $table = 'yeuthichsp';
    protected $fillable = ['id_khachhang', 'id_sanpham', 'ngaythem'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_khachhang');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_sanpham', 'id');
    }

    public $timestamps = false;
}
