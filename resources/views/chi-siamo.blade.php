@extends('layout.app')
@section('content')

<header class="masthead2 bordo">
  <div class="container-fluid h-100">
    <div class="row h-100 pt-5 align-items-center">
      <div class="col-12 text-center pt-4">
        <h1 class="">Il nostro staff</h1>
        
      </div>
    </div>
  </div>
</header>


<div class="container">
  <div class="row py-5">
    @foreach ($dentisti as $dentista)
    <div class="col-12 col-md-6 col-lg-4 py-5">
      <div class="card-group"> 
        <div class="card border-card mx-auto " data-aos="flip-left" style="width: 18rem;">
          <img class="img-fluid" src="{{$dentista['img']}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title bordo">{{$dentista['name']}} {{$dentista['surname']}}</h5>
            <p class="card-text">{{$dentista['description']}}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection