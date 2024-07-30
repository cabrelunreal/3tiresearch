<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fontawesome-free-6.5.2-web/css/all.min.css">
    <title>Contact - 3TIResearch</title>

    <style>

        .banner {
            margin-top: 50px;
            position: relative;
            width: 100%;
            height: 400px; /* Ajustez la hauteur selon vos besoins */
            background-image: url('../../images/contact.jpg'); /* Remplacez par le chemin de votre image */
            background-size: cover;
            background-position: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Couleur d'ombrage (ajustez l'opacité) */
        }
        .row .col-7 img{
            border-radius: 50%;
        }
        #content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: left;
        }
        #card-localisation{
            margin-top: 30px;
        }
        #localisation1, #localisation2{
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            height: 250px;
        }
        #localisation1 .col .text-center{
            color: rgb(48,116,100);
        }
        #localisation2{
            background-color: rgb(48,116,100);
        }
        #localisation2 .col .text-center{
            color: white;
        }
    </style>
</head>
<body>

    <?php include("header.php")?>

    <div class="banner">
        <div class="overlay"></div>
        <div class="container" id="content">
            <div class="row">
                <div class="col-5 my-auto">
                    <h1 class="my-auto">CONTACT US</h1>
                    <h6 class="my-auto">Your premium data collection and marketing research partner in Ivory Coast and Senegal</h6>
                </div>
                <div class="col-7 text-center my-auto">
                    <img src="../../images/market.jpeg" class="img-fluid my-auto rounded-50" width="250" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="card-localisation">
        <div class="row" id="localisation1">
            <div class="col my-auto">
                <div class="title h1 text-center">Ivory Coast</div>
                <div class="h4 text-center my-auto"><i class="fa-solid fa-location-dot"></i>Immeuble LE WALEBO, Abidjan, Ivory Coast</div>
                <div class="h4 text-center"><i class="fa-solid fa-phone"></i>+ 225 27 22 51 19  / 47 98 97 01 / 
                58 80 14 10 / 09 09 72 56</div>
                <div class="h4 text-center"><i class="fa-regular fa-envelope"></i>contact@3tiresearch.com</div>
            </div>
        </div>
        <div class="row" id="localisation2">
            <div class="col my-auto">
                <div class="title h1 text-center">Senegal</div>
                <div class="h4 text-center my-auto"><i class="fa-solid fa-location-dot"></i>Sacré Coeur 3x VDN, N°9432, Dakar Sénégal</div>
                <div class="h4 text-center"><i class="fa-solid fa-phone"></i>++ 221 33 867 55 75</div>
                <div class="h4 text-center"><i class="fa-regular fa-envelope"></i>contact@3tiresearch.com</div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <form>
            <div class="form-group">
                <label for="message" class="text-black h1">Fill in the form</label>
                <textarea class="form-control" id="message" rows="5"></textarea>
                <input type="text" class="form-control" placeholder="Message title">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary form-control">Send</button>
        </form>
    </div>




    <?php include("footer.php")?>
</body>
</html>