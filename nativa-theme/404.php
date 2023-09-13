<?php get_header(); ?>

<section class="section--page">
  <div class="container">
    <div class="title--heading">
      <h2>
        <span class="title--error">404</span>
        Página no encontrada
      </h2>
    </div>

    <div class="page__container">
      <div class="page__description">
        <p>
          No encontramos la página que estás buscando.
        </p>
      </div>
      <a href="<?php echo WEB; ?>" class="page__link">
        <i class="fa-solid fa-house"></i>
        Ir a la página principal
      </a>
    </div>

    <hr class="line--gray">
  </div>
</section>

<?php get_footer(); ?>
