<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fontawesome-free-6.5.2-web/css/all.min.css">
    <title>About - 3TIResearch</title>

    <style>
        #banner-who{
            margin-top: 70px;
            height: 100px;
            background-color: rgba(6, 117, 6, 0.678);
        }
        .container .row .col-4{
            box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
        }
        .container .row .col-4 img{
            border-bottom: 1px solid black;
        }

        .title {
            margin-bottom: 50px;            
            text-transform: uppercase;
        }

        .card-block {
            font-size: 1em;
            position: relative;
            margin: 0;
            padding: 1em;
            border: none;
            border-top: 1px solid rgba(34, 36, 38, .1);
            box-shadow: none;
            
  
        }        
        .card {
            font-size: 1em;
            overflow: hidden;
            padding: 5;
            border: none;
            border-radius: .28571429rem;
            box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
            margin-top:20px;
        }
        #left-card{
            background-color: rgb(48,116,100);
        }
        h4.card-title, p.card-text{
            color: white;
        }
        
        
    </style>
</head>
<body>

    <?php include("header.php")?>

    <div class="container" id="content">
        <div class="row">
            <div class="col-5 my-auto">
                <h1 class="my-auto">About Us</h1>
                <h6 class="my-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deleniti repellendus eaque quaerat laboriosam nam ea voluptates accusantium similique commodi.</h6>
            </div>
            <div class="col-7 text-center my-auto">
                <img src="../../images/about1.jpg" class="img-fluid my-auto rounded-50" width="450" alt="">
                </div>
            </div>
    </div>

    <div class="container-fluid" id="banner-who">
        <h3 class="text-center align-items-center display-3 text-light" >Who are you?</h3>
    </div>
    <div class="container">
        <div class="row" id="who">
            <div class="col-4">
                <img src="../../images/why3.jpg" class="img-fluid"  alt="">
                <h6 class="desc text-justify">
                    3tiResearch Enterprise is a small team of experienced Data 
                    collection individuals, Project manager, Quality Controller 
                    and Data Manager working together to produce innovative and 
                    required after work;
                </h6>
            </div>
            <div class="col-4">
                <img src="../../images/why3.jpg" class="img-fluid" alt="">
                <h6 class="desc text-justify">
                    Businesses and community organisations of a team of over 50
                    professionals consultants with long experiences in the market
                    research;
                </h6>
            </div>
            <div class="col-4">
                <img src="../../images/why3.jpg" class="img-fluid" alt="">
                <h6 class="desc text-justify">
                    The team is headed up by the Business Director, the Operations 
                    Director, the Heads of Projects and the Managing Director .
                </h6>
            </div>
            
        </div>
    </div>

    <div class="container">
 
        <!-- Card Start -->
        <div class="card">
          <div class="row" id="left-card">
              <div class="col-md-7 px-3">
                  <div class="card-block px-6">
                      <h4 class="card-title">Foundation</h4>
                      <p class="card-text">
                          Since our establishment in July 3, 2020, 3TI Research has started with 
                          the Win to Win partnership with IT and project management organizations 
                          expert to support Agile and digital transformation for the future.
                      </p>
                      
                      <br>
                      <a href="#" class="mt-auto btn btn-primary  ">Read More</a>
                  </div>
              </div>
              <!-- Carousel start -->
              <div class="col-md-5">
                  <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
                          </div>
           
                        </div>
                  </div>
               </div>
               <!-- End of carousel -->
          </div>
      </div>
     <!-- End of card -->


     <div class="container">
 
        <!-- Card Start -->
        <div class="card">
          <div class="row" id="left-card">

              <!-- Carousel start -->
              <div class="col-md-5">
                  <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
                          </div>
           
                        </div>
                  </div>
              </div>
              <div class="col-md-7 px-3">
                  <div class="card-block px-6">
                      <h4 class="card-title">Foundation</h4>
                      <p class="card-text">
                          Since our establishment in July 3, 2020, 3TI Research has started with 
                          the Win to Win partnership with IT and project management organizations 
                          expert to support Agile and digital transformation for the future.
                      </p>
                      
                      <br>
                      <a href="#" class="mt-auto btn btn-primary  ">Read More</a>
                  </div>
              </div>
              
               <!-- End of carousel -->
          </div>
      </div>
     <!-- End of card -->

     <?php include("footer.php")?>


    


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</div>
</body>
</html>