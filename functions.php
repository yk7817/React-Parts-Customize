<?php

// JSファイルの読み込み
function enqueue_scripts() {
    wp_enqueue_script( 'react-app', get_template_directory_uri() . '/react-app/assets/js/main.js' , array(), filemtime(get_template_directory() . '/react-app/assets/js/main.js'), true );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


// CSSファイルの読み込み
function enqueue_styles() {
    wp_enqueue_style( 'react-style', get_template_directory_uri() . '/react-app/assets/css/main', array(), filemtime(get_template_directory() . '/react-app/assets/css/main'), true );
}
add_action('wp_enqueue_scripts', 'enqueue_styles');


// REST API情報をReactに渡す
function theme_localize_script() {
    wp_localize_script('react-parts', 'wpData', array(
        'root' => esc_url_raw(rest_url()),
        'nonce' => wp_create_nonce('wp_rest'),
        'siteUrl' => get_site_url()
    )); 
}
add_action('wp_enqueue_scripts', 'theme_localize_script');



// ------------------
// カスタム投稿 1
// ------------------

function create_react_part_custom_posts_1() {
    register_post_type('react_part_1', array(
        'labels' => array(
            'name' => 'React-Part-1',
            'singular_name' => 'React-Part-1',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-react-part-1'
    ));
}
add_action('init', 'create_react_part_custom_posts_1');

// ------------------
// カスタム投稿 1 タクソノミー設定
// ------------------

function create_react_part_taxonomy_1() {
    $labels = array(
        'name' => 'カテゴリ',
        'singular_name' => 'カテゴリ',
        'search_items' => 'カテゴリの検索',
        'all_items' => 'すべてのカテゴリ',
        'edit_name' => 'カテゴリの検索',
        'update_name' => 'カテゴリを更新',
        'add_new_item' => '新規カテゴリを追加',
        'new_item_name' => '新しいカテゴリ名',
        'menu_name' => 'カテゴリ',
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'react-category-1'),
        'show_in_rest' => true,
    );
    register_taxonomy('react_category_1', array('react_part_1'), $args);
}

add_action('init', 'create_react_part_taxonomy_1');

// ------------------
// カスタム投稿 2
// ------------------

function create_react_part_custom_posts_2() {
    register_post_type('react_part_2', array(
        'labels' => array(
            'name' => 'React-Part-2',
            'singular_name' => 'React-Part-2',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-react-part-2'
    ));
}
add_action('init', 'create_react_part_custom_posts_2');

// ------------------
// カスタム投稿 2 タクソノミー設定
// ------------------

function create_react_part_taxonomy_2() {
    $labels = array(
        'name' => 'カテゴリ',
        'singular_name' => 'カテゴリ',
        'search_items' => 'カテゴリの検索',
        'all_items' => 'すべてのカテゴリ',
        'edit_name' => 'カテゴリの検索',
        'update_name' => 'カテゴリを更新',
        'add_new_item' => '新規カテゴリを追加',
        'new_item_name' => '新しいカテゴリ名',
        'menu_name' => 'カテゴリ',
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'react-category-2'),
        'show_in_rest' => true,
    );
    register_taxonomy('react_category_2', array('react_part_2'), $args);
}

add_action('init', 'create_react_part_taxonomy_2');

