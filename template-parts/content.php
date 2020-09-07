<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogKu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="thumbnail">
			<?php template_blogku_fast_post_thumbnail(); ?>
		</div> 
		<div class="content">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						template_blogku_fast_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php
				the_excerpt();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'template-blogku-fast' ),
						'after'  => '</div>',
					)
				);
				?>
				
			</div><!-- .entry-content -->
		</div>
	</div>
	<hr>
</article><!-- #post-<?php the_ID(); ?> -->
