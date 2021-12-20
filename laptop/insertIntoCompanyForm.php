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
        include_once("showCompany.php")    
    ?>

    <form action="insertIntoCompany.php" method="post">
        <label>Назва компанії</label><input name="name" type="text"><br>
        <label>Автор</label><input name="author" type="text"><br>
        <label>Рік заснування</label><input name="foundYear" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>