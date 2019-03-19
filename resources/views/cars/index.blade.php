@extends('main')

@section('url', "img/logo.svg")

@section('jumbotron')
<section style="background:url(img/headercar2.jpg);background-size:cover;background-position:fixed;">
  <div class="container">
    <div class="jumbotron" style="background-color:#343A40; color:white">
      <div class="container">
        <h1 class="display-3">Give Us A Call</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a
          jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
        </p>
        <p><a style="background-color:black;color:white" class="btn btn-lg" href="/contact" role="button">Request Test
            Drive</a></p>

      </div>
    </div>
  </div>
<br>
<div class="container">
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-2" style="margin-bottom:10px;">
      <h5 style="color:white">Select By Type:</h5>
    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-2" style="margin-bottom:10px;">
      <a style="width:80%;" class="btn btn-outline-dark" href="/cars?type=SUV">suv</a>
    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-2" style="margin-bottom:10px;">
      <a style="width:80%;" class="btn btn-outline-dark" href="/cars?type=Sedan">sedan</a>
    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-2" style="margin-bottom:10px;">
      <a style="width:80%;" class="btn btn-outline-dark" href="/cars?type=Sport">sport</a>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-2" style="margin-bottom:10px;">
      <a style="width:80%;" class="btn btn-outline-dark" href="/cars?type=4x4">4x4</a>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-2" style="margin-bottom:10px;">
      <a style="width:80%;" class="btn btn-outline-dark" href="/cars">all</a>
    </div>
  </div>
</div>
<br><br>
</section>

@endsection

@section('content')
<div class="container">

  
  <div class="row">

    @foreach($cars as $car)


    <div class="col-12 col-sm-12 col-md-6 col-lg-3" style="margin-bottom:15px">
      <div class="card h-100">
        <a data-toggle="lightbox" href="storage/img/{{$car->image1}}"><img class="card-img-top"
            src="storage/img/{{$car->image1}}" alt="Car image cap"></a>
        <div class="card-body">
          <h5 class="card-title">{{$car->make}} {{$car->model}}</h5>
          <p>Model: {{$car->model}}</p>
          <p>Make: {{$car->make}}</p>
          <p>Milleage: {{$car->milleage}}</p>
          <p>Engine: {{$car->fueltype}}</p>
          <p>Price: BWP{{$car->price}}</p>

          @if(Auth::user())
          <a href="/cars/{{$car->id}}" class="btn btn-dark">View Car</a>
          <a href="/cars/{{$car->id}}/edit" class="btn btn-danger">Edit</a>

          @else
          <a href="/cars/{{$car->id}}" class="btn btn-dark">View Car</a>
          @endif




        </div>
      </div>
    </div>
    <br><br>
    @endforeach
  </div>
  <div class="row">
    <div class="col-md-12">
      <br>
      {{$cars->links()}}
    </div>
  </div>
</div>
@endsection