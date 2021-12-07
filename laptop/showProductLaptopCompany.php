<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Звіт таблиць</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM product INNER JOIN laptop ON product.product_ID = laptop.type_ID INNER JOIN company ON product.product_ID = company.ID ORDER BY product.product_ID';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт - Список продуктів, ноутбуків і компанії: </h3><br>");   
        printf("<table><tr><th>Виробник</th><th>Модель</th><th>Рік виробництва</th><th>Процессор</th><th>Оперативна пам'ять</th><th>Вага</th><th>Ціна ноутбука</th><th>Автор компанії</th><th>Рік заснування</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['maker'], $row['model'], $row['god_sozd'],$GPU = $row['GPU'] ?? "",$RAM = $row['RAM'] ?? "",$weight = $row['weight'] ?? "",$price = $row['price'] ?? "",$author = $row['author'] ?? "",$foundYear = $row['foundYear'] ?? "");
        };
        printf("</table>");
        
        $result->close();
    }

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
