<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fontawesome-free-6.5.2-web/css/all.min.css">
    
    <style>
        #footer{
            background-color: rgb(48,116,100);
            height: 350px;
            padding: 25px;
            padding-top: 60px;
            padding-left: 100px;
            padding-right: 100px;
            gap: 20px;
            margin-top: 100px;
        }
        #super-footer{
            border-top: 2px solid white;
            margin-top: 30px;
            padding-top: 10px;
        }
        #super-footer h6{
            font-weight: bold;
            color: white;
        }
        h5{
            color: white;
            font-size: 1.1em;
            font-weight: bold;
        }
        input{
            border: 1px solid rgba(36, 230, 78, 0.856);
            margin-top: 10px;
        }
        input:focus{
            border: 1px solid rgba(36, 230, 78, 0.856);
        }
        ul, p, label{
            color:white;
        }
        label{
            font-size: 15px;
        }
        form{
            padding-top: 10px;
        }
        button{
            margin-top: 10px;
        }
        .getin{
            list-style-type: none;
            padding-left: 25px;
        }
        .getin li i{
            color: white;
            font-size: 0.8em;
        }
        span{
            padding-left: 15px;
        }
        .getin li{
            padding-top: 6px;
        }
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            color: rgba(36, 230, 78, 0.856);
        }
    </style>
</head>
<body>
    <div class="container-fluid" id="footer">
        <div class="row">
            <div class="col-2">
                <h5>3TiResearch</h5>
                <p class="desc">
                    3TiResearch is dedicated to research and development 
                    in the field of information technology and innovation.
                </p>
            </div>
            <div class="col-3">
                <h5>Get in touch</h5>
                <ul class="getin">
                    <li><i class="fa-solid fa-location-dot"></i>  Immeuble LE WALEBO, <br><span>Abidjan - Ivory Coast</span></li>
                    <li><i class="fa-solid fa-envelope"></i> contact@3tiresearch.com</li>
                    <li><i class="fa-solid fa-phone"></i> + 225 27 22 51 19</li>
                </ul>
            </div>
            <div class="col-2">
                <h5>Navigation</h5>
                <ul>
                    <li>
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <a href="#">About</a>
                    </li>
                    <li>
                      <a href="#">Services</a>
                    </li>
                    <li>
                      <a href="#">Contact Us</a>
                    </li>
                    <li>
                      <a href="#">Blog</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <h5>Services</h5>
                <ul>
                    <li>Quantitative Services</li>
                    <li>Independent Quality Control</li>
                    <li>Types Of Quantitative Services</li>
                    <li>Programming & Analysis</li>
                    <li>Quality Services</li>
                    <li>Automation & Data Visualisation</li>
                </ul>
            </div>
            <div class="col-2">
                <h5>Join a Newsletter</h5>
                <form action="">
                    <label for="mail">Your Email</label>
                    <input type="text" placeholder="Enter your Email">
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>

        <div class="container" id="super-footer">
            <h6 class="text-center">©All rights reserved by 3TIResearch</h6>
        </div>
    </div>
</body>
</html>