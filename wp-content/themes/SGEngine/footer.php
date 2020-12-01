<?php
$abn_home_page = get_option('home_page');
$abn_footer_logo = $abn_home_page['abn_footer_logo'];
$abn_about_us = $abn_home_page['abn_about_us'];

/***************** Social Links ******************/
$social_options = get_option('social_options');
$abn_facebook_url = $social_options['abn_fb_link'];
$abn_tweet_link = $social_options['abn_tweet_link'];
$abn_pinterest_link = $social_options['abn_pinterest_link'];
$abn_ig_link = $social_options['abn_ig_link'];
$abn_linkedin_link = $social_options['abn_linkedin_link'];
/*?>


  <footer class="footer-one footer-bg position-relative">

    <!--<img src="<?php //echo get_template_directory_uri(); ?>/images/footer/4.png" class="img-fluid fshap-after" alt="image"/>-->

    <?php if(is_page_template( 'page-template/services-temp.php' )) {
        
        $footer_sub_bg_color =  'fill: #eef2fb';
        
    } elseif(is_page('blog')) {
        
        $footer_sub_bg_color =  'fill: #eeeeee';
      
    } else {
    
        $footer_sub_bg_color =  'fill: #fff';
        
    } ?>
    
    
    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 313.59 33.16">
    <g id="Layer_2" data-name="Layer 2">
    <g id="Layer_1-2" data-name="Layer 1">
    <path style="<?php echo $footer_sub_bg_color; ?>"
    d="M188,33.16H174.6a3.17,3.17,0,0,0-.66-.16c-6.65-.29-13.29-.61-19.91-1.32q-8.34-.87-16.59-2.29c-4.19-.77-8.4-1.5-12.53-2.5-4.88-1.18-9.72-2.53-14.53-4a62.48,62.48,0,0,1-13.75-5.64,52.44,52.44,0,0,0-14.76-5.75A52.6,52.6,0,0,0,66.33,10a40.68,40.68,0,0,0-8.81.84c-3.07.64-6.14,1.31-9.14,2.21-2.36.71-4.58,1.85-6.91,2.66-3.16,1.11-6.34,2.16-9.55,3.1A123.73,123.73,0,0,1,15.65,22.4a74.67,74.67,0,0,1-12.58.79c-1,0-2-.11-3.07-.16V0H313.59V21.23l-.89-.34c-2.71-.93-5.39-2-8.15-2.74a78.4,78.4,0,0,0-8.21-1.63,47.68,47.68,0,0,0-6.64-.64c-8-.14-14.63,1.25-22.32,3.47-5.41,1.57-10.79,3.21-16.21,4.74-2.94.83-5.92,1.52-8.9,2.19s-6.14,1.3-9.22,1.9c-2.51.49-5,1-7.55,1.37-2.37.38-4.76.68-7.14,1q-6.44,1-12.93,1.47a108,108,0,0,1-11.92.81A8.63,8.63,0,0,0,188,33.16Z" />
    </g>
    </g>
    </svg>
    


      <div class="contactinfo">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-2 col-md-2 footer-link">
              <h5 class="iq-fw-7 riq-mt-40">About Us</h5>
              <?php
              wp_nav_menu( array(
                  'menu_class' => 'list-inline rmb-40', // Do not fall back to first non-empty menu.
                  'theme_location' => 'about_company',
                  'fallback_cb'    => false // Do not fall back to wp_page_menu()
              ) );
              ?>
            </div>
            <div class="col-lg-2 col-md-2 footer-link">
              <h5 class="iq-fw-7 riq-mt-40">Useful Links</h5>
              <?php
              wp_nav_menu( array(
                  'menu_class' => 'list-inline rmb-40', // Do not fall back to first non-empty menu.
                  'theme_location' => 'useful_links',
                  'fallback_cb'    => false // Do not fall back to wp_page_menu()
              ) );
              ?>
            </div>
            <div class="col-lg-2 col-md-3 footer-link">
              <h5 class="iq-fw-7">Services</h5>
              <?php
              wp_nav_menu( array(
                  'menu_class' => 'list-inline', // Do not fall back to first non-empty menu.
                  'theme_location' => 'services',
                  'fallback_cb'    => false // Do not fall back to wp_page_menu()
              ) );
              ?>
            </div>
            <div class="col-lg-3 col-md-2 footer-link">
              <!--<div class="iq-footer-logo">-->
              <!--  <a href="<?php //echo home_url(); ?>"-->
              <!--    ><img src="<?php //echo $abn_footer_logo; ?>" class="img-fluid" alt="image"/>-->
              <!--  </a>-->
              <!--</div>-->
              <div class="footer-social-links">
                  <h5 class="iq-fw-7 riq-mt-40">Follow Us on Social</h5>
                  <ul class="list-inline text-center">
                      <?php if(!empty($abn_facebook_url)) { ?>
                      <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <a href="<?php echo $abn_facebook_url; ?>" rel="noopener" target="_blank" class="g-color-white-opacity-0_5 g-color-white--hover">
                          <i class="fa fa-facebook-f"></i>
                          <span>Facebook</span>
                        </a>
                      </li>
                      <?php } if(!empty($abn_linkedin_link)) { ?>
                      <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
                        <a href="<?php echo $abn_linkedin_link; ?>" rel="noopener" target="_blank" class="g-color-white-opacity-0_5 g-color-white--hover" >
                          <i class="fa fa-linkedin"></i>
                          <span>Linkedin</span>
                        </a>
                      </li>
                      <?php } if(!empty($abn_tweet_link)) { ?>
                      <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <a href="<?php echo $abn_tweet_link; ?>" rel="noopener" target="_blank" class="g-color-white-opacity-0_5 g-color-white--hover">
                          <i class="fa fa-twitter"></i>
                          <span>Twitter</span>
                        </a>
                      </li>
                      <?php } if(!empty($abn_ig_link)) { ?>
                      <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Instagram">
                        <a href="<?php echo $abn_ig_link; ?>" rel="noopener" target="_blank" class="g-color-white-opacity-0_5 g-color-white--hover">
                          <i class="fa fa-instagram"></i>
                          <span>Instagram</span>
                        </a>
                      </li>
                      <?php } if(!empty($abn_pinterest_link)) { ?>
                      <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Pinterest">
                        <a href="<?php echo $abn_pinterest_link; ?>"
                          rel="noopener" target="_blank" class="g-color-white-opacity-0_5 g-color-white--hover">
                          <i class="fa fa-pinterest"></i>
                          <span>Pinterest</span>
                        </a>
                      </li>
                      <?php } ?>
        
                    </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 footer-link">
              <h5 class="iq-fw--7">Sign up for Email Newsletter</h5>
              <p>Free Exclusive SEO & Link Building Tips & Strategies</p>
              <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
            </div>
          </div>
          <div class="footer-copy-sec pt-4">
            <span>
              <p>© <?php echo date('Y'); ?> Copyrights <b>Seogrowthengine.io</b> </p>
            </span>
          </div>
        </div>
      </div>
      <!-- back-to-top -->
      <div id="back-to-top">
        <a class="top" id="top" href="#top"
          ><i class="ion-ios-arrow-thin-up"></i
        ></a>
      </div>
      <!-- back-to-top End -->

      <?php wp_footer(); ?>
    </footer>

	<script>
	jQuery(document).ready(function($) {
        $('footer .list-inline li').addClass('list-item');
        $('.advertiser .tab-content ul').addClass('listing-mark mt-4');
        
        $( "#firstaccordion" ).accordion({collapsible : true, active : 'none'});
        $( '#secondaccordion' ).accordion({collapsible : true, active : 'none'});
        
	 });
	 
	 
	 </script>

    <script>
      class TypeWriter {
        constructor(txtElement, words, wait = 3000) {
          this.txtElement = txtElement;
          this.words = words;
          this.txt = "";
          this.wordIndex = 0;
          this.wait = parseInt(wait, 10);
          this.type();
          this.isDeleting = false;
        }

        type() {
          // Current index of word
          const current = this.wordIndex % this.words.length;
          // Get full text of current word
          const fullTxt = this.words[current];

          // Check if deleting
          if (this.isDeleting) {
            // Remove characters
            this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
            // Add charaters
            this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          // Insert txt into element
          this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

          // Initial Type Speed
          let typeSpeed = 300;

          if (this.isDeleting) {
            // Increase speed by half when deleting
            typeSpeed /= 2;
          }

          // If word is complete
          if (!this.isDeleting && this.txt === fullTxt) {
            // Make pause at end
            typeSpeed = this.wait;
            // Set delete to true
            this.isDeleting = true;
          } else if (this.isDeleting && this.txt === "") {
            this.isDeleting = false;
            // Move to next word
            this.wordIndex++;
            // Pause before start typing
            typeSpeed = 500;
          }

          setTimeout(() => this.type(), typeSpeed);
        }
      }

      // Init App
      function init() {
        const txtElement = document.querySelector(".txt-type");
        if(!txtElement) return;
        
        const words = JSON.parse(txtElement.getAttribute("data-words"));
        const wait = txtElement.getAttribute("data-wait");
        // Init TypeWriter
        new TypeWriter(txtElement, words, wait);
      }
      
      // Init On DOM Load
      document.addEventListener("load", init);
    
      ScrollOut({
          onShown(el) {
              if (el.classList.contains("animated")) return;
              startCounting(el);
              el.classList.add("animated");
          }
      });

    </script>
    
    <script type="text/javascript">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"08bd9468d118f1b8826eb43ff0e29560a3373ecb16a4e317c7acdcd8015956bc8ea79dc725d706761a31d637956cbac6", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.in/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");</script>

  </body>
</html>
<?php */ ?>


    <footer class="footer text-light">
      <section class="contact-us-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <?php echo do_shortcode('[contact-form-7 id="26" title="Contact Form"]'); ?>
              <!-- <form class="footer-form" action="#">
                <h3>Connect with us</h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Maxime deserunt error saepe dignissimos sit, aut reiciendis
                  animi neque expedita veritatis?
                </p>
                <input
                  required
                  class="form-control"
                  type="text"
                  name="name"
                  placeholder="Enter Your Name "
                />
                <div class="row">
                  <div class="col-md-6">
                    <input
                      required
                      class="form-control"
                      type="text"
                      name="phone"
                      placeholder="Enter Phone"
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      required
                      class="form-control"
                      type="text"
                      name="email"
                      placeholder="Enter Your Email"
                    />
                  </div>
                </div>
                <textarea
                  required
                  class="form-control"
                  name="message"
                  placeholder="Message"
                ></textarea>
                <input
                  class="btn btn-primary w-25"
                  type="submit"
                  value="Submit"
                />
              </form> -->
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

      <section class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="copyright-text">Copyright © <?php echo date('Y'); ?> <a href="https://www.viacon.in/" target=>Viacon</a></p>
            </div>
            <div class="col-md-6">
              <div class="social-links">
                <li class="list-item">
                  <a class="s-link" href="#">
                    <img class="image" src="<?php echo SGE_URI; ?>/assets/icon/footer-social/facebook.svg" alt="">
                  </a>
                </li>
                <li class="list-item">
                  <a class="s-link" href="#">
                    <img class="image" src="<?php echo SGE_URI; ?>/assets/icon/footer-social/youtube.svg" alt="">
                  </a>
                </li>
                <li class="list-item">
                  <a class="s-link" href="#">
                    <img class="image" src="<?php echo SGE_URI; ?>/assets/icon/footer-social/twiter.svg" alt="">
                  </a>
                </li>
                <li class="list-item">
                  <a class="s-link" href="#">
                    <img class="image" src="<?php echo SGE_URI; ?>/assets/icon/footer-social/instagarm.svg" alt="">
                  </a>
                </li>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>

    <!-- Scripts -->
    <!-- <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
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

  </body>
</html>