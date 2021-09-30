<!------------------------------------------------>
<!-- アーカイブ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main class="main-top">
  <div class="content-area">

    <!-- カテゴリ名の表示 -->
    <?php $title = single_cat_title('', false); ?>
    <?php if ($title) : ?>
      <h2 class="top-header">CATEGORY : <?php echo $title; ?></h2>
    <?php else: ?>
      <h2 class="top-header">ALL ARTICLES</h2>
    <?php endif;?>

    <div class="new-post-container">

      <!-- ページの最大表示投稿数を変更 -->
      
      <!-- 投稿の数だけ繰り返して処理する -->
      <?php while (have_posts()) : ?>
        
        <!-- 投稿を取得 -->
        <?php the_post(); ?>

        <!-- 投稿を表示 -->
        <div class="new-post">
          <?php the_post_thumbnail( array( 250, 200 ), array( 'id' => 'new-post-img' ) ); ?>
          <h3 class="new-post-header"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
          <p class="new-post-info">
            <time class="new-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          </p>
        </div>

      <?php endwhile; ?>
    </div>

    <!-- ページネーション -->
    <div class="post-pagenation">
          <?php 
            $pagination = get_the_posts_pagination(); 
            $pagination = preg_replace('/\<h2(.*?)\<\/h2\>/', '', $pagination);
            echo $pagination; 
          ?>
    </div>
    
  </div> 
</main>

<?php get_footer(); ?>