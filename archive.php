<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogKu
 */

get_header();
?>
<div class="row">
	<div class="share">
		<ul>
			<li>
				<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook" onclick="window.open(this.href); return false;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 10h-2v2h2v6h3v-6h1.82l.18-2h-2v-.833c0-.478.096-.667.558-.667h1.442v-2.5h-2.404c-1.798 0-2.596.792-2.596 2.308v1.692z"/></svg></a>
			</li>
			<li>
				<a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php the_permalink(); ?>" title="Share this post on Twitter" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.5 8.778c-.441.196-.916.328-1.414.388.509-.305.898-.787 1.083-1.362-.476.282-1.003.487-1.564.597-.448-.479-1.089-.778-1.796-.778-1.59 0-2.758 1.483-2.399 3.023-2.045-.103-3.86-1.083-5.074-2.572-.645 1.106-.334 2.554.762 3.287-.403-.013-.782-.124-1.114-.308-.027 1.14.791 2.207 1.975 2.445-.346.094-.726.116-1.112.042.313.978 1.224 1.689 2.3 1.709-1.037.812-2.34 1.175-3.647 1.021 1.09.699 2.383 1.106 3.773 1.106 4.572 0 7.154-3.861 6.998-7.324.482-.346.899-.78 1.229-1.274z"/></svg></a>
			</li>
			<li>
				<a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Share this post on Pinterest"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 6c-3.313 0-6 2.686-6 6 0 2.542 1.581 4.712 3.812 5.587-.052-.475-.1-1.203.022-1.721.108-.468.703-2.982.703-2.982s-.181-.359-.181-.891c0-.834.485-1.457 1.087-1.457.512 0 .759.385.759.845 0 .516-.328 1.285-.497 1.998-.142.598.3 1.084.889 1.084 1.066 0 1.887-1.124 1.887-2.747 0-1.437-1.032-2.441-2.507-2.441-1.707 0-2.709 1.28-2.709 2.604 0 .516.199 1.068.446 1.368.049.06.056.112.041.173l-.165.68c-.027.11-.088.134-.201.081-.75-.349-1.219-1.444-1.219-2.325 0-1.893 1.375-3.63 3.964-3.63 2.082 0 3.7 1.482 3.7 3.465 0 2.068-1.304 3.732-3.114 3.732-.608 0-1.179-.315-1.375-.689l-.374 1.426c-.135.521-.501 1.175-.746 1.573.562.173 1.16.267 1.778.267 3.313 0 6-2.687 6-6 0-3.314-2.687-6-6-6z"/></svg></a>
			</li>
		</ul>
	</div>
	<div class="main">
		<main id="primary" class="site-main">
			

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
					<div class="ads-header">
						<?php dynamic_sidebar( 'header-ads' ); ?>
					</div>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				id_pagination();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div>
	<div class="side">
				
		<?php
		get_sidebar();?>
	</div>
</div>

<?php
get_footer();?>
