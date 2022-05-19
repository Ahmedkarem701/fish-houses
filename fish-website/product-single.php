<?php
include 'connect.php';

$id = '';
if (isset($_GET['id']))
    $id = $_GET['id'];
else
    header('Location: product.php');

$sql = $con->prepare('select * 
                            from products p, p_photo ph
                            where p.id = ' . $id . ' 
                            and ph.p_id = ' . $id);
$sql->execute();
$products = $sql->fetchAll();

$sql2 = $con->prepare('select * 
                            from cooking, products
                            where cooking.co_p_id = products.id');
$sql2->execute();
$cooking = $sql2->fetchAll();

$sql3 = $con->prepare('select * 
                            from products
                            where id = ' . $id);
$sql3->execute();
$single_product = $sql3->fetch();

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
   <!-- banner section start start-->
   <div class="inner-slider-wrapper float_left">
      <div class="container">
         <div class="inner-caption">
            <h4>Product Single</h4>
            <img src="images/title.png" alt="img">
         </div>
         <ol class="breadcrumb sicon">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Product Single</li>
         </ol>
      </div>
   </div>
   <!-- banner section start end-->


   <div class="product-client-say-wrapper float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
               <div class="testi-slider float_left">
                  <div id="my-carousel" class="owl-carousel">

                      <?php foreach ($products as $product) {?>
                          <div class="item">
                              <img src="<?php echo $base_url . $product['photo'];?>" alt="img">
                          </div>
                      <?php }?>

                  </div>
                  <div class="navigation-img-wrapper">

                      <?php $i=0; foreach ($products as $product) {?>
                          <div class="navigator" data-item="<?php echo $i++;?>"><img src="<?php echo $base_url . $product['photo'];?>" alt="img"></div>
                      <?php }?>

                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
               <div class="product-des">
                  <h4><?php echo $single_product['p_name'];?></h4>
                  <h5><?php echo $single_product['p_price'];?>$</h5>
                  <ul class="star-review">
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                  </ul>
                  <form method="get" action="checkout.php">
                      <input type="hidden" name="pnm" value="<?php echo $single_product['p_name'];?>">

                     <?php foreach ($cooking as $cook) {?>
                         <div class="card-product">
                             <div class="card-product-text">
                                 <h5><label for="price"><?php echo $cook['co_name']?></label></h5>
                             </div>
                             <div class="card-product-rate">
                                 <h5><?php echo $single_product['p_price'];?>$</h5>
                                 <div>
                                     <div style="padding: 4px" class="form-group">
                                         <input type="radio" id="price" name="cook" value="<?php echo $cook['co_id']?>" required>
                                     </div>
                                 </div>
                             </div>
                         </div>
                      <?php }?>
                      <div class="value-produt">

                          <div class="number">
                              <span class="minus">-</span>
                              <input type="text" value="1" name="count"/>
                              <span class="plus">+</span>
                          </div>
                          <button class="custom-btn" type="submit">Check Out</button>
                      </div>
                  </form>
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

   <!-- pluse minus value-->
   <!-- <script>
      function increaseValue() {
         var value = parseInt(document.getElementById('number').value, 10);
         value = isNaN(value) ? 0 : value;
         value++;
         document.getElementById('number').value = value;
      }

      function decreaseValue() {
         var value = parseInt(document.getElementById('number').value, 10);
         value = isNaN(value) ? 0 : value;
         value < 1 ? value = 1 : '';
         value--;
         document.getElementById('number').value = value;
      }
   </script> -->
   <script>
      $(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 0 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
   </script>

</body>

</html>