<?php get_header(); ?>
<section>
	<div class="container">
		<div class="single">
			<div class="single__content">
				<div class="breadcrumbs">
					<a href="" class="breadcrumbs--home">
						<img src="<?php echo TEMPLATE; ?>/img/icon-logo.png" alt="">
					</a>
					<div class="breadcrumbs--arrow">
						<i class="fa-solid fa-angle-right"></i>
					</div>
					<a href="" class="breadcrumbs--category">
						Deportes
					</a>
					<div class="breadcrumbs--arrow">
						<i class="fa-solid fa-angle-right"></i>
					</div>
					<a href="" class="breadcrumbs--single">
						<?php echo the_title(); ?>
					</a>
				</div>
				<div class="title--heading">
					<h2>
						<?php echo the_title(); ?>
					</h2>
				</div>
				<div class="single__subtitle">
					Los partidos de la Liga Femenina son transmitidos por la multiplataforma de Nativa: Facebook, YouTube y señal abierta (18.1 y 20.3), en sus distintas señales a nivel nacional.
				</div>
				<div class="date">
					<span class="date__category">Deportes</span>
					&bull;
					10 de Julio, 10:37a.m.
				</div>
				<div class="single__img">
					<img src="<?php echo url_thumbnail(); ?>" alt="">
				</div>
				<div class="single__description">
					<?php echo the_content(); ?>					
				</div>
				<div class="single__section">
					<h3>
						La conversación en redes
					</h3>
					<div class="single__twt__img">
						<a class="twitter-timeline" href="https://twitter.com/somosnativa?ref_src=twsrc%5Etfw" data-height="600">Tweets by somosnativa</a>
						<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
				<div class="single__section">
					<h3>
						Etiquetas
					</h3>
					<div class="container__tag--gray">
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
				<div class="single__section">
					<h3>
						Más noticias relacionadas
					</h3>
					<div class="news__cards">
						<a href="" class="card">
							<div class="card__img">
								<img src="<?php echo TEMPLATE; ?>/img/bg-depor-1.png" alt="">
							</div>
							<div class="card__content">
								<div class="date">
									10 de Julio, 10:37a.m.
								</div>
								<div class="card__title">
									Perú sub-20 vs. Uruguay sub-20 se vivirá este sábado por Nativa
								</div>
							</div>
						</a>

						<a href="" class="card">
							<div class="card__img">
								<img src="<?php echo TEMPLATE; ?>/img/bg-depor-2.png" alt="">
							</div>
							<div class="card__content">
								<div class="date">
									10 de Julio, 10:37a.m.
								</div>
								<div class="card__title">
									‘Una liga para todos’: FPF presenta nuevo reglamento para la Liga 1
								</div>
							</div>
						</a>

						<a href="" class="card">
							<div class="card__img">
								<img src="<?php echo TEMPLATE; ?>/img/bg-depor-3.png" alt="">
							</div>
							<div class="card__content">
								<div class="date">
									10 de Julio, 10:37a.m.
								</div>
								<div class="card__title">
									Perú sub-20 vs. Uruguay sub-20 se vivirá este sábado por Nativa
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="single__sidebar">
				<a href="" class="logo">
					<img src="<?php echo TEMPLATE; ?>/img/logo-blue.svg" alt="">
				</a>
				<h4>¡Comparte esta noticia!</h4>
				<a href="" class="btn__rrss--twt">
					<i class="fa-brands fa-twitter"></i>
					Comparte en Twitter
				</a>
				<a href="" class="btn__rrss--fb">
					<i class="fa-brands fa-facebook"></i>
					Comparte en Facebook
				</a>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>