<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

?>

<!doctype html>
<html class="no-js" lang="en">
  <base href="/">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mecadon | Golf</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
		 
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- nivo-slider.css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		<!-- slicknav.min.css -->
        <link rel="stylesheet" href="css/slicknav.min.css">
		<!-- flexslider.css -->
        <link rel="stylesheet" href="css/flexslider.css">
		<!-- style css -->
		<link rel="stylesheet" href="css/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- preloader-start -->
		<div id="preloader"></div>
		<!-- preloader-end -->
		<!-- header-start -->
		<header>
			<!-- header-top-area-start -->
			<div class="header-top-area hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<!-- login-area-start -->
							<div class="login-area">
								<ul>
									<li><a href="/login">Login/Register</a></li>
									<li><a href="/about">About us</a></li>
									<li><a href="/contact">Contact us</a></li>
									<li><a href="/faq">Faq </a></li>
								</ul>
							</div>
							<!-- login-area-end -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<!-- right-top-start -->
							<div class="right-top">
								<a href="#">Welcome to Mecadon Golf </a>
							</div>
							<!-- right-top-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<!-- header-mid-area-start -->
			<div class="header-mid-area ptb-30">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<!-- logo-area-start -->
							<div class="logo-area">
								<a href="/"><img src="images/logo.png" alt="logo" width="150px" /></a>
							</div>
							<!-- logo-area-end -->
						</div>
						<div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
							<!-- search-area-start -->
							<div class="search-area">
								<form action="#">
									<input type="text" placeholder="Seatce entire store here" />
									<select id="sorter" class="header-option hidden-xs" data-role="sorter">
										<option value="Categories " selected="selected">All Categories</option>
										<option value="Cookware">Cookware</option>
										<option value="Pastry">Baking &amp; Pastry Mats</option>
										<option value="Mats">Baking Mats</option>
									</select>
									<a href="#"><i class="fa fa-search"></i></a>
								</form>
							</div>
							<!-- search-area-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 hidden-xs">
							<!-- cart-area-start -->
							<div class="cart-area">
								<ul>
									<li class="bag"><a href="#"><i class="fa fa-shopping-bag"></i><span class="total-product">2</span></a></li>
									<li class="number"><a href="#">My Cart <span>3 items(s) - $500.00</span></a></li>
								</ul>
							</div>
							<!-- cart-area-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- header-mid-area-end -->
			<!-- header-bottom-area-start -->
			<div class="header-bottom-area hidden-xs" id="sticky">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-12 col-md-12">
							<!-- menu-area-start -->
							<div class="menu-area">
								<nav>
									<ul id="menu">
										<li class="active"><a href="/">Home</a>									
										</li>
										<li><a href="">Men’s Apparel<i class="fa fa-angle-down"></i></a>
											<ul class="sub-menu">
												<li><a href="shop.html">shop</a></li>
							
											</ul>
										</li>
										<li><a href="blog.html">Women’s Apparel<i class="fa fa-angle-down"></i></a>
											<ul class="sub-menu">
												<li><a href="blog.html">blog</a></li>
												<li><a href="blog-details.html">blog-details</a></li>
											</ul>
                    </li>
                    <li><a href="blog.html">Junior’s Apparel<i class="fa fa-angle-down"></i></a>
											<ul class="sub-menu">
												<li><a href="blog.html">blog</a></li>
												<li><a href="blog-details.html">blog-details</a></li>
											</ul>
                    </li>
                    <li><a href="blog.html">Outer Wear<i class="fa fa-angle-down"></i></a>
											<ul class="sub-menu">
												<li><a href="blog.html">blog</a></li>
												<li><a href="blog-details.html">blog-details</a></li>
											</ul>
                    </li>
                    <li><a href="blog.html">Rain Wear<i class="fa fa-angle-down"></i></a>
											<ul class="sub-menu">
												<li><a href="blog.html">blog</a></li>
												<li><a href="blog-details.html">blog-details</a></li>
											</ul>
                    </li>
                    <li><a href="blog.html">Accessories<i class="fa fa-angle-down"></i></a>
											<ul class="sub-menu">
												<li><a href="blog.html">blog</a></li>
												<li><a href="blog-details.html">blog-details</a></li>
											</ul>
										</li>
									
									</ul>
								</nav>
							</div>
							<!-- menu-area-end -->
						</div>
			
					</div>
				</div>
			</div>
			<!-- header-bottom-area-end -->
		</header>
    <!-- header-end -->
    
        
    
    
    <!-- slider-area-start -->
		<div class="slider-area">
        <div id="slider">
          <img src="images/sliders/slider1.png" alt="slider-img" title="#caption1" />
          <img src="images/sliders/slider2.png" alt="slider-img" title="#caption2" />
        </div>
        <div class="nivo-html-caption" id="caption1" >
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="slider-text text-right">
                  <h4 class="wow fadeInLeft" data-wow-delay=".6s">Complete Golf set</h4>
                  <h1 class="wow fadeInLeft" data-wow-delay=".9s">Golf</h1>
                  <h3 class="wow fadeInLeft" data-wow-delay="1.3s">$356.25</h3>
                  <a href="#" class=" wow bounceInRight" data-wow-delay="1.5s">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nivo-html-caption" id="caption2" >
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="slider-text text-right">
                  <h4 class="wow fadeInLeft" data-wow-delay=".6s">Cobra Men's KING F6 Driver </h4>
                  <h1 class="wow fadeInLeft" data-wow-delay=".9s">Golf</h1>
                  <h3 class="wow fadeInLeft" data-wow-delay="1.3s">$169.99- $419.00 </h3>
                  <a href="#" class=" wow bounceInRight" data-wow-delay="1.5s">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- slider-area-end -->
       
      <!-- banner-area-start -->
      <div class="banner-area ptb-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <!-- single-banner-img-start -->
              <div class="single-banner mb-4">
                <div class="banner-img">
                  <a href="#"><img src="images/f2.png" alt="banner" /></a>
                </div>
                <div class="banner-content">
                  <h4>Golf Shirts for Men - Dry Fit </h4>
                  <h2>Cotton Polo Shirt </h2>
                  <span>$12.00</span>
                </div>
              </div>
              <!-- single-banner-img-end -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <!-- single-banner-img-start -->
              <div class="single-banner">
                <div class="banner-img">
                  <a href="#"><img src="images/f1.png" alt="banner" /></a>
                </div>
                <div class="banner-content banner-content-2">
                  <h4>Confidence Junior Golf Club </h4>
                  <h2>Set with Stand Bag</h2>
                  <span>$259.99</span>
                </div>
              </div>
              <!-- single-banner-img-end -->
            </div>
          </div>
        </div>
      </div>
      <!-- banner-area-end -->
  
    
       <!-- latest-products-area-start -->
      <div class="top-selling-area ptb-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- section-titile-start -->
              <div class="section-titile text-center mb-50">
                <h2>Latest Products</h2>
              </div>
              <!-- section-titile-end -->
            </div>
            <div class="product-active-3">
              <div class="col-lg-12">
                <!-- product-wrapper-start -->
                <div class="product-wrapper text-center">
                  <div class="product-img">
                    <a href="#">
                      <img src="img/product/5.jpg" alt="phone" />
                    </a>
                    <span>new</span>
                    <div class="product-icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-content">
                    <span>Furniture & Tables</span>
                    <h4><a href="#">Aenean acest ac metus varius</a></h4>
                    <div class="rating">
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <ul>
                        <li class="new-price">$220</li>
                        <li class="old-price">$260</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- product-wrapper-end -->
              </div>
              <div class="col-lg-12">
                <!-- product-wrapper-start -->
                <div class="product-wrapper text-center">
                  <div class="product-img">
                    <a href="#">
                      <img src="img/product/6.jpg" alt="phone" />
                    </a>
                    <div class="product-icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-content">
                    <span>Mobiles & Accesosaries</span>
                    <h4><a href="#">vehicula  tincidunt suscipit </a></h4>
                    <div class="rating">
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <ul>
                        <li class="new-price">$250</li>
                        <li class="old-price">$260</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- product-wrapper-end -->
              </div>
              <div class="col-lg-12">
                <!-- product-wrapper-start -->
                <div class="product-wrapper text-center">
                  <div class="product-img">
                    <a href="#">
                      <img src="img/product/7.jpg" alt="phone" />
                    </a>
                    <span>new</span>
                    <div class="product-icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-content">
                    <span>Furniture & Tables</span>
                    <h4><a href="#">Aenean acest ac metus varius</a></h4>
                    <div class="rating">
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <ul>
                        <li class="new-price">$220</li>
                        <li class="old-price">$260</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- product-wrapper-end -->
              </div>
              <div class="col-lg-12">
                <!-- product-wrapper-start -->
                <div class="product-wrapper text-center">
                  <div class="product-img">
                    <a href="#">
                      <img src="img/product/8.jpg" alt="phone" />
                    </a>
                    <div class="product-icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-content">
                    <span>Mobiles & Accesosaries</span>
                    <h4><a href="#">vehicula  tincidunt suscipit </a></h4>
                    <div class="rating">
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <ul>
                        <li class="new-price">$250</li>
                        <li class="old-price">$260</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- product-wrapper-end -->
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- latest-products-area-end -->

       
  
   

         <!-- newslatter-area-start -->
         <div class="newslatter-area ptb-90">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="newslatter-form text-center">
                    <form action="#">
                      <input type="text" placeholder="Your email address here...  "/>
                      <a href="#">Subcribe!</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <!-- newslatter-area-end -->
		<!-- footer-area-start -->
		<footer>
			<!-- footer-top-area-start -->
			<div class="footer-top-area ptb-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer mb-4">
								<div class="footer-title">
									<h2>About Us<i class="fa fa-long-arrow-right"></i></h2>
								</div>
								<div class="single-content">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed </p>
									<form action="#">
										<input type="text" placeholder="Enter your email"/>
										<a href="#"><i class="fa fa-paper-plane"></i></a>
									</form>
								</div>
							</div>
							<!-- single-footer-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer mb-4">
								<div class="footer-title">
									<h2>Archives<i class="fa fa-long-arrow-right"></i></h2>
								</div>
								<div class="single-content">
									<ul>
										<li><a href="#"><i class="fa fa-check-square"></i>June 2016</a></li>
										<li><a href="#"><i class="fa fa-check-square"></i>May 2016</a></li>
										<li><a href="#"><i class="fa fa-check-square"></i>April 2016</a></li>
										<li><a href="#"><i class="fa fa-check-square"></i>March 2016</a></li>
										<li><a href="#"><i class="fa fa-check-square"></i>February 2016</a></li>
									</ul>
								</div>
							</div>
							<!-- single-footer-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<!-- single-footer-start -->
							<div class="single-footer">
								<div class="footer-title">
									<h2>Twitter<i class="fa fa-long-arrow-right"></i></h2>
								</div>
								<div class="single-content-2">
									<ul>
										<li><span>@engadget:</span> Google's first indie gaming festival comes to San Francisco this fall https://t.co/NsAr2gcykp2 weeks ago</li>
										<li><span>@engadget:</span> Google's first indie gaming festival comes to San Francisco this fall https://t.co/NsAr2gcykp2 weeks ago</li>
									</ul>
								</div>
							</div>
							<!-- single-footer-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-area-end -->
			<!-- footer-bottom-area-start -->
			<div class="footer-bottom-area ptb-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- copy-rigth-area-start -->
							<div class="copy-rigth-area mb-4">
								<p>© Copyright 2018 <a href="#">- jsoft.</a> All Rights Reserved.</p>
							</div>
							<!-- copy-rigth-area-end -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- payment-area-start -->
							<div class="payment-area text-right">
								<a href="#"><img src="img/payment/1.png" alt="payment" /></a>
							</div>
							<!-- payment-area-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-area-end -->
		</footer>
		<!-- footer-area-end -->

	   
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- jquery.nivo.slider.js -->
        <script src="js/jquery.nivo.slider.js"></script>
		<!-- jquery.slicknav.min.js -->
        <script src="js/jquery.slicknav.min.js"></script>
		<!-- jquery.flexslider.js -->
        <script src="js/jquery.flexslider.js"></script>
		<!-- jquery.countdown.min.js-->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

</html>
