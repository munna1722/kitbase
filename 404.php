<?php get_header(); 
/*
* The template for displaying 404 pages (Error page )
*/

?>

<section>
  <div id="body_error_area">
    <div class="container">
      <div class="row">
         <div classs="cal-md-12">
            <div class="error-area">
                <h1>Oops! Looks Like Something Was Wrong</h1>
                 <p>404 Error - Page not Found</p>
                 <a href="<?php echo home_url();?>" class="homepage">Go To Homepage</a>   
            </div>
         </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
