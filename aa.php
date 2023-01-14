<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fashionshop – Shop Page </title>
    <meta name="description" content="Uthr Fashion eCommerce Bootstrap 5 Template is an innovative and modern e-commerce online store website template." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <!-- <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Uthr – Fashion eCommerce HTML Template" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="SITE_NAME" /> -->
    <!-- For the og:image content, replace the # with a link of an image -->
    <!-- <meta property="og:image" content="#" />
    <meta property="og:description"
        content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." /> -->

    <!-- Add site Favicon -->
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />

    <!-- CSS
    ========================= -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>


    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "Replace_with_your_site_title",
        "url": "Replace_with_your_site_URL"
        }
    </script>
</head>

<body>

    <!--offcanvas menu area start-->
    <div class="body_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="header_contact_info">
                            <ul class="d-flex">
                                <li class="text-white"> <i class="icons icon-phone"></i> <a href="tel:+91-987-665-6700">+91-987-665-6700</a></li>
                                <li class="text-white"> <i class="icon-envelope-letter icons"></i> <a href="#">fashionshop@domain.com</a></li>
                            </ul>
                        </div>
                        <div class="header_social d-flex">
                            <span>Follow us</span>
                            <ul class="d-flex">
                                <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-youtube icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="language_currency">
                            <ul class="d-flex">
                                <li class="language"><a href="#"> Eng <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Russian</a></li>
                                    </ul>
                                </li>
                              
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop.php">Shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="product-details.php"> Product Details</a>
                                </li>
                                <li><a href="">sale</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.php">cart</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.php">blog</a></li>
                                        <li><a href="blog-details.php">blog details</a></li>
                                    </ul>

                                </li>
                                <li><a href="#">buy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    <!--mini cart-->

    <div class="mini_cart">
	
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="icon-close icons"></i></a>
                </div>
            </div>
			<?php
$con=mysqli_connect("localhost","root","","project");
$x="select * from cart";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
?>	 
            <div class="cart_item">
               <div class="cart_img">
                   <a href="#"><img src="<?php echo 'upload/'.$c[2] ?>" alt=""></a>
               </div>
                <div class="cart_info">
                <a href="#"><b><?php echo "$c[1]"; ?></b></a>
                    <p>1 x <span> Rs.<?php echo "$c[3]"; ?></span></p>
                </div>
                <div class="cart_remove">
                 <?php  echo "<a href=delete.php?x=$c[0]>"?><i class="icon-close icons"></i></a> 
                </div>
            </div>
	<?php

}
?>
      
        </div>
			
        <div class="mini_cart_table">
            <div class="cart_table_border">
                
                <div class="cart_total mt-10">
                    <span>Total:</span>
                    <span class="price">Rs. <?php
$con=mysqli_connect("localhost","root","","project");
$x="select sum(price) from cart";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))

	echo $c[0];
	
