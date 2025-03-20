@extends('layout.layout');
@section('title')
    Đặt lại mật khẩu
@endsection
@section('body')
    <div class="resetPass">
        <div class="grid container">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <h3 class="resetPass-title">Cập nhật lại mật mật khẩu</h3>
                    <form action="{{ route('account.update_password') }}" class="change__password-form" method="post">
                        @csrf
                        
                        <input type="hidden" name="token" value="{{ $token }}">
                        <input class="input-field" type="hidden" name="email" value="{{ request()->email }}">

                        <div class="form-group">
                            <label for="">Mật khẩu mới<span class="required">&nbsp;</span>:</label>
                            <div class="input-item">
                                <input class="input-field" type="password" name="new-password" id="new-password">
                                <i class="input-icon fa-regular fa-eye toggle-password" data-target="new-password"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="new-password_confirmation">Nhập lại mật khẩu<span class="required">&nbsp;</span>:</label>
                            <div class="input-item">
                                <input class="input-field" type="password" name="new-password_confirmation" id="confirm_password">
                                <i class="input-icon fa-regular fa-eye toggle-password" data-target="confirm_password"></i>
                            </div>
                        </div>

                        @if ($errors->has('new-password') || session('message'))
                            <div class="message">
                                {{ $errors->first('new-password') ?? session('message') }}
                            </div>
                        @endif
                        <button type="submit" class="btn-change">Đặt lại mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
@endsection