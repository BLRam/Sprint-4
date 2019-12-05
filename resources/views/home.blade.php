@extends('layouts.app')

@section('principal')

<section>
  <h2 class="bienvenido2">¡Elige tu categoria!</h2>
    <section class="categories">
      <div class="card-deck">
        <div class="card">
          <img src="image/historia.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Historia</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <a href="/preguntas" class="btn btn-primary">Agregar pregunta</a>
            </div>
        </div>
    <div class="card">
      <img src="image/geografía.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Geografía</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
          <div class="card-footer">
            <a href="/preguntas" class="btn btn-primary">Agregar pregunta</a>
          </div>
      </div>
  <div class="card">
    <img src="image/deporte.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Deporte</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    <div class="card-footer">
      <a href="/preguntas" class="btn btn-primary">Agregar pregunta</a>
    </div>
    </div>
    <div class="card">
      <img src="image/arte.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Arte</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      <div class="card-footer">
        <a href="/preguntas" class="btn btn-primary">Agregar pregunta</a>
      </div>
      </div>
      <div class="card">
        <img src="image/entretenimiento.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Entretenimiento</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        <div class="card-footer">
          <a href="/preguntas" class="btn btn-primary">Agregar pregunta</a>
        </div>
        </div>
</div>
  </section>
@endsection
