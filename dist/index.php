<?php
// Metadata
$metatitle				= "Joe-Jo's Fish & Chicken";
$metadescription	= "Owned and operated by Byron Hayes and Velicia Johnson, Joe-Jo's Fish & Chicken is a St. Louis restaurant specializing in delicious golden-fried fish, chicken, shrimp, and tripe, as well as grilled fish and homemade desserts";
$metaimage				= "https://www.joejos.com/android-chrome-512x512.png";
?>
<!doctype html>
<html lang="en" class="h-100">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="theme-color" content="#ffffff">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.min.css" rel="stylesheet">
  <meta name="description" content="">
  <title><?php echo $metatitle; ?></title>
  <link rel="canonical" href="https://www.joejos.com">
</head>
<body class="d-flex flex-column h-100">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img class="d-inline-block me-3" width="85" height="75" src="img/joejos.png" alt="<?php echo $metatitle; ?>" id="navLogo">
        <?php echo $metatitle; ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMain">
        <!--
        <ul class="navbar-nav ms-auto mb-2 mb-md-0 navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="fa fa-lg fa-home" aria-hidden="true"></i>
              <span class="sr-only">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#About">
              About
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAbout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownAbout">
              <li><a class="dropdown-item" href="#">History</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Social Media</a></li>
            </ul>
          </li>
        </ul>
        -->
        <div class="d-flex ms-auto">
          <div class="gh-button-ifrm" data-customer-id="1454683" data-restaurant-name="<?php echo $metatitle; ?>" data-button-type="branded" data-button-color="red" data-button-size="large" data-env="prod" data-url="joejos-fish--chicken-4132-dr-martin-luther-king-dr-st.-louis" data-tracking-id="1454683" data-restaurant-address="4132 Dr Martin Luther King Dr, St. Louis MO, 63113" data-version="1.0" data-link-type="gh"></div>
          <script src="https://gh-prod-nitrosites.s3.amazonaws.com/scripts/iframeLib.min.js"></script>
        </div>
      </div>
    </div>
  </nav>
  <header class="bg-ac-dark text-white">
    <div class="container text-center">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="my-4">
          <div class="row">
            <div class="col-md-4 align-self-center">
              <img class="img-thumbnail rounded my-3 shadow" src="img/food/cat-nuggets-sandwich.jpg" alt="Cat Nuggets Sandwhich">
            </div>
            <div class="col-md-4 align-self-center text-center">
              <img class="img-fluid w-75" src="img/joejos.png" alt="<?php echo $metatitle; ?>">
            </div>
            <div class="col-md-4 align-self-center">
              <img class="img-thumbnail rounded my-3 shadow" src="img/food/whole-dinner.jpg" alt="12 Piece Whole Wing Dinner">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="bg-white py-5">
      <div class="container">
        <div class="row justify-content-lg-center">
          <div class="col-lg-10">
            <h1 class="text-pc-dark">Welcome to <?php echo $metatitle; ?></h1>
            <p class="lead">Owned and operated by Byron Hayes and Velicia Johnson, Joe-Jo's Fish & Chicken is a St. Louis restaurant specializing in delicious golden-fried fish, chicken, shrimp, and tripe, as well as grilled fish and homemade desserts.</p>
            <div>
              <div class="gh-button-ifrm" data-customer-id="1454683" data-restaurant-name="<?php echo $metatitle; ?>" data-button-type="branded" data-button-color="red" data-button-size="large" data-env="prod" data-url="joejos-fish--chicken-4132-dr-martin-luther-king-dr-st.-louis" data-tracking-id="1454683" data-restaurant-address="4132 Dr Martin Luther King Dr, St. Louis MO, 63113" data-version="1.0" data-link-type="gh"></div>
              <script src="https://gh-prod-nitrosites.s3.amazonaws.com/scripts/iframeLib.min.js"></script>
            </div>
            <div class="my-3">
              <a href="img/menu.jpg" target="_blank" rel="noopener">
                <img class="img-fluid" src="img/menu.jpg" alt="<?php echo $metatitle; ?> Menu">
              </a>
            </div>
            <div class="text-center">
              <a class="btn btn-warning btn-lg mb-3" href="img/menu.jpg" target="_blank" rel="noopener" role="button">
                View Our Menu <i class="fa fa-external-link ms-3"></i>
              </a>
            </div>
            <hr class="col-6 mx-auto my-5">
            <a class="anchor" id="About"></a>
            <div class="row">
              <div class="col-lg-5 align-self-center">
                <h1 class="text-pc-dark text-end">Byron talks about the benefits of fortheculture.com</h1>
              </div>
              <div class="col-lg-6 offset-lg-1 align-self-center">
                <div class="ratio ratio-16x9">
                  <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/U-HI3WzKvy4?start=77" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <div class="row justify-content-lg-center mt-5">
              <div class="col-lg-7">
                <h2 class="text-pc-dark">In The News</h2>
                <div class="list-group">
                  <a class="list-group-item list-group-item-action" href="https://www.ksdk.com/video/news/local/st-louis-nonprofit-helps-minority-entrepreneurs-to-start-and-operate-their-business/63-1ffa346b-30a2-4956-a843-3cd32b24fb5c" target="_blank">A Way Forward: St. Louis nonprofit helping minority entrepreneurs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="bg-dark footer mt-auto py-2 text-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 align-self-center">
          <img class="img-fluid w-75" loading="lazy" src="img/joejos.png" alt="<?php echo $metatitle; ?>">
        </div>
        <div class="col-lg-4 offset-lg-1 align-self-center">
          <address>
            <strong><?php echo $metatitle; ?></strong><br>
            4132 Dr. Martin Luther King Dr.<br>
            St. Louis, MO 63113<br>
            <a href="tel:+13143491833">1.314.349.1833</a><br>
          </address>
          <hr class="col-md-6">
          <strong>Business Hours</strong><br>
          Tues &mdash; Thur 11am &mdash; 8pm<br>
          Fri &mdash; Sat 11am &mdash; 9pm<br>
          Sun 11am &mdash; 5pm
        </div>
        <div class="col-lg-4 align-self-center">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3115.811470299779!2d-90.24062618423298!3d38.65321507960918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87df4b6602af0021%3A0xcc67e35b92ee6eab!2sJoe-Jo&#39;s%20Fish%20and%20Chicken!5e0!3m2!1sen!2sus!4v1652975723049!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col text-muted">
          <div class="mb-3">
            Copyright &copy; <?php echo date("Y"); ?> <?php echo $metatitle; ?>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>