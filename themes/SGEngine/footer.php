<?php
$abn_home_page = get_option('home_page');
$abn_footer_logo = $abn_home_page['abn_footer_logo'];
$abn_about_us = $abn_home_page['abn_about_us'];
$abn_logo = $abn_home_page['abn_logo'];

/***************** Social Links ******************/
$social_options = get_option('social_options');
$abn_facebook_url = $social_options['abn_fb_link'];
$abn_tweet_link = $social_options['abn_tweet_link'];
$abn_pinterest_link = $social_options['abn_pinterest_link'];
$abn_ig_link = $social_options['abn_ig_link'];
$abn_linkedin_link = $social_options['abn_linkedin_link'];
?>


    <footer class="footer text-light">

      <section class="contact-us-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">

              <?php if(!is_page('contact-us')) {

                echo do_shortcode('[contact-form-7 id="26" title="Contact Form"]');

              } else { ?>
                <a href="<?php echo home_url(); ?>">
                  <?php if(!empty($abn_logo)) { ?>
                  <img src="<?php echo $abn_logo; ?>" alt="logo" class="img-fluid" style="width: 125px;"/>
                  <?php } ?>
                </a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <?php } ?>          
            </div>
            <div class="col-md-5">
              <div class="free-cover">
                <div class="free-strategy">
                  <h2 class="strategy-title">
                    Schedule Free <br />Strategy Call <br />
                    with Experts
                  </h2>
                  <p>
                    Talk to our Strategist for bespoke <br />
                    SEO Solutions
                  </p>
                  <a href="#" class="btn btn-secondary"
                    >Book Free Strategy Call</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php if(is_page('blogger-outreach-services') || is_page('services')) { ?>

        <section class="faq-section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="taitle-sec">
                  <h2 class="title"><?php echo get_field('footer_faq_title', get_the_ID()); ?></h2>
                  <p class="sub-title">
                    <?php echo get_field('footer_faq_desc', get_the_ID()); ?>
                  </p>
                </div>
                <div id="faq-accodians" role="tablist" aria-multiselectable="true">


                    <?php $faq_posts = get_posts(array(
                      'post_type' => 'faq', 
                      'posts_per_page' => -1, 
                      'oderby' => 'date', 
                      'order' => 'DESC'
                    )); 
                    $fcount =1;
                    foreach($faq_posts as $post):setup_postdata($post); ?>
                    <div class="card">
                      <div class="card-header" role="tab" id="section<?php echo $fcount; ?>HeaderId">
                        <h5 class="mb-0">
                          <a data-toggle="collapse" data-parent="#faq-accodians" href="#section<?php echo $fcount; ?>ContentId" aria-expanded="true" aria-controls="section<?php echo $fcount; ?>ContentId">
                            <?php the_title(); ?>
                          </a>
                        </h5>
                      </div>
                      <div
                        id="section<?php echo $fcount; ?>ContentId" class="collapse in" role="tabpane<?php echo $fcount; ?>" aria-labelledby="section<?php echo $fcount; ?>HeaderId">
                        <div class="card-body">
                          <?php the_content(); ?>
                        </div>
                      </div>
                    </div>

                  <?php $fcount++;
                  endforeach;
                  wp_reset_postdata(); ?>

                  
                </div>
              </div>
            </div>
          </div>
        </section>

      <?php } ?>

      <section class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="copyright-text"></p>
            </div>
            <div class="col-md-6">
              <div class="social-links">

              	<?php if(!empty($abn_facebook_url)) { ?>
                <li class="list-item">
                  <a class="s-link" href="<?php echo $abn_facebook_url; ?>">
                    <img class="image" src="<?php echo SGE_URI; ?>/assets/icon/footer-social/facebook.svg" alt="">
                  </a>
                </li>
            	<?php } if(!empty($abn_tweet_link)) { ?>
                <li class="list-item">
                  <a class="s-link" href="<?php echo $abn_tweet_link; ?>">
                    <img class="image" src="<?php echo SGE_URI; ?>/assets/icon/footer-social/twiter.svg" alt="">
                  </a>
                </li>
                <?php } if(!empty($abn_pinterest_link)) { ?>
                <li class="list-item">
                  <a class="s-link" href="#">
                    <img class="image" src="<?php echo SGE_URI; ?>/assets/icon/footer-social/pinterest.svg" alt="">
                  </a>
                </li>
                <?php } if(!empty($abn_ig_link)) { ?>
                <li class="list-item">
                  <a class="s-link" href="<?php echo $abn_ig_link; ?>">
                    <img class="image" src="<?php echo SGE_URI; ?>/assets/icon/footer-social/instagarm.svg" alt="">
                  </a>
                </li>
                <?php } if(!empty($abn_linkedin_link)) { ?>
                <li class="list-item">
                  <a class="s-link" href="<?php echo $abn_linkedin_link; ?>">
                    <img class="image" src="<?php echo SGE_URI; ?>/assets/icon/footer-social/linked-in.svg" alt="">
                  </a>
                </li>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </section>      
    </footer>

    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo SGE_URI; ?>/assets/scripts/script.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      jQuery(document).ready(function() {
        $('#menu-header-menu li').addClass('nav-item');
        $('#menu-header-menu li a').addClass('nav-link');
        $('.book-free-strategy .emaillist input[type="email"]').addClass('form-control');
        $('.book-free-strategy input[type="submit"]').addClass('form-control btn btn-secondary');

        $('.home .banner .emaillist input[type="email"]').addClass('form-control bg-secondary');
        $('.home .banner .emaillist input[type="submit"]').addClass('btn btn-light text-primary');
      });
    </script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      window.addEventListener("load", function () {
        initTabs($(".tabs"));
        var swiper = new Swiper(".trusted-wrapper", {
          autoplay: {
            delay: 5000,
          },
          loop: true,
          pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
          },
          breakpoints: {
            0: {
              slidesPerView: 2,
              spaceBetween: 10,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 50,
            },
          },
        });
      });

      //script for tabs
      function initTabs(tabs) {
        shiftSelector(tabs);

        $(window).resize(function () {
          shiftSelector(tabs);
        });

        tabs.on("click", "a", function (e) {
          e.preventDefault();
          tabs.find("a").removeClass("active");
          $(this).addClass("active");

          shiftSelector(tabs);
        });
      }

      function shiftSelector(tabs) {
        let activeItem = tabs.find(".active");
        let activeWidth = activeItem.innerWidth();
        let activeHeight = activeItem.innerHeight();
        let itemPos = activeItem.position();
        tabs.find(".selector").css({
          left: itemPos.left + "px",
          width: activeWidth + "px",
          height: activeHeight + "px",
          top: itemPos.top + "px",
        });

        let activeBody = $(".tabs .active").attr("data-body");
        $(".tab-body > section").hide();
        $("." + activeBody).fadeIn();
      }
    
      window.addEventListener("load", function () {        
        var swiper = new Swiper(".brand-wrapper", {
          autoplay: {
            delay: 5000,
          },
          slidesPerView: 4,
          slidesPerColumn: 2,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            0: {
              slidesPerView: 2,
              slidesPerColumn: 2,
              spaceBetween: 0,
            },
            768: {
              slidesPerView: 2,
              slidesPerColumn: 2,
              spaceBetween: 10,
            },
            1024: {
              slidesPerView: 3,
              slidesPerColumn: 2,
              spaceBetween: 10,
            },
          },
        });

        var swiper = new Swiper(".testimonials-slider", {
          direction: "vertical",
          autoHeight: true,
          // autoplay: {
          //   delay: 5000,
          // },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      });
      
      var swiper = new Swiper(".swiper-container", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });


      jQuery(document).ready(function($) {
        
        $('#menu-header-menu li.menu-item-has-children > a').addClass('dropdown-toggle');

        $('ul.sub-menu').css('display', 'none');
        $('#menu-header-menu li').click( function() {
          //alert('sdasdfas');
          //console.log($(this));
          $(this).toggleClass("parent-menu");
          $(this).find('ul.sub-menu').toggleClass('sub-menu-hover',1000);
        });
        
      });
    </script>

    <?php wp_footer(); ?>

  </body>
</html>