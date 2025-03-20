<!DOCTYPE html>
<html lang="en">

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABQ6i7W+Knujs4wYdfM4M4vQVmgguZr5rOmV6F71jSAwiGgpxn3vXNU" crossorigin="anonymous">

  <meta charset="UTF-8">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/staley.css">
</head>

<body>
  <!--menu de navegação -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">cardapios</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contato</a>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="procurar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">procurar</button>
        </form>
      </div>
    </div>
  </nav>
  <br>
  <!--caroussel-->
  <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/images.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/menu-de-comida-e-modelo-de-capa-de-midia-social-de-restaurante_202595-368.avif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/plantilla-banner-web-menu-comida-restaurante_120329-1460.avif" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  


  <!--CATEGORIAS-->
  <style>
  .card-img-custom {
    height: 200px; /* Define a altura fixa */
    object-fit: cover; /* Mantém a proporção e corta o excesso */
  }
</style>

<section class="container mt-4">   
  <div class="row d-flex flex-wrap justify-content-center text-center">     
    <div class="col-md-4 d-flex justify-content-center">       
      <div class="card" style="width: 100%;">         
        <img src="imagens-cardapio/images (1).jpg" class="card-img-top card-img-custom" alt="entradas">         
        <div class="card-body">           
          <h5 class="card-title">Entradas</h5>           
          <p class="card-text">Entradas, coisas básicas para abrir os trabalhos!!</p>         
        </div>       
      </div>     
    </div>      

    <div class="col-md-4 d-flex justify-content-center">       
      <div class="card" style="width: 100%;">         
        <img src="imagens-cardapio/download.jpg" class="card-img-top card-img-custom" alt="pratos principais">         
        <div class="card-body">           
          <h5 class="card-title">Pratos Principais</h5>           
          <p class="card-text">Sua refeição principal do dia!!</p>         
        </div>       
      </div>     
    </div>      

    <div class="col-md-4 d-flex justify-content-center">       
      <div class="card" style="width: 100%;">         
        <img src="imagens-cardapio/download (1).jpg" class="card-img-top card-img-custom" alt="Bebidas não alcoólicas">         
        <div class="card-body">           
          <h5 class="card-title">Bebidas Não Alcoólicas</h5>           
          <p class="card-text">Para menores de 18 anos ou para quem não curte aquela geladinha 🍻🔞.</p>         
        </div>       
      </div>     
    </div>      

    <div class="col-md-4 d-flex justify-content-center">       
      <div class="card" style="width: 100%;">         
        <img src="imagens-cardapio/download (2).jpg" class="card-img-top card-img-custom" alt="bebidas alcoólicas">         
        <div class="card-body">           
          <h5 class="card-title">Bebidas Alcoólicas</h5>           
          <p class="card-text">Bebidas alcoólicas para maiores de 18 anos (+18)🍻</p>         
        </div>       
      </div>     
    </div>      

    <div class="col-md-4 d-flex justify-content-center">       
      <div class="card" style="width: 100%;">         
        <img src="imagens-cardapio/espetinho.jpg" class="card-img-top card-img-custom" alt="espetinhos">         
        <div class="card-body">           
          <h5 class="card-title">Espetinhos</h5>           
          <p class="card-text">Espetinhos para acompanhar suas porções.</p>         
        </div>       
      </div>     
    </div>      

    <div class="col-md-4 d-flex justify-content-center">       
      <div class="card" style="width: 100%;">         
        <img src="imagens-cardapio/renda-extra-com-comida.jpg" class="card-img-top card-img-custom" alt="adicionais">         
        <div class="card-body">           
          <h5 class="card-title">Adicionais</h5>           
          <p class="card-text">Adicionais como arroz, salada, carne e muito mais.</p>         
        </div>       
      </div>     
    </div>      

    <div class="col-md-4 d-flex justify-content-center">       
      <div class="card" style="width: 100%;">         
        <img src="imagens-cardapio/sobremesas-para-restaurantes-03.jpg" class="card-img-top card-img-custom" alt="sobremesas">         
        <div class="card-body">           
          <h5 class="card-title">Sobremesas</h5>           
          <p class="card-text">Sobremesas para acompanhar depois da sua refeição.</p>         
        </div>       
      </div>     
    </div>   
  </div> 
</section>  

<footer class="text-center mt-4 p-3 bg-dark text-light">   
  <p>&copy; 2025 - Restaurante Delícius | Todos os direitos reservados.</p> 
</footer>





  
</section>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>

</html>