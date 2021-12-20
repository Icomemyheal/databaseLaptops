<?php

include_once('db.php');



$id = $_POST['id'];
$maker = $_POST['maker'];
$model = $_POST['model'];
$god_sozd = $_POST['god_sozd'];
$product_ID = $_POST['product_ID'];

$sql = "UPDATE product SET maker='$maker', model='$model',god_sozd='$god_sozd',product_ID='$product_ID' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showProduct.php");
?>
