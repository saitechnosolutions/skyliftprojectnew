<header class="header dark-header position-fixed top-0 left-0 z-3 w-100 pt-10 pb-10 bagrr">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="nav d-flex align-items-center justify-content-between">
                    <!-- logo -->
                    <div class="logo-container">
                        <a href="/">
                            <img class="header-logo" src="img/logoo.png" alt="logo">
                        </a>
                    </div>
                    <div class="nav-menu d-flex align-items-center">
                        <ul class="header-menu d-none d-lg-flex flex-row align-items-center z-1 position-relative mr-35 menu">
                            <li>
                                <a class="menu-link text-uppercase redirect fw-500" href="/">Home</a>
                                {{-- <ul class="submenu-container">
                                    <li><a class="submenu-link text-uppercase fw-500" href="index.html">Home
                                            1</a></li>
                                    <li><a class="submenu-link text-uppercase fw-500" href="index2.html">Home
                                            2</a></li>
                                    <li><a class="submenu-link text-uppercase fw-500" href="index3.html">Home
                                            3</a></li>
                                </ul> --}}
                            </li>
                            <li>
                                <a class="menu-link text-uppercase redirect1 fw-500" href="#about">About Us</a>
                            </li>
                            {{-- <li>
                                <a class="menu-link text-uppercase fw-500" href="services.html">Services</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="portfolio.html">Portfolio</a>
                            </li>
                            <li>
                                <a class="menu-link text-uppercase fw-500" href="blog.html">Blog</a>
                            </li> --}}
                            {{-- href="#ourproduct" --}}
                            <li>
                                <a class="menu-link redirect2 text-uppercase fw-500" >Products</a>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                <ul class="submenu-container">
                                    <li><a class="submenu-link text-uppercase fw-500" href="product1">Space Master</a></li>

                                    <li><a class="submenu-link text-uppercase fw-500" href="product2">Indoor Closed Elevator</a></li>

                                    <li><a class="submenu-link text-uppercase fw-500" href="product3">Outdoor Closed Elevator</a></li>
                                    {{-- <li>
                                        <a class="submenu-link text-uppercase fw-500" href="team.html">Team</a>
                                    </li>
                                    <li>
                                        <a class="submenu-link text-uppercase fw-500" href="teamDetails.html">Team
                                            Details</a>
                                    </li> --}}
                                </ul>
                            </li>
                            <li>
                                <a class="menu-link redirect3 text-uppercase fw-500" href="#contactus">Contact Us</a>
                            </li>
                        </ul>
                        {{-- MenuToggleIcon.png --}}
                        <div class="desktop-menu-offcanvas position-relative">
                            <img class="off-canvas-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" src="img/bbar.svg" alt="menu toggle icon">
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <img id="offcanvasRightLabel" class="header-logo offcanvas-title img-fluid" src="img/logoo.png" alt="logo">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" id="closeButton" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="accordion-menu">
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase"> <a class="redirect" href="/">Home</a></span>
                                                {{-- <i class="fa fa-chevron-down" aria-hidden="true"></i> --}}
                                            </div>
                                            {{-- <ul class="submenuItems">
                                                <li><a class="submenu-link text-uppercase fw-500" href="index.html">Home
                                                        1</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500" href="index2.html">Home 2</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500" href="index3.html">Home 3</a></li>
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a class="redirect1 clbtre" href="#about">About Us</a>
                                                </span>
                                            </div>
                                        </li>
                                        {{-- <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="services.html">Services</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="portfolio.html">Portfolio</a>
                                                </span>
                                            </div>
                                        </li> --}}
                                        {{-- <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a href="blog.html">Blog</a>
                                                </span>
                                            </div>
                                        </li> --}}
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">Products</span>
                                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </div>
                                            <ul class="submenuItems">


                                                <li><a class="submenu-link text-uppercase fw-500" href="product1">SL1 – CABIN LIFT</a></li>

                                                <li><a class="submenu-link text-uppercase fw-500" href="product2">SL2 – Hydraulic Elevator with Closed Cabin (Indoor)</a></li>

                                                <li><a class="submenu-link text-uppercase fw-500" href="product3">SL3 – Hydraulic Home Elevator with Closed Cabin (Outdoor)</a></li>
                                                {{-- <li><a class="submenu-link text-uppercase fw-500" href="team.html">Taem</a></li>
                                                <li><a class="submenu-link text-uppercase fw-500" href="teamDetails.html">Team Details</a></li> --}}

                                            </ul>
                                        </li>
                                        <li>
                                            <div class="dropdownlink">
                                                <span class="text-uppercase">
                                                    <a class="redirect3 clbtre1" href="#contactus">Contact Us</a>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @if (session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    @if (session()->get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{-- @if (session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-dismiss="alert">&times;</button>
    </div>
@endif --}}
</header>

<nav class="social-media-side">
    <ul>
        <li><a href="https://api.whatsapp.com/send?phone=918925325153" target="_blank" style="font-size:20px;">Whatsapp <img src="/img/Whatsapp Icon.png" class="img-fluid" alt=""> </a></li>
        <li><a href="tel:+918925325153"  style="font-size:20px;">Call Us<img src="img/Call Icon.png" class="img-fluid" alt=""> </a>
          <li><a href="https://www.instagram.com/your-username/" style="font-size:20px;">Instagram<img src="img/insta.png" class="img-fluid insta" alt="" style="padding: 6px;"> </a>
        </li>
    </ul>
</nav>
<!-- end header -->
