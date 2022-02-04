<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-md-4' ); ?>>
	<div class="card mb-4">
		<div class="card-body">
			<div class="card-text entry-content">
				<?php
					if ( has_post_thumbnail() ) :
						?>
						<div class="post-thumbnail"><?=get_the_post_thumbnail( get_the_ID(), array(400,400) );?>
							<div id="taxonomies" class="taxonomies">
								<?php
									$aTags = get_the_tags();
									foreach($aTags as $oTag):
								?>
									<a href='?tag=<?=$oTag->slug;?>'>#<?=$oTag->slug;?></a>
								<?php
									endforeach;
								?>
							</div>
						</div>
					<?php	
					endif;
				?>
		
				<?php //wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'instajam' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div><!-- /.card-text -->

		</div><!-- /.card-body -->

	</div><!-- /.col -->

</article><!-- /#post-<?php the_ID(); ?> -->