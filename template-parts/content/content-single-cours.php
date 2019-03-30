<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>
//////single-cours.php/////
	<div class="entry-content">
		<div class="wp-block-media-text alignwide" style="grid-template-columns:30% auto">
			<div class="wp-block-media-text__content">
				<?php
					the_content();
                ?>
                
                <?php if( get_field('heures') ): ?>
    <h3>Nombres d'heures :</h3> <p><?php the_field('heures');?> heures</p>
    <?php endif; ?>

             <?php if( get_field('professeurs') ): ?>
    <h3>Professeurs :</h3> <p><?php the_field('professeurs');?></p>
    <?php endif; ?>

        <h3> Projets : </h3>
            <?php
				$image = get_field('projets');
				$size = 'large'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
			?>      
    
			</div>
		</div>
    </div><!-- .entry-content -->
    
	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
	<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
