<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
  <div class="post-list">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="post-card">
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>
        <div class="post-details">
          <h2 class="post-title"><?php the_title(); ?></h2>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <?php the_posts_pagination(); ?>
<?php else : ?>
  <p>No posts found.</p>
<?php endif; ?>
<?php get_footer(); ?>