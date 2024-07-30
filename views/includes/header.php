<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        #prenavbar{
            background-color: rgba(6, 117, 6, 0.678)
        }
        .col-6 p a i{
            font-size: 16px;
            color: white;
        }
        .col-6 p i:hover{
            color: green;
            transition: 0.5s;
        }
        #contact p{
            font-size: 12px;
        }
        #contact p a{
            text-decoration: none;
            font-weight: 500px;
            color: white;
        }
        #social p{
            word-spacing: 15px;
        }
        #postnavbar{
            background-color: rgb(241, 241, 241);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
        }
        #postnavbar .container{
            background-color: rgb(241, 241, 241);
        }
    </style>
</head>
<body>

    <div class="container-fluid" id="prenavbar">
        <div class="container">
            <div class="row">
                <div class="col-6 my-auto" id="contact">
                    <p class="my-auto"><a href="#">+ 225 27 22 51 19</a><a href=""> - contact@3tiresearch.com</a></p>
                </div>
                <div class="col-6 my-auto d-flex justify-content-end" id="social">
                    <p class="my-auto"><a href=""><i class="fa-brands fa-square-facebook"></i></a> <a href=""><i class="fa-brands fa-linkedin"></i></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="postnavbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="../../images/logo.jpg" alt="" width="150" height="60"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>    
    </div>

    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

