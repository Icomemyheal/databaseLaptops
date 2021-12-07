<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Company</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Company</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM company';


    if($result = $mysqli->query($sql)) {  

        printf("Список компаній виробників: <br><br>");   
        printf("<table><tr><th>ID</th><th>Назва компанії</th><th>Автор</th><th>Рік заснування</th><th>ID компанії</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['ID'], $row['name'],$row['author'],$row['foundYear'],$row['company_ID']); 
        };
        printf("</table>");
        
        $result->close();
    };

    
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
