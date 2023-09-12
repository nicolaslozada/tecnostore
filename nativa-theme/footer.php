  <footer>
    <div class="container">
      <div class="footer__content">
        <div class="footer__item">
          <a href="<?php echo WEB; ?>" class="logo">
            <img src="<?php echo TEMPLATE; ?>/img/logo-blue.svg" alt="">
          </a>
          <div class="rrss--blue">
            <a href="https://twitter.com/somosnativa" target="_blank">
              <i class="fa-brands fa-twitter"></i>
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
          <a href="" class="email">
            nosotros@ntv.pe
          </a>
          <div class="footer__menu">
            <a href="<?php echo WEB; ?>/quienes-somos/">
              Sobre nosotros
            </a>
            <a href="<?php echo WEB; ?>/nuestro-equipo/">
              Nuestro equipo
            </a>
            <a href="<?php echo WEB; ?>/contacto/">
              Contacto
            </a>
            <a href="">
              Política de privacidad
            </a>
          </div>
        </div>
        <div class="footer__item">
          <div class="footer__news">
            <div class="footer__news__title">
              Últimas noticias
            </div>
            <div class="footer__news__list">
              <?php
              $args_footer = "posts_per_page=4";
              $query_footer = new WP_Query($args_footer);
              while ($query_footer->have_posts()) : $query_footer->the_post();
              ?>
                <a href="<?php echo the_permalink(); ?>">
                  <?php echo the_title(); ?>
                </a>
              <?php endwhile;
              wp_reset_postdata; ?>
            </div>
          </div>
        </div>
        <div class="footer__item">
          <div class="footer__news__title">
            Secciones
          </div>
          <div class="footer__section">
            <a href="">Últimas noticias</a>
            <a href="">Política</a>
            <a href="">Economía</a>
            <a href="">Mundo</a>
            <a href="">Deportes</a>
            <a href="">Entretenimiento</a>
            <a href="">Opinión</a>
          </div>
        </div>
        <div class="footer__item">
          <div class="footer__news__title">
            Míranos en vivo
          </div>
          <div class="footer__live">
            <img src="<?php echo TEMPLATE; ?>/img/portada-thumb.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </footer>
 <?php wp_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="<?php echo TEMPLATE; ?>/js/swiper-bundle.min.js"></script>
  <script src="<?php echo TEMPLATE; ?>/js/main.js"></script>
 
  </body>

</html>