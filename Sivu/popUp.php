<?php
    include "db_connection.php";

    $con = OpenCon();
    $pic = $_GET["info"];
    $sql = "SELECT * FROM renkaat where RengasID = $pic";
    $res = mysqli_query($con, $sql) or die("tulosten hakeminen ei onnistu");
    $picFolder = "rengaskuvia/";

    while($rivi = mysqli_fetch_array($res)){
            echo '<ul style="list-style-type: none; text-align: left;";>
            <li><p><strong>Merkki:</strong>'.$rivi['Merkki'].'</p></li>
            <li><p><strong>Malli:</strong>'.$rivi['Malli'].'</p></li>
            <li><p><strong>Tyyppi:</strong>'.$rivi['Tyyppi'].'</p></li>
            <li><p><strong>Koko:</strong>'.$rivi['Koko'].'</p></li>
            <li><p><strong>Hinta:</strong>'.$rivi['Hinta'].'€/kpl</p></li>
    
        </ul>';
    }
    mysqli_close($con);
?>