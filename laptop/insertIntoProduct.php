<?php

include_once('db.php');


$maker = $_POST['maker']; $model = $_POST['model'];$god_Sozd = $_POST['god_Sozd'];$product_ID = $_POST['product_ID'];

$sql = "INSERT INTO product (maker, model, god_sozd, product_ID) VALUES ('$maker', '$model','$god_Sozd','$product_ID')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showProduct.php");

?>
