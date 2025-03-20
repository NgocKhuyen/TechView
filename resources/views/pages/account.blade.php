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
                        <p class="account-desc">
                            Xin chào, 
                            <span class="account-name">Khuyến Nguyễn&nbsp;!</span>
                        </p>
                        <ul class="account__list">
                            <li class="title-info title-active"><a href="#">Thông tin tài khoản</a></li>
                            <li class="title-info"><a href="#">Đơn hàng của bạn</a></li>
                            <li class="title-info"><a href="#">Đổi mật khẩu</a></li>
                            <li class="title-info"><a href="#">Địa chỉ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col l-9 m-12 c-12">
                    <div class="right-ac">
                        <!-- Thông tin tài khoản -->
                        <section class="account__infor content-section section-active">
                            <h1 class="title-head">Thông tin tài khoản</h1>
                            <div class="account__infor-name">
                                <p class="account__infor-item">
                                    <strong class="account__infor-title">Họ tên:</strong>
                                    Khuyến Nguyễn
                                </p>
                                <p class="account__infor-item">
                                    <strong class="account__infor-title">Email:</strong>
                                    ngockhuyen2k2@gmnail.com
                                </p>
                                <p class="account__infor-item">
                                    <strong class="account__infor-title">Điện thoại:</strong>
                                    0911258142
                                </p>
                                <p class="account__infor-item">
                                    <strong class="account__infor-title">Địa chỉ:</strong>
                                    23/8, Quận 12, TP Hồ Chí Minh, Vietnam
                                </p>
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
                                        <tr>
                                            <td>DH001</td>
                                            <td>05/03/2025</td>
                                            <td>23/8, Quận 12, TP Hồ Chí Minh, Vietnam</td>
                                            <td>1.500.000đ</td>
                                            <td>Đang xử lý</td>
                                            <td>Tiền mặt</td>
                                            <td>Giao hàng tiết kiệm</td>
                                        </tr>
                                        <tr>
                                            <td>DH002</td>
                                            <td>05/03/2025</td>
                                            <td>23/8, phường Đông Hưng Thuận, Quận 12, TP Hồ Chí Minh</td>
                                            <td>1.500.000đ</td>
                                            <td>Đang giao</td>
                                            <td>Tiền mặt</td>
                                            <td>Giao hàng tiết kiệm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    
                        <!-- Đổi mật khẩu -->
                        <section class="change-password content-section">
                            <h1 class="title-head">Đổi mật khẩu</h1>
                            <form action="" class="change__password-form">
                                <div class="form-group">
                                    <label for="">Mật khẩu cũ<span class="required">&nbsp;</span>:</label>
                                    <div class="input-item">
                                        <input class="input-field" type="password" name="old-password" id="old-password">
                                        <i class="input-icon fa-regular fa-eye toggle-password" data-target="old-password"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Mật khẩu mới<span class="required">&nbsp;</span>:</label>
                                    <div class="input-item">
                                        <input class="input-field" type="password" name="new-password" id="new-password">
                                        <i class="input-icon fa-regular fa-eye toggle-password" data-target="new-password"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Nhập lại mật khẩu<span class="required">&nbsp;</span>:</label>
                                    <div class="input-item">
                                        <input class="input-field" type="password" name="confirm_password" id="confirm_password">
                                        <i class="input-icon fa-regular fa-eye toggle-password" data-target="confirm_password"></i>
                                    </div>
                                </div>
                                <button type="submit" class="btn-change">Đặt lại mật khẩu</button>
                            </form>
                        </section>
                    
                        <!-- Địa chỉ -->
                        <section class="address-info content-section">
                            <h1 class="title-head">ĐỊA CHỈ CỦA BẠN</h1>
                            <button type="button" class="btn-address">THÊM ĐỊA CHỈ</button>

                            <div class="address-infor">
                                <div class="left-info">
                                    <p class="account__infor-item">
                                        <strong class="account__infor-title">Họ tên:</strong>
                                        Khuyến Nguyễn
                                        <span class="address-default">Địa chỉ mặc định</span>
                                    </p>
                                    <p class="account__infor-item">
                                        <strong class="account__infor-title">Địa chỉ:</strong>
                                        23/8, Quận 12, TP Hồ Chí Minh, Vietnam
                                    </p>
                                    <p class="account__infor-item">
                                        <strong class="account__infor-title">Điện thoại:</strong>
                                        0911258142
                                    </p>
                                </div>  
                                <div class="right-info">
                                    <button type="button" class="btn-edit">Cập nhật địa chỉ</button>
                                </div>
                            </div>
                        </section>

                        <!-- form thêm địa chỉ -->
                        <div class="modal_overlay"></div>
                        <section class="modal_address" id="modal_address">
                            <div class="modal-header">
                                <h2 class="title-address">ĐỊA CHỈ CỦA BẠN</h2>
                                <i class="fa-solid fa-xmark close-modal"></i>
                            </div>
                            <form action="" class="address-form">
                                <div class="address-group">
                                    <div class="address-item address-item-gap">
                                        <label for="" class="">Họ và tên:</label>
                                        <input type="text" class="input-address" name="name">
                                    </div>
                                    <div class="address-item">
                                        <label for="">Số điện thoại:</label>
                                        <input type="text" class="input-address" name="phone">
                                    </div>
                                </div>
                                <div class="address-item">
                                    <label for="">Địa chỉ:</label>
                                    <input type="text" class="input-address" name="address">
                                </div>
                                <div class="address-item">
                                    <label for="">Quốc gia:</label>
                                    <select name="country" id="">
                                        <option value="">Việt Nam</option>
                                    </select>
                                </div>
                                <div class="address-group">
                                    <div class="address-item address-item-gap">
                                        <label for="">Tỉnh:</label>
                                        <select name="city" id="">
                                            <option value="" disabled>Chọn tỉnh thành</option>
                                            <option value="">Thành phố Hồ Chí Minh</option>
                                            <option value="">Đồng Nai</option>
                                            <option value="">Bình Dương</option>
                                            <option value="">Long An</option>
                                        </select>
                                    </div>
                                    <div class="address-item address-item-gap">
                                        <label for="">Quận/huyện:</label>
                                        <select name="district" id="">
                                            <option value="" disabled>Chọn quận/huyện</option>
                                            <option value="">Quận 1</option>
                                            <option value="">Quận 2</option>
                                            <option value="">Quận 3</option>
                                            <option value="">Quận 4</option>
                                            <option value="">Quận 5</option>
                                            <option value="">Quận 6</option>
                                            <option value="">Quận 7</option>
                                            <option value="">Quận 8</option>
                                            <option value="">Quận 9</option>
                                            <option value="">Quận 10</option>
                                            <option value="">Quận 11</option>
                                            <option value="">Quận 12</option>
                                        </select>
                                    </div>
                                    <div class="address-item">
                                        <label for="">Phường/xã:</label>
                                        <select name="ward" id="">
                                            <option value="" disabled>Chọn phường/xã</option>
                                            <option value="">Đông Hưng Thuận</option>
                                            <option value="">An Phú Đông</option>
                                            <option value="">Thới An</option>
                                            <option value="">Tân Thới Hiệp</option>
                                            <option value="">Hiệp Thành</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="default-address">
                                    <input type="checkbox" name="" id="checkbox">
                                    <label for="" class="set-default">Đặt làm địa chỉ mặc định?</label>
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn-cancel">Hủy</button>
                                    <button type="submit" class="btn-add">THÊM ĐỊA CHỈ</button>
                                    <!-- <button type="submit" class="btn-update">CẬP NHẬT ĐỊA CHỈ</button> -->
                                </div>
                            </form>
                        </section>
                    </div>

                </div>
            </div>
            <!-- <div class="account">

            </div> -->
        </div>
    </section>
@endsection