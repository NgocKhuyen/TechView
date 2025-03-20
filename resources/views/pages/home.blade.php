@extends('layout.layout')
@section('title')
    Trang chủ
@endsection

@section('body')
    <!-- Banner 1-->
    <section class="section-banner hide-on-mobile hide-on-tablet">
        <div class="container">
            <div class="row">
                <div class="col l-3"></div>
                <div class="col l-9">
                    <div class="banner">
                        <div class="sub-menu"></div>
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <div class="numbertext">1</div>
                                <img class="slideshow-img" src="{{asset('/')}}img/banner1.png">
                                <div class="text">Caption Text</div>
                            </div>
                            
                            <div class="mySlides fade">
                                <div class="numbertext">2</div>
                                <img class="slideshow-img" src="{{asset('/')}}img/banner2.jpg">
                                <div class="text">Caption Two</div>
                            </div>
                            
                            <div class="mySlides fade">
                                <div class="numbertext">3</div>
                                <img class="slideshow-img" src="{{asset('/')}}img/banner3.jpg">
                                <div class="text">Caption Three</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner -->

    {{-- Sản phẩm mới--}}
    <section class="featuredProduct">
        <div class="grid container">
            <div class="section-product__head">
                <h3 class="section-product__title">Sản phẩm mới</h3>
                <a href="#" class="section-product__link">
                    Xem tất cả
                    <i class="section-product__icon fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="product-slider">
                <div class="row">
                    <div class="product-container">
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp1.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp2.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp3.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp4.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp5.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp6.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp7.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp8.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp9.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <div class="product">
                                <div class="product-item">
                                    <a class="product-item__link">
                                        <span class="product-item__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp10.jpg" class="product-item__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="product-item__heart-link">
                                        <i class="fa-regular fa-heart product-item__heart"></i>
                                    </a>
                                </div>
                                
                                <div class="product-content">
                                    <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="product-rating">
                                        <div class="product-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="product-review">1 đánh giá</span>
                                    </div>
                                    <div class="product-cart">
                                        <div class="product-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="product-cart__link"> 
                                            <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="product-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="product-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Dấu chấm điều hướng -->
            <div class="dots">
                <span class="dot active" onclick="moveSlide(0)"></span>
                <span class="dot" onclick="moveSlide(1)"></span>
                <span class="dot" onclick="moveSlide(2)"></span>
                <span class="dot" onclick="moveSlide(3)"></span>
                <span class="dot" onclick="moveSlide(4)"></span>
                <span class="dot" onclick="moveSlide(5)"></span>
            </div>
        </div>
    </section>

    {{-- Banner 2 --}}
    <section class="banner">
        <div class="grid container">
            <div class="row">
                <div class="col l-4 m-4 c-12">
                    <a class="banner__link" href="#">
                        <img class="banner__link-img" src="{{asset('/img/banner4.webp')}}" alt="">
                    </a>
                </div>
                <div class="col l-4 m-4 c-12">
                    <a class="banner__link" href="#">
                        <img class="banner__link-img" src="{{asset('/img/banner5.webp')}}" alt="">
                    </a>
                </div>
                <div class="col l-4 m-4 c-12">
                    <a class="banner__link" href="#">
                        <img class="banner__link-img" src="{{asset('/img/banner6.webp')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Ưu đãi mới nhất --}}
    <section class="deals">
        <div class="grid container">
            <div class="section-deals__head">
                <h3 class="section-deals__title">Ưu Đãi Mới Nhất</h3>
                <a href="#" class="section-deals__link">
                    Xem tất cả
                    <i class="section-deals__icon fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="product-list">
                <div class="row">
                    <div class="col l-6 m-6 c-12">
                        <div class="deals-item">
                            <span class="product-deals__discount">-20%</span>
                            <div class="row">
                                <div class="col l-4 m-12 c-12">
                                    <div class="deals-header">
                                        <div class="product-deals-header">
                                            <a class="product-deals__link">
                                                <img src="{{asset('/')}}img/sp9.jpg" class="product-deals__img" alt="Kính thiên văn">
                                            </a>
                                            <a href="#" class="product-deals__heart-link">
                                                <i class="fa-regular fa-heart product-deals__heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-8 m-12 c-12">
                                    <div class="deals-content">
                                        <h3 class="deals-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                        <div class="deals-rating">
                                            <div class="deals-rating__list">
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating-none fa-solid fa-star"></i>                                                    
                                            </div>
                                            <span class="deals-review">1 đánh giá</span>
                                        </div>
                                        <div class="deals-cart">
                                            <div class="deals-price">
                                                <p class="old-price"><del>3.200.000</del> đ</p>
                                                <p class="new-price">2.850.000 đ</p>
                                            </div>
                                            <a href="" class="deals-cart__link"> 
                                                <i class="deals-cart__icon fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </div>
                                        <div class="deals-wrapper">
                                            <div class="deals-progress">
                                                <span class="progress"></span>
                                                <span class="no-progress"></span>
                                            </div>
                                            <div class="deals-count">
                                                <div class="available">
                                                    Available:
                                                    <strong class="available-bold">39</strong>
                                                </div>
                                                <div class="sold">
                                                    Sold:
                                                    <strong class="sold-bold">37</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-6 m-6 c-12">
                        <div class="deals-item">
                            <span class="product-deals__discount">-20%</span>
                            <div class="row">
                                <div class="col l-4 m-12 c-12">
                                    <div class="deals-header">
                                        <div class="product-deals-header">
                                            <a class="product-deals__link">
                                                <img src="{{asset('/')}}img/sp5.jpg" class="product-deals__img" alt="Kính thiên văn">
                                            </a>
                                            <a href="#" class="product-deals__heart-link">
                                                <i class="fa-regular fa-heart product-deals__heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-8 m-12 c-12">
                                    <div class="deals-content">
                                        <h3 class="deals-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                        <div class="deals-rating">
                                            <div class="deals-rating__list">
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating-none fa-solid fa-star"></i>                                                    
                                            </div>
                                            <span class="deals-review">1 đánh giá</span>
                                        </div>
                                        <div class="deals-cart">
                                            <div class="deals-price">
                                                <p class="old-price"><del>3.200.000</del> đ</p>
                                                <p class="new-price">2.850.000 đ</p>
                                            </div>
                                            <a href="" class="deals-cart__link"> 
                                                <i class="deals-cart__icon fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </div>
                                        <div class="deals-wrapper">
                                            <div class="deals-progress">
                                                <span class="progress"></span>
                                                <span class="no-progress"></span>
                                            </div>
                                            <div class="deals-count">
                                                <div class="available">
                                                    Available:
                                                    <strong class="available-bold">39</strong>
                                                </div>
                                                <div class="sold">
                                                    Sold:
                                                    <strong class="sold-bold">37</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    {{-- Khuyến mãi --}}
    <section class="widget">
        <div class="grid container">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <a class="coupon-wrapper" href="#!">
                        <div class="coupon-sale">
                            -39
                            <span>%</span>
                        </div>
                        <div class="text-wrap">
                            <div class="coupon-title">Giảm giá cực mạnh cho lần mua hàng đầu tiên</div>
                            <div class="coupon-desc">Sử dụng mã giảm giá ở trang thanh toán</div>
                        </div>
                        <div class="sale-overflow hide-on-mobile hide-on-tablet">-39%</div>
                        <div class="coupon-code">FREE15FIRST</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Sản phẩm 2 --}}
    <section class="section-product ">
        <div class="grid container">
            <div class="row">
                <div class="col l-3 m-3 c-12 p-none">
                    <div class="promo-banner" href="">
                        <div class="promo-banner__discount">-35%</div>
                        <div class="promo-banner__text">
                            <h2 class="promo-banner__title">Tools & Equipment</h2>
                            <p class="promo-banner__desc">Mô tả ngắn...</p>
                        </div>
                        <a href="#" class="promo-banner__link">Shop Now →</a>
                    </div>
                </div>
                <div class="col l-9 m-9 c-12 p-none">
                    <div class="row ">
                        <div class="col l-3 m-4 c-6 p-none">
                            <div class="item__list">
                            <div class="item">
                                <div class="item-box">
                                    <a class="item-box__link">
                                        <span class="item-box__discount">-20%</span>
                                        <img src="{{asset('/')}}img/sp2.jpg" class="item-box__img" alt="Kính thiên văn">
                                    </a>
                                    <a href="#" class="item-box__heart-link">
                                        <i class="fa-regular fa-heart item-box__heart"></i>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="item-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                    <div class="item-rating">
                                        <div class="item-rating__list">
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>
                                            <i class="icon-rating fa-solid fa-star"></i>                                                    
                                        </div>
                                        <span class="item-review">1 đánh giá</span>
                                    </div>
                                    <div class="item-cart">
                                        <div class="item-price">
                                            <p class="old-price"><del>3.200.000</del> đ</p>
                                            <p class="new-price">2.850.000 đ</p>
                                        </div>
                                        <a href="" class="item-cart__link"> 
                                            <i class="item-cart__icon fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </div>
                                    <div class="item-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                        </svg>
                                        <span class="item-stock">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6 p-none">
                            <div class="item__list">
                                <div class="item">
                                    <div class="item-box">
                                        <a class="item-box__link">
                                            <span class="item-box__discount">-20%</span>
                                            <img src="{{asset('/')}}img/sp4.jpg" class="item-box__img" alt="Kính thiên văn">
                                        </a>
                                        <a href="#" class="item-box__heart-link">
                                            <i class="fa-regular fa-heart item-box__heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="item-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                        <div class="item-rating">
                                            <div class="item-rating__list">
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>                                                    
                                            </div>
                                            <span class="item-review">1 đánh giá</span>
                                        </div>
                                        <div class="item-cart">
                                            <div class="item-price">
                                                <p class="old-price"><del>3.200.000</del> đ</p>
                                                <p class="new-price">2.850.000 đ</p>
                                            </div>
                                            <a href="" class="item-cart__link"> 
                                                <i class="item-cart__icon fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </div>
                                        <div class="item-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                            </svg>
                                            <span class="item-stock">Còn hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6 p-none">
                            <div class="item__list">
                                <div class="item">
                                    <div class="item-box">
                                        <a class="item-box__link">
                                            <span class="item-box__discount">-20%</span>
                                            <img src="{{asset('/')}}img/sp5.jpg" class="item-box__img" alt="Kính thiên văn">
                                        </a>
                                        <a href="#" class="item-box__heart-link">
                                            <i class="fa-regular fa-heart item-box__heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="item-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                        <div class="item-rating">
                                            <div class="item-rating__list">
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>                                                    
                                            </div>
                                            <span class="item-review">1 đánh giá</span>
                                        </div>
                                        <div class="item-cart">
                                            <div class="item-price">
                                                <p class="old-price"><del>3.200.000</del> đ</p>
                                                <p class="new-price">2.850.000 đ</p>
                                            </div>
                                            <a href="" class="item-cart__link"> 
                                                <i class="item-cart__icon fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </div>
                                        <div class="item-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                            </svg>
                                            <span class="item-stock">Còn hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6 p-none">
                            <div class="item__list">
                                <div class="item">
                                    <div class="item-box">
                                        <a class="item-box__link">
                                            <span class="item-box__discount">-20%</span>
                                            <img src="{{asset('/')}}img/sp6.jpg" class="item-box__img" alt="Kính thiên văn">
                                        </a>
                                        <a href="#" class="item-box__heart-link">
                                            <i class="fa-regular fa-heart item-box__heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="item-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                        <div class="item-rating">
                                            <div class="item-rating__list">
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>                                                    
                                            </div>
                                            <span class="item-review">1 đánh giá</span>
                                        </div>
                                        <div class="item-cart">
                                            <div class="item-price">
                                                <p class="old-price"><del>3.200.000</del> đ</p>
                                                <p class="new-price">2.850.000 đ</p>
                                            </div>
                                            <a href="" class="item-cart__link"> 
                                                <i class="item-cart__icon fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </div>
                                        <div class="item-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                            </svg>
                                            <span class="item-stock">Còn hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6 p-none">
                            <div class="item__list">
                                <div class="item">
                                    <div class="item-box">
                                        <a class="item-box__link">
                                            <span class="item-box__discount">-20%</span>
                                            <img src="{{asset('/')}}img/sp2.jpg" class="item-box__img" alt="Kính thiên văn">
                                        </a>
                                        <a href="#" class="item-box__heart-link">
                                            <i class="fa-regular fa-heart item-box__heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="item-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                        <div class="item-rating">
                                            <div class="item-rating__list">
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>                                                    
                                            </div>
                                            <span class="item-review">1 đánh giá</span>
                                        </div>
                                        <div class="item-cart">
                                            <div class="item-price">
                                                <p class="old-price"><del>3.200.000</del> đ</p>
                                                <p class="new-price">2.850.000 đ</p>
                                            </div>
                                            <a href="" class="item-cart__link"> 
                                                <i class="item-cart__icon fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </div>
                                        <div class="item-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                            </svg>
                                            <span class="item-stock">Còn hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6 p-none">
                            <div class="item__list">
                                <div class="item">
                                    <div class="item-box">
                                        <a class="item-box__link">
                                            <span class="item-box__discount">-20%</span>
                                            <img src="{{asset('/')}}img/sp4.jpg" class="item-box__img" alt="Kính thiên văn">
                                        </a>
                                        <a href="#" class="item-box__heart-link">
                                            <i class="fa-regular fa-heart item-box__heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="item-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                        <div class="item-rating">
                                            <div class="item-rating__list">
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>                                                    
                                            </div>
                                            <span class="item-review">1 đánh giá</span>
                                        </div>
                                        <div class="item-cart">
                                            <div class="item-price">
                                                <p class="old-price"><del>3.200.000</del> đ</p>
                                                <p class="new-price">2.850.000 đ</p>
                                            </div>
                                            <a href="" class="item-cart__link"> 
                                                <i class="item-cart__icon fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </div>
                                        <div class="item-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                            </svg>
                                            <span class="item-stock">Còn hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6 p-none">
                            <div class="item__list">
                                <div class="item">
                                    <div class="item-box">
                                        <a class="item-box__link">
                                            <span class="item-box__discount">-20%</span>
                                            <img src="{{asset('/')}}img/sp5.jpg" class="item-box__img" alt="Kính thiên văn">
                                        </a>
                                        <a href="#" class="item-box__heart-link">
                                            <i class="fa-regular fa-heart item-box__heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="item-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                        <div class="item-rating">
                                            <div class="item-rating__list">
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>                                                    
                                            </div>
                                            <span class="item-review">1 đánh giá</span>
                                        </div>
                                        <div class="item-cart">
                                            <div class="item-price">
                                                <p class="old-price"><del>3.200.000</del> đ</p>
                                                <p class="new-price">2.850.000 đ</p>
                                            </div>
                                            <a href="" class="item-cart__link"> 
                                                <i class="item-cart__icon fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </div>
                                        <div class="item-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                            </svg>
                                            <span class="item-stock">Còn hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6 p-none">
                            <div class="item__list">
                                <div class="item">
                                    <div class="item-box">
                                        <a class="item-box__link">
                                            <span class="item-box__discount">-20%</span>
                                            <img src="{{asset('/')}}img/sp6.jpg" class="item-box__img" alt="Kính thiên văn">
                                        </a>
                                        <a href="#" class="item-box__heart-link">
                                            <i class="fa-regular fa-heart item-box__heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="item-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                        <div class="item-rating">
                                            <div class="item-rating__list">
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>
                                                <i class="icon-rating fa-solid fa-star"></i>                                                    
                                            </div>
                                            <span class="item-review">1 đánh giá</span>
                                        </div>
                                        <div class="item-cart">
                                            <div class="item-price">
                                                <p class="old-price"><del>3.200.000</del> đ</p>
                                                <p class="new-price">2.850.000 đ</p>
                                            </div>
                                            <a href="" class="item-cart__link"> 
                                                <i class="item-cart__icon fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </div>
                                        <div class="item-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                            </svg>
                                            <span class="item-stock">Còn hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </section>

    {{-- Banner 2 --}}
    <section class="banner2">
        <div class="grid container">
            <div class="row">
                <div class="col l-6 m-6 c-12">
                    <a class="banner2__link" href="#">
                        <img class="banner2__link-img" src="{{asset('/img/banner7.webp')}}" alt="">
                    </a>
                </div>
                <div class="col l-6 m-6 c-12">
                    <a class="banner2__link" href="#">
                        <img class="banner2__link-img" src="{{asset('/img/banner8.webp')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Ưu đãi mới nhất --}}
    <section class="sales">
        <div class="grid container">
            <div class="section-sales__head">
                <h3 class="section-sales__title">Ưu Đãi Mới Nhất</h3>
                <div class="date-time">
                    <div>01</div>
                    <span class="separator">:</span>
                    <div>00</div>
                    <span class="separator">:</span>
                    <div>00</div>
                    <span class="separator">:</span>
                    <div>58</div>
                </div>
                <a href="#" class="section-sales__link">
                    Xem tất cả
                    <i class="section-sales__icon fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="product-list">
                <div class="row">
                    <div class="col l-2-4 m-4 c-6">
                        <div class="product">
                            <div class="product-item">
                                <a class="product-item__link">
                                    <span class="product-item__discount">-20%</span>
                                    <img src="{{asset('/')}}img/sp1.jpg" class="product-item__img" alt="Kính thiên văn">
                                </a>
                                <a href="#" class="product-item__heart-link">
                                    <i class="fa-regular fa-heart product-item__heart"></i>
                                </a>
                            </div>
                            
                            <div class="product-content">
                                <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                <div class="product-rating">
                                    <div class="product-rating__list">
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>                                                    
                                    </div>
                                    <span class="product-review">1 đánh giá</span>
                                </div>
                                <div class="product-cart">
                                    <div class="product-price">
                                        <p class="old-price"><del>3.200.000</del> đ</p>
                                        <p class="new-price">2.850.000 đ</p>
                                    </div>
                                    <a href="" class="product-cart__link"> 
                                        <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                                <div class="product-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                        <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                    </svg>
                                    <span class="product-stock">Còn hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <div class="product">
                            <div class="product-item">
                                <a class="product-item__link">
                                    <span class="product-item__discount">-20%</span>
                                    <img src="{{asset('/')}}img/sp2.jpg" class="product-item__img" alt="Kính thiên văn">
                                </a>
                                <a href="#" class="product-item__heart-link">
                                    <i class="fa-regular fa-heart product-item__heart"></i>
                                </a>
                            </div>
                            
                            <div class="product-content">
                                <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                <div class="product-rating">
                                    <div class="product-rating__list">
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>                                                    
                                    </div>
                                    <span class="product-review">1 đánh giá</span>
                                </div>
                                <div class="product-cart">
                                    <div class="product-price">
                                        <p class="old-price"><del>3.200.000</del> đ</p>
                                        <p class="new-price">2.850.000 đ</p>
                                    </div>
                                    <a href="" class="product-cart__link"> 
                                        <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                                <div class="product-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                        <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                    </svg>
                                    <span class="product-stock">Còn hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <div class="product">
                            <div class="product-item">
                                <a class="product-item__link">
                                    <span class="product-item__discount">-20%</span>
                                    <img src="{{asset('/')}}img/sp3.jpg" class="product-item__img" alt="Kính thiên văn">
                                </a>
                                <a href="#" class="product-item__heart-link">
                                    <i class="fa-regular fa-heart product-item__heart"></i>
                                </a>
                            </div>
                            
                            <div class="product-content">
                                <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                <div class="product-rating">
                                    <div class="product-rating__list">
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>                                                    
                                    </div>
                                    <span class="product-review">1 đánh giá</span>
                                </div>
                                <div class="product-cart">
                                    <div class="product-price">
                                        <p class="old-price"><del>3.200.000</del> đ</p>
                                        <p class="new-price">2.850.000 đ</p>
                                    </div>
                                    <a href="" class="product-cart__link"> 
                                        <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                                <div class="product-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                        <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                    </svg>
                                    <span class="product-stock">Còn hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <div class="product">
                            <div class="product-item">
                                <a class="product-item__link">
                                    <span class="product-item__discount">-20%</span>
                                    <img src="{{asset('/')}}img/sp4.jpg" class="product-item__img" alt="Kính thiên văn">
                                </a>
                                <a href="#" class="product-item__heart-link">
                                    <i class="fa-regular fa-heart product-item__heart"></i>
                                </a>
                            </div>
                            
                            <div class="product-content">
                                <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                <div class="product-rating">
                                    <div class="product-rating__list">
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>                                                    
                                    </div>
                                    <span class="product-review">1 đánh giá</span>
                                </div>
                                <div class="product-cart">
                                    <div class="product-price">
                                        <p class="old-price"><del>3.200.000</del> đ</p>
                                        <p class="new-price">2.850.000 đ</p>
                                    </div>
                                    <a href="" class="product-cart__link"> 
                                        <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                                <div class="product-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                        <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                    </svg>
                                    <span class="product-stock">Còn hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <div class="product">
                            <div class="product-item">
                                <a class="product-item__link">
                                    <span class="product-item__discount">-20%</span>
                                    <img src="{{asset('/')}}img/sp5.jpg" class="product-item__img" alt="Kính thiên văn">
                                </a>
                                <a href="#" class="product-item__heart-link">
                                    <i class="fa-regular fa-heart product-item__heart"></i>
                                </a>
                            </div>
                            
                            <div class="product-content">
                                <h3 class="product-title">Kính thiên văn khúc xạ Celestron SCTW 70</h3>
                                <div class="product-rating">
                                    <div class="product-rating__list">
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>
                                        <i class="icon-rating fa-solid fa-star"></i>                                                    
                                    </div>
                                    <span class="product-review">1 đánh giá</span>
                                </div>
                                <div class="product-cart">
                                    <div class="product-price">
                                        <p class="old-price"><del>3.200.000</del> đ</p>
                                        <p class="new-price">2.850.000 đ</p>
                                    </div>
                                    <a href="" class="product-cart__link"> 
                                        <i class="product-cart__icon fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                                <div class="product-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                        <path d="M14.1358 3.43605L8.57846 0.28359C7.91183 -0.0945299 7.08783 -0.0945299 6.42121 0.28359L0.864174 3.43605C0.686049 3.53698 0.687054 3.78823 0.866183 3.88791L7.5 7.57974L14.1342 3.88791C14.3133 3.78823 14.3143 3.53729 14.1358 3.43605ZM14.5992 4.83071L8.03571 8.48316V15.4774C8.03571 15.8799 8.48404 16.1309 8.84096 15.9284L13.9356 13.0384C14.5945 12.6647 15 11.9778 15 11.2353V5.05727C15 4.85696 14.7777 4.73134 14.5992 4.83071ZM0 5.05727V11.2353C0 11.9781 0.405469 12.6647 1.0644 13.0384L6.15904 15.9281C6.51629 16.1306 6.96429 15.8799 6.96429 15.4771V8.48316L0.400781 4.83071C0.222321 4.73134 0 4.85696 0 5.05727Z" fill="#099268"/>
                                    </svg>
                                    <span class="product-stock">Còn hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    {{-- Banner 3 --}}
    <section class="banner">
        <div class="grid container">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <a class="banner__link" href="#">
                        <img class="banner__link-img" src="{{asset('/img/banner9.webp')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>    

    {{-- Danh mục --}}
    <section class="category">
        <div class="grid container">
            <div class="section-category__head">
                <h3 class="section-category__title">Danh mục có nhiều lượt mua nhất</h3>
                <a href="#" class="section-category__link">
                    Xem tất cả
                    <i class="section-category__icon fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="category-list">
                <div class="row">
                    <div class="col l-2 m-4 c-6 p-none">
                        <div class="category-item item-first">
                            <a class="category-item__link">
                                <img src="{{asset('/')}}img/sp4.jpg" class="category-item__img" alt="Kính thiên văn">
                            </a>
                            <div class="category-content">
                                <h3 class="category-title">Óng nhòm</h3>
                                <span class="counter">10 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-2 m-4 c-6 p-none">
                        <div class="category-item">
                            <a class="category-item__link">
                                <img src="{{asset('/')}}img/sp5.jpg" class="category-item__img" alt="Kính thiên văn">
                            </a>
                            <div class="category-content">
                                <h3 class="category-title">Kính Hiển Vi</h3>
                                <span class="counter">8 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-2 m-4 c-6 p-none">
                        <div class="category-item">
                            <a class="category-item__link">
                                <img src="{{asset('/')}}img/sp6.jpg" class="category-item__img" alt="Kính thiên văn">
                            </a>
                            <div class="category-content">
                                <h3 class="category-title">Thiết Bị Chụp Ảnh</h3>
                                <span class="counter">31 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-2 m-4 c-6 p-none">
                        <div class="category-item">
                            <a class="category-item__link">
                                <img src="{{asset('/')}}img/sp7.jpg" class="category-item__img" alt="Kính thiên văn">
                            </a>
                            <div class="category-content">
                                <h3 class="category-title">KTV Cao Cấp</h3>
                                <span class="counter">12 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-2 m-4 c-6 p-none">
                        <div class="category-item">
                            <a class="category-item__link">
                                <img src="{{asset('/')}}img/sp8.jpg" class="category-item__img" alt="Kính thiên văn">
                            </a>
                            <div class="category-content">
                                <h3 class="category-title">Skywatcher</h3>
                                <span class="counter">22 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-2 m-4 c-6 p-none">
                        <div class="category-item item-last">
                            <a class="category-item__link">
                                <img src="{{asset('/')}}img/sp9.jpg" class="category-item__img" alt="Kính thiên văn">
                            </a>
                            <div class="category-content">
                                <h3 class="category-title">Celetron</h3>
                                <span class="counter">18 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Comment --}}
    <section class="customer">
        <div class="grid container">
            <div class="row">
                <div class="col l-12">
                    <div class="customer-head">
                        <h3 class="customer-title">Nhận Xét Của Khách Hàng</h3>
                        <p class="customer-desc">
                            Kính thiên văn sắc nét, dễ sử dụng. 
                            Giao hàng nhanh, đóng gói cẩn thận. 
                            Dịch vụ tư vấn nhiệt tình, rất hài lòng. Sẽ ủng hộ TechView lâu dài!
                        </p>
                    </div>
                </div>
            </div>
            <div class="customer-list">
                <div class="row">
                    <div class="col l-4">
                        <div class="customer-item">
                            <div class="customer-avatar">
                                <img src="{{asset('img/avatar1.jpg')}}" alt="" class="customer-avatar__img">
                            </div>
                            <div class="customer-content">
                                <div class="stars">
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i> 
                                </div>
                                <div class="customer-name">Nguyễn Long Tuấn Kiệt</div>
                                <div class="customer-mission">Quản trị nhà hàng</div>
                                <div class="customer-description">
                                    <p>Sản phẩm tuyệt vời! Hình ảnh sắc nét, dễ sử dụng, rất phù hợp cho người mới bắt đầu quan sát thiên văn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4">
                        <div class="customer-item">
                            <div class="customer-avatar">
                                <img src="{{asset('img/avatar2.jpg')}}" alt="" class="customer-avatar__img">
                            </div>
                            <div class="customer-content">
                                <div class="stars">
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i> 
                                </div>
                                <div class="customer-name">Trần Văn Nam</div>
                                <div class="customer-mission">Quản trị nhà hàng</div>
                                <div class="customer-description">
                                    <p>Chất lượng kính rất tốt, giao hàng nhanh, đóng gói cẩn thận. Nhân viên tư vấn nhiệt tình, rất hài lòng!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4">
                        <div class="customer-item">
                            <div class="customer-avatar">
                                <img src="{{asset('img/avatar3.jpg')}}" alt="" class="customer-avatar__img">
                            </div>
                            <div class="customer-content">
                                <div class="stars">
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i> 
                                </div>
                                <div class="customer-name">Nguyễn Vân Anh</div>
                                <div class="customer-mission">Diễn Viên</div>
                                <div class="customer-description">
                                    <p>Giá hợp lý, kính thiên văn hoạt động tốt, nhìn rõ Mặt Trăng và các hành tinh. Sẽ ủng hộ lần sau!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col l-4">
                        <div class="customer-item">
                            <div class="customer-avatar">
                                <img src="{{asset('img/avatar4.jpeg')}}" alt="" class="customer-avatar__img">
                            </div>
                            <div class="customer-content">
                                <div class="stars">
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i>
                                    <i class="customer-rating__icon fa-solid fa-star"></i> 
                                </div>
                                <div class="customer-name">Trịnh Trần Phương Tuấn</div>
                                <div class="customer-mission">Ca sĩ</div>
                                <div class="customer-description">
                                    <p>Giá hợp lý, kính thiên văn hoạt động tốt, nhìn rõ Mặt Trăng và các hành tinh. Sẽ ủng hộ lần sau!</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- Mã Khuyến mãi --}}
    <section class="coupon">
        <div class="grid container">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <a class="coupon-wrapper" href="#!">
                        <div class="coupon-title mb-none">
                            Giảm giá cực mạnh cho lần mua hàng đầu tiên của bạn
                        </div>
                        <div class="coupon-code__mess">
                            <span>Tv19wE5</span>
                        </div>
                        <div class="coupon-desc">
                            <p>Sử dụng mã giảm giá ở trạng thái thanh toán</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Tin tức --}}
    <section class="news">
        <div class="grid container">
            <div class="section-category__head">
                <h3 class="section-category__title">Tin tức mới nhất</h3>
                <a href="#" class="section-category__link">
                    Xem tất cả
                    <i class="section-category__icon fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="news-list">
                <div class="row">
                    <div class="col l-3 m-6 c-12">
                        <div class="news-item">
                            <a class="news-item__link">
                                <img src="{{asset('img/new1.jpg')}}" alt="" class="news-item__link-img">
                            </a>
                            <div class="news-body">
                                <div class="news-published">Ngày 12 Tháng 3 năm 2025</div>
                                <div class="news-title">Khám Phá Vũ Trụ Dễ Dàng Hơn Với Kính Thiên Văn TechView</div>
                                <div class="news-content">
                                    Bạn đam mê thiên văn? Kính thiên văn TechView giúp bạn quan 
                                    sát rõ hành tinh và vô số vì sao. Cùng Tìm hiểu về vũ trụ ngày...</div>
                                <div class="news-meta">
                                    <div class="news-auth">
                                        <p>Được viết bởi</p>
                                        <p class="news-authby">Nguyễn Ngọc Khuyến</p>
                                    </div>
                                    <div class="news-comment">
                                        <p>Bình luận</p>
                                        <p class="news-count">20</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-12">
                        <div class="news-item">
                            <a class="news-item__link">
                                <img src="{{asset('img/new2.jpg')}}" alt="" class="news-item__link-img">
                            </a>
                            <div class="news-body">
                                <div class="news-published">Ngày 12 Tháng 3 năm 2025</div>
                                <div class="news-title">Khám Phá Vũ Trụ Dễ Dàng Hơn Với Kính Thiên Văn TechView</div>
                                <div class="news-content">
                                    Bạn đam mê thiên văn? Kính thiên văn TechView giúp bạn quan 
                                    sát rõ hành tinh và vô số vì sao. Cùng Tìm hiểu về vũ trụ ngày...</div>
                                <div class="news-meta">
                                    <div class="news-auth">
                                        <p>Được viết bởi</p>
                                        <p class="news-authby">Nguyễn Ngọc Khuyến</p>
                                    </div>
                                    <div class="news-comment">
                                        <p>Bình luận</p>
                                        <p class="news-count">20</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-12">
                        <div class="news-item">
                            <a class="news-item__link">
                                <img src="{{asset('img/new3.jpg')}}" alt="" class="news-item__link-img">
                            </a>
                            <div class="news-body">
                                <div class="news-published">Ngày 12 Tháng 3 năm 2025</div>
                                <div class="news-title">Khám Phá Vũ Trụ Dễ Dàng Hơn Với Kính Thiên Văn TechView</div>
                                <div class="news-content">
                                    Bạn đam mê thiên văn? Kính thiên văn TechView giúp bạn quan 
                                    sát rõ hành tinh và vô số vì sao. Cùng Tìm hiểu về vũ trụ ngày...</div>
                                <div class="news-meta">
                                    <div class="news-auth">
                                        <p>Được viết bởi</p>
                                        <p class="news-authby">Nguyễn Ngọc Khuyến</p>
                                    </div>
                                    <div class="news-comment">
                                        <p>Bình luận</p>
                                        <p class="news-count">20</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-12">
                        <div class="news-item">
                            <a class="news-item__link">
                                <img src="{{asset('img/new4.jpg')}}" alt="" class="news-item__link-img">
                            </a>
                            <div class="news-body">
                                <div class="news-published">Ngày 12 Tháng 3 năm 2025</div>
                                <div class="news-title">Khám Phá Vũ Trụ Dễ Dàng Hơn Với Kính Thiên Văn TechView</div>
                                <div class="news-content">
                                    Bạn đam mê thiên văn? Kính thiên văn TechView giúp bạn quan 
                                    sát rõ hành tinh và vô số vì sao. Cùng Tìm hiểu về vũ trụ ngày...</div>
                                <div class="news-meta">
                                    <div class="news-auth">
                                        <p>Được viết bởi</p>
                                        <p class="news-authby">Nguyễn Ngọc Khuyến</p>
                                    </div>
                                    <div class="news-comment">
                                        <p>Bình luận</p>
                                        <p class="news-count">20</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection