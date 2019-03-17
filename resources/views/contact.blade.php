<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/contact.css">
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
  <title>Contact Us || Hitech Cars</title>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/"><img src="img/logo.svg" width=150 alt="hi-tech logo"></a>
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
          <a class="nav-link" href="#about">About</a>
        </li>
      </ul>
    </div>
  </nav>

  <main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="container">
  <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Give Us A Call</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a
          jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
        </p>
        <p><a style="background-color:grey;color:white" class="btn btn-lg" href="#" role="button">Book A Test Drive &raquo;</a></p>
      </div>
    </div>
  </div>

    <div class="container">
      <!-- Three columns of text below the carousel -->
      <div class="row" style="text-align:center">
        <div class="col-lg-4">
          <img src="img/call.svg" alt="Generic placeholder image" width="140" height="140">
          <h2>Call Us</h2>
          <p>Tel: (+267) 3500151 <br>
            Fax : 3500152.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/location.svg" alt="Generic placeholder image" width="140" height="140">
          <h2>Locate Us</h2>
          <p>Corner of Kubu & Legolo Rd,
            Braudhurst Industrial
            Gaborone, Botswana.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/email.svg" alt="Generic placeholder image" width="140" height="140">
          <h2>Email Us</h2>
          <p>Nikie@home.co.bw <br>
            avais@bbi.co.bw.</p>

        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <div class="container">
        <div class="row">
        <form class="col-12 col-sm-12 col-md-12 col-lg-12" id="contact-form" method="post" action="includes/contact.inc.php" role="form">

<div class="messages"></div>

<div class="controls">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_name">Firstname *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_lastname">Lastname *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_need">Please specify your need *</label>
                <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                    <option value=""></option>
                    <option value="Request quotation">Request Test Drive</option>
                    <option value="Request order status">Inquire About Finance</option>
                    <option value="Request copy of an invoice">Request Quotation</option>
                    <option value="Other">Other</option>
                </select>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_message">Message *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <input style="background-color:grey;color:white" type="submit" class="btn btn-lg btn-send" value="Send message">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-muted">
                <strong>*</strong> These fields are required.
               </p>
        </div>
    </div>
</div>

</form>
        </div>
      </div>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div id="about" class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Who are we?</span>
          </h2>
          <p class="lead">Hi-Tech Cars is based in Broadhurst in the heart of the city of Gaborone.The company was
            established in 2001, and it has a humble beginning in this very same show room. The business started with
            five cars in stock, Today Hi-Tech Cars prides itself as the market leader in the preowned car industry with
            an average of 40 to 50 cars , bakkies and SUV's. With the continous rise in new car prices, We at Hitech
            Cars are of the opinion that custormers will benefit and have better value from preowned cars.We have
            etablished a strong relationship with suppliers of preownd cars over the last 17 years, which has enabled us
            to offer the widest range of models.We also pride our selves with the best customer support and we strive to
            make sure every sale at Hi-Tech Cars is a memorable and a pleasant experience.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="img/headercar2.jpg" alt="Generic placeholder image">
        </div>
      </div>
      <hr>

    </div> <!-- /container -->

  </main>

  <footer class="container">
    <p>Copyright &copy; 2019 Hi-Tech Cars
      <!--by <a href="https://twitter.com/mdo">rkm creatives</a>-->.</p>
  </footer>

  <script src="js/main.js"></script>
  <script src="js/contact.js"></script>
</body>

</html>