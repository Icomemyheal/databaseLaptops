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
        include_once("showCompany.php");    
    ?>

<form action="updateCompany.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення Назва</label><input name="name" type="text"><br>
        <label>Нове значення Автор</label><input name="author" type="text"><br>
        <label>Нове значення Рік заснуванняr</label><input name="foundYear" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>