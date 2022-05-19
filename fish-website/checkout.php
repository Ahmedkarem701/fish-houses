<?php
include 'connect.php';

$cook = '';
$pname = '';
if (isset($_GET['cook']) && isset($_GET['pnm'])) {
    $cook = $_GET['cook'];
    $pname = $_GET['pnm'];
}
else header('Location: product.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = sha1($_POST['pass']);

    $sql = $con->prepare('select * from users where email = ? and `password` = ?');
    $sql->execute(array($email, $password));

    $count = $sql->rowCount();
    $row = $sql->fetch();

    if ($count > 0) {

        $_SESSION['login'] = [
            'email' => $row['email'],
            'name' => $row['name'],
            'id' => $row['id'],
        ];

        if ($row['user_type'] == 0) {
            header('Location: checkout.php?cook=' . $cook . '&pnm=' . $pname);
        }
    }
    else
        header('Location: checkout.php?msg=error&cook=' . $cook . '&pnm=' . $pname);
}
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
                           <li class="nav-item menu-click1 ps-rel">
                              <a class="nav-link" href="javascript:;">Cart &nbsp;<i class="fa fa-shopping-cart"
                                                                                    aria-hidden="true"></i></a>

                              <ul class="dropdown-items menu-open1">
                                 <li>
                                    <span>1 Item</span>
                                    <a href="javascript:;"> View Cart</a>
                                 </li>
                                 <li class="cart_list">
                                    <div class="select_cart">
                                       <a href="#">Bee Fish</a>
                                       <span>1 x $258.00</span>
                                    </div>
                                    <div class="select_img">
                                       <img alt="img" src="images/fish.webp">
                                       <div class="close_btn">
                                          <i class="fa fa-times"></i>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="sub_total">
                                    <p>Sub Total:<span>$ 289.00</span></p>
                                 </li>
                                 <li class="cart_btn">
                                    <a href="checkout.php"><i class="fas fa-share"></i>&nbsp; Checkout</a>
                                 </li>
                              </ul>
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
            <h4>Checkout</h4>
            <img src="images/title.png" alt="img">
         </div>
         <ol class="breadcrumb sicon">
            <li><a href="#">Home</a></li>
            <li class="active">Checkout</li>
         </ol>
      </div>
   </div>
   <!-- banner section start end-->

   <div class="inner-page-main-wrapper float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
               <div class="side-accordian">
                  <div class="accordions" id="secondAccordion">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              Checkout Method
                           </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                           data-bs-parent="#secondAccordion">
                           <div class="accordion-body">
                              <div class="row">
                                 <div class="col-md-12 col-12">
                                    <div class="new_customer">
                                       <h3>New Customer</h3>
                                       <form action="add.php?do=checkout" method="post">
                                           <input type="hidden" name="uid" value="<?php if (isset($_SESSION['login'])) echo $_SESSION['login']['name'];?>">
                                           <input type="hidden" name="cook" value="<?php echo $cook;?>">
                                           <input type="hidden" name="pname" value="<?php echo $pname;?>">
                                          <p>
                                             <input type="radio" id="test1" name="order" value="Restaurant" checked>
                                             <label for="test1">Eating in Restaurant</label>
                                          </p>
                                          <p>
                                             <input type="radio" id="test2" name="order" value="Delivery" >
                                             <label for="test2">Delivery</label>
                                          </p>

                                           <div class="col-lg-12 col-md-12 col-12">
                                               <div class="side-bar-strip">
                                                   <h4>Your Order</h4>
                                                   <img src="images/side-title.png" alt="img">
                                                   <div class="order_details">
                                                       <?php echo $pname;?>
                                                   </div>
                                                   <button class="custom-btn"type="submit">Place Order</button>
                                               </div>
                                           </div>
                                       </form>
                                    </div>
                                 </div>
                                  <?php if (!isset($_SESSION['login']['email'])) {?>
                                    <div class="col-md-12 col-12">
                                    <div class="login_form">
                                       <h3>Log In</h3>
                                       <form action="checkout.php?cook=<?php echo $cook;?>&pnm=<?php echo $pname;?>" method="post">

                                          <div class="mb-3 row">
                                             <div class="col-12">
                                                <label>Email</label>
                                             </div>
                                             <div class="col-12">
                                                <input type="email" name="email" placeholder="enter here">
                                             </div>
                                          </div>
                                          <div class="mb-3 row">
                                             <div class="col-12">
                                                <label>Password</label>
                                             </div>
                                             <div class="col-12">
                                                <input type="password" name="pass" placeholder="enter here">
                                             </div>
                                          </div>
                                       </form>
                                       <a class="submit_btn" href="#">Login Now</a>
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

</body>
</html>