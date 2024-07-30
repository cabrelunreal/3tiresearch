<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fontawesome-free-6.5.2-web/css/all.min.css">

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
        #services{
            margin-top: 30px;
            border: 1px solid black;
        }
        #services .row .col-9 .row .col-3{
            border: 1px solid black;
        }
        #services .row .col-3{
            border: 1px solid black;
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
                    <h1 class="my-auto">SERVICES</h1>
                    <h6 class="my-auto">Your premium data collection and marketing research partner in Ivory Coast and Senegal</h6>
                </div>
                <div class="col-7 text-center my-auto">
                    <img src="../../images/market.jpeg" class="img-fluid my-auto rounded-50" width="250" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="services">
        <div class="row">
            <div class="col-3">
                <div class="title h3 text-center">Our services</div>
            </div>
            <div class="col-9">
                <div class="row gap-2 text-center">
                    <div class="col-3">
                        hrfbzebfubzeu
                    </div>
                    <div class="col-3">
                        "yvfyhkgveukdgeuf"
                    </div>
                    <div class="col-3">
                        eahbvdyhkazegdyuzegf
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        ugzeczefyuuzefg
                    </div>
                    <div class="col-4">
                        efgzuigfeuzfyhze
                    </div>
                    <div class="col-4">
                        efzagfyhgevzyjhfv
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>