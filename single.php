<!------------------------------------------------>
<!-- 投稿ページ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main>
        <?php while (have_posts()) : ?>
          
          <div id="content-area">
            <!-- 投稿を取得 -->
            <?php the_post(); ?>

            <!-- タイトル -->
            <h1 id=""><?php echo the_title(); ?></h1>

            <!-- カテゴリ -->
            <span id="new-post-category"><?php the_category(', '); ?></span>
            
            <!-- 投稿日時 -->
            <time id="new-post-date" datetime="<?php the_time('Y-m-d'); ?>">作成日：<?php the_time('Y.m.d'); ?></time>
          </div>

          <!-- 画像 -->
          <?php the_post_thumbnail('full', array( 'class' => 'img-post' ) ); ?>
		      
          <!-- 中身 -->
          <div id="content-area">
          <?php the_content(); ?>
        </div>

        <?php endwhile; ?>
    </div>
  </div> 
</main>

<?php get_footer(); ?>