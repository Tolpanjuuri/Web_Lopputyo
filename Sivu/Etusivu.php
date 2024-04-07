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
        <div class="hero">
            <!--Välikappalle missä Lorem chatgpt tekstiä-->
            <h2>Renkaita intohimolla ja tyylikkyydellä jo vuodesta 1999</h2>
            <p>Tervetuloa Mustat Renkaat -sivustolle, kotiin kaikille renkaiden ystäville. Tarjoamme laajan valikoiman korkealaatuisia renkaita eri automerkeille ja -malleille. Olitpa sitten ajamassa kaupungin katuja tai valmiina seikkailuun maanteillä, meidän valikoimastamme löydät juuri sinun tarpeisiisi sopivat renkaat. Tutustu valikoimaamme ja valitse ajoneuvollesi voimaa ja tyyliä Mustien Renkaiden avulla.</p>
        </div>
    </div>


    <div class="container">
        <div class="hero">
            <!--Välikappalle missä chatgpt tekstiä-->
            <h2>Voima ja Tyyli Yhdessä</h2>
            <p>Mustat Renkaat symboloivat voimaa ja tyyliä, jotka yhdistyvät yhdeksi kokonaisuudeksi. Ne eivät ole vain osa ajoneuvoa, vaan ne ovat tapa ilmaista persoonallisuuttasi ja ajonautintoasi. Luotettavuus ja suorituskyky kohtaavat tyylikkään muotoilun, tarjoten sinulle täydellisen ajokokemuksen jokaisella matkalla. Valitse Mustat Renkaat ja anna ajoneuvollesi tarvittava tyylikäs ja voimakas ulkonäkö.</p>
        </div>
    </div>


    <div class="container">
        <div class="hero">
            <!--Välikappalle missä chatgpt tekstiä-->
            <h2>Palvelu, Joka Huokuu Laatua</h2>
            <p>Asiakaspalvelu on ydinosaamistamme. Haluamme tarjota jokaiselle asiakkaallemme kokemuksen, joka huokuu laatua ja omistautumista. Ammattitaitoinen henkilöstömme on aina valmiina auttamaan sinua löytämään juuri sinulle sopivat renkaat ja vastaamaan kaikkiin kysymyksiisi. Olitpa sitten valitsemassa renkaita kaupunkiajoon tai maastokäyttöön, voit luottaa siihen, että me autamme sinua tekemään oikean valinnan. Mustat Renkaat ei tarjoa vain renkaita, vaan kokonaisvaltaisen palvelukokemuksen, joka tekee ajoneuvostasi täydellisen.</p>
        </div>
    </div>


    <div class="container" style="text-align: center;">
        <h2>Ohje renkaiden vaihtoon</h2>
        <iframe width="90%" height="520" src="https://www.youtube.com/embed/WWIVmcXL-Is?si=jaO3J8Mi0W3LDi0J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
