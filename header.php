<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/style.css">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favi.png" id="favicon">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <?php wp_head(); ?>
    </head>





    <body>
        <header>
            <div class="header">
                <div class="header-title">
                <a href="<?php echo home_url() ?>">Masaki PORTFOLIO</a>
                </div>
                <ul class="header-menu">
                    <li><a href="<?php echo home_url(); ?>/HOME">HOME</a></li>
                    <li><a href="<?php echo home_url(); ?>/works">WORKS</a></li>
                    <li><a href="<?php echo site_url(); ?>/about">ABOUT</a></li>
                    <li><a href="<?php echo site_url(); ?>/skill">SKILL</a></li>
                    <li><a href="<?php echo home_url(); ?>#service">SERVICE</a></li>
                    <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
                </ul>
                <div class="mask"></div>
                <button class="header-humburger">
                    <span></span>
                </button>
            </div>
        </header>
    </body>
    <!-- パンクズリスト　-->
    <?php
        $home = '<li><a href="'.get_bloginfo('url').'">トップ</a></li>';
      
        // トップページの場合
        if ( is_front_page() ) {
      
        // カテゴリーページの場合
        } else if ( is_category() ) {
        echo '<ul id="breadcrumbs">';
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while($cat_id != 0) {
          $cat = get_category( $cat_id );
          $cat_link = get_category_link( $cat_id );
          array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
          $cat_id = $cat->parent;
        }
        echo $home;
        foreach ($cat_list as $value) {
          echo $value;
        }
        the_archive_title('<li>≫', '</li>');
        echo '</ul>';
        // アーカイブページの場合
        } else if ( is_archive() ) {
        echo '<ul id="breadcrumbs">';
        echo $home;
        the_archive_title('<li>', '</li>');
        echo '</ul>';
        // 投稿ページの場合
        } else if ( is_single() ) {
            echo '<ul id="breadcrumbs">';
        $cat = get_the_category();
        if( isset( $cat[0]->cat_ID ) ) $cat_id = $cat[0]->cat_ID;
        $cat_list = array();
        while( $cat_id != 0 ) {
          $cat = get_category( $cat_id );
          $cat_link = get_category_link( $cat_id );
          array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
          $cat_id = $cat->parent;
        }
        echo $home;
        foreach($cat_list as $value) {
          echo $value;
        }
        the_title('<li>≫', '</li>');
        echo '</ul>';
        // 固定ページの場合
        } else if ( is_page() ) {
            echo '<ul id="breadcrumbs">';
        echo $home;
        the_title('<li>≫', '</li>');
        echo '</ul>';
        // 検索結果の場合
        } else if ( is_search() ) {
            echo '<ul id="breadcrumbs">';
        echo $home;
        echo '<li>「'.get_search_query().'」の検索結果</li>';
        echo '</ul>';
        // 404ページの場合
        } else if ( is_404() ) {
            echo '<ul id="breadcrumbs">';
        echo $home;
        echo '<li>ページが見つかりません</li>';
        echo '</ul>';
        }
    ?>
</html>