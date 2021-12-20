<?php

include_once('db.php');


$GPU = $_POST['GPU']; $RAM = $_POST['RAM'];$weight = $_POST['weight'];$price = $_POST['price'];$type_ID = $_POST['type_ID'];

$sql = "INSERT INTO laptop (GPU, RAM, weight, price, type_ID) VALUES ('$GPU', '$RAM','$weight','$price','$type_ID')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showLaptop.php");

?>