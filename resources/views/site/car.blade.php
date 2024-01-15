@extends('layouts.app')
<title>Cars </title>

    <section class="hero-wrap hero-wrap-2 js-fullheight"
    @if(auth()->check() && auth()->user()->typeUser == '1')
        style="background-color: blue; color: white;"

    @else
        style="background-image: url('images/bg_3.jpg');"
    @endif
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
                @auth
                    @if(auth()->user()->typeUser =='1')
                    <h1 class="mb-3 bread">welcome to admin</h1>
                        <h1 class="mb-3 bread">Your Cars</h1>
                        <div>
                            <a href="CreateCars" class="btn btn-primary" title="Add New Car">Add a Car</a>
                        </div>
                    @else
                        <h1 class="mb-3 bread">Choose Your Car</h1>
                    @endif
                @else
                    <h1 class="mb-3 bread">Choose Your Car</h1>
                @endauth
            </div>
        </div>
    </div>
</section>


		<section class="ftco-section bg-light">
    	<div class="container">

      <div class="container">
    <div class="row">
        @foreach($cars as $item)
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                <img class="img rounded d-flex align-items-end" src="{{ asset('images/posts/' . $item->image) }}">
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">{{ $item->brand}}</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">{{ $item->brand }}</span>
                            <p class="price ml-auto">{{ $item->price }} <span>/day</span></p>
                        </div>
                        @auth
                            @if(auth()->user()->typeUser == '1')
                            
                           
                             <form action="{{ route('edit-car', $item->id)}}" method="post">
                              @csrf
                              @method('GET')
                              <button type="submit" class="btn btn-primary py-2 mr-1"> Edit</button>
                            </form>

                            <form action="{{ route('delete-cars', $item->id)}}" method="post">
                              @csrf
                              @method('GET')
                              <button type="submit" class="btn btn-secondary py-2 ml-1"> Delete </button>
                            </form>

                            @else
                            @if($item->rented)
                              <form action="{{ route('return-car', $item->id) }}" method="post">
                               @csrf
                               @method('PUT')
                                <button type="submit" class="btn btn-danger py-2 mr-1">Return</button>
                              </form>
                            @else
                              <form action="{{ route('rent-car', $item->id) }}" method="post">
                             @csrf
                             @method('PUT')
                            <button type="submit" class="btn btn-primary py-2 mr-1">Rent now</button>
                           </form>
@endif
                           <form action="{{ route('carDetails', ['id' => $item->id]) }}" method="get">
                                 <button type="submit" class="btn btn-secondary py-2 ml-1">Details</button>
                           </form>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
    

    
  


 