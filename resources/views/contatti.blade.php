@extends('layout.app')
@section('content')

<div class="container my-5">
    <div class="row my-5 pt-5 align-items-center">
        <div class="col-12 text-center my-5">
            <h1 class="bordo">Contatti</h1>
        </div>
        <div class="col-12 col-lg-6 my-5">
            <img class="img-fluid" src="/media/mappa.jpg" alt="">
        </div>
      
      
        <div class="col-12 col-lg-6 my-5">
        <form method="POST" action="{{route('submit')}}">
            @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome e Cognome</label>
                    
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-light"><i class="fas fa-user colore"></i></div>
                        </div>
                        <input type="text" name="name" class="form-control" id="inlineFormInputGroupUsername" placeholder="Tizio Caio">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-light"><i class="fas fa-at colore"></i></div>
                        </div>
                        <input type="text" class="form-control" name="email" id="inlineFormInputGroupUsername" placeholder="tiziocaio@pippo.it">
                    </div>                   
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Scrivi il tuo messaggio</label>
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                        <div class="form-group form-check mt-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Accetta <a href="">Privacy</a></label>
                          </div>
                    
                    <div class="text-center">
                        <button class="btn btn-lg text-white bg-colore mt-3 w-100">Invia</button> 
                    </div>
                </div>
                
            </form>
      
           {{--  <div class="col-12  my-5">
                <h4 class="">Orari</h4>
                <ul>
                    <li>Lunedi 8:30 - 13:00  16:00 - 19:30</li>
                    <li>Martedì 8:30 - 13:00  16:00 - 19:30</li>
                    <li>Mercoledì 8:30 - 13:00  16:00 - 19:30</li>
                    <li>Giovedì 8:30 - 13:00  16:00 - 19:30</li>
                    <li>Venerdì 8:30 - 13:00  16:00 - 19:30</li>
                    <li>Sabato 8:30 - 13:00 </li>
                    <li>Domenica chiuso</li>
                </ul>
             </div> --}}
        </div>
    </div>
</div>

















@endsection