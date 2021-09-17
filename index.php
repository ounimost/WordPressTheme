<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MY BLOG</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>
  <!------------------------------------------------>
  <!-- ヘッダ -->
  <!------------------------------------------------>
  <header class="site-header">
    <div class="site-header-wrapper">

      <!-- LOGO -->
      <a href="#" class="brand">MY BLOG</a>

      <!-- Navi -->
      <nav class="nav">
        <ul class="nav-wrapper">
          <li class="nav-item"><a href="#">About</a></li>
          <li class="nav-item"><a href="#">Category</a></li>
          <li class="nav-item"><a href="#">Contact</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main>
    <!------------------------------------------------>
    <!-- 新着の記事一覧 -->
    <!------------------------------------------------>
    <div id="new-post-list">
      <h2 id="top-header">ARTICLES</h2>
      <div id="new-post-container">
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

  <!------------------------------------------------>
  <!-- フッター -->
  <!------------------------------------------------>
  <footer class="site-footer">
    <p class="copyright">&copy; 2021 OUNI studio.</p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>