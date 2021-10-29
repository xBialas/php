<?php
 $user = 'root';
 $pass = '';
 $host = 'localhost';
 $base = 'Komis';
 $con = mysqli_connect($host, $user, $pass, $base);

 mysqli_select_db($con, $base);
 $query = "SELECT id, marka, model FROM samochody";
 $result = mysqli_query($con, $query);

 $query2 = "SELECT samochody_id, klient FROM zamowienia";
 $result2 = mysqli_query($con, $query2);

 $query3 = "SELECT * FROM samochody WHERE marka LIKE 'Fiat' ";
 $result3 = mysqli_query($con, $query3);


 mysqli_close($con);



?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Komis Samochodowy</title>

   <link rel="stylesheet" href="auto.css">
</head>
<body>

<div id="baner">
<h1>SAMOCHODY</h1>
</div>

<div id="lewy">
<h2>Wykaz samochodów</h2>

<?php
while($row = mysqli_fetch_array($result)){
    echo "<ul>";
    echo "<li>".$row[0]. " " .$row[1] . " ".$row[2]. " ". "</li>"  ;
    echo "</ul>";
}


?>

<h2>Zamowienia</h2>

<?php
while($row2 = mysqli_fetch_array($result2)){
    echo "<ul>";
    echo "<li>".$row2[0]. " " .$row2[1] . "</li>"  ;
    echo "</ul>";
}

?>

</div>

<div id="prawy">
<h2>Pełne dane: Fiat</h2>

<?php
while($row3 = mysqli_fetch_array($result3)){
    
    echo $row3[0] . "/ ". $row3[1] . "/ ". $row3[2] . "/ ". $row3[3] . "/ ". $row3[4] . "/ ". $row3[5] ."<br>";
    
}

?>



</div>

<div id="stopka">
<table id="tabela">
    <tr> 
     <td> <a href = "kwerendy.txt">Kwerendy</a>  </td>
     <td>Autor: Jan Białas </td>
     <td> <img src="auto.png" alt="komis samochodowy"> </td>   
    </tr>
</table>


</div>

    
</body>
</html>