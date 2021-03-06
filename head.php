<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--generated favicons-->
   <!--generated favicons-->
   <link rel="apple-touch-icon" sizes="57x57" href="assets/img/fav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/img/fav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/fav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/fav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/fav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/fav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/fav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/fav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/fav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/fav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/fav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/fav/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Bootstrap and Font files-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>


  <!--  Main CSS File -->
  <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body>
    <!--header-->
  <header class="text-center">
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php">
          <img src="assets/img/pack-nowr.png" class="logo">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item <?php if($active=='inspiration') echo'active';?>">
            <a href="inspiration.php" class="nav-link">Inspiration</a>
          </li>
          <li class="nav-item <?php if($active=='how-it-works') echo'active';?>">
            <a href="how-it-works.php" class="nav-link">How it Works</a>
          </li>

          <li class="nav-item <?php if($active=='about') echo'active';?>">
            <a href="about.php" class="nav-link">About</a>
          </li>

          <li class="nav-item <?php if($active=='contact') echo'active';?>">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>

        </ul>
        <span class="navbar-text">
          <i class="fas fa-phone-square-alt"></i>&nbspNeed Help? Call: <a style="text-decoration: none;" href="tel:+2349022145674">+2349022145674</a>
        </span>
      </div>
    </nav>
  </header>
