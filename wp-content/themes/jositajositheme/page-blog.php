<?php get_header(); ?>
	<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'post-template', get_post_format() );
    endwhile; endif; ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>
