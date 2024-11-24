<?php
                if (have_posts()) :
                  while (have_posts()) : the_post();
              ?>
                <div class="blog_area">
                    <div class="post_thumb">
                        <a href="<?php the_permalink( ); ?>"> <?php echo the_post_thumbnail( 'post-thumbnails' ); ?></a>
                   </div>
                   <div class="post-details">
                       <h2><?php the_title(); ?></h2>
                       <?php the_excerpt(); ?>
                   </div>
                </div>
              <?php
                  endwhile;
                else :
                  _e('No post found', 'kitbase');
                endif;
              ?>