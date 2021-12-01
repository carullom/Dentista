@extends('layout.app')
@section('content')




  <div class="container my-5">
      <div class="row mt-5">
          <div class="col-12 text-center my-5">
              <h1 class="bordo">I nostri macchinari</h1>
          </div>
          <div class="col-12 text-center">
            <div class="one-time">
                @foreach ($macchinari as $macchinario)
                <div><img class="img-fluid" src="{{$macchinario['img']}}" width="1100px" alt="">
                <h2 class="my-3">{{$macchinario['name']}}</h2>
            <p>{{$macchinario['description']}}</p>
            </div>
                @endforeach
              
                
              </div>
          </div>
      </div>
  </div>