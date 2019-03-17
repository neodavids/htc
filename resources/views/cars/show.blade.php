@extends('main')
@section('url', "../img/logo.svg")
@section('jumbotron')

<div class="container">
  <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">{{$car->year}} {{$car->make}} {{$car->model}}</h1>
        <p>{{$car->description}}
        </p>
        <p><a style="background-color:grey;color:white" class="btn btn-lg" href="#" role="button">Book A Test Drive &raquo;</a></p>
        <p><a style="background-color:grey;color:white" class="btn btn-lg" href="/cars" role="button">&laquo; Back </a></p>
      </div>
    </div>
  </div>

@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../storage/img/{{$car->image1}}" alt="{{$car->model}} image" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../storage/img/{{$car->image2}}" alt="{{$car->model}} image" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../storage/img/{{$car->image3}}" alt="{{$car->model}} image" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../storage/img/{{$car->image4}}" alt="{{$car->model}} image" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
    <div class="card">
  <div class="card-body">
          <p>Milleage: {{$car->milleage}}</p>
          <p><strong>Fuel Type</strong>: {{$car->fueltype}}</p>
          <p><strong>Drive Type</strong>: {{$car->drivetype}}</p>
          <p><strong>Engine</strong>: {{$car->engine}}</p>
          <p><strong>Price</strong>: BWP{{$car->price}}</p>
  </div>
</div>
    </div>

</div>
  </div>
<br>
<br>
<br>
  <div class="container">
    <h2>Send Us A Message</h2>

      <div class="container">
        <div class="row">
        <form class="col-12 col-sm-12 col-md-12 col-lg-12" id="contact-form" method="post" action="" role="form">

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
        <br>
        <br>
        <br>

              <!-- Three columns of text below the carousel -->
      <div class="row" style="text-align:center">
        <div class="col-lg-4">
          <img src="../img/call.svg" alt="Generic placeholder image" width="140" height="140">
          <h2>Call Us</h2>
          <p>Tel: (+267) 3500151 <br>
            Fax : 3500152.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/location.svg" alt="Generic placeholder image" width="140" height="140">
          <h2>Locate Us</h2>
          <p>Corner of Kubu & Legolo Rd,
            Braudhurst Industrial
            Gaborone, Botswana.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/email.svg" alt="Generic placeholder image" width="140" height="140">
          <h2>Email Us</h2>
          <p>Nikie@home.co.bw <br>
            avais@bbi.co.bw.</p>

        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      </div>
@endsection