@extends('layout.layout');
@section('title')
    Đăng kí
@endsection

@section('body')
<section class="section-register">
    <div class="grid wide container">
        <div class="row">
            <div class="register col l-6 l-o-3 m-10 m-o-1 c-12">
                <div class="register-title">
                    <a class="login__link auth-link" href="{{ route('account.login')}}">Đăng nhập</a>
                    <a class="register__link auth-link" href="{{ route('account.register')}}">Đăng kí</a>
                </div>

                <form class="register-form" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Họ tên<span class="required"></span>:</label>
                        <input class="input-field" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email<span class="required"></span>:</label>
                        <input class="input-field" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu<span class="required"></span>:</label>
                        <div class="input-item">
                            <input class="input-field" type="password" name="password" id="password">
                            <i class="input-icon fa-regular fa-eye toggle-password" data-target="password"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Nhập lại mật khẩu<span class="required"></span>:</label>
                        <div class="input-item">
                            <input class="input-field" type="password" name="confirm_password" id="confirm_password">
                            <i class="input-icon fa-regular fa-eye toggle-password" data-target="confirm_password"></i>
                        </div>
                    </div>

                    @if (session('message'))
                        <div class="message">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                    <button type="submit" class="btn-reg">ĐĂNG KÍ</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection