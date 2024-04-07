<?php
    include "db_connection.php";

    $con = OpenCon();
    $pic = $_GET["info"];
    $sql = "SELECT Merkki, Tyyppi FROM renkaat where RengasID = $pic";
    $res = mysqli_query($con, $sql) or die("tulosten hakeminen ei onnistu");
    $picFolder = "rengaskuvia/";

    while($rivi = mysqli_fetch_array($res)){
        $picFolder .= $rivi['Merkki']."-";
        $picFolder .= $rivi['Tyyppi'].".png";
        echo $picFolder;
    }
    mysqli_close($con);
?>