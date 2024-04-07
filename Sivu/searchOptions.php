<?php
    include "db_connection.php";

    $info = $_GET["info"];
    $con = OpenCon();
    $sql = "SELECT DISTINCT $info FROM renkaat";
    $res = mysqli_query($con, $sql) or die("tulosten hakeminen ei onnistu");
    echo "<option style='color:gray' value='null'>Valitse $info</option>";
    while($rivi = mysqli_fetch_array($res)){

         echo "<option value='" . $rivi["$info"] . "'>" . $rivi["$info"] . "</option>";
    }
    mysqli_close($con);
?>
