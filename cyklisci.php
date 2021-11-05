<?php
$user = 'root';
$pass = '';
$host = 'localhost';
$base = 'cyklisci';
$con = mysqli_connect($host, $user, $pass, $base);

mysqli_select_db($con, $base);

if(isset($_GET['szef']));
{
    $id = $_GET['id'];
    $imie = $_GET['im'];
    $nazwisko = $_GET['nazw'];
    $marka = $_GET['mar'];
    $miasto = $_GET['mia'];

    $query1 = "SELECT * FROM rowerzysci_polscy";
    $query2 =  "INSERT INTO rowerzysci_polscy(id, imie, nazwisko, marka, miasto) VALUES('$id', '$imie', '$nazwisko', '$marka', '$miasto')";
    $result2 = mysqli_query($con, $query2);
    $result1 = mysqli_query($con, $query1);
}

if(isset($_GET['del']));
{
    $id11 = $_GET['id1'];
    $query10 = "DELETE FROM rowerzysci_polscy WHERE id = $id11";
    $query11 = "SELECT * FROM rowerzysci_polscy";
    $result10 = mysqli_query($con, $query10);
    $result11 = mysqli_query($con, $query11); 
}



$query = "SELECT * FROM rowerzysci_polscy";
$result = mysqli_query($con, $query);



mysqli_close($con);
?>


<html>
    <head>

        <style>
        table,td
        {
        border: 2px solid red;
        color: red;
        border-collapse: collapse;
        }
        </style>

</head>
<body>

<form method="GET">
ID: <input type="number" name="id"><br>
Imie: <input type="text" name="im"><br>
Nazwisko: <input type="text" name="nazw"><br>
Marka: <input type="text" name="mar"><br>
Miasto: <input type="text" name="mia"><br>
<input type="submit" value="lecimy" name="szef"><br><br>

ID do usuniecia: <input type="number" name="id1"><br>
<input type="submit" value="Usun" name="del"><br>
</form>






<?php

   echo "<table>";
   echo "<tr>";
   echo "<td> ID </td>";
   echo "<td> Imie </td>";
   echo "<td> Nazwisko </td>";
   echo "<td> Marka </td>";
   echo "<td> Miasto </td>"; 
   echo "</tr>";


while($row = mysqli_fetch_array($result)){
  
    echo "<tr>";    
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "</tr>";
    
}

if($result1)
{
    echo "<tr>";
    echo "<td> </td>";
    echo "<td> </td>";
    echo "<td>  </td>";
    echo "<td>  </td>";
    echo "<td>  </td>"; 
    echo "</tr>";
}

while($row2 = mysqli_fetch_array($result2))
{
    echo "<tr>";    
    echo "<td>".$row2[0]."</td>";
    echo "<td>".$row2[1]."</td>";
    echo "<td>".$row2[2]."</td>";
    echo "<td>".$row2[3]."</td>";
    echo "<td>".$row2[4]."</td>";
    echo "</tr>";
}

if($result10)
{
    echo "<tr>";
    echo "<td> </td>";
    echo "<td> </td>";
    echo "<td>  </td>";
    echo "<td>  </td>";
    echo "<td>  </td>"; 
    echo "</tr>";
}

while($row3 = mysqli_fetch_array($result10))
{
    echo "<tr>";    
    echo "<td>".$row3[0]."</td>";
    echo "<td>".$row3[1]."</td>";
    echo "<td>".$row3[2]."</td>";
    echo "<td>".$row3[3]."</td>";
    echo "<td>".$row3[4]."</td>";
    echo "</tr>";
}



?>

</body>
</html>