<div class="media mb-3 abbbbbbb">
  <a href="<?php echo get_the_permalink(); ?>">
    <?php echo get_the_post_thumbnail($post->ID, 'sidebar-image', array('class' => 'imgr mr-3') ); ?>
  </a>
  <div class="media-body">
    <a href="<?php echo get_the_permalink(); ?>">
      <?php echo get_post_data_on_limit($post->post_title, 40); ?>
    </a>
    <p><i class="fa fa-calendar-alt"></i> <?php echo get_the_date(); ?></p>
  </div>
</div>