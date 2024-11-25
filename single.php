<?php get_header(); ?>

<section>
  <div id="body_area">
    <div class="container">
      <div class="row">
         <?php 
            $layout = get_theme_mod('kitbase_layout_setting', 'default');
            if ($layout == 'fullwidth') :
          ?>

            <div class="col-md-12">
              <?php
                if (have_posts()) :
                  while (have_posts()) : the_post();
              ?>
                <div class="blog_area">
                  <h1><?php the_title()?></h1>
                  <?php the_content(); ?>
                  <?php the_excerpt(); ?>
                  <?php the_author_description(); ?>
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

               <?php get_template_part( 'template_part/blog' ); ?>

                <div id="comments_area">
                    <?php comments_template( ); ?>
               </div>

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
            
    </div>
  </div>
</section>

<?php get_footer(); ?>
