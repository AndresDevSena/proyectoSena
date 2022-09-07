@extends('layout')

@section('title')
Participacion ciudadana
@endsection

@section('content')
<header>
<nav class="navbar navbar-expand-lg bg-info text-white">
  <div class="container-fluid">
  <img src="http://localhost/sena/public/logo.png" style="width:120px;" class="img-thumbnail" alt="...">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a style="font-size: 1.3rem;" class="nav-link active text-white" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item  ps-5">
          <a style="font-size: 1.3rem;" class="nav-link text-white " href="#">Iniciar sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<main>
    <div class="container d-flex">
    <div class="container  w-50">
        <p class="h1 text-center ">Bienvenidos</p>
        <p class="fs-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis corrupti atque distinctio pariatur aut fuga delectus voluptates, ducimus officiis minima consequatur porro. Consectetur mollitia ea suscipit rerum libero dolorem aut.
        Corporis dolore dolor cupiditate vel accusantium, atque deserunt suscipit rerum, quo libero, et commodi vero ullam ducimus culpa blanditiis quaerat amet sapiente dolores perferendis! Quas nemo porro modi aliquid iste?
        Sint deleniti, perspiciatis saepe vitae eligendi officiis optio voluptate necessitatibus ullam aliquid alias, voluptates maiores. Quod nobis, officia quisquam neque amet accusamus obcaecati, labore omnis ipsa sunt aperiam illum quaerat!
        Culpa numquam molestias quod accusantium inventore quasi magni aliquid, sapiente delectus dicta rem sed. Nesciunt error odio asperiores voluptates deserunt facilis, voluptatibus repellendus tenetur labore veniam! Labore cum dignissimos temporibus.
        Quaerat sit laboriosam omnis harum id cum eos obcaecati excepturi, aperiam non magnam error est assumenda, perferendis accusamus ducimus molestias rem aspernatur nisi iusto, officiis deserunt ullam ex veritatis! Totam!</p>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/sena/public/participacion1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/sena/public/participacion2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/sena/public/participacion3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</main>

@endsection
