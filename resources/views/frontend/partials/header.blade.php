<style>
    /* Default (desktop) */
.main__logo--img{
    height: 90px;
    width: auto;
}

/* Mobile fix */
@media (max-width: 768px){
    .main__logo--img{
        height: 85px;
        width: auto;
    }
}

/* Extra small devices */
@media (max-width: 480px){
    .main__logo--img{
        height: 68px;
        width: auto;
    }
}
</style>

<header class="header__section color-scheme-2">
        <div class="header__topbar bg__secondary">
            <div class="container-fluid">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <div class="header__shipping">
                        <p class="header__shipping--text text-white">Premium Pakistani Custom Kameez Shalwar Stitching</p>
                    </div>
                    <div class="language__currency d-none d-lg-block">
                        <ul class="d-flex align-items-center">
                            <li class="header__shipping--text text-white"><img class="header__shipping--text__icon" src="assets/img/icon/bus.png" alt="bus-icon"> Track Your Order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__header header__sticky">
            <div class="container-fluid">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                            <span class="visually-hidden">Menu Open</span>
                        </a>
                    </div>
                  <div class="main__logo">
    <h1 class="main__logo--title">
        <a class="main__logo--link" href="index.html">
            <img class="main__logo--img"
                 src="{{ asset('assets/img/logo/logo.png') }}"
                 alt="logo-img">
        </a>
    </h1>
</div>
                    <!-- =========================
    UPDATED HEADER MENU
    SILAI POINT - PAKISTANI CUSTOM WEAR
========================= -->

<div class="header__menu d-none d-lg-block">
    <nav class="header__menu--navigation">

        <ul class="d-flex">

            <!-- HOME -->
            <li class="header__menu--items">

                <a class="header__menu--link" href="/">

                    Home

                </a>

            </li>

            <!-- FABRICS -->
            <li class="header__menu--items mega__menu--items">

                <a class="header__menu--link" href="{{route('fabric')}}">

                    Fabrics

                    <svg class="menu__arrowdown--icon"
                         xmlns="http://www.w3.org/2000/svg"
                         width="12"
                         height="7.41"
                         viewBox="0 0 12 7.41">

                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                              transform="translate(-6 -8.59)"
                              fill="currentColor"
                              opacity="0.7"/>

                    </svg>

                </a>

                <ul class="header__mega--menu d-flex">

                    <!-- COLUMN 1 -->
                    <li class="header__mega--menu__li">

                        <span class="header__mega--subtitle">
                            Summer Collection
                        </span>

                        <ul class="header__mega--sub__menu">

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/category/cambric">

                                    Cambric

                                </a>

                            </li>

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/category/cotton">

                                    Cotton

                                </a>

                            </li>

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/category/wash-wear">

                                    Wash & Wear

                                </a>

                            </li>

                        </ul>

                    </li>

                    <!-- COLUMN 2 -->
                    <li class="header__mega--menu__li">

                        <span class="header__mega--subtitle">
                            Winter Collection
                        </span>

                        <ul class="header__mega--sub__menu">

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/category/khaddar">

                                    Khaddar

                                </a>

                            </li>

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/category/karandi">

                                    Karandi

                                </a>

                            </li>

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/category/linen">

                                    Linen

                                </a>

                            </li>

                        </ul>

                    </li>

                    <!-- COLUMN 3 -->
                    <li class="header__mega--menu__li">

                        <span class="header__mega--subtitle">
                            Premium Fabric
                        </span>

                        <ul class="header__mega--sub__menu">

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/category/boski">

                                    Boski

                                </a>

                            </li>

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/custom-stitching">

                                    Custom Stitching

                                </a>

                            </li>

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/measurement-guide">

                                    Size Guide

                                </a>

                            </li>

                        </ul>

                    </li>

                    <!-- COLUMN 4 -->
                    <li class="header__mega--menu__li">

                        <span class="header__mega--subtitle">
                            Silai Point
                        </span>

                        <ul class="header__mega--sub__menu">

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/about">

                                    About Us

                                </a>

                            </li>

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/contact">

                                    Contact

                                </a>

                            </li>

                            <li class="header__mega--sub__menu_li">

                                <a class="header__mega--sub__menu--title"
                                   href="/track-order">

                                    Track Order

                                </a>

                            </li>

                        </ul>

                    </li>

                </ul>

            </li>

            <!-- CUSTOM SUITS -->
            <li class="header__menu--items">

                <a class="header__menu--link"
                   href="/custom-stitching">

                    Custom Kameez Shalwar

                </a>

            </li>

            <!-- MEN -->
            <li class="header__menu--items">

                <a class="header__menu--link"
                   href="{{route('buttons')}}">

                    Buttons Collection

                </a>

            </li>

            <!-- NEW ARRIVALS -->
            <li class="header__menu--items">

                <a class="header__menu--link"
                   href="{{route('new.arrivals')}}">

                    New Arrivals

                </a>

            </li>

            <!-- BLOG -->
            <li class="header__menu--items">

                <a class="header__menu--link"
                   href="/blog">

                    Fashion Blog

                </a>

            </li>

            <!-- CONTACT -->
            <li class="header__menu--items">

                <a class="header__menu--link"
                   href="/contact">

                    Contact

                </a>

            </li>

        </ul>

    </nav>
