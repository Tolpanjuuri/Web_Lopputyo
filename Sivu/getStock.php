<?php
    include "db_connection.php";

    $con = OpenCon();
    $id = $_GET["info"];
    $sql = "SELECT Saldo , Hinta FROM renkaat where RengasID = $id";
    $res = mysqli_query($con, $sql) or die("tulosten hakeminen ei onnistu");


    while($rivi = mysqli_fetch_array($res)){
        echo $rivi['Saldo'] . ',' . $rivi['Hinta'];
        
    }

    mysqli_close($con);
?>