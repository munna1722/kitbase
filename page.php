<?php get_header(); 
/*
* The template for displaying pages
*/
 ?>

<section>
  <div id="body_area">
    <div class="container">
      <div class="row">
        <?php 
          $layout = get_theme_mod('kitbase_layout_setting', 'default');
          if ($layout == 'fullwidth') : ?>
            <div class="col-md-12">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="page_area">
                  <h1><?php the_title(); ?></h1>
                  <?php the_content(); ?>
                </div>
              <?php endwhile; else : ?>
                <p><?php _e('No pages found.', 'kitbase'); ?></p>
              <?php endif; ?>
            </div>
          <?php else : ?>
            <div class="col-md-9">

                <?php get_template_part( 'template_part/post' ); ?>

            </div>
            <div class="col-md-3">
              <?php if (is_active_sidebar('kitbase-sidebar')) :
                dynamic_sidebar('kitbase-sidebar');
              else : ?>
                <p><?php _e('Add widgets to the sidebar.', 'kitbase'); ?></p>
              <?php endif; ?>
            </div>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
