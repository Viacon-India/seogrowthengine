<?php
get_header();

$author = get_queried_object();
$author_id = $author->ID;

$author_fname = get_the_author_meta( 'first_name', $author_id );
$author_lname = get_the_author_meta( 'last_name', $author_id );

$fb_link = get_the_author_meta( 'facebook_link', $author_id );
$twtr_link = get_the_author_meta( 'twitter_link', $author_id );
$insta_link = get_the_author_meta( 'instagram_link', $author_id );
?>

<section class="listing-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto text-center">
            <h1 class="text-hide">
                <?php if(!empty($author_fname)) { echo $author_fname.' '.$author_lname; }
                    else { the_author(); } ?>
            </h1>
         	<div class="section-title">
	            <!-- <p class="text-uppercase iq-fw-3 iq-ls-3">Blogs</p> -->
	            <img src="<?php echo esc_url( get_avatar_url( $author_id) ); ?>" class="author-gravtar"/>
	            <h2 class="title iq-fw-8 text-center">
	            	<?php if(!empty($author_fname)) { echo $author_fname.' '.$author_lname; }
                    else { the_author(); } ?>
	            </h2>

	            <ul class="social-links text-left text-md-right">
                  <?php if(!empty($fb_link)) { ?>
                      <li class="link-li">
                        <a href="<?php echo esc_url($fb_link); ?>" target="_blank">
                        	<i class="fa fa-facebook-square"></i></a>
                      </li>
              	  <?php }
              	  if(!empty($twtr_link)) { ?>
                      <li class="link-li">
                        <a href="<?php echo esc_url($twtr_link); ?>" target="_blank">
                        	<i class="fa fa-twitter-square"></i></a>
                      </li>
                  <?php }
              	  if(!empty($insta_link)) { ?>
                      <li class="link-li">
                        <a href="<?php echo esc_url($insta_link); ?>" target="_blank">
                        	<i class="fa fa-instagram-square"></i></a>
                      </li>
              	  <?php } ?>
                </ul>
                
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