<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteAPIController extends Controller
{
    public function add(Request $request) {
        $request->validate([
            'id_khachhang' => 'required|exists:khachhang,id',
            'id_sanpham' => 'required|exists:sanpham,id',
        ]);
        $exists = Favorite::where('id_khachhang', $request->id_khachhang)
                            -> where('id_sanpham', $request->id_sanpham)
                            -> exists();
        if($exists) {
            return response()->json([
                'message' => 'Sản phẩm đã có trong danh sách yêu thích',
            ], 409);
        }
        Favorite::create([
            'id_khachhang' => $request->id_khachhang,
            'id_sanpham' => $request->id_sanpham
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Đã thêm vào danh sách yêu thích'
        ], 201);
    }

    public function remove(Request $request) {

        $request->validate([
            'id_sanpham' => 'required|exists:sanpham,id',
        ]);

        $deleted = Favorite::where('id_khachhang', Auth::id())
                            ->where('id_sanpham', $request->id_sanpham)
                            ->delete();
        if ($deleted) {
            return response()->json([
                'message' => 'Đã xóa khỏi danh sách yêu thích'
            ], 200);
        }

        return response()->json([
            'message' => 'Sản phẩm không tồn tại trong danh sách yêu thích'
        ], 404);
    }

    public function list()
    {
        $favorites = Favorite::where('id_khachhang', Auth::id())
                                ->with('product')
                                ->get();
        return response()->json([
            'favorites' => $favorites
        ]);
    }
}
