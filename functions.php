<?php 
require_once( trailingslashit( get_template_directory() ). 'functions-trong-rest-api.php' );



    function menu_seting(){
        register_nav_menu('topmenu',__( 'Menu chính' ));
    }
    function thumbnail_setup(){
         add_theme_support( 'post-thumbnails'); 
    }
    function setpostview($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }

    function getpostviews($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
            }
        return $count;
        }
function new_excerpt_more( $more ) {
	return '...';
}
function custom_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_more', 'new_excerpt_more' );
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action('init','thumbnail_setup');
add_action('init','menu_seting');
add_action('init','setpostview');
add_action('init','getpostviews');
function wptutsplus_add_dashboard_widgets() {
    wp_add_dashboard_widget( 'wptutsplus_dashboard_welcome', 'Thông báo cần phải đọc', 'wptutsplus_add_welcome_widget' );
}
function wptutsplus_add_welcome_widget(){ ?>
 
    <!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top:0px;
}
</style>
</head>
<body>
<h2>Đề nghị quý khách hàng thanh toán tiền trước thời hạn:</h2>
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("June 30, 2018 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<h1 style="color: red">Số tài khoản: 0711000271750. 
<br>Ngân hàng Vietcombank</h1>
</body>
</html>

 
<?php }
 
add_action( 'wp_dashboard_setup', 'wptutsplus_add_dashboard_widgets' );
add_action( 'wp_enqueue_scripts', 'wbc_enqueue_styles', 101 );
function wbc_enqueue_styles() {
   wp_enqueue_style( 'magnific', get_stylesheet_directory_uri() .'/css/magnific-popup.css' );
   wp_register_script('custom1', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true);
   wp_enqueue_script('custom1');
   }


add_action('rest_api_init', function () {
  register_rest_route( 'abc/v1', 'latest-posts',array(
                'methods'  => 'GET',
                'callback' => 'get_latest_posts_by_category'
      ));
});

function get_latest_posts_by_category(WP_Request $request) {
	$cate_id = $request->get_param('category_id');
    $args = array(
            'category' => $cate_id
    );

    $posts = get_posts($args);
    if (empty($posts)) {
    return new WP_Error( 'empty_category', 'there is no post in this category', array('status' => 404) );

    }

    $response = new WP_REST_Response($posts);
    $response->set_status(200);

    return $response;
}

?>
