<?php

include_once('db.php');



$id = $_POST['id'];
$name = $_POST['name'];
$author = $_POST['author'];
$foundYear = $_POST['foundYear'];

$sql = "UPDATE company SET name='$name', author='$author',foundYear='$foundYear' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showCompany.php");
?>