<div class="sidebar col-lg-4 order-lg-2 order-2">
  <div class="sticky-sidebar">  
    <div class="right-side-blog">

      <div class="iq-sidebar-widget p-3 box-shpe">
        <div class="iq-widget-search position-relative">
          <?php get_search_form(); ?>
        </div>
      </div>
      
      <!-- semrush siteaudit widget -->
      <!-- <div class="iq-sidebar-widget box-shpe p-3 iq-mt-80 categories-section">        
        <div id="ssa-widget"></div>        
        <script type="text/javascript">
            (function() {
                var p = "https://www.semrush.com/leadgen/static/js/widget.min.js";
                var d = document, s = d.createElement("script");
                s.src = p + "?v=" + Math.random();
                (d.head || d.body).appendChild(s);
                s.onload = function() {
                    new SEMRUSH.SiteauditWidget({
                        widgetApiKey: "5af028485f50e93023424b73"
                    });
                }
            })();        
        </script>        
      </div> -->

      <div class="iq-mt-80 box-shpe p-3 recent-posts-section">
        <h5 class="iq-widget-title iq-fw-8 mb-4">Recent Posts</h5>
        
        <?php $recent_post = get_posts(array( 
            'post_type' => 'post',
              'post_status'=>'publish', 
              'posts_per_page' => 4,
              'paged' => $paged,
              'order'     => 'DESC',
              'orderby'   => 'date'
        ));
        foreach($recent_post as $post): setup_postdata($post);


            get_template_part( 'template-parts/content','sidebar-post-loop');

        endforeach;
        wp_reset_postdata(); ?>
        
      </div>

      <div class="iq-sidebar-widget box-shpe p-3 iq-mt-80 categories-section">
        <h5 class="iq-fw-8 mb-4">Categories</h5>
        
        <?php $category = get_categories(); ?>                  
        <ul class="d-block">
          <?php foreach($category as $cat) { ?>
            <li class="d-block mb-3">
              <a href="<?php echo get_category_link($cat); ?>" class="iq-fw-5"
                ><?php echo $cat->name; ?><span><?php echo $cat->category_count; ?></span></a
              >
            </li>
          <?php } ?>
        </ul>

      </div>

      <div class="iq-mt-80 box-shpe p-3 popular-posts-section">
        <h5 class="iq-widget-title iq-fw-8 mb-4">Popular Posts</h5>
        
        <?php $popular_post = get_posts(array( 
            'post_type' => 'post',
              'post_status'=>'publish', 
              'posts_per_page' => 4,
              'paged' => $paged,
              'order'     => 'DESC',
              'meta_key' => 'post_views_count',
              'orderby' => 'meta_value_num',
          ));
          foreach($popular_post as $post): setup_postdata($post);

              get_template_part( 'template-parts/content','sidebar-post-loop');
              
          endforeach;
          wp_reset_postdata(); ?>

      </div>
      

      <?php
      /***************** Social Links ******************/
      $social_options = get_option('social_options');
      $abn_facebook_url = $social_options['abn_fb_link'];
      $abn_tweet_link = $social_options['abn_tweet_link'];
      $abn_pinterest_link = $social_options['abn_pinterest_link'];
      $abn_ig_link = $social_options['abn_ig_link'];
      $abn_linkedin_link = $social_options['abn_linkedin_link'];
?>


      <div class="iq-mt-80 box-shpe p-3">
        <h5 class="iq-widget-title iq-fw-8 mb-2">Social Link</h5>
        <div class="media mb-3">
          <ui class="sidebar-social-link">

            <?php if(!empty($abn_facebook_url)) { ?>
                <li class="link-li">
                  <a href="<?php echo $abn_facebook_url; ?>" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                </li>
              <?php }
              if(!empty($abn_linkedin_link)) { ?>
                <li class="link-li">
                      <a href="<?php echo $abn_linkedin_link; ?>" target="_blank"><i class="fa fa-linkedin"></i> Linkedin</a>
                  </li>
              <?php }
              if(!empty($abn_tweet_link)) { ?>
                <li class="link-li">
                      <a href="<?php echo $abn_tweet_link; ?>" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                  </li>
              <?php }
              if(!empty($abn_ig_link)) { ?>
                <li class="link-li">
                      <a href="<?php echo $abn_ig_link; ?>" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
                  </li>
              <?php }
              if(!empty($abn_pinterest_link)) { ?>
                <li class="link-li">
                      <a href="<?php echo $abn_pinterest_link; ?>" target="_blank"><i class="fa fa-pinterest"></i> Pinterest</a>
                  </li>
              <?php } ?>
            
          </ui>
        </div>
      </div>


    </div>
  </div>
</div>