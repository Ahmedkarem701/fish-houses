<?php
include 'fish-website/connect.php';

$sql = $con->prepare('select * from categories');
$sql->execute();
$cats = $sql->fetchAll();

$sql2 = $con->prepare('select * from products');
$sql2->execute();
$products = $sql2->fetchAll();
?>

<!DOCTYPE html>
<head>
   <meta charset="utf-8" />

   <title>Fish House</title>

   <meta content="width=device-width, initial-scale=1.0" name="viewport" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/animate.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/animate.min.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/bootstrap.min.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/fonts.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/font-awesome.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/magnific-popup.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/owl.carousel.min.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/owl.theme.default.min.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/tabs.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/style.css" />

   <link rel="stylesheet" type="text/css" href="fish-website/css/responsive.css" />
</head>

<body>
   <div id="preloader">
      <div id="status">
         <img src="fish-website/images/loader.gif" id="preloader_image" alt="loader">
      </div>
   </div>
   <!-- top to return -->
   <a href="#" id="return-to-top" class="change-bg2"> <i class="fas fa-angle-double-up"></i></a>
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
                           <li><a href="#"><i class="fa fa-phone"></i> <b>+212345678</b>(Open Right Now)</a>
                           </li>
                           <li class="hidden-xs"><a href="#"><i
                                    class="fa fa-paper-plane-o"></i> email@example.com</a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-3 col-sm-3 col-xs-6">
                        <ul class="social-list">
                           <li>
                              <a href="fish-website/login.php"><i class="fa fa-user" aria-hidden="true"></i>
                                 Login</a>
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
                           <a href="index.php">
                              <img style="width: 160px" src="fish-website/images/logo.jpg" alt="logo">
                           </a>
                        </div>
                        <nav class="navbar navbar-expand-lg">
                           <ul class="navbar-nav">
                              <li class="nav-item  menu-click5 ps-rel">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>

                              <li class="nav-item menu-click4 ps-rel">
                                 <a class="nav-link" href="fish-website/product.php">Fish</a>
                              </li>
                              <li class="nav-item menu-click ps-rel">
                                    <a class="nav-link" href="fish-website/team.html">Team</a>
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
                        <a href="index.php">
                           <img style="width: 56%" src="fish-website/images/logo.jpg" alt="logo">
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
               <a href="index.php"><img src="fish-website/images/logo.jpg" alt="img"></a>
            </div>
            <div id="toggle_close">&times;</div>
            <div id='cssmenu'>
               <ul class="float_left">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="fish-website/product.php">Fish</a></li>
                  <li><a href="fish-website/team.html">Team</a></li>
               </ul>
            </div>
         </div>
         <!-- responsive menu End -->
      </div>
   </div>
   <!-- header end -->
   <!-- banner section start start-->
   <div class="index1-slider-wrapper float_left ptb-100">
      <div class="container">
         <div class="slider-caption wow fadeInUp" data-wow-delay="0.1s">
            <h4>Organic Fish and Sustainable Sea Food for You</h4>
            <a class="custom-btn" href="fish-website/product.php"> Shop Now </a>
         </div>
         <div class="slider-item">
            <ul>
               <li class="wow fadeInUp" data-wow-delay="0.1s">
                  <div class="item-icon">
                     <img alt="img" src="fish-website/images/item1.png">
                  </div>
                  <div class="item-text">
                     <h4>Free Delivery on orders over £50</h4>
                     <p>Proin varius malesuada lacinia.</p>
                  </div>
               </li>
               <li class="wow fadeInUp" data-wow-delay="0.2s">
                  <div class="item-icon">
                     <img alt="img" src="fish-website/images/item1.png">
                  </div>
                  <div class="item-text">
                     <h4>Cut to order by Master Butchers</h4>
                     <p>Proin varius malesuada lacinia.</p>
                  </div>
               </li>
               <li class="wow fadeInUp" data-wow-delay="0.3s">
                  <div class="item-icon">
                     <img alt="img" src="fish-website/images/item1.png">
                  </div>
                  <div class="item-text">
                     <h4>Choose your own Delivery Date</h4>
                     <p>Proin varius malesuada lacinia.</p>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="home-delivery-sec-wrapper float_left">
      <div class="container">
         <div class="heading-title">
            <h4>Home Delivery</h4>
            <p>know about our delivery processes</p>
            <img class="img-fluid" src="fish-website/images/line-yal.png" alt="img">
         </div>
         <div class="delivery-main-wrapper">
            <div class="delivery-box">
               <img src="fish-website/images/icon01.png" alt="img">
               <h4> Choose </h4>
               <p>Nunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
            </div>
            <div class="delivery-box">
               <img src="fish-website/images/icon03.png" alt="img">
               <h4> Cook </h4>
               <p>Nunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
            </div>
            <div class="delivery-box">
               <img src="fish-website/images/icon02.png" alt="img">
               <h4> Recieve </h4>
               <p>Aunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
            </div>
            <div class="delivery-box arro-remove">
               <img src="fish-website/images/icon04.png" alt="img">
               <h4> Eat </h4>
               <p>Aunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
            </div>
         </div>
      </div>
   </div>


   <div class="product-filter-main-wrapper float_left ptb-100">
      <div class="container">
         <div class="heading-title">
            <h4>Our Product's</h4>
            <p>know about our delivery processes</p>
            <img class="img-fluid" src="fish-website/images/line-yal.png" alt="img">
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
               <div class="tab">
                  <?php foreach ($cats as $cat) {?>
                      <button class="tablinks" onclick="openCity(event, 'fish<?php echo $cat['id'];?>')" id="defaultOpen"><?php echo $cat['c_name'];?></button>
                   <?php }?>
               </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12">
               <div class="custom-tbs-content float_left">
                   <?php foreach ($products as $product) {

                       $sql3 = $con->prepare('select photo
                            from p_photo
                            where p_id = '. $product['id']);
                       $sql3->execute();
                       $photo = $sql3->fetch();

                       ?>

                       <div id="fish<?php echo $product['p_cat'];?>" class="tabcontent">
                           <div class="product-new-filter-block">

                               <div class="custom-tabs-prdt">
                                   <div class="product-thumbnail">
                                       <a href="fish-website/product-single.php?id=<?php echo $product['id'];?>">
                                           <img src="<?php echo $base_url . $photo['photo'];?>" alt="img">
                                       </a>
                                   </div>
                                   <div class="product-body">
                                       <h5 class="product-title">
                                           <a href="fish-website/product-single.php" title="Beef"><?php echo $product['p_name'];?></a>
                                       </h5>
                                       <ul class="star-review">
                                           <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                           <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                           <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                           <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                           <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                       </ul>
                                       <span class="product-price"><?php echo $product['p_price'];?>$ </span>
                                       <p class="product-text"><?php echo $product['p_desc'];?></p>
                                       <a class="custom-btn" href="fish-website/product-single.php?id=<?php echo $product['id'];?>">Add Cart</a>
                                   </div>
                               </div>

                               <div class="center-btn">
                                   <a href="fish-website/product.php">View All</a>
                               </div>
                           </div>
                       </div>
                   <?php }?>
               </div>
            </div>

         </div>
      </div>
   </div>


   <div class="countdown-wrapper float_left">
      <div class="container">
         <div class="counter-main-wrapper">
            <div class="count-box">
               <div class="count">100</div>
               <span class="customer">Customer’s</span>
            </div>
            <div class="count-box">
               <div class="count">60</div>
               <span class="customer customer1">Fishs Type’s</span>
            </div>
            <div class="count-box">
               <div class="count">70</div>
               <span class="customer customer2">Organic Farm’s</span>
            </div>
            <div class="count-box">
               <div class="count">50</div>
               <span class="customer customer3">Outlet's</span>
            </div>
         </div>
         <div class="counter-text">
            <img class="img-fluid" src="fish-website/images/line-cd.png" alt="img">
            <p>Donec blandit, tellus sed molestie posuere, erat lorem tempor enim, vestibulum tincidunt ex diam in elit.
               Suspendisse sed ipsum nibh. Proin euismod luctus mauris, quis scelerisque arcu ultricies condimentum.
               Donec pellentesque dictum tellus, ut tincidunt nibh ultricies vitae. Etiam luctus justo eu tellus
               maximus, id venenatis sem euismod.</p>
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
   <script src="fish-website/js/jquery-3.6.0.min.js"></script>
   <script src="fish-website/js/bootstrap.min.js"></script>
   <script src="fish-website/js/wow.js"></script>
   <script src="fish-website/js/counter.js"></script>
   <script src="fish-website/js/tesi.js"></script>
   <script src="fish-website/js/testi.js"></script>
   <script src="fish-website/js/tabs.js"></script>
   <script src="fish-website/js/jquery.magnific-popup.js"></script>
   <script src="fish-website/js/isotope.pkgd.min.js"></script>
   <script src="fish-website/js/custom.js"></script>

   <!-- custom js-->
   <script>
      new WOW().init();
   </script>
   <!-- tabs -->
   <script>
      function openCity(evt, cityName) {
         var i, tabcontent, tablinks;
         tabcontent = document.getElementsByClassName("tabcontent");
         for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
         }
         tablinks = document.getElementsByClassName("tablinks");
         for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
         }
         document.getElementById(cityName).style.display = "block";
         evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
   </script>
</body>
</html>