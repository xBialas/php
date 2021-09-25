<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = '4k';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
    if(isset($_GET['sub']))
	{
    $imie = $_GET['im'];
    $nazwisko = $_GET['nazw'];
    $ocena = $_GET['ocena'];
$query = "Insert into uczen(Imie, Nazwisko, Ocena) values('$imie', '$nazwisko', '$ocena')";
$query1 = "SELECT * FROM uczen";
$lecimy =mysqli_query($con,$query) or die(mysqli_error());
$lecimy2 =mysqli_query($con,$query1) or die(mysqli_error());
if($lecimy){
echo "Formularz zatwierdzony";
}
else{
echo "formularz jest błędny";
}        
if($lecimy2){
echo "<p>";
echo "<table border=\"1\"<tr>";
echo "<td>ID</td>";
echo "<td>Imie</td>";
echo "<td>Nazwisko</td>";
echo "<td>Ocena</td>";
echo "</tr>";
while($row=mysqli_fetch_row($lecimy2))
{
echo "</tr>";
echo "<td bgcolor=\"yellow\">" . $row[0] . "</td>";
echo "<td bgcolor=\"yellow\">" . $row[1] . "</td>";
echo "<td bgcolor=\"yellow\">" . $row[2] . "</td>";
echo "<td bgcolor=\"yellow\">" . $row[3] . "</td>";
echo "</tr>";
}
echo "</table>";   
}
else{
echo "formularz jest błędny";
}
}
if(isset($_GET['del']))
{
$deloc = $_GET['deloc'];
$query2 = "DELETE FROM uczen WHERE id = $deloc";
$query1 = "SELECT * FROM uczen";
$lecimy2 =mysqli_query($con,$query2) or die(mysqli_error());
if($lecimy2){
echo "<p>";
echo "<table border=\"1\"<tr>";
echo "<td>ID</td>";
echo "<td>Imie</td>";
echo "<td>Nazwisko</td>";
echo "<td>Ocena</td>";
echo "</tr>";
while($row=mysqli_fetch_row($lecimy2))
{
echo "</tr>";
echo "<td bgcolor=\"yellow\">" . $row[0] . "</td>";
echo "<td bgcolor=\"yellow\">" . $row[1] . "</td>";
echo "<td bgcolor=\"yellow\">" . $row[2] . "</td>";
echo "<td bgcolor=\"yellow\">" . $row[3] . "</td>";
echo "</tr>";
}
echo "</table>"; 
}
}
?>


















































<form action="" method="get">
Imie:<input type="text" name="im"><br>
Nazwisko:<input type="text" name="nazw"><br>
Ocena:<input type="text" name="ocena"><br>
<input name="sub" type="submit" value="ok">
<br>
Podaj ocene: <input type="number" name="deloc"><br>
<input name="del" type="submit" value="usun">
</form>