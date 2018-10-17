<?php get_header(); ?>

<div class="row">
  <div class="small-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post">
        <h2>
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </div>
    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer();
