<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surb Serviços Urbano</title>
  <?php wp_head(); ?>
</head>

<body>

  <header id="header" class="bg">
    <div class="container-fluid border-bottom border-warning text-light">
      <div class="container ">
        <nav id="header-navbar" class="row navbar navbar-expand-lg ">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <?php 
                if(has_nav_menu('primary')){
                  wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_class' => 'nav__top',
                    'fallback_cb' => false
                  ));
                }
              ?>
            <!-- <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item  ml-5 active">
                <a class="nav-link fw-bold text-light" href="#">Início <span class="sr-only">(Página atual)</span></a>
              </li>
              <li class="nav-item  ml-5">
                <a class="nav-link fw-bold text-light" href="#">Sobre nós</a>
              </li>
              <li class="nav-item  ml-5">
                <a class="nav-link fw-bold text-light" href="#">Contato</a>
              </li>
              <li class="nav-item  ml-5">
                <a class="nav-link fw-bold text-light" href="#">Regras</a>
              </li>
              <li class="nav-item ml-5">
                </li>
              </ul> -->
            <a class="btn btn-danger text-uppercase fw-bold" href="#">Produtos e Materiais</a>
            <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form> -->
          </div>
        </nav>
      </div>
    </div>
    <!-- content -->
    <div id="header-content" class="container-fluid">
      <div class="container py-5">
        <div class="row  d-flex justify-content-center">
          <div class="col">
            <h1 class="text-center text-light text-uppercase fw-bold">Produtos e Materiais de Divulgação
            </h1>
            <p class="text-center text-light">Encontre os melhores produtos para promover e baixe materiais</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <button class="btn btn-warning text-dark">Clique para entrar no canol do telegram para afiliados!</button>
        </div>
      </div>
    </div>
  </header>