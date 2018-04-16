<?php get_header(); ?>
	<div class="container">	
	<div class="entry-title">
		<h1 class="recipes_title"><?php the_title(); ?>
	</div>
	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
						'after'  => '</div>',
					) );
				?>
				
				<?php 
				$ingredients = get_field('ingredients');
				echo '<h2>Ingredients</h2>';
				echo $ingredients;				
				?>
				
				
			</div><!-- .entry-content -->		
			<h2>Other Recipes:</h2>			
			<div class="list_of_products" id="list_of_products">
				<div class="content">
					<?php
					$query = new WP_Query(array(
						'post_type' => 'recipes',
						'posts_per_page' => 6,
						'post_status' => 'publish',
						'orderby' => 'rand'
					));
					
					while ($query->have_posts()) {
						$query->the_post();
						$title_post =  get_the_title();
						echo '<a href="'.get_permalink().'">'.$title_post.'</a>';
						echo "<br>";
					}

					wp_reset_query();
					?>

				</div>
			</div>
			
			<div class="entry-button">
				<?php
				$cats=get_the_category();
				foreach($cats as $cat){
					if($cat->category_parent == 0 && $cat->term_id != 1){
						echo '<p class="link"><a href="'.get_category_link($cat->term_id ).'" class="btn btn-dark">Return</a></p>';
					}
					break;
				}
				?>
			</div>
			
		</article><!-- #post-## -->


			
	<?php endwhile; // end of the loop. ?>
	</div>
<?php get_footer(); ?>