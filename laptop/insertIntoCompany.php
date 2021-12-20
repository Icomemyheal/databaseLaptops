<?php

include_once('db.php');


$name = $_POST['name']; $author = $_POST['author'];$foundYear = $_POST['foundYear'];

$sql = "INSERT INTO company (name, author, foundYear) VALUES ('$name', '$author','$foundYear')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showCompany.php");

?>