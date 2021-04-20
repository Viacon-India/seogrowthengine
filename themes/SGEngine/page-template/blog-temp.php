<?php
/* Template Name: Blog Temp */
get_header();
?>

    

	<!-- <section class="iq-breadcrumb blog-bg-banner">
	  <h1 class="text-hide">Link Building Campaign</h1>
      <div class="iq-breadcrumb-info">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-7 align-self-center">
              <h2 class="iq-fw-8 mb-3">How to Start a <br>Link Building Campaign</h2>
              <nav aria-label="breadcrumb pb-3">
                <p>Learn how to build white hat links to your site easily and effectively</p>
				        <a class="download-link" href="#">Download eBook</a>
              </nav>
            </div>
            <div class="col-md-5">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog3.png" class="img-fluid" alt="image" />
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Main Content -->
    <div class="main-content">
      

      <section class="iq-blogs">
        <div class="container">
         <div class="section-title">
            <!-- <p class="text-uppercase iq-fw-3 iq-ls-3">Blogs</p> -->
            <h2 class="title iq-fw-8 text-center">Our Latest Blogs</h2>
          </div>

          <div class="row">

            <?php 
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            
            $args = array( 'post_type' => 'post',
            'post_status'=>'publish', 
            'posts_per_page' => 12,
            'paged' => $paged,
            'order'     => 'DESC',
            'orderby'   => 'date',  );

            $the_query = new WP_Query($args);
            ?> 
            <?php if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();

                get_template_part( 'template-parts/content','post-loop' );

            endwhile; ?>


          </div>
          <div class="row">
            <div class="col-sm-12">
              <nav class="">
                <div class="custom-pagination">
                  <?php
                  echo paginate_links( array(
                    'format'  => 'page/%#%',
                    'current' => $paged,
                    'total'   => $the_query->max_num_pages,
                    'mid_size'        => 2,
                    'prev_text'       => __('&laquo; Previous'),
                    'next_text'       => __('Next &raquo;')
                  ) ); ?>
                </div>
              </nav>
              <nav>

              

              </nav>
            </div>
          </div>

          <?php endif; ?>


        </div>
      </section>

      <!-- Blogs -->
      <section class="categories odd-sections">
        <div class="container">
		  <div class="section-title">
            <h2 class="title iq-fw-8 text-center">Cateories</h2>
          </div>
          <div class="small-grid">

            <?php $category = get_categories();  

            foreach($category as $cat) : setup_postdata($post); ?>

              <?php $cat_icon = get_field('icon', $cat); ?>

              <div class="main-blog p-2 py-3" >				  
                <div class="row">      
                  <?php if(!empty($cat_icon)) { ?>       
                    <div class="col-12">                      
                      <img src="<?php echo $cat_icon['sizes']['thumbnail']; ?>" alt="<?php echo $cat->name; ?>-image" class="cat-image">
                    </div>
                  <?php } ?>
                  <div class="col-12 pt-2">
                    <span class="label"> <?php echo $cat->name; ?></span>                      
                  </div>
                  <div class="col-12">
                    <p><?php echo substr($cat->description,0,100); ?></p>
                  </div>
              </div>				  
              <div class="readmore"><a href="<?php echo get_category_link($cat); ?>" class="btn btn-secondary">Explore</a></div>
            </div>
          
            <?php endforeach; ?>


          </div>
        </div>
      </section>


      <section class="iq-blogs popular-posts">
        <div class="container">
         <div class="section-title">
            <h2 class="title iq-fw-8 text-center">Our Popular Posts</h2>
          </div>

          <div class="row">
            <?php            
            $popular_args = array( 'post_type' => 'post',
            'post_status'=>'publish', 
            'posts_per_page' => 9,
            'paged' => $paged,
            'order'     => 'DESC',
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            );

            $popular_query = new WP_Query($popular_args);
            ?> 
            <?php if ( $popular_query->have_posts() ) :
            while ( $popular_query->have_posts() ) : $popular_query->the_post();

                get_template_part( 'template-parts/content','post-loop' );

            endwhile; ?>


          </div>
          

          <?php endif; ?>


        </div>
      </section>
	  <!-- <section class="call-to-action-sec odd-sections">
        <div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="https://www.authorityhacker.com/wp-content/uploads/2019/06/home-illustration.png" 							style="width: 100%;">
				</div>
				<div class="col-md-8">
					<h3>
						Want To Know More About Us
					</h3>
					<div class="read">
						<a href="">Explore</a>
					</div>
				</div>
			</div>
	    </div>
	  </section> -->
		
	  <!-- <section class="call-to-action-sec odd-sections">
        <div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="https://www.authorityhacker.com/wp-content/uploads/2019/06/home-illustration.png" style="width: 100%;" alt="subscribe-image">
				</div>
				<div class="col-md-8">
					<h3>
						Learn How To Build an Ultra Powerful Link Building Campaign With Us
					</h3>
					<p>
						Learn how to build high quality backlinks to your site easily and effectively with proven methodologies.
					</p>
					<?php //echo do_shortcode('[email-subscribers-form id="2"]'); ?>
				</div>
			</div>
	    </div>
	  </section> -->
		


    </div>

    
<?php get_footer(); ?>