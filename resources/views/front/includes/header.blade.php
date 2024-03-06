<header class="header header-2 header-intro-clearance">
    <div class="header-top d-none d-md-block">
        <div class="container-fluid header-top-bg">
            <div class="header-left">
                <ul class="top-menu">
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook-f fa-2xs"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram fa-2xs"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter fa-2xs"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-pinterest fa-2xs"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin fa-2xs"></i></a>
                    </li>
                </ul>
            </div>
            <!-- End .header-left -->

            <div class="header-right">
                <ul class="top-menu">
                    <li>
                        info@opensoft.com.bd
                    </li>
                    <li>|</li>
                    <li>
                        +880 133 000 2025
                    </li>
                </ul>
                <!-- End .top-menu -->
            </div>
            <!-- End .header-right -->

        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-top -->

    <div class="header-middle">
        <div class="container-fluid">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{ route('home') }}" class="logo logo-container">
                    <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/logo.png" alt="q7bd Logo" width="50" height="50">
                    <span class="logo-text">Q7BD</span>
                </a>
            </div>
            <!-- End .header-left -->

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search" required>
                            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <!-- End .header-search-wrapper -->
                    </form>
                </div>
                <!-- End .header-search -->
            </div>

            <div class="header-right">
                <a href="#" class="btn-offer-bg d-none d-md-block">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path></svg>Offer
                </a>
                <div class="cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <div class="icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="cart-count">2</span>
                        </div>
                    </a>
                </div>
                <div class="wishlist-container">
                    <div class="wishlist">
                        <a href="wishlist.html" title="Wishlist">
                            <div class="icon">
                                <i class="fa-solid fa-heart"></i>
                                <span class="wishlist-count badge">3</span>
                            </div>
                        </a>
                    </div>

                    <div class="wishlist">
                        <a href="wishlist.html" title="Wishlist">
                            <div class="icon">
                                <i class="fa-solid fa-code-compare"></i>
                                <span class="wishlist-count badge">3</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="account">
                    @if (auth()->user() !== null)
                    <a href="{{ route('user.dashboard') }}" title="My account">
                        <div class="icon">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </a>
                    @else
                    <a href="{{ route('user.login') }}" title="My account">
                        <div class="icon">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </a>
                    @endif
                </div>
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">

                        <li class="active">
                            <a href="blog.html" class="sf-with-ul">Blog <i class="fa-solid fa-caret-down"></i></a>

                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-10">
                                                Grid
                                            </div>
                                            <div class="col-2">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-10">
                                                Masonry
                                            </div>
                                            <div class="col-2">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-10">
                                                Mask
                                            </div>
                                            <div class="col-2">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-10">
                                                Single Post
                                            </div>
                                            <div class="col-2">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="single.html">Default with sidebar</a></li>
                                        <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                        <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="active">
                            <a href="blog.html" class="sf-with-ul">Blog <i class="fa-solid fa-caret-down"></i></a>

                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-10">
                                                Grid
                                            </div>
                                            <div class="col-2">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-10">
                                                Masonry
                                            </div>
                                            <div class="col-2">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-10">
                                                Mask
                                            </div>
                                            <div class="col-2">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-10">
                                                Single Post
                                            </div>
                                            <div class="col-2">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="single.html">Default with sidebar</a></li>
                                        <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                        <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End .menu -->
                </nav>
                <!-- End .main-nav -->
            </div>
            <!-- End .header-center -->

            {{-- <div class="header-right">
                <i class="la la-lightbulb-o"></i>
                <p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
            </div> --}}
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-bottom -->
</header>
<!-- End .header -->

<main class="main">