</div>
                    <div class="header__account header__account2">
                        <ul class="d-flex">
                            <li class="header__account--items header__account2--items  header__account--search__items d-sm-none">
                                <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                    <span class="visually-hidden">search btn</span>  
                                </a>
                            </li>
                            <li class="header__account--items header__account2--items">
                                <a class="header__account--btn" href="my-account.html">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="26.51" height="23.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg> 
                                    <span class="visually-hidden">Account</span>  
                                </a>
                            </li>
                            
                            <!-- CART ICON -->
<li class="header__account--items header__account2--items">

    <a class="header__account--btn minicart__open--btn"
       href="javascript:void(0)"
       data-offcanvas>

        <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 14.706 13.534"> <g transform="translate(0 0)"> <g > <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"/> <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"/> <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"/> </g> </g> </svg>

        <!-- CART COUNT -->
        <span class="items__count style2">

            {{ count(session('cart', [])) }}

        </span>

    </a>

</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header color-scheme-2">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="index.html">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Grocee Logo" width="108" height="26">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">

    <!-- HOME -->
    <li class="offcanvas__menu_li">

        <a class="offcanvas__menu_item" href="/">
            Home
        </a>

    </li>

    <!-- FABRICS -->
    <li class="offcanvas__menu_li">

        <a class="offcanvas__menu_item" href="/shop">
            Fabrics
        </a>

        <ul class="offcanvas__sub_menu">

            <!-- SUMMER -->
            <li class="offcanvas__sub_menu_li">

                <a href="#" class="offcanvas__sub_menu_item">
                    Summer Collection
                </a>

                <ul class="offcanvas__sub_menu">

                    <li class="offcanvas__sub_menu_li">
                        <a class="offcanvas__sub_menu_item"
                           href="/category/cambric">

                            Cambric

                        </a>
                    </li>

                    <li class="offcanvas__sub_menu_li">
                        <a class="offcanvas__sub_menu_item"
                           href="/category/cotton">

                            Cotton

                        </a>
                    </li>

                    <li class="offcanvas__sub_menu_li">
                        <a class="offcanvas__sub_menu_item"
                           href="/category/wash-wear">

                            Wash & Wear

                        </a>
                    </li>

                </ul>

            </li>

            <!-- WINTER -->
            <li class="offcanvas__sub_menu_li">

                <a href="#" class="offcanvas__sub_menu_item">
                    Winter Collection
                </a>

                <ul class="offcanvas__sub_menu">

                    <li class="offcanvas__sub_menu_li">
                        <a class="offcanvas__sub_menu_item"
                           href="/category/khaddar">

                            Khaddar

                        </a>
                    </li>

                    <li class="offcanvas__sub_menu_li">
                        <a class="offcanvas__sub_menu_item"
                           href="/category/karandi">

                            Karandi

                        </a>
                    </li>

                    <li class="offcanvas__sub_menu_li">
                        <a class="offcanvas__sub_menu_item"
                           href="/category/linen">

                            Linen

                        </a>
                    </li>

                </ul>

            </li>

            <!-- PREMIUM -->
            <li class="offcanvas__sub_menu_li">

                <a href="#" class="offcanvas__sub_menu_item">
                    Premium Fabric
                </a>

                <ul class="offcanvas__sub_menu">

                    <li class="offcanvas__sub_menu_li">
                        <a class="offcanvas__sub_menu_item"
                           href="/category/boski">

                            Boski

                        </a>
                    </li>

                    <li class="offcanvas__sub_menu_li">
                        <a class="offcanvas__sub_menu_item"
                           href="/custom-stitching">

                            Custom Stitching

                        </a>
                    </li>

                    <li class="offcanvas__sub_menu_li">
                        <a class="offcanvas__sub_menu_item"
                           href="/measurement-guide">

                            Size Guide

                        </a>
                    </li>

                </ul>

            </li>

        </ul>

    </li>

    <!-- CUSTOM KAMEEZ SHALWAR -->
    <li class="offcanvas__menu_li">

        <a class="offcanvas__menu_item"
           href="/custom-stitching">

            Custom Kameez Shalwar

        </a>

    </li>

    <!-- MEN COLLECTION -->
    <li class="offcanvas__menu_li">

        <a class="offcanvas__menu_item"
           href="/mens-collection">

            Men's Collection

        </a>

    </li>

    <!-- NEW ARRIVALS -->
    <li class="offcanvas__menu_li">

        <a class="offcanvas__menu_item"
           href="/new-arrivals">

            New Arrivals

        </a>

    </li>

    <!-- BLOG -->
    <li class="offcanvas__menu_li">

        <a class="offcanvas__menu_item"
           href="/blog">

            Fashion Blog

        </a>

    </li>

    <!-- SILAI POINT -->
    <li class="offcanvas__menu_li">

        <a class="offcanvas__menu_item" href="#">
            Silai Point
        </a>

        <ul class="offcanvas__sub_menu">

            <li class="offcanvas__sub_menu_li">

                <a href="/about"
                   class="offcanvas__sub_menu_item">

                    About Us

                </a>

            </li>

            <li class="offcanvas__sub_menu_li">

                <a href="/contact"
                   class="offcanvas__sub_menu_item">

                    Contact

                </a>

            </li>

            <li class="offcanvas__sub_menu_li">

                <a href="/track-order"
                   class="offcanvas__sub_menu_item">

                    Track Order

                </a>

            </li>

            <li class="offcanvas__sub_menu_li">

                <a href="/cart"
                   class="offcanvas__sub_menu_item">

                    Cart

                </a>

            </li>

            <li class="offcanvas__sub_menu_li">

                <a href="/wishlist"
                   class="offcanvas__sub_menu_item">

                    Wishlist

                </a>

            </li>

        </ul>

    </li>

