<?php include("inc_db.php");


 $it = 0 ;
 foreach ($_SESSION["cart_item"] as $c_item){
 $it ++ ;
        $item_total += (str_replace(",","",$c_item["price"])*$c_item["quantity"]); 
  
 }
?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>فروشگاه اینترنتی</title>
        <meta  http-equiv="Content-Language" content="fa">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="assets/base/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
<!--<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">-->
    <body class="c-layout-header-fixed c-layout-header-6-topbar c-layout-header-mobile-fixed c-page-on-scroll" >
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<header class="c-layout-header c-layout-header-6 c-navbar-fluid" data-minimize-offset="80">
  <div class="c-topbar">
    <div class="container">
      <nav class="c-top-menu">
        <ul class="c-links c-theme-ul">
          <li> <a href="index.php" class="c-font-uppercase c-font-bold">خانه</a> </li>
          <li class="c-divider"></li>
          <li> <a href="page-help.php" class="c-font-uppercase c-font-bold">راهنما</a> </li>
          <?php if ($_SESSION["login"]["type"] ==  "user") {?>
          <li> <a href="login.php?send=out"  class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" >خروج</a> </li>
          <?php }else{ ?>
          <li> <a href="login.php" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" >ورود</a> </li>
          <?php }  ?>
        </ul>
        <ul class="c-ext hide c-theme-ul">
          <li class="c-search hide"> 
            <!-- BEGIN: QUICK SEARCH -->
            <form action="#">
              <input type="text" name="query" placeholder="جستجو..." value="" class="form-control" autocomplete="off">
              <i class="fa fa-search"></i>
            </form>
            <!-- END: QUICK SEARCH --> 
          </li>
        </ul>
      </nav>
      <div class="c-brand"> <a href="index.php" class="c-logo"> <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo"> <img src="assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-desktop-logo-inverse"> <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-mobile-logo"> </a>
        <ul class="c-icons c-theme-ul">
          <li> <a href="#"> <i class="icon-social-twitter"></i> </a> </li>
          <li> <a href="#"> <i class="icon-social-facebook"></i> </a> </li>
          <li> <a href="#"> <i class="icon-social-dribbble"></i> </a> </li>
        </ul>
        <button class="c-topbar-toggler" type="button"> <i class="fa fa-ellipsis-v"></i> </button>
        <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu"> <span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span> </button>
        <button class="c-search-toggler" type="button"> <i class="fa fa-search"></i> </button>
        <button class="c-cart-toggler" type="button"> <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg"><?php echo $it ; ?></span> </button>
      </div>
    </div>
  </div>
  <div class="c-navbar">
    <div class="container"> 
      <!-- BEGIN: BRAND -->
      <div class="c-navbar-wrapper clearfix"> 
        <!-- END: BRAND --> 
        <!-- BEGIN: QUICK SEARCH -->
        <form class="c-quick-search" action="#">
          <input type="text" name="query" placeholder="جهت جستجو مطلب خود را وارد نمایید ..." value="" class="form-control" autocomplete="off">
          <span class="c-theme-link">&times;</span>
        </form>
        <!-- END: QUICK SEARCH --> 
        <!-- BEGIN: HOR NAV --> 
        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU --> 
        <!-- BEGIN: MEGA MENU --> 
        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
          <ul class="nav navbar-nav c-theme-nav">
            <?php
		    
			
			
			
			
$rant_h1 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_kod like '___' and gro_status =1");
if (mysqli_num_rows($rant_h1) > 0)
{	
	while($row_h1=mysqli_fetch_assoc($rant_h1))
	{
?>
            <li> <a href="shop-product-search.php?id=<?php echo $row_h1['gro_id'] ?>" class="c-link dropdown-toggle"><?php echo $row_h1['gro_name'] ?> <span class="c-arrow c-toggler"></span> </a>
              <div class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                <div class="row">
                  <?php
		$rant_h2 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_kod like '".$row_h1['gro_kod']."__' and gro_status =1");
		if (mysqli_num_rows($rant_h2) > 0)
		{		
			while($row_h2=mysqli_fetch_assoc($rant_h2))
			{
?>
                  <div class="col-md-2">
                    <ul class="dropdown-menu c-menu-type-inline">
                      <li> <a href="shop-product-search.php?id=<?php echo $row_h2['gro_id'] ?>"><?php echo $row_h2['gro_name'] ?></a> </li>
                    </ul>
                  </div>
                  <?php
			}
		}
		else
		{
			echo "گروه تعریف نشده";
		}
 ?>
                </div>
              </div>
            </li>
            <?php
	}
}
else
{
	echo "گروه تعریف نشده";
} 

?>
            <li class="c-cart-toggler-wrapper c-quick-sidebar-toggler-wrapper">
            	<a href="shop-cart.php" class="c-btn-icon c-cart-toggler">
            		<i class="icon-handbag c-cart-icon"></i>
            		<span class="c-cart-number c-theme-bg"><?php echo $it ; ?></span>
            	</a>
            </li>
            <!-- <li class="c-quick-sidebar-toggler-wrapper">
                                    <a href="#" class="c-quick-sidebar-toggler">
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                    </a>
                                </li>-->
            <li class="c-search-toggler-wrapper"> <a href="#" class="c-btn-icon c-search-toggler"> <i class="fa fa-search"></i> </a> </li>
          </ul>
        </nav>
        <!-- END: MEGA MENU --> 
        <!-- END: LAYOUT/HEADERS/MEGA-MENU --> 
        <!-- END: HOR NAV --> 
      </div>
      <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART --> 
     <?php
session_start();
if(isset($_SESSION["cart_item"])){
    

  ?>

      <!-- BEGIN: CART MENU -->
      <div class="c-cart-menu">
        <div class="c-cart-menu-title">
          <p class="c-cart-menu-float-l c-font-sbold"><?php echo $it ; ?> مورد</p>
          <p class="c-cart-menu-float-r c-theme-font c-font-sbold"><?php echo number_format($item_total) ; ?></p>
        </div>
        <ul class="c-cart-menu-items">
      <?php 
   foreach ($_SESSION["cart_item"] as $c_item){
    ?> 
          <li>
            <div class="c-cart-menu-close"> <a href="" class="c-theme-link" id="remove" code="<?php echo $c_item["code"]; ?>">×</a> </div>
            <img src="<?php echo $c_item["img"] ; ?>" />
            <div class="c-cart-menu-content">
              <p><?php echo $c_item["quantity"]; ?> x <span class="c-item-price c-theme-font"><?php echo number_format($c_item["price"]); ?></span> </p>
              <a href="shop-product-details.php?code=<?php echo $c_item["code"]; ?>" class="c-item-name c-font-sbold"><?php echo $c_item["name"]; ?></a> </div>
          </li>
          <?php
       }

    ?>  
       </ul>
        <div class="c-cart-menu-footer"> <a href="shop-cart.php" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">مشاهده سبد خرید</a> <a href="shop-checkout.php" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">پرداخت</a> </div>
      </div>
      <!-- END: CART MENU --> 
      <?php
   }
		else { 
		
		?>
		<!-- BEGIN: CART MENU -->
      <div class="c-cart-menu">
        <div class="c-cart-menu-footer"> <a class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">سبد خرید خالی است</a>
        </div>
      </div>
      <!-- END: CART MENU --> 
		<?php
		
		}
   ?>
      <!-- END: LAYOUT/HEADERS/QUICK-CART --> 
    </div>
  </div>
</header>
<!-- END: HEADER --> 
<!-- END: LAYOUT/HEADERS/HEADER-1 --> 

