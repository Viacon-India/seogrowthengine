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
          <div class="col-md-6">
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
          <div class="col-md-6">
            <div class="banner-image">
              <img src="<?php echo $service_banner_image; ?>" alt="service-banner-image" />
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
                src="<?php echo SGE_URI; ?>/assets/images/services/humans.png"
                alt=""
              />
            </div>
            <div class="col-md-6">
              <div class="title-container">
                <div class="sec-title">
                  <h2 class="title">
                    Trust by Over <span class="text-highlight">5000+</span>
                  </h2>
                  <h3 class="sub-title">Website Owners Globally</h3>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="trusted-wrapper">
                <a class="c-card" href="#">
                  <img
                    class="c-image"
                    src="<?php echo SGE_URI; ?>/assets/images/services/jet-pack-logo-icon.png"
                    alt=""
                  />
                  <h6 class="c-title">Jetpack</h6>
                </a>
                <a class="c-card" href="#">
                  <img
                    class="c-image"
                    src="<?php echo SGE_URI; ?>/assets/images/services/cloude-flair.png"
                    alt=""
                  />
                  <h6 class="c-title">CLOUD-FALER</h6>
                </a>
                <a class="c-card" href="#">
                  <img
                    class="c-image"
                    src="<?php echo SGE_URI; ?>/assets/images/services/goole-cloud.png"
                    alt=""
                  />
                  <h6 class="c-title">Google Cloud</h6>
                </a>
                <a class="c-card" href="#">
                  <img
                    class="c-image"
                    src="<?php echo SGE_URI; ?>/assets/images/services/wordprees.png"
                    alt=""
                  />
                  <h6 class="c-title">Worde Prasse</h6>
                </a>
                <a class="c-card" href="#">
                  <img
                    class="c-image"
                    src="<?php echo SGE_URI; ?>/assets/images/services/LITESPEED.png"
                    alt=""
                  />
                  <h6 class="c-title">LITESPEED</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

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
                <a class="nav-card" href="#"><span>domain authority</span></a>
                <a class="nav-card" href="#"><span>traffic da +</span></a>
                <a class="nav-card" href="#"><span>traffic</span></a>
                <a class="nav-card" href="#"><span>traffic da +</span></a>
              </div>
              <div class="authority-wrapper">
                <div class="c-card">
                  <div class="c-title-sec">
                    <h5 class="title">Bronze Guest Posting</h5>
                    <p class="sub-title">Ideal solution for beginners</p>
                  </div>

                  <div class="price">
                    <span class="left-dolor"> $ 70 </span>
                    <span class="right-dolor"> $ 35 </span>
                  </div>

                  <div class="card-list">
                    <h6 class="list-title">Domain Authority- 20+</h6>
                    <ul class="list-ul">
                      <li class="list-li">Website Traffic- 100+</li>
                      <li class="list-li">Content Length- 600+ Words</li>
                      <li class="list-li">100% Manual Outreach</li>
                      <li class="list-li">Niche-Specific Sites Only</li>
                      <li class="list-li">100% Do-Follow Links</li>
                      <li class="list-li">1 Anchor Text/Target URL</li>
                      <li class="list-li">48-Hour Delivery Promise</li>
                      <li class="list-li">SEO Optimised Content</li>
                    </ul>
                  </div>

                  <div class="actions">
                    <a href="#" class="add-to-cart">Add to Cart</a>
                    <a href="#" class="see-all">(Unlock Coupon Code)</a>
                  </div>
                </div>

                <div class="c-card">
                  <div class="c-title-sec">
                    <h5 class="title">Bronze Guest Posting</h5>
                    <p class="sub-title">Ideal solution for beginners</p>
                  </div>

                  <div class="price">
                    <span class="left-dolor"> $ 90 </span>
                    <span class="right-dolor"> $ 55 </span>
                  </div>

                  <div class="card-list">
                    <h6 class="list-title">Domain Authority- 30+</h6>
                    <ul class="list-ul">
                      <li class="list-li">Website Traffic- 600+</li>
                      <li class="list-li">Content Length- 1000+ Words</li>
                      <li class="list-li">100% Manual Outreach</li>
                      <li class="list-li">Niche-Specific Sites Only</li>
                      <li class="list-li">100% Do-Follow Links</li>
                      <li class="list-li">1 Anchor Text/Target URL</li>
                      <li class="list-li">48-Hour Delivery Promise</li>
                      <li class="list-li">SEO Optimised Content</li>
                    </ul>
                  </div>

                  <div class="actions">
                    <a href="#" class="add-to-cart">Add to Cart</a>
                    <a href="#" class="see-all">(Unlock Coupon Code)</a>
                  </div>
                </div>

                <div class="c-card">
                  <div class="c-title-sec">
                    <h5 class="title">Bronze Guest Posting</h5>
                    <p class="sub-title">Ideal solution for beginners</p>
                  </div>

                  <div class="price">
                    <span class="left-dolor"> $ 120 </span>
                    <span class="right-dolor"> $ 80 </span>
                  </div>

                  <div class="card-list">
                    <h6 class="list-title">Domain Authority- 40+</h6>
                    <ul class="list-ul">
                      <li class="list-li">Website Traffic- 1k+</li>
                      <li class="list-li">Content Length- 1500+ Words</li>
                      <li class="list-li">100% Manual Outreach</li>
                      <li class="list-li">Niche-Specific Sites Only</li>
                      <li class="list-li">100% Do-Follow Links</li>
                      <li class="list-li">1 Anchor Text/Target URL</li>
                      <li class="list-li">24-Hour Delivery Promise</li>
                      <li class="list-li">SEO Optimised Content</li>
                    </ul>
                  </div>

                  <div class="actions">
                    <a href="#" class="add-to-cart">Add to Cart</a>
                    <a href="#" class="see-all">(Unlock Coupon Code)</a>
                  </div>
                </div>

                <div class="c-card">
                  <div class="c-title-sec">
                    <h5 class="title">Bronze Guest Posting</h5>
                    <p class="sub-title">Ideal solution for beginners</p>
                  </div>

                  <div class="price">
                    <span class="left-dolor"> $ 120 </span>
                    <span class="right-dolor"> $ 80 </span>
                  </div>

                  <div class="card-list">
                    <h6 class="list-title">Domain Authority- 40+</h6>
                    <ul class="list-ul">
                      <li class="list-li">Website Traffic- 1k+</li>
                      <li class="list-li">Content Length- 1500+ Words</li>
                      <li class="list-li">100% Manual Outreach</li>
                      <li class="list-li">Niche-Specific Sites Only</li>
                      <li class="list-li">100% Do-Follow Links</li>
                      <li class="list-li">1 Anchor Text/Target URL</li>
                      <li class="list-li">24-Hour Delivery Promise</li>
                      <li class="list-li">SEO Optimised Content</li>
                    </ul>
                  </div>

                  <div class="actions">
                    <a href="#" class="add-to-cart">Add to Cart</a>
                    <a href="#" class="see-all">(Unlock Coupon Code)</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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

                <?php if (!empty($service_how_it_works_data) && is_array($service_how_it_works_data)) {
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

      <section class="case-studies-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">
                  excellence defined by
                  <span class="text-highlight"></span> results
                </h2>
                <p class="sub-title">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Voluptatibus quae impedit quidem <br />
                  assumenda atque ullam ratione sunt fuga quis
                </p>
              </div>
              <div class="defined-wrapper">

                <div class="c-card">
                  <div class="image-cover">
                    <img src="<?php echo SGE_URI; ?>/assets/images/home/7.png" alt="" />
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- TODO: Create Benifits section -->
      <section class="benifits-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-sec">
                <h2 class="title">Lorem ipsum, dolor sit amet consectetur</h2>
                <p class="sub-title">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero
                  natus molestias ullam provident, <br />
                  laudantium debitis eius dolores a assumenda sed perspiciatis
                  optio earum exercitationem
                </p>
              </div>

              <div class="banifite-wrapper mb-5">
                <div class="col-md-3">
                  <div class="image-cover">
                    <img src="<?php echo SGE_URI; ?>/assets/images/services/mobile.png" alt="" />
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="cover">
                    <h4 class="title">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h4>
                    <p class="sub-desc">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Labore ratione ad autem tenetur. Mollitia porro nulla
                      saepe, et voluptates fugiat, nam temporibus quis quas vel
                      ratione voluptatum enim, optio excepturi! Lorem ipsum
                      dolor, sit amet consectetur adipisicing elit. Vero quasi
                      officiis nesciunt voluptate voluptatibus similique maxime
                      ullam aliquid nulla unde ipsa nostrum optio corporis quas,
                      illo illum, eius aliquam accusantium.
                    </p>
                  </div>
                </div>
              </div>
              <div class="banifite-wrapper">
                <div class="col-md-3">
                  <div class="image-cover">
                    <img src="<?php echo SGE_URI; ?>/assets/images/services/target.png" alt="" />
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="cover">
                    <h4 class="title">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h4>
                    <p class="sub-desc">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Labore ratione ad autem tenetur. Mollitia porro nulla
                      saepe, et voluptates fugiat, nam temporibus quis quas vel
                      ratione voluptatum enim, optio excepturi! Lorem ipsum
                      dolor, sit amet consectetur adipisicing elit. Vero quasi
                      officiis nesciunt voluptate voluptatibus similique maxime
                      ullam aliquid nulla unde ipsa nostrum optio corporis quas,
                      illo illum, eius aliquam accusantium.
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
            <h2 class="title">
              Flexible Authority<span class="text-highlight"> Boosters</span>
            </h2>
            <p class="sub-title">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim
              consectetur praesentium <br />magni necessitatibus eligendi
              officiis sapiente eos, facere,
            </p>
          </div>
          <div class="loncher-wrapper">
            <img
              class="rocket"
              src="<?php echo SGE_URI; ?>/assets/images/services/rocket.png"
              alt=""
            />
          </div>
          <div class="grid-wrapper">
            <div class="c-card">
              <h4 class="title">DA</h4>
              <p class="sub-title">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellat fugiat perspiciatis modi? Animi doloremque consequuntur
                temporibus
              </p>
            </div>
            <div class="c-card">
              <h4 class="title">Traffic</h4>
              <p class="sub-title">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellat fugiat perspiciatis modi? Animi doloremque consequuntur
                temporibus
              </p>
            </div>
            <div class="c-card">
              <h4 class="title">Traffic</h4>
              <p class="sub-title">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellat fugiat perspiciatis modi? Animi doloremque consequuntur
                temporibus
              </p>
            </div>
            <div class="c-card">
              <h4 class="title">DA+Traffic</h4>
              <p class="sub-title">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellat fugiat perspiciatis modi? Animi doloremque consequuntur
                temporibus
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonials">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sec-title">
                <h2 class="title">
                  Our Clients Vouch for
                  <span class="text-highlight"> Our Services</span>
                </h2>
                <p class="sub-title">
                  When you get the best quality contextual backlinks to improve
                  the authority of your websites at half the standard cost,
                </p>
              </div>
              <div class="testimonials-wrapper">

              <?php $clients_args = get_posts(array('post_type'=> 'our-clients', 'post_per_page' => -1));
                
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
