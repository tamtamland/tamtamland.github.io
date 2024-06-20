<?php

    function custom_theme_setup() {

    //タイトルタグを動的に出力
    add_theme_support( 'title-tag' );

    //アイキャッチ画像を有効化
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 400, false );

    }

    add_action( 'after_setup_theme', 'custom_theme_setup' );
    //custom_theme_setup の名称は自分で好きなファイル名でOK





?>