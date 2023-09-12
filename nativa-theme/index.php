<?php get_header(); ?>

<?php
  $args_portada = array(
    'category_name' => 'portada',
    'posts_per_page' => 1
  );
  $query_portada = new WP_Query($args_portada);
  while ($query_portada->have_posts()) : $query_portada->the_post();
  ?>
  <section class="jumbotron portada" style="background-image: url('<?php echo TEMPLATE; ?>/img/bg-block.png')">
    <div class="bg-opacity"></div>
    <div class="container">
      <div class="jumbotron__content">
        <div class="date">
          <?php
          $categories = get_the_category();
          if (!empty($categories)) {
            echo '<a class="date__category" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>
          &bull;';
          }
          ?>
          <?php
          $fecha = get_post_time('d - m - Y');
          echo $fecha;
          ?>
        </div>
    
        <a href="<?php echo the_permalink(); ?>" class="jumbotron__title">
          <?php echo the_title(); ?>
        </a>
    
        <div class="jumbotron__description">
          <?php echo the_excerpt(); ?>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; ?>

<section class="banner">
  <div class="container">
    <div class="banner__content">
      <div class="banner__left">
        <img src="<?php echo TEMPLATE; ?>/img/portada-personaje.png" alt="">
      </div>
      <div class="banner__center">
        <a href="<?php echo WEB; ?>/live" class="live--white">
          <div class="live__icon">
            <div class="live--inner"></div>
          </div>
          En vivo ahora
        </a>
        <div class="banner__title">
          Las mañanas con Carlos Cornejo
        </div>
        <a href="" class="banner__link">
          Ir a la transmisión en vivo
        </a>
      </div>
      <div class="banner__right">
        <img src="<?php echo TEMPLATE; ?>/img/portada-thumb.png" alt="">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="news">
      <div class="news__title">
        <img src="<?php echo TEMPLATE; ?>/img/icon-triangle.svg" alt="">
        Noticias en video
      </div>

      <div class="news__principal">
        <div class="news__portada">
          <iframe width="713" height="428" src="https://www.youtube.com/embed/-8PdO0YqQSg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="news__thumbs">
          <?php
          $args_noticias_video = array(
            'posts_per_page' => 4,
          );
          $query_noticias_video = new WP_Query($args_noticias_video);
          while ($query_noticias_video->have_posts()) : $query_noticias_video->the_post();
          ?>
            <div class="thumb--white">
              <a href="<?php echo the_permalink(); ?>" class="thumb__img">
                <img src="<?php echo url_thumbnail(); ?>" alt="Foto - <?php echo the_title(); ?>">
              </a>
              <div class="thumb__content">
                <div class="date">
                  <?php
                    $categories = get_the_category();
                      if (!empty($categories)) {
                        echo '<a class="date__category" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . ' &bull; </a>';
                      }
                    ?>
                  <?php
                  $fecha = get_post_time('d - m - Y');
                  echo $fecha;
                  ?>
                </div>
                <a href="<?php echo the_permalink(); ?>" class="thumb__title">
                  <?php echo the_title(); ?>
                </a>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div>
      </div>

      <hr class="line--blue">

      <div class="news__cards--blue">
        <?php
        $args_video_footer = array(
          'posts_per_page' => 3,
          'offset' => 3
        );
        $query_video_footer = new WP_Query($args_video_footer);
        while ($query_video_footer->have_posts()) : $query_video_footer->the_post();
        ?>
          <div class="card">
            <a href="<?php echo the_permalink(); ?>" class="card__img">
              <img src="<?php echo url_thumbnail(); ?>" alt="Foto - <?php echo the_title(); ?>">
            </a>
            <div class="card__content">
              <div class="date">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                  echo '<a class="date__category" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>
                  &bull;';
                }
                ?>
                <?php
                $fecha = get_post_time('d - m - Y');
                echo $fecha;
                ?>
              </div>
              <a href="<?php echo the_permalink(); ?>" class="card__title">
                <?php echo the_title(); ?>
              </a>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>

