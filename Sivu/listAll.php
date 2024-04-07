<?php
    include "db_connection.php";

    $con = OpenCon();
    $sql = $_GET["info"];
    $res = mysqli_query($con, $sql) or die("tulosten hakeminen ei onnistu");

    while($rivi = mysqli_fetch_array($res)){
        echo '<ul class="listValue" ul">
        <li class="listObject"><p><strong>Merkki:</strong></p><p>'.$rivi['Merkki'].'</p></li>
        <li class="listObject"><p><strong>Malli:</strong></p><p>'.$rivi['Malli'].'</p></li>
        <li class="listObject"><p><strong>Tyyppi:</strong></p><p>'.$rivi['Tyyppi'].'</p></li>
        <li class="listObject"><p><strong>Koko:</strong></p><p>'.$rivi['Koko'].'</p></li>
        <li class="listObject"><p><strong>Hinta:</strong></p><p>'.$rivi['Hinta'].'</p></li>
        <button class="button" id='.$rivi['RengasID'].' onclick="openForm(this.id)">Osta</button>

    </ul>';
    }
    mysqli_close($con);
?>
