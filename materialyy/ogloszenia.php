<?php

$user = 'root';
$pass = '';
$host = 'localhost';
$base = 'ogloszenia';
$con = mysqli_connect($host, $user, $pass, $base);

mysqli_select_db($con, $base);

$query = "SELECT id, tytul, tresc FROM ogloszenie";
$result = mysqli_query($con, $query);

$query1 = "SELECT telefon FROM uzytkownik, ogloszenie WHERE uzytkownik.id = ogloszenie.uzytkownik_id AND uzytkownik_id LIKE 1";
$result1 = mysqli_query($con, $query1);




mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl1.css">
    <title>Portal ogłoszeniowy</title>
</head>
<body>
    <div id="baner">
        <h1>Portal Ogłoszeniowy</h1>
    </div>

    <div id="lewy">
        <h2>Kategorie ogłoszeń</h2>
        <ol type="I">
        <li>Książki</li>
        <li>Muzyka</li>
        <li>Filmy</li>
        </ol>
        <img id="aha" src="ksiazki.jpg" alt="Kupie/sprzedam książkę">

        <table>
            <tr>
                <td>Liczba ogłoszeń</td> <td>Cena ogłoszenia</td> <td>Bonus</td>
            </tr>

            <tr>
            <td>1-10</td> <td>1 PLN</td> <td rowspan="3">Subksrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
            </tr>

            <tr>
                <td>11-50</td> <td>0,80 PLN</td>
            </tr>

            <tr>
                <td>51 i więcej</td> <td>0,60 PLN</td>
            </tr>
         </table>

    </div>

    <div id="prawy">
        <h2>Ogłoszenia kategorii książki</h2>

        <?php
        while($row = mysqli_fetch_array($result)){
            echo "<h3>".$row[0].$row[1]."</h3>";
            echo $row[2];

        }
      

        ?>
    </div>

    <div id="stopka">
        Portał ogłoszeniowy opracował: Białas
    </div>




    
</body>
</html>