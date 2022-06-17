<?php get_header(); ?>
<main class="contact">
    <div id="contact">
        <div class="contact-form">
            <h1 class="small-title">CONTACT</h1>
            <p class="contact-form_descript">お仕事のご依頼などお待ちしております。</p>
            <?php echo do_shortcode('[mwform_formkey key="11"]'); ?>
        </div>
    </div>
    <div class="linkhome">
        <a href="<?php echo home_url(); ?>">HOME</a>
    </div>
</main>
<?php get_footer(); ?>