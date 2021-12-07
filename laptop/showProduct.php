<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Product</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM product ORDER BY product_ID';


    /* Надсилаємо запит серверу */
    if($result = $mysqli->query($sql)) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Список ноутбуків: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ID</th><th>Виробник</th><th>Модель</th><th>Рік випуску</th><th>ID продукта</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['ID'], $row['maker'], $row['model'],$row['god_sozd'],$row['product_ID']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    };

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoProductForm.php">Вставити рядок</a><br></li>
        <li><a href="updateProductForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromProductForm.php">Видалити рядок</a><br></li>
        <li><a href="showProductLaptopCompany.php">Звіт Студенти - Групи - Куратори</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
