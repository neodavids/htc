<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:url"           content="https://www.hitechcars.co.bw/" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="hitech cars" />
  <meta property="og:description"   content="Certified pre owned car dealership" />
  <meta property="og:image"         content="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/contact.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
  <title>Cars || Hitech Cars</title>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  @import url('https://fonts.googleapis.com/css?family=Nunito');
  .body{
    font-family: 'Nunito', sans-serif;
  }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/"><img src="@yield('url')" width=150 alt="hi-tech logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cars">Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contacts <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact#about">About</a>
        </li>
        @if(Auth::user())
        <li class="nav-item">
          <a class="nav-link" href="/cars/create">Dashboard</a>
        </li>
          @endif
      </ul>

      <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
  </form>
    </div>
  </nav>

  <main role="main">

@yield('jumbotron')
  <br>
  <br>
  <br>

  @yield('content')

  </main>

  <br>
  <br>
  <br>

  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=2078132975559122&autoLogAppEvents=1"></script>

  <footer style="padding-top:10px;padding-bottom:10px;background-color:#343A40;">
      <div class="container">
      <div class="row" style="color:white">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <h3>Our Motto</h3>
              <p><em>"customer Satisfaction is our priority and high quality motor cars to all residents across the country of Botswana".</em></p>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
          <h3>Follow Us On Social Media</h3>
          <a href="http://www.facebook.com/Hitech-CARS-Online-showroom-1771264649855027/" target="_blank"  class="btn btn-dark" style="font-size:19px">Facebook <i class="fa fa-facebook-square"></i></a>
          <a href="http://www.instagram.com/hi_tech_cars_75/" target="_blank" class="btn btn-dark" style="font-size:19px">Instagram <i class="fa fa-instagram"></i></a>
          <div class="fb-like" data-href="http://www.facebook.com/Hitech-CARS-Online-showroom-1771264649855027/" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
          </div>
      </div>
      <p style="color:white">Copyright &copy; 2019 Hi-Tech Cars
      by <a href="https://twitter.com/mdo">rkm creatives</a>.</p>
      </div>
  </footer>

  <script src="js/main.js"></script>
  <script src="js/contact.js"></script>
</body>

</html>







