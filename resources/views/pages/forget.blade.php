@extends('layout.layout');
@section('title')
    Quên mật khẩu
@endsection
@section('body')
    <div class="forgetPass">
        <div class="grid container">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <p class="forgetPass-title">Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.</p>
                    <form class="login-form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email<span class="required"></span>:</label>
                            <input class="input-field" type="text" name="email" id="email">
                            @if ($errors->has('email'))
                                <span class="message">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        @if (session('message'))
                            <div class="message">
                                {{ session('message') }}
                            </div>
                        @endif

                        <button type="submit" class="btn-reset">Đặt lại mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
@endsection