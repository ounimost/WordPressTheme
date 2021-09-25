<!------------------------------------------------>
<!-- 固定ページ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main id="main-single">
  <?php while (have_posts()) : ?>
    <div id="content-single">
      <!-- 投稿を取得 -->
      <?php the_post(); ?>
      <!-- タイトル -->
      <h1 id=""><?php echo the_title(); ?></h1>
      <!-- 中身 -->
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>