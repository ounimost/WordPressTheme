<!------------------------------------------------>
<!-- トップページ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main class="main-top">
  <!------------------------------------------------>
  <!-- 新着の記事一覧 -->
  <!------------------------------------------------>
  <div class="content-area">
    <h2 class="top-header">NEW ARTICLES</h2>
    <div class="new-post-container">

      <!-- ページの最大表示投稿数を変更 -->
      <?php query_posts('posts_per_page=7'); ?>

      <!-- 投稿の数だけ繰り返して処理する -->
      <?php while (have_posts()) : ?>
        
        <!-- 投稿を取得 -->
        <?php the_post(); ?>

        <!-- 投稿を表示 -->
        <div class="new-post">

          <!-- サムネイル画像を表示する -->
          <a href="<?php echo get_permalink(); ?>">
            <?php the_post_thumbnail( array( 250, 200 ), array( 'class' => 'post-img' ) ); ?>
          </a>

          <!-- 投稿のタイトルを表示して、投稿ページへのリンクを張る -->
          <h3 class="new-post-header"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>

          <p class="new-post-info">
            <!-- カテゴリを表示する -->
            <span class="new-post-category"><?php the_category(', '); ?></span>
            <!-- 投稿日時をを表示する -->
            <time class="new-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          </p>
        </div>

      <?php endwhile; ?>

      <!-- ブログ投稿一覧ページへのリンク -->
      <div class="center-btn">
        <a href="<?php echo home_url('/blog'); ?>" class="btn">▶　ALL ARTICLES</a>
      </div>

    </div>

  </div> 
</main>

<?php get_footer(); ?>