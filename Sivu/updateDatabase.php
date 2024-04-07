<?php
    include "db_connection.php";

    $id = $_GET["id"];
    $count = $_GET["count"];
    $con = OpenCon();
    
    // Use the correct variable name for the SQL query
    $amountSql = "SELECT Saldo FROM renkaat WHERE RengasID = '$id'";
    $result = mysqli_query($con, $amountSql) or die("tulosten hakeminen ei onnistu");

    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($result);

    // Use a different variable name for the amount
    $currentAmount = $row["Saldo"];

    // Calculate the new amount
    $newAmount = $currentAmount - $count;

    // Update the database with the new amount
    $updateSql = "UPDATE renkaat SET Saldo = '$newAmount' WHERE RengasID = '$id';";

    if ($con->query($updateSql) === TRUE) {
        echo "Record updated successfully";
        echo "'$currentAmount' '$count'";
    } else {
        echo "Error updating record: " . $con->error;
    }

    mysqli_close($con);
?>
