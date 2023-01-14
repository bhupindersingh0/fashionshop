
<?php
{
	include("aa.php");
}
?>
    
   <?php
$con=mysqli_connect("localhost","root","","project");
$x="select * from shoping where category='watch'";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
?>
   <div class="col-lg-3 col-md-4 col-sm-6 col-6 ">         			
                            <div class="single_product">
                                 <div class="product_thumb">
                                    <a href="product-details.php" >
                                        <img class="primary_img" src="<?php echo 'upload/'.$c[4] ?>" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
 <!--                                      <span>-18%</span> -->
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <b><?php echo "$c[2]"?> </b>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.php"><?php echo "$c[3]"; ?></a></h4>
                                    <div class="price_box">
                                        <span class="current_price">Rs.<?php echo "$c[6]"; ?></span>
                                        <span class="old_price">Rs.<?php echo "$c[7]"; ?></span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="<?php  echo "cart2.php?x=$c[0]>"?>"  data-tippy="Add To Cart"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
                                    <h4 class="product_name"><a href="product-details.php"><b><?php echo "$c[3]"; ?></b></a></h4>
                                    <p><a href="#"><?php echo "$c[2]"?></a></p>
                                    <div class="price_box">
                                        <span class="current_price">Rs.<?php echo "$c[6]"; ?></span>
                                        <span class="old_price">Rs.<?php echo "$c[7]"; ?></span>
                                    </div>
                                    <div class="product_desc">
                                      <p>  <?php echo"$c[5]" ?> </p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
												
                        </div>
	
<?php

}
?>

                </div>
            </div>
        </div>
    </div>         
    <!--shop  area end-->
                          

    <?php
{
	include("b.php");
}
?>
    