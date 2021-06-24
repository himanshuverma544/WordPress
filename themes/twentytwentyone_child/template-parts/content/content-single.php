<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header>

	<div class="entry-content">
	
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);

		echo "<hr>";

		/* Related Posts: Showing */
		 $category = get_the_category();

		 $the_query = new WP_Query( array( 'cat' => $category[0]->term_id ) );

		 $post = get_post();	
 
		 $posts = $the_query->get_posts();

		 echo "<p><b>Related Articles</b></p>";
		 for($i = 0; $i < count($posts); $i++) {

			if($post->post_title == $posts[$i]->post_title) {
				continue;
			}
			else {
				echo "<p><b>".$posts[$i]->post_title."</b><br>"
							 .date("F Y", strtotime($posts[$i]->post_modified))."<br>"
							 ."<a href=".get_permalink($posts[$i]->ID).">Read More</a></p>"; 
			}
		}

		echo "<hr>";

         /* Contact Form */
		 echo "<p><b>Request More Information</b></p>";
		 echo do_shortcode('[contact-form-7 id="149" title="Form"]'); 
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>



</article><!-- #post-<?php the_ID(); ?> -->
