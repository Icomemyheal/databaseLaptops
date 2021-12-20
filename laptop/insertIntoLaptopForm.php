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
        include_once("showLaptop.php")    
    ?>

    <form action="insertIntoLaptop.php" method="post">
        <label>Процессор</label><input name="GPU" type="text"><br>
        <label>RAM</label><input name="RAM" type="text"><br>
        <label>Вага</label><input name="weight" type="text"><br>
        <label>Ціна</label><input name="price" type="text"><br>
        <label>ID продукта</label><input name="type_ID" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>