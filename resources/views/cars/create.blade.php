@extends('layout')

@section('content')
<h1>Upload Vehicle</h1>


<div class="row">
    <form class="col s12" method="POST" action="/cars" enctype='multipart/form-data'>
    {{csrf_field()}}
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="eg... toyota" id="make" name="make" type="text" class="validate" required>
          <label for="Make">Vehicle Make</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="eg... hilux" id="model" type="text" name="model" class="validate" required>
          <label for="model">Vehicle Model</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="eg... 2017" name="year" id="year" min=1800 max=2100 type="number" class="validate" required>
          <label for="year">Model Year</label>
        </div>
        <div class="input-field col s6">
          <input min=0 placeholder="odometer reading" id="milleage" name="milleage" type="number" class="validate" required>
          <label for="milleage">Milleage</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <textarea id="textarea2" name="description" class="materialize-textarea" data-length="500" required></textarea>
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
          <input placeholder="eg... 4.4L" name="engine" id="engine" type="text" class="validate" required>
          <label for="engine">Engine Type</label>
        </div>
        <div class="input-field col s6">
          <input  id="price" name="price" type="text" class="validate" required>
          <label for="price">Price</label>
        </div>
      </div>

      <div class="row">
        <div class="input-fiel col s3">
            <input type="file" name="image1" />
        </div>
        <div class="input-fiel col s3">
            <input type="file" name="image2" />
        </div>
        <div class="input-fiel col s3">
              <input type="file" name="image3" />          
        </div>
        <div class="input-fiel col s3">
              <input type="file" name="image4" />          
        </div>
      </div>

      <div class="row">
      <div class="input-field">
        <input class=" btn btn-lg black" type="submit" value="Upload Vehicle">
      </div>
      </div>
    </form>
  </div>
        
@endsection

