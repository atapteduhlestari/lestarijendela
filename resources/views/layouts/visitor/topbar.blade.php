<!-- Header -->
<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Premium Windows & Doors System
                </div>

                <div class="right-top-bar flex-w h-full">

                    <a href="/home/FAQs" class="flex-c-m trans-04 p-lr-25">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        EN
                    </a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="/" class="logo">
                    <img src="/assets/img/logo.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        {{-- <li>
                            <a href="/">Home</a>
                            <ul class="sub-menu">
                                <li><a href="/">Homepage 1</a></li>
                                <li><a href="home-02.html">Homepage 2</a></li>
                                <li><a href="home-03.html">Homepage 3</a></li>
                            </ul>
                        </li> --}}

                        <li class="{{ request()->is('/') || request()->is('home') ? 'active-menu' : '' }}">
                            <a href="/">
                                <i class="zmdi zmdi-home"></i>
                            </a>
                        </li>

                        <li class="label1 {{ request()->is('home/product*') ? 'active-menu' : '' }}" data-label1="hot">
                            <a href="/home/product">Product</a>
                        </li>

                        <li class="{{ request()->is('home/gallery*') ? 'active-menu' : '' }}">
                            <a href="/home/gallery">Gallery</a>
                        </li>

                        <li class="{{ request()->is('home/blog*') ? 'active-menu' : '' }}">
                            <a href="/home/blog">Blog</a>
                        </li>

                        <li class="{{ request()->is('home/about*') ? 'active-menu' : '' }}">
                            <a href="/home/about">About</a>
                        </li>

                        <li class="{{ request()->is('home/contact*') ? 'active-menu' : '' }}">
                            <a href="/home/contact">Contact</a>
                        </li>

                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="/"><img src="/assets/img/logo.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Premium Windows & Doors System
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">

                    <a href="/home/FAQs" class="flex-c-m p-lr-10 trans-04">

                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            {{-- <li>
                <a href="/">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="/">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li> --}}

            <li class="{{ request()->is('/') || request()->is('home') ? 'active-menu' : '' }}">
                <a href="/">Home</a>
            </li>

            <li class="{{ request()->is('home/product*') ? 'active-menu' : '' }}">
                <a href="/home/product" class="label1 rs1" data-label1="hot">Product</a>
            </li>

            <li class="{{ request()->is('home/gallery*') ? 'active-menu' : '' }}">
                <a href="/home/gallery">Gallery</a>
            </li>

            <li class="{{ request()->is('home/blog*') ? 'active-menu' : '' }}">
                <a href="/home/blog">Blog</a>
            </li>

            <li class="{{ request()->is('home/about*') ? 'active-menu' : '' }}">
                <a href="/home/about">About</a>
            </li>

            <li class="{{ request()->is('home/contact*') ? 'active-menu' : '' }}">
                <a href="/home/contact">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="/assets/visitor/images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
