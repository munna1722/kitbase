<?php
                if (have_posts()) :
                  while (have_posts()) : the_post();
              ?>
                <div class="blog_area">
                    <div class="post_thumb">
                        <a href="<?php the_permalink( ); ?>"> <?php echo the_post_thumbnail( 'thumbnails' ); ?></a>
                   </div>
                   <div class="post-details">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_excerpt(); ?>
                   </div>
                </div>
              <?php
                  endwhile;
                else :
                  _e('No post found', 'kitbase');
                endif;
              ?>
              
           <div id="page_nav">
              <?php 
              if (function_exists('kitbase_pagenav')) {
                  kitbase_pagenav(); 
              } else { 
                  next_posts_link(__('Older Posts', 'kitbase'));
                  previous_posts_link(__('Newer Posts', 'kitbase'));
              } 
              ?>
          </div>