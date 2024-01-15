
@extends('layouts.app')

<link href="{{ asset('css/createcar.css') }}" rel="stylesheet">
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-color:blue ;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Create Car <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Create Car</h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section ftco-car-details">
      
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center">
            
<html>
<head>
   
   
</head>
<body>
    <div class="center">
        <div class="form-container">
        <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="brand">Brand:</label>
                    <input type="text" id="brand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="mileage">Mileage:</label>
                    <input type="number" id="mileage" name="mileage" required>
                </div>
                <div class="form-group">
                    <label for="transmission">Transmission:</label>
                    <input type="text" id="transmission" name="transmission" required>
                </div>
                <div class="form-group">
                    <label for="seats">Seats:</label>
                    <input type="number" id="seats" name="seats" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" required autocomplete="image">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

  
    </section>
    
