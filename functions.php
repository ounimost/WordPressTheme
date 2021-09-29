<?php // これ以下にPHPのコードを書くよ、という合図

// サムネイル画像を有効にする
add_theme_support( 'post-thumbnails' );

// スタイルシートの適用
function custom_theme_assets() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

// blogのアーカイブページ
function post_has_archive( $args, $post_type ) {
  global $wp_rewrite;
  if ( 'post' === $post_type && ! is_null( $wp_rewrite ) ) {
    $archive_slug = 'blog';
    $args['has_archive'] = $archive_slug;
    $archive_slug = $wp_rewrite->root . $archive_slug;
    add_rewrite_rule( "{$archive_slug}/?$", "index.php?post_type=$post_type", 'top' );
    $feeds = '(' . trim( implode( '|', $wp_rewrite->feeds ) ) . ')';
    add_rewrite_rule( "{$archive_slug}/feed/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
    add_rewrite_rule( "{$archive_slug}/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
    add_rewrite_rule( "{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type=$post_type" . '&paged=$matches[1]', 'top' );
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function post_archive_link( $args, $post_type ) {
  if ( 'post' === $post_type ) {
    $link = home_url( 'blog/' );
  }
  return $link;
}
add_filter( 'post_type_archive_link', 'post_archive_link', 10, 2 );