</ul>
                    <div class="offcanvas__account--items">
                        <a class="offcanvas__account--items__btn d-flex align-items-center" href="login.html">
                        <span class="offcanvas__account--items__icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg> 
                            </span>
                        <span class="offcanvas__account--items__label">Login / Register</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->

        <!-- Start Offcanvas stikcy toolbar -->
        <div class="offcanvas__stikcy--toolbar color-scheme-2">
            <ul class="d-flex justify-content-between">
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="index.html">
                    <span class="offcanvas__stikcy--toolbar__icon"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443" viewBox="0 0 22 17"><path fill="currentColor" d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z"></path></svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Home</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">

    <a class="offcanvas__stikcy--toolbar__btn" href="/shop">

        <span class="offcanvas__stikcy--toolbar__icon">

            <i class="fa-solid fa-shirt"></i>

        </span>

        <span class="offcanvas__stikcy--toolbar__label">
            Fabrics
        </span>

    </a>

</li>
                <li class="offcanvas__stikcy--toolbar__list ">
                    <a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>   
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Search</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">

    <a class="offcanvas__stikcy--toolbar__btn"
       href="/my-account">

        <span class="offcanvas__stikcy--toolbar__icon">

            <i class="fa-regular fa-user"></i>

        </span>

        <span class="offcanvas__stikcy--toolbar__label">
            Account
        </span>

    </a>

