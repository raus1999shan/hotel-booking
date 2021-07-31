<?php
    session_start();
    include 'connection.php';
    include 'header.php';
?>
<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="css/CUSTOM1.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
      img.d-block.w-100 {
        height: 450px;
      }
      .nxt {
        list-style: none;
      }
  
      ul.nxt li::before {
        content: "\2022";
        color: grey;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
      }
    </style>
  
</head>
<body>
<!--
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light fixed-top" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand font-weight-bold" href="index.html">ELITE <span>HOTEL</span></a>
	    
	     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        
			<span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
	        	<!-- <li class="nav-item dropdown"> -->
              <!-- <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a> -->
              <!-- <div class="dropdown-menu" aria-labelledby="dropdown04"> -->
              	<!-- <a class="dropdown-item" href="#">Page 1</a> -->
                <!-- <a class="dropdown-item" href="#">Page 2</a> -->
                <!-- <a class="dropdown-item" href="#">Page 3</a> -->
                <!-- <a class="dropdown-item" href="#">Page 4</a> -->
              <!-- </div> -->
            <!-- </li> -->
			
	        <!--	<li class="nav-item"><a href="#" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Activities</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>-->
	         

	 <!--     </ul>
      <button
      class="btn btn-warning text-dark font-weight-bold"
      data-toggle="modal"
      data-target="#enroll"
    >
      Login
    </button>
	      </div>
	    </div>
	</nav>
    <!-- END nav -->
	
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/b.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/b.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/b.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<section class="pt-3 text-sm-start">
  <div class="container pb-0 mb-0">
    <div class="row align-items-center justify-content-between">
      <div class="col-md-6 p-5">
        <h2 class="text-dark">Description</h2>
        <p class="lead text-dark fs-6">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, facilis blanditiis vel perferendis
          voluptatum obcaecati nostrum ipsa officia deleniti a eum inventore dignissimos laborum culpa.
        </p>

        <a href="#" class="btn btn-light mt-3">
          <i class="bi bi-chevron-right"></i> Read More
        </a>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 p-5 py-4">
        <h2 class="text-dark">Amenities</h2>


      </div>
      <div class="row ms-4 mb-3">
        <div class="col-md-3"><img src="img/ac.jpg" alt="AC" width="20px"><label class="px-2">AC</label></div>
        <div class="col-md-3"><i class="fas fa-wifi"></i><label class="px-2">Wifi</label></div>
        <div class="col-md-3"><img src="img/wd.jpg" alt="AC" width="20px"><label class="px-2">Window</label></div>
      </div>
      <div class="row ms-4">
        <div class="col-md-3"><i class="fas fa-tv"></i><label class="px-2">TV</label></div>
        <div class="col-md-3"><img src="img/fridge.jpg" alt="Fridge" width="20px"><label class="px-2">Mini Fridge</label></div>
        <div class="col-md-3"><img src="img/sa.jpg" alt="Seat" width="20px"><label class="px-2">Seating Area</label></div>
      </div>
      <div class="row mx-4">
        <div class="col-md-6">
          <a href="#" class="btn btn-light mt-3">
            <i class="bi bi-chevron-right"></i> Show More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 p-5 py-4">
        <h2 class="text-dark">Ratings and Reviews</h2>
      </div>

      <div class="row mx-2">
        <div class="col-md-6">
          <img class="img-fluid" src="img/rate.jpg" alt="rating">
        </div>
      </div>

    </div>
  </div>
</section>



<section class="p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 p-5 py-4">
        <h2 class="text-dark">Hotel Policies</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md mx-3 px-3">
        <ul class="nxt">
          <li class="lead fs-6 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, corrupti.</li>
          <li class="lead fs-6 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, corrupti.</li>
          <li class="lead fs-6 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, corrupti.</li>
          <li class="lead fs-6 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, corrupti.</li>
          <li class="lead fs-6 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, corrupti.</li>
          <li class="lead fs-6 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, corrupti.</li>
          <li class="lead fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, corrupti.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<button type="submit" class="btn btn-info btn-lg my-5 text-center" onclick="location.href='reg.php'">Check In</button>
<?php
  if($_SESSION["loggedin"] == true){
      echo $_SESSION["email"];
  }
?>

<footer class="p-5 bg-dark text-white text-center position-relative">
  <div class="container">
    <p class="lead">Copyright &copy; 2021 ELITE HOTEL</p>

    <a href="#" class="position-absolute bottom-0 end-0 p-5">
      <i class="bi bi-arrow-up-circle h1"></i>
    </a>
  </div>
</footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/d1a53ac54e.js" crossorigin="anonymous"></script>
  </body>

</html>