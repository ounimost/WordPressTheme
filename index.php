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
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();　?>
        <div>
          <hr>
          <h3><a><?php the_title(); ?></a></h3>
					<p><a><?php the_category(', '); ?></a></p>
					<time><?php the_time('Y.m.d'); ?></time=>
				</div>
			<?php endwhile; endif;　?>
		</div>
	</div>
</body>
</html>