</li>
                <li class="offcanvas__stikcy--toolbar__list">

    <a class="offcanvas__stikcy--toolbar__btn"
       href="/custom-stitching">

        <span class="offcanvas__stikcy--toolbar__icon">

            <i class="fa-solid fa-scissors"></i>

        </span>

        <span class="offcanvas__stikcy--toolbar__label">
            Buttons
        </span>

    </a>

</li>
            </ul>
        </div>
        <!-- End Offcanvas stikcy toolbar -->

        <!-- Start offCanvas minicart -->
<div class="offCanvas__minicart color-scheme-2">

    <div class="minicart__header">

        <div class="minicart__header--top d-flex justify-content-between align-items-center">

            <h2 class="minicart__title h3">
                Shopping Cart
            </h2>

            <button class="minicart__close--btn"
                    aria-label="minicart close button"
                    data-offcanvas>

                <svg class="minicart__close--icon"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512">

                    <path fill="currentColor"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="32"
                          d="M368 368L144 144M368 144L144 368"/>

                </svg>

            </button>

        </div>

        <p class="minicart__header--desc">
            Premium Pakistani Fabric Collection
        </p>

    </div>


    <!-- PRODUCTS -->
    <div class="minicart__product">

        @php
            $total = 0;
        @endphp

        @forelse(session('cart', []) as $id => $item)

            @php
                $total += $item['total_price'];
            @endphp

            <div class="minicart__product--items d-flex">

                <!-- IMAGE -->
                <div class="minicart__thumb">

                    <a href="#">

                        <img src="{{ asset('uploads/fabrics/' . $item['image']) }}"
                             alt="{{ $item['name'] }}">

                    </a>

                </div>

                <!-- TEXT -->
                <div class="minicart__text">

                    <h3 class="minicart__subtitle h4">

                        <a href="#">
                            {{ $item['name'] }}
                        </a>

                    </h3>

                    <span class="color__variant">

                        <b>Fabric:</b>

                        {{ isset($item['fabric_type']) ? $item['fabric_type'] : 'N/A' }}

                    </span>

                    <div class="minicart__price">

                        <span class="current__price">

                            Rs. {{ number_format($item['total_price'],0) }}

                        </span>

                    </div>

                    <div class="minicart__text--footer d-flex align-items-center">

                        <div class="quantity__box minicart__quantity">

                            <input type="number"
                                   class="quantity__number"
                                   value="{{ $item['meter'] ?? '' }}"
                                   readonly>

                        </div>

                        <!-- REMOVE -->
                        <a href="{{ route('cart.remove', $id) }}"
                           class="minicart__product--remove">

                            Remove

                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="text-center py-4">

                <p>
                    Your cart is empty
                </p>

            </div>

        @endforelse

    </div>


    <!-- TOTAL -->
    <div class="minicart__amount">

        <div class="minicart__amount_list d-flex justify-content-between">

            <span>Total:</span>

            <span>

                <b>
                    Rs. {{ number_format($total,0) }}
                </b>

            </span>

        </div>

    </div>


    <!-- BUTTONS -->
    <div class="minicart__button d-flex justify-content-center">

        <a class="primary__btn minicart__button--link"
           href="{{ route('cart.page') }}">

            View Cart

        </a>

        <a class="primary__btn minicart__button--link"
           href="{{ route('checkout') }}">

            Checkout

        </a>

    </div>

</div>
<!-- End offCanvas minicart -->

        <!-- Start serch box area -->
        <div class="predictive__search--box color-scheme-2">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text">
                    </label>
                    <button class="predictive__search--button"><svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
            </button>
        </div>
        <!-- End serch box area -->
    </header>