<?php
/**
 * The template for Category pages
 */
get_header(); ?>


<section id="primary" class="content-area container">
		<div id="content" class="site-content" role="main">
			<?php 

			$args = array(
				'post_type'=> 'recipes',
				'category_name' => 'Lazanya',
				'order'    => 'ASC'
				);              

			$the_query = new WP_Query( $args );
			if($the_query->have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'pheme' ), single_cat_title( '', false ) ); ?></h1>
			</header><!-- .archive-header -->
			<div class="list-group">
			<?php
			while ( $the_query->have_posts() ) : 
				$the_query->the_post(); 
				echo '
  <a href="'.get_permalink().'" class="list-group-item list-group-item-action">'.get_the_title().'</a>';

				endwhile;
				
			endif;
			?>
			</div>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();