<?php
$server ="localhost";
$databas ="pzi";
$username ="root";
$password = "";
mysqli_connect(&server,$username,$password,$databas);
$query= "SELECT * FROM mobiteli;
$res = mysqli_query($query,$conn);
while($row= mysqli_fetch_array($res)){
    echo $row['naziv']

}
mysqli_close($conn);
?>