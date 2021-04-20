<?php
/* Template Name: Services Page */
get_header();

$myvals = get_post_meta(get_the_ID());
foreach ($myvals as $key => $val) {
  ${$key} = unserialize($val[0]) ? unserialize($val[0]) : $val[0];
}

?>



    <header class="service-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2 order-md-1">
            <div class="content-part">
              <div class="title-sec">
                <h1 class="title">
                  <?php echo $service_banner_title; ?>
                </h1>
                <p class="sub-title text-muted"><?php echo $service_banner_cont; ?></p>
              </div>
              <div class="btn-section">
                <a class="btn btn-primary" href="<?php echo $service_banner_first_btn_url; ?>"> 
                  <?php echo $service_banner_first_btn_text; ?>
                </a>
                <a class="btn btn-secondary" href="<?php echo $service_banner_second_btn_url; ?>"> 
                  <?php echo $service_banner_second_btn_text; ?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-1 order-md-2">
            <div class="banner-image">
              <!-- <img src="./assets/images/services/banner.png" alt="" /> -->
              <video loop autoplay muted>
                <source src="<?php echo $service_banner_video_url; ?>" type="video/mp4" />
              </video>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="clients-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img
                class="sec-image"
                src="<?php echo $service_guest_image; ?>"
                alt="guest-side-image"
              />
            </div>
            <div class="col-md-6">
              <div class="title-container">
                <div class="sec-title">
                  <h2 class="title">
                    <?php echo $service_guest_title; ?>
                  </h2>
                  <h3 class="sub-title"><?php echo $service_guest_sub_title; ?></h3>
                </div>
              </div>
            </div>

            <?php if (!empty($service_guest_data) && is_array($service_guest_data)) { ?>
            <div class="col-md-12">
              <div class="trusted-wrapper">
                <div class="swiper-wrapper">

                  <?php
                  foreach ((array) $service_guest_data as $guest_data) : setup_postdata($guest_data);
                  //print_r($p_data);
                  
                    $title = $guest_data['title'];
                    $image = $guest_data['image']; ?>

                  <div class="swiper-slide">
                    <a class="c-card" href="#">
                      <img class="c-image" src="<?php echo $image; ?>" alt="<?php echo $title; ?>"/>
                      <h6 class="c-title"><?php echo $title; ?></h6>
                    </a>
                  </div>

                  <?php endforeach;
                  wp_reset_postdata();
                  ?>


                </div>

                <div class="swiper-pagination"></div>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>
      </section>

      <!------------- New Pricing ------------>
      <section class="pricing-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">
                  <?php echo $service_pricing_title; ?>
                </h2>
                <p><?php echo $service_pricing_cont; ?></p>
              </div>


              
              <div class="wrapper">
                <nav class="tabs">
                  <div class="selector"></div>
                  <?php $pricing_data = get_field( "pricing_type", get_the_ID() );
                  if (!empty($pricing_data) && is_array($pricing_data)) {
                  $fs = 1;
                  foreach ((array) $pricing_data as $p_data) : setup_postdata($p_data);
                                
                    $type = $p_data['type'];

                      ?>

                    <a href="#" data-body="<?php get_custom_slug($type); ?>" class="<?php if($fs ==1) { echo 'active'; } ?>"><?php echo $type; ?></a>
                    <!-- <a href="#" data-body="tda"><i class="fa fa-file-text" aria-hidden="true"></i>Traffic + DA</a> -->

                  <?php $fs++;
                  endforeach;
                  wp_reset_postdata();
                  } ?>
                </nav>


                <section class="tab-body">

                    <?php $pricing_offer_arr = [ 'Website Traffic- 100+',
                          'Content Length- 600+ Words',
                          '100% Manual Outreach',
                          'Niche-Specific Sites Only',
                          '100% Do-Follow Links',
                          '1 Anchor Text/Target URL', 
                          '48-Hour Delivery Promise', 
                          'SEO Optimised Content'
                    ];                  
                    //print_r($pricing_offer_arr);                      
                    if (!empty($pricing_data) && is_array($pricing_data)) {
                      $cs = 1;
                      foreach ((array) $pricing_data as $p_data) : setup_postdata($p_data);
                        $type = $p_data['type'];
                      ?>

                      <section class="<?php get_custom_slug($type); ?>">
                        <div class="authority-wrapper">
                          
                          <?php $cardc=1;
                          foreach ((array) $p_data['data'] as $new_data) : setup_postdata($new_data); ?>

                          <div class="c-card <?php if($cardc == 1) { echo 'active'; } ?>">
                            <div class="c-title-sec">
                              <h5 class="title"><?php echo $new_data['title']; ?></h5>
                              <p class="sub-title"><?php echo $new_data['sub_title']; ?></p>
                            </div>

                            <div class="price">
                              <span class="left-dolor"> $ <?php echo $new_data['original_price']; ?> </span>
                              <span class="right-dolor"> $ <?php echo $new_data['special_price']; ?> </span>
                            </div>

                            <div class="card-list">
                              <h6 class="list-title"><?php echo $new_data['sub_content']; ?></h6>
                              <ul class="list-ul">
                                  
                                  <?php foreach ((array) $pricing_offer_arr as $featues_data) : setup_postdata($featues_data);
                                  
                                  if($featues_data == $new_data['point_1'] || $featues_data == $new_data['point_2'] || $featues_data == $new_data['point_3'] || $featues_data == $new_data['point_4'] || $featues_data == $new_data['point_5'] || $featues_data == $new_data['point_6'] || $featues_data == $new_data['point_7'] || $featues_data == $new_data['point_8']) { ?>  
                                  
                                      <li class="list-li">
                                  <?php } else { ?>
                                      <li class="list-wrong-li">
                                  <?php } ?>
                                  
                                      <?php echo $featues_data; ?></li>
                                      
                                  <?php
                                  endforeach;
                                  wp_reset_postdata(); ?>
                                  
                              </ul>
                            </div>

                            <div class="actions">
                              <a href="<?php echo (!empty($new_data['add_to_cart_url'])) ? $new_data['add_to_cart_url'] : '#'; ?>" class="add-to-cart">Add to Cart</a>
                              <a href="#" class="see-all">(Unlock Coupon Code)</a>
                            </div>
                          </div>
                      
                          <?php $cardc++;
                          endforeach;
                          wp_reset_postdata(); ?>
                        
                      
                        </div>
                      </section>


                  <?php $cs++;
                  endforeach;
                  wp_reset_postdata();
                  } ?>

                </section>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!------------------------------->
      <?php /******** OLD Pricing Section **********
      <section class="pricing-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">
                  <?php echo $service_pricing_title; ?>
                </h2>
                <p><?php echo $service_pricing_cont; ?></p>
              </div>

                <div class="authority-nav">

                  <?php //echo get_the_ID(); echo 'dfsdgsfg';
                  $pricing_data = get_field( "pricing_type", get_the_ID() );
                  //echo '<pre>';
                  //print_r($pricing_data);
                  //echo '</pre>';
                  
                  if (!empty($pricing_data) && is_array($pricing_data)) {
                  $fs = 1;
                  foreach ((array) $pricing_data as $p_data) : setup_postdata($p_data);
                  //print_r($p_data);
                  
                    $type = $p_data['type']; ?>              
                  
                      <a class="nav-card" href="#"><span><?php echo $type; ?></span></a>

                    <?php $fs++;
                    endforeach;
                    wp_reset_postdata();
                    } ?>

                  </div>


                <?php
                
                $pricing_offer_arr = [ 'Website Traffic- 100+',
                        'Content Length- 600+ Words',
                        '100% Manual Outreach',
                        'Niche-Specific Sites Only',
                        '100% Do-Follow Links',
                        '1 Anchor Text/Target URL', 
                        '48-Hour Delivery Promise', 
                        'SEO Optimised Content'
                ];
                
                //print_r($pricing_offer_arr);
                    
                if (!empty($pricing_data) && is_array($pricing_data)) {
                  $cs = 1;
                  foreach ((array) $pricing_data as $p_data) : setup_postdata($p_data);
                  //print_r($p_data); ?>
                  
                  <div class="authority-wrapper">
                      
                      
                    <?php foreach ((array) $p_data['data'] as $new_data) : setup_postdata($new_data); ?>

                    <div class="c-card">
                      <div class="c-title-sec">
                        <h5 class="title"><?php echo $new_data['title']; ?></h5>
                        <p class="sub-title"><?php echo $new_data['sub_title']; ?></p>
                      </div>

                      <div class="price">
                        <span class="left-dolor"> $ <?php echo $new_data['original_price']; ?> </span>
                        <span class="right-dolor"> $ <?php echo $new_data['special_price']; ?> </span>
                      </div>

                      <div class="card-list">
                        <h6 class="list-title"><?php echo $new_data['sub_content']; ?></h6>
                        <ul class="list-ul">
                            
                            <?php foreach ((array) $pricing_offer_arr as $featues_data) : setup_postdata($featues_data);
                            
                            if($featues_data == $new_data['point_1'] || $featues_data == $new_data['point_2'] || $featues_data == $new_data['point_3'] || $featues_data == $new_data['point_4']) { ?>  
                            
                                <li class="list-li">
                            <?php } else { ?>
                                <li class="list-wrong-li">
                            <?php } ?>
                            
                                <?php echo $featues_data; ?></li>
                                
                            <?php
                            endforeach;
                            wp_reset_postdata(); ?>
                            
                        </ul>
                      </div>

                      <div class="actions">
                        <a href="<?php echo $new_data['add_to_cart_url']; ?>" class="add-to-cart">Add to Cart</a>
                        <a href="#" class="see-all">(Unlock Coupon Code)</a>
                      </div>
                    </div>
                    
                <?php endforeach;
                wp_reset_postdata(); ?>

                    

                  </div>
                  
                  <?php $cs++;
                endforeach;
                wp_reset_postdata();
                } ?>
            </div>
          </div>
        </div>
      </section>
      <?php *************/ ?>

      <section class="how-it-works-section">
        <img
          class="img-right"
          src="<?php echo SGE_URI; ?>/assets/images/services/searching.png"
          alt=""
        />
        <img class="img-left" src="<?php echo SGE_URI; ?>/assets/images/services/girl.png" alt="" />
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">
                  <?php echo $service_how_it_works_title; ?>                  
                </h2>
                <p class="sub-title"><?php echo $service_how_it_works_sub_cont; ?></p>
              </div>

              <div class="card-wrapper">

                <?php if (!empty($service_pricing_data) && is_array($service_how_it_works_data)) {
                  $fs = 1;
                  foreach ((array) $service_how_it_works_data as $key => $work_data) : setup_postdata($work_data);                
                  
                    $title = $work_data['title'];
                    $desc = $work_data['desc']; ?>
                
                      <div class="c-card">
                        <h5 class="title"><?php echo $title; ?></h5>
                        <p class="sub-title"><?php echo $desc; ?></p>
                      </div>

                  <?php $fs++;
                  endforeach;
                  wp_reset_postdata();
                } ?>

              </div>

              <div class="btn-sec">
                <a href="<?php echo $service_how_it_works_btn_url; ?>" class="btn btn-secondary"> 
                  <?php echo $service_how_it_works_btn_text; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="why-choose-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">
                  <?php echo $service_why_choose_us_title; ?>                  
                </h2>
                <p class="sub-title">
                <?php echo $service_why_choose_us_sub_cont; ?>
                </p>
              </div>
              <div class="guest-post-wrapper">

              <?php if (!empty($service_why_choose_us_data) && is_array($service_why_choose_us_data)) {
                  $fs = 1;
                  foreach ((array) $service_why_choose_us_data as $key => $choose_data) : setup_postdata($choose_data);                
                  
                    $title = $choose_data['title'];
                    $image = $choose_data['image'];
                    $desc = $choose_data['desc']; ?>

                    <div class="c-card">
                      <div class="c-title-sec">
                        <div class="icon-cover">
                          <img class="icon" src="<?php echo $image; ?>" alt="<?php echo $title; ?>"/>
                        </div>
                        <h3 class="title"><?php echo $title; ?></h3>
                      </div>
                      <p class="c-describ"><?php echo $desc; ?></p>
                    </div>

                  <?php $fs++;
                  endforeach;
                  wp_reset_postdata();
              } ?>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FIXME: Needs modification -->
      <section class="guarantee-section">
        <div class="container">
          <div class="row post-wrapper">
            <div class="col-md-4">
              <div class="icon-sec">
                <img src="<?php echo $service_guarantee_image; ?>" alt="guarantee-image" />
              </div>
            </div>

            <div class="col-md-8">
              <div class="cover">
                <h2 class="title"><?php echo $service_guarantee_title; ?></h2>
                <?php echo $service_guarantee_sub_cont; ?>                
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--: Creat Customer reviews section -->
      <section class="customer-reviews">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reviews-wrapper">
                <div class="cr-card">
                  <div class="c-profile">
                    <div class="profle-image">
                      <img
                        class="image"
                        src="<?php echo SGE_URI; ?>/assets/images/services/unnamed.png"
                        alt=""
                      />
                    </div>
                    <div class="profile-describe">
                      <p class="name">jboy pritwnt</p>
                      <p class="profation">new yerk city USA</p>
                    </div>
                  </div>
                  <div class="rating">
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                  </div>
                  <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Labore beatae eius nulla est. Optio cumque porro at culpa
                    architecto deleniti voluptas. Maxime incidunt obcaecati a
                    placeat deserunt, quos ab voluptate?
                  </p>
                </div>
                <div class="cr-card">
                  <div class="c-profile">
                    <div class="profle-image">
                      <img
                        class="image"
                        src="<?php echo SGE_URI; ?>/assets/images/services/unnamed.png"
                        alt=""
                      />
                    </div>
                    <div class="profile-describe">
                      <p class="name">jboy pritwnt</p>
                      <p class="profation">new yerk city USA</p>
                    </div>
                  </div>
                  <div class="rating">
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                  </div>
                  <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Labore beatae eius nulla est. Optio cumque porro at culpa
                    architecto deleniti voluptas. Maxime incidunt obcaecati a
                    placeat deserunt, quos ab voluptate?
                  </p>
                </div>
                <div class="cr-card">
                  <div class="c-profile">
                    <div class="profle-image">
                      <img
                        class="image"
                        src="<?php echo SGE_URI; ?>/assets/images/services/unnamed.png"
                        alt=""
                      />
                    </div>
                    <div class="profile-describe">
                      <p class="name">jboy pritwnt</p>
                      <p class="profation">new yerk city USA</p>
                    </div>
                  </div>
                  <div class="rating">
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                  </div>
                  <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Labore beatae eius nulla est. Optio cumque porro at culpa
                    architecto deleniti voluptas. Maxime incidunt obcaecati a
                    placeat deserunt, quos ab voluptate?
                  </p>
                </div>
                <div class="cr-card">
                  <div class="c-profile">
                    <div class="profle-image">
                      <img
                        class="image"
                        src="<?php echo SGE_URI; ?>/assets/images/services/unnamed.png"
                        alt=""
                      />
                    </div>
                    <div class="profile-describe">
                      <p class="name">jboy pritwnt</p>
                      <p class="profation">new yerk city USA</p>
                    </div>
                  </div>
                  <div class="rating">
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                    <i class="material-icons text-primary">star_rate</i>
                  </div>
                  <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Labore beatae eius nulla est. Optio cumque porro at culpa
                    architecto deleniti voluptas. Maxime incidunt obcaecati a
                    placeat deserunt, quos ab voluptate?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="case-studies-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title"> <?php echo $service_results_title; ?></h2>
                <p class="sub-title"> <?php echo $service_results_sub_cont; ?></p>
              </div>
              <div class="defined-wrapper">

                <?php if (!empty($service_results_data) && is_array($service_results_data)) {
                $fs = 1;
                foreach ((array) $service_results_data as $key => $results_data) : setup_postdata($results_data);                
                  
                  $title = $results_data['title'];
                  $image = $results_data['image'];
                  $desc = $results_data['desc']; ?>

                  <div class="c-card">
                    <div class="image-cover">
                      <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>-image" />
                    </div>
                    <div class="c-title-sec">
                      <p class="c-sub-taitle"><?php echo $desc; ?></p>
                      <h4 class="c-title">
                        <?php echo $title; ?>
                      </h4>
                    </div>
                  </div>

                <?php $fs++;
                endforeach;
                wp_reset_postdata();
                } ?>

                    <!-- <div class="c-card">
                      <div class="image-cover">
                        <img src="<?php echo SGE_URI; ?>/assets/images/home/8.png" alt="" />
                      </div>
                      <div class="c-title-sec">
                        <p class="c-sub-taitle">
                          Markting, Sales, SEO, Visitor, Web
                        </p>
                        <h4 class="c-title">
                          SEO agency have over 40+ years combined
                        </h4>
                      </div>
                    </div>
                    <div class="c-card">
                      <div class="image-cover">
                        <img src="<?php echo SGE_URI; ?>/assets/images/home/9.png" alt="" />
                      </div>
                      <div class="c-title-sec">
                        <p class="c-sub-taitle">
                          Markting, Sales, SEO, Visitor, Web
                        </p>
                        <h4 class="c-title">
                          SEO agency have over 40+ years combined
                        </h4>
                      </div>
                    </div> -->


              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="features-section">
        <div class="container">
          <div class="title-sec">
            <h2 class="title">
              <?php echo $service_benefits_title; ?>
            </h2>
            <p class="sub-title">
              <?php echo $service_benefits_sub_cont; ?>
            </p>
          </div>
          <div class="reasons-wrapper">

            <?php if (!empty($service_benefits_data) && is_array($service_benefits_data)) {
                $fs = 1;
                foreach ((array) $service_benefits_data as $key => $benefits_data) : setup_postdata($benefits_data);                
                
                  $title = $benefits_data['title'];
                  $image = $benefits_data['image'];
                  $desc = $benefits_data['desc']; ?>

                    <div class="c-card">
                      <div class="title-sec">
                        <span class="icon"
                          ><img src="<?php echo $image; ?>" alt="<?php echo $title; ?>"
                        /></span>
                        <h4 class="title"><?php echo $title; ?></h4>
                      </div>
                      <div class="sub-title-sec">
                        <p class="sub-title"><?php echo $desc; ?></p>
                      </div>
                    </div>

              <?php $fs++;
              endforeach;
              wp_reset_postdata();
            } ?>

          </div>
        </div>
      </section>

      

      <!-- TODO: Create Benifits section -->
      <section class="benifits-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title"><?php echo $service_create_benifits_title; ?></h2>
                <p class="sub-title"><?php echo $service_create_benifits_sub_cont; ?>
                </p>
              </div>

              <div class="banifite-wrapper mb-5">
                <div class="col-md-3">
                  <div class="image-cover">
                    <img src="<?php echo $service_create_benifits_first_image; ?>" alt="" />
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="cover">
                    <h4 class="title"> <?php echo $service_create_benifits_first_title; ?>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h4>
                    <p class="sub-desc"> <?php echo $service_create_benifits_first_cont; ?>                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="banifite-wrapper">
                <div class="col-md-3">
                  <div class="image-cover">
                    <img src="<?php echo $service_create_benifits_second_image; ?>" alt="" />
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="cover">
                    <h4 class="title"> <?php echo $service_create_benifits_second_title; ?></h4>
                    <p class="sub-desc"> <?php echo $service_create_benifits_second_cont; ?>                      
                    </p>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </section>

      <section class="highlights-section">
        <div class="half-carve"></div>
        <div class="half-carve"></div>
        <div class="half-carve"></div>
        <div class="container">
          <div class="title-sec">
            <h2 class="title"><?php echo $service_boosters_title; ?></h2>
            <p class="sub-title">
              <?php echo $service_boosters_sub_cont; ?>
            </p>
          </div>
          <div class="loncher-wrapper">
            <img class="rocket" src="<?php echo SGE_URI; ?>/assets/images/services/rocket.png" alt="booster-image"/>
          </div>
          <div class="grid-wrapper">


            <?php if (!empty($service_boosters_data) && is_array($service_boosters_data)) {
            foreach ((array) $service_boosters_data as $key => $boosters_data) : setup_postdata($boosters_data);
            
              $title = $boosters_data['title'];
              $desc = $boosters_data['desc']; ?>

              <div class="c-card">
                <h4 class="title"><?php echo $title; ?></h4>
                <p class="sub-title">
                  <?php echo $desc; ?>
                </p>
              </div>

            <?php endforeach;
            wp_reset_postdata();
            } ?>

          </div>
        </div>
      </section>

      <section class="testimonials">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sec-title">
                <h2 class="title"> <?php echo $service_testimonial_title; ?></h2>
                <p class="sub-title"> <?php echo $service_testimonial_sub_cont; ?></p>
              </div>
              <div class="testimonials-wrapper">

              <?php $clients_args = get_posts(array('post_type'=> 'testimonial', 'post_per_page' => -1));
                
              foreach($clients_args as $post) { ?>

                <div class="testimonial">
                  <div class="header">
                    <?php the_post_thumbnail( 'thumbnail'); ?>
                  </div>
                  <div class="body">
                    <h4 class="name"><?php echo $post->post_title; ?></h4>
                    <?php echo $post->post_content; ?>
                  </div>
                </div>

              <?php }
              wp_reset_postdata(); ?>

              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>
