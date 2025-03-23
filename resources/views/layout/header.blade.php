<header class="header">
    <div class="grid wide container">
        <div class="header__top hide-on-mobile hide-on-tablet">
            <p class="header__top-title">Chào mừng bạn đến với TechView!</p>
            <div class="header__top-lang">
                <p class="header__top-lang--vn">Tiếng việt</p>
                <i class="fa-solid fa-angle-down"></i>
            </div>
        </div>
        <div class="header__center">
            <div class="grid">
                <div class="row">
                    <div class="col l-0 m-1 c-1">
                        <div class="header__menu-moblie" id="header__menu-icon">
                            <i class="header__menu-moblie-icon fa-solid fa-list"></i>
                        </div>
                    </div>
                    <div class="col l-3 m-10 c-10">
                        <a href="" class="header__logo">
                            <img src="{{asset('/img/logo.png')}}" class="header__logo-img" alt="">
                        </a>
                    </div>
                    <div class="col l-5 hide-on-tablet hide-on-mobile ">
                        <div class="header__search">
                            <form action="" class="form-search">
                                <input type="text" id="search__product" name="search" placeholder="Nhập sản phẩm cần tìm..." autocomplete="off">
                                <button type="submit" class="btn-search">
                                    Tìm Kiếm
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col l-4 m-1 c-1">
                        <div class="header__info">
                                <div class="col l-4">
                                    <div class="account hide-on-tablet hide-on-mobile">
                                       
                                        <div class="account__toggle">Tài khoản</div>
                                        <div class="account__dropdown">
                                            @if (Auth::check())
                                                <p class="account__name">{{ Auth::user()->hoten }}</p>
                                                <a href="{{ route('account.profile') }}" class="account__link">Trang cá nhân</a>
                                                <a href="{{ route('account.logout') }}" class="account__link">Đăng xuất</a>
                                            @else
                                                <a href="{{ route('account.login') }}" class="account__link">Đăng nhập</a>
                                                <a href="{{ route('account.register') }}" class="account__link">Đăng ký</a>
                                            @endif
                                        </div>
                                    </div>  
                                </div>
                                <div class="col l-8">
                                    <div class="header__icons">
                                        <a href="#" class="heart hide-on-tablet hide-on-mobile">
                                            <div class="heart-item">
                                                <i class="heart-icon fa-regular fa-heart"></i>
                                                <span class="quantity">1</span>
                                            </div>
                                        </a>
                                        <a href="#" class="cart">
                                            <div class="cart-item">
                                                <i class="cart-icon fa-solid fa-cart-shopping"></i>
                                                <span class="quantity">1</span>
                                            </div>
                                            <div class="cart__desc hide-on-tablet hide-on-mobile">
                                                <p class="cart__desc-quantity">0 sản phẩm</p>
                                                <p class="cart__desc-total">0 VNĐ</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="grid">
                <div class="row">
                    <div class="col l-3">
                        <div class="header__menu hide-on-mobile hide-on-tablet">
                            <div class="header__menu-category">
                                <h3>Tất cả danh mục</h3>
                                <i class="header__menu-icon fa-solid fa-sort-down"></i>
                            </div>
                            @if (Request::is('/'))
                                <ul class="header__list active">
                                    <li class="list-item">
                                        <a href="">ỐNG NHÒM</a> 
                                    </li>
                                    <li class="list-item">
                                        <a href="">CELESTRON</a> 
                                    </li>
                                    <li class="list-item">
                                        <a href="">APOLLO</a> 
                                    </li>
                                    <li class="list-item">
                                        <a href="">MEADE</a> 
                                    </li>
                                    <li class="list-item">
                                        <a href="">SKYWATCHER</a> 
                                    </li>
                                    <li class="list-item">
                                        <a href="">KTV CAO CẤP</a> 
                                    </li>
                                    <li class="list-item">
                                        <a href="">KÍNH HIỂN VI</a> 
                                    </li>
                                    <li class="list-item">
                                        <a href="">THIẾT BỊ CHỤP ẢNH</a> 
                                    </li>
                                    <li class="list-item">
                                        <a href="">ĐỒ THIÊN VĂN</a> 
                                    </li>
                                    <li class="list-item">
                                        <a href="">LINH KIỆN</a> 
                                    </li>
                                </ul>
                            @endif
        
                        </div>
                    </div>
                    <div class="col l-9">
                        <nav class="navbar" id="toggle-menu-icon">
                            <div class="header__mobile">
                                <a href="" class="header__mobile-link">
                                    <img src="{{asset('/img/logo.png')}}" class="header__mobile-img" alt="">
                                </a>
                                <i class="close-menu-icon fa-solid fa-xmark" id="close-menu-icon"></i>
                            </div>
                            <ul class="nav-list">
                                <li><a class="nav-item" href="{{ route('index')}}">Trang chủ</a></li>
                                <li><a class="nav-item" href="#!">Cửa hàng</a></li>
                                <li><a class="nav-item" href="#!">Phụ kiện</a></li>
                                <li><a class="nav-item" href="#!">Combo</a></li>
                                <li><a class="nav-item" href="#!">Tin tức</a></li>
                                <li><a class="nav-item" href="#!">Liên hệ</a></li>
                                <li><a class="nav-item nav-end" href="#!">Trợ giúp</a></li>
                            </ul>
                            <div class="header__mobile">
                                <a href="#!" class="header__mobile-logout">Đăng xuất</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>