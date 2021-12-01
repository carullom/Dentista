@extends('layout.app')
@section('content')

<header class="masthead3 bordo">
  <div class="container-fluid h-100">
    <div class="row h-100 pt-5 align-items-center">
      <div class="col-12 text-center pt-4">
        <h1 class="">I nostri servivi</h1>
        
      </div>
    </div>
  </div>
</header>

<div class="container my-5">
  @foreach ($servizi as $servizio)
  
  <div class="row my-5 align-items-center" data-aos="fade-right">
    <div class="col-12 col-lg-5 my-4" >
      <img class="img-fluid" src={{$servizio['img']}} width="450px" alt="">
    </div>
    <div class="col-12 col-lg-7 my-4">
      <h2 class="bordo">{{$servizio['name']}}</h2>
      <p>{{$servizio['description']}}</p>
      <p class="float-right font-weight-bold">Prezzo: {{$servizio['price']}}€</p>
      
    </div>
  </div>

    @endforeach 
  </div>
    
    
    @endsection