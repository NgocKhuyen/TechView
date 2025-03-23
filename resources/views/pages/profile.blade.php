@extends('layout.layout');
@section('title')
    Tài khoản
@endsection
@section('body')
    <section class="section-account">
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 m-12">
                    <div class="left-ac">
                        <h5 class="account-title">TÀI KHOẢN</h5>
                        <div class="account-avatar">
                            <img src="{{ asset($user->hinh ? '/img/'.$user->hinh : '/img/default-avatar.jpg') }}" alt="Avatar" class="avatar-img">
                            <div class="change-icon">
                                <div class="change-icon__link">
                                    <i class="change-icon__pen fa-solid fa-pencil"></i>
                                </div>
                            </div>
                        </div>

                        <p class="account-desc">
                            Xin chào, 
                            <span class="account-name"> {{ $user->hoten }}&nbsp;!</span>
                        </p>
                        
                        <ul class="account__list">
                            <li class="title-info title-active"><a href="#">Thông tin tài khoản</a></li>
                            <li class="title-info"><a href="#">Đơn hàng của bạn</a></li>
                            <li class="title-info"><a href="#">Đổi mật khẩu</a></li>
                            <li class="title-info"><a href="{{ route('account.logout') }}">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col l-9 m-12 c-12">
                    <div class="right-ac">
                        <!-- Thông tin tài khoản -->
                        <section class="account__infor content-section section-active">
                            <h1 class="title-head-info">Thông tin tài khoản</h1>
                            <button type="button" class="btn-address">Cập nhật</button>
                           
                            <div class="account__infor-name">
                                <p class="account__infor-item">
                                    <strong class="account__infor-title">Họ tên:</strong>
                                    {{ $user->hoten }}
                                    <span class="address-default">Mặc định</span>
                                </p>

                                @if ($user->ngaysinh)
                                    <p class="account__infor-item">
                                        <strong class="account__infor-title">Ngày sinh:</strong>
                                        {{ $user->ngaysinh }}
                                    </p>
                                @endif
                                
                                @if ($user->sodienthoai)
                                    <p class="account__infor-item">
                                        <strong class="account__infor-title">Số điện thoại:</strong>
                                        {{ $user->sodienthoai }}
                                    </p>
                                @endif

                                <p class="account__infor-item">
                                    <strong class="account__infor-title">Email:</strong>
                                    {{ $user->email }}
                                </p>

                                @if ($user->diachi)
                                    <p class="account__infor-item">
                                        <strong class="account__infor-title">Địa chỉ:</strong>
                                        {{ $user->diachi }}
                                    </p>
                                @endif
                            </div>
                        </section> 
                        
                        <!-- Đơn hàng của bạn -->
                        <section class="order-history content-section">
                            <h1 class="title-head">Đơn hàng của bạn</h1>
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Đơn hàng</th>
                                            <th>Ngày</th>
                                            <th class="address-column">Địa chỉ</th>
                                            <th>Giá trị đơn hàng</th>
                                            <th>TT đơn hàng</th>
                                            <th>TT thanh toán</th>
                                            <th>TT vận chuyển</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($orders->isNotEmpty())
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td> {{ $order->id }} </td>
                                                    <td> {{ $order->ngaytao }} </td>
                                                    <td> {{ $order->diachi ?? $user->diachi }} </td>
                                                    <td> {{ $order->tongtien }} </td>
                                                    <td> {{ $order->trangthai }} </td>
                                                    <td> {{ $order->phuongthucthanhtoan }} </td>
                                                    <td> {{ $order->phuongthucgiaohang }} </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <td colspan="7">Bạn chưa có đơn hàng</td>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    
                        <!-- Đổi mật khẩu -->
                        <section class="change-password content-section">
                            <h1 class="title-head">Đổi mật khẩu</h1>
                            <form action="{{ route('account.changepassword') }}" method="post" class="change__password-form">
                                @csrf
                                <div class="form-group">
                                    <label for="old-password">Mật khẩu cũ<span class="required">&nbsp;</span>:</label>
                                    <div class="input-item">
                                        <input class="input-field" type="password" name="old-password" id="old-password">
                                        <i class="input-icon fa-regular fa-eye toggle-password" data-target="old-password"></i>
                                    </div>                               
                                </div>
                                @error('old-password')
                                    <div class="message">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="">Mật khẩu mới<span class="required">&nbsp;</span>:</label>
                                    <div class="input-item">
                                        <input class="input-field" type="password" name="new-password" id="new-password">
                                        <i class="input-icon fa-regular fa-eye toggle-password" data-target="new-password"></i>
                                    </div>
                                </div>
                                @error('new-password')
                                    <div class="message">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="">Nhập lại mật khẩu<span class="required">&nbsp;</span>:</label>
                                    <div class="input-item">
                                        <input class="input-field" type="password" name="new-password_confirmation" id="confirm_password">
                                        <i class="input-icon fa-regular fa-eye toggle-password" data-target="confirm_password"></i>
                                    </div>
                                </div>
                                @error('new-password_confirmation')
                                    <div class="message">{{ $message }}</div>
                                @enderror
                                @if (session('message'))
                                    <div class="message">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <button type="submit" class="btn-change">Đặt lại mật khẩu</button>
                            </form>
                        </section>
                    
                        <!-- form cập nhật thông tin -->
                        <div class="modal_overlay"></div>
                        <section class="modal_address" id="modal_address">
                            <div class="modal-header">
                                <h2 class="title-address">CẬP NHẬT THÔNG TIN</h2>
                                <i class="fa-solid fa-xmark close-modal"></i>
                            </div>
                            <form action="{{ route('account.updateprofile') }}" method="post" enctype="multipart/form-data" class="address-form" >
                                @csrf
                                <div class="address-group">
                                    <div class="address-item address-item-gap">
                                        <label for="name" class="">Họ và tên:</label>
                                        <input type="text" class="input-address" name="name" id="name" value="{{ old('name', $user->hoten) }}">
                                    </div>
                                    @error('name')
                                        <div class="message">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="address-item">
                                        <label for="birth">Ngày sinh:</label>
                                        <input type="date" class="input-address" name="birth" id="birth" value="{{ old('birth', $user->ngaysinh) }}" >
                                    </div>
                                    @error('birth')
                                        <div class="message">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="address-item">
                                    <label for="email">Email:</label>
                                    <input type="text" class="input-address" name="email" id="email" value="{{ old('email', $user->email) }}" >
                                </div>
                                @error('email')
                                    <div class="message">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="account-group">
                                    <div class="address-item address-item-gap">
                                        <label for="phone">Số điện thoại:</label>
                                        <input type="text" class="input-address" name="phone" id="phone" value="{{ old('phone', $user->sodienthoai) }}" >
                                    </div>
                                    @error('phone')
                                        <div class="message">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="account-gender">
                                        <span for="" class="gender-title">Giới tính:</span>
                                        <div class="gender-group">
                                            <input type="radio" class="gender-item" name="gender" value="nam" {{ old('gender', $user->gioitinh) == 'nam' ? 'checked' : '' }}>
                                            <label for="" class="gender-name">Nam</label>
                                        </div>
                                        <div class="gender-group">
                                            <input type="radio" class="gender-item" name="gender" value="nu" {{ old('gender', $user->gioitinh) == 'nu' ? 'checked' : '' }}>
                                            <label for="" class="gender-name">Nữ</label>
                                        </div>
                                        <div class="gender-group">
                                            <input type="radio" class="gender-item" name="gender" value="khac" {{ old('gender', $user->gioitinh) == 'khac' ? 'checked' : '' }}>
                                            <label for="" class="gender-name">Khác</label>
                                        </div>
                                    </div>
                                    @error('gender')
                                        <div class="message">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="address-item">
                                    <label for="address">Địa chỉ:</label>
                                    <input type="text" class="input-address" name="address" id="address" value="{{ old('address', $user->diachi) }}">
                                </div>
                                @error('address')
                                    <div class="message">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="address-item">
                                    <label for="avatar">Chọn hình:</label>
                                    <input type="file" class="" name="avatar" id="avatar">
                                    <span id="file-name">
                                        {{ $user->hinh ?? $user->hinh}}
                                    </span>
                                </div>
                                @error('avatar')
                                    <div class="message">
                                        {{ $message }}
                                    </div>
                                @enderror

                                @if (session('message'))
                                    <div class="message">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <div class="form-actions">
                                    <button type="submit" class="btn-update" id="openModal">CẬP NHẬT</button>
                                </div> 
                            </form>
                        </section>

                        {{-- form thay đổi hình ảnh --}}
                        <div class="modal_overlay2"></div>
                        <section class="modal-avatar" id="modal_avatar">
                            <div class="modal-avatar__title">
                                <h2 class="title-avatar">THAY ĐỔI HÌNH ẢNH</h2>
                                <i class="fa-solid fa-xmark close-modal-avatar"></i>
                            </div>
                            <form action="{{ route('account.changeavatar') }}" method="post" enctype="multipart/form-data" class="address-form"> 
                                @csrf
                                <div class="avater-item">
                                    <label for="avatar">Chọn ảnh:</label>
                                    <input type="file" name="avatar" accept="image/*">
                                </div>
                                @error('avatar')
                                    <div class="message">
                                        {{ $message }}
                                    </div>
                                @enderror

                                @if (session('message'))
                                    <div class="message">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <button type="submit" class="btn-avt" id="openAvatar">Thay đổi</button>
                            </form>
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection