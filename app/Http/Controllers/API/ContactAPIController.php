<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactAPIController extends Controller
{
    public function SendContactEmail(Request $request) {
        $request->validate([
            'hoten' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'chude' => 'required|string|max:255',
            'noidung' => 'required|string',
        ]);

        $data = [
            'hoten' => $request->hoten,
            'email' => $request->email,
            'chude' => $request->chude,
            'noidung' => $request->noidung,
        ];
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('ngockhuyen2k2@gmail.com', 'Admin')
                    ->subject('Liên hệ từ khách hàng: ' . $data['chude'])
                    ->replyTo($data['email']);
        });
        return response()->json([
            'status' => 'success',
            'message' => 'Gửi liên hệ thành công! Chúng tôi sẽ phản hồi sớm nhất.',
        ]);
    }
}
