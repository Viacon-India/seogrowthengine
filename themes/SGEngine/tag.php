<?php
get_header(); ?>

<section class="listing-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto text-center">
            <h1 class="text-hide"><?php single_tag_title(); ?></h1>
         	<div class="section-title">
	            <!-- <p class="text-uppercase iq-fw-3 iq-ls-3">Blogs</p> -->
	            <h2 class="title iq-fw-8 text-center">
	            	Tag: <?php single_tag_title(); ?>
	            </h2>
	            <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
	        </div>
         </div>
      </div>
      <div class="row listing-content">
        <div class="col-lg-8 order-lg-1 order-2 iq-rmt-40">

        	<?php if ( have_posts() ) : ?>

            <div class="row">					
			
				<?php
				while ( have_posts() ) : the_post();
				
				  	get_template_part( 'template-parts/content', 'post-loop' );
				
				endwhile; ?>

			</div>

			<div class="clearfix"></div>
			<div class="row">
				<div class="custom-pagination">
					<?php the_posts_pagination( array(
						'mid_size' => 2,
						'prev_text'          => _x( 'Previous', 'previous set of Posts' ),
						'next_text'          => _x( 'Next', 'next set of Posts' ),
						'screen_reader_text'=> '&nbsp;'
					) ); ?>
				</div>
			</div>

				<?php else :

					echo '<div class="row">';

						_e( 'Nothing Found', 'bloggeroutreach' );

					echo '</div>';

			endif; ?>               
            
        </div>         

        <?php include get_theme_file_path( '/archive-sidebar.php' ); ?>

      </div>
   </div>
</section>

<?php
get_footer();
?>