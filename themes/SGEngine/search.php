<?php
get_header(); ?>

<section class="listing-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto text-center">

         	<div class="section-title">
	            <!-- <p class="text-uppercase iq-fw-3 iq-ls-3">Blogs</p> -->
	            <h2 class="title iq-fw-8 text-center">
	            	<?php printf( __( 'Search Results for: %s', 'bloggeroutreach' ), '<span>' . get_search_query() . '</span>' ); ?>
	            </h2>
	        </div>
         </div>
      </div>
      <div class="row listing-content">
      	
         <div class="col-lg-8 order-lg-1 order-2 iq-rmt-40">
            <!-- <div class="sort-list lg-button">
				<div class="iq-widget-search position-relative">
                	<?php //get_search_form(); ?>
                </div>
            </div> -->
            <div class="row">					
			
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
				
				  	get_template_part( 'template-parts/content', 'post-loop' );
				
				endwhile;

					the_posts_pagination( array(
						'mid_size' => 2,
						'prev_text'          => _x( 'Previous', 'previous set of Products' ),
						'next_text'          => _x( 'Next', 'next set of Products' ),
						'screen_reader_text'=> '&nbsp;'
					) );

				else :

					_e( 'Nothing Found', 'bloggeroutreach' );

			endif; ?>
               
               
               
            </div>
        </div>         

        <?php include get_theme_file_path( '/archive-sidebar.php' ); ?>

      </div>
   </div>
</section>
<?php
get_footer();
?>