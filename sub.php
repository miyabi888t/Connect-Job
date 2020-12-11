<?php
/*
 * Template Name: sub
 */ 
?>


<?php get_header() ;?>
        
        <main role="main">
            <section class="flow-wrapper">
                <div class="container">
                    <h2 class="section-title">Flow</h2>
                    <p class="section-sub-title">ご利用の流れ</p>
                    <div class="flow-items">
                        <div class="flow-item">
                            <div class="flow-title">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/s1.png" alt="">
                            </div>
                            <div class="flow-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/f1.JPG" alt="">
                            </div>
                            <p class="flow-text">Connect Jobでアカウントを作成</p>
                        </div>
                        <div class="flow-item">
                        <div class="flow-title">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/s2.png" alt="">
                            </div>
                            <div class="flow-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/f2.JPG" alt="">
                            </div>
                            <p class="flow-text">Connect JobのWebサイトからJob Fairや選考会に申し込み！</p>
                        </div>
                        <div class="flow-item">
                        <div class="flow-title">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/s3.png" alt="">
                            </div>
                            <div class="flow-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/f3.JPG" alt="">
                            </div>
                            <p class="flow-text">Job Fair、選考会などのイベントに参加！</p>
                        </div>
                    </div>
                    <p class="flow-bottom">その他にも会員限定の選考会・<br class="sp-tb-only">イベント情報や面接対策、ES添削等、<br>
                        内定まで手厚くサポートするサービスが充実！<br class="sp-tb-only">今すぐご登録を！</p>
                </div>
            </section>

            <section class="event-info-section">
                <div class="container">
                    <h2 class="section-title">Event Information</h2>
                    <p class="section-sub-title">全てのイベント情報</p>
                    <div class="ei-contents">
                        <div class="ei-item">
                            <div class="ei-top">
                                <div class="ei-top-item ei-top-item-1">
                                    <button id="sec1" class='secList bgc-orange'>Fair</button>
                                </div>
                                <div class="ei-top-item ei-top-item-2">
                                    <button id="sec2" class='secList'>Company</button>
                                </div>
                                <div class="ei-top-item ei-top-item-3">
                                    <button id="sec3" class='secList'>Connect Job</button>
                                </div>
                            </div>
                            <div class="ei-main">
                                <div class="ei-main-sec sec1">
                                    <?php query_posts( array(
                                                'post_type' => 'event', 
                                                'taxonomy' => 'event_cat',    
                                                'term' => 'jobfair',          
                                                'posts_per_page' => 20,
                                                'meta_key' => 'event_date',
                                                'orderby' => 'meta_value',
                                                'order'=> 'ASC',   
                                            )); ?>
                                            <?php if(have_posts()): ?>
                                            <?php while(have_posts()):the_post(); ?>
                                        <div class="ei-main-item">
                                            <a href="<?php the_permalink(); ?>">
                                            <div class="ei-inside">
                                            <div class="ei-img">
                                                    <img src=" <?php the_field('event_img') ;?>" alt="">  
                                                </div>
                                                <div class="ei-main-flex">
                                                    <div class="ei-date-time">
                                                        <p class="ei-date"><?php the_field('event_date') ;?></p>
                                                        <p class="ei-time"><?php the_field('event_start') ;?>〜<?php the_field('event_end') ;?></p>
                                                    </div>
                                                    <p class="ei-place"><?php the_field('event_place') ;?></p>
                                                    <p class="ei-title"><?php the_field('event_name') ;?></p>
                                                    <p class="ei-text"><?php the_field('event_text') ;?></p>
                                                </div>
                                            </div>                                                
                                            </a>
                                        </div>
                                        <?php endwhile; else: ?>
                                            <div class="ei-none-item">
                                                <p>現在開催中のイベントは<br class="sp-only">ありません</p>
                                            </div>
                                        <?php endif; ?>
                                        <?php wp_reset_query(); ?> 
                                </div>
                                                
                                <div class="ei-main-sec sec2">
                                    <?php query_posts( array(
                                                'post_type' => 'event', 
                                                'taxonomy' => 'event_cat',    
                                                'term' => 'company',          
                                                'posts_per_page' => 20,
                                                'meta_key' => 'event_date',
                                                'orderby' => 'meta_value',
                                                'order'=> 'ASC',   
                                            )); ?>
                                            <?php if(have_posts()): ?>
                                            <?php while(have_posts()):the_post(); ?>
                                        <div class="ei-main-item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="ei-img">
                                                    <img src=" <?php the_field('event_img') ;?>" alt="">  
                                                </div>
                                                <div class="ei-main-flex">
                                                    <div class="ei-date-time">
                                                        <p class="ei-date"><?php the_field('event_date') ;?></p>
                                                        <p class="ei-time"><?php the_field('event_start') ;?>〜<?php the_field('event_end') ;?></p>
                                                    </div>
                                                    <p class="ei-place"><?php the_field('event_place') ;?></p>
                                                    <p class="ei-title"><?php the_field('event_name') ;?></p>
                                                    <p class="ei-text"><?php the_field('event_text') ;?></p>
                                                </div>
                                            </a>
                                        </div>
                                        <?php endwhile; else: ?>
                                            <div class="ei-none-item">
                                                <p>現在開催中のイベントは<br class="sp-only">ありません</p>
                                            </div>
                                        <?php endif; ?>
                                        <?php wp_reset_query(); ?> 
                                </div>
                               

                                <div class="ei-main-sec sec3">
                                    <?php query_posts( array(
                                                'post_type' => 'event', 
                                                'taxonomy' => 'event_cat',    
                                                'term' => 'connect_job',          
                                                'posts_per_page' => 20,
                                                'meta_key' => 'event_date',
                                                'orderby' => 'meta_value',
                                                'order'=> 'ASC',     
                                            )); ?>
                                            <?php if(have_posts()): ?>
                                            <?php while(have_posts()):the_post(); ?>
                                        <div class="ei-main-item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="ei-img">
                                                    <img src=" <?php the_field('event_img') ;?>" alt="">  
                                                </div>
                                                <div class="ei-main-flex">
                                                    <div class="ei-date-time">
                                                        <p class="ei-date"><?php the_field('event_date') ;?></p>
                                                        <p class="ei-time"><?php the_field('event_start') ;?>〜<?php the_field('event_end') ;?></p>
                                                    </div>
                                                    <p class="ei-place"><?php the_field('event_place') ;?></p>
                                                    <p class="ei-title"><?php the_field('event_name') ;?></p>
                                                    <p class="ei-text"><?php the_field('event_text') ;?></p>
                                                </div>
                                            </a>
                                        </div>
                                        <?php endwhile; else: ?>
                                            <div class="ei-none-item">
                                                <p>現在開催中のイベントは<br class="sp-only">ありません</p>
                                            </div>
                                        <?php endif; ?>
                                        <?php wp_reset_query(); ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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