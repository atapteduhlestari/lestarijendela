 <!-- Header -->
 <header>
     <!-- Header desktop -->
     <div class="container-menu-desktop">
         <!-- Topbar -->
         <div class="top-bar">
             <div class="content-topbar flex-sb-m h-full container">
                 <div class="left-top-bar">
                     LESTARI JENDELA PREMIUM WINDOWS & DOORS SYSTEM
                 </div>
                 <div class="right-top-bar flex-w h-full">
                     <a href="#" class="flex-c-m trans-04 p-lr-25">
                         Help & FAQs
                     </a>
                     <a href="#" class="flex-c-m trans-04 p-lr-25">
                         EN
                     </a>
                     <a href="#" class="flex-c-m trans-04 cl3 hov-cl1 p-lr-25 tooltip100" data-tooltip="Facebook">
                         <i class="fa fa-facebook"></i>
                     </a>
                     <a href="#" class="flex-c-m trans-04 cl3 hov-cl1 p-lr-25 tooltip100"
                         data-tooltip="Instagram">
                         <i class="fa fa-instagram"></i>
                     </a>
                     <a href="#" class="flex-c-m trans-04 cl3 hov-cl1 p-lr-25 tooltip100" data-tooltip="YouTube">
                         <i class="fa fa-youtube"></i>
                     </a>

                 </div>
             </div>
         </div>

         <div class="wrap-menu-desktop">
             <nav class="limiter-menu-desktop container">

                 <!-- Logo desktop -->
                 <a href="#" class="logo">
                     <img src="/assets/img/logo.png" alt="IMG-LOGO">
                 </a>

                 <!-- Menu desktop -->
                 <div class="menu-desktop">
                     <ul class="main-menu">
                         <li class="{{ request()->is('/') ? 'active-menu' : '' }}">
                             <a href="/">Home</a>
                         </li>

                         <li class="label1" data-label1="hot">
                             <a href="#">Product</a>
                         </li>

                         <li>
                             <a href="#">Gallery</a>
                         </li>

                         <li>
                             <a href="#">Blog</a>
                         </li>

                         <li>
                             <a href="#">About</a>
                         </li>

                         <li>
                             <a href="/contact">Contact</a>
                         </li>
                     </ul>
                 </div>

                 <!-- Icon header -->
                 <div class="wrap-icon-header flex-w flex-r-m">
                     <div class="icon-header-item cl0 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
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
             <a href="index.html"><img src="/assets/img/logo.png" alt="IMG-LOGO"></a>
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
                     LESTARI JENDELA PREMIUM WINDOWS & DOORS SYSTEM
                 </div>
             </li>

             <li>
                 <div class="right-top-bar flex-w h-full">
                     <a href="#" class="flex-c-m p-lr-10 trans-04">
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
                 <a href="index.html">Home</a>
                 <ul class="sub-menu-m">
                     <li><a href="index.html">Homepage 1</a></li>
                     <li><a href="home-02.html">Homepage 2</a></li>
                     <li><a href="home-03.html">Homepage 3</a></li>
                 </ul>
                 <span class="arrow-main-menu-m">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                 </span>
             </li> --}}

             <li class="{{ request()->is('/') ? 'active-menu' : '' }}">
                 <a href="/">Home</a>
             </li>

             <li>
                 <a href="#" class="label1 rs1" data-label1="hot">Product</a>
             </li>

             <li>
                 <a href="#">Gallery</a>
             </li>

             <li>
                 <a href="#">Blog</a>
             </li>

             <li>
                 <a href="#">About</a>
             </li>

             <li>
                 <a href="#">Contact</a>
             </li>
         </ul>
     </div>

     <!-- Modal Search -->
     <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
         <div class="container-search-header">
             <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                 <img src="/assets/visitor/images/icons/icon-close2.png" alt="CLOSE">
             </button>

             <form action="" class="wrap-search-header flex-w p-l-15">
                 <button class="flex-c-m trans-04">
                     <i class="zmdi zmdi-search"></i>
                 </button>
                 <input class="plh3" type="text" name="search" placeholder="Search...">
             </form>
         </div>
     </div>
 </header>
