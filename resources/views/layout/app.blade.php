<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <title>Studio dentistico</title>
  </head>
  <body>
    @include('includes.navbar')
@yield('content')









@include('includes.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c172232588.js" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="/slick/slick.min.js"></script>

<script>$('.one-time').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: false,
  arrow: false
});
  </script>

  <script>
    let navbar = document.querySelector('#navbar')
    let link = document.querySelectorAll('.nav-link')
    let menu = document.querySelector('#menu')
  

    document.addEventListener('scroll',()=>{
  if(window.scrollY>200){
    navbar.classList.remove('bg-colre')
    navbar.classList.add('bg-light')
    navbar.classList.add('bordo')
    menu.classList.remove('text-white')
    menu.classList.add('colore')
    link.forEach( (e) => {
      e.classList.remove('text-white')
      e.classList.add('colore')
    })



  }else{
    navbar.classList.add('bg-colore')
    navbar.classList.remove('bg-light')
    navbar.classList.remove('bordo')
    menu.classList.remove('colore')
    menu.classList.add('text-white')
    link.forEach( (e) => {
      e.classList.add('text-white')
      e.classList.remove('colore')
    })


  }
}
)
  </script>
  <script>
    AOS.init();
  </script>
  
  </body>
</html>