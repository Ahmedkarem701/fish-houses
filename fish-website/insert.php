<?php
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = sha1($_POST['pass']);

    $sql = $con->prepare("INSERT INTO `users` (`name`, `email`, `password`)
                                    VALUES (:zname, :zemail, :zpass)");
    $sql->execute(array(
        'zname' => $name,
        'zemail' => $email,
        'zpass' => $pass,
    ));

    header('Location: login.php');
}