<section class="section--featured">
  <div class="container">
    <hr class="line--gray">
    <div class="featured__title">
      Programación Destacada
    </div>

    <div class="featured">
      <div class="thumb">
        <div class="thumb__img">
          <img src="<?php echo TEMPLATE; ?>/img/bg-programation-1.png" alt="">
        </div>
        <div class="thumb__content">
          <div class="thumb__title">
            Al vuelo con Raúl Tola
          </div>
          <div class="thumb__description">
            Todos los días 12 pm
          </div>
          <a href="" class="thumb__link">
            Ver programass
          </a>
        </div>
      </div>

      <div class="thumb">
        <div class="thumb__img">
          <img src="<?php echo TEMPLATE; ?>/img/bg-programation-2.png" alt="">
        </div>
        <div class="thumb__content">
          <div class="thumb__title">
            Al vuelo con Raúl Tola
          </div>
          <div class="thumb__description">
            Todos los días 12 pm
          </div>
          <a href="" class="thumb__link">
            Ver programass
          </a>
        </div>
      </div>

      <div class="thumb">
        <div class="thumb__img">
          <img src="<?php echo TEMPLATE; ?>/img/bg-programation-3.png" alt="">
        </div>
        <div class="thumb__content">
          <div class="thumb__title">
            Al vuelo con Raúl Tola
          </div>
          <div class="thumb__description">
            Todos los días 12 pm
          </div>
          <a href="" class="thumb__link">
            Ver programass
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section--block">
  <div class="container">
    <hr class="line--gray">
    <div class="panel">
      <div class="panel__block">
        <div class="block--principal">
          <?php
          $args_principales_destacada = "posts_per_page=1";
          $query_principales_destacada = new WP_Query($args_principales_destacada);
          while ($query_principales_destacada->have_posts()) : $query_principales_destacada->the_post();
          ?>
            <a href="<?php echo the_permalink(); ?>" class="block__img">
              <img src="<?php echo url_thumbnail(); ?>" alt="Foto: <?php echo the_title(); ?>">
            </a>
            <div class="block__content">
              <div class="date">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                  echo '<a class="date__category" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>
                  &bull;';
                }
                ?>
                <?php
                $fecha = get_post_time('d - m - Y');
                echo $fecha;
                ?>
              </div>
              <a href="<?php echo the_permalink(); ?>" class="block__title">
                <?php echo the_title(); ?>
              </a>
              <div class="block__description">
                <?php echo the_excerpt(); ?>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div>
      </div>

      <div class="panel__thumbs">
        <?php
        $args_principales_lateral = array(
          'posts_per_page' => 2,
          'offset' => 1,
        );
        $query_principales_lateral = new WP_Query($args_principales_lateral);
        while ($query_principales_lateral->have_posts()) : $query_principales_lateral->the_post();
        ?>
          <div class="thumb">
            <a href="<?php echo the_title(); ?>" class="thumb__img">
              <img src="<?php echo url_thumbnail(); ?>" alt="">
            </a>
            <div class="thumb__content">
              <div class="date">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                  echo '<a class="date__category" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>
                  &bull;';
                }
                ?>
                <?php
                $fecha = get_post_time('d - m - Y');
                echo $fecha;
                ?>
              </div>
              <a href="<?php echo the_title(); ?>" class="thumb__title">
                <?php echo the_title(); ?>
              </a>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>
    </div>

    <div class="panel">
      <div class="panel__block">
        <?php
        $var_dest = 0;
        $args_secundaria_destacada = array(
          'posts_per_page' => 2,
        );
        $query_secundaria_destacada = new WP_Query($args_secundaria_destacada);
        while ($query_secundaria_destacada->have_posts()) : $query_secundaria_destacada->the_post();
          $var_dest++;
        ?>
          <div class="block">
            <?php if ($var_dest == 2) : ?>
              <a href="<?php echo the_permalink(); ?>" class="block__img">
                <img src="<?php echo url_thumbnail(); ?>" alt="">
              </a>
            <?php endif; ?>
            <div class="block__content">
              <div class="date">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                  echo '<a class="date__category" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>
                  &bull;';
                }
                ?>
                <?php
                $fecha = get_post_time('d - m - Y');
                echo $fecha;
                ?>
              </div>

              <a href="<?php echo the_permalink(); ?>" class="block__title">
                <?php echo the_title(); ?>
              </a>

              <div class="block__description">
                <?php echo the_excerpt(); ?>
              </div>
            </div>
            <?php if ($var_dest == 1) : ?>
              <a href="<?php echo the_permalink(); ?>" class="block__img">
                <img src="<?php echo url_thumbnail(); ?>" alt="">
              </a>
            <?php endif; ?>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>

      <div class="panel__side">
        <div class="title">
          Lo más leído
        </div>
        <div class="news__thumbs">
          <?php
          $args_secundaria_lateral = array(
            'posts_per_page' => 7,
          );
          $query_secundaria_lateral = new WP_Query($args_secundaria_lateral);
          while ($query_secundaria_lateral->have_posts()) : $query_secundaria_lateral->the_post();
          ?>
            <div class="thumb">
              <div class="thumb__content">
                <div class="date">
                  <?php
                  $categories = get_the_category();
                  if (!empty($categories)) {
                    echo '<a class="date__category" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>
                    &bull;';
                  }
                  ?>
                  <?php
                  $fecha = get_post_time('d - m - Y');
                  echo $fecha;
                  ?>
                </div>
                <a href="<?php echo the_permalink(); ?>" class="thumb__title">
                  <?php echo the_title(); ?>
                </a>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <hr class="line--gray">
  </div>
</section>

<section class="section--blue">
  <div class="container">
    <div class="title">
      Deportes
    </div>

    <div class="news">
      <div class="news__title">
        <img src="<?php echo TEMPLATE; ?>/img/icon-triangle.svg" alt="">
        Partidos de la semana
      </div>

      <div class="news--deport">
        <div class="news__cards">
          <div class="card--principal">
            <a href="" class="card__title">
              Universitario vs. Alianza Lima: clásico de la Liga Femenina
            </a>
            <a href="" class="card__img">
              <img src="<?php echo TEMPLATE; ?>/img/news-deport.png" alt="">
            </a>
          </div>

          <div class="group--card">
            <div class="card">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-depor-1.png" alt="">
              </a>
              <div class="card__content">
                <a href="" class="card__title">
                  Perú sub-20 vs. Uruguay sub-20 se vivirá este sábado por Nativa
                </a>
              </div>
            </div>
  
            <div class="card">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-depor-2.png" alt="">
              </a>
              <div class="card__content">
                <a href="" class="card__title">
                  ‘Una liga para todos’: FPF presenta nuevo reglamento para la Liga 1
                </a>
              </div>
            </div>
  
            <div class="card">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-depor-3.png" alt="">
              </a>
              <div class="card__content">
                <a href="" class="card__title">
                  Perú sub-20 vs. Uruguay sub-20 se vivirá este sábado por Nativa
                </a>
              </div>
            </div>
          </div>

        </div>

        <div class="news__twt">
          <a class="twitter-timeline" href="https://twitter.com/somosnativa?ref_src=twsrc%5Etfw" data-height="600">Tweets by somosnativa</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section--tab">
  <div class="container">
    <div class="tab">
      <div class="tab__head">
        <a href="" class="tab__item active">
          Todos las noticias
        </a>
        <a href="" class="tab__item">
          Liga femenina
        </a>
        <a href="" class="tab__item">
          Liga 2
        </a>
        <a href="" class="tab__item">
          Torneo de Reservas
        </a>
        <a href="" class="tab__item">
          Torneo de Futsal
        </a>
      </div>
      <div class="tab__wrapper">
        <div class="news--last">
          <div class="panel__block">
            <?php
            $var_dpt = 0;
            $args_full_deportes = array(
              'category_name' => 'deportes',
              'posts_per_page' => 2,
            );
            $query_deportes_all = new WP_Query($args_full_deportes);
            while ($query_deportes_all->have_posts()) : $query_deportes_all->the_post();
              $var_dpt++;
            ?>
              <div class="block">
                <?php if ($var_dpt == 2) : ?>
                  <a href="<?php echo the_permalink(); ?>" class="block__img">
                    <img src="<?php echo url_thumbnail(); ?>" alt="">
                  </a>
                <?php endif; ?>
                <div class="block__content">
                  <div class="date">
                    <span class="date__category">Deportes</span>
                    &bull;
                    <?php
                    $fecha = get_post_time('d - m - Y');
                    echo $fecha;
                    ?>
                  </div>

                  <a href="<?php echo the_permalink(); ?>" class="block__title">
                    <?php echo the_title(); ?>
                  </a>

                  <div class="block__description">
                    <?php echo the_excerpt(); ?>
                  </div>
                </div>
                <?php if ($var_dpt == 1) : ?>
                  <a href="<?php echo the_permalink(); ?>" class="block__img">
                    <img src="<?php echo url_thumbnail(); ?>" alt="">
                  </a>
                <?php endif; ?>
              </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>

          <div class="group--card">
            <?php
            $args_lateral_deportes = array(
              'category_name' => 'deportes',
              'posts_per_page' => 4,
              'offset' => 2,
            );
            $query_lateral_deportes = new WP_Query($args_lateral_deportes);
            while ($query_lateral_deportes->have_posts()) : $query_lateral_deportes->the_post();
            ?>
              <div class="card--min">
                <a href="<?php echo the_permalink(); ?>" class="card__img">
                  <img src="<?php echo url_thumbnail(); ?>" alt="">
                </a>
                <div class="card__content">
                  <div class="date">
                    <?php
                    $fecha = get_post_time('d - m - Y');
                    echo $fecha;
                    ?>
                  </div>
                  <a href="<?php echo the_permalink(); ?>" class="card__title">
                    <?php echo the_title(); ?>
                  </a>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>
        </div>
        <hr class="line--gray">
      </div>
    </div>
  </div>
</section>

<section class="section--blue">
  <div class="container">
    <div class="title">
      Política
    </div>

    <div class="news">
      <div class="news__title">
        <img src="<?php echo TEMPLATE; ?>/img/icon-triangle.svg" alt="">
        Noticia de la semana
      </div>

      <div class="news--deport">
        <div class="news__cards">
          <div class="card--principal">
            <a href="" class="card__title">
              Jornada de protestas piden la renuncia de Dina Boluarte
            </a>
            <div class="card__img">
              <img src="<?php echo TEMPLATE; ?>/img/bg-politica.png" alt="">
            </div>
          </div>

          <div class="group--card">
            <div class="card">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-depor-1.png" alt="">
              </a>
              <div class="card__content">
                <div class="card__title">
                  Perú sub-20 vs. Uruguay sub-20 se vivirá este sábado por Nativa
                </div>
              </div>
            </div>
  
            <div class="card">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-depor-2.png" alt="">
              </a>
              <div class="card__content">
                <div class="card__title">
                  ‘Una liga para todos’: FPF presenta nuevo reglamento para la Liga 1
                </div>
              </div>
            </div>
  
            <div class="card">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-depor-3.png" alt="">
              </a>
              <div class="card__content">
                <div class="card__title">
                  Perú sub-20 vs. Uruguay sub-20 se vivirá este sábado por Nativa
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="news__twt">
          <a class="twitter-timeline" href="https://twitter.com/somosnativa?ref_src=twsrc%5Etfw" data-height="600">Tweets by somosnativa</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section--tab">
  <div class="container">
    <div class="tab">
      <div class="tab__head">
        <a href="" class="tab__item active">
          Todos las noticias
        </a>
        <a href="" class="tab__item">
          Congreso
        </a>
        <a href="" class="tab__item">
          Protesta Nacional
        </a>
        <a href="" class="tab__item">
          Dina Boluarte
        </a>
      </div>
      <div class="tab__content">
        <div class="news--last">
          <div class="panel__block">
            <div class="block">
              <div class="block__content">
                <div class="date">
                  <span class="date__category">Deportes</span>
                  &bull;
                  10 de Julio, 10:37a.m.
                </div>

                <a href="" class="block__title">
                  Conmebol se dirigió a la FPF por derechos de la Liga 1
                </a>

                <div class="block__description">
                  Este 16 de febrero la Conmebol hizo llegar a la Federación Peruana de Fútbol (FPF) una comunicación oficial referida a los derechos de transmisión de la Liga1 Betsson, que a su vez ha sido enviada a los 19 clubes participantes.
                </div>
              </div>
              <a href="" class="block__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-politica-1.png" alt="">
              </a>
            </div>

            <div class="block">
              <a href="" class="block__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-politica-2.png" alt="">
              </a>
              <div class="block__content">
                <div class="date">
                  <span class="date__category">Deportes</span>
                  &bull;
                  10 de Julio, 10:37a.m.
                </div>

                <a href="" class="block__title">
                  11 clubes de la Liga 1 reafirmaron su apoyo al modelo comercial de la FPF para la transmisión del torneo local
                </a>

                <div class="block__description">
                  Un nuevo capítulo se sumó a la novela de los derechos de televisación. Esta vez, son 11 los clubes que reafirmaron mediante un comunicado el apoyo al modelo comercial establecido por la Federación Peruana de Fútbol para la transmisión del torneo local.
                </div>
              </div>
            </div>
          </div>

          <div class="group--card">
            <div class="card--min">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-1.png" alt="">
              </a>
              <div class="card__content">
                <div class="date">
                  10 de Julio, 10:37a.m.
                </div>
                <a href="" class="card__title">
                  Daniel Marcos, el peruano que debutó con victoria en la UFC
                </a>
              </div>
            </div>
            <div class="card--min">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-2.png" alt="">
              </a>
              <div class="card__content">
                <div class="date">
                  10 de Julio, 10:37a.m.
                </div>
                <a href="" class="card__title">
                  Daniel Marcos, el peruano que debutó con victoria en la UFC
                </a>
              </div>
            </div>
            <div class="card--min">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-3.png" alt="">
              </a>
              <div class="card__content">
                <div class="date">
                  10 de Julio, 10:37a.m.
                </div>
                <a href="" class="card__title">
                  Daniel Marcos, el peruano que debutó con victoria en la UFC
                </a>
              </div>
            </div>
            <div class="card--min">
              <a href="" class="card__img">
                <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-4.png" alt="">
              </a>
              <div class="card__content">
                <div class="date">
                  10 de Julio, 10:37a.m.
                </div>
                <a href="" class="card__title">
                  Daniel Marcos, el peruano que debutó con victoria en la UFC
                </a>
              </div>
            </div>
          </div>
        </div>
        <hr class="line--gray">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="title">
      Economía
    </div>
    <div class="news--last">
      <div class="panel__block">
        <div class="block">
          <div class="block__content">
            <div class="date">
              10 de Julio, 10:37a.m.
            </div>

            <a href="" class="block__title">
              Conmebol se dirigió a la FPF por derechos de la Liga 1
            </a>

            <div class="block__description">
              Este 16 de febrero la Conmebol hizo llegar a la Federación Peruana de Fútbol (FPF) una comunicación oficial referida a los derechos de transmisión de la Liga1 Betsson, que a su vez ha sido enviada a los 19 clubes participantes.
            </div>
          </div>
          <a href="" class="block__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-politica-1.png" alt="">
          </a>
        </div>

        <div class="block">
          <a href="" class="block__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-politica-2.png" alt="">
          </a>
          <div class="block__content">
            <div class="date">
              <span class="date__category">Deportes</span>
              &bull;
              10 de Julio, 10:37a.m.
            </div>

            <a href="" class="block__title">
              11 clubes de la Liga 1 reafirmaron su apoyo al modelo comercial de la FPF para la transmisión del torneo local
            </a>

            <div class="block__description">
              Un nuevo capítulo se sumó a la novela de los derechos de televisación. Esta vez, son 11 los clubes que reafirmaron mediante un comunicado el apoyo al modelo comercial establecido por la Federación Peruana de Fútbol para la transmisión del torneo local.
            </div>
          </div>
        </div>
      </div>

      <div class="group--card">
        <div class="card--min">
          <a href="" class="card__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-1.png" alt="">
          </a>
          <div class="card__content">
            <div class="date">
              10 de Julio, 10:37a.m.
            </div>
            <a href="" class="card__title">
              Daniel Marcos, el peruano que debutó con victoria en la UFC
            </a>
          </div>
        </div>
        <div class="card--min">
          <a href="" class="card__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-2.png" alt="">
          </a>
          <div class="card__content">
            <div class="date">
              10 de Julio, 10:37a.m.
            </div>
            <a href="" class="card__title">
              Daniel Marcos, el peruano que debutó con victoria en la UFC
            </a>
          </div>
        </div>
        <div class="card--min">
          <a href="" class="card__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-3.png" alt="">
          </a>
          <div class="card__content">
            <div class="date">
              10 de Julio, 10:37a.m.
            </div>
            <a href="" class="card__title">
              Daniel Marcos, el peruano que debutó con victoria en la UFC
            </a>
          </div>
        </div>
        <div class="card--min">
          <a href="" class="card__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-4.png" alt="">
          </a>
          <div class="card__content">
            <div class="date">
              10 de Julio, 10:37a.m.
            </div>
            <a href="" class="card__title">
              Daniel Marcos, el peruano que debutó con victoria en la UFC
            </a>
          </div>
        </div>
      </div>
    </div>
    <hr class="line--gray">
  </div>
</section>

<section>
  <div class="container">
    <div class="news">
      <div class="news__title">
        <img class="news__icon--lg" src="<?php echo TEMPLATE; ?>/img/icon-title.png" alt="">
        Edición Especial
      </div>
      <div class="news__cards--blue">
        <div class="card">
          <a href="" class="card__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-1.png" alt="">
          </a>
          <div class="card__content">
            <div class="date">
              <span class="date__category">Deportes</span>
              &bull;
              10 de Julio, 10:37a.m.
            </div>
            <a href="" class="card__title">
              Daniel Marcos, el peruano que debutó con victoria en la UFC
            </a>
          </div>
        </div>

        <div class="card">
          <a href="" class="card__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-1.png" alt="">
          </a>
          <div class="card__content">
            <div class="date">
              <span class="date__category">Deportes</span>
              &bull;
              10 de Julio, 10:37a.m.
            </div>
            <a href="" class="card__title">
              Daniel Marcos, el peruano que debutó con victoria en la UFC
            </a>
          </div>
        </div>

        <div class="card">
          <a href="" class="card__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-1.png" alt="">
          </a>
          <div class="card__content">
            <div class="date">
              <span class="date__category">Deportes</span>
              &bull;
              10 de Julio, 10:37a.m.
            </div>
            <a href="" class="card__title">
              Daniel Marcos, el peruano que debutó con victoria en la UFC
            </a>
          </div>
        </div>

        <div class="card">
          <a href="" class="card__img">
            <img src="<?php echo TEMPLATE; ?>/img/bg-card-min-1.png" alt="">
          </a>
          <div class="card__content">
            <div class="date">
              <span class="date__category">Deportes</span>
              &bull;
              10 de Julio, 10:37a.m.
            </div>
            <a href="" class="card__title">
              Daniel Marcos, el peruano que debutó con victoria en la UFC
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <hr class="line--gray">
  </div>
</section>
<?php get_footer(); ?>