?></span>
                </div>
            </div>
        </div>
	
        <div class="mini_cart_footer">
           <div class="cart_button">
                <a href="#"><i class="fa fa-shopping-cart"></i> View cart</a>
            </div>
            <div class="cart_button">
                <a href="#"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
	
    <!--mini cart end-->
    <!--header area start-->
    <header class="header_section border-bottom">
        <div class="header_top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header_top_inner d-flex justify-content-between align-items-center">
                            <div class="header_contact_info">
                                <ul class="d-flex">
                                    <li class="text-white"> <i class="icons icon-phone"></i> <a href="tel:+05483716566">+054 8371 65 66</a></li>
                                    <li class="text-white"> <i class="icon-envelope-letter icons"></i> <a href="#">fashionshop@domain.com</a></li>
                                </ul>
                            </div>
                            <div class="free_shipping_text">
                                <p class="text-white">Free shipping worldwide for orders over Rs.1000 <a href="#">Learn More</a></p>
                            </div>
                            <div class="header_top_sidebar d-flex align-items-center">
                                <div class="header_social d-flex">
                                    <span>Follow us</span>
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-youtube icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="language_currency">
                                    <ul class="d-flex">
                                        <li class="language"><a href="#"> Eng <i class="icon-right ion-ios-arrow-down"></i></a>
                                            <ul class="dropdown_language">
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">Spanish</a></li>
                                                <li><a href="#">Russian</a></li>
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header_container d-flex justify-content-between align-items-center">
                            <div class="canvas_open">
                                <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                            </div>
                            <div class="header_logo">
                                <a class="sticky_none" href="#"><img src="assets/img/logo/1logo.png" alt=""></a>
                            </div>
                            <!--main menu start-->
                            <div class="main_menu d-none d-lg-block">
                                <nav>
                                    <ul class="d-flex">
                                        <li><a href="index.php">home</a></li>
                                        <li><a class="active" href="shop.php">shop</a></li>
                                        <li><a href="product-details.php">product</a></li>
                                        
                                        <li><a href="#">Brand</a>
                                            <ul class="sub_menu">
                                                <li><a href="uspolo.php">US POLO</a></li>
                                                <li><a href="levis.php">LEVIS</a></li>
												<li><a href="puma.php">PUMA</a></li>
												<li><a href="redtape.php">REDTAPE</a></li>
												<li><a href="tommy.php">TOMMY</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">MEN</a>
                                            <ul class="sub_menu">
                                                <li><a href="shirt.php">Shirts</a></li>
                                                <li><a href="tshirt.php">T-Shirts</a></li>
												<li><a href="jaket.php">Jackets</a></li>
												<li><a href="jean.php">Jeans</a></li>
												<li><a href="shoe.php">Shoes</a></li>
												<li><a href="watch.php">Watches</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="query.php">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header_account">
                                <ul class="d-flex">
                                    <li class="header_search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                                    <li class="account_link"><a href="#"><i class="icon-user icons"></i></a>
                                        <ul class="dropdown_account_link">
                                            <li><a href="signup.php">Signup</a></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="query.php">Contact</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li class="shopping_cart"><a href="#"><i class="icon-basket-loaded icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page search box -->
        <div class="page_search_box">
            <div class="search_close">
                <i class="ion-close-round"></i>
            </div>
            <form class="border-bottom" action="#">
                <input class="border-0" placeholder="Search products..." type="text">
                <button type="submit"><span class="icon-magnifier icons"></span></button>
            </form>
        </div>

    </header>
    <!--header area end-->
	<!--shop  area start-->
    <div class="shop_section shop_reverse">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
				
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h2>Categories</h2>
                                <ul>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)" data-toggle="collapse" data-target="#men">Men</a>
                                        <ul class="widget_dropdown_categories collapse show" id="men">
                                            <li><a href="jaket.php">Jakets <span>
											<?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where category='jacket'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?>
											</span></a></li>
                                            <li><a href="jean.php">Jeans <span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where category='jean'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?></span></a></li>
                                            <li><a href="shirt.php">Shirts <span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where category='shirt'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?></span></a></li>
                                            <li><a href="tshirt.php">T-Shirts <span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where category='t-shirt'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?></span></a></li>
                                            <li><a href="shoe.php">SHOES <span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where category='shoes'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?></span></a></li>
											<li><a href="watch.php">WATCH<span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where category='watch'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?></span></a></li>
                                        </ul>
                                    </li>
                                    
                                  
                                  <div class="filter__list widget_brands">
                                    <h3 data-toggle="collapse" data-target="#brands">brands</h3>
                                    <ul class="widget_dropdown_categories collapse show" id="brands">
                                        <li><a href="uspolo.php">US POLO<span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where brand_name='U.S.Polo Assn.'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?>
											</span></a></li>
                                        <li><a href="levis.php">LEVIS <span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where brand_name='Levis'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?>
											</span></a></li>
                                        <li><a href="puma.php">PUMA <span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where brand_name='puma'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?>
											</span></a></li>
                                        <li><a href="redtape.php">REDTAPE<span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where brand_name='redtape'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?>
											</span></a></li>
                                        <li><a href="tommy.php">TOMMY <span><?php $con=mysqli_connect("localhost","root","","project");
											$x="select count(sno) from shoping where brand_name='tommy'";
											$y=mysqli_query($con,$x);
											while($c=mysqli_fetch_array($y))
												echo $c[0];?>
											</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->

                    <!--breadcrumbs area start-->
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                    <!--breadcrumbs area end-->

                   
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper d-flex justify-content-between align-items-center">
                        <div class="page_amount">
                            <p><span><?php $con=mysqli_connect("localhost","root","","project");
							               $x="select count(sno) from shoping";
										   $y=mysqli_query($con,$x);
										   while($c=mysqli_fetch_array($y))
											   echo $c[0];?>
										   </span> Products Found</p>
                        </div>
                      
                        <div class="toolbar_btn_wrapper d-flex align-items-center">
                            <div class="view_btn">
                                <a class="view" href="#">VIEW</a>
                            </div>
                            <div class="shop_toolbar_btn">
                                <ul class="d-flex align-items-center">
                                    <li><a href="#" class="active btn-grid-3" data-role="grid_4" data-tippy="4"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-grid"></i></a></li>

                                    <li><a href="#" class="btn-list" data-role="grid_list" data-tippy="List" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-navicon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <!--shop toolbar end-->  
                                  <div class="row shop_wrapper">