<?php

include '../connect.php';

$validation = array('jpeg', 'jpg', 'png');
$path = '../../../uploads/';

$do = '';
$id = '';
if (isset($_GET['do']))
    $do = $_GET['do'];
else header("Location: ../index.php");

if ($do == 'worker') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $photo = $_FILES['photo'];
        $jop = $_POST['jop'];
        $dept = $_POST['dept'];
        $email = $_POST['email'];

        $sql1 = $con->prepare("UPDATE `users` SET `name` = ?, `email` = ?, `jop` = ?, `dept` = ?
                                    WHERE `id` = ?");
        $sql1->execute(array($name, $email, $jop, $dept, $id));

        $img_name =  $_FILES['photo']['name'];
        $img_temp =  $_FILES['photo']['tmp_name'];

        $ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
        $final_name = rand(1000000, 10000000000) . '.' . $ext;


        if (in_array($ext, $validation)) {
            $path1 = $path . strtolower($final_name);

            if (move_uploaded_file($img_temp, $path1)) {
                $sql2 = $con->prepare("UPDATE `users` SET `photo` = ? WHERE `id` = ?");
                $sql2->execute(array('uploads/' . $final_name, $id));
            }
        }
        header("Location: ../workers.php");

    } else header("Location: ../index.php");
}

if ($do == 'categories') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $name = $_POST['cat_name'];

        $sql = $con->prepare("update `categories` set `c_name` ?
                            where `id` = ?");
        $sql->execute(array($name, id));

        header('Location: ../categories.php');

    } else header("Location: ../index.php");
}

if ($do == 'products') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $cat = $_POST['cat'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];

        $sql = $con->prepare("UPDATE `products` SET `p_name` = ?, `p_cat` = ?, `p_price` = ?, `p_desc` = ?
                                    WHERE `id` = ?");
        $sql->execute(array($name, $cat, $price, $desc, $id));

        header("Location: ../product-details.php");

    } else header("Location: ../index.php");
}

if ($do == 'cooking') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $p_name = $_POST['p_name'];
        $co_name = $_POST['co_name'];

        $sql = $con->prepare("update `cooking` set `co_name` = ?, `co_p_id` = ?
                            where `co_id` = ?");
        $sql->execute(array($co_name, $p_name, $id));

        header('Location: ../cooking.php');

    } else header("Location: ../index.php");
}

//if ($do == 'products') {
//
//    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//        $name = $_POST['name'];
//        $photos[] = $_FILES['photo'];
//
//        echo $photos;
//
//        $cat = $_POST['cat'];
//        $price = $_POST['price'];
//        $desc = $_POST['desc'];
//
//        $img_name =  $_FILES['photo']['name'];
//        $img_temp =  $_FILES['photo']['tmp_name'];
//
//        $ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
//        $final_name = rand(1000000, 10000000000) . '.' . $ext;
//
////        foreach ()
////
////        if (in_array($ext, $validation)) {
////            $path1 = $path . strtolower($final_name);
////            echo $path1;
////
////            if (move_uploaded_file($img_temp, $path1)) {
////                echo '<br><br>' . $final_name;
////                $sql = $con->prepare("INSERT INTO `users` (`name`, `email`, `password`, `photo`, `jop`, `dept`, `user_type`)
////                                    VALUES (:zname, :zemail, :zpass, :zphoto, :zjop, :zdept, 1)");
////                $sql->execute(array(
////                    'zname' => $name,
////                    'zemail' => $email,
////                    'zpass' => $pass,
////                    'zphoto' => 'uploads/' . $final_name,
////                    'zjop' => $dept,
////                    'zdept' => $dept,
////                ));
////                echo '<br><br>' . $final_name;
////            }
////        }
////        header("Location: ../workers.php");
//
//    } else header("Location: ../index.php");
//}

if ($do == 'requests') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = $con->prepare('update requests set status = 1 where r_id =' . $id);
        $sql->execute();

        header('Location: ../requests.php');

    }
}