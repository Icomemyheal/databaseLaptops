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
        include_once("showLaptop.php");    
    ?>

<form action="updateLaptop.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення GPU</label><input name="GPU" type="text"><br>
        <label>Нове значення RAM</label><input name="RAM" type="text"><br>
        <label>Нове значення Вага</label><input name="weight" type="text"><br>
        <label>Нове значення Ціна</label><input name="price" type="text"><br>
        <label>Нове значення ID продукта</label><input name="type_ID" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>