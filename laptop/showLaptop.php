<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Laptop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Laptop</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM laptop";


    if($result = $mysqli->query($sql))
    {   
        printf("Список параметрів: <br><br>");   
        printf("<table><tr><th>ID ноутбука</th><th>GPU</th><th>RAM</th><th>Weight</th><th>Price</th><th>ID типу</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['ID'], $row['GPU'], $row['RAM'],$row['weight'],$row['price'],$row['type_ID']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showProductLaptopCount.php">Звіт Кількість ноутбуків в Product</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
