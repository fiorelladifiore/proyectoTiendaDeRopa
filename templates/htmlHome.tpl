{include "htmlStart.tpl"}

<div class="home">
  <div class="firstpart">
    <div class="carrousel ">
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/parteInferior.jpg" class="d-block w-100" alt="parte inferior">
      <div class="carousel-caption d-none d-md-block">
        <h5>Parte Inferior</h5>
        <p>Jeans, joggins</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/parteSuperior.jpg" class="d-block w-100" alt="parte superior">
      <div class="carousel-caption d-none d-md-block">
        <h5>Parte Superior</h5>
        <p>Buzos, remeras, poleras</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/novedades.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Novedades</h5>
        <p>No te pierdas las últimas tendencias</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="hotsale">
  <img src="img/hotSaleTienda.jpg" class="hotsaleimg rounded mx-auto d-block"> 
  </div>
</div>
<div class="secondpart">
  <div class="paymentsmethods">
  <img src="img/metodosPago.png" class="rounded-spill">
  </div>
  <div class="rating-container">
  <h1>Califica Nuestro Servicio</h1>
  <div class="rating">
      <input type="radio" id="star5" name="rating" value="5" />
      <label for="star5" title="5 estrellas">★</label>
      <input type="radio" id="star4" name="rating" value="4" />
      <label for="star4" title="4 estrellas">★</label>
      <input type="radio" id="star3" name="rating" value="3" />
      <label for="star3" title="3 estrellas">★</label>
      <input type="radio" id="star2" name="rating" value="2" />
      <label for="star2" title="2 estrellas">★</label>
      <input type="radio" id="star1" name="rating" value="1" />
      <label for="star1" title="1 estrella">★</label>
  </div>
  <button id="submit-rating"><a class="nav-link active"href="home">Enviar Calificación</a></button>
  <div id="rating-result"></div>
</div>
</div>

</div>

{include "htmlEnd.tpl"}