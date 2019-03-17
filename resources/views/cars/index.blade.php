@extends('main')

@section('url', "img/logo.svg")

@section('jumbotron')

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
  <br>

@endsection

@section('content')
<div class="container">
  <div class="row">
@foreach($cars as $car)

        
<div class="col-12 col-sm-12 col-md-6 col-lg-3">
<div class="card" >
  <img class="card-img-top" src="storage/img/{{$car->image1}}" alt="Car image cap">
  <div class="card-body">
    <h5 class="card-title">{{$car->make}} {{$car->model}}</h5>
    <p>Model: {{$car->model}}</p>
          <p>Make: {{$car->make}}</p>
          <p>Milleage: {{$car->milleage}}</p>
          <p>Other: {{$car->fueltype}}</p>
          <p>Price: BWP{{$car->price}}</p>

          @if(Auth::user())
          <a href="/cars/{{$car->id}}/edit" class="btn btn-danger">Edit</a>
          @else
          <a href="/cars/{{$car->id}}" class="btn btn-dark">View Car</a>
          @endif
          
    
   
 
  </div>
</div>
</div>

    @endforeach
</div>
  </div>
@endsection