<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include_once("showProduct.php")    
    ?>

    <form action="insertIntoProduct.php" method="post">
    <label>Виробник</label><input name="maker" type="text"><br>
        <label>Модель</label><input name="model" type="text"><br>
        <label>Рік випуску</label><input name="god_Sozd" type="text"><br>
        <label>ID продукта</label><input name="product_ID" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
