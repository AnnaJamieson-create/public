<!doctype html>
<html <?php language_attributes(); ?>>
 <head>
  
    <meta charset="<?php bloginfo( 'charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>
 <header class="site-header">
    <h1><?php bloginfo( 'name' );?></h1>
 </header>

 <!--- PHP body class START--->
 <body <?php body_class(); ?>
 
    <div id="page" class="site>

      <header>
        <section class="nav-bar">
<!--- NAVBAR START--->
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MTB BARS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MTB BARS</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Peppy Peanut/pīnati</a></li>
              <li><a class="dropdown-item" href="#">Dynamo Date/whurutu</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Speedy Seeds/pata</a></li>
            </ul>
          </li>
        </ul>
        </form>
      </div>
    </div>
  </div>
</nav>
<!-- NAV END-->
</section>
</header>
</div>