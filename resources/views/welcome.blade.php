<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url"           content="https://www.hitechcars.co.bw/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Hitech Cars" />
    <meta property="og:description"   content="Hi-Tech Cars is a certified pre owned and used vehicle dealership based in Gaborone Botswana" />
    <meta property="og:image"         content="img/logo.svg" />
    <meta name="keywords" content="used cars, botswana, hi-tech cars, hitech, cars gaborone, cars botswana, pre owned, affordable cars">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <title>Home || Hitech Cars</title>
</head>
<body class="text-center">
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand"><img src="img/logo.svg" width=200 alt="logo"></h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="index.php">Home</a>
            <a class="nav-link" href="/cars">Cars</a>
            <a class="nav-link" href="/contact">Contacts</a>
            @if(Auth::user())
            <a class="nav-link" href="/cars/create">Dashboard</a>
          @endif
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Best Pre-Owned & Used Vehicles In Botswana</h1>
        <p class="lead">Exclusive offers available.</p>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
           
             <a style="width:100%; margin-top:5px" href="/cars?type=SUV" class="btn btn-lg btn-secondary">Suvs</a>
    
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
           
           <a style="width:100%; margin-top:5px" href="/cars?type=Sedan" class="btn btn-lg btn-secondary">Sedans</a>
     
             </div>
             <div class="col-6 col-sm-6 col-md-6 col-lg-3">
           
           <a style="width:100%; margin-top:5px" href="/cars?type=Sport" class="btn btn-lg btn-secondary">Sports</a>
     
             </div>
             <div class="col-6 col-sm-6 col-md-6 col-lg-3">
           
           <a style="width:100%; margin-top:5px" href="/cars?type=4x4" class="btn btn-lg btn-secondary">4x4s</a>
     
             </div>
        </div>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Copyright &copy; 2019 Hi-Tech Cars <!--by <a href="https://twitter.com/mdo">rkm creatives</a>-->.</p>
        </div>
      </footer>
    </div>



<script>
    
</script>

<script src="js/main.js"></script>
</body>
</html>