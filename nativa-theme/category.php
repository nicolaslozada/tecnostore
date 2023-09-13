<?php get_header(); ?>
<div class="portada--category">
	<div class="container" style="background-image: url('<?php echo TEMPLATE; ?>/img/logo-marca-agua.png');">
		<div class="container__category">
			<div class="category">
				<img class="category__icon" src="<?php echo TEMPLATE; ?>/img/icon-deport.svg" />
				<div class="category__title"><?php echo single_cat_title(); ?></div>
			</div>
		</div>
		<div class="container__tag">
			<div class="tag">
				<a href="" class="tag__item">
					<b>#</b>
					Liga Femenina
				</a>
				<a href="" class="tag__item">
					<b>#</b>
					Clásico
				</a>
				<a href="" class="tag__item">
					<b>#</b>
					Liga 2
				</a>
				<a href="" class="tag__item">
					<b>#</b>
					Alianza Lima
				</a>
				<a href="" class="tag__item">
					<b>#</b>
					Universitario
				</a>
				<a href="" class="tag__item">
					<b>#</b>
					Torneo de Reservas
				</a>
				<a href="" class="tag__item">
					<b>#</b>
					Conmebol
				</a>
				<a href="" class="tag__item">
					<b>#</b>
					Copa Libertadores
				</a>
				<a href="" class="tag__item">
					<b>#</b>
					Selección Peruana
				</a>
				<a href="" class="tag__item">
					<b>#</b>
					Eliminatorias
				</a>
			</div>
		</div>
	</div>
</div>

<section class="jumbotron" style="background-image: url('<?php echo TEMPLATE; ?>/img/bg-category.png');">
	<div class="bg-opacity"></div>
	<div class="container">
		<div class="jumbotron__content">
			<div class="date">
				10 de Julio, 10:37a.m.
			</div>

			<a href="" class="jumbotron__title">
				Universitario vs. Alianza Lima: clásico de la Liga Femenina rompió récord de audiencia
			</a>

			<div class="jumbotron__description">
				<p>
					El clásico femenino se lo llevó Universitario de Deportes Femenino con victoria por la mínima diferencia sobre Alianza Lima Femenino, pero los que más disfrutaron fueron los espectadores en el estadio Monumental y también.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="section--blue">
	<div class="container">

		<div class="news">
			<div class="news__title">
				<img class="news__icon" src="<?php echo TEMPLATE; ?>/img/icon-triangle.svg" alt="">
				Partidos de la semana
			</div>

			<div class="news--deport">
				<div class="news__cards">
					<a href="" class="card--principal">
						<div class="card__title">
							Universitario vs. Alianza Lima: clásico de la Liga Femenina
						</div>
						<div class="card__img">
							<img src="<?php echo TEMPLATE; ?>/img/news-deport.png" alt="">
						</div>
					</a>

					<a href="" class="card">
						<div class="card__img">
							<img src="<?php echo TEMPLATE; ?>/img/bg-depor-1.png" alt="">
						</div>
						<div class="card__content">
							<div class="card__description">
								Perú sub-20 vs. Uruguay sub-20 se vivirá este sábado por Nativa
							</div>
						</div>
					</a>

					<a href="" class="card">
						<div class="card__img">
							<img src="<?php echo TEMPLATE; ?>/img/bg-depor-2.png" alt="">
						</div>
						<div class="card__content">
							<div class="card__description">
								‘Una liga para todos’: FPF presenta nuevo reglamento para la Liga 1
							</div>
						</div>
					</a>

					<a href="" class="card">
						<div class="card__img">
							<img src="<?php echo TEMPLATE; ?>/img/bg-depor-3.png" alt="">
						</div>
						<div class="card__content">
							<div class="card__description">
								Perú sub-20 vs. Uruguay sub-20 se vivirá este sábado por Nativa
							</div>
						</div>
					</a>
				</div>

				<div class="news__twt">
					<a class="twitter-timeline" href="https://twitter.com/somosnativa?ref_src=twsrc%5Etfw" data-height="600">Tweets by somosnativa</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="tab--vertical">
			<div class="tab__head">
				<div class="tab__title">
					Programación
				</div>

				<div class="tab__head__item">
					<a href="#tab1" class="tab__item active">
						Todas las noticias
					</a>
					<a href="#tab2" class="tab__item">
						Liga femenina
					</a>
					<a href="#tab3" class="tab__item">
						Liga 2
					</a>
					<a href="#tab4" class="tab__item">
						Torneo de Reservas
					</a>
					<a href="#tab5" class="tab__item">
						Torneo de Futsal
					</a>
				</div>

				<div class="shared">
					<div class="shared__logo">
						<img src="<?php echo TEMPLATE; ?>/img/logo-nativa.png" alt="">
					</div>
					<div class="shared__text">
						Entérate de lo último sobre Deportes en nuestras redes sociales
					</div>
					<div class="shared__rrss">
						<a href="">
							<i class="fa-brands fa-twitter"></i>
						</a>
						<a href="">
							<i class="fa-brands fa-facebook"></i>
						</a>
						<a href="">
							<i class="fa-brands fa-youtube"></i>
						</a>
						<a href="">
							<i class="fa-brands fa-instagram"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="tab__wrapper">
				<div id="tab1 tab1-content" class="tab__wrapper__content active">
					<?php while(have_posts()): the_post(); ?>
					<div class="block">
						<a href="<?php echo the_permalink(); ?>" class="block__img">
							<img src="<?php echo url_thumbnail(); ?>" alt="">
						</a>
						<div class="block__content">
							<div class="date">
								<span class="date__category">Deportes</span>
								&bull;
								10 de Julio, 10:37a.m.
							</div>

							<a href="" class="block__title">
								<?php echo the_title(); ?>
							</a>

							<div class="block__description">
								<?php echo the_excerpt(); ?>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>

				<div id="tab2 tab2-content" class="tab__wrapper__content">
					<div class="block">
						<a href="" class="block__img">
							<img src="<?php echo TEMPLATE; ?>/img/bg-tab-1.png" alt="">
						</a>
						<div class="block__content">
							<div class="date">
								<span class="date__category">Deportes</span>
								&bull;
								10 de Julio, 10:37a.m.
							</div>

							<a href="" class="block__title">
								11 clubes de la Liga 1 reafirmaron su apoyo al modelo comercial de la FPF para la transmisión del
								torneo local
							</a>

							<div class="block__description">
								Un nuevo capítulo se sumó a la novela de los derechos de televisación. Esta vez, son 11 los clubes que
								reafirmaron mediante un comunicado el apoyo al modelo comercial establecido por la Federación Peruana
								de Fútbol para la transmisión del torneo local.
							</div>
						</div>
					</div>

					<div class="block">
						<a href="" class="block__img">
							<img src="<?php echo TEMPLATE; ?>/img/bg-tab-2.png" alt="">
						</a>
						<div class="block__content">
							<div class="date">
								<span class="date__category">Deportes</span>
								&bull;
								10 de Julio, 10:37a.m.
							</div>

							<a href="" class="block__title">
								11 clubes de la Liga 1 reafirmaron su apoyo al modelo comercial de la FPF para la transmisión del
								torneo local
							</a>

							<div class="block__description">
								Un nuevo capítulo se sumó a la novela de los derechos de televisación. Esta vez, son 11 los clubes que
								reafirmaron mediante un comunicado el apoyo al modelo comercial establecido por la Federación Peruana
								de Fútbol para la transmisión del torneo local.
							</div>
						</div>
					</div>

					<div class="block">
						<a href="" class="block__img">
							<img src="<?php echo TEMPLATE; ?>/img/bg-tab-3.png" alt="">
						</a>
						<div class="block__content">
							<div class="date">
								<span class="date__category">Deportes</span>
								&bull;
								10 de Julio, 10:37a.m.
							</div>

							<a href="" class="block__title">
								11 clubes de la Liga 1 reafirmaron su apoyo al modelo comercial de la FPF para la transmisión del
								torneo local
							</a>

							<div class="block__description">
								Un nuevo capítulo se sumó a la novela de los derechos de televisación. Esta vez, son 11 los clubes que
								reafirmaron mediante un comunicado el apoyo al modelo comercial establecido por la Federación Peruana
								de Fútbol para la transmisión del torneo local.
							</div>
						</div>
					</div>

					<div class="block">
						<a href="" class="block__img">
							<img src="<?php echo TEMPLATE; ?>/img/bg-tab-4.png" alt="">
						</a>
						<div class="block__content">
							<div class="date">
								<span class="date__category">Deportes</span>
								&bull;
								10 de Julio, 10:37a.m.
							</div>

							<a href="" class="block__title">
								11 clubes de la Liga 1 reafirmaron su apoyo al modelo comercial de la FPF para la transmisión del
								torneo local
							</a>

							<div class="block__description">
								Un nuevo capítulo se sumó a la novela de los derechos de televisación. Esta vez, son 11 los clubes que
								reafirmaron mediante un comunicado el apoyo al modelo comercial establecido por la Federación Peruana
								de Fútbol para la transmisión del torneo local.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>