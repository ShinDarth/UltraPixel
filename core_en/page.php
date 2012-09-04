<?php get_header(); ?>

<div id="main">

<div id="contentwrapper">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <div class="topContent"><?php the_content('(continue reading...)'); ?></div>
<div class="cleared"></div>
</div> <!-- Closes topPost -->


<?php endwhile; ?>

<?php else : ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>">Not found</a></h2>
  <div class="topContent"><p>You can search again using <a href="#searchform">this form</a>...</p></div>
</div> <!-- Closes topPost -->

<?php endif; ?>

</div> <!-- Closes contentwrapper-->


<?php get_sidebar(); ?>
<div class="cleared"></div>

</div><!-- Closes Main -->


<?php get_footer(); ?>
