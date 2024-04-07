<?php
    include "db_connection.php";

    $info = $_GET["info"];
    $con = OpenCon();
    $sql = "SELECT DISTINCT Malli FROM renkaat WHERE Merkki = '$info'";
    $res = mysqli_query($con, $sql) or die("tulosten hakeminen ei onnistu");
    echo "<option style='color:gray' value='null'>Valitse malli</option>";
    while($rivi = mysqli_fetch_array($res)){

        echo "<option value='" . $rivi["Malli"] . "'>" . $rivi["Malli"] . "</option>";
   }
    
    mysqli_close($con);
?>