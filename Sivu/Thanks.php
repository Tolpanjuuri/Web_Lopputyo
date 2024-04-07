<!DOCTYPE html>
<html>



<head>
    <!--Jquery ja tyyli-->
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="Style.css">
    <title>Mustapään Auto Oy</title>
</head>


<body>

    <header id="image">
        <!--otsikko-->
        <img class="logo" src="Taitaja2021/Taitaja2021/logo_dark.jpg" >
        <h1>Mustapään Auto Oy</h1>
        <h2 style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: #012326;">Luotettavat renkaat niin kesäksi, kuin talveksi</h2>



    </header>


    <script>
        //haetaan kuva randomilla

        //haetaan elementti
        let image = document.getElementById("image");

        //valmistellaa path
        let path = "Taitaja2021/Taitaja2021/";

        //kaikki mahdolliset kuvat
        let images = [path+"pexels-andrea-piacquadio-3807695.jpg", path+"chuttersnap-gts_Eh4g1lk-unsplash.jpg", path+"tekton-UuO9Jdu2d7E-unsplash.jpg", path+"arseny-togulev-xTXIAVRI3rA-unsplash.jpg", path+"kristaps-grundsteins-phv0kzqMJyk-unsplash.jpg",path+"geoffroy-hauwen-2EMt3sUUTqg-unsplash.jpg", path+"tekton-e6Wr8LaH-Q8-unsplash.jpg", path+"tekton-O_ufcLVTAYw-unsplash.jpg"]
        
        //valitaan random kuva
        let random = Math.floor(Math.random()*images.length);
        let selectedImage = images[random];
        image.style.backgroundImage = `url(${selectedImage})`;
    </script>
        
    <nav>
        <ul>
            <!--linkit joista vain yksi toimii-->
            <li><a href="Etusivu.php">Home</a></li>
            <li><a href="Renkaat.php">Renkaat</a></li>
            <li><a href="Osoite.php">Yhteystiedot</a></li>
        </ul>
    </nav>



    <div class="container">

        <div class="hero" style="padding-bottom:0px; padding-top:0px ">
            <h1>Kiitos ostoksesta</h1>
            <a href="Etusivu.html" style="color: black; font-size: large;">Etusivulle</a>
        </div>
        <!--Paikka johon tiedot printataan-->
            <div class="search" style="border: 1px solid black; width: 60%; background-color: #034001;">

            <!--varmaan tyhmin tapa printata infot mutta toimii enkä jaksa kommentoida enempää-->

            <div id="thankYouSection" class="ListDiv">
            <img id="tyrePhoto" src="" onerror="this.onerror=null"; this.src='rengaskuvia/NotFound.png' alt="" overflow: hidden; width="auto" height="200">
            </div></div><?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate user inputs here

    $fname = htmlspecialchars($_POST['Fname']); 
    $sname = htmlspecialchars($_POST['Sname']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $pNumber = htmlspecialchars($_POST['pNumber']);
    $address = htmlspecialchars($_POST['address']);
    $ifPosted = isset($_POST['ifPosted']) ? 'Kyllä' : 'Ei';
    $count = htmlspecialchars($_POST['count']);
    $price = htmlspecialchars($_POST['hiddenPriceInput']);
    $sPrice = htmlspecialchars($_POST['sPrice']);
    $id = htmlspecialchars($_POST['tyreId']);

    // Output CSS styles
    echo "<style>";
    echo ".listValue {";
    echo "    display: flex;";
    echo "    flex-direction: column;";
    echo "    align-items: center;";
    echo "    justify-content: center;";
    echo "}";
    echo "</style>";


    // Output JavaScript code
    echo "<script>";
    echo "document.addEventListener('DOMContentLoaded', function () {";
    echo "const thankYouSection = document.getElementById('thankYouSection');";
    echo "const createList = (className) => {";
    echo "    const list = document.createElement('ul');";
    echo "    thankYouSection.appendChild(list);";
    echo "    return list;";
    echo "};";
    echo    'var img = document.getElementById("tyrePhoto");';
    echo    'img.onerror = function() {';
    echo    'this.onerror = null;';
    echo    'this.src = "rengaskuvia/NotFound.png";';
    echo    '};';
    echo    "$.get('http://localhost/Sivu/pic.php', {info: '$id'}, function(data) {";
    echo    'document.getElementById("tyrePhoto").setAttribute("src", data);';
    echo    'console.log(data);';
    echo    "console.log('$id');";
    echo   ' });';



    echo "const nameList = createList('listValue');";
    echo "const informationList = createList('listValue');";
    echo "const addressList = createList('listValue');";
    echo "const orderList = createList('listValue');";

    // Function to add list items
    echo "const addListItem = (list, label, value) => {";
    echo "    const listItem = document.createElement('li');";
    echo "    listItem.className = 'listObject';";
    echo "    listItem.innerHTML = '<p style=\"margin: 0; padding: 5px;\"><strong>' + label + ':</strong> ' + value + '</p>';";
    echo "    list.appendChild(listItem);";
    echo "};";

    // Use addListItem function to add dynamic data
    echo "addListItem(nameList, 'Etunimi', '$fname');";
    echo "addListItem(nameList, 'Sukunimi', '$sname');";
    echo "addListItem(informationList, 'Puh', '$phone');";
    echo "addListItem(informationList, 'Sposti', '$email');";
    echo "addListItem(addressList, 'Postinumero', '$pNumber');";
    echo "addListItem(addressList, 'Osoite', '$address');";
    echo "addListItem(orderList, 'Paketti', '$ifPosted');";
    echo "addListItem(orderList, 'Määrä', '$count');";
    echo "addListItem(orderList, 'kpl', '$sPrice');";
    echo "addListItem(orderList, 'Kokonais hinta', '$price');";


    echo "});";
    echo "</script>";

} else {
    echo "<p>No data received</p>";
}
?>
</div>
</div>
</div>


    <!--Pohja infot-->
    <div class ="information">
        <h2>Yhteystiedot</h2>
        <p>Mustapään Auto Oy </p>

            <!--Jos infoista painaa vie toiselle sivulle-->
        <div onclick="location.href='Osoite.php';" class ="infoBox">
             <p>Mustat Renkaat </p>
            <p>email.myyntimies@mustatrenkaat.net</p>
        </div>

        <div onclick="location.href='Osoite.php';" class="infoBox">
            <p><a href="Osoite.html"></a>Kosteenkatu 1, 86300 Oulainen </p>  
            <p>Puh. 040-7128158</p>  
        </div>


    </div>
</div>
    <!--Sivun pohjan feikki copyright-->
    <footer>
        &copy; 2023 Fictional Company. All rights reserved.

    </footer>
</body>
</html>
