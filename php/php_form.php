<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Green Farming</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Farmer's group</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.html">Blog posts</a></li>
          <li class="dropdown"><a href="#"><span>Green housing</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Sponsors</a></li>
              <li class="dropdown"><a href="#"><span>Membership</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Union Members</a></li>
                  <li><a href="#">Democratic Members</a></li>
                  <li><a href="#">Private Members</a></li>
                  <li><a href="#">Public Members</a></li>
                  <li><a href="#">New Members</a></li>
                </ul>
              </li>
              <li><a href="#">Debates</a></li>
              <li><a href="#">Campaigns</a></li>
              <li><a href="#">Movements</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to our Organisation</h2>
                <p class="animate__animated animate__fadeInUp">
                  <big>First Name:  </big>  <?php echo $_POST['firstname'];?>  <big> Middle name: </big> <?php echo $_POST['middlename'];?> <big> Surname: </big> <?php echo $_POST['surname'];?> <big> Birthdate: </big> <?php echo $_POST['birthdate'];?> <big> Gender: </big>  <?php echo $_POST['gender'];?> <big> Region </big> <?php echo $_POST['region'];?> <big> Physical Address </big> <?php echo $_POST['address'];?><big> Phone number: </big> <?php echo $_POST['phone'];?><big> Municipal </big> <?php echo $_POST['municipal'];?><big> Village: </big> <?php echo $_POST['village'];?><big> Ward: </big> <?php echo $_POST['ward'];?>
                  <big> Ownership: </big> <?php echo $_POST['ownership'];?><big> Farm size: </big> <?php echo $_POST['farmsize'];?>acres  
                </p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Our Trusted Teams</h2>
                <p class="animate__animated animate__fadeInUp">Our Dear <?php echo $_POST['firstname'];?>  <?php echo $_POST['middlename'];?>  <?php echo $_POST['surname'];?> we introduce to you our well active people in the industry. Your <?php echo $_POST['farmsize'];?> acres will be productive in the long run. Most of our agents in <?php echo $_POST['region'];?> are familiar with such parts.</p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">We make it Happen for you</h2>
                <p class="animate__animated animate__fadeInUp">Most of our <?php echo $_POST['gender'];?> customer are satisfied with our fast service from various parts of the country even in <?php echo $_POST['region'];?>.</p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
   <main id="main">

    <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

   </main>
