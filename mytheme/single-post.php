<?php get_header(); ?>

<div class="post-card">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php endif; ?>
    <div class="post-details">
      <h2 class="post-title"><?php the_title(); ?></h2>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>