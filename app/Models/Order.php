<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'donhang';
    protected $fillable = [
        'tennguoinhan',
        'sodienthoai',
        'diachi',
        'tongtien',
        'trangthai',
        'phuongthucthanhtoan',
        'phuongthucgiaohang',
        'ngaytao',
        'id_khachhang',
        'id_khuyenmai'
    ];
    public function khachHang()
    {
        return $this->belongsTo(User::class, 'id_khachhang');
    }
    // public function khuyenMai()
    // {
        // return $this->belongsTo(KhuyenMai::class, 'id_khuyenmai');
    // }
}
