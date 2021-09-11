<?php // これ以下にPHPのコードを書くよ、という合図

// サムネイル画像を有効にする
add_theme_support( 'post-thumbnails' );

// スタイルシートの適用
function custom_theme_assets() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );