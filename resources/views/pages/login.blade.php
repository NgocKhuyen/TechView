@extends ('layout.layout')
@section('title')
    Đăng nhập
@endsection

@section('body')
    <section class="section-login">
        <div class="grid wide container">
            <div class="row">
                <div class="login col l-6 l-o-3 m-10 m-o-1 c-12">
                    <div class="login-title">
                        <a class="login__link auth-link" href="{{ route('account.login')}}">Đăng nhập</a>
                        <a class="register__link auth-link" href="{{ route('account.register')}}">Đăng kí</a>
                    </div>

                    <form class="login-form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Email<span class="required"></span>:</label>
                            <input class="input-field" type="email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu<span class="required"></span>:</label>
                            <div class="input-item">
                                <input class="input-field" type="password" name="password" id="password">
                                <i class="input-icon fa-regular fa-eye toggle-password" data-target="password"></i>
                            </div>
                        </div>

                        <div class="remember-forgot"> 
                            <div class="remember-me">
                                <input type="checkbox" id="remember-check" name="remember">
                                <span class="remember">Lưu mật khẩu</span>
                            </div>
                            <a href="{{ route('account.forget_password') }}" class="forget-password">Quên mật khẩu?</a>
                        </div>
                        
                        @if (session('message'))
                            <div class="message">
                                {{ session('message') }}
                            </div>
                        @endif
                        
                        <button class="btn-log">ĐĂNG NHẬP</button>
                        <p class="auth-divider">Hoặc</p>
                        <a class="btn-gg" href="{{ route('auth.google') }}">
                            <img class="icon-gg" src="{{ asset('/icons/gg-icon.svg') }}" alt="">
                            Đăng nhập bằng google
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection