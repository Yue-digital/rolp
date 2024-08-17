@section('header')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 
  <script type="text/javascript" src="scripts.js"></script>

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <title>Resurrection of Our Lord Parish</title>
  <link rel="stylesheet" href="global.css">

</head>

<body>
  <div class="container-fluid">
    <div class="flex-container">
      <div class="row">
        <div class="box1 col-md-12">
          <!-- FOR CLOCK -->
          <div id="clock"></div>
          <script src="rolpclock.js"></script>
        </div>

        <div class="box2 col-md-12">
          <img src="logo.png" alt="" style="width: 80px; height: auto; margin-left: 80px; margin-top: -2px;">

         

          <!-- FOR NAVBAR -->
          <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
              <a class="navbar-brand me-auto" href="#"></a>


              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ROLP</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link mx-lg-2 active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">ABOUT US</a>
                      <ul class="dropdown-menu" style="font-size: small;">
                        <li><a class="dropdown-item" href="#">Message from Our Parish Priest</a></li>
                        <li><a class="dropdown-item" href="#">History</a></li>
                        <li><a class="dropdown-item" href="#">Meet Our Priests</a></li>
                        <li><a class="dropdown-item" href="#">Staff</a></li>
                        <li><a class="dropdown-item" href="#">News & Announcements</a></li>
                        <li><a class="dropdown-item" href="#">Basilea Tou Theo Sanctuary</a></li>
                      </ul>
                    </li>

                    </li>


                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">SACRAMENTS & SERVICES</a>
                      <ul class="dropdown-menu" style="font-size: small;">
                        <li><a class="dropdown-item" href="#">Sacraments, Blessings, Counseling</a></li>
                        <li><a class="dropdown-item" href="#">Prayers and Devotions</a></li>
                      </ul>
                    </li>


                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">OUR COMMUNITY</a>
                      <ul class="dropdown-menu" style="font-size: small;">
                        <li><a class="dropdown-item" href="#">Basic Ecclesial Communities</a></li>
                      </ul>
                    </li>


                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">PARISH LIFE</a>
                      <ul class="dropdown-menu" style="font-size: small;">
                        <li><a class="dropdown-item" href="#">2024</a></li>
                        <li><a class="dropdown-item" href="#">2023</a></li>
                        <li><a class="dropdown-item" href="#">2022</a></li>
                        <li><a class="dropdown-item" href="#">2021</a></li>
                        <li><a class="dropdown-item" href="#">2020</a></li>
                        <li><a class="dropdown-item" href="#">2019</a></li>
                        <li><a class="dropdown-item" href="#">2018</a></li>
                        <li><a class="dropdown-item" href="#">2017</a></li>
                        <li><a class="dropdown-item" href="#">2016</a></li>
                      </ul>
                    </li>


                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">ROLP MISSIONARIES</a>
                      <ul class="dropdown-menu" style="font-size: small;">
                        <li><a class="dropdown-item" href="#">ROLP-CARES</a></li>
                        <li><a class="dropdown-item" href="#">Handog</a></li>
                        <li><a class="dropdown-item" href="#">Donate a Block</a></li>
                      </ul>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link mx-lg-2 active" aria-current="page" href="#">CONTACT</a>
                    </li>


                </div>
              </div>

              <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>



 <!-- HERO SECTION -->
 <section class="hero-section">
  <div class="container d-flex align-items-center justify-content-center fs-l text-white flex-column"></div>
  <div class="image">
    <img src="50yearslogo.png" alt="Nature" class="responsive" width="700" height="400">
  </div>
</section>



        
      </div>
    </div>
  </div>
</div>
</body>

</html>






<!-- END NAVBAR -->
@endsection