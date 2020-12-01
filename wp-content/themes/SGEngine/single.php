<?php get_header(); ?>


<?php $post_author_id = get_post_field( 'post_author', $post->ID );
$author_name = get_the_author_meta( 'display_name', $post_author_id );
$description = get_the_author_meta( 'description', $post_author_id );
$designation = get_the_author_meta( 'designation', $post_author_id );

$fb_link = get_the_author_meta( 'facebook_link', $post_author_id );
$twtr_link = get_the_author_meta( 'twitter_link', $post_author_id );
$insta_link = get_the_author_meta( 'instagram_link', $post_author_id );

$author_fname = get_the_author_meta('first_name', $post_author_id);
$author_lname = get_the_author_meta('last_name', $post_author_id);
$authorname = get_the_author_meta('user_nicename', $post_author_id);
?>


<!-- Breadcrumb -->
    <!-- <div class="iq-breadcrumb">
      <div class="iq-breadcrumb-info">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12">
            </div>
          </div>
        </div>
      </div>
      <div class="iq-breadcrumb-img-new">
        <img
          src="<?php //echo get_template_directory_uri(); ?>/images/breadcrumb/02.png"
          class="imge-size img-fluid breadcrumb-two"
          alt="image"
        />
      </div>
    </div> -->
	<!-- Breadcrumb END -->
	
	<div class="iq-breadcrumb">
	</div>

    <!-- Main Content -->
    <div class="main-content mb-4">
      <!-- Blogs -->
      <div class="iq-blogs">
        <div class="container">
          <div class="row">

          	<?php while(have_posts()): the_post();
          	
          	    setPostViews($post->ID); ?>
          	    
	            <div class="col-lg-8 order-lg-1 order-2 iq-rmt-40">
	              <div class="blog-content box-shpe p-3">
	                <div class="blog-img">
	                  <nav class="bredcrumb">
	                    <span><a href="<?php echo home_url(); ?>">Home</a></span> » 
	                    <a href="<?php echo home_url('/blog/'); ?>">Blog</a> » 
	                    <a><?php echo get_the_title(); ?></a>
	                  </nav>
	                  <!-- <li class="" aria-current="page">Blog Grid Right Sidebar</li> -->
	                  <h1 class="title iq-fw-8 mt-3"><?php echo get_the_title(); ?></h1>
	                  <ul class="d-inline-block meta-info">

                        <li class="d-inline-block">
  							<img src="<?php echo esc_url( get_avatar_url( $post_author_id) ); ?>" class="author-gravtar"/>
  							<a href="<?php echo esc_url(get_author_posts_url($post_author_id)); ?>" 
  							title="Posts by <?php echo $authorname; ?>" rel="author">
  								<?php if(!empty($author_fname) && !empty($author_lname)) {
  									echo $author_fname.' '.$author_lname;
  								} else {
  									echo $authorname;
  								} ?></a>
  						  </li>
  						  
  						  
	                    <li class="d-inline-block">
	                      <a href="javascript:void(0)" class="">
	                          <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
	                      </a>
	                    </li>
	                    <?php $categories = get_the_category();
						if ( ! empty( $categories ) ) { ?>
	                    <li class="d-inline-block">
	                      <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>">
	                          <span class="">
	                              <i class="fa fa-folder"></i>
	                              <?php echo $categories[0]->name; ?>
	                          </span>
	                      </a>
	                    </li>
	                    <?php } ?>

	                  </ul>
						
					  <div class="blog-finding" style="float: right;">
	                      <ul class="d-inline-block float-right">
	                        <li class="d-inline-block mr-3">
	                          <a href="javascript:void(0)" style="color: #868894;">
	                          	<i class="fa fa-eye"></i>
	                            <span class="iq-fw-6">
	                            	<?php echo getPostViews($post->ID); ?>
	                            </span>
	                          </a>
	                        </li>
	                      </ul>
	                  </div>
						
	                  <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid mb-4') ); ?>
	                </div>                

	                <div class="content">
	                  <div>
	                    <?php the_content(); ?>
	                    <!-- <div class="blog-finding">
	                      <ul class="d-inline-block float-right">
	                        <li class="d-inline-block mr-3">
	                          <a href="javascript:void(0)">
	                          	<i class="far fa-eye"></i>
	                            <span class="iq-fw-6">
	                            	<?php //echo getPostViews($post->ID); ?>
	                            </span>
	                          </a>
	                        </li>
	                      </ul>
	                    </div> -->
	                    
	                    
	                  </div>
	                </div>

	                <div class="tags iq-mt-80">	                  
	                  <?php $post_tags = get_the_tags();
		              if ( $post_tags ) { ?>
		              
	                  <ul class="iq-tags list-inline">
	                  		<li><h6 class="iq-widget-title iq-tw-6 mb-4">Tags:</h6></li>
	                  		
	                  	    <?php foreach( $post_tags as $tag ) {  ?>
	                    	<li>
	                    	    <!-- <div class="md-chip-icon">
									<i class="fa fa-tag" aria-hidden="true"></i>
								</div> -->
	                    		<a href="<?php echo get_term_link($tag); ?>">
	                    			<?php echo $tag->name; ?>                    				
	                    		</a>
	                    	</li>
	                    <?php } ?>
                            
	                  <?php } ?>
	                  </ul>
	                </div>
	              </div>

	              <section class="author-bio-section box-shpe p-3">
	              	
		                <!-- <h5 class="author-title">About the Author</h5> -->
		                <div class="row">
		                  <div class="col-md-12">
		                    <div class="img-wrapper">
		                      <img src="<?php echo esc_url( get_avatar_url( $post_author_id ) ); ?>"
		                        class="img-fluid" alt="<?php echo $author_name; ?>-image"/>
		                    </div>
							  
							  <div class="content">

		                      <div class="author-details">
		                        <div class="row">
		                          <div class="col-md-6">
		                            <h6 class="name m-0">
		                            	<a href="<?php echo esc_url( get_author_posts_url( $post_author_id ) ); ?>">
		                            		<?php echo $author_name; ?>
		                            	</a>
		                            </h6>
		                            <h6 class="designation small"><?php echo $designation; ?></h6>
		                          </div>
		                          <div class="col-md-6">
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
		                          </div>
		                        </div>
		                      </div>

		                      <div class="author-bio">
		                        <p><?php echo $description; ?></p>
		                      </div>
		                      
		                    </div>
		                  </div>
		                  <div class="col-md-10">
		                    
		                  </div>
		                </div>
	              </section>
	            </div>
            <?php endwhile; ?>

            <?php get_sidebar(); ?>

          </div>
        </div>
      </div>
    </div>
    
    <!-- Blogs END -->
<?php get_footer(); ?>