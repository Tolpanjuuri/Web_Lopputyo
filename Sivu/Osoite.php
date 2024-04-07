<!DOCTYPE html>
<html lang="en">
<head>
    <!--Jquery ja tyyli-->
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="Style.css">
    <title>Mustapään Auto Oy: Yhteystiedot</title>
    
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

    <!--Osoite tiedot missä osoite kuva iframena-->
    <div class="MapInformation">
       <div>
           <h2>Yhteystiedot</h2>
           <p>Mustapään Auto Oy</p>
           <p>Mustat Renkaat </p>
            <p>email.myyntimies@mustatrenkaat.net</p>
            <p>Kosteenkatu 1, 86300 Oulainen </p>  
            <p>Puh. 040-7128158</p>  
        </div>
        <div style="padding-left: 10%; display: flex; flex-direction: column; overflow: hidden;" >
            <iframe flex-grow: 1; width="800" height="500" src="https://www.openstreetmap.org/export/embed.html?bbox=24.816953837871555%2C64.26458054152315%2C24.820494353771213%2C64.26561706783751&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=19/64.26510/24.81872">Näytä isommalla kartalla</a></small>
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
    <!--Sivun pohjan feikki copyright-->
    <footer>
        &copy; 2023 Fictional Company. All rights reserved.

    </footer>
</body>
</html>
