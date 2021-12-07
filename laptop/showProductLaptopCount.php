<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Кількість ноутбуків на складі</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Кількість ноутбуків на складі</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT p.maker, COUNT(l.type_ID) as "kilk_laptop" FROM product AS p LEFT JOIN laptop AS l ON p.ID = l.type_ID GROUP BY l.type_ID';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт - Кількість ноутбуків на складі: </h3><br>");   
        printf("<table><tr><th>Назва виробника</th><th>Кількість ноутбуків на складі</th></tr>"); 
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['maker'], $row['kilk_laptop']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>


    <br><br><br>

    <ul>
        <li><a href="showProduct.php">Таблиця Product</a><br></li>
        <li><a href="showLaptop.php">Таблиця Laptop</a><br></li>
        <li><a href="showCompany.php">Таблиця Company</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
