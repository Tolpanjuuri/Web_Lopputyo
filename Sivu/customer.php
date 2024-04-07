<?php
    // Include the database connection
    include "db_connection.php";

    // Open the database connection
    $con = OpenCon();

    $data = json_decode(file_get_contents("Renkaat.php"), true);

    // Get the data from the URL parameters

    $fName = mysqli_real_escape_string($con, $_GET["fName"]);
    $sName = mysqli_real_escape_string($con, $_GET["sName"]);
    $Name = $fName." ".$sName;
    $Name = password_hash($Name, PASSWORD_ARGON2I, ['memory_cost' => 2048, 'time_cost' => 4, 'threads' => 3]);
    $email = mysqli_real_escape_string($con, $_GET["email"]);
    $email = password_hash($email, PASSWORD_ARGON2I, ['memory_cost' => 2048, 'time_cost' => 4, 'threads' => 3]);
    $phone = $_GET["phone"];
    

    $postnum = $_GET["postnum"];

    $post = strval(mysqli_real_escape_string($con, $_GET["post"]));

    // Create the SQL query
    $sql = "INSERT INTO yhteystiedot (nimi, sPosti, puhNum, postNum, post) 
    VALUES ('$Name', '$email', '$phone', '$postnum', '$post')";

    // Perform the query
    if (mysqli_query($con, $sql)) {

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con); 
?>
