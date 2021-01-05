<?php
/* Template Name: Contact Page */
get_header();
?>
    <main>
      <section class="page-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="title"><?php the_title();; ?></h1>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </section>

      
    </main>

    <?php get_footer(); ?>
