<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TattooZ - Shop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- all css here -->
        <!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <!-- owl.carousel.2.0.0-beta.2.4 css -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
        <!-- font-awesome v4.6.3 css -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <!-- magnific-popup.css -->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <!-- flaticon.css -->
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <!-- slicknav.min.css -->
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- modernizr css -->
        <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header-area start -->
         <!-- header-area start -->
        <header class="header-area" id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header-bottom">
                             <div class="row">
                                <div class="col-md-3 col-sm-9 col-xs-6">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{asset('assets/images/logo.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 hidden-sm hidden-xs">
                                    <div class="mainmenu text-right">
                                        <ul id="navigation">
                                            <li class="active"><a href="{{url('home')}}">HOME</a>
                                                <ul>
                                                    <li class="active"><a href="{{url('pages/index')}}">Home One</a></li>
                                                    <li><a href="{{url('pages/index2')}}">Home Two</a></li>
                                                    <li><a href="{{url('pages/index3')}}">Home Three</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('pages/service')}}">Service</a>
                                                <ul>
                                                    <li><a href="{{url('pages/service')}}">Service One</a></li>
                                                    <li><a href="{{url('pages/service2')}}">Service Two</a></li>
                                                    <li><a href="{{url('pages/service3')}}">Service Three</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">PAGES</a>
                                                <ul>
                                                    <li><a href="{{url('pages/about')}}">about us</a></li>
                                                    <li><a href="{{url('pages/project')}}">Project page</a></li>
                                                    <li><a href="{{url('pages/booking')}}">Booking page</a></li>
                                                    <li><a href="{{url('pages/pricing')}}">Pricing page</a></li>
                                                    <li><a href="{{url('pages/404.html')}}">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('pages/blog')}}">BLOG</a>
                                                <ul>
                                                    <li><a href="{{url('pages/blog')}}">Blog</a></li>
                                                    <li><a href="{{url('pages/blog2')}}">Blog Two</a></li>
                                                    <li><a href="{{url('pages/blog-left')}}">Blog Left</a></li>
                                                    <li><a href="{{url('pages/blog-right')}}">Blog Right</a></li>
                                                    <li><a href="{{url('pages/blog-details')}}">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('pages/shop')}}">Shop</a>
                                                <ul>
                                                    <li><a href="{{url('pages/shop')}}">Shop Page</a></li>
                                                    <li><a href="{{url('pages/checkout')}}">Checkout</a></li>
                                                    <li><a href="{{url('pages/cart')}}">Shopping Cart</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('pages/team')}}">Team</a>
                                                <ul>
                                                    <li><a href="{{url('pages/team')}}">Team One</a></li>
                                                    <li><a href="{{url('pages/team2')}}">Team Two</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('pages/contact')}}">CONTACT</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-2 col-xs-4">
                                    <div class="search-wrap text-right">
                                        <ul>
                                            <li><a href="{{url('pages/cart')}}"><i class="fa fa-shopping-cart"></i><span>3</span></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                                                <ul>
                                                    <li>
                                                        <form action="#">
                                                            <input type="text" placeholder="Search Here...">
                                                            <button><i class="fa fa-search"></i></button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=" col-xs-2 col-sm-1 hidden-md hidden-lg">
                                    <div class="responsive-menu-wrap floatright"></div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- header-area end -->

        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>Our Shop</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li class="active">shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->
		
		<!-- shop-area start -->
		<div class="shop-area ptb-70 bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-xs-12">
						<div class="view-wrap">
							<div class="row">
								<div class="col-md-6 col-lg-7 col-xs-12">
									<h2 class="shop-title">Showing 1–12 of 230 results</h2>
								</div>
								<div class="col-md-6 col-lg-5 clear col-xs-12">
									<div class="selector">
										<select name="#" id="select">
											<option value="Default sorting">Default sorting</option>
											<option value="#">Html</option>
											<option value="#">CSS</option>
											<option value="#">Psd</option>
											<option value="#">Php</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-xs-12 col-2">
		                        <div class="shop-wrap">
		                            <div class="shop-img">
		                                <img src="assets/images/shop/1.png" alt="">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
		                                </ul>
		                            </div>
		                            <div class="shop-content">
		                                <h3><a href="shop.html">Tattoo Machine</a></h3>
		                                <p>$121.05</p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 col-xs-12 col-2">
		                        <div class="shop-wrap">
		                            <div class="shop-img">
		                                <img src="assets/images/shop/2.png" alt="">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
		                                </ul>
		                            </div>
		                            <div class="shop-content">
		                                <h3><a href="shop.html">Gloves</a></h3>
		                                <p>$45</p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 col-xs-12 col-2">
		                        <div class="shop-wrap">
		                            <div class="shop-img">
		                                <img src="assets/images/shop/3.png" alt="">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
		                                </ul>
		                            </div>
		                            <div class="shop-content">
		                                <h3><a href="shop.html">Boys Earrings</a></h3>
		                                <p>$60</p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 col-xs-12 col-2">
		                        <div class="shop-wrap">
		                            <div class="shop-img">
		                                <img src="assets/images/shop/4.png" alt="">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
		                                </ul>
		                            </div>
		                            <div class="shop-content">
		                                <h3><a href="shop.html">Tatoo Ink</a></h3>
		                                <p>$75.50</p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 col-xs-12 col-2">
		                        <div class="shop-wrap">
		                            <div class="shop-img">
		                                <img src="assets/images/shop/1.png" alt="">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
		                                </ul>
		                            </div>
		                            <div class="shop-content">
		                                <h3><a href="shop.html">Tattoo Machine</a></h3>
		                                <p>$121.05</p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 col-xs-12 col-2">
		                        <div class="shop-wrap">
		                            <div class="shop-img">
		                                <img src="assets/images/shop/2.png" alt="">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
		                                </ul>
		                            </div>
		                            <div class="shop-content">
		                                <h3><a href="shop.html">Gloves</a></h3>
		                                <p>$45</p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-xs-12">
		                        <div class="pagination-wrap text-center">
		                            <ul>
		                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
		                                <li><a href="#">1</a></li>
		                                <li><a href="#">2</a></li>
		                                <li> <span>3</span></li>
		                                <li><a href="#">4</a></li>
		                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
		                            </ul>
		                        </div>
		                    </div>
						</div>
					</div>
					<!-- sidebar-area start-->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<aside class="sidebar-wrap">
                            <div class="search-wrap widget">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
							<!-- catagory-area -->
							<div class="widget sidebar-menu">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    <li><a href="#">Tattooing</a></li>
                                    <li><a href="#">Tattoo Design</a></li>
                                    <li><a href="#">Tattoo Removal</a></li>
                                    <li><a href="#">Piercing</a></li>
                                    <li><a href="#">Laser Removal</a></li>
                                    <li><a href="#">Henna Design</a></li>
                                </ul>
                            </div>
							<!-- catagory-area -->
							
							<!-- price-range -->
							<div class="widget">
								<h3 class="widget-title">Price Range</h3>
								<div class="price-range">
									<div id="slider"></div>
								</div>
							</div>
							<!-- price-range -->

							<!-- recent-product-area -->
							<div class="widget recent-product-wrap">
								<h3 class="widget-title">Top Rated Products</h3>
								<ul>
									<li>
										<div class="recent-product-img">
											<img src="assets/images/cart/1.jpg" alt="" />
										</div>
										<div class="recent-product-content">
											<a href="#">Website Mock Up</a>
											<span>$15.00</span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</li>
									<li>
										<div class="recent-product-img">
											<img src="assets/images/cart/2.jpg" alt="" />
										</div>
										<div class="recent-product-content">
											<a href="#">Music Player UI Sets</a>
											<span>$25.00</span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</li>
									<li>
										<div class="recent-product-img">
											<img src="assets/images/cart/3.jpg" alt="" />
										</div>
										<div class="recent-product-content">
											<a href="#">Inspiration Tree Logo</a>
											<span>$35.00</span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</li>
								</ul>
							</div>
							<!-- recent-product-area -->

							<!-- tag-area -->
							<div class="widget tag-wrap">
                                <h3 class="widget-title">Tags</h3>
                                <ul>
                                    <li><a href="#">html</a> </li>
                                    <li><a href="#">css</a> </li>
                                    <li><a href="#">tottoos</a> </li>
                                    <li><a href="#">front end</a> </li>
                                    <li><a href="#">back end</a> </li>
                                    <li><a href="#">responsive</a> </li>
                                    <li><a href="#">photoshop</a> </li>
                                    <li><a href="#">bootstrap</a> </li>
                                    <li><a href="#">html5</a> </li>
                                    <li><a href="#">css3</a> </li>
                                </ul>
                            </div>
							<!-- tag-area -->
						</aside>

					</div>
					<!-- sidebar-area end-->
				</div>
			</div>
		</div>
		<!-- shop-area end -->
		
        <!-- footer-area start -->
        <footer class="footer-area bg-2">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget footer-content">
                                <h2>About US</h2>
                                <p>Nullam nisi nibh, semper ut diam nec, ornare facilisis ex. Morbi ac augue lacus. Class aptent taciti sociosqu ad </p>
                                <ul>
                                    <li><i class="fa fa-phone"></i> +1 234 56 789 </li>
                                    <li><i class="fa fa-fax"></i> +84 (1) 234 567 891 </li>
                                    <li><i class="fa fa-envelope"></i> Info@yourmail.com</li>
                                    <li><i class="fa fa-map-marker"></i> 124 Your Address, Your City</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget footer-time">
                                <h2>Our Working Time</h2>
                                <ul>
                                    <li>MON <span class="pull-right">08:30 AM - 10:30 PM</span></li>
                                    <li>TUE <span class="pull-right">08:30 AM - 10:30 PM</span></li>
                                    <li>WED <span class="pull-right">08:30 AM - 10:30 PM</span></li>
                                    <li>THU <span class="pull-right">08:30 AM - 10:30 PM</span></li>
                                    <li>FRI <span class="pull-right">08:30 AM - 10:30 PM</span></li>
                                    <li>SAT <span class="pull-right color">Weekend</span></li>
                                    <li>SUN <span class="pull-right color">Weekend</span></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-widget footer-menu">
                                <h2>Short Link</h2>
                                <ul>
                                    <li><a href="service.html">Service </a></li>
                                    <li><a href="about.html">About US </a></li>
                                    <li><a href="#">Booking </a></li>
                                    <li><a href="shop.html">Shop </a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="blog.html">Latest News</a></li>
                                    <li><a href="blog.html">Latest News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2 col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget instragram">
                                <h2>Short Link</h2>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/instragram/1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/instragram/2.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/instragram/3.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/instragram/4.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/instragram/5.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/instragram/6.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/instragram/7.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/instragram/8.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="socil-media-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area end -->

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- owl.carousel.2.0.0-beta.2.4 css -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- counterup.main.js -->
        <script src="{{asset('assets/js/counterup.main.js')}}"></script>
        <!-- isotope.pkgd.min.js -->
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- isotope.pkgd.min.js -->
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- jquery.waypoints.min.js -->
        <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <!-- jquery.magnific-popup.min.js -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- jquery.slicknav.min.js -->
        <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!-- plugins js -->
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('assets/js/scripts.js')}}"></script>
    </body>
</html>