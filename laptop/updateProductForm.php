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
        include_once("showProduct.php");    
    ?>

<form action="updateProduct.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення Виробника</label><input name="maker" type="text"><br>
        <label>Нове значення Моделі</label><input name="model" type="text"><br>
        <label>Нове значення Рік випуску</label><input name="god_sozd" type="text"><br>
        <label>Нове значення ID продукта</label><input name="product_ID" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>