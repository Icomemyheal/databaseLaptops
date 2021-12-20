<?php

include_once('db.php');



$id = $_POST['id'];
$GPU = $_POST['GPU'];
$RAM = $_POST['RAM'];
$weight = $_POST['weight'];
$price = $_POST['price'];
$type_ID = $_POST['type_ID'];

$sql = "UPDATE laptop SET GPU='$GPU', RAM='$RAM',weight='$weight',price='$price',type_ID='$type_ID' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showLaptop.php");
?>