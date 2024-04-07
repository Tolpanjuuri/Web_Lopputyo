<!DOCTYPE html>
<html lang="fi">
<head>
    <!--Jquery ja tyyli-->
    <meta charset="UTF-8">
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
        <img class="logo" src="Taitaja2021/Taitaja2021/logo_dark.jpg" alt="myyntikuva">
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
            <!--linkit-->
            <li><a href="Etusivu.php">Home</a></li>
            <li><a href="Renkaat.php">Renkaat</a></li>
            <li><a href="Osoite.php">Yhteystiedot</a></li>
        </ul>
    </nav>

    <div class="container" style="max-width: 1200px;">
        <div class="hero">
            <!--Välikappale/otsikko-->
            <h2>Renkaita intohimolla ja tyylikkyydellä jo vuodesta 1999</h2>
            <p>Tervetuloa Mustat Renkaat -rengas varastoon. Täältä löydät renkaat jokaiseen tarkoitukseen.</p>
        </div>
    </div>

    <div class="search" >
        

        <!--Valinnta-->
            <ul >
            <li class="sBox" >
                <p>Merkki</p>

                <select id="MerkkiList" style="width: 100%;">
                    <option style="color:gray" value="null">Valitse Merkki</option>
                </select>
            </li>
            
            <li class="sBox" >
                <p>Malli</p>
                <select id="MalliList" style="width:100%;max-width:90%;">
                    <option style="color:gray" value="null" >Valitse Malli</option>
                </select>
            </li>

            <li class="sBox" >
                <p>Tyyppi</p>
                <select id="TyyppiList" >
                    <option style="color:gray" value="null" >Valitse Tyyppi</option>
                </select>
            </li>

            <li class="sBox" >
                <p>Koko</p>
                <select id="KokoList">
                    <option style="color:gray" value="null">Valitse Koko</option>
                </select>
            </li>

                <!--Hinta tehty tyhmästi mutta laiskuus iski-->
            <li class="sBox" >
                <p>Hinta</p>
                <select id="HintaList">
                    <option style="color:gray" value="null" >Valitse Hinta</option>
                    <option value="[55, 80]">55€-80€</option>
                    <option value="[81, 120]">81€-120€</option>
                    <option value="[121, 180]">121€-180€</option>
                    <option value="[181, 250]">181€-250€</option>
                </select>
            </li>
            </ul>

                <!--rengas valikko-->
            <div class="listDiv" id="renkaat">
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



    <script>
        price = 1;
    //kun valmis niin listataan kaikki vaihtoehdot kenttiin
    $(document).ready(function(){
        $.get("http://localhost/Sivu/searchOptions.php", {info: "Merkki"}, function(data) {

        $("#MerkkiList").empty();
        $("#MerkkiList").html(data);
    });

    //malli päivittyy vasta kun merkki valittu
    $('#MerkkiList').on('change', function (e) {
        var selectedValue = $("#MerkkiList").val();
        if (selectedValue != "null")
        {
            console.log("here");
            $.get("http://localhost/Sivu/modelSearch.php", { info: selectedValue }, function(data) {

        updateOptions();
        $("#MalliList").empty();
        $("#MalliList").html(data);
        console.log(data);
        });
        }
        else
        {
            updateOptions();
            $("#MalliList").empty();
            $("#MalliList").val('null');

            $("MalliList").append('<option style="color:gray" value="null">Valitse Malli</option>');

        }

    });
        
    $.get("http://localhost/Sivu/searchOptions.php", {info: "Tyyppi"}, function(data) {

        $("#TyyppiList").empty();
        $("#TyyppiList").html(data);
    });
    $.get("http://localhost/Sivu/searchOptions.php", {info: "Koko"}, function(data) {

        $("#KokoList").empty();
        $("#KokoList").html(data);
    });


    //kun yksi vaihtuu kaikki muut käydään uudestaan lävitse

    $('#MalliList').on('change', function (e) {
        updateOptions();
    });
    $('#TyyppiList').on('change', function (e) {
        updateOptions();
    });
    $('#KokoList').on('change', function (e) {
        updateOptions();
    });
    $('#HintaList').on('change', function (e) {
        updateOptions();
    });



    //päivitetään kaikki vaihtoehdot ja lisätään valitut hakutuloksiin
    function updateOptions() {
        //valmistellaan query
            sql = "SELECT * FROM renkaat where";

            //lisätään jokaiset vaihtoehdot erikseen
            if ( $("#MerkkiList").val() != "null"){
                val = $("#MerkkiList").val();

                string = " Merkki = \""+ val + "\" and";
                sql = sql + string;
            }
            if ( $("#MalliList").val() != "null" && $("#MalliList").val() != null){
                val = $("#MalliList").val();
                string = " Malli = \""+ val + "\" and";
                sql = sql + string;
            }
            if ( $("#TyyppiList").val() != "null"){
                val = $("#TyyppiList").val();
                string = " Tyyppi = \""+ val + "\" and";
                sql = sql + string;
            }
            if ( $("#KokoList").val() != "null"){
                val = $("#KokoList").val();
                string = " Koko = \""+ val + "\" and";
                sql = sql + string;
            }
            //hinta tosiaan tehty vähän tyhmästi
            if ( $("#HintaList").val() != "null"){
                val = $("#HintaList").val();
                val = JSON.parse(val);
                string = " Hinta BETWEEN "+val[0] +" AND " +val[1] +" and";
                sql = sql + string;
            }
            //poistetaan vika nad ja lisätään ;
            sql = sql.slice(0,-4) + ";";

            //haetaan ja lisätään data
            $.get("http://localhost/Sivu/listAll.php",{info: sql}, function(data){
            $("#renkaat").empty();
            $("#renkaat").append(data);
            });

        };

        //jotta haku täyttyisi heti alkuun
        updateOptions();


        
    });


    //lähetetään info
    function sendInfo() {
    // Get the individual form values
    var fName = document.querySelector('#Fname').value;
    var sName = document.querySelector('#Sname').value;
    var phone = document.querySelector('#phone').value;
    var email = document.querySelector('#email').value;
    var postnum = document.querySelector('#pNumber').value;
    var post = document.querySelector('#address').value;
    var id = document.querySelector('#tyreId').value;
    var count = document.querySelector('#count').value;
    var price = document.querySelector('#hiddenPriceInput').value;

        console.log(post);

    // Send the data to the server using $.get
    $.get("http://localhost/Sivu/customer.php", {
        fName: fName,
        sName: sName,
        phone: phone,
        email: email,
        postnum: postnum,
        post: post
    }, function(data){
    });


    //remove from database
    $.get("http://localhost/Sivu/updateDatabase.php", {
        id: id,
        count: count,
    }, function(data){
    });

}






// avataan osto formi ja haetaan hinta sekä maksimi kappalemäärä
function openForm(givenId) {
    document.getElementById("myForm").style.display = "block";

    // haetaan kappalemäärä
    $.get("http://localhost/Sivu/getStock.php", { info: givenId }, function (data) {

        price = 0;
        console.log(givenId);
        data = data.split(",");
        console.log(data[0]+"here");
        price = data[1];
        updatePopUp(data[1], givenId);



        // jos nolla
        if (data[0] == 0) {
           //tehdään ei varastossa teksti
            var inputField = document.getElementById("count");
            var paragraphElement = document.createElement("p");
            paragraphElement.id = "temp";
            paragraphElement.textContent = "Ei varastossa";
            inputField.parentNode.replaceChild(paragraphElement, inputField);

            //luodaan piilotettu elementti jotta hinta näkyisi
            var parentElement = paragraphElement.parentNode;
            if (parentElement) {
                var hiddenInput = document.createElement("input");
                hiddenInput.type = "hidden";
                hiddenInput.id = "count";
                hiddenInput.name = "count";
                hiddenInput.value = "null";
                parentElement.appendChild(hiddenInput);
            }
        } else {

            //poistetaan teksti
            if(document.getElementById("temp"))
            {   
                document.getElementById("temp").remove();
            }

            //luodaan elementti
            var inputElement = document.createElement("input");
            inputElement.type = "number";
            inputElement.setAttribute("min", "1"); 
            inputElement.setAttribute("step", "1"); 
            inputElement.setAttribute("max", data[0]); 
            inputElement.value = "1"; 
            inputElement.id = "count";
            inputElement.name = "count";
            inputElement.onchange = function () {
                calcPrice(); 
            };

            //vaihdetaan elementti tekstikentän tilalle
            document.getElementById("count").parentNode.replaceChild(inputElement, document.getElementById("count"));
            calcPrice();
        }
    });





    //haetaan rengaskuva ja lisätään. jos ei löydy lisätään ei kuvaa kuva
    var img = document.getElementById('tyrePhoto');
    img.onerror = function() {
        this.onerror = null;
        this.src = 'rengaskuvia/NotFound.png';
    };
    $.get("http://localhost/Sivu/pic.php",{info: givenId}, function(data){
        document.getElementById("tyrePhoto").setAttribute("src", data);
    });
};


//lasketaan hinta
function calcPrice()
    {
        amount = document.getElementById("count").value;
        if (amount <= 0)
        {
            amount = 1 ;
        };
        document.getElementById('price').innerHTML = amount*price+"€";
        document.querySelector('#hiddenPriceInput').value = amount*price+"€";
        
    };

    //haetaan tiedot pop úppiin
    function updatePopUp(pricee, givenId)
    {
        $.get("http://localhost/Sivu/popUp.php",{info: givenId}, function(data){
            $("#info").empty();
            $("#info").append(data);
        });



        amount = document.getElementById("count").value;
        if (amount <= 0)
        {
            amount = 1 ;
        };
        document.querySelector('#sPrice').value = pricee;
        document.getElementById('price').innerHTML = amount*pricee+"€";
        document.querySelector('#hiddenPriceInput').value = amount*pricee+"€";
        document.querySelector('#tyreId').value = givenId;

    
};


//sulkee formin
function closeForm() {
  document.getElementById("myForm").style.display = "none";
  
}

    </script>
    <div class="form-popup" id="myForm">
            <!--formi ja sen ohjaus-->
        <form  action="http://localhost/sivu/thanks.php" class="form-container" method="post" name="form">
            <div style="text-align: center; display: flex;">
                <div style="width: 40%;">
                    <!--rengas kuva ja info-->
                    <img id="tyrePhoto" src="rengaskuvia/NotFound.png" onerror="this.onerror=null; this.src='rengaskuvia/NotFound.png'" alt=""  height="200">
                </div>
                <div style="flex-grow: 1;">
                    <div id="info">
                    </div>
                </div>
                    <!--määrän valinta-->
                <div style="flex-grow: 1; margin-top: 40px;">
                    <label for="count"><b>Määrä</b></label>
                    <div class="quantity">
                        <input type="number" min="1" max="1" step="1" value="1" id="count" name="count" onchange="calcPrice()">
                            <!--hinta laskuri ja piilotettu input, jotta sen voi lähettää eteenpäin-->

                    </div>
                    <input type="hidden" name="sPrice" id="sPrice" value="">
                    <input type="hidden" name="hiddenPriceInput" id="hiddenPriceInput">
                        <p id="price"></p>
                        <input type="hidden" name="tyreId" id="tyreId">
                </div>
            </div>
                <!--muut tiedot-->
            <div style="text-align: center; display: flex;">
                <div style="flex-grow: 1; ">
                <p>Etunimi:</p>
                    <label>
                        <input type="text" id="Fname" name="Fname" required><br>
                    </label>
                </div>
    
                <div style="flex-grow: 1; ">
                <p>Sukunimi:</p>
                    <label>
                        <input type="text" id="Sname" name="Sname" required><br>
                    </label>
                </div>
            </div>
    
            <div style="text-align: center; display: flex;">
                <div style="flex-grow: 1; ">
                <p>Puhelin numero:</p>
                    <label>
                        <input type="number" id="phone" name="phone" required><br>
                    </label>
                </div>
    
                <div style="flex-grow: 1;">
                <p>Sähköposti:</p>
                    <label>
                        <input type="email" id="email" name="email" required><br>
                    </label>
                </div>
            </div>
    
            <div style="text-align: center; display: flex;">
                <div style="flex-grow: 1;">
                <p>Postinumero:</p>
                    <label>
                        <input type="text" id="pNumber" name="pNumber" required><br>
                    </label>
                </div>
    
                <div style="flex-grow: 1;">
                <p>Osoite:</p>
                    <label>
                        <input type="text" id="address" name="address" required><br>
                    </label>
                </div>
                <div style="flex-grow: 1;">
                    <p>Matkahuollon paketti</p>
                    <label class="switch" >
                        
                        <input type="checkbox" checked >
                        <span class="slider round" id="ifPosted"></span>
                      </label>
                </div>
            </div>
                <!--osta ja poistu napit-->
            <div style="text-align: center; display: flex;">
                <button type="submit" onclick="sendInfo()" class="btn" name="buy">Osta</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </div>
        </form>
    </div>
    

</body>

</html>

