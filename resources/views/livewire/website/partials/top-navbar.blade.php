 <div>

     <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
         data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="animation-duration: 0.3s;">
         <!--begin::Container-->
         <div class="container">
             <!--begin::Wrapper-->
             <div class="d-flex align-items-center justify-content-between">
                 <!--begin::Logo-->
                 <div class="d-flex align-items-center flex-equal">
                     <!--begin::Mobile menu toggle-->
                     <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                         id="kt_landing_menu_toggle">
                         <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                         <span class="svg-icon svg-icon-2hx">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                 <path
                                     d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                     fill="black"></path>
                                 <path opacity="0.3"
                                     d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                     fill="black"></path>
                             </svg>
                         </span>
                         <!--end::Svg Icon-->
                     </button>
                     <!--end::Mobile menu toggle-->
                     <!--begin::Logo image-->
                     <a href="../../demo1/dist/landing.html">

                         <img alt="Logo" src="http://127.0.0.1:8000/website-assets/media/logos/logo-landing.svg"
                             class="logo-default h-25px h-lg-30px">
                         <img alt="Logo"
                             src="http://127.0.0.1:8000/website-assets/media/logos/logo-landing-dark.svg"
                             class="logo-sticky h-20px h-lg-25px">
                     </a>
                     <!--end::Logo image-->
                 </div>
                 <!--end::Logo-->
                 <!--begin::Menu wrapper-->
                 <div class="d-lg-block" id="kt_header_nav_wrapper">
                     <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                         data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                         data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                         data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                         data-kt-swapper-mode="prepend"
                         data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                         <!--begin::Menu-->
                         <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold"
                             id="kt_landing_menu">
                             <!--begin::Menu item-->
                             <div class="menu-item">
                                 <!--begin::Menu link-->
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6 active" href="#kt_body"
                                     data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                 <!--end::Menu link-->
                             </div>
                             <!--end::Menu item-->
                             <!--begin::Menu item-->
                             <div class="menu-item">
                                 <!--begin::Menu link-->
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                     data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">How it Works</a>
                                 <!--end::Menu link-->
                             </div>
                             <!--end::Menu item-->
                             <!--begin::Menu item-->
                             <div class="menu-item">
                                 <!--begin::Menu link-->
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements"
                                     data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Achievements</a>
                                 <!--end::Menu link-->
                             </div>
                             <!--end::Menu item-->
                             <!--begin::Menu item-->
                             <div class="menu-item">
                                 <!--begin::Menu link-->
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team"
                                     data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Team</a>
                                 <!--end::Menu link-->
                             </div>
                             <!--end::Menu item-->
                             <!--begin::Menu item-->
                             <div class="menu-item">
                                 <!--begin::Menu link-->
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio"
                                     data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Portfolio</a>
                                 <!--end::Menu link-->
                             </div>
                             <!--end::Menu item-->
                             <!--begin::Menu item-->
                             <div class="menu-item">
                                 <!--begin::Menu link-->
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing"
                                     data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
                                 <!--end::Menu link-->
                             </div>
                             <!--end::Menu item-->
                         </div>
                         <!--end::Menu-->
                     </div>
                 </div>
                 <!--end::Menu wrapper-->
                 <!--begin::Toolbar-->
                 <div class="flex-equal text-end ms-1">
                     <a href="../../demo1/dist/authentication/flows/basic/sign-in.html" class="btn btn-success">Sign
                         In</a>
                 </div>
                 <!--end::Toolbar-->
             </div>
             <!--end::Wrapper-->
         </div>
         <!--end::Container-->
     </div>

     {{-- <header>
         <nav class="navbar bg-dark  navbar-expand-md navbar-dark justify-content-between align-items-center py-3 ">
             <div class="container">

                 <button class="navbar-toggler my-3" type="button" data-bs-toggle="collapse" data-bs-target=".navmenu">
                     <span class="navbar-toggler-icon " style="color: yellow !important;"></span>
                 </button>


                <div class="collapse navbar-collapse navmenu">
                     <ul class="navbar-nav" style="text-align: start;">
                         <li class="nav-item px-2"><a href="#" class="nav-link">الرئيسية</a></li>
                         <li class="nav-item px-2"><a href="#" class="nav-link">معرض</a></li>
                         <li class="nav-item px-2"><a href="#" class="nav-link">رؤيتنا</a></li>
                         <li class="nav-item px-2"><a href="#" class="nav-link">اتصل بنا</a></li>
                         <li class="nav-item px-2"><a href="#" class="nav-link">مدونات</a></li>
                         <li class="nav-item mx-lg-5 " id="login-span"><a href="#"
                                 class="nav-link text-warning">دخول</a></li>
                     </ul>
                 </div>



                 <div style="height: 50px; width: 60px; " class="py-1 d-none d-lg-block  " id="move-log">
                     <a href="#"> <img src="{{ asset('media/html/logo/1.png') }}" alt="not available"
                             style="height: 100%; width:100%;"></a>
                 </div>
             </div>

         </nav>
     </header> --}}
 </div>
