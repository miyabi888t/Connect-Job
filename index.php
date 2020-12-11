

<?php
/*
 * Template Name: top
 */ 
?>

<?php get_header() ;?>

        <main role="main">
            <section class="top-wrapper">
                <div class="container">
                    <div class="top-items">
                        <div class="toplogo">
                            <img src="<?php echo get_template_directory_uri() ;?>/img/logo.png" alt="">
                         </div>
                         <h3 class="top-subtitle">TOP企業が集う、国内最大級の<br class="sp-only">外国人留学生特化エージェント</h3>
                         <div class="top-btn">
                             <a href="#contact">イベントに申し込む</a>
                         </div>
                         <div class="main-img">
                             <img src="<?php echo get_template_directory_uri() ;?>/img/fv.png" alt="">
                         </div>
                    </div>
                </div>
            </section>

            <section class="featured-info-wrapper">
                <div class="container">
                    <div class="fi-contents">
                        <h2 class="section-title">Featured Information</h2>
                        <p class="section-sub-title">注目のイベント情報</p>
                        <?php
                        $args = array(
                        'post_type' => 'event', 
                        'posts_per_page' => 9,
                        'meta_key' => 'event_date',
                        'orderby' => 'meta_value',
                        'order'=> 'ASC',  
                            ); ?>
                        <?php $my_query = new WP_Query( $args ); ?>
                        <div class="fi-items" id="photo">
                        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                            <div class="fi-item" id="photo">
                                <a href="<?php the_permalink() ; ?>" >
                                    <div class="fi-item-img">
                                        <img src=" <?php the_field('event_img') ;?>" alt="">
                                    </div>
                                    <p class="fi-date"> <?php the_field('event_date') ;?></p>
                                    <p class="fi-title"> <?php the_field('event_name') ;?></p>
                                    <div class="fi-place">
                                        <p><?php the_field('event_place') ;?></p>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php wp_reset_postdata(); ?>
                        <div class="fi-main-btn">
                            <a href="/index.php?page_id=8">イベント詳細を見る</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="our-event-wrapper">
                <div class="container">
                    <h2 class="section-title">Our Event</h2>
                    <p class="section-sub-title">主催のイベント</p>
                    <div class="oe-items">
                        <div class="oe-item">
                            <div class="oe-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/flow1.png" alt="">
                            </div>
                            <p class="oe-title">Job Fair</p>
                            <p class="oe-text-jp">留学生を積極採用する企業だけが出展する合同企業イベント。11月～3月開催。</p>
                            <p class="oe-text-en">We hold job fair which all participating companies are actively hire international students. The event is held from November to March.</p>
                        </div>
                        <div class="oe-item">
                            <div class="oe-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/flow2.png" alt="">
                            </div>
                            <p class="oe-title">Company’s Event</p>
                            <p class="oe-text-jp">国内留学生限定の、企業の個別説明会や選考会。Connect Job登録者限定ルートもあり！</p>
                            <p class="oe-text-en">Only for international students in Japan, company’s individual　event and selection event. There is also a special route  for Connect Job user only!</p>
                        </div>
                        <div class="oe-item">
                            <div class="oe-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/flow2.png" alt="">
                            </div>
                            <p class="oe-title">Connect Job’s Event</p>
                            <p class="oe-text-jp">Connect Jobが提供する、就活準備のためのイベント。セミナーや面接練習など様々なコンテンツを活用しよう！</p>
                            <p class="oe-text-en">Connect Job provides job preparation events. Use various contents such as seminars and interview practice!</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="lady-wrapper">
                <div class="container">
                    <div class="lady-contents">
                        <div class="lady-items">
                            <div class="lady-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/joinus.png" alt="">
                            </div>
                            <div class="lady-text">
                                <p>留学生向けの合同企業説明会や、<br class="sp-only">個別企業説明会、<br>
                                    選考会、就活準備に役立つ<br class="sp-only">イベントを開催しています。</p>
                                    <div class="lady-btn">
                                        <a href="#contact">イベントに申し込む</a>
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