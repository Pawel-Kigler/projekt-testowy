<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="" class="css">
</head>
<body>
<div class="con">

    <div class="a">
<?php

                $conn= new mysqli("mysql-pawel-kigler.alwaysdata.net","217223","pawelex11","pawel-kigler_pies");
                
                $result=$conn->query('SELECT * FROM pracownicy');
                    echo("<table border=1>");
                    echo("<th>id</th>");
                    echo("<th>imie</th>");
                    echo("<th>dzial</th>");
                    echo("<th>zarobki</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
                            echo("</tr>");
                        }
                    echo("</table>");
                    ?></div>
                    </div>
</body>
</html>