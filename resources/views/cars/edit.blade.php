<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hi-Tech Dashboard - Edit</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../css/dash.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header" style="background-color:#202060">
                <h3><a href="#!" class="brand-logo"><img src="../../img/logo.svg" width=150 alt="logo"></a></h3>
            </div>

            <ul class="list-unstyled components">
                <p>{{ Auth::user()->email }}</p>
                <li>
                    <a href="/cars/create">Upload Vehicle</a>
                </li>

                <li class="active">
                    <a href="/cars">Edit</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
				 <li>
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cars">Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" disabled href="#">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2>Hey There {{Auth::user()->name}}</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

			     <div class="container">
        <div class="row">
        <form class="col-12 col-sm-12 col-md-12 col-lg-12" id="contact-form" method="post" action="/cars/{{$car->id}}" role="form" enctype='multipart/form-data'>
			 {{method_field('PATCH')}}
			 {{csrf_field()}}
<div class="messages"></div>

<div class="controls">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="make">Vehicle Make *</label>
                <input id="make" type="text" name="make" value="{{$car->make}}" class="form-control" placeholder="eg... Toyota*" required="required" data-error="Make is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="model">Vehicle Model *</label>
                <input id="model" type="text" name="model" value="{{$car->model}}" class="form-control" placeholder="eg... Hilux *" required="required" data-error="Model is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
	
	    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="year">Model Year *</label>
                <input id="year" type="number" value="{{$car->year}}" name="year" min=1800 max=2100 class="form-control" placeholder="eg...2017 *" required="required" data-error="Make is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="milleage">Milleage *</label>
                <input id="milleage" type="number" value="{{$car->milleage}}" min=0 name="milleage" class="form-control" placeholder="eg...Odometer reading *" required="required" data-error="Model is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
	
	    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_message">Vehicle Description *</label>
                <textarea id="form_message" name="description" class="form-control" placeholder="Brief Vehicle description *" rows="4" required="required" data-error="Please, leave us a message.">{{$car->description}}</textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
	
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_need">Engine Type *</label>
                <select id="form_need" name="fueltype" class="form-control" required="required" data-error="Please specify your need.">
					<?php $arr = ['Petrol','Diesel']; ?>
					@foreach($arr as $item)
					   <option value="{{ $item }}" @if($car->fueltype=== $item) selected='selected' @endif> {{ $item }}</option>
					@endforeach
                </select>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_need2">Drive Type *</label>
                <select id="form_need2" name="drivetype" class="form-control" required="required" data-error="Please specify your need.">
					<?php $arr = ['Rear-Wheel Drive','Front-Wheel Drive','Four-Wheel Drive']; ?>
					@foreach($arr as $item)
					   <option value="{{ $item }}" @if($car->drivetype=== $item) selected='selected' @endif> {{ $item }}</option>
					@endforeach
                </select>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
	
	    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="engine">Engine Capacity *</label>
                <input id="engine" type="text" name="engine" value="{{$car->engine}}" class="form-control" placeholder="eg...4.4L *" required="required" data-error="Make is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="price">Price *</label>
                <input id="price" type="text" name="price" value="{{$car->price}}" class="form-control" required="required" data-error="Price is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_need4">Vehicle Type *</label>
                <select id="form_need4" name="type" class="form-control" required="required" data-error="Please specify type.">
                   	<?php $arr = ['4x4','Sedan','Sport', 'SUV', 'Bakkie']; ?>
					@foreach($arr as $item)
					   <option value="{{ $item }}" @if($car->type=== $item) selected='selected' @endif> {{ $item }}</option>
					@endforeach
                </select>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_need24">Transmission *</label>
                <select id="form_need24" name="transmission" class="form-control" required="required" data-error="Please specify car transmission.">
                    <?php $arr = ['Automatic','Manual']; ?>
					@foreach($arr as $item)
					   <option value="{{ $item }}" @if($car->transmission=== $item) selected='selected' @endif> {{ $item }}</option>
					@endforeach
                </select>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            <label for="form_need243">Doors *</label>
                <select id="form_need243" name="doors" class="form-control" required="required" data-error="Please specify number of doors.">
                   	<?php $arr = ['2','4']; ?>
					@foreach($arr as $item)
					   <option value="{{ $item }}" @if($car->doors=== $item) selected='selected' @endif> {{ $item }}</option>
					@endforeach
                </select>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_message1">Vehicle Features*</label>
                <textarea id="form_message1" name="features"  class="form-control" placeholder="Vehicle key features *" rows="4" required="required" data-error="Add some features.">{{$car->features}}</textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
	
	<div class="row">
	<div class="col-md-3">
	<div class="custom-file">
    <input type="file" class="custom-file-input" name="image1" id="validatedCustomFile" >
    <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
	</div>
	</div>
	
		<div class="col-md-3">
	<div class="custom-file">
    <input type="file" class="custom-file-input" name="image2" id="validatedCustomFile1" >
    <label class="custom-file-label" for="validatedCustomFile1">Choose Image...</label>
	</div>
	</div>
	
		<div class="col-md-3">
	<div class="custom-file">
    <input type="file" class="custom-file-input" name="image3" id="validatedCustomFile2" >
    <label class="custom-file-label" for="validatedCustomFile2">Choose Image...</label>
	</div>
	</div>
	
		<div class="col-md-3">
	<div class="custom-file">
    <input type="file" class="custom-file-input" name="image4" id="validatedCustomFile3" >
    <label class="custom-file-label" for="validatedCustomFile3">Choose Image...</label>
	</div>
	</div>
	</div>

    <div class="row">
        <div class="col-md-12">
            <p class="text-muted">
                <strong>*</strong> These fields are required.
               </p>
        </div>
		
		        <div class="col-md-12">
            <input style="background-color:black;color:white" type="submit" class="btn btn-lg btn-send" value="Edit Vehicle">
        </div>
    </div>
</div>

</form>
        </div>
      </div>
	  <br>
	  <div class="container">
			<div class="row">
				<form class="col-12 col-sm-12 col-md-12 col-lg-12" method="post" action="/cars/{{$car->id}}">
				    {{method_field('DELETE')}}
					{{csrf_field()}}
          <div class="row">
          <div class="col-md-12">
            <input style="background-color:red;color:white" type="submit" class="btn btn-lg btn-send" value="Delete Vehicle">
        </div>
          </div>
				</form>
			</div>
	  
	  </div>
			
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>