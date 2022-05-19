<?php
include 'connect.php';

$do = '';
if (isset($_GET['do']))
    $do = $_GET['do'];

else header("Location: ../index.php");

if ($do == 'checkout') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $order = $_POST['order'];
        $u_id = $_POST['uid'];
        $cooking = $_POST['cook'];
        $p_name = $_POST['pname'];

        $sql = $con->prepare("INSERT INTO `requests` ( `u_id`, `r_order`, `co_id`, `r_p_name`)
                            VALUES (:zuid, :zorder, :zcook, :zpname)");
        $sql->execute(array(
            'zuid' => $u_id,
            'zorder' => $order,
            'zcook' => $cooking,
            'zpname' => $p_name,
        ));

        header('Location: product.php');

    } else header("Location: ../index.php");
}
