<?php get_header(); ?>

<section>
  <div id="body_area">
    <div class="container">
      <div class="row">
        <?php 
          // theme layout 
          $layout = get_theme_mod('kitbase_layout_setting', 'default');

          if ($layout == 'fullwidth') : ?>
            <div class="col-md-12">
              <?php
                if (have_posts()) :
                  while (have_posts()) : the_post();
              ?>
                <div class="blog_area">
                  <?php the_content(); ?>
                </div>
              <?php
                  endwhile;
                else :
                  _e('No post found', 'kitbase');
                endif;
              ?>
            </div>
          <?php else : // Default Layout ?>
            <div class="col-md-9">
              <?php
                if (have_posts()) :
                  while (have_posts()) : the_post();
              ?>
                <div class="blog_area">
                  <?php the_content(); ?>
                </div>
              <?php
                  endwhile;
                else :
                  _e('No post found', 'kitbase');
                endif;
              ?>
            </div>
            <div class="col-md-3">
              <?php 
                if (is_active_sidebar('kitbase-sidebar')) :
                  dynamic_sidebar('kitbase-sidebar');
                else :
                  echo '<h1> KitBase Sidebar Area </h1> <p> No widgets added yet! Please add widgets from the admin panel.</p>';
                endif;
              ?>
            </div>
          <?php endif; ?>

          <div class="pagenav">
            <?php
              if (have_posts()) :
                  while (have_posts()) : the_post();
                      // Your loop content here
                  endwhile;

                  // Display pagination
                  kitbase_pagenav();

              else :
                  echo '<p>No posts found.</p>';
              endif;
            ?>  
         </div> 
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
