<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My WordPress Theme</title>
</head>
<body>
  <h1>記事の一覧</h1>

  <div>
      <!-- 投稿の数だけ繰り返して処理する -->
      <?php while (have_posts()) : ?>
        
        <!-- 投稿を取得 -->
        <?php the_post(); ?>

        <div>
          <hr>
          <!-- 投稿のタイトルを表示して、投稿ページへのリンクを張る -->
          <h3><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
          <!-- カテゴリを表示する -->
          <p><?php the_category(', '); ?></p>
          <!-- 投稿日時をを表示する -->
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        </div>

      <?php endwhile; ?>
    </div>
  </div>
</body>
</html>