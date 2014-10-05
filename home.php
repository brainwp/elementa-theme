<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<div id="primary" class="<?php echo odin_full_page_classes(); ?>">
		<div id="content" class="site-content" role="main">
	<p></p>
	<div class="row">
			<div class="col-md-6">
					<span class="nos-vc">Nós</span>
					<div class="descrevendo">
						Somos um coletivo de comunicação do tamanho do seu projeto.
					</div>
			</div>
				
			<div class="col-md-6">
				<span class="nos-vc">Vc</span>
					<div class="descrevendo">
						Você também é parte do coletivo para uma rede de criatividade e inovação.
					</div>
			</div>
	</div>
	<p></p>
	<div class="row">
	<p></p>
				<p>
					<button type="button" class="btn btn-primary btn-lg btn-block">Qual a sua necessidade?</button>
				</p>
	</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
