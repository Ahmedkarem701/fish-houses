<?php

include '../connect.php';

    function delItems($tbl, $itemid, $page) {
        global $id, $con;
        $sql = $con->prepare("DELETE FROM `$tbl` WHERE `$itemid` = :ztest");
        $sql->bindParam(':ztest', $id);
        $sql->execute();
        header("Location: ../$page");
    }

$do = '';
$id = '';

if (isset($_GET['do']) && isset($_GET['id'])) {
    $do = $_GET['do'];
    $id = $_GET['id'];
}
else header("Location: ../index.php");

if ($do == 'workers') {
    delItems('users', 'id', 'workers.php');
}

if ($do == 'custumers') {
    delItems('users', 'id', 'custumers.php');
}

if ($do == 'categories') {
    delItems('categories', 'id', 'categories.php');
}

if ($do == 'products') {
    delItems('products', 'id', 'products.php');
}

if ($do == 'cooking') {
    delItems('cooking', 'co_id', 'cooking.php');
}

if ($do == 'requests') {
    delItems('requests', 'co_id', 'requests.php');
}
