<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */?>

<?php get_header(); ?>

<div class="total-back"></div>

<div class="top">


    <div class="top-main">
        <h2 class="top-title">Growing Engineer</h2>
        <p class="top-subtitle">Masaki.K</p>
    </div>
</div>
<main class="main">
    <section id="service">
        <div class="service-message">
            <p>2022年12月は、まだ対応可能な枠がございます。<br>お仕事のご依頼は<a href="#">こちらから</a>お願いいたします。</p>
        </div>
        <div class="service-main">
            <h2 class="small-title">SERVICE</h2>
            <div class="service-content">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wordpress.png">
                    <h2>WordPress</h2>
                    <p>2件ほど実務でのテーマ<br>作成経験があります！</p>
                </div>
                <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/coding.svg">
                    <h2>コーディング</h2>
                    <p>短納期のコーディングも<br>お任せください。</p>
                    
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/app.svg">
                    <h2>Webアプリ開発</h2>
                    <p>独自に作りたいアプリなど<br>なんでも相談ください！</p>
                </div>
            </div>
            <div class="service-form">
                <a href="<?php echo home_url();?>/contact"><button class="button">お問い合わせ</button></a>
            </div>
        </div>
    </section>
    <section id="works">
        <h2 class="small-title">WORKS</h2>
        <div class="workslist">
            <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => 8,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
                        <div class="workslist-content">
                            <a>
                                <div class="workslist-images"><?php the_post_thumbnail(); ?></div>
                                <div class="workslist-infomations">
                                    <h5 class="workslist-infomations__title"><?php the_title(); ?></h5>
                                    <p class="workslist-infomations__sub"><?php the_category(); ?></p>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; endif; ?>
        </div>
        <div class="works-button">
            <a href="<?php echo home_url();?>/works">
            <button class="button">WORKS一覧</button>
            </a>
        </div>
    </section>
    <section class="top-bottom">
        <div>
            <p>ご依頼をお待ちしております。</p>
            <a href="<?php echo home_url();?>/contact"><button class="button">お問い合わせ</button></a>
        </div>
    </section>
</main>
<?php get_footer(); ?>