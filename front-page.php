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
	<div class="row">
	<div class="spacer-50"></div>
				<div class="col-md-6 call-to-action">
					<a href="<?php echo home_url('qual-a-sua-necessidade'); ?>"><button type="button" class="btn btn-primary btn-lg btn-block">Qual a sua necessidade?</button></a>
				</div>
	</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
