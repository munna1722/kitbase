

<div class="footer-area">
   <div class="container">
      <div class="row">

         <div class="col-md-3">
            <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
            <?php endif; ?>
         </div>

         <div class="col-md-3">
            <?php if (is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
            <?php endif; ?>
         </div>

         <div class="col-md-3">
            <?php if (is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
            <?php endif; ?>
         </div>

         <div class="col-md-3">
            <?php if (is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
            <?php endif; ?>
         </div>

      </div>
   </div>
</div>

<section id="copyright_area">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p><?php echo get_theme_mod( 'kitbase_copyright_section' ); ?></p>
            </div>
         </div>
      </div>
    </section>
  <?php wp_footer();?>
  </body>
</html>