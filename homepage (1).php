<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>HomePage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style media="screen">
  /* Header */
  h1 {
    border-style: double;
    border-color: red;
  }

  .header {
    background-color: #FF004D;
  }

  .navbar-nav {
    margin: auto;
  }

  .navbar-brand {
    color: #ffffff;
  }

  .navbar-content {
    margin-left: 5%;
    margin-right: 5%;
    color: #ffffff;
  }

  .navbar-content:hover {
    color: #DFDFDE;
  }

  /* Body */
  body {
    text-align: center;
    background-image: url(images/bgimg.png);
    background-size: cover;
  }

  /* Title */
  .big-heading {
    color: #FF004D;
  }

  .heading {
    padding: 1%;
    margin-top: 3%;
    display: inline-flex;
    text-align: center;
  }

  /* Slider */
  .carousel {
    padding: 2%;
  }

  #slider {
    height: 30vw;
    position: relative;
    perspective: 1500px;
    transform-style: preserve-3d;
    margin-top: 1%;
    margin-bottom: 2.5%;
  }

  #slider label {
    margin: auto;
    width: 40%;
    height: 100%;
    border-radius: 4px;
    position: absolute;
    left: 0;
    right: 0;
    cursor: pointer;
    transition: transform 0.4s ease;
  }

  #s1:checked~#slide4, #s2:checked~#slide5,
  #s3:checked~#slide1, #s4:checked~#slide2,
  #s5:checked~#slide3 {
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .37);
    transform: translate3d(-30%, 0, -200px);
  }

  #s1:checked~#slide5, #s2:checked~#slide1,
  #s3:checked~#slide2, #s4:checked~#slide3,
  #s5:checked~#slide4 {
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .3), 0 2px 2px 0 rgba(0, 0, 0, .2);
    transform: translate3d(-15%, 0, -100px);
  }

  #s1:checked~#slide1, #s2:checked~#slide2,
  #s3:checked~#slide3, #s4:checked~#slide4,
  #s5:checked~#slide5 {
    box-shadow: 0 13px 25px 0 rgba(0, 0, 0, .3), 0 11px 7px 0 rgba(0, 0, 0, .19);
    transform: translate3d(0, 0, 0);
  }

  #s1:checked~#slide2, #s2:checked~#slide3,
  #s3:checked~#slide4, #s4:checked~#slide5,
  #s5:checked~#slide1 {
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .3), 0 2px 2px 0 rgba(0, 0, 0, .2);
    transform: translate3d(15%, 0, -100px);
  }

  #s1:checked~#slide3, #s2:checked~#slide4,
  #s3:checked~#slide5, #s4:checked~#slide1,
  #s5:checked~#slide2 {
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .37);
    transform: translate3d(30%, 0, -200px);
  }

  /* Buttons */
  .button-section {
    text-align: center;
    padding: 7%;
    margin-left: 7%;
  }

  .card {
    margin: 2%;
    border-color: #F90716;
  }

  .button-24 {
    background: #F90716;
    border: 1px solid #F90716;
    border-radius: 6px;
    box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
    font-size: 16px;
    font-weight: 800;
    line-height: 16px;
    min-height: 40px;
    outline: 0;
    padding: 12px 14px;
    text-align: center;
    text-rendering: geometricprecision;
    text-transform: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: middle;
    margin-bottom: 3%;
  }

  .button-24:hover,
  .button-24:active {
    background-color: initial;
    background-position: 0 0;
    color: #FF4742;
  }

  .button-24:active {
    opacity: .5;
  }

  /* Footer */
  .footer {
    background-color: #FF004D;
    margin-top: 2%;
    text-align: center;
    padding: 1.5%;
  }

  .footer-text {
    color: #ffffff;
  }

  </style>
</head>

<body class="container-fluid">

  <!-- Header -->
  <section id="header">
    <div class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <p class="navbar-brand ">SAFETY HELPER</p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link navbar-content" aria-current="page" href="#button">Features</a>
              <a class="nav-link navbar-content" href="helpline.php">Helpline</a>
              <a class="nav-link navbar-content" href="loc.php">Live Map</a>
              <a class="nav-link navbar-content" href="location.php">Live Location</a>
              <a class="nav-link navbar-content" href="device.php">Devices</a>
              <a class="nav-link navbar-content" href="knowledge.php">Knowledge</a>
              <a class="nav-link navbar-content" href="story.php">Story</a>
              <a class="nav-link navbar-content" href="scholarship.php">Scholarship</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </section>

  <!-- Title -->
  <div class="heading ">
    <h1 class="big-heading">WOMEN EMPOWERMENT</h1>
  </div>


  <!-- Slider -->
  <div class="carousel">
    <section id="slider">
      <input type="radio" name="slider" id="s1">
      <input type="radio" name="slider" id="s2">
      <input type="radio" name="slider" id="s3" checked>
      <input type="radio" name="slider" id="s4">
      <input type="radio" name="slider" id="s5">
      <label for="s1" id="slide1">
        <img src="images/cpage4.png" height="100%" width="100%">
      </label>
      <label for="s2" id="slide2">
        <img src="images/carouselimg5.png" height="100%" width="100%">
      </label>
      <label for="s3" id="slide3">
        <img src="images/carouselimg1.png" height="100%" width="100%">
      </label>
      <label for="s4" id="slide4">
        <img src="images/carouselimg2.png" height="100%" width="100%">
      </label>
      <label for="s5" id="slide5">
        <img src="images/carouselimg3.png" height="100%" width="100%">
      </label>
    </section>
  </div>


  <!-- Buttons -->
  <section id="button">
    <div class="row button-section">
      <div class=" col-lg-4 col-md-6">
        <div class="card" style="width: 18rem;">
          <img src="images/buttonimg.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">LOCATION</h5>
            <p class="card-text">This page allows the users to detect live location in map.</p>
            <a href="loc.php"><button class="button-24" role="button">LOCATION</button></a>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6 ">
        <div class="card" style="width: 18rem;">
          <img src="images/buttonimg.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">HELPLINE</h5>
            <p class="card-text">This page has a list of helpline numbers for assisting women.</p>
            <a href="helpline.php"> <button class="button-24" role="button">HELPLINE</button></a>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6 ">
        <div class="card" style="width: 18rem;">
          <img src="images/buttonimg.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SURVIVOR'S ADVICE</h5>
            <p class="card-text">This page allows the users to share their advices or experiences.</p>
            <a href="story.php"><button class="button-24" role="button">SURVIVOR'S ADVICE</button></a>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6 ">
        <div class="card" style="width: 18rem;">
          <img src="images/buttonimg.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SAFETY DEVICES</h5>
            <p class="card-text">This page has a list of safety devices and their description and purchase details.</p>
            <a href="device.php"><button class="button-24" role="button">SAFETY DEVICES</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card" style="width: 18rem;">
          <img src="images/buttonimg.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">EDUCATION HEALTH SAFETY</h5>
            <p class="card-text">This page gives resources for education,health and safety improvement of women.</p>
            <a href="knowledge.php"> <button class="button-24" role="button">EDUCATION HEALTH SAFETY</button></a>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6">
        <div class="card" style="width: 18rem;">
          <img src="images/buttonimg.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SCHOLARSHIP</h5>
            <p class="card-text">This page has information about scholarship for girls and women.</p>
            <a href="scholarship.php"><button class="button-24" role="button">SCHOLARSHIP</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <section id="footer">
    <div class="footer">
      <i class="fa fa-instagram" style="font-size:36px"></i>
      <p class="footer-text">Follow our instagram community.</p>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="homepage.js" charset="utf-8"></script>

</body>

</html>
