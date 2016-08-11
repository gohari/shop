<?php
include("inc_db.php");

if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url = 'login.php';
	header( "Location: $url" );
	die();
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
        <title>JANGO | Ultimate Multipurpose Bootstrap HTML Theme - Shop Home 1</title>
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

   <body class="c-layout-header-fixed c-layout-header-6-topbar c-layout-header-mobile-fixed c-page-on-scroll" >
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <?php require_once "header.php"; ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
<?php
$object_id =get_safe_post($mysqlicheck,"id");
$rant_d1 = mysqli_query($mysqlicheck,'SELECT * FROM object 	where  object_id = $object_id ');
				if (mysqli_num_rows($rant_d1) > 0)
				{
					$row_d1=mysqli_fetch_assoc($rant_d1);
					






?>


            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
            <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
                <div class="container">
                    <div class="c-shop-product-details-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-product-gallery">
                                    <div class="c-product-gallery-content">
                                        <div class="c-zoom">
                                            <img src="assets/base/img/content/shop8/34.jpg"> </div>
                                        <div class="c-zoom">
                                            <img src="assets/base/img/content/shop8/35.jpg"> </div>
                                        <div class="c-zoom">
                                            <img src="assets/base/img/content/shop8/37.jpg"> </div>
                                        <div class="c-zoom">
                                            <img src="assets/base/img/content/shop8/29.jpg"> </div>
                                    </div>
                                    <div class="row c-product-gallery-thumbnail">
                                        <div class="col-xs-3 c-product-thumb">
                                            <img src="assets/base/img/content/shop/91.jpg"> </div>
                                        <div class="col-xs-3 c-product-thumb">
                                            <img src="assets/base/img/content/shop/92.jpg"> </div>
                                        <div class="col-xs-3 c-product-thumb">
                                            <img src="assets/base/img/content/shop/02.jpg"> </div>
                                        <div class="col-xs-3 c-product-thumb c-product-thumb-last">
                                            <img src="assets/base/img/content/shop/80.jpg"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="c-product-meta">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Warm Winter Jacket</h3>
                                        <div class="c-line-left"></div>
                                    </div>
                                    <div class="c-product-badge">
                                        <div class="c-product-sale">تخفیف</div>
                                        <div class="c-product-new">جدید</div>
                                    </div>
                                    <div class="c-product-review">
                                        <div class="c-product-rating">
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star-half-o c-font-red"></i>
                                        </div>
                                        <div class="c-product-write-review">
                                            <a class="c-font-red" href="#">Write a review</a>
                                        </div>
                                    </div>
                                    <div class="c-product-price">$99.00</div>
                                    <div class="c-product-short-desc"> Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat Nostrud duis molestie at dolore. </div>
                                    <div class="row c-product-variant">
                                        <div class="col-sm-12 col-xs-12">
                                            <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Size:</p>
                                            <div class="c-product-size">
                                                <select>
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12 c-margin-t-20">
                                            <div class="c-product-color">
                                                <p class="c-product-meta-label c-font-uppercase c-font-bold">Color:</p>
                                                <select>
                                                    <option value="Red">Red</option>
                                                    <option value="Black">Black</option>
                                                    <option value="Beige">Beige</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-product-add-cart c-margin-t-20">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="c-input-group c-spinner">
                                                    <p class="c-product-meta-label c-product-margin-2 c-font-uppercase c-font-bold">QTY:</p>
                                                    <input type="text" class="form-control c-item-1" value="1">
                                                    <div class="c-input-group-btn-vertical">
                                                        <button class="btn btn-default" type="button" data_input="c-item-1">
                                                            <i class="fa fa-caret-up"></i>
                                                        </button>
                                                        <button class="btn btn-default" type="button" data_input="c-item-1">
                                                            <i class="fa fa-caret-down"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12 c-margin-t-20">
                                                <button class="btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
				}
					?>
            <!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
            <div class="c-content-box c-size-md c-no-padding">
                <div class="c-shop-product-tab-1" role="tabpanel">
                    <div class="container">
                        <ul class="nav nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">Description</a>
                            </li>
                            <li role="presentation">
                                <a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">Additional Information</a>
                            </li>
                            <li role="presentation">
                                <a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">Reviews (3)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                            <div class="c-product-desc c-center">
                                <div class="container">
                                    <img src="assets/base/img/content/shop5/30.png" />
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                          </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab-2">
                            <div class="container">
                                <p class="c-center">
                                    <strong>Sizes:</strong> S, M, L, XL</p>
                                <br>
                                <p class="c-center">
                                    <strong>Colors:</strong> Red, Black, Beige, White</p>
                                <br/> </div>
                            <div class="c-product-tab-meta-bg c-bg-grey c-center">
                                <div class="container">
                                    <p class="c-product-tab-meta">
                                        <strong>SKU:</strong> 1410SL</p>
                                    <p class="c-product-tab-meta">
                                        <strong>Categories:</strong>
                                        <a href="#">Jacket</a>,
                                        <a href="#">Winter</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab-3">
                            <div class="container">
                                <h3 class="c-font-uppercase c-font-bold c-font-22 c-center c-margin-b-40 c-margin-t-40">Reviews for Warm Winter Jacket</h3>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="c-user-avatar">
                                            <img src="assets/base/img/content/avatars/team1.jpg" /> </div>
                                        <div class="c-product-review-name">
                                            <h3 class="c-font-bold c-font-24 c-margin-b-5">Steve</h3>
                                            <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="c-product-rating c-right">
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star-half-o c-font-red"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-product-review-content">
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="row c-margin-t-40">
                                    <div class="col-xs-6">
                                        <div class="c-user-avatar">
                                            <img src="assets/base/img/content/avatars/team12.jpg" /> </div>
                                        <div class="c-product-review-name">
                                            <h3 class="c-font-bold c-font-24 c-margin-b-5">John</h3>
                                            <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="c-product-rating c-right">
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star-half-o c-font-red"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-product-review-content">
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="row c-margin-t-40">
                                    <div class="col-xs-6">
                                        <div class="c-user-avatar">
                                            <img src="assets/base/img/content/avatars/team8.jpg" /> </div>
                                        <div class="c-product-review-name">
                                            <h3 class="c-font-bold c-font-24 c-margin-b-5">Alice</h3>
                                            <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="c-product-rating c-right">
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star c-font-red"></i>
                                            <i class="fa fa-star-half-o c-font-red"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-product-review-content">
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="row c-product-review-input">
                                    <h3 class="c-font-bold c-font-uppercase">Submit your Review</h3>
                                    <p class="c-review-rating-input">Rating:
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </p>
                                    <textarea></textarea>
                                    <button class="btn c-btn c-btn-square c-theme-btn c-font-bold c-font-uppercase c-font-white">Submit Review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
            <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
                <div class="container">
                    <div class="c-content-title-4">
                        <h3 class="c-font-uppercase c-center c-font-bold c-line-strike">
                            <span class="c-bg-white">Most Popular</span>
                        </h3>
                    </div>
                    <div class="row">
                        <div data-slider="owl" data-items="4" data-auto-play="8000">
                            <div class="owl-carousel owl-theme c-theme owl-small-space">
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/18.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Samsung Galaxy Note 4</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/27.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Samsung Galaxy S4</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/21.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Apple iPhone 5</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                            <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/22.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">HTC</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/20.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Apple iPhone 6</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-label c-bg-red-2 c-font-uppercase c-font-white c-padding-10 c-font-13 c-font-bold">Hot</div>
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/24.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Apple iPhone 6+</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-2-2 -->
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script>
	<![endif]-->
        <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
        <script src="assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
        <script src="assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="assets/base/js/components.js" type="text/javascript"></script>
        <script src="assets/base/js/components-shop.js" type="text/javascript"></script>
        <script src="assets/base/js/app.js" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- BEGIN: PAGE SCRIPTS -->
        <script src="assets/plugins/zoom-master/jquery.zoom.min.js" type="text/javascript"></script>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
</body>


</html>
