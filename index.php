<?php
get_header();
?>



<div id="page">

    <header class="version_1">
        <div class="layer"></div><!-- Mobile menu overlay mask -->
        <div class="main_header">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                        <div id="logo">
                            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'small' );
                            if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
                                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                            }
                            ?>

                        </div>
                    </div>
                    <nav class="col-xl-6 col-lg-7">
                        <a class="open_close" href="javascript:void(0);">
                            <div class="hamburger hamburger--spin">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <div class="main-menu">
                            <div id="header_menu">
                                <a href="index.html"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
                                <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                            </div>
                            <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'menu_class'      => 'submenu',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ) );

                            ?>
                        </div>
                        <!--/main-menu -->
                    </nav>
                    <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
                        <a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94 423-23-221</strong></a>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /main_header -->

        <div class="main_nav Sticky">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <nav class="categories">
                            <ul class="clearfix">
                                <li><span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Categories
										</a>
									</span>
                                    <div id="menu">
                                        <ul>
                                            <li><span><a href="#0">Collections</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-1-full.html">Trending</a></li>
                                                    <li><a href="listing-grid-2-full.html">Life style</a></li>
                                                    <li><a href="listing-grid-3.html">Running</a></li>
                                                    <li><a href="listing-grid-4-sidebar-left.html">Training</a></li>
                                                    <li><a href="listing-grid-5-sidebar-right.html">View all Collections</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Men</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-6-sidebar-left.html">Offers</a></li>
                                                    <li><a href="listing-grid-7-sidebar-right.html">Shoes</a></li>
                                                    <li><a href="listing-row-1-sidebar-left.html">Clothing</a></li>
                                                    <li><a href="listing-row-3-sidebar-left.html">Accessories</a></li>
                                                    <li><a href="listing-row-4-sidebar-extended.html">Equipment</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Women</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-1-full.html">Best Sellers</a></li>
                                                    <li><a href="listing-grid-2-full.html">Clothing</a></li>
                                                    <li><a href="listing-grid-3.html">Accessories</a></li>
                                                    <li><a href="listing-grid-4-sidebar-left.html">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Boys</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-6-sidebar-left.html">Easy On Shoes</a></li>
                                                    <li><a href="listing-grid-7-sidebar-right.html">Clothing</a></li>
                                                    <li><a href="listing-row-3-sidebar-left.html">Must Have</a></li>
                                                    <li><a href="listing-row-4-sidebar-extended.html">All Boys</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Girls</a></span>
                                                <ul>
                                                    <li><a href="listing-grid-1-full.html">New Releases</a></li>
                                                    <li><a href="listing-grid-2-full.html">Clothing</a></li>
                                                    <li><a href="listing-grid-3.html">Sale</a></li>
                                                    <li><a href="listing-grid-4-sidebar-left.html">Best Sellers</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Customize</a></span>
                                                <ul>
                                                    <li><a href="listing-row-1-sidebar-left.html">For Men</a></li>
                                                    <li><a href="listing-row-2-sidebar-right.html">For Women</a></li>
                                                    <li><a href="listing-row-4-sidebar-extended.html">For Boys</a></li>
                                                    <li><a href="listing-grid-1-full.html">For Girls</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                        <div class="custom-search-input">
                            <input type="text" placeholder="Search over 10.000 products">
                            <button type="submit"><i class="header-icon_search_custom"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-3">
                        <ul class="top_tools">
                            <li>
                                <div class="dropdown dropdown-cart">
                                    <a href="cart.html" class="cart_bt"><strong>2</strong></a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li>
                                                <a href="product-detail-1.html">
                                                    <figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/1.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                                    <strong><span>1x Armor Air x Fear</span>$90.00</strong>
                                                </a>
                                                <a href="#0" class="action"><i class="ti-trash"></i></a>
                                            </li>
                                            <li>
                                                <a href="product-detail-1.html">
                                                    <figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/2.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                                    <strong><span>1x Armor Okwahn II</span>$110.00</strong>
                                                </a>
                                                <a href="0" class="action"><i class="ti-trash"></i></a>
                                            </li>
                                        </ul>
                                        <div class="total_drop">
                                            <div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
                                            <a href="cart.html" class="btn_1 outline">View Cart</a><a href="checkout.html" class="btn_1">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /dropdown-cart-->
                            </li>
                            <li>
                                <a href="#0" class="wishlist"><span>Wishlist</span></a>
                            </li>
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="account.html" class="access_link"><span>Account</span></a>
                                    <div class="dropdown-menu">
                                        <a href="account.html" class="btn_1">Sign In or Sign Up</a>
                                        <ul>
                                            <li>
                                                <a href="track-order.html"><i class="ti-truck"></i>Track your Order</a>
                                            </li>
                                            <li>
                                                <a href="account.html"><i class="ti-package"></i>My Orders</a>
                                            </li>
                                            <li>
                                                <a href="account.html"><i class="ti-user"></i>My Profile</a>
                                            </li>
                                            <li>
                                                <a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /dropdown-access-->
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
                            </li>
                            <li>
                                <a href="#menu" class="btn_cat_mob">
                                    <div class="hamburger hamburger--spin" id="hamburger">
                                        <div class="hamburger-box">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>
                                    Categories
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="search_mob_wp">
                <input type="text" class="form-control" placeholder="Search over 10.000 products">
                <input type="submit" class="btn_1 full-width" value="Search">
            </div>
            <!-- /search_mobile -->
        </div>
        <!-- /main_nav -->
    </header>
    <!-- /header -->

    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">
                <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_2.jpg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-end">
                                <div class="col-lg-6 static">
                                    <div class="slide-text text-right white">
                                        <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage Low</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Limited items available at this price
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_1.jpg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white">
                                        <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>VaporMax Flyknit 3</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Limited items available at this price
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_3.jpg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-12 static">
                                    <div class="slide-text text-center black">
                                        <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Monarch IV SE</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Lightweight cushioning and durable support with a Phylon midsole
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/owl-slide-->
                </div>
            </div>
            <div id="icon_drag_mobile"></div>
        </div>
        <!--/carousel-->

        <ul id="banners_grid" class="clearfix">
            <li>
                <a href="#0" class="img_container">
                    <img src="img/banners_cat_placeholder.jpg" data-src="img/banner_1.jpg" alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Men's Collection</h3>
                        <div><span class="btn_1">Shop Now</span></div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#0" class="img_container">
                    <img src="img/banners_cat_placeholder.jpg" data-src="img/banner_2.jpg" alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Womens's Collection</h3>
                        <div><span class="btn_1">Shop Now</span></div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#0" class="img_container">
                    <img src="img/banners_cat_placeholder.jpg" data-src="img/banner_3.jpg" alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Kids's Collection</h3>
                        <div><span class="btn_1">Shop Now</span></div>
                    </div>
                </a>
            </li>
        </ul>
        <!--/banners_grid -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Top Selling</h2>
                <span>Products</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
            </div>
            <div class="row small-gutters">
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <figure>
                            <span class="ribbon off">-30%</span>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/1.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/1_b.jpg" alt="">
                            </a>
                            <div data-countdown="2019/05/15" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air x Fear</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$48.00</span>
                            <span class="old_price">$60.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon off">-30%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/2.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/2_b.jpg" alt="">
                            </a>
                            <div data-countdown="2019/05/10" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Okwahn II</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$90.00</span>
                            <span class="old_price">$170.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon off">-50%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/3.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/3_b.jpg" alt="">
                            </a>
                            <div data-countdown="2019/05/21" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Wildwood ACG</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$75.00</span>
                            <span class="old_price">$155.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor ACG React Terra</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$110.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/6.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/6_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$130.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/7.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/7_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Max 98</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$115.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/8.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/8_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Max 720</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$120.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="featured lazy" data-bg="url(img/featured_home.jpg)">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container margin_60">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-6 wow" data-wow-offset="150">
                            <h3>Armor<br>Air Color 720</h3>
                            <p>Lightweight cushioning and durable support with a Phylon midsole</p>
                            <div class="feat_text_block">
                                <div class="price_box">
                                    <span class="new_price">$90.00</span>
                                    <span class="old_price">$170.00</span>
                                </div>
                                <a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /featured -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Featured</h2>
                <span>Products</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
            </div>
            <div class="owl-carousel owl-theme products_carousel">
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>ACG React Terra</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$110.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/5.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/8.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Air Color 720</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$120.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon off">-30%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/2.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Okwahn II</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$90.00</span>
                            <span class="old_price">$170.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon off">-50%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/3.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Air Wildwood ACG</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$75.00</span>
                            <span class="old_price">$155.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
            </div>
            <!-- /products_carousel -->
        </div>
        <!-- /container -->

        <div class="bg_gray">
            <div class="container margin_30">
                <div id="brands" class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_1.png" alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_2.png" alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_3.png" alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_4.png" alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_5.png" alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_6.png" alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                </div><!-- /carousel -->
            </div><!-- /container -->
        </div>
        <!-- /bg_gray -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Latest News</h2>
                <span>Blog</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure>
                            <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-1.jpg" alt="" width="400" height="266" class="lazy">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>by Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure>
                            <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-2.jpg" alt="" width="400" height="266" class="lazy">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>By Jhon Doe</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Duo eius postea suscipit ad</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure>
                            <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-3.jpg" alt="" width="400" height="266" class="lazy">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>By Luca Robinson</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Elitr mandamus cu has</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure>
                            <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-4.jpg" alt="" width="400" height="266" class="lazy">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>By Paula Rodrigez</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Id est adhuc ignota delenit</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

<?php get_footer(); ?>
