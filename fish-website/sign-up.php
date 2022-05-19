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

<body class="page-bg">

   <div id="preloader">
      <div id="status">
         <img src="images/loader.gif" id="preloader_image" alt="loader">
      </div>
   </div>
   <div class="login_box_main_wrapper" id="login_height">
      <div class="container">
         <div class="login-logo">
         </div>
         <div class="signin-wrapper">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="left-side">
                     <h4>Sign Up</h4>
                     <form action="insert.php" method="post">
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input type="text" placeholder="Full Name" name="name">
                              <span><i class="fa fa-user" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input type="text" placeholder="Email" name="email">
                              <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input type="password" placeholder="Re-Type Password" name="pass">
                              <span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="cond">
                           <input type="checkbox" id="box1" name="box1" value="box1" required>
                           <label for="box1"> Yes, I understand and agree to the Terms &amp; Conditions.</label>
                        </div>

                        <div class="login-btn-sec remove-social">
                            <button type="submit" class="sub-btn"><span>Sign Up</span></button>
                           
                           <p>Do have an account? <a href="login.php">Sign In now!</a></p>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="login-img">
                     <img class="img-fluid" src="images/fish.webp" alt="img">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Side Panel -->
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.magnific-popup.js"></script>
   <script src="js/wow.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>

   <!-- custom js-->
   <script>
      const types = ['load', 'resize'];
      types.forEach(function (type) {
         window.addEventListener(type, () => {

            let elem = document.getElementById('login_height');
            let wh = window.innerHeight;

            elem.style.height = wh + 'px';

         });
      });

   </script>
</body>
</html>