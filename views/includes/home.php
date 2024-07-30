<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fontawesome-free-6.5.2-web/css/all.min.css">
    <title>3TIResearch - Home</title>

    <style>
        
        .banner {
            margin-top: 50px;
            position: relative;
            width: 100%;
            height: 400px; 
            background-image: url('../../images/welcome.jpg'); 
            background-size: cover;
            background-position: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
        }

        #content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: left;
        }
        .row .col-7 img{
            border-radius: 50%;
        }
        #banner-why, #banner-geographical{
            margin-top: 70px;
            height: 100px;
            background-color: rgba(6, 117, 6, 0.678);
        }
        #whylist{
            box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
            border-top: none;
            padding: 40px;
        }
        #list-items1 ul li, #list-items2 ul li{
            color: black;
            
        }

        #geographical {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2px;
        }

        /* Style du texte */
        h6 {
            font-size: 16px;
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }

        /* Style de l'image */
        .zoomable-image img {
          max-width: 100%;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          transition: transform 0.2s ease;
        }

        .zoomable-image img:hover {
            transform: scale(1.25);
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
                    <h1 class="my-auto">WELCOME TO 3TIRESEARCH PLATFORM</h1>
                    <h6 class="my-auto">Your premium data collection and marketing research partner in Ivory Coast and Senegal</h6>
                </div>
                <div class="col-7 text-center my-auto">
                    <img src="../../images/market.jpeg" class="img-fluid my-auto rounded-50" width="250" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="banner-why">
        <h3 class="text-center align-items-center display-3 text-light" >Why choose 3TIResearch ?</h3>
    </div>
    <div class="container" id="whylist">
        <div class="row" id="row-1">
            <div class="col-6" id="list-items1">
                <ul>
                    <li>Data delivery with more details to clients.</li>
                    <li>Independent Quality control & Assurance.</li>
                    <li>Personalized offers to customer according to their needs and different to competition: practical service, offer to customer needs while preserving quality and speediness.</li>
                    <li>Good knowledge of IT tools , data collection platforms and dashboard.</li>
                    <li>Strong and experienced team : requests are treated quickly through the proactivity and responsiveness of our teams</li>
                </ul>
            </div>
            <div class="col-6">
                <img src="../../images/why4.png" class="img-fluid" width="400" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="../../images/why2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-6" id="list-items2">
                <ul>
                    <li>Work process, transparent and reassuring ; according to International Research Standards.</li>
                    <li>Up-to-date with marketing news: Technological innovation and methodology adapted to improve and anticipate.</li>
                    <li>Listening to client: their comments, questions, requests, feedback are extremely valuable.</li>
                    <li></li>
                    <li>National coverage for all type of survey with Team well versed in the country.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="banner-geographical">
        <h3 class="text-center align-items-center display-3 text-light" >Geographical Coverage</h3>
    </div>
    <div class="container" id="geographical">
        <div class="row">
            <div class="col-6 my-auto">
                <h6 class="my-auto lh-5">3TIRESEARCH has its head office in Cote d’Ivoire working with 
                    an in-house team and strong partners in many countries within 
                    West and Central Africa. We were able to take leadership while 
                    working with partners, This leadership mainly concerns the process,
                    project management, Quality Assurance, and made sure to align with
                    our internal quality level and Global standard.
                </h6>
            </div>
            <div class="col-6">
                <div class="zoomable-image">
                    <img src="../../images/cdn_image.gif" id="carte" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php")?>

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>