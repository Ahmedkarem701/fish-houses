<?php

include 'Code/connect.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $con->prepare('update requests set status = 1 where r_id =' . $id);
    $sql->execute();

    header('Location: Code/index.php');

}