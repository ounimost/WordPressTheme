<!------------------------------------------------>
<!-- アーカイブ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main id="main-top">
  <div id="content-area">

    <!-- カテゴリ名の表示 -->
    <?php $title = single_cat_title('', false); ?>
    <?php if ($title) : ?>
      <h2 id="top-header">CATEGORY : <?php echo $title; ?></h2>
    <?php else: ?>
      <h2 id="top-header">ALL ARTICLES</h2>
    <?php endif;?>

    <div id="new-post-container">
        <!-- 投稿の数だけ繰り返して処理する -->
        <?php while (have_posts()) : ?>
          
          <!-- 投稿を取得 -->
          <?php the_post(); ?>

          <!-- 投稿を表示 -->
          <div id="new-post">
            <?php the_post_thumbnail( array( 250, 200 ), array( 'id' => 'new-post-img' ) ); ?>
            <h3 id="new-post-header"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
            <p id="new-post-info">
              <time id="new-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            </p>
          </div>

        <?php endwhile; ?>
      </div>
    </div>
  </div> 
</main>

<?php get_footer(); ?>