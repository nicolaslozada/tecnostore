<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<?php if(is_home()): ?>
		<title><?php echo bloginfo('name'); ?> - <?php echo bloginfo('description'); ?></title>
  	<?php else: ?>	
		<title><?php echo the_title(); ?> - <?php echo bloginfo('name'); ?></title>
	<?php endif; ?>	
  <link rel="stylesheet" href="<?php echo TEMPLATE; ?>/assets/css/general.css">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="header__first">
        <a href="<?php echo WEB; ?>" class="logo">
          <img src="<?php echo TEMPLATE; ?>/img/logo-nativa.png" alt="">
        </a>
        <a href="<?php echo WEB; ?>/live" class="live">
          <div class="live__icon">
            <div class="live--inner"></div>
          </div>
          Ver en vivo
        </a>
      </div>
      
      <div class="header__last">
      <div class="dropdown">
          <div class="dropdown__head">
            Categorías
            <i class="fa-solid fa-angle-down"></i>
          </div>

          <nav class="dropdown__list">
            <a href="<?php echo WEB; ?>/category/lo-ultimo/">Últimas noticias</a>
            <a href="<?php echo WEB; ?>/category/politica">Política</a>
            <a href="<?php echo WEB; ?>/category/economia">Economía</a>
            <a href="<?php echo WEB; ?>/category/mundo">Mundo</a>
            <a href="<?php echo WEB; ?>/category/deportes">Deportes</a>
            <a href="<?php echo WEB; ?>/category/entretenimiento">Entretenimiento</a>
            <a href="<?php echo WEB; ?>/programacion">Programación</a>
            <a href="<?php echo WEB; ?>/cobertura">Cobertura</a>
          </nav>
        </div>
        
        <div class="rrss">
          <a href="https://twitter.com/somosnativa" target="_blank">
            <i class="fa-brands fa-twitter" ></i>
          </a>
          <a href="https://www.facebook.com/nativanosconecta/" target="_blank">
            <i class="fa-brands fa-facebook"></i>
          </a>
          <a href="https://www.youtube.com/@Nativanosconecta/featured" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
          <a href="https://www.instagram.com/nativanosconecta/" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </header>
