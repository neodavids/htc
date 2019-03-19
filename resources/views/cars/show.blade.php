@extends('main')
@section('url', "../img/logo.svg")
@section('jumbotron')

<div class="container">
  <div class="jumbotron" style="background-color:#343A40; color:white">
    <div class="container">
      <h1 class="display-3">{{$car->year}} {{$car->make}} {{$car->model}}</h1>
      <p>{{$car->description}}
      </p>
      <p><a style="background-color:black;color:white" class="btn btn-lg" href="#" role="button" data-toggle="modal"
          data-target="#chat">Quick Chat <i class='fas fa-comments'></i></a></p>
      <p><a style="background-color:black;color:white" class="btn btn-lg" href="/cars" role="button">&laquo; Back </a>
      </p>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="chat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Messenger Chat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="fb-page align-middle"
          data-href="http://www.facebook.com/Hitech-CARS-Online-showroom-1771264649855027/" data-tabs="messages"
          data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="http://www.facebook.com/Hitech-CARS-Online-showroom-1771264649855027/"
            class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/Hitech-CARS-Online-showroom-1771264649855027/">Hitech CARS Online
              Showroom</a></blockquote>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
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
          <p><strong>Milleage</strong>: {{$car->milleage}}</p>
          <p><strong>Fuel Type</strong>: {{$car->fueltype}}</p>
          <p><strong>Drive Type</strong>: {{$car->drivetype}}</p>
          <p><strong>Engine</strong>: {{$car->engine}}</p>
          <p><strong>Doors</strong>: {{$car->doors}}</p>
          <p><strong>Type</strong>: {{$car->type}}</p>
          <p><strong>Transmission</strong>: {{$car->transmission}}</p>
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
  <div class="row">
  <div class="card">
  <h5 class="card-header">{{$car->make}} {{$car->model}} Features</h5>
  <div class="card-body">
    <p class="card-text">{{$car->features}}</p>
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
                <input id="form_name" type="text" name="name" class="form-control"
                  placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_lastname">Lastname *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control"
                  placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="phone">Phone Number *</label>
                <input id="phone" type="text" name="phone" class="form-control" placeholder="(+267) 71234567 *"
                  required="required" data-error="phone number is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="location">Location *</label>
                <input id="location" type="location" name="location" class="form-control"
                  placeholder="Please provide your location *" required="required" data-error="Location is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control"
                  placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_need">Please specify your need *</label>
                <select id="form_need" name="need" class="form-control" required="required"
                  data-error="Please specify your need.">
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
                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4"
                  required="required" data-error="Please, leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12">
              <input style="background-color:grey;color:white" type="submit" class="btn btn-lg btn-send"
                value="Send message">
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

    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
              aria-controls="collapseOne">
              Collapsible Group Item #1
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
            wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
            you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              Collapsible Group Item #2
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">

          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              Collapsible Group Item #3
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
            wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
            you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
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