<?php
//default page layout
get_header();
?>
<?php get_template_part( 'template-parts/banner', null, [
  'image'=> get_bloginfo( 'template_url' ).'/images/news-banner.webp'
] ); ?>
<div class="posts mt-3">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <?php
        if ( have_posts() ) : while ( have_posts() ) :
          the_post();
          get_template_part( 'content' );
        endwhile;
          get_template_part( 'blog-parts/pagination' );
        endif;
        ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php
get_footer();
?>
