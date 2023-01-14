<?php
{
	include("a.php");
}
?>
	


    <!--slider area start-->
    <section class="slider_section mb-63">
        <div class="slider_area slick_slider_activation" data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": true,
            "dots": true,
            "autoplay": false,
            "speed": 800,
            "infinite": true
        }'>
		
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/hw.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider_text">
                                <span>Lookbook</span>
                                <h1>MEN'S SHIRTS</h1>
                                <p>Shirts that deserve an audience</p>
                                <a class="btn btn-primary" href="shirt.php">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/watch11.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Lookbook</span>
                                <h1>MEN'S WATCHES</h1>
                                <p>Customers’ Most-loved Men's Watches</p>
                                <a class="btn btn-primary" href="watch.php">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/perfume.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Lookbook</span>
                                <h1>MEN'S PERFUME</h1>
                                <p>Embellish your skin with an intense, refreshing fragrance, a reminder of hot summer evenings</p>
                                <a class="btn btn-primary" href="shop.php">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--shipping section start-->
    <section class="shipping_section mb-102">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shipping_inner d-flex justify-content-between">
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-cursor icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Free Shipping</h3>
                                <p>Orders over Rs.1000</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-reload icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Free Returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-lock icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>100% Payment Secure</h3>
                                <p>Payment Online</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-tag icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Affordable Price</h3>
                                <p>Guaranteed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping section end-->

    <!-- banner section start -->
    <section class="banner_section mb-109">
        <div class="container">
            <div class="section_title mb-60">
                <h2>featured collections</h2>
            </div>
            <div class="banner_container d-flex">
                <figure class="single_banner position-relative mr-30">
                    <img src="assets/img/bg/zara.jpg" alt="">
                    <figcaption class="banner_text position-absolute">
                        <h3>Zara Pattern <br> jackets</h3>
                        <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                        <a class="btn btn-primary" href="shop.php">Shop Now</a>
                    </figcaption>
                </figure>
                <figure class="single_banner position-relative">
                    <img src="assets/img/bg/Untitled-2.jpg" alt="">
                    <figcaption class="banner_text position-absolute">
                        <h3 class="text-white">Basic Color Caps</h3>
                        <p class="text-white">Minimalist never cool, choose and make <br> the simple great again!</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- product section start -->
	
    <section class="product_section mb-96">
        <div class="container">
            <div class="product_header d-flex justify-content-between  mb-50">
                <div class="section_title">
                    <h2>best selling items</h2>
                </div>
                <div class="product_tab_btn d-flex">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="shop.php" role="tab" aria-controls="all"
                                aria-selected="true">
                                SHOP
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="product-details.php" role="tab" aria-controls="clothings"
                                aria-selected="false">
                                PRODUCT
                            </a>
                        </li>
                        
                        
                        <li>
                            <a data-toggle="tab" href="watch.php" role="tab" aria-controls="accessories"
                                aria-selected="false">
                                Accessories
                            </a>
                        </li>
                    </ul>
                    <div class="all_product">
                        <a href="shop.php">All Product</a>
                    </div>
                </div>
            </div>
            <div class="product_container row">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all" role="tabpanel">
                        <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                            <?php
$con=mysqli_connect("localhost","root","","project");
$x="select * from shoping ";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
?>
							<article class="col single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a href="product-details.php">
                                            <img class="primary_img" src="<?php echo 'upload/'.$c[4] ?>"
                                                alt="consectetur">
                                        </a>
                                        <div class="product_action">
                                            <ul>
                                                <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                        data-tippy-inertia="true" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-placement="left"><i
                                                            class="icon-heart icons"></i></a></li>

                                                <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                        data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-placement="left"><i
                                                            class="icon-size-fullscreen icons"></i></a></li>

                                                <li class="compare"><a data-tippy="Compare" href="#"
                                                        data-tippy-inertia="true" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-placement="left"><i
                                                            class="icon-refresh icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content text-center">
                                        <div class="product_ratting">
                                            <ul class="d-flex justify-content-center">
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><span>(4)</span></li>
                                            </ul>
                                        </div>
										
                                        <h4 class="product_name"><a href="product-details.php"><?php echo "$c[3]"; ?></a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price">Rs.<?php echo "$c[6]"; ?></span>
                                            <span class="old_price">Rs.<?php echo "$c[7]"; ?></span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">Add To Cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
							<?php

}
?>
                            
                           
                           
                           
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->

    <!-- banner section start -->
    <section class="banner_section banner_style2 mb-109">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <figure class="single_banner position-relative">
					
                        <img src="assets/img/bg/puma3.jpg" alt="">
                        <div class="banner_text position-absolute">
                            <h3>Minimalist <br> sneaker</h3>
                            <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                            <a class="btn btn-primary" href="shoe.php">Shop Now</a>
                        </div>
                        <div class="banner_tag">
                            <span>New Arrival<br>Men</span>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <figure class="single_banner position-relative">
                        <img src="assets/img/bg/bg4.jpg" alt="">
                        <div class="banner_text position-absolute text__style2">
                            <h3>for<br> Autumn</h3>
                            <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                            <a class="btn btn-primary" href="shop.php">Shop Now</a>
                        </div>
                        <div class="banner_tag">
                            <span>NEW ARRIVAL<br>MEN</span>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- product section start -->
    <section class="product_section mb-80">
        <div class="container">
            <div class="product_header d-flex justify-content-between  mb-60">
                <div class="section_title">
                    <h2>new arrivals</h2>
                </div>
                <div class="product_tab_btn d-flex">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#all2" role="tab" aria-controls="all2"
                                aria-selected="true">
                                All
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#clothings2" role="tab" aria-controls="clothings2"
                                aria-selected="false">
                                Clothings
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#bags2" role="tab" aria-controls="bags2" aria-selected="false">
                                Bags
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shoes2" role="tab" aria-controls="shoes2" aria-selected="false">
                                Shoes
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#accessories2" role="tab" aria-controls="accessories2"
                                aria-selected="false">
                                Accessories
                            </a>
                        </li>
                    </ul>
                    <div class="all_product">
                        <a href="shop.php">All Product</a>
                    </div>
                </div>
            </div>
            <div class="product_container row">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all2" role="tabpanel">
                        <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
<?php
$con=mysqli_connect("localhost","root","","project");
$x="select * from shoping where brand_name='Levis'";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
?>                        
						  <article class="col single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a href="product-details.php">
                                            <img class="primary_img" src="<?php echo 'upload/'.$c[4] ?>"
                                                alt="consectetur">
                                        </a>
                                        <div class="product_action">
                                            <ul>
                                                <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                        data-tippy-inertia="true" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-placement="left"><i
                                                            class="icon-heart icons"></i></a></li>

                                                <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                        data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-placement="left"><i
                                                            class="icon-size-fullscreen icons"></i></a></li>
                                                <li class="compare"><a data-tippy="Compare" href="#"
                                                        data-tippy-inertia="true" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-placement="left"><i
                                                            class="icon-refresh icons"></i></a></li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    <figcaption class="product_content text-center">
                                        <div class="product_ratting">
                                            <ul class="d-flex justify-content-center">
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.php"><?php echo "$c[3]"; ?></a></h4>
                                        <div class="price_box">
                                            <span class="current_price">Rs.<?php echo "$c[6]"; ?></span>
                                            <span class="old_price">Rs.<?php echo "$c[7]"; ?></span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">Add To Cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
							<?php

}
?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->

    <!-- blog section start -->
    <section class="blog_section mb-140">
        <div class="container">
            <div class="product_header border-top d-flex justify-content-between  mb-60">
                <div class="section_title">
                    <h2>look</h2>
                </div>
                <div class="all_articles">
                    
                </div>
            </div>
            <div class="blog_container row">
                <div class="blog_slick slick_slider_activation" data-slick='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "arrows": false,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true,
                        "responsive":[
                          {"breakpoint":992, "settings": { "slidesToShow": 2 } },
                          {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                          {"breakpoint":576, "settings": { "slidesToShow": 1 } }
                        ]
                    }'>
                    <article class="col single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.php"><img src="assets/img/blog/rolecx.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">TRENDING ARTICALS</span></li>
                                        <li><span>2022</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.php">PREMIUM WATCHES
                                        </a></h3>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="col single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.php"><img src="assets/img/blog/jeanss..jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">TRENDING ARTICALS</span></li>
                                        <li><span>2022</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.php">MULTICOLOR DENIM</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="col single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.php"><img src="assets/img/blog/blog90..jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">TRENDING ARTICALS</span></li>
                                        <li><span>2022</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.php">AIRFORCE SNEAKERS</a>
                                </h3>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="col single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.php"><img src="assets/img/blog/blog1.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.php">Five things you only know if you’re at Chanel's Hamburg
                                        Show</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->

   
	
	
	
<?php
{
	include("b.php");
}
?>
	

   
