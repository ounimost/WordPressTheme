<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My WordPress Theme</title>

  <?php wp_head(); ?>
</head>
<body>
  <main>
    <!------------------------------------------------>
    <!-- 新着の記事一覧 -->
    <!------------------------------------------------>
    <div id="new-post-list">
      <h2 id="top-header">記事の一覧</h2>
      <div id="container">
          <!-- 投稿の数だけ繰り返して処理する -->
          <?php while (have_posts()) : ?>
            
            <!-- 投稿を取得 -->
            <?php the_post(); ?>

            <!-- 投稿を表示 -->
            <div id="new-post">

              <!-- サムネイル画像を表示する -->
              <?php the_post_thumbnail( array( 250, 200 ), array( 'id' => 'new-post-img' ) ); ?>

              <!-- 投稿のタイトルを表示して、投稿ページへのリンクを張る -->
              <h3 id="new-post-header"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>

              <p id="new-post-info">
                <!-- カテゴリを表示する -->
                <span id="new-post-category"><?php the_category(', '); ?></span>
                <!-- 投稿日時をを表示する -->
                <time id="new-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              </p>
            </div>

          <?php endwhile; ?>
        </div>
      </div>
    </div> 
  </main>
</body>
</html>