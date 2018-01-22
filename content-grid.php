<?php
/**
 * @package vt-grid-mag
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
	<?php
		// Post Format Preview.
		vt_grid_mag_tags_post_preview();
	?>


    <section class="preview-image-details">
        <header class="entry-header clearfix">
            <?php
                // Post title.
                the_title( '<h3 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h3>' );
            ?>

        </header><!-- .entry-header -->
        
        <div class="entry-summary clearfix">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
        
        <footer class="entry-footer clearfix">
            <?php

                // Comments Link.
                if( ! vt_grid_mag('hide_post_comments') && ( comments_open() || get_comments_number() ) ) {
                    printf( '<div class="comments-link-meta">%s</div>'
                        , sprintf( '<a href="%1$s"><i class="fa fa-comments" aria-hidden="true"></i>%2$s</a>'
                            , esc_url( get_comments_link() )
                            , get_comments_number()
                        )
                    );
                }

                // Post Date.
                if( ! vt_grid_mag('hide_post_date') ) {
                    printf( '<div class="date-meta">%s</div>' 
                        , sprintf( _x( '%s ago', '%s = human-readable time difference', 'vt-grid-mag' )
                            , human_time_diff( get_the_time( 'U' )
                            , current_time( 'timestamp' ) ) 
                        )
                    );
                }
            ?>

        </footer><!-- .entry-footer -->
    </section>
    
	
</article><!-- #post-## -->