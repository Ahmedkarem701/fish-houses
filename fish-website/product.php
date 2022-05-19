<?php
include 'connect.php';

$sql = $con->prepare('select * 
                            from products');
$sql->execute();
$products = $sql->fetchAll();

$sql2 = $con->prepare('select * 
                            from categories');
$sql2->execute();
$categories = $sql2->fetchAll();

?>

<!DOCTYPE html>
<head>
   <meta charset="utf-8" />

   <title>Fish House</title>

   <meta content="width=device-width, initial-scale=1.0" name="viewport" />

   <link rel="stylesheet" type="text/css" href="css/animate.css" />

   <link rel="stylesheet" type="text/css" href="css/animate.min.css" />

   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

   <link rel="stylesheet" type="text/css" href="css/fonts.css" />

   <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

   <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />

   <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />

   <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />

   <link rel="stylesheet" type="text/css" href="css/tabs.css" />

   <link rel="stylesheet" type="text/css" href="css/style.css" />

   <link rel="stylesheet" type="text/css" href="css/responsive.css" />
</head>

<body>
<div id="preloader">
   <div id="status">
      <img src="images/loader.gif" id="preloader_image" alt="loader">
   </div>
</div>
<!-- top to return -->
<a href="javascript:;" id="return-to-top" class="change-bg2"> <i class="fas fa-angle-double-up"></i></a>
<!-- header start -->
<div class="main-header-wrapper1 float_left">

   <div class="sb-main-header1">
      <div class="menu-items-wrapper menu-item-wrapper3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
         <div class="top-header-wrapper float_left">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-sm-9 col-xs-6">
                     <ul class="contact-details">
                        <li class="hidden-xs"><a href="#">Fish house,farous university</a>
                        </li>
                        <li><a href="#"><i class="fa fa-phone"></i> <b>+212345678</b> (Open Right Now)</a>
                        </li>
                        <li class="hidden-xs"><a href="#"><i
                                class="fa fa-paper-plane-o"></i> email@example.com</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="float_left">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <div class="index1-logo">
                        <a href="../index.php">
                           <img style="width: 160px" src="images/logo.jpg" alt="logo">
                        </a>
                     </div>
                     <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav">
                           <li class="nav-item  menu-click5 ps-rel">
                              <a class="nav-link" href="../index.php">Home</a>
                           </li>

                           <li class="nav-item menu-click4 ps-rel">
                              <a class="nav-link" href="product.php">Fish</a>
                           </li>
                           <li class="nav-item menu-click ps-rel">
                              <a class="nav-link" href="team.html">Team</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- responsive menu bar start -->
      <div class="mobile-menu-wrapper d-xl-none d-lg-none d-md-block d-sm-block">
         <div class="container">
            <div class="row">
               <div class=" col-md-4 col-sm-4 col-6">
                  <div class="mobile-logo">
                     <a href="../index.php">
                        <img style="width: 56%" src="images/logo.jpg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8 col-6">
                  <div class="d-flex  justify-content-end">
                     <div class="d-flex align-items-center">
                        <div class="toggle-main-wrapper mt-2" id="sidebar-toggle">
                           <span class="line"></span>
                           <span class="line"></span>
                           <span class="line"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar">
         <div class="sidebar_logo">
            <a href="../index.php"><img src="images/logo.jpg" alt="img"></a>
         </div>
         <div id="toggle_close">&times;</div>
         <div id='cssmenu'>
            <ul class="float_left">
               <li><a href="../index.php">Home</a></li>
               <li><a href="product.php">Fish</a></li>
               <li><a href="team.html">Team</a></li>
            </ul>
         </div>
      </div>
      <!-- responsive menu End -->
   </div>
</div>
   <!-- header end -->
   <!-- banner section start start-->
   <div class="inner-slider-wrapper float_left">
      <div class="container">
         <div class="inner-caption">
            <h4>All Product</h4>
            <img src="images/title.png" alt="img">
         </div>
         <ol class="breadcrumb sicon">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">All Product</li>
         </ol>
      </div>
   </div>
   <!-- banner section start end-->

<div class="product-filter-main-wrapper float_left ptb-100">
   <div class="container">
      <div class="heading-title">
         <h4>Our Product's</h4>
         <p>know about our delivery processes</p>
         <img class="img-fluid" src="images/line-yal.png" alt="img">
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-3 col-12">
            <div class="tab">
                <?php foreach ($categories as $cat) {?>
                    <button class="tablinks" onclick="openCity(event, '<?php echo "fish" . $cat['id'];?>')" id="defaultOpen"><?php echo $cat['c_name'];?></button>
                <?php }?>
            </div>
         </div>
          <div class="col-lg-9 col-md-9 col-12">
              <div class="custom-tbs-content float_left">

                      <div id="fish" class="tabcontent">
                          <div class="product-new-filter-block">
                              <?php foreach ($products as $product) {
                                  $sql3 = $con->prepare('select photo
                                                                from p_photo
                                                                where p_id = '. $product['id']);
                                  $sql3->execute();
                                  $photo = $sql3->fetch();
                                  ?>

                              <div class="custom-tabs-prdt">
                                  <div class="product-thumbnail">
                                      <a href="product-single.php">
                                          <img src="<?php echo $base_url . $photo['photo'];?>" alt="img">
                                      </a>
                                  </div>
                                  <div class="product-body">
                                      <h5 class="product-title">
                                          <a href="product-single.php?id=<?php echo $product['id'];?>" title="Beef"><?php echo $product['p_name'];?></a>
                                      </h5>
                                      <ul class="star-review">
                                          <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                          <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                          <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                          <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                          <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                      </ul>
                                      <span class="product-price"><?php echo $product['p_price'];?>$</span>
                                      <p class="product-text"><?php echo $product['p_desc'];?></p>
                                      <a class="custom-btn" href="product-single.php?id=<?php echo $product['id'];?>">Add Cart</a>
                                  </div>
                              </div>

                              <?php }?>

                          </div>
                      </div>
              </div>
          </div>

      </div>
   </div>
</div>






<div class="copy-right-wrapper float_left">
   <div class="container">
      <div class="row">
         <div class="col-lg-5 col-md-5 col-sm-12 col-12">
            <div class="copy-social">
               <ul>
                  <li>
                     <a href="javascript:;"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                     <a href="javascript:;"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="javascript:;"><i class="fab fa-google" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="javascript:;"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="javascript:;"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-7 col-md-7 col-sm-12 col-12">
            <div class="copy-right">
               <p>Copyright 2022 © </p>
               <a href="javascript:;">Fish House | Fish Shop</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- footer section end -->
<!-- Side Panel -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/counter.js"></script>
<script src="js/tesi.js"></script>
<script src="js/testi.js"></script>
<script src="js/tabs.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/custom.js"></script>

<!-- custom js-->
<script>
   new WOW().init();
</script>
<!-- tabs -->

</body>
</html>