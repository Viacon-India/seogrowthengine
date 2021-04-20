<?php get_header();

while(have_posts()): the_post();

	$myvals = get_post_meta(get_the_ID());
	foreach ($myvals as $key => $val) {
	  ${$key} = unserialize($val[0]) ? unserialize($val[0]) : $val[0];
	}


	$case_meta = get_post_meta(get_the_ID());
  $sub_title = $case_meta['sge_single_case_study_sub_title'][0];
  $heading1 = $case_meta['sge_single_case_study_heading1'][0];


	if(!function_exists('casestudy_count')) {
	  function casestudy_count($casestudy_count_data) { ?>

	    <div class="row">
	      <div class="col-md-12">
	        <div class="card-wrapper">


	          <?php
	          if (!empty($casestudy_count_data) && is_array($casestudy_count_data)) {
	          foreach ((array) $casestudy_count_data as $key => $meta_data) : setup_postdata($meta_data);                
	          
	            $title = $meta_data['title'];
	            $number = $meta_data['number'];
	            $desc = $meta_data['desc']; ?>          


	              <div class="c-card">
	                <h4 class="c-hader"><?php echo $number; ?><span class="sub">%</span></h4>
	                <h5><?php echo $title; ?></h5>
	                <h6><?php echo $desc; ?></h6>
	              </div>

	          <?php
	          endforeach;
	          wp_reset_postdata();
	          } ?>


	        </div>
	      </div>
	    </div>



	  <?php
	  }
	}
	 ?>

	
	  <!-- <header class="case-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title"> <?php the_title(); ?></h2>
            <?php echo do_shortcode('[email-subscribers-form id="2"]'); ?>
          </div>
        </div>
      </div>
    </header> -->
    

    <main>
      <section class="zik-zak-card">
        <div class="container">
	        <div class="row">
              <div class="col-md-9">
                <div class="content-wrapper">
                  <div class="fit-back-title-sec">                    
                      <h2 class="title"><?php the_title(); ?></h2>
                      <p class="sub-title"><?php echo $sub_title; ?></p>
                  </div>
                  <div class="content-sec">
                     <h3 class="icon-taitle">
	                    <span class="icon-warpper">                        
	                       <img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/assets/icon/browse.svg" alt="Case Study 3">
	                    </span><?php echo $heading1; ?>
                  	</h3>
                  	<?php the_content(); ?>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="img-card">
                  <?php echo get_the_post_thumbnail(get_the_ID(),'full', array('class' => 'c-image')); ?>
                </div>
              </div>
            </div>

            <?php casestudy_count($casestudy_count_data); ?>

            <?php echo wpautop($sge_single_case_study_sub_content); ?>

        </div>
      </section>

      <section class="page-caption">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h4 class="title"><?php echo $sge_single_case_study_cta_text; ?></h4>
            </div>
            <div class="col-md-4">
              <div class="btn-wrapper">
                <a href="<?php echo $sge_single_case_study_cta_btn_text_url; ?>" class="btn btn-secondary"> <?php echo $sge_single_case_study_cta_btn_text; ?> </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Blogs END -->
<?php endwhile;
get_footer(); ?>