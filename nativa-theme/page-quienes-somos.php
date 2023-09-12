<?php get_header(); ?>
<section class="section--page">
  <div class="container">
    <div class="title--heading">
      <h2>
        <?php echo the_title(); ?>
      </h2>
    </div>

    <div class="page__content">
      <div class="page__description">
        <?php echo the_content(); ?>
      </div>
  
      <div class="page__img--somos">
        <img src="<?php echo TEMPLATE; ?>/img/bg-somos.png" alt="">
      </div>
    </div>

    <hr class="line--gray">
  </div>
</section>

<?php get_footer(); ?>
