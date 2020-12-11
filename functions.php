
<?php
function my_setup()
{
add_theme_support('post-thumbnails'); 
add_theme_support('automatic-feed-links'); 
add_theme_support('title-tag'); 
add_theme_support(
'html5',
array( 
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), '1.0.0', 'all');
wp_enqueue_style('slick2', get_template_directory_uri() . '/css/slick-theme.css', array(), '1.0.0', 'all');
wp_enqueue_script('js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');?>




<?php
    //コンタクトフォームのイベントを自動的に追加できるようにする
    function filter_wpcf7_form_tag( $scanned_tag, $replace ) {
        if(!empty($scanned_tag)){
                //nameで判別
                if($scanned_tag['name'] == 'eventname'){
                //カスタム投稿タイプの取得
                global $post;
                $args = array(
                'posts_per_page' => -1, 
                'post_type' => 'event',
                'order' => 'ASC',
                );
                $customPosts = get_posts($args);
                if($customPosts){
                    foreach($customPosts as $post){
                        setup_postdata( $post );
                        $title = get_the_title();
                        
                        //$scanned_tagに情報を追加
                        $scanned_tag['values'][] = $title;
                        $scanned_tag['labels'][] = $title;
                    }
                }
                wp_reset_postdata();
                }
        }
        return $scanned_tag; 
    }; 
    //wpcf7_add_form_tag と言う関数でショートコードと実際のフォームでどのように出力するかを決めている
    add_filter( 'wpcf7_form_tag', 'filter_wpcf7_form_tag', 11, 2 );
    add_filter('protected_title_format', 'remove_protected');
    function remove_protected($title) {
        return '%s';
    }
?>