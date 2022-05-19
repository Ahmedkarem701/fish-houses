<?php

include '../connect.php';

$validation = array('jpeg', 'jpg', 'png');
$path = '../../../uploads/';

$do = '';
if (isset($_GET['do']))
    $do = $_GET['do'];

else header("Location: ../index.php");

if ($do == 'worker') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $photo = $_FILES['photo'];
        $jop = $_POST['jop'];
        $dept = $_POST['dept'];
        $email = $_POST['email'];
        $pass = sha1($_POST['pass']);

        $img_name =  $_FILES['photo']['name'];
        $img_temp =  $_FILES['photo']['tmp_name'];

        $ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
        $final_name = rand(1000000, 10000000000) . '.' . $ext;

        if (in_array($ext, $validation)) {
            $path1 = $path . strtolower($final_name);
            echo $path1;

            if (move_uploaded_file($img_temp, $path1)) {
                echo '<br><br>' . $final_name;
                $sql = $con->prepare("INSERT INTO `users` (`name`, `email`, `password`, `photo`, `jop`, `dept`, `user_type`)
                                    VALUES (:zname, :zemail, :zpass, :zphoto, :zjop, :zdept, 1)");
                $sql->execute(array(
                    'zname' => $name,
                    'zemail' => $email,
                    'zpass' => $pass,
                    'zphoto' => 'uploads/' . $final_name,
                    'zjop' => $jop,
                    'zdept' => $dept,
                ));
                echo '<br><br>' . $final_name;
            }
        }
        header("Location: ../workers.php");

    } else header("Location: ../index.php");
}

if ($do == 'categories') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['cat_name'];

        $sql = $con->prepare("INSERT INTO `categories` (`c_name`)
                            VALUES (:zname)");
        $sql->execute(array(
            'zname' => $name,
        ));

        header('Location: ../categories.php');

    } else header("Location: ../index.php");
}

if ($do == 'cooking') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['co_name'];
        $p_id = $_POST['p_id'];

        $sql = $con->prepare("INSERT INTO `cooking` (`co_name`, `p_id`)
                            VALUES (:zname, :zid)");
        $sql->execute(array(
            'zname' => $name,
            'zid' => $p_id,
        ));

        header('Location: ../cooking.php');

    } else header("Location: ../index.php");
}

if ($do == 'products') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $cat = $_POST['cat'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];

        $sql = $con->prepare("INSERT INTO `products` (`p_name`, `p_cat`, `p_price`, `p_desc`)
                                    VALUES (:zname, :zcat, :zprice, :zdesc)");
        $sql->execute(array(
            'zname' => $name,
            'zcat' => $cat,
            'zprice' => $price,
            'zdesc' => $desc,
        ));

        $p_id = $con->prepare('select `id` from `products` where `p_name` = ? and `p_desc` = ? and `p_cat` = ? and `p_price` = ?');
        $p_id->execute(array($name, $desc, $cat, $price));
        $get_id = $p_id->fetch();

        $photos = $_FILES['photo'];

        foreach ($photos['tmp_name'] as $key => $photo) {

            $img_name =  $photos['name'][$key];
            $img_temp =  $photos['tmp_name'][$key];

            $ext = (pathinfo($img_name, PATHINFO_EXTENSION));
            $final_name = rand(1000000, 10000000000) . '.' . $ext;

            if (in_array($ext, $validation)) {
                $path1 = $path . strtolower($final_name);

                if (move_uploaded_file($img_temp, $path1)) {
                    $sql2 = $con->prepare("INSERT INTO `p_photo` (`photo`, `p_id`)
                                    VALUES (:zphoto, :zid)");
                    $sql2->execute(array(
                        'zphoto' => 'uploads/' . $final_name,
                        'zid' => $get_id['id'],
                    ));
                }
            }
        }


        header("Location: ../products.php");

    } else header("Location: ../index.php");
}