<?php
/*
 * Template Name: single
 */ 
?>

<?php get_header() ;?>

        <main role="main">
            <section class="detail-wrapper">
                <div class="detail-head">
                    <h2 class="section-title">Event Details</h2>
                    <p class="section-sub-title">イベント詳細</p>
                </div>
                <div class="container">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="detail-contents">
                        <div class="detail-img">
                            <img src="<?php the_field('event_img') ;?>" alt="">
                        </div>
                        <h3 class="detail-title"><?php the_field('event_name') ;?></h3>
                        <div class="detail-date-place">
                            <div class="detail-left">
                                <p class="detail-date"><?php the_field('event_date') ;?></p>
                            </div>
                            <div class="detail-right">
                                <p class="detail-place"><?php the_field('event_place') ;?></p>
                                <p class="detail-time"><?php the_field('event_start') ;?>〜<?php the_field('event_end') ;?></p>
                            </div>
                        </div>
                        <div class="detail-logo-items">
                        <img src="<?php the_field('event_sponsor') ;?>" alt="">
                        </div>
                        <p class="detail-text"><?php the_field('event_text') ;?></p>
                        <div class="detail-contact">
                            <img src="<?php echo get_template_directory_uri() ;?>/img/contact.png" alt="">
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </section>

            <section class="contact-wrapper">
                <div class="container">
                    <div class="contact-contents" id="contact">
                        <h2 class="section-title">Contact</h2>
                        <p class="section-sub-title">お問い合わせ</p>
                        <?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>


                    </div>
                </div>
            </section>
      
<?php get_footer() ;?>