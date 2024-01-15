
@extends('layouts.app')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">

<title>profile</title>



@section('content')

<section class="vh-100 gradient-custom ">

<div class="container">
    <div class="card ">
        <div class=" image "> <img src="{{asset('images/avatar/'.$user->image_path) }}" >
           <p>Username: <span>{{$user->name}}</span></p>  
          <p>Email: <span>{{$user->email}}</span></p>  
          <p>Birthday: <span>{{date("Y-m-d ",strtotime($user->birthday))}}</span></p>
           <p>About me: <span>{{$user->about}}</span></p> 


            <form action="{{ route('profile.edit') }}" method="post">
                @method('GET')
                @csrf
                 <button >Edit Profile</button> 
            </form>
        </div>
    </div>
</div>
</section>
@endsection