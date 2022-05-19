<?php
    include 'connect.php';

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
                header('Location: index.php');
            }

            if ($row['user_type'] == 1) {
                header('Location: ../fish-worker/Code/index.php');
            }

            if ($row['user_type'] == 2) {
                header('Location: ../fish-manager/Code/index.php');
            }
        }
        else
            header('Location: login.php?message=error');
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
               <div class="col-lg-6 col-md-12 col-12">
                  <div class="left-side">
                     <h4>Sign In</h4>
                     <form action="login.php" method="post">
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input type="email" placeholder="Email..." name="email">
                              <span><i class="fa fa-user" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input type="password" placeholder="Password" name="pass">
                              <span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="round">
                           <input type="checkbox" id="checkbox">
                           <label for="checkbox"><span>Remember Me</span></label>
                        </div>
                        <div class="login-btn-sec">
                           <button type="submit" style="width: 100%" class="sub-btn"><span>Sign In</span></button>
                           <p>Do have an account? <a href="sign-up.php">Sign Up now!</a></p>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 col-12">
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