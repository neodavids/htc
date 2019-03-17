<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hi-Tech Dashboard</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="../../css/dash.css">

</head>

<body>
  <nav class="black">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><img src="../../img/logo.svg" width=250 alt="logo"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/">Home</a></li>
          <li><a href="/cars">Cars</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <a href="#" data-target="slide-out" class="sidenav-trigger btn black"><i class="material-icons">menu</i></a>

  <ul id="slide-out" class="sidenav">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="../../img/headercar3.jpg" style="width:100%">
        </div>

        <a href="#name"><span class="white-text name">John Doe</span></a>
        <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        <br><br><br>
      </div>
    </li>
    <li><a href="/cars/create"><i class="material-icons">add</i>Upload</a></li>
    <li><a href="#"><i class="material-icons">mode_edit</i>Edit</a></li>
    <li><a href="/cars"><i class="material-icons">visibility</i>View Cars</a></li>

    <li>
      <div class="divider"></div>
    </li>
    <li><a class="subheader">View List</a></li>
    <li><a href="#!"><i class="material-icons">power_settings_new</i>Logout</a></li>
  </ul>

  <div class="container">

    <div class="row">
      <form action="/cars/{{$car->id}}" method="post" enctype='multipart/form-data'>
        {{method_field('PATCH')}}
        {{csrf_field()}}

        <div class="row">
          <div class="input-field col s6">
            <input placeholder="eg... toyota" id="make" value="{{$car->make}}" name="make" type="text" class="validate"
              required>
            <label for="Make">Vehicle Make</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="eg... hilux" id="model" value="{{$car->model}}" type="text" name="model"
              class="validate" required>
            <label for="model">Vehicle Model</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input placeholder="eg... 2017" name="year" id="year" value="{{$car->year}}" min=1800 max=2100 type="number"
              class="validate" required>
            <label for="year">Model Year</label>
          </div>
          <div class="input-field col s6">
            <input min=0 placeholder="odometer reading" id="milleage" value="{{$car->milleage}}" name="milleage"
              type="number" class="validate" required>
            <label for="milleage">Milleage</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea2" name="description" class="materialize-textarea" data-length="500"
              required>{{$car->description}}</textarea>
            <label for="textarea2">Vehicle Description</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <select required name="fueltype">
              <option value="" disabled selected>Choose your option</option>
              <option value="petrol">Petrol</option>
              <option value="diesel">Diesel</option>
            </select>
            <label>Fuel Type</label>
          </div>
          <div class="input-field col s6">
            <select required name="drivetype">
              <option value="" disabled selected>Choose your option</option>
              <option value="rear-wheel drive">Rear Wheel</option>
              <option value="front-wheel drive">Front Wheel</option>
              <option value="four-wheel drive">Four Wheel</option>
            </select>
            <label>Drive Type</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input placeholder="eg... 4.4L" name="engine" id="engine" value="{{$car->engine}}" type="text"
              class="validate" required>
            <label for="engine">Engine Type</label>
          </div>
          <div class="input-field col s6">
            <input id="price" name="price" type="text" value="{{$car->price}}" class="validate" required>
            <label for="price">Price</label>
          </div>
        </div>

        <div class="row">
        <div class="input-fiel col s3">
            <input type="file" name="image1" value="{{$car->image1}}" />
        </div>
        <div class="input-fiel col s3">
            <input type="file" name="image2" value="{{$car->image2}}" />
        </div>
        <div class="input-fiel col s3">
              <input type="file" name="image3" value="{{$car->image3}}" />          
        </div>
        <div class="input-fiel col s3">
              <input type="file" name="image4" value="{{$car->image4}}" />          
        </div>
      </div>

      <input class="btn btn-lg black" value="edit" type="submit">
      </form>
    </div>

    <form class="col s12" method="post" action="/cars/{{$car->id}}" >
    {{method_field('DELETE')}}
    {{csrf_field()}}


      <div class="row">
        <input class="btn black" type="submit" name="submit" value="Delete">
      </div>
    </form>

  </div>

</body>
<script>
  $(document).ready(function () {
    $('.sidenav').sidenav();
    $('input#input_text, textarea#textarea2').characterCounter();
    $('select').formSelect();
  });
</script>

</html>

</html>
