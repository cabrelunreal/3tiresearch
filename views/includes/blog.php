<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - 3TIResearch</title>

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
    </style>
</head>
<body>
    <?php include("header.php")?>

    <div class="banner">
        <div class="overlay"></div>
        <div class="container" id="content">
            <div class="row">
                <div class="col-5 my-auto">
                    <h1 class="my-auto">BLOG</h1>
                    <h6 class="my-auto">Your premium data collection and marketing research partner in Ivory Coast and Senegal</h6>
                </div>
                <div class="col-7 text-center my-auto">
                    <img src="../../images/market.jpeg" class="img-fluid my-auto rounded-50" width="250" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <form>
            <div class="form-group">
                <label for="message" class="text-black h1">Articles</label> 
                <textarea class="form-control" id="message" rows="10"></textarea> 
                <input type="text" class="form-control" placeholder="Article title"> 
                <input type="text" class="form-control" placeholder="Published by"> 
                <input type="date" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary form-control">Send</button>
        </form>
    </div>

    <?php include("footer.php")?>

</body>
</html>