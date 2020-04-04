<?php

add_action('rest_api_init', function()
{
    $version = 1;
    register_rest_route('posts_custom/v' . $version, '/list_post/', array(
        'methods' => 'GET',
        'callback' => 'get_list_post'
    ));
    register_rest_route('posts_custom/v' . $version, '/list_post/(?P<post_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_post_by_id'
    ));
    register_rest_route('posts_custom/v' . $version, '/list_category/', array(
        'methods' => 'GET',
        'callback' => 'get_list_category'
    ));
    register_rest_route('posts_custom/v' . $version, '/list_category/(?P<category_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_post_by_categoryid'
    ));

    // for learn v2
    register_rest_route('courses', '/list_course/(?P<course_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_course_details'
    ));
    register_rest_route('courses', '/list_course', array(
        'methods' => 'GET',
        'callback' => 'get_list_course'
    ));
    register_rest_route('lesson', '/list_lesson/(?P<course_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_list_lesson'
    ));
    register_rest_route('lesson', '/detail_lesson/(?P<lesson_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_lesson_details'
    ));
    register_rest_route('topics', '/list_topic/(?P<lesson_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_topic_list'
    ));
    register_rest_route('topics', '/topic_detail/(?P<topic_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_topic_detail'
    ));
    register_rest_route('login', '/login' ,array(
        'methods' => 'GET',
        'callback' => 'get_login'
    ));

    register_rest_route('thailan', '/get_huyen/', array(
        'methods' => 'GET',
        'callback' => 'get_huyen'
    ));

    register_rest_route('thailan', '/get_xa/', array(
        'methods' => 'GET',
        'callback' => 'get_xa'
    ));

    register_rest_route('thailan', '/get_zipcode/', array(
        'methods' => 'GET',
        'callback' => 'get_zipcode'
    ));

    
    
    
    
    
});

function get_login(WP_REST_Request $request){
	$result = '{
		"token": "QpwL5tke4Pnpja7X"
	}';
	$result = json_decode($result);
	$response = new WP_REST_Response($result);
    $response->set_status(200);
    return $response;
}


function get_course_details(WP_REST_Request $request) {
	$course_id = $request->get_param('course_id');
		$result = '{
	    "ID": 42,
	    "post_author": "1",
	    "post_date": "2017-02-27 08:59:14",
	    "post_date_gmt": "2017-02-27 08:59:14",
	    "post_content": "<p style=\"text-align: left;\">B\u1ea1n \u0111\u00e3 bao gi\u1edd b\u1eaft chuy\u1ec7n, t\u1ef1 gi\u1edbi thi\u1ec7u v\u1edbi m\u1ed9t ng\u01b0\u1eddi n\u01b0\u1edbc ngo\u00e0i ch\u01b0a?</p>\r\n<p style=\"text-align: left;\">B\u00e0i h\u1ecdc ng\u00e0y h\u00f4m nay s\u1ebd gi\u00fap b\u1ea1n l\u00e0m \u0111i\u1ec1u \u0111\u00f3 m\u1ed9t c\u00e1ch \u0111\u01a1n gi\u1ea3n v\u00e0 l\u1ecbch s\u1ef1.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
	    "post_title": "Lesson 01 - Introducing yourself",
	    "post_excerpt": "",
	    "post_status": "publish",
	    "comment_status": "open",
	    "ping_status": "closed",
	    "post_password": "",
	    "post_name": "lesson-01-introducing-yourself",
	    "to_ping": "",
	    "pinged": "",
	    "post_modified": "2019-01-04 16:07:53",
	    "post_modified_gmt": "2019-01-04 09:07:53",
	    "post_content_filtered": "",
	    "post_parent": 0,
	    "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=42",
	    "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
	    "menu_order": 1,
	    "post_type": "sfwd-lessons",
	    "post_mime_type": "",
	    "comment_count": "0",
	    "filter": "raw",
        "list_lesson": [
    {
      "ID": 42,
      "post_author": "1",
      "post_date": "2017-02-27 08:59:14",
      "post_date_gmt": "2017-02-27 08:59:14",
      "post_content": "<p style=\"text-align: left;\">B\u1ea1n \u0111\u00e3 bao gi\u1edd b\u1eaft chuy\u1ec7n, t\u1ef1 gi\u1edbi thi\u1ec7u v\u1edbi m\u1ed9t ng\u01b0\u1eddi n\u01b0\u1edbc ngo\u00e0i ch\u01b0a?</p>\r\n<p style=\"text-align: left;\">B\u00e0i h\u1ecdc ng\u00e0y h\u00f4m nay s\u1ebd gi\u00fap b\u1ea1n l\u00e0m \u0111i\u1ec1u \u0111\u00f3 m\u1ed9t c\u00e1ch \u0111\u01a1n gi\u1ea3n v\u00e0 l\u1ecbch s\u1ef1.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 01 - Introducing yourself",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-01-introducing-yourself",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2019-01-04 16:07:53",
      "post_modified_gmt": "2019-01-04 09:07:53",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=42",
      "menu_order": 1,
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 43,
      "post_author": "1",
      "post_date": "2017-02-27 09:00:19",
      "post_date_gmt": "2017-02-27 09:00:19",
      "post_content": "S\u1edf th\u00edch l\u00e0 ch\u1ee7 \u0111\u1ec1 quen thu\u1ed9c trong giao ti\u1ebfp ti\u1ebfng Anh.\r\n\r\nCh\u00fang t\u00f4i s\u1ebd gi\u00fap b\u1ea1n n\u00f3i v\u1ec1 v\u1ea5n \u0111\u1ec1 n\u00e0y tr\u00f4i ch\u1ea3y v\u00e0 l\u01b0u lo\u00e1t.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 02 - What Kind of Music do You Like?",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-02-what-kind-of-music-do-you-like",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 14:58:07",
      "post_modified_gmt": "2017-08-14 07:58:07",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=43",
      "menu_order": 2,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 172,
      "post_author": "1",
      "post_date": "2017-02-28 13:53:30",
      "post_date_gmt": "2017-02-28 13:53:30",
      "post_content": "Lesson 03 s\u1ebd gi\u00fap b\u1ea1n di\u1ec5n \u0111\u1ea1t s\u1ef1 ki\u1ec3m tra l\u1ea1i b\u1ea3n th\u00e2n tr\u01b0\u1edbc khi t\u1edbi m\u1ed9t cu\u1ed9c h\u1eb9n quan tr\u1ecdng n\u00e0o \u0111\u00f3 nh\u01b0 \u0111i ph\u1ecfng v\u1ea5n, d\u1ef1 ti\u1ec7c hay h\u1eb9n h\u00f2.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 03 - Before Going to an Appointment",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-03-before-going-to-an-appointment",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-09-12 11:07:19",
      "post_modified_gmt": "2017-09-12 04:07:19",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=172",
      "menu_order": 3,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 174,
      "post_author": "1",
      "post_date": "2017-02-28 13:54:32",
      "post_date_gmt": "2017-02-28 13:54:32",
      "post_content": "\u1ede Lesson 04 ch\u00fang t\u00f4i s\u1ebd gi\u00fap b\u1ea1n hi\u1ec3u h\u01a1n v\u1ec1 vi\u1ec7c \u0111i du l\u1ecbch v\u00e0o d\u1ecbp T\u1ebft Nguy\u00ean \u0111\u00e1n.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 04 - A Lunar New Year Flight",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-04-a-lunar-new-year-flight",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 14:59:10",
      "post_modified_gmt": "2017-08-14 07:59:10",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=174",
      "menu_order": 4,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 176,
      "post_author": "1",
      "post_date": "2017-02-28 13:55:09",
      "post_date_gmt": "2017-02-28 13:55:09",
      "post_content": "Mua s\u1eafm l\u00e0 c\u00f4ng vi\u1ec7c thi\u1ebft y\u1ebfu h\u00e0ng ng\u00e0y.\r\n\r\nSau khi h\u1ecdc b\u00e0i n\u00e0y, b\u1ea1n s\u1ebd kh\u00f4ng c\u00f2n ph\u1ea3i lo l\u1eafng kh\u00f4ng bi\u1ebft h\u1ecfi v\u1ec1 \u0111\u1ed3 b\u1ea1n mu\u1ed1n mua nh\u01b0 th\u1ebf n\u00e0o n\u1eefa.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 05 - Shopping",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-05-shopping",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 14:59:11",
      "post_modified_gmt": "2017-08-14 07:59:11",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=176",
      "menu_order": 5,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 178,
      "post_author": "1",
      "post_date": "2017-02-28 13:56:20",
      "post_date_gmt": "2017-02-28 13:56:20",
      "post_content": "B\u1ea1n s\u1ebd kh\u00f4ng c\u00f2n ph\u1ea3i b\u0103n kho\u0103n v\u1ec1 c\u00e1ch m\u1edf l\u1eddi m\u1eddi \u0111i \u0103n v\u00ec ch\u00fang t\u00f4i s\u1ebd gi\u00fap b\u1ea1n d\u1ec5 d\u00e0ng bi\u1ec3u \u0111\u1ea1t trong Lesson 06.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 06 - Dining Out",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-06-dining-out",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 14:59:26",
      "post_modified_gmt": "2017-08-14 07:59:26",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=178",
      "menu_order": 6,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 183,
      "post_author": "1",
      "post_date": "2017-02-28 13:57:49",
      "post_date_gmt": "2017-02-28 13:57:49",
      "post_content": "Lesson 08 s\u1ebd cung c\u1ea5p m\u1eabu c\u00e2u giao ti\u1ebfp quen thu\u1ed9c li\u00ean quan \u0111\u1ebfn th\u1eddi gian bay v\u00e0 chuy\u1ebfn bay cho b\u1ea1n.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 08 - In the Airport",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-08-in-the-airport",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:00:31",
      "post_modified_gmt": "2017-08-14 08:00:31",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=183",
      "menu_order": 8,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 185,
      "post_author": "1",
      "post_date": "2017-02-28 13:58:20",
      "post_date_gmt": "2017-02-28 13:58:20",
      "post_content": "Ch\u1eafc h\u1eb3n b\u1ea1n mu\u1ed1n gi\u00fap \u0111\u1ee1 ng\u01b0\u1eddi n\u01b0\u1edbc ngo\u00e0i h\u1ecfi \u0111\u01b0\u1eddng khi h\u1ecd \u0111i du l\u1ecbch.\r\n\r\nCh\u1ec9 c\u1ea7n h\u1ecdc xong Lesson 09 b\u1ea1n s\u1ebd l\u00e0m \u0111\u01b0\u1ee3c \u0111i\u1ec1u \u0111\u00f3.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 09 - Giving Directions",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-09-giving-directions",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:00:49",
      "post_modified_gmt": "2017-08-14 08:00:49",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=185",
      "menu_order": 9,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 188,
      "post_author": "1",
      "post_date": "2017-02-28 13:59:23",
      "post_date_gmt": "2017-02-28 13:59:23",
      "post_content": "<p style=\"text-align: left;\">B\u1ea1n th\u00edch m\u1ed9t ng\u01b0\u1eddi, b\u1ea1n mu\u1ed1n th\u1ed5 l\u1ed9 v\u00e0 m\u1eddi ng\u01b0\u1eddi \u0111\u00f3 \u0111i \u0103n.</p>\r\n<p style=\"text-align: left;\">\u0110i\u1ec1u \u0111\u00f3 s\u1ebd kh\u00f4ng c\u00f2n l\u00e0 tr\u1edf ng\u1ea1i khi b\u1ea1n h\u1ecdc xong Lesson 10.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 10 - Asking Someone Out",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-10-asking-someone-out",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:01:15",
      "post_modified_gmt": "2017-08-14 08:01:15",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=188",
      "menu_order": 10,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 190,
      "post_author": "1",
      "post_date": "2017-02-28 14:00:14",
      "post_date_gmt": "2017-02-28 14:00:14",
      "post_content": "<p style=\"text-align: left;\">Khi b\u1ea1n mu\u1ed1n h\u1eb9n b\u1ea1n c\u1ee7a b\u1ea1n \u0111i mua s\u1eafm th\u00ec n\u00ean n\u00f3i nh\u01b0 th\u1ebf n\u00e0o?</p>\r\n<p style=\"text-align: left;\">Lesson 11 s\u1ebd gi\u1ea3i \u0111\u00e1p c\u1eb7n k\u1ebd cho b\u1ea1n.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 11 - The Clothes Shop is Closed",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-11-the-clothes-shop-is-closed",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:01:29",
      "post_modified_gmt": "2017-08-14 08:01:29",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=190",
      "menu_order": 11,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 193,
      "post_author": "1",
      "post_date": "2017-02-28 14:00:49",
      "post_date_gmt": "2017-02-28 14:00:49",
      "post_content": "<p style=\"text-align: left;\">B\u00e0i n\u00e0y gi\u00fap b\u1ea1n d\u1ec5 d\u00e0ng n\u00f3i v\u1ec1 d\u1ef1 \u0111\u1ecbnh \u0111i du l\u1ecbch c\u1ee7a b\u1ea1n c\u0169ng nh\u01b0 h\u1ecfi ng\u01b0\u1eddi n\u01b0\u1edbc ngo\u00e0i v\u1ec1 nh\u1eefng chuy\u1ebfn \u0111i c\u1ee7a h\u1ecd.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 12 - Vacation to Canada",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-12-vacation-to-canada",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-09 10:08:11",
      "post_modified_gmt": "2017-08-09 03:08:11",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=193",
      "menu_order": 12,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 779,
      "post_author": "1",
      "post_date": "2017-02-28 13:57:08",
      "post_date_gmt": "2017-02-28 13:57:08",
      "post_content": "Qua b\u00e0i n\u00e0y ch\u00fang t\u00f4i cung c\u1ea5p cho b\u1ea1n nh\u1eefng t\u1eeb v\u1ef1ng v\u00e0 m\u1eabu c\u00e2u quen thu\u1ed9c m\u00e0 ng\u01b0\u1eddi M\u1ef9 hay n\u00f3i chuy\u1ec7n v\u1ec1 gi\u1edbi showbiz v\u00e0 c\u00e1c ng\u00f4i sao.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 07 - A Good Singer",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-07-a-good-singer",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:00:16",
      "post_modified_gmt": "2017-08-14 08:00:16",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.net/lesson/lesson-07-a-good-singer",
      "menu_order": 7,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 4428,
      "post_author": "1",
      "post_date": "2017-08-07 15:32:59",
      "post_date_gmt": "2017-08-07 08:32:59",
      "post_content": "\u0110\u1ec3 b\u1eaft \u0111\u1ea7u h\u1ecdc, b\u1ea1n c\u1ea7n\u00a0hi\u1ec3u r\u00f5\u00a03 k\u1ef9 thu\u1eadt n\u1ec1n t\u1ea3ng \u0111\u1ec3 chinh ph\u1ee5c ti\u1ebfng Anh giao ti\u1ebfp.\r\n\r\n\u0110\u00e2y ch\u00ednh l\u00e0 3 k\u1ef9 thu\u1eadt t\u1ea1o n\u00ean s\u1ef1 kh\u00e1c bi\u1ec7t v\u00e0 hi\u1ec7u qu\u1ea3 c\u1ee7a Eng Breaking.\r\n\r\nH\u00e0ng ch\u1ee5c ngh\u00ecn h\u1ecdc vi\u00ean Eng Breaking \u0111\u00e3 thay \u0111\u1ed5i tr\u00ecnh \u0111\u1ed9 ti\u1ebfng Anh giao ti\u1ebfp v\u00e0 th\u00e0nh c\u00f4ng nh\u1edd vi\u1ec7c \u00e1p d\u1ee5ng th\u00e0nh th\u1ea1o 3 k\u1ef9 thu\u1eadt n\u00e0y.\r\n\r\nT\u00f4i tin, n\u00f3 c\u0169ng th\u1ef1c s\u1ef1 h\u1eefu \u00edch v\u1edbi b\u1ea1n.\r\n\r\nH\u00e3y kh\u00e1m ph\u00e1 ngay!\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>L\u01b0u \u00fd:</strong> \u0111\u1ec3 c\u00f3 th\u1ec3 m\u1edf \u0111\u01b0\u1ee3c\u00a0<strong>Lesson 01 </strong>b\u1ea1n vui l\u00f2ng h\u00e3y click v\u00e0o n\u00fat m\u00e0u \u0111\u1ecf\u00a0<span style=\"color: #ff0000;\"><strong>[MARK COMPLETE]</strong></span> ph\u1ea7n d\u01b0\u1edbi c\u00f9ng c\u1ee7a <strong>Lesson</strong> n\u00e0y.[/su_note]\r\n<h2 style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><span style=\"text-decoration: underline;\">#1 - K\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</span></span></h2>\r\nH\u01b0\u1edbng d\u1eabn n\u00e0y s\u1ebd gi\u00fap b\u1ea1n s\u1eed d\u1ee5ng <strong>k\u1ef9 thu\u1eadt\u00a0</strong><b>Nghe Ng\u1ea5m</b> trong vi\u1ec7c luy\u1ec7n nghe ti\u1ebfng Anh m\u1ed9t c\u00e1ch \u0111\u01a1n gi\u1ea3n v\u00e0 hi\u1ec7u qu\u1ea3.\r\n\r\nV\u00e0 \u0111\u00e2y \u2026\r\n\r\n\u2026 l\u00e0 <b>c\u00e1c b\u01b0\u1edbc c\u1ee5 th\u1ec3</b> c\u1ee7a <b>k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</b>.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>H\u00e3y click n\u00fat <span style=\"color: #1fa850;\">M\u00c0U XANH</span></strong>\u00a0b\u00ean d\u01b0\u1edbi \u0111\u1ec3 xem c\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng <strong>K\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</strong>[/su_note]\r\n\r\n[su_spoiler title=\"<strong>C\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n\r\n<b>B\u01b0\u1edbc 1: L\u00e0m quen v\u1edbi b\u00e0i nghe</b>\r\n\r\nB\u1ea1n h\u00e3y luy\u1ec7n nghe b\u00e0i nghe c\u1ee7a Eng Breaking v\u00e0 ch\u01b0a c\u1ea7n hi\u1ec3u n\u1ed9i dung.\r\n\r\nB\u1ea1n kh\u00f4ng s\u1eed d\u1ee5ng transcript, t\u1eeb \u0111i\u1ec3n v\u00e0 kh\u00f4ng d\u1ecbch sang ti\u1ebfng Vi\u1ec7t khi nghe t\u1ea1i b\u01b0\u1edbc n\u00e0y.\r\n\r\n<b>B\u01b0\u1edbc 2: Hi\u1ec3u n\u1ed9i dung</b>\r\n\r\nB\u1ea1n c\u1ea7n s\u1eed d\u1ee5ng gi\u00e1o tr\u00ecnh khi c\u1ea7n v\u00e0 nghe b\u00e0i luy\u1ec7n \u0111\u1ebfn khi hi\u1ec3u \u0111\u01b0\u1ee3c to\u00e0n b\u1ed9 n\u1ed9i dung.\r\n\r\n<b>B\u01b0\u1edbc 3: Nghe v\u00e0 c\u1ea3m nh\u1eadn</b>\r\n\r\nB\u1ea1n kh\u00f4ng s\u1eed d\u1ee5ng gi\u00e1o tr\u00ecnh, nghe v\u00e0 t\u01b0\u1edfng t\u01b0\u1ee3ng theo c\u00e2u chuy\u1ec7n. H\u00e3y nghe \u0111\u1ebfn khi c\u1ea3m \u0111\u01b0\u1ee3c to\u00e0n b\u1ed9 n\u1ed9i dung b\u00e0i nghe m\u1ed9t c\u00e1ch d\u1ec5 d\u00e0ng.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>H\u00e3y nh\u1edb r\u1eb1ng</strong> b\u1ea1n c\u1ea7n hi\u1ec3u \u0111\u01b0\u1ee3c to\u00e0n b\u1ed9 n\u1ed9i dung hay c\u00e2u chuy\u1ec7n l\u00e0 m\u1ee5c ti\u00eau quan tr\u1ecdng nh\u1ea5t c\u1ee7a k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m.[/su_note]\r\n[/su_spoiler]\r\n<h2 style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><span style=\"text-decoration: underline;\">#2 - K\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</span></span></h2>\r\nB\u1ea1n \u0111\u00e3 bi\u1ebft l\u00e0m th\u1ebf n\u00e0o \u0111\u1ec3 luy\u1ec7n nghe hi\u1ec7u qu\u1ea3 trong th\u1eddi gian ng\u1eafn.\r\n\r\nV\u00e0 gi\u1edd l\u00e0 l\u00fac b\u1ea1n s\u1ebd c\u00f3 \u0111\u01b0\u1ee3c ph\u01b0\u01a1ng ph\u00e1p luy\u1ec7n n\u00f3i ti\u1ebfng Anh chu\u1ea9n v\u00e0 t\u1ef1 nhi\u00ean nh\u01b0 ng\u01b0\u1eddi b\u1ea3n x\u1ee9...\r\n\r\n...ch\u1ec9 v\u1edbi <b>3 b\u01b0\u1edbc </b>\u0111\u01a1n gi\u1ea3n...\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>H\u00e3y click n\u00fat <span style=\"color: #1fa850;\">M\u00c0U XANH</span></strong>\u00a0b\u00ean d\u01b0\u1edbi \u0111\u1ec3 xem c\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng <strong>K\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</strong>[/su_note]\r\n\r\n[su_spoiler title=\"<strong>C\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng k\u1ef9 thu\u1eadt N\u00f3i \u0111u\u1ed5i</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n\r\n<b>B\u01b0\u1edbc 1: Luy\u1ec7n tai nh\u1ea1y ti\u1ebfng Anh</b>\r\n\r\nH\u00e3y nghe c\u00e1c b\u00e0i luy\u1ec7n c\u1ee7a ph\u1ea7n n\u00f3i \u0111u\u1ed5i cho \u0111\u1ebfn khi b\u1ea1n hi\u1ec3u \u0111\u01b0\u1ee3c to\u00e0n b\u1ed9 n\u1ed9i dung m\u00e0 kh\u00f4ng c\u1ea7n gi\u00e1o tr\u00ecnh.\r\n\r\nB\u1ea1n c\u1ea7n nghe v\u00e0 n\u00f3i \u0111u\u1ed5i theo t\u1ed1c \u0111\u1ed9 ch\u1eadm cho \u0111\u1ebfn khi b\u1ea1n b\u1eaft k\u1ecbp \u0111\u01b0\u1ee3c t\u1ed1c \u0111\u1ed9 c\u1ee7a gi\u00e1o vi\u00ean v\u00e0 c\u1ea3m th\u1ea5y t\u1ef1 tin trong gi\u1ecdng n\u00f3i.\r\n\r\n[su_note note_color=\"#f9e5e5\"]\u0110\u00e2y l\u00e0 <strong>ph\u1ea7n n\u00e2ng cao</strong> c\u1ee7a k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m.\u00a0\u0110\u1ed1i v\u1edbi k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m, b\u1ea1n c\u1ea7n hi\u1ec3u n\u1ed9i dung c\u1ee7a b\u00e0i luy\u1ec7n.\u00a0\u0110\u1ed1i v\u1edbi b\u01b0\u1edbc luy\u1ec7n tai nh\u1ea1y, b\u1ea1n c\u1ea7n nghe r\u00f5 t\u1eebng \u00e2m v\u00e0 t\u1eeb trong b\u00e0i luy\u1ec7n.[/su_note]\r\n\r\n<b>B\u01b0\u1edbc 2: Luy\u1ec7n N\u00f3i \u0110u\u1ed5i v\u1edbi t\u1ed1c \u0111\u1ed9 ch\u1eadm - Beginner speed.</b>\r\n\r\nB\u1ea1n c\u1ea7n nghe v\u00e0 n\u00f3i \u0111u\u1ed5i theo t\u1ed1c \u0111\u1ed9 ch\u1eadm cho \u0111\u1ebfn khi b\u1ea1n b\u1eaft k\u1ecbp \u0111\u01b0\u1ee3c t\u1ed1c \u0111\u1ed9 n\u00f3i ch\u1eadm c\u1ee7a gi\u00e1o vi\u00ean v\u00e0 c\u1ea3m th\u1ea5y t\u1ef1 tin trong gi\u1ecdng n\u00f3i.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>M\u1ee5c ti\u00eau quan tr\u1ecdng nh\u1ea5t t\u1ea1i b\u01b0\u1edbc n\u00e0y:</strong> C\u1ea3m nh\u1eadn \u0111\u01b0\u1ee3c r\u00f5 r\u00e0ng c\u00e1ch ph\u00e1t \u00e2m c\u1ee7a ng\u01b0\u1eddi b\u1ea3n x\u1ee9 v\u00e0 n\u00f3i theo gi\u1ed1ng nh\u1ea5t c\u00f3 th\u1ec3.[/su_note]\r\n\r\n<b>B\u01b0\u1edbc 3: Luy\u1ec7n N\u00f3i \u0110u\u1ed5i v\u1edbi t\u1ed1c \u0111\u1ed9 c\u1ee7a ng\u01b0\u1eddi b\u1ea3n x\u1ee9 - Native speed.</b>\r\n\r\nH\u00e3y luy\u1ec7n n\u00f3i theo c\u00e1c b\u00e0i luy\u1ec7n cho \u0111\u1ebfn khi b\u1ea1n b\u1eaft k\u1ecbp v\u1edbi t\u1ed1c \u0111\u1ed9 n\u00f3i t\u1ef1 nhi\u00ean c\u1ee7a gi\u00e1o vi\u00ean v\u00e0 t\u1ef1 tin v\u1edbi c\u00e1ch ph\u00e1t \u00e2m c\u1ee7a m\u00ecnh.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>M\u1ee5c ti\u00eau quan tr\u1ecdng nh\u1ea5t t\u1ea1i b\u01b0\u1edbc n\u00e0y:</strong> C\u1ea3m nh\u1eadn \u0111\u01b0\u1ee3c \u00e2m thanh t\u1ef1 nhi\u00ean c\u1ee7a ng\u01b0\u1eddi b\u1ea3n x\u1ee9 v\u00e0 n\u00f3i theo gi\u1ed1ng nh\u1ea5t c\u00f3 th\u1ec3. B\u1ea1n c\u1ea7n h\u1ea1n ch\u1ebf s\u1eed d\u1ee5ng transcript v\u00e0 t\u1eadp trung v\u00e0o nghe n\u00f3i.[/su_note]\r\n\r\n[/su_spoiler]\r\n\r\n[su_spoiler title=\"<strong>Tham kh\u1ea3o video th\u1ef1c h\u00e0nh k\u1ef9 thu\u1eadt n\u00f3i \u0111u\u1ed5i</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n<b style=\"font-size: 1rem;\">N\u00f3i \u0111u\u1ed5i t\u1ed1c \u0111\u1ed9 Beginner Speed</b>\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/UtDwSA4pbGg?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/CQNNE-jmPuo?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<div></div>\r\n&nbsp;\r\n\r\n<b>N\u00f3i \u0111u\u1ed5i t\u1ed1c \u0111\u1ed9 Native Speed</b>\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/cPGyRnE54xU?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/VjxkeIxqZys?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n[/su_spoiler]\r\n<h2 style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><span style=\"text-decoration: underline;\">#3 - K\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</span></span></h2>\r\nB\u1ea1n \u0111\u00e3 c\u00f3 th\u1ec3 nghe hi\u1ec3u ti\u1ebfng Anh \u0111\u01a1n gi\u1ea3n h\u01a1n v\u1edbi <strong>k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</strong>.\r\n\r\nB\u1ea1n \u0111\u00e3 c\u00f3 th\u1ec3 n\u00f3i ti\u1ebfng anh d\u1ec5 d\u00e0ng h\u01a1n v\u1edbi <strong>k\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</strong>.\r\n\r\nV\u00e0 b\u00e2y gi\u1edd, trong h\u01b0\u1edbng d\u1eabn n\u00e0y v\u1edbi k\u1ef9 thu\u1eadt <strong>Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</strong>\u2026\r\n\r\n\u2026 b\u1ea1n s\u1ebd \u0111\u01b0\u1ee3c k\u1ebft h\u1ee3p hi\u1ec7u qu\u1ea3 c\u1ea3 nghe v\u00e0 n\u00f3i \u0111\u1ec3 c\u00f3 th\u1ec3 giao ti\u1ebfp tr\u00f4i ch\u1ea3y nh\u01b0 ng\u01b0\u1eddi b\u1ea3n x\u1ee9.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>H\u00e3y click n\u00fat <span style=\"color: #1fa850;\">M\u00c0U XANH</span></strong>\u00a0b\u00ean d\u01b0\u1edbi \u0111\u1ec3 xem c\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng <strong>K\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</strong>[/su_note]\r\n\r\n[su_spoiler title=\"<strong>C\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng k\u1ef9 thu\u1eadt Ph\u1ea3n x\u1ea1 \u0110a chi\u1ec1u</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n\r\n<b>B\u01b0\u1edbc 1: Hi\u1ec3u n\u1ed9i dung b\u00e0i luy\u1ec7n t\u1eadp.</b>\r\n\r\nH\u00e3y s\u1eed d\u1ee5ng k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m t\u1ea1i b\u01b0\u1edbc n\u00e0y \u0111\u1ec3 hi\u1ec3u to\u00e0n b\u1ed9 b\u00e0i luy\u1ec7n t\u1eadp.\r\n\r\n<b>B\u01b0\u1edbc 2: Luy\u1ec7n tr\u1ea3 l\u1eddi ng\u1eafn</b>\r\n\r\nB\u1ea1n c\u1ea7n \u0111\u01b0a ra c\u00e2u tr\u1ea3 l\u1eddi ng\u1eafn (t\u1eeb 1-2 t\u1eeb) cho c\u00e1c c\u00e2u h\u1ecfi nhanh nh\u1ea5t c\u00f3 th\u1ec3.\r\nV\u00ed d\u1ee5: Yes.\r\n\r\n<b>B\u01b0\u1edbc 3: Hi\u1ec3u to\u00e0n b\u1ed9 c\u00e2u h\u1ecfi v\u00e0 c\u00e2u tr\u1ea3 l\u1eddi m\u1eabu</b>\r\n\r\nB\u1ea1n h\u00e3y nghe l\u1ea1i v\u00e0 theo d\u00f5i transcript t\u1eeb 2-3 l\u1ea7n.\r\n\r\nB\u1ea1n c\u1ea7n hi\u1ec3u to\u00e0n b\u1ed9 c\u00e2u h\u1ecfi v\u00e0 c\u00e2u tr\u1ea3 l\u1eddi m\u1eabu \u0111\u00e3 \u0111\u01b0a ra.\r\n\r\n<b>B\u01b0\u1edbc 4: Luy\u1ec7n nghe n\u00f3i ph\u1ea3n x\u1ea1 ti\u1ebfng Anh</b>\r\n\r\nB\u1ea1n c\u1ea7n luy\u1ec7n tr\u1ea3 l\u1eddi cho \u0111\u1ebfn khi tr\u1ea3 l\u1eddi \u0111\u1ea7y \u0111\u1ee7 c\u00e1c c\u00e2u h\u1ecfi ngay l\u1eadp t\u1ee9c v\u00e0 d\u1ec5 d\u00e0ng.\r\n\r\nV\u00ed d\u1ee5: Yes. She is American.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<b>M\u1ee5c ti\u00eau quan tr\u1ecdng nh\u1ea5t </b>c\u1ee7a k\u1ef9 thu\u1eadt n\u00e0y l\u00e0 b\u1ea1n c\u1ea7n \u0111\u01b0a ra c\u00e2u tr\u1ea3 l\u1eddi nhanh nh\u1ea5t c\u00f3 th\u1ec3[/su_note]\r\n\r\n[/su_spoiler]\r\n\r\n[su_spoiler title=\"<strong>Tham kh\u1ea3o video th\u1ef1c h\u00e0nh k\u1ef9 thu\u1eadt ph\u1ea3n x\u1ea1 \u0111a chi\u1ec1u</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/PP_WQRBKUrM?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n[/su_spoiler]\r\n\r\nB\u1ea1n \u0111\u00e3 hi\u1ec3u r\u00f5 3 k\u1ef9 thu\u1eadt quan tr\u1ecdng nh\u1ea5t \u0111\u1ec3 luy\u1ec7n giao ti\u1ebfp ti\u1ebfng Anh n\u00e0y ch\u01b0a?\r\n\r\nN\u1ebfu \u0111\u00e3 hi\u1ec3u r\u00f5, h\u00e3y click v\u00e0o n\u00fat m\u00e0u \u0111\u1ecf\u00a0<span style=\"color: #ff0000;\"><strong>[MARK COMPLETE]</strong></span>\u00a0d\u01b0\u1edbi \u0111\u00e2y \u0111\u1ec3 k\u1ebft th\u00fac h\u01b0\u1edbng d\u1eabn quan tr\u1ecdng n\u00e0y v\u00e0 b\u1eaft \u0111\u1ea7u th\u1ef1c h\u00e0nh b\u00e0i h\u1ecdc \u0111\u1ea7u ti\u00ean.",
      "post_title": "Lesson 00 - Getting Started",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "getting-started-3-ky-thuat-nen-tang-chinh-phuc-tieng-anh",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-13 14:10:28",
      "post_modified_gmt": "2018-09-13 07:10:28",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=4428",
      "menu_order": 0,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    }
  ]
	  
	}
	';
	
	$result = json_decode($result);
	$response = new WP_REST_Response($result);
    $response->set_status(200);
    return $response;
}
function get_topic_detail(WP_REST_Request $request) {
	//$course_id = $request->get_param('course_id');
		$result = '{
	    "ID": 42,
	    "post_author": "1",
	    "post_date": "2017-02-27 08:59:14",
	    "post_date_gmt": "2017-02-27 08:59:14",
	    "post_content": "<p style=\"text-align: left;\">B\u1ea1n \u0111\u00e3 bao gi\u1edd b\u1eaft chuy\u1ec7n, t\u1ef1 gi\u1edbi thi\u1ec7u v\u1edbi m\u1ed9t ng\u01b0\u1eddi n\u01b0\u1edbc ngo\u00e0i ch\u01b0a?</p>\r\n<p style=\"text-align: left;\">B\u00e0i h\u1ecdc ng\u00e0y h\u00f4m nay s\u1ebd gi\u00fap b\u1ea1n l\u00e0m \u0111i\u1ec1u \u0111\u00f3 m\u1ed9t c\u00e1ch \u0111\u01a1n gi\u1ea3n v\u00e0 l\u1ecbch s\u1ef1.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
	    "post_title": "Lesson 01 - Introducing yourself",
	    "post_excerpt": "",
	    "post_status": "publish",
	    "comment_status": "open",
	    "ping_status": "closed",
	    "post_password": "",
	    "post_name": "lesson-01-introducing-yourself",
	    "to_ping": "",
	    "pinged": "",
	    "post_modified": "2019-01-04 16:07:53",
	    "post_modified_gmt": "2019-01-04 09:07:53",
	    "post_content_filtered": "",
	    "post_parent": 0,
	    "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=42",
	    "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
	    "menu_order": 1,
	    "post_type": "sfwd-lessons",
	    "post_mime_type": "",
	    "comment_count": "0",
	    "filter": "raw"
	  
	}
	';
	
	$result = json_decode($result);
	$response = new WP_REST_Response($result);
    $response->set_status(200);
    return $response;
}

function get_lesson_details(WP_REST_Request $request) {
	$lesson_id = $request->get_param('lesson_id');
		$result = '{
    "ID": 42,
    "post_author": "1",
    "post_date": "2017-02-27 08:59:14",
    "post_date_gmt": "2017-02-27 08:59:14",
    "post_content": "<p style=\"text-align: left;\">B\u1ea1n \u0111\u00e3 bao gi\u1edd b\u1eaft chuy\u1ec7n, t\u1ef1 gi\u1edbi thi\u1ec7u v\u1edbi m\u1ed9t ng\u01b0\u1eddi n\u01b0\u1edbc ngo\u00e0i ch\u01b0a?</p>\r\n<p style=\"text-align: left;\">B\u00e0i h\u1ecdc ng\u00e0y h\u00f4m nay s\u1ebd gi\u00fap b\u1ea1n l\u00e0m \u0111i\u1ec1u \u0111\u00f3 m\u1ed9t c\u00e1ch \u0111\u01a1n gi\u1ea3n v\u00e0 l\u1ecbch s\u1ef1.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
    "post_title": "Lesson 01 - Introducing yourself",
    "post_excerpt": "",
    "post_status": "publish",
    "comment_status": "open",
    "ping_status": "closed",
    "post_password": "",
    "post_name": "lesson-01-introducing-yourself",
    "to_ping": "",
    "pinged": "",
    "post_modified": "2019-01-04 16:07:53",
    "post_modified_gmt": "2019-01-04 09:07:53",
    "post_content_filtered": "",
    "post_parent": 0,
    "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=42",
    "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
    "menu_order": 1,
    "post_type": "sfwd-lessons",
    "post_mime_type": "",
    "comment_count": "0",
    "filter": "raw",
    "list_topic" : [{
      "ID": "31",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_author": "1",
      "post_date": "2017-02-27 08:51:47",
      "post_date_gmt": "2017-02-27 01:51:47",
      "post_content": "<h2>Eng Breaking - Ph\u00e1 Tan N\u1ed7i S\u1ee3 Giao Ti\u1ebfp Ti\u1ebfng Anh</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Tr\u1ecdn b\u1ed9 12 lesson</li>\r\n \t<li>Th\u1eddi gian luy\u1ec7n: 144 ti\u1ebfng, t\u01b0\u01a1ng \u1ee9ng v\u1edbi 12 tu\u1ea7n \u2013 3 th\u00e1ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh</li>\r\n \t<li>T\u00e0i kho\u1ea3n h\u1ecdc Online trong 6 th\u00e1ng k\u1ec3 t\u1eeb ng\u00e0y k\u00edch ho\u1ea1t</li>\r\n</ul>\r\n[/su_list]\r\n<h3><strong>Chi ti\u1ebft nhi\u1ec7m v\u1ee5 h\u00e0ng tu\u1ea7n:</strong></h3>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n nghe v\u1edbi k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</li>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n n\u00f3i v\u1edbi k\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</li>\r\n \t<li>4 ng\u00e0y \u0111\u1ec3 th\u1ef1c h\u00e0nh ph\u1ea3n x\u1ea1 v\u1edbi k\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</li>\r\n</ul>\r\n[/su_list]\r\n\r\nSau khi k\u1ebft th\u00fac Eng Breaking tr\u00ecnh \u0111\u1ed9 ti\u1ebfng Anh c\u1ee7a b\u1ea1n s\u1ebd\r\n\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Giao ti\u1ebfp ti\u1ebfng Anh c\u01a1 b\u1ea3n</li>\r\n \t<li>\u0110\u1ee7 k\u1ef9 n\u0103ng ti\u1ebfng Anh \u0111\u1ec3 \u0111i du l\u1ecbch</li>\r\n</ul>\r\n[/su_list]\r\n\r\nK\u1ebft th\u00fac Eng Breaking c\u0169ng l\u00e0 l\u00fac b\u1ea1n \u0111\u00e3 ph\u00e1 b\u0103ng \u0111\u01b0\u1ee3c kh\u1ea3 n\u0103ng giao ti\u1ebfp ti\u1ebfng Anh c\u1ee7a m\u00ecnh.\r\n\r\nH\u00e3y luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh Eng Breaking ngay!",
      "post_title": "Eng Breaking",
      "post_excerpt": "Ph\u00e1 b\u0103ng ti\u1ebfng Anh, th\u00e0nh th\u1ea1o giao ti\u1ebfp c\u01a1 b\u1ea3n v\u1edbi ng\u01b0\u1eddi b\u1ea3n x\u1ee9 ch\u1ec9 sau 144 gi\u1edd luy\u1ec7n t\u1eadp, d\u1ef1a tr\u00ean 3 k\u1ef9 thu\u1eadt n\u1ec1n t\u1ea3ng.",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "eng-breaking",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-26 14:52:57",
      "post_modified_gmt": "2018-09-26 07:52:57",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.com/?post_type=sfwd-courses&#038;p=31",
      "menu_order": "4",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    },
    {
      "ID": "790",
      "post_author": "1",
      "post_date": "2017-02-27 08:56:19",
      "post_date_gmt": "2017-02-27 01:56:19",
      "post_content": "<img class=\"alignleft\" src=\"https://x3english.cdn.vccloud.vn/wp-content/uploads/2017/05/03.png\" width=\"207\" height=\"207\" />\r\n\r\nJames - C\u1ed9ng s\u1ef1 c\u1ee7a X3English.\r\n\r\n<strong>James Joseph Kendall</strong> sinh ra v\u00e0 l\u1edbn l\u00ean \u1edf th\u00e0nh ph\u1ed1 Springfield, thu\u1ed9c ti\u1ec3u bang Ohio c\u1ee7a M\u1ef9.\r\n\r\nAnh \u0111\u00e3 d\u1ea1y v\u00e0 gi\u00fap \u0111\u1ee1 nhi\u1ec1u b\u1ea1n Vi\u1ec7t Nam n\u00e2ng cao kh\u1ea3 n\u0103ng ti\u1ebfng Anh su\u1ed1t <strong>g\u1ea7n 4 n\u0103m </strong>qua.\r\n\r\nAnh c\u0169ng ch\u00ednh l\u00e0 <strong>ng\u01b0\u1eddi s\u00e1ng l\u1eadp</strong> c\u00e2u l\u1ea1c b\u1ed9 <strong>Keep Hanoi Clean</strong> v\u00e0 th\u01b0\u1eddng xuy\u00ean t\u1ed5 ch\u1ee9c c\u00e1c ho\u1ea1t \u0111\u1ed9ng t\u00ecnh nguy\u1ec7n b\u1ea3o v\u1ec7 m\u00f4i tr\u01b0\u1eddng.\r\n\r\n<hr />\r\n<p style=\"text-align: left;\"><strong>\u0110\u00e3 bao gi\u1edd b\u1ea1n ngh\u0129 c\u00f3 m\u1ed9t ch\u01b0\u01a1ng tr\u00ecnh luy\u1ec7n ph\u00e1t \u00e2m gi\u00fap b\u1ea1n n\u00f3i chu\u1ea9n gi\u1ecdng Anh - M\u1ef9 ch\u1ec9 sau 1 th\u00e1ng? - </strong><strong>V\u1edbi Ulti Pronun, \u0111i\u1ec1u \u0111\u00f3 ho\u00e0n to\u00e0n c\u00f3 th\u1ec3.</strong></p>\r\n\r\n<h2 style=\"text-align: center;\">B\u1ea1n s\u1ebd nh\u1eadn \u0111\u01b0\u1ee3c g\u00ec?</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li><strong>T\u00e0i kho\u1ea3n</strong>\u00a0h\u1ecdc online tr\u00ean h\u1ec7 th\u1ed1ng\u00a0<a href=\"https://learn.x3english.com/\" target=\"_blank\" rel=\"noopener noreferrer\">https://learn.x3english.com/</a>.</li>\r\n \t<li><strong>Gi\u00e1o tr\u00ecnh h\u01b0\u1edbng d\u1eabn to\u00e0n di\u1ec7n ph\u00e1t \u00e2m chu\u1ea9n Anh - M\u1ef9</strong> bao g\u1ed3m: <strong>K\u1ebf ho\u1ea1ch h\u00e0nh \u0111\u1ed9ng h\u00e0ng ng\u00e0y</strong> (Checklist) v\u00e0 <strong>Ki\u1ebfn th\u1ee9c\u00a0b\u00e0i h\u1ecdc</strong>.</li>\r\n \t<li><strong>Email h\u1ed7 tr\u1ee3</strong>: B\u1ea1n s\u1ebd \u0111\u01b0\u1ee3c bi\u1ebft \"<strong>m\u1ed9t \u0111\u1ed1ng\u00a0l\u1ed7i</strong>\"\u00a0m\u00e0 90% ng\u01b0\u1eddi Vi\u1ec7t m\u1eafc ph\u1ea3i khi ph\u00e1t \u00e2m. <strong>Gi\u00e1o tr\u00ecnh ph\u00e1t \u00e2m b\u1eb1ng ti\u1ebfng Anh</strong> c\u0169ng \u0111\u01b0\u1ee3c k\u00e8m trong email gi\u00fap b\u1ea1n v\u1eeba \u0111\u01b0\u1ee3c h\u1ecdc ph\u00e1t \u00e2m v\u1eeba t\u0103ng v\u1ed1n t\u1eeb v\u1ef1ng ti\u1ebfng Anh c\u1ee7a m\u00ecnh.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">Ulti Pronun s\u1ebd gi\u00fap b\u1ea1n</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>C\u00f3 \u0111\u01b0\u1ee3c <strong>b\u00ed quy\u1ebft</strong> luy\u1ec7n ph\u00e1t \u00e2m hi\u1ec7u qu\u1ea3 \u0111\u00e3 \u0111\u01b0\u1ee3c nghi\u00ean c\u1ee9u v\u00e0 ch\u1ee9ng nh\u1eadn.</li>\r\n \t<li>Ph\u00e1t \u00e2m ch\u00ednh x\u00e1c to\u00e0n b\u1ed9 <b>40 \u00e2m</b> trong h\u1ec7 th\u1ed1ng \u00e2m Anh - M\u1ef9 chu\u1ea9n IPA. (Theo <a href=\"http://www.oxfordlearnersdictionaries.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Oxford Learner\u2019s Dictionaries</a>\u00a0- H\u1ec7 th\u1ed1ng t\u1eeb \u0111i\u1ec3n <strong>chu\u1ea9n</strong> \u0111\u01b0\u1ee3c s\u1eed d\u1ee5ng t\u1ea1i h\u1ea7u h\u1ebft c\u00e1c <strong>trung t\u00e2m ti\u1ebfng Anh uy t\u00edn</strong>\u00a0\u1edf Vi\u1ec7t Nam.)</li>\r\n \t<li>Ti\u1ebft ki\u1ec7m \u0111\u1ebfn\u00a0<b>49%</b> <b>th\u1eddi gian</b> v\u00e0 <b>c\u00f4ng s\u1ee9c</b> luy\u1ec7n t\u1eadp \u0111\u1ec3 n\u00f3i ti\u1ebfng Anh <b>chu\u1ea9n</b> v\u00e0 <b>t\u1ef1 nhi\u00ean</b>.</li>\r\n \t<li>Ph\u00e1t \u00e2m chu\u1ea9n v\u00e0 t\u1ef1 nhi\u00ean <b>b\u1ea5t k\u1ef3</b> t\u1eeb Anh - M\u1ef9 n\u00e0o.</li>\r\n \t<li>Bi\u1ebft c\u00e1ch <b>s\u1eed d\u1ee5ng</b> ng\u1eef \u0111i\u1ec7u, n\u1ed1i \u00e2m, tr\u1ecdng \u00e2m \u0111\u1ec3 n\u00f3i ti\u1ebfng Anh.</li>\r\n \t<li><b>T\u1ef1 tin</b> n\u00f3i ti\u1ebfng Anh trong <b>m\u1ecdi ho\u00e0n c\u1ea3nh</b>.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">Ulti Pronun - H\u1ec7 Th\u1ed1ng Ph\u00e1t \u00c2m Chu\u1ea9n Gi\u1ecdng M\u1ef9<span style=\"color: #ff6600;\"><strong>\r\n</strong></span></h2>\r\n<img class=\"aligncenter size-full wp-image-2219\" src=\"https://learn.x3english.com/wp-content/uploads/2017/02/01-banner-x3english-1.png\" alt=\"\" width=\"687\" height=\"620\" />\r\n\r\n<strong>H\u00e3y kh\u00e1m ph\u00e1 Ulti Pronun ngay!</strong>",
      "post_title": "Ulti Pronun",
      "post_excerpt": "Nhanh ch\u00f3ng c\u00f3 gi\u1ecdng chu\u1ea9n M\u1ef9 v\u1edbi 30 ng\u00e0y th\u1ef1c h\u00e0nh ph\u00e1t \u00e2m theo k\u1ef9 thu\u1eadt 3 b\u01b0\u1edbc, k\u1ef9 thu\u1eadt m\u00e0i \u00e2m\u2026 (\u0110\u1ed9c quy\u1ec1n b\u1edfi X3English).",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "ulti-pronun",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-26 14:52:47",
      "post_modified_gmt": "2018-09-26 07:52:47",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.net/course/pronun",
      "menu_order": "0",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    },
    {
      "ID": "789",
      "post_author": "1",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_date": "2017-02-27 08:56:55",
      "post_date_gmt": "2017-02-27 01:56:55",
      "post_content": "<strong>Com Fluency</strong> l\u00e0 kh\u00f3a h\u1ecdc ti\u1ebfng Anh n\u00e2ng cao chuy\u00ean v\u1ec1 <strong>ti\u1ebfng Anh giao ti\u1ebfp\u00a0cho ng\u01b0\u1eddi \u0111i l\u00e0m</strong>, h\u1eefu \u00edch cho vi\u1ec7c giao ti\u1ebfp n\u01a1i c\u00f4ng s\u1edf v\u00e0 trong cu\u1ed9c s\u1ed1ng.\r\n<h4><img class=\"aligncenter size-full wp-image-4899\" src=\"https://learn.x3english.com/wp-content/uploads/2017/02/31-banner-info-graphic-min-1.jpg\" alt=\"\" width=\"1180\" height=\"407\" /></h4>\r\nB\u00e0i h\u1ecdc d\u1ef1a tr\u00ean b\u1ed1i c\u1ea3nh t\u1ea1i <strong>E+ Education</strong>, m\u1ed9t trong nh\u1eefng c\u00f4ng ty gi\u00e1o d\u1ee5c c\u00f3 t\u1ed1c \u0111\u1ed9 ph\u00e1t tri\u1ec3n nhanh nh\u1ea5t th\u1ebf gi\u1edbi.\r\n\r\nTo\u00e0n b\u1ed9 kh\u00f3a h\u1ecdc l\u00e0 m\u1ed9t nh\u1eefng\u00a0<strong>c\u00e2u chuy\u1ec7n th\u00fa v\u1ecb</strong> c\u1ee7a nh\u1eefng <strong>con ng\u01b0\u1eddi th\u00fa v\u1ecb.</strong>\r\n\r\nH\u1ecd ch\u00ednh l\u00e0:\r\n\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li><strong>Kate Williams:</strong> <strong>Nh\u00e2n v\u1eadt ch\u00ednh</strong>, l\u00e0 m\u1ed9t c\u00f4 nh\u00e2n vi\u00ean m\u1edbi ra tr\u01b0\u1eddng v\u00e0 \u0111ang b\u1eaft \u0111\u1ea7u h\u1ecdc h\u1ecfi k\u0129 n\u0103ng v\u00e0 c\u00e1c kinh nghi\u1ec7m c\u00f4ng vi\u1ec7c c\u1ea7n thi\u1ebft.</li>\r\n \t<li><strong>David Johnson:</strong>\u00a0<strong>Gi\u00e1m \u0111\u1ed1c</strong><strong>,</strong> l\u00e0 m\u1ed9t ng\u01b0\u1eddi nghi\u00eam kh\u1eafc v\u00e0 c\u00f3 s\u1edf th\u00edch u\u1ed1ng c\u00e0 ph\u00ea.</li>\r\n \t<li><strong>James Brown</strong>: <strong>Qu\u1ea3n l\u00fd n\u1ed9i dung</strong>, anh ph\u1ee5 tr\u00e1ch n\u1ed9i dung c\u1ee7a to\u00e0n b\u1ed9 s\u1ea3n ph\u1ea9m t\u1ea1i E+ Education.</li>\r\n \t<li><strong>Mary Jones</strong>: <strong>Th\u01b0 k\u00fd</strong>, l\u00e0 m\u1ed9t ng\u01b0\u1eddi t\u1eadn t\u00ecnh v\u00e0 hay quan t\u00e2m.</li>\r\n \t<li><strong>Ted:</strong> <strong>Ng\u01b0\u1eddi d\u1eabn chuy\u1ec7n</strong>, \u0111\u01b0a ra nh\u1eefng l\u1eddi khuy\u00ean h\u1eefu \u00edch cho Kate trong vi\u1ec7c s\u1eed d\u1ee5ng ng\u00f4n ng\u1eef giao ti\u1ebfp ph\u00f9 h\u1ee3p.</li>\r\n</ul>\r\n[/su_list]\r\n\r\nNgo\u00e0i ra, trong c\u00e2u chuy\u1ec7n s\u1ebd xu\u1ea5t hi\u1ec7n nh\u1eefng nh\u00e2n v\u1eadt kh\u00e1c gi\u00fap t\u00ecnh hu\u1ed1ng giao ti\u1ebfp th\u00eam \u0111a d\u1ea1ng.\r\n\r\nTh\u00f4ng qua m\u1ed7i c\u00e2u chuy\u1ec7n th\u01b0\u1eddng ng\u00e0y t\u1ea1i n\u01a1i c\u00f4ng s\u1edf c\u1ee7a c\u00e1c nh\u00e2n vi\u00ean t\u1ea1i E+ Education, b\u1ea1n s\u1ebd \u0111\u01b0\u1ee3c ti\u1ebfp c\u1eadn c\u00e1c<strong> ch\u1ee7 \u0111\u1ec1 giao ti\u1ebfp ph\u1ed5 bi\u1ebfn nh\u1ea5t</strong> \u0111\u01b0\u1ee3c <strong>l\u1ed3ng gh\u00e9p</strong> v\u00e0o b\u00e0i h\u1ecdc.\r\n<h4><strong><img class=\"aligncenter wp-image-4929\" src=\"https://learn.x3english.com/wp-content/uploads/2017/02/01-banner-2.jpg\" alt=\"\" width=\"947\" height=\"958\" /></strong></h4>\r\n<h2><span style=\"color: #000000;\">H\u01b0\u1edbng d\u1eabn luy\u1ec7n t\u1eadp</span></h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<div class=\"su-list su-list-style-\">\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp m\u1ed7i<strong> B\u00e0i h\u1ecdc l\u1edbn (Lesson)</strong> v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 <strong>1 tu\u1ea7n.</strong></li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh\u00a0<strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong>\u00a0v\u00e0\u00a0<strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong>\u00a0ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho <strong>Lesson</strong> ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng\u00a0<strong>1-2 ti\u1ebfng</strong>\u00a0m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb\u00a0<strong>2-3</strong>\u00a0<strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n\u00a0<strong>2-3 tu\u1ea7n</strong>\u00a0cho m\u1ed9t Lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh\u00a0<strong>\u00edt nh\u1ea5t 16 tu\u1ea7n</strong>\u00a0\u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong>\u00a0l\u00e0m ch\u1ee7 ti\u1ebfng Anh nh\u01b0 ng\u01b0\u1eddi b\u1ea3n ng\u1eef</strong>.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n</div>\r\nH\u00e3y b\u1eaft \u0111\u1ea7u v\u1edbi Lesson 01 v\u00e0 ng\u00e0y h\u1ecdc \u0111\u1ea7u ti\u00ean ngay b\u00e2y gi\u1edd.",
      "post_title": "Com Fluency",
      "post_excerpt": "S\u1eed d\u1ee5ng th\u00e0nh th\u1ea1o ti\u1ebfng Anh \u0111\u1ec3 t\u01b0\u01a1ng t\u00e1c, x\u1eed l\u00fd c\u00e1c v\u1ea5n \u0111\u1ec1 ph\u1ee9c t\u1ea1p trong giao ti\u1ebfp ch\u1ec9 sau 4 th\u00e1ng luy\u1ec7n t\u1eadp v\u1edbi Comfluency.",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "com-fluency",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-26 14:52:39",
      "post_modified_gmt": "2018-09-26 07:52:39",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.net/course/com-fluency",
      "menu_order": "0",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    },
    {
      "ID": "8951",
      "post_author": "1",
      "post_date": "2018-05-28 16:43:50",
      "post_date_gmt": "2018-05-28 09:43:50",
      "post_content": "<h2>Eng Breaking - Ph\u00e1 Tan N\u1ed7i S\u1ee3 Giao Ti\u1ebfp Ti\u1ebfng Anh</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Tr\u1ecdn b\u1ed9 Eng Breaking: 12 lesson</li>\r\n \t<li>Ph\u1ea7n Bonus: 12 Lesson</li>\r\n \t<li>Th\u1eddi gian luy\u1ec7n: 144 ti\u1ebfng, t\u01b0\u01a1ng \u1ee9ng v\u1edbi 12 tu\u1ea7n \u2013 3 th\u00e1ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh</li>\r\n \t<li>T\u00e0i kho\u1ea3n h\u1ecdc Online trong 6 th\u00e1ng k\u1ec3 t\u1eeb ng\u00e0y k\u00edch ho\u1ea1t</li>\r\n</ul>\r\n[/su_list]\r\n<h3><strong>Chi ti\u1ebft nhi\u1ec7m v\u1ee5 h\u00e0ng tu\u1ea7n:</strong></h3>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n nghe v\u1edbi k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</li>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n n\u00f3i v\u1edbi k\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</li>\r\n \t<li>3 ng\u00e0y \u0111\u1ec3 th\u1ef1c h\u00e0nh ph\u1ea3n x\u1ea1 v\u1edbi k\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</li>\r\n \t<li>1 ng\u00e0y \u0111\u1ec3 th\u1ef1c hi\u1ec7n Th\u1eed Th\u00e1ch</li>\r\n</ul>\r\n[/su_list]\r\n\r\nSau khi k\u1ebft th\u00fac Eng Breaking, tr\u00ecnh \u0111\u1ed9 ti\u1ebfng Anh c\u1ee7a b\u1ea1n s\u1ebd:\r\n\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Giao ti\u1ebfp ti\u1ebfng Anh c\u01a1 b\u1ea3n</li>\r\n \t<li>\u0110\u1ee7 k\u1ef9 n\u0103ng ti\u1ebfng Anh \u0111\u1ec3 \u0111i du l\u1ecbch</li>\r\n</ul>\r\n[/su_list]\r\n\r\n<img class=\"aligncenter size-full wp-image-13300\" src=\"https://learn.x3english.com/wp-content/uploads/2018/05/01-3000px-hoc-tieng-anh-giong-het-cach-ban-tap-xe-dap-1.jpg\" alt=\"\" width=\"3000\" height=\"1639\" />\r\n\r\nK\u1ebft th\u00fac Eng Breaking c\u0169ng l\u00e0 l\u00fac b\u1ea1n \u0111\u00e3 ph\u00e1 b\u0103ng \u0111\u01b0\u1ee3c kh\u1ea3 n\u0103ng giao ti\u1ebfp ti\u1ebfng Anh c\u1ee7a m\u00ecnh.\r\n\r\nH\u00e3y luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh Eng Breaking ngay!",
      "post_title": "Eng Breaking",
      "post_excerpt": "Ph\u00e1 b\u0103ng ti\u1ebfng Anh, th\u00e0nh th\u1ea1o giao ti\u1ebfp c\u01a1 b\u1ea3n v\u1edbi ng\u01b0\u1eddi b\u1ea3n x\u1ee9 ch\u1ec9 sau 144 gi\u1edd luy\u1ec7n t\u1eadp, d\u1ef1a tr\u00ean 3 k\u1ef9 thu\u1eadt n\u1ec1n t\u1ea3ng.",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_password": "",
      "post_name": "eng-breaking-revolution",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2019-01-21 17:24:20",
      "post_modified_gmt": "2019-01-21 10:24:20",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.com/?post_type=sfwd-courses&#038;p=8951",
      "menu_order": "0",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    }]
  }
	';
	
	$result = json_decode($result);
	$response = new WP_REST_Response($result);
    $response->set_status(200);
    return $response;
}

function get_list_course(WP_REST_Request $request) {
		$result = '[{
      "ID": "31",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_author": "1",
      "post_date": "2017-02-27 08:51:47",
      "post_date_gmt": "2017-02-27 01:51:47",
      "post_content": "<h2>Eng Breaking - Ph\u00e1 Tan N\u1ed7i S\u1ee3 Giao Ti\u1ebfp Ti\u1ebfng Anh</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Tr\u1ecdn b\u1ed9 12 lesson</li>\r\n \t<li>Th\u1eddi gian luy\u1ec7n: 144 ti\u1ebfng, t\u01b0\u01a1ng \u1ee9ng v\u1edbi 12 tu\u1ea7n \u2013 3 th\u00e1ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh</li>\r\n \t<li>T\u00e0i kho\u1ea3n h\u1ecdc Online trong 6 th\u00e1ng k\u1ec3 t\u1eeb ng\u00e0y k\u00edch ho\u1ea1t</li>\r\n</ul>\r\n[/su_list]\r\n<h3><strong>Chi ti\u1ebft nhi\u1ec7m v\u1ee5 h\u00e0ng tu\u1ea7n:</strong></h3>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n nghe v\u1edbi k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</li>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n n\u00f3i v\u1edbi k\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</li>\r\n \t<li>4 ng\u00e0y \u0111\u1ec3 th\u1ef1c h\u00e0nh ph\u1ea3n x\u1ea1 v\u1edbi k\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</li>\r\n</ul>\r\n[/su_list]\r\n\r\nSau khi k\u1ebft th\u00fac Eng Breaking tr\u00ecnh \u0111\u1ed9 ti\u1ebfng Anh c\u1ee7a b\u1ea1n s\u1ebd\r\n\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Giao ti\u1ebfp ti\u1ebfng Anh c\u01a1 b\u1ea3n</li>\r\n \t<li>\u0110\u1ee7 k\u1ef9 n\u0103ng ti\u1ebfng Anh \u0111\u1ec3 \u0111i du l\u1ecbch</li>\r\n</ul>\r\n[/su_list]\r\n\r\nK\u1ebft th\u00fac Eng Breaking c\u0169ng l\u00e0 l\u00fac b\u1ea1n \u0111\u00e3 ph\u00e1 b\u0103ng \u0111\u01b0\u1ee3c kh\u1ea3 n\u0103ng giao ti\u1ebfp ti\u1ebfng Anh c\u1ee7a m\u00ecnh.\r\n\r\nH\u00e3y luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh Eng Breaking ngay!",
      "post_title": "Eng Breaking",
      "post_excerpt": "Ph\u00e1 b\u0103ng ti\u1ebfng Anh, th\u00e0nh th\u1ea1o giao ti\u1ebfp c\u01a1 b\u1ea3n v\u1edbi ng\u01b0\u1eddi b\u1ea3n x\u1ee9 ch\u1ec9 sau 144 gi\u1edd luy\u1ec7n t\u1eadp, d\u1ef1a tr\u00ean 3 k\u1ef9 thu\u1eadt n\u1ec1n t\u1ea3ng.",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "eng-breaking",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-26 14:52:57",
      "post_modified_gmt": "2018-09-26 07:52:57",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.com/?post_type=sfwd-courses&#038;p=31",
      "menu_order": "4",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    },
    {
      "ID": "790",
      "post_author": "1",
      "post_date": "2017-02-27 08:56:19",
      "post_date_gmt": "2017-02-27 01:56:19",
      "post_content": "<img class=\"alignleft\" src=\"https://x3english.cdn.vccloud.vn/wp-content/uploads/2017/05/03.png\" width=\"207\" height=\"207\" />\r\n\r\nJames - C\u1ed9ng s\u1ef1 c\u1ee7a X3English.\r\n\r\n<strong>James Joseph Kendall</strong> sinh ra v\u00e0 l\u1edbn l\u00ean \u1edf th\u00e0nh ph\u1ed1 Springfield, thu\u1ed9c ti\u1ec3u bang Ohio c\u1ee7a M\u1ef9.\r\n\r\nAnh \u0111\u00e3 d\u1ea1y v\u00e0 gi\u00fap \u0111\u1ee1 nhi\u1ec1u b\u1ea1n Vi\u1ec7t Nam n\u00e2ng cao kh\u1ea3 n\u0103ng ti\u1ebfng Anh su\u1ed1t <strong>g\u1ea7n 4 n\u0103m </strong>qua.\r\n\r\nAnh c\u0169ng ch\u00ednh l\u00e0 <strong>ng\u01b0\u1eddi s\u00e1ng l\u1eadp</strong> c\u00e2u l\u1ea1c b\u1ed9 <strong>Keep Hanoi Clean</strong> v\u00e0 th\u01b0\u1eddng xuy\u00ean t\u1ed5 ch\u1ee9c c\u00e1c ho\u1ea1t \u0111\u1ed9ng t\u00ecnh nguy\u1ec7n b\u1ea3o v\u1ec7 m\u00f4i tr\u01b0\u1eddng.\r\n\r\n<hr />\r\n<p style=\"text-align: left;\"><strong>\u0110\u00e3 bao gi\u1edd b\u1ea1n ngh\u0129 c\u00f3 m\u1ed9t ch\u01b0\u01a1ng tr\u00ecnh luy\u1ec7n ph\u00e1t \u00e2m gi\u00fap b\u1ea1n n\u00f3i chu\u1ea9n gi\u1ecdng Anh - M\u1ef9 ch\u1ec9 sau 1 th\u00e1ng? - </strong><strong>V\u1edbi Ulti Pronun, \u0111i\u1ec1u \u0111\u00f3 ho\u00e0n to\u00e0n c\u00f3 th\u1ec3.</strong></p>\r\n\r\n<h2 style=\"text-align: center;\">B\u1ea1n s\u1ebd nh\u1eadn \u0111\u01b0\u1ee3c g\u00ec?</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li><strong>T\u00e0i kho\u1ea3n</strong>\u00a0h\u1ecdc online tr\u00ean h\u1ec7 th\u1ed1ng\u00a0<a href=\"https://learn.x3english.com/\" target=\"_blank\" rel=\"noopener noreferrer\">https://learn.x3english.com/</a>.</li>\r\n \t<li><strong>Gi\u00e1o tr\u00ecnh h\u01b0\u1edbng d\u1eabn to\u00e0n di\u1ec7n ph\u00e1t \u00e2m chu\u1ea9n Anh - M\u1ef9</strong> bao g\u1ed3m: <strong>K\u1ebf ho\u1ea1ch h\u00e0nh \u0111\u1ed9ng h\u00e0ng ng\u00e0y</strong> (Checklist) v\u00e0 <strong>Ki\u1ebfn th\u1ee9c\u00a0b\u00e0i h\u1ecdc</strong>.</li>\r\n \t<li><strong>Email h\u1ed7 tr\u1ee3</strong>: B\u1ea1n s\u1ebd \u0111\u01b0\u1ee3c bi\u1ebft \"<strong>m\u1ed9t \u0111\u1ed1ng\u00a0l\u1ed7i</strong>\"\u00a0m\u00e0 90% ng\u01b0\u1eddi Vi\u1ec7t m\u1eafc ph\u1ea3i khi ph\u00e1t \u00e2m. <strong>Gi\u00e1o tr\u00ecnh ph\u00e1t \u00e2m b\u1eb1ng ti\u1ebfng Anh</strong> c\u0169ng \u0111\u01b0\u1ee3c k\u00e8m trong email gi\u00fap b\u1ea1n v\u1eeba \u0111\u01b0\u1ee3c h\u1ecdc ph\u00e1t \u00e2m v\u1eeba t\u0103ng v\u1ed1n t\u1eeb v\u1ef1ng ti\u1ebfng Anh c\u1ee7a m\u00ecnh.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">Ulti Pronun s\u1ebd gi\u00fap b\u1ea1n</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>C\u00f3 \u0111\u01b0\u1ee3c <strong>b\u00ed quy\u1ebft</strong> luy\u1ec7n ph\u00e1t \u00e2m hi\u1ec7u qu\u1ea3 \u0111\u00e3 \u0111\u01b0\u1ee3c nghi\u00ean c\u1ee9u v\u00e0 ch\u1ee9ng nh\u1eadn.</li>\r\n \t<li>Ph\u00e1t \u00e2m ch\u00ednh x\u00e1c to\u00e0n b\u1ed9 <b>40 \u00e2m</b> trong h\u1ec7 th\u1ed1ng \u00e2m Anh - M\u1ef9 chu\u1ea9n IPA. (Theo <a href=\"http://www.oxfordlearnersdictionaries.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Oxford Learner\u2019s Dictionaries</a>\u00a0- H\u1ec7 th\u1ed1ng t\u1eeb \u0111i\u1ec3n <strong>chu\u1ea9n</strong> \u0111\u01b0\u1ee3c s\u1eed d\u1ee5ng t\u1ea1i h\u1ea7u h\u1ebft c\u00e1c <strong>trung t\u00e2m ti\u1ebfng Anh uy t\u00edn</strong>\u00a0\u1edf Vi\u1ec7t Nam.)</li>\r\n \t<li>Ti\u1ebft ki\u1ec7m \u0111\u1ebfn\u00a0<b>49%</b> <b>th\u1eddi gian</b> v\u00e0 <b>c\u00f4ng s\u1ee9c</b> luy\u1ec7n t\u1eadp \u0111\u1ec3 n\u00f3i ti\u1ebfng Anh <b>chu\u1ea9n</b> v\u00e0 <b>t\u1ef1 nhi\u00ean</b>.</li>\r\n \t<li>Ph\u00e1t \u00e2m chu\u1ea9n v\u00e0 t\u1ef1 nhi\u00ean <b>b\u1ea5t k\u1ef3</b> t\u1eeb Anh - M\u1ef9 n\u00e0o.</li>\r\n \t<li>Bi\u1ebft c\u00e1ch <b>s\u1eed d\u1ee5ng</b> ng\u1eef \u0111i\u1ec7u, n\u1ed1i \u00e2m, tr\u1ecdng \u00e2m \u0111\u1ec3 n\u00f3i ti\u1ebfng Anh.</li>\r\n \t<li><b>T\u1ef1 tin</b> n\u00f3i ti\u1ebfng Anh trong <b>m\u1ecdi ho\u00e0n c\u1ea3nh</b>.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">Ulti Pronun - H\u1ec7 Th\u1ed1ng Ph\u00e1t \u00c2m Chu\u1ea9n Gi\u1ecdng M\u1ef9<span style=\"color: #ff6600;\"><strong>\r\n</strong></span></h2>\r\n<img class=\"aligncenter size-full wp-image-2219\" src=\"https://learn.x3english.com/wp-content/uploads/2017/02/01-banner-x3english-1.png\" alt=\"\" width=\"687\" height=\"620\" />\r\n\r\n<strong>H\u00e3y kh\u00e1m ph\u00e1 Ulti Pronun ngay!</strong>",
      "post_title": "Ulti Pronun",
      "post_excerpt": "Nhanh ch\u00f3ng c\u00f3 gi\u1ecdng chu\u1ea9n M\u1ef9 v\u1edbi 30 ng\u00e0y th\u1ef1c h\u00e0nh ph\u00e1t \u00e2m theo k\u1ef9 thu\u1eadt 3 b\u01b0\u1edbc, k\u1ef9 thu\u1eadt m\u00e0i \u00e2m\u2026 (\u0110\u1ed9c quy\u1ec1n b\u1edfi X3English).",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "ulti-pronun",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-26 14:52:47",
      "post_modified_gmt": "2018-09-26 07:52:47",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.net/course/pronun",
      "menu_order": "0",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    },
    {
      "ID": "789",
      "post_author": "1",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_date": "2017-02-27 08:56:55",
      "post_date_gmt": "2017-02-27 01:56:55",
      "post_content": "<strong>Com Fluency</strong> l\u00e0 kh\u00f3a h\u1ecdc ti\u1ebfng Anh n\u00e2ng cao chuy\u00ean v\u1ec1 <strong>ti\u1ebfng Anh giao ti\u1ebfp\u00a0cho ng\u01b0\u1eddi \u0111i l\u00e0m</strong>, h\u1eefu \u00edch cho vi\u1ec7c giao ti\u1ebfp n\u01a1i c\u00f4ng s\u1edf v\u00e0 trong cu\u1ed9c s\u1ed1ng.\r\n<h4><img class=\"aligncenter size-full wp-image-4899\" src=\"https://learn.x3english.com/wp-content/uploads/2017/02/31-banner-info-graphic-min-1.jpg\" alt=\"\" width=\"1180\" height=\"407\" /></h4>\r\nB\u00e0i h\u1ecdc d\u1ef1a tr\u00ean b\u1ed1i c\u1ea3nh t\u1ea1i <strong>E+ Education</strong>, m\u1ed9t trong nh\u1eefng c\u00f4ng ty gi\u00e1o d\u1ee5c c\u00f3 t\u1ed1c \u0111\u1ed9 ph\u00e1t tri\u1ec3n nhanh nh\u1ea5t th\u1ebf gi\u1edbi.\r\n\r\nTo\u00e0n b\u1ed9 kh\u00f3a h\u1ecdc l\u00e0 m\u1ed9t nh\u1eefng\u00a0<strong>c\u00e2u chuy\u1ec7n th\u00fa v\u1ecb</strong> c\u1ee7a nh\u1eefng <strong>con ng\u01b0\u1eddi th\u00fa v\u1ecb.</strong>\r\n\r\nH\u1ecd ch\u00ednh l\u00e0:\r\n\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li><strong>Kate Williams:</strong> <strong>Nh\u00e2n v\u1eadt ch\u00ednh</strong>, l\u00e0 m\u1ed9t c\u00f4 nh\u00e2n vi\u00ean m\u1edbi ra tr\u01b0\u1eddng v\u00e0 \u0111ang b\u1eaft \u0111\u1ea7u h\u1ecdc h\u1ecfi k\u0129 n\u0103ng v\u00e0 c\u00e1c kinh nghi\u1ec7m c\u00f4ng vi\u1ec7c c\u1ea7n thi\u1ebft.</li>\r\n \t<li><strong>David Johnson:</strong>\u00a0<strong>Gi\u00e1m \u0111\u1ed1c</strong><strong>,</strong> l\u00e0 m\u1ed9t ng\u01b0\u1eddi nghi\u00eam kh\u1eafc v\u00e0 c\u00f3 s\u1edf th\u00edch u\u1ed1ng c\u00e0 ph\u00ea.</li>\r\n \t<li><strong>James Brown</strong>: <strong>Qu\u1ea3n l\u00fd n\u1ed9i dung</strong>, anh ph\u1ee5 tr\u00e1ch n\u1ed9i dung c\u1ee7a to\u00e0n b\u1ed9 s\u1ea3n ph\u1ea9m t\u1ea1i E+ Education.</li>\r\n \t<li><strong>Mary Jones</strong>: <strong>Th\u01b0 k\u00fd</strong>, l\u00e0 m\u1ed9t ng\u01b0\u1eddi t\u1eadn t\u00ecnh v\u00e0 hay quan t\u00e2m.</li>\r\n \t<li><strong>Ted:</strong> <strong>Ng\u01b0\u1eddi d\u1eabn chuy\u1ec7n</strong>, \u0111\u01b0a ra nh\u1eefng l\u1eddi khuy\u00ean h\u1eefu \u00edch cho Kate trong vi\u1ec7c s\u1eed d\u1ee5ng ng\u00f4n ng\u1eef giao ti\u1ebfp ph\u00f9 h\u1ee3p.</li>\r\n</ul>\r\n[/su_list]\r\n\r\nNgo\u00e0i ra, trong c\u00e2u chuy\u1ec7n s\u1ebd xu\u1ea5t hi\u1ec7n nh\u1eefng nh\u00e2n v\u1eadt kh\u00e1c gi\u00fap t\u00ecnh hu\u1ed1ng giao ti\u1ebfp th\u00eam \u0111a d\u1ea1ng.\r\n\r\nTh\u00f4ng qua m\u1ed7i c\u00e2u chuy\u1ec7n th\u01b0\u1eddng ng\u00e0y t\u1ea1i n\u01a1i c\u00f4ng s\u1edf c\u1ee7a c\u00e1c nh\u00e2n vi\u00ean t\u1ea1i E+ Education, b\u1ea1n s\u1ebd \u0111\u01b0\u1ee3c ti\u1ebfp c\u1eadn c\u00e1c<strong> ch\u1ee7 \u0111\u1ec1 giao ti\u1ebfp ph\u1ed5 bi\u1ebfn nh\u1ea5t</strong> \u0111\u01b0\u1ee3c <strong>l\u1ed3ng gh\u00e9p</strong> v\u00e0o b\u00e0i h\u1ecdc.\r\n<h4><strong><img class=\"aligncenter wp-image-4929\" src=\"https://learn.x3english.com/wp-content/uploads/2017/02/01-banner-2.jpg\" alt=\"\" width=\"947\" height=\"958\" /></strong></h4>\r\n<h2><span style=\"color: #000000;\">H\u01b0\u1edbng d\u1eabn luy\u1ec7n t\u1eadp</span></h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<div class=\"su-list su-list-style-\">\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp m\u1ed7i<strong> B\u00e0i h\u1ecdc l\u1edbn (Lesson)</strong> v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 <strong>1 tu\u1ea7n.</strong></li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh\u00a0<strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong>\u00a0v\u00e0\u00a0<strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong>\u00a0ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho <strong>Lesson</strong> ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng\u00a0<strong>1-2 ti\u1ebfng</strong>\u00a0m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb\u00a0<strong>2-3</strong>\u00a0<strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n\u00a0<strong>2-3 tu\u1ea7n</strong>\u00a0cho m\u1ed9t Lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh\u00a0<strong>\u00edt nh\u1ea5t 16 tu\u1ea7n</strong>\u00a0\u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong>\u00a0l\u00e0m ch\u1ee7 ti\u1ebfng Anh nh\u01b0 ng\u01b0\u1eddi b\u1ea3n ng\u1eef</strong>.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n</div>\r\nH\u00e3y b\u1eaft \u0111\u1ea7u v\u1edbi Lesson 01 v\u00e0 ng\u00e0y h\u1ecdc \u0111\u1ea7u ti\u00ean ngay b\u00e2y gi\u1edd.",
      "post_title": "Com Fluency",
      "post_excerpt": "S\u1eed d\u1ee5ng th\u00e0nh th\u1ea1o ti\u1ebfng Anh \u0111\u1ec3 t\u01b0\u01a1ng t\u00e1c, x\u1eed l\u00fd c\u00e1c v\u1ea5n \u0111\u1ec1 ph\u1ee9c t\u1ea1p trong giao ti\u1ebfp ch\u1ec9 sau 4 th\u00e1ng luy\u1ec7n t\u1eadp v\u1edbi Comfluency.",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "com-fluency",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-26 14:52:39",
      "post_modified_gmt": "2018-09-26 07:52:39",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.net/course/com-fluency",
      "menu_order": "0",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    },
    {
      "ID": "8951",
      "post_author": "1",
      "post_date": "2018-05-28 16:43:50",
      "post_date_gmt": "2018-05-28 09:43:50",
      "post_content": "<h2>Eng Breaking - Ph\u00e1 Tan N\u1ed7i S\u1ee3 Giao Ti\u1ebfp Ti\u1ebfng Anh</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Tr\u1ecdn b\u1ed9 Eng Breaking: 12 lesson</li>\r\n \t<li>Ph\u1ea7n Bonus: 12 Lesson</li>\r\n \t<li>Th\u1eddi gian luy\u1ec7n: 144 ti\u1ebfng, t\u01b0\u01a1ng \u1ee9ng v\u1edbi 12 tu\u1ea7n \u2013 3 th\u00e1ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh</li>\r\n \t<li>T\u00e0i kho\u1ea3n h\u1ecdc Online trong 6 th\u00e1ng k\u1ec3 t\u1eeb ng\u00e0y k\u00edch ho\u1ea1t</li>\r\n</ul>\r\n[/su_list]\r\n<h3><strong>Chi ti\u1ebft nhi\u1ec7m v\u1ee5 h\u00e0ng tu\u1ea7n:</strong></h3>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n nghe v\u1edbi k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</li>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n n\u00f3i v\u1edbi k\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</li>\r\n \t<li>3 ng\u00e0y \u0111\u1ec3 th\u1ef1c h\u00e0nh ph\u1ea3n x\u1ea1 v\u1edbi k\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</li>\r\n \t<li>1 ng\u00e0y \u0111\u1ec3 th\u1ef1c hi\u1ec7n Th\u1eed Th\u00e1ch</li>\r\n</ul>\r\n[/su_list]\r\n\r\nSau khi k\u1ebft th\u00fac Eng Breaking, tr\u00ecnh \u0111\u1ed9 ti\u1ebfng Anh c\u1ee7a b\u1ea1n s\u1ebd:\r\n\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Giao ti\u1ebfp ti\u1ebfng Anh c\u01a1 b\u1ea3n</li>\r\n \t<li>\u0110\u1ee7 k\u1ef9 n\u0103ng ti\u1ebfng Anh \u0111\u1ec3 \u0111i du l\u1ecbch</li>\r\n</ul>\r\n[/su_list]\r\n\r\n<img class=\"aligncenter size-full wp-image-13300\" src=\"https://learn.x3english.com/wp-content/uploads/2018/05/01-3000px-hoc-tieng-anh-giong-het-cach-ban-tap-xe-dap-1.jpg\" alt=\"\" width=\"3000\" height=\"1639\" />\r\n\r\nK\u1ebft th\u00fac Eng Breaking c\u0169ng l\u00e0 l\u00fac b\u1ea1n \u0111\u00e3 ph\u00e1 b\u0103ng \u0111\u01b0\u1ee3c kh\u1ea3 n\u0103ng giao ti\u1ebfp ti\u1ebfng Anh c\u1ee7a m\u00ecnh.\r\n\r\nH\u00e3y luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh Eng Breaking ngay!",
      "post_title": "Eng Breaking",
      "post_excerpt": "Ph\u00e1 b\u0103ng ti\u1ebfng Anh, th\u00e0nh th\u1ea1o giao ti\u1ebfp c\u01a1 b\u1ea3n v\u1edbi ng\u01b0\u1eddi b\u1ea3n x\u1ee9 ch\u1ec9 sau 144 gi\u1edd luy\u1ec7n t\u1eadp, d\u1ef1a tr\u00ean 3 k\u1ef9 thu\u1eadt n\u1ec1n t\u1ea3ng.",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_password": "",
      "post_name": "eng-breaking-revolution",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2019-01-21 17:24:20",
      "post_modified_gmt": "2019-01-21 10:24:20",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.com/?post_type=sfwd-courses&#038;p=8951",
      "menu_order": "0",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    }]';
	
	$result = json_decode($result);
	$response = new WP_REST_Response($result);
    $response->set_status(200);
    return $response;
}
function get_topic_list(WP_REST_Request $request) {
		$result = '[{
      "ID": "31",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_author": "1",
      "post_date": "2017-02-27 08:51:47",
      "post_date_gmt": "2017-02-27 01:51:47",
      "post_content": "<h2>Eng Breaking - Ph\u00e1 Tan N\u1ed7i S\u1ee3 Giao Ti\u1ebfp Ti\u1ebfng Anh</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Tr\u1ecdn b\u1ed9 12 lesson</li>\r\n \t<li>Th\u1eddi gian luy\u1ec7n: 144 ti\u1ebfng, t\u01b0\u01a1ng \u1ee9ng v\u1edbi 12 tu\u1ea7n \u2013 3 th\u00e1ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh</li>\r\n \t<li>T\u00e0i kho\u1ea3n h\u1ecdc Online trong 6 th\u00e1ng k\u1ec3 t\u1eeb ng\u00e0y k\u00edch ho\u1ea1t</li>\r\n</ul>\r\n[/su_list]\r\n<h3><strong>Chi ti\u1ebft nhi\u1ec7m v\u1ee5 h\u00e0ng tu\u1ea7n:</strong></h3>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n nghe v\u1edbi k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</li>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n n\u00f3i v\u1edbi k\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</li>\r\n \t<li>4 ng\u00e0y \u0111\u1ec3 th\u1ef1c h\u00e0nh ph\u1ea3n x\u1ea1 v\u1edbi k\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</li>\r\n</ul>\r\n[/su_list]\r\n\r\nSau khi k\u1ebft th\u00fac Eng Breaking tr\u00ecnh \u0111\u1ed9 ti\u1ebfng Anh c\u1ee7a b\u1ea1n s\u1ebd\r\n\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Giao ti\u1ebfp ti\u1ebfng Anh c\u01a1 b\u1ea3n</li>\r\n \t<li>\u0110\u1ee7 k\u1ef9 n\u0103ng ti\u1ebfng Anh \u0111\u1ec3 \u0111i du l\u1ecbch</li>\r\n</ul>\r\n[/su_list]\r\n\r\nK\u1ebft th\u00fac Eng Breaking c\u0169ng l\u00e0 l\u00fac b\u1ea1n \u0111\u00e3 ph\u00e1 b\u0103ng \u0111\u01b0\u1ee3c kh\u1ea3 n\u0103ng giao ti\u1ebfp ti\u1ebfng Anh c\u1ee7a m\u00ecnh.\r\n\r\nH\u00e3y luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh Eng Breaking ngay!",
      "post_title": "Eng Breaking",
      "post_excerpt": "Ph\u00e1 b\u0103ng ti\u1ebfng Anh, th\u00e0nh th\u1ea1o giao ti\u1ebfp c\u01a1 b\u1ea3n v\u1edbi ng\u01b0\u1eddi b\u1ea3n x\u1ee9 ch\u1ec9 sau 144 gi\u1edd luy\u1ec7n t\u1eadp, d\u1ef1a tr\u00ean 3 k\u1ef9 thu\u1eadt n\u1ec1n t\u1ea3ng.",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "eng-breaking",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-26 14:52:57",
      "post_modified_gmt": "2018-09-26 07:52:57",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.com/?post_type=sfwd-courses&#038;p=31",
      "menu_order": "4",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    },
    {
      "ID": "790",
      "post_author": "1",
      "post_date": "2017-02-27 08:56:19",
      "post_date_gmt": "2017-02-27 01:56:19",
      "post_content": "<img class=\"alignleft\" src=\"https://x3english.cdn.vccloud.vn/wp-content/uploads/2017/05/03.png\" width=\"207\" height=\"207\" />\r\n\r\nJames - C\u1ed9ng s\u1ef1 c\u1ee7a X3English.\r\n\r\n<strong>James Joseph Kendall</strong> sinh ra v\u00e0 l\u1edbn l\u00ean \u1edf th\u00e0nh ph\u1ed1 Springfield, thu\u1ed9c ti\u1ec3u bang Ohio c\u1ee7a M\u1ef9.\r\n\r\nAnh \u0111\u00e3 d\u1ea1y v\u00e0 gi\u00fap \u0111\u1ee1 nhi\u1ec1u b\u1ea1n Vi\u1ec7t Nam n\u00e2ng cao kh\u1ea3 n\u0103ng ti\u1ebfng Anh su\u1ed1t <strong>g\u1ea7n 4 n\u0103m </strong>qua.\r\n\r\nAnh c\u0169ng ch\u00ednh l\u00e0 <strong>ng\u01b0\u1eddi s\u00e1ng l\u1eadp</strong> c\u00e2u l\u1ea1c b\u1ed9 <strong>Keep Hanoi Clean</strong> v\u00e0 th\u01b0\u1eddng xuy\u00ean t\u1ed5 ch\u1ee9c c\u00e1c ho\u1ea1t \u0111\u1ed9ng t\u00ecnh nguy\u1ec7n b\u1ea3o v\u1ec7 m\u00f4i tr\u01b0\u1eddng.\r\n\r\n<hr />\r\n<p style=\"text-align: left;\"><strong>\u0110\u00e3 bao gi\u1edd b\u1ea1n ngh\u0129 c\u00f3 m\u1ed9t ch\u01b0\u01a1ng tr\u00ecnh luy\u1ec7n ph\u00e1t \u00e2m gi\u00fap b\u1ea1n n\u00f3i chu\u1ea9n gi\u1ecdng Anh - M\u1ef9 ch\u1ec9 sau 1 th\u00e1ng? - </strong><strong>V\u1edbi Ulti Pronun, \u0111i\u1ec1u \u0111\u00f3 ho\u00e0n to\u00e0n c\u00f3 th\u1ec3.</strong></p>\r\n\r\n<h2 style=\"text-align: center;\">B\u1ea1n s\u1ebd nh\u1eadn \u0111\u01b0\u1ee3c g\u00ec?</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li><strong>T\u00e0i kho\u1ea3n</strong>\u00a0h\u1ecdc online tr\u00ean h\u1ec7 th\u1ed1ng\u00a0<a href=\"https://learn.x3english.com/\" target=\"_blank\" rel=\"noopener noreferrer\">https://learn.x3english.com/</a>.</li>\r\n \t<li><strong>Gi\u00e1o tr\u00ecnh h\u01b0\u1edbng d\u1eabn to\u00e0n di\u1ec7n ph\u00e1t \u00e2m chu\u1ea9n Anh - M\u1ef9</strong> bao g\u1ed3m: <strong>K\u1ebf ho\u1ea1ch h\u00e0nh \u0111\u1ed9ng h\u00e0ng ng\u00e0y</strong> (Checklist) v\u00e0 <strong>Ki\u1ebfn th\u1ee9c\u00a0b\u00e0i h\u1ecdc</strong>.</li>\r\n \t<li><strong>Email h\u1ed7 tr\u1ee3</strong>: B\u1ea1n s\u1ebd \u0111\u01b0\u1ee3c bi\u1ebft \"<strong>m\u1ed9t \u0111\u1ed1ng\u00a0l\u1ed7i</strong>\"\u00a0m\u00e0 90% ng\u01b0\u1eddi Vi\u1ec7t m\u1eafc ph\u1ea3i khi ph\u00e1t \u00e2m. <strong>Gi\u00e1o tr\u00ecnh ph\u00e1t \u00e2m b\u1eb1ng ti\u1ebfng Anh</strong> c\u0169ng \u0111\u01b0\u1ee3c k\u00e8m trong email gi\u00fap b\u1ea1n v\u1eeba \u0111\u01b0\u1ee3c h\u1ecdc ph\u00e1t \u00e2m v\u1eeba t\u0103ng v\u1ed1n t\u1eeb v\u1ef1ng ti\u1ebfng Anh c\u1ee7a m\u00ecnh.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">Ulti Pronun s\u1ebd gi\u00fap b\u1ea1n</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>C\u00f3 \u0111\u01b0\u1ee3c <strong>b\u00ed quy\u1ebft</strong> luy\u1ec7n ph\u00e1t \u00e2m hi\u1ec7u qu\u1ea3 \u0111\u00e3 \u0111\u01b0\u1ee3c nghi\u00ean c\u1ee9u v\u00e0 ch\u1ee9ng nh\u1eadn.</li>\r\n \t<li>Ph\u00e1t \u00e2m ch\u00ednh x\u00e1c to\u00e0n b\u1ed9 <b>40 \u00e2m</b> trong h\u1ec7 th\u1ed1ng \u00e2m Anh - M\u1ef9 chu\u1ea9n IPA. (Theo <a href=\"http://www.oxfordlearnersdictionaries.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Oxford Learner\u2019s Dictionaries</a>\u00a0- H\u1ec7 th\u1ed1ng t\u1eeb \u0111i\u1ec3n <strong>chu\u1ea9n</strong> \u0111\u01b0\u1ee3c s\u1eed d\u1ee5ng t\u1ea1i h\u1ea7u h\u1ebft c\u00e1c <strong>trung t\u00e2m ti\u1ebfng Anh uy t\u00edn</strong>\u00a0\u1edf Vi\u1ec7t Nam.)</li>\r\n \t<li>Ti\u1ebft ki\u1ec7m \u0111\u1ebfn\u00a0<b>49%</b> <b>th\u1eddi gian</b> v\u00e0 <b>c\u00f4ng s\u1ee9c</b> luy\u1ec7n t\u1eadp \u0111\u1ec3 n\u00f3i ti\u1ebfng Anh <b>chu\u1ea9n</b> v\u00e0 <b>t\u1ef1 nhi\u00ean</b>.</li>\r\n \t<li>Ph\u00e1t \u00e2m chu\u1ea9n v\u00e0 t\u1ef1 nhi\u00ean <b>b\u1ea5t k\u1ef3</b> t\u1eeb Anh - M\u1ef9 n\u00e0o.</li>\r\n \t<li>Bi\u1ebft c\u00e1ch <b>s\u1eed d\u1ee5ng</b> ng\u1eef \u0111i\u1ec7u, n\u1ed1i \u00e2m, tr\u1ecdng \u00e2m \u0111\u1ec3 n\u00f3i ti\u1ebfng Anh.</li>\r\n \t<li><b>T\u1ef1 tin</b> n\u00f3i ti\u1ebfng Anh trong <b>m\u1ecdi ho\u00e0n c\u1ea3nh</b>.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">Ulti Pronun - H\u1ec7 Th\u1ed1ng Ph\u00e1t \u00c2m Chu\u1ea9n Gi\u1ecdng M\u1ef9<span style=\"color: #ff6600;\"><strong>\r\n</strong></span></h2>\r\n<img class=\"aligncenter size-full wp-image-2219\" src=\"https://learn.x3english.com/wp-content/uploads/2017/02/01-banner-x3english-1.png\" alt=\"\" width=\"687\" height=\"620\" />\r\n\r\n<strong>H\u00e3y kh\u00e1m ph\u00e1 Ulti Pronun ngay!</strong>",
      "post_title": "Ulti Pronun",
      "post_excerpt": "Nhanh ch\u00f3ng c\u00f3 gi\u1ecdng chu\u1ea9n M\u1ef9 v\u1edbi 30 ng\u00e0y th\u1ef1c h\u00e0nh ph\u00e1t \u00e2m theo k\u1ef9 thu\u1eadt 3 b\u01b0\u1edbc, k\u1ef9 thu\u1eadt m\u00e0i \u00e2m\u2026 (\u0110\u1ed9c quy\u1ec1n b\u1edfi X3English).",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "ulti-pronun",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-26 14:52:47",
      "post_modified_gmt": "2018-09-26 07:52:47",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.net/course/pronun",
      "menu_order": "0",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    },
    {
      "ID": "789",
      "post_author": "1",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_date": "2017-02-27 08:56:55",
      "post_date_gmt": "2017-02-27 01:56:55",
      "post_content": "<strong>Com Fluency</strong> l\u00e0 kh\u00f3a h\u1ecdc ti\u1ebfng Anh n\u00e2ng cao chuy\u00ean v\u1ec1 <strong>ti\u1ebfng Anh giao ti\u1ebfp\u00a0cho ng\u01b0\u1eddi \u0111i l\u00e0m</strong>, h\u1eefu \u00edch cho vi\u1ec7c giao ti\u1ebfp n\u01a1i c\u00f4ng s\u1edf v\u00e0 trong cu\u1ed9c s\u1ed1ng.\r\n<h4><img class=\"aligncenter size-full wp-image-4899\" src=\"https://learn.x3english.com/wp-content/uploads/2017/02/31-banner-info-graphic-min-1.jpg\" alt=\"\" width=\"1180\" height=\"407\" /></h4>\r\nB\u00e0i h\u1ecdc d\u1ef1a tr\u00ean b\u1ed1i c\u1ea3nh t\u1ea1i <strong>E+ Education</strong>, m\u1ed9t trong nh\u1eefng c\u00f4ng ty gi\u00e1o d\u1ee5c c\u00f3 t\u1ed1c \u0111\u1ed9 ph\u00e1t tri\u1ec3n nhanh nh\u1ea5t th\u1ebf gi\u1edbi.\r\n\r\nTo\u00e0n b\u1ed9 kh\u00f3a h\u1ecdc l\u00e0 m\u1ed9t nh\u1eefng\u00a0<strong>c\u00e2u chuy\u1ec7n th\u00fa v\u1ecb</strong> c\u1ee7a nh\u1eefng <strong>con ng\u01b0\u1eddi th\u00fa v\u1ecb.</strong>\r\n\r\nH\u1ecd ch\u00ednh l\u00e0:\r\n\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li><strong>Kate Williams:</strong> <strong>Nh\u00e2n v\u1eadt ch\u00ednh</strong>, l\u00e0 m\u1ed9t c\u00f4 nh\u00e2n vi\u00ean m\u1edbi ra tr\u01b0\u1eddng v\u00e0 \u0111ang b\u1eaft \u0111\u1ea7u h\u1ecdc h\u1ecfi k\u0129 n\u0103ng v\u00e0 c\u00e1c kinh nghi\u1ec7m c\u00f4ng vi\u1ec7c c\u1ea7n thi\u1ebft.</li>\r\n \t<li><strong>David Johnson:</strong>\u00a0<strong>Gi\u00e1m \u0111\u1ed1c</strong><strong>,</strong> l\u00e0 m\u1ed9t ng\u01b0\u1eddi nghi\u00eam kh\u1eafc v\u00e0 c\u00f3 s\u1edf th\u00edch u\u1ed1ng c\u00e0 ph\u00ea.</li>\r\n \t<li><strong>James Brown</strong>: <strong>Qu\u1ea3n l\u00fd n\u1ed9i dung</strong>, anh ph\u1ee5 tr\u00e1ch n\u1ed9i dung c\u1ee7a to\u00e0n b\u1ed9 s\u1ea3n ph\u1ea9m t\u1ea1i E+ Education.</li>\r\n \t<li><strong>Mary Jones</strong>: <strong>Th\u01b0 k\u00fd</strong>, l\u00e0 m\u1ed9t ng\u01b0\u1eddi t\u1eadn t\u00ecnh v\u00e0 hay quan t\u00e2m.</li>\r\n \t<li><strong>Ted:</strong> <strong>Ng\u01b0\u1eddi d\u1eabn chuy\u1ec7n</strong>, \u0111\u01b0a ra nh\u1eefng l\u1eddi khuy\u00ean h\u1eefu \u00edch cho Kate trong vi\u1ec7c s\u1eed d\u1ee5ng ng\u00f4n ng\u1eef giao ti\u1ebfp ph\u00f9 h\u1ee3p.</li>\r\n</ul>\r\n[/su_list]\r\n\r\nNgo\u00e0i ra, trong c\u00e2u chuy\u1ec7n s\u1ebd xu\u1ea5t hi\u1ec7n nh\u1eefng nh\u00e2n v\u1eadt kh\u00e1c gi\u00fap t\u00ecnh hu\u1ed1ng giao ti\u1ebfp th\u00eam \u0111a d\u1ea1ng.\r\n\r\nTh\u00f4ng qua m\u1ed7i c\u00e2u chuy\u1ec7n th\u01b0\u1eddng ng\u00e0y t\u1ea1i n\u01a1i c\u00f4ng s\u1edf c\u1ee7a c\u00e1c nh\u00e2n vi\u00ean t\u1ea1i E+ Education, b\u1ea1n s\u1ebd \u0111\u01b0\u1ee3c ti\u1ebfp c\u1eadn c\u00e1c<strong> ch\u1ee7 \u0111\u1ec1 giao ti\u1ebfp ph\u1ed5 bi\u1ebfn nh\u1ea5t</strong> \u0111\u01b0\u1ee3c <strong>l\u1ed3ng gh\u00e9p</strong> v\u00e0o b\u00e0i h\u1ecdc.\r\n<h4><strong><img class=\"aligncenter wp-image-4929\" src=\"https://learn.x3english.com/wp-content/uploads/2017/02/01-banner-2.jpg\" alt=\"\" width=\"947\" height=\"958\" /></strong></h4>\r\n<h2><span style=\"color: #000000;\">H\u01b0\u1edbng d\u1eabn luy\u1ec7n t\u1eadp</span></h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<div class=\"su-list su-list-style-\">\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp m\u1ed7i<strong> B\u00e0i h\u1ecdc l\u1edbn (Lesson)</strong> v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 <strong>1 tu\u1ea7n.</strong></li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh\u00a0<strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong>\u00a0v\u00e0\u00a0<strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong>\u00a0ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho <strong>Lesson</strong> ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng\u00a0<strong>1-2 ti\u1ebfng</strong>\u00a0m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb\u00a0<strong>2-3</strong>\u00a0<strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n\u00a0<strong>2-3 tu\u1ea7n</strong>\u00a0cho m\u1ed9t Lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh\u00a0<strong>\u00edt nh\u1ea5t 16 tu\u1ea7n</strong>\u00a0\u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong>\u00a0l\u00e0m ch\u1ee7 ti\u1ebfng Anh nh\u01b0 ng\u01b0\u1eddi b\u1ea3n ng\u1eef</strong>.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n</div>\r\nH\u00e3y b\u1eaft \u0111\u1ea7u v\u1edbi Lesson 01 v\u00e0 ng\u00e0y h\u1ecdc \u0111\u1ea7u ti\u00ean ngay b\u00e2y gi\u1edd.",
      "post_title": "Com Fluency",
      "post_excerpt": "S\u1eed d\u1ee5ng th\u00e0nh th\u1ea1o ti\u1ebfng Anh \u0111\u1ec3 t\u01b0\u01a1ng t\u00e1c, x\u1eed l\u00fd c\u00e1c v\u1ea5n \u0111\u1ec1 ph\u1ee9c t\u1ea1p trong giao ti\u1ebfp ch\u1ec9 sau 4 th\u00e1ng luy\u1ec7n t\u1eadp v\u1edbi Comfluency.",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "com-fluency",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-26 14:52:39",
      "post_modified_gmt": "2018-09-26 07:52:39",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.net/course/com-fluency",
      "menu_order": "0",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    },
    {
      "ID": "8951",
      "post_author": "1",
      "post_date": "2018-05-28 16:43:50",
      "post_date_gmt": "2018-05-28 09:43:50",
      "post_content": "<h2>Eng Breaking - Ph\u00e1 Tan N\u1ed7i S\u1ee3 Giao Ti\u1ebfp Ti\u1ebfng Anh</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Tr\u1ecdn b\u1ed9 Eng Breaking: 12 lesson</li>\r\n \t<li>Ph\u1ea7n Bonus: 12 Lesson</li>\r\n \t<li>Th\u1eddi gian luy\u1ec7n: 144 ti\u1ebfng, t\u01b0\u01a1ng \u1ee9ng v\u1edbi 12 tu\u1ea7n \u2013 3 th\u00e1ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh</li>\r\n \t<li>T\u00e0i kho\u1ea3n h\u1ecdc Online trong 6 th\u00e1ng k\u1ec3 t\u1eeb ng\u00e0y k\u00edch ho\u1ea1t</li>\r\n</ul>\r\n[/su_list]\r\n<h3><strong>Chi ti\u1ebft nhi\u1ec7m v\u1ee5 h\u00e0ng tu\u1ea7n:</strong></h3>\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n nghe v\u1edbi k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</li>\r\n \t<li>1 ng\u00e0y d\u00e0nh ri\u00eang cho vi\u1ec7c luy\u1ec7n n\u00f3i v\u1edbi k\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</li>\r\n \t<li>3 ng\u00e0y \u0111\u1ec3 th\u1ef1c h\u00e0nh ph\u1ea3n x\u1ea1 v\u1edbi k\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</li>\r\n \t<li>1 ng\u00e0y \u0111\u1ec3 th\u1ef1c hi\u1ec7n Th\u1eed Th\u00e1ch</li>\r\n</ul>\r\n[/su_list]\r\n\r\nSau khi k\u1ebft th\u00fac Eng Breaking, tr\u00ecnh \u0111\u1ed9 ti\u1ebfng Anh c\u1ee7a b\u1ea1n s\u1ebd:\r\n\r\n[su_list icon=\"icon: check\" icon_color=\"#1FA850\"]\r\n<ul>\r\n \t<li>Giao ti\u1ebfp ti\u1ebfng Anh c\u01a1 b\u1ea3n</li>\r\n \t<li>\u0110\u1ee7 k\u1ef9 n\u0103ng ti\u1ebfng Anh \u0111\u1ec3 \u0111i du l\u1ecbch</li>\r\n</ul>\r\n[/su_list]\r\n\r\n<img class=\"aligncenter size-full wp-image-13300\" src=\"https://learn.x3english.com/wp-content/uploads/2018/05/01-3000px-hoc-tieng-anh-giong-het-cach-ban-tap-xe-dap-1.jpg\" alt=\"\" width=\"3000\" height=\"1639\" />\r\n\r\nK\u1ebft th\u00fac Eng Breaking c\u0169ng l\u00e0 l\u00fac b\u1ea1n \u0111\u00e3 ph\u00e1 b\u0103ng \u0111\u01b0\u1ee3c kh\u1ea3 n\u0103ng giao ti\u1ebfp ti\u1ebfng Anh c\u1ee7a m\u00ecnh.\r\n\r\nH\u00e3y luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh Eng Breaking ngay!",
      "post_title": "Eng Breaking",
      "post_excerpt": "Ph\u00e1 b\u0103ng ti\u1ebfng Anh, th\u00e0nh th\u1ea1o giao ti\u1ebfp c\u01a1 b\u1ea3n v\u1edbi ng\u01b0\u1eddi b\u1ea3n x\u1ee9 ch\u1ec9 sau 144 gi\u1edd luy\u1ec7n t\u1eadp, d\u1ef1a tr\u00ean 3 k\u1ef9 thu\u1eadt n\u1ec1n t\u1ea3ng.",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_password": "",
      "post_name": "eng-breaking-revolution",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2019-01-21 17:24:20",
      "post_modified_gmt": "2019-01-21 10:24:20",
      "post_content_filtered": "",
      "post_parent": "0",
      "guid": "https://learn.x3english.com/?post_type=sfwd-courses&#038;p=8951",
      "menu_order": "0",
      "post_type": "sfwd-courses",
      "post_mime_type": "",
      "comment_count": "0"
    }]';
	
	$result = json_decode($result);
	$response = new WP_REST_Response($result);
    $response->set_status(200);
    return $response;
}

function get_list_lesson(WP_REST_Request $request) {
		$result = '[
    {
      "ID": 42,
      "post_author": "1",
      "post_date": "2017-02-27 08:59:14",
      "post_date_gmt": "2017-02-27 08:59:14",
      "post_content": "<p style=\"text-align: left;\">B\u1ea1n \u0111\u00e3 bao gi\u1edd b\u1eaft chuy\u1ec7n, t\u1ef1 gi\u1edbi thi\u1ec7u v\u1edbi m\u1ed9t ng\u01b0\u1eddi n\u01b0\u1edbc ngo\u00e0i ch\u01b0a?</p>\r\n<p style=\"text-align: left;\">B\u00e0i h\u1ecdc ng\u00e0y h\u00f4m nay s\u1ebd gi\u00fap b\u1ea1n l\u00e0m \u0111i\u1ec1u \u0111\u00f3 m\u1ed9t c\u00e1ch \u0111\u01a1n gi\u1ea3n v\u00e0 l\u1ecbch s\u1ef1.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 01 - Introducing yourself",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-01-introducing-yourself",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2019-01-04 16:07:53",
      "post_modified_gmt": "2019-01-04 09:07:53",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=42",
      "menu_order": 1,
      "thumbnail": "https://learn.x3english.com/wp-content/uploads/2017/08/05-banner-492x305-4.jpg",
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 43,
      "post_author": "1",
      "post_date": "2017-02-27 09:00:19",
      "post_date_gmt": "2017-02-27 09:00:19",
      "post_content": "S\u1edf th\u00edch l\u00e0 ch\u1ee7 \u0111\u1ec1 quen thu\u1ed9c trong giao ti\u1ebfp ti\u1ebfng Anh.\r\n\r\nCh\u00fang t\u00f4i s\u1ebd gi\u00fap b\u1ea1n n\u00f3i v\u1ec1 v\u1ea5n \u0111\u1ec1 n\u00e0y tr\u00f4i ch\u1ea3y v\u00e0 l\u01b0u lo\u00e1t.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 02 - What Kind of Music do You Like?",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-02-what-kind-of-music-do-you-like",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 14:58:07",
      "post_modified_gmt": "2017-08-14 07:58:07",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=43",
      "menu_order": 2,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 172,
      "post_author": "1",
      "post_date": "2017-02-28 13:53:30",
      "post_date_gmt": "2017-02-28 13:53:30",
      "post_content": "Lesson 03 s\u1ebd gi\u00fap b\u1ea1n di\u1ec5n \u0111\u1ea1t s\u1ef1 ki\u1ec3m tra l\u1ea1i b\u1ea3n th\u00e2n tr\u01b0\u1edbc khi t\u1edbi m\u1ed9t cu\u1ed9c h\u1eb9n quan tr\u1ecdng n\u00e0o \u0111\u00f3 nh\u01b0 \u0111i ph\u1ecfng v\u1ea5n, d\u1ef1 ti\u1ec7c hay h\u1eb9n h\u00f2.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 03 - Before Going to an Appointment",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-03-before-going-to-an-appointment",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-09-12 11:07:19",
      "post_modified_gmt": "2017-09-12 04:07:19",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=172",
      "menu_order": 3,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 174,
      "post_author": "1",
      "post_date": "2017-02-28 13:54:32",
      "post_date_gmt": "2017-02-28 13:54:32",
      "post_content": "\u1ede Lesson 04 ch\u00fang t\u00f4i s\u1ebd gi\u00fap b\u1ea1n hi\u1ec3u h\u01a1n v\u1ec1 vi\u1ec7c \u0111i du l\u1ecbch v\u00e0o d\u1ecbp T\u1ebft Nguy\u00ean \u0111\u00e1n.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 04 - A Lunar New Year Flight",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-04-a-lunar-new-year-flight",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 14:59:10",
      "post_modified_gmt": "2017-08-14 07:59:10",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=174",
      "menu_order": 4,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 176,
      "post_author": "1",
      "post_date": "2017-02-28 13:55:09",
      "post_date_gmt": "2017-02-28 13:55:09",
      "post_content": "Mua s\u1eafm l\u00e0 c\u00f4ng vi\u1ec7c thi\u1ebft y\u1ebfu h\u00e0ng ng\u00e0y.\r\n\r\nSau khi h\u1ecdc b\u00e0i n\u00e0y, b\u1ea1n s\u1ebd kh\u00f4ng c\u00f2n ph\u1ea3i lo l\u1eafng kh\u00f4ng bi\u1ebft h\u1ecfi v\u1ec1 \u0111\u1ed3 b\u1ea1n mu\u1ed1n mua nh\u01b0 th\u1ebf n\u00e0o n\u1eefa.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 05 - Shopping",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-05-shopping",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 14:59:11",
      "post_modified_gmt": "2017-08-14 07:59:11",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=176",
      "menu_order": 5,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 178,
      "post_author": "1",
      "post_date": "2017-02-28 13:56:20",
      "post_date_gmt": "2017-02-28 13:56:20",
      "post_content": "B\u1ea1n s\u1ebd kh\u00f4ng c\u00f2n ph\u1ea3i b\u0103n kho\u0103n v\u1ec1 c\u00e1ch m\u1edf l\u1eddi m\u1eddi \u0111i \u0103n v\u00ec ch\u00fang t\u00f4i s\u1ebd gi\u00fap b\u1ea1n d\u1ec5 d\u00e0ng bi\u1ec3u \u0111\u1ea1t trong Lesson 06.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 06 - Dining Out",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-06-dining-out",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 14:59:26",
      "post_modified_gmt": "2017-08-14 07:59:26",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=178",
      "menu_order": 6,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 183,
      "post_author": "1",
      "post_date": "2017-02-28 13:57:49",
      "post_date_gmt": "2017-02-28 13:57:49",
      "post_content": "Lesson 08 s\u1ebd cung c\u1ea5p m\u1eabu c\u00e2u giao ti\u1ebfp quen thu\u1ed9c li\u00ean quan \u0111\u1ebfn th\u1eddi gian bay v\u00e0 chuy\u1ebfn bay cho b\u1ea1n.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 08 - In the Airport",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-08-in-the-airport",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:00:31",
      "post_modified_gmt": "2017-08-14 08:00:31",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=183",
      "menu_order": 8,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 185,
      "post_author": "1",
      "post_date": "2017-02-28 13:58:20",
      "post_date_gmt": "2017-02-28 13:58:20",
      "post_content": "Ch\u1eafc h\u1eb3n b\u1ea1n mu\u1ed1n gi\u00fap \u0111\u1ee1 ng\u01b0\u1eddi n\u01b0\u1edbc ngo\u00e0i h\u1ecfi \u0111\u01b0\u1eddng khi h\u1ecd \u0111i du l\u1ecbch.\r\n\r\nCh\u1ec9 c\u1ea7n h\u1ecdc xong Lesson 09 b\u1ea1n s\u1ebd l\u00e0m \u0111\u01b0\u1ee3c \u0111i\u1ec1u \u0111\u00f3.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 09 - Giving Directions",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-09-giving-directions",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:00:49",
      "post_modified_gmt": "2017-08-14 08:00:49",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=185",
      "menu_order": 9,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 188,
      "post_author": "1",
      "post_date": "2017-02-28 13:59:23",
      "post_date_gmt": "2017-02-28 13:59:23",
      "post_content": "<p style=\"text-align: left;\">B\u1ea1n th\u00edch m\u1ed9t ng\u01b0\u1eddi, b\u1ea1n mu\u1ed1n th\u1ed5 l\u1ed9 v\u00e0 m\u1eddi ng\u01b0\u1eddi \u0111\u00f3 \u0111i \u0103n.</p>\r\n<p style=\"text-align: left;\">\u0110i\u1ec1u \u0111\u00f3 s\u1ebd kh\u00f4ng c\u00f2n l\u00e0 tr\u1edf ng\u1ea1i khi b\u1ea1n h\u1ecdc xong Lesson 10.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 10 - Asking Someone Out",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-10-asking-someone-out",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:01:15",
      "post_modified_gmt": "2017-08-14 08:01:15",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=188",
      "menu_order": 10,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 190,
      "post_author": "1",
      "post_date": "2017-02-28 14:00:14",
      "post_date_gmt": "2017-02-28 14:00:14",
      "post_content": "<p style=\"text-align: left;\">Khi b\u1ea1n mu\u1ed1n h\u1eb9n b\u1ea1n c\u1ee7a b\u1ea1n \u0111i mua s\u1eafm th\u00ec n\u00ean n\u00f3i nh\u01b0 th\u1ebf n\u00e0o?</p>\r\n<p style=\"text-align: left;\">Lesson 11 s\u1ebd gi\u1ea3i \u0111\u00e1p c\u1eb7n k\u1ebd cho b\u1ea1n.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 11 - The Clothes Shop is Closed",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-11-the-clothes-shop-is-closed",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:01:29",
      "post_modified_gmt": "2017-08-14 08:01:29",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=190",
      "menu_order": 11,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 193,
      "post_author": "1",
      "post_date": "2017-02-28 14:00:49",
      "post_date_gmt": "2017-02-28 14:00:49",
      "post_content": "<p style=\"text-align: left;\">B\u00e0i n\u00e0y gi\u00fap b\u1ea1n d\u1ec5 d\u00e0ng n\u00f3i v\u1ec1 d\u1ef1 \u0111\u1ecbnh \u0111i du l\u1ecbch c\u1ee7a b\u1ea1n c\u0169ng nh\u01b0 h\u1ecfi ng\u01b0\u1eddi n\u01b0\u1edbc ngo\u00e0i v\u1ec1 nh\u1eefng chuy\u1ebfn \u0111i c\u1ee7a h\u1ecd.</p>\r\n<p style=\"text-align: left;\">Tr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.</p>\r\n\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 12 - Vacation to Canada",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-12-vacation-to-canada",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-09 10:08:11",
      "post_modified_gmt": "2017-08-09 03:08:11",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=193",
      "menu_order": 12,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 779,
      "post_author": "1",
      "post_date": "2017-02-28 13:57:08",
      "post_date_gmt": "2017-02-28 13:57:08",
      "post_content": "Qua b\u00e0i n\u00e0y ch\u00fang t\u00f4i cung c\u1ea5p cho b\u1ea1n nh\u1eefng t\u1eeb v\u1ef1ng v\u00e0 m\u1eabu c\u00e2u quen thu\u1ed9c m\u00e0 ng\u01b0\u1eddi M\u1ef9 hay n\u00f3i chuy\u1ec7n v\u1ec1 gi\u1edbi showbiz v\u00e0 c\u00e1c ng\u00f4i sao.\r\n\r\nTr\u01b0\u1edbc khi b\u1eaft tay v\u00e0o luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh. H\u00e3y d\u00e0nh \u00edt ph\u00fat \u0111\u1ec3 \u0111\u1ecdc h\u01b0\u1edbng d\u1eabn b\u00ean d\u01b0\u1edbi.\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn chung</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n<ul>\r\n \t<li>B\u1ea1n s\u1ebd luy\u1ec7n t\u1eadp lesson n\u00e0y v\u1edbi th\u1eddi l\u01b0\u1ee3ng t\u1ed1t nh\u1ea5t l\u00e0 1 tu\u1ea7n.</li>\r\n \t<li>Trong 7 ng\u00e0y, b\u1ea1n s\u1ebd d\u00e0nh <strong>6 ng\u00e0y luy\u1ec7n t\u1eadp</strong> v\u00e0 <strong>1 ng\u00e0y ngh\u1ec9 ng\u01a1i</strong> ho\u00e0n to\u00e0n th\u01b0 gi\u00e3n, chu\u1ea9n b\u1ecb cho lesson ti\u1ebfp theo.</li>\r\n \t<li>Th\u1eddi l\u01b0\u1ee3ng luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh kho\u1ea3ng <strong>1-2 ti\u1ebfng</strong> m\u1ed7i ng\u00e0y.</li>\r\n \t<li>N\u1ebfu kh\u00f4ng th\u1ec3 luy\u1ec7n t\u1eadp v\u00e0 th\u1ef1c h\u00e0nh li\u00ean t\u1ee5c, b\u1ea1n c\u00f3 th\u1ec3 \u0111i\u1ec1u ch\u1ec9nh ph\u01b0\u01a1ng \u00e1n luy\u1ec7n t\u1eeb <strong>2-3</strong> <strong>bu\u1ed5i/tu\u1ea7n</strong>. Nh\u01b0 v\u1eady, b\u1ea1n c\u1ea7n <strong>2-3 tu\u1ea7n</strong> cho m\u1ed9t lesson.</li>\r\n \t<li>Ch\u00fang t\u00f4i khuy\u1ebfn kh\u00edch b\u1ea1n n\u00ean d\u00e0nh <strong>\u00edt nh\u1ea5t 12 tu\u1ea7n</strong> \u0111\u1ec3 ho\u00e0n th\u00e0nh ch\u01b0\u01a1ng tr\u00ecnh, \u0111\u1ec3 c\u00f3 th\u1ec3<strong> ph\u00e1 v\u1ee1 r\u00e0o c\u1ea3n ti\u1ebfng Anh </strong>ban \u0111\u1ea7u c\u1ee7a b\u1ea1n.</li>\r\n</ul>\r\n[/su_list]\r\n<h2 style=\"text-align: center;\">H\u01b0\u1edbng d\u1eabn s\u1eed d\u1ee5ng checklist</h2>\r\n[su_list icon=\"icon: check\" icon_color=\"#089e38\"]\r\n\r\nCh\u00fang t\u00f4i khuy\u1ebfn c\u00e1o b\u1ea1n n\u00ean s\u1eed d\u1ee5ng checklist trong quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng.\u00a0Checklist \u1edf tr\u00ean h\u1ec7 th\u1ed1ng online ch\u1ec9 s\u1eed d\u1ee5ng khi b\u1ea1n kh\u00f4ng c\u00f3 quy\u1ec3n S\u1ed5 Tay H\u00e0nh \u0110\u1ed9ng tr\u00ean tay.\r\n<ul>\r\n \t<li>Chi ti\u1ebft m\u1ed7i b\u00e0i h\u1ecdc h\u00e0ng ng\u00e0y l\u00e0 c\u00e1c n\u1ed9i dung b\u1ea1n c\u1ea7n ho\u00e0n th\u00e0nh trong t\u1eebng ng\u00e0y luy\u1ec7n t\u1eadp. H\u00e3y th\u1ef1c hi\u1ec7n t\u1eebng b\u01b0\u1edbc, t\u1eebng b\u01b0\u1edbc n\u1ed9i dung theo th\u1ee9 t\u1ef1 ch\u00fang t\u00f4i li\u1ec7t k\u00ea.</li>\r\n \t<li>Khi b\u1ea1n ho\u00e0n th\u00e0nh xong n\u1ed9i dung n\u00e0o, h\u00e3y \u0111\u00e1nh d\u1ea5u v\u00e0o \u00f4 \u1edf \u0111\u1ea7u d\u00f2ng n\u1ed9i dung \u0111\u00f3.</li>\r\n \t<li>Khi b\u1ea1n \u0111\u00e1nh d\u1ea5u \u0111\u1ee7 c\u00e1c \u00f4 t\u1ee9c l\u00e0 b\u1ea1n \u0111\u00e3 ho\u00e0n th\u00e0nh vi\u1ec7c h\u1ecdc c\u1ee7a ng\u00e0y h\u00f4m \u0111\u00f3.</li>\r\n</ul>\r\n[/su_list]\r\n\r\n[su_note note_color=\"#f9e5e5\"]N\u1ebfu b\u1ea1n m\u1edbi b\u1eaft \u0111\u1ea7u h\u1ecdc ti\u1ebfng Anh\u00a0ho\u1eb7c b\u1ecb m\u1ea5t g\u1ed1c\u00a0ti\u1ebfng Anh. B\u1ea1n c\u1ea7n luy\u1ec7n nghe, n\u00f3i nhi\u1ec1u h\u01a1n t\u1eeb 2 - 3 l\u1ea7n so v\u1edbi s\u1ed1 l\u1ea7n \u0111\u00e3 \u0111\u01b0a ra.[/su_note]",
      "post_title": "Lesson 07 - A Good Singer",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "open",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "lesson-07-a-good-singer",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2017-08-14 15:00:16",
      "post_modified_gmt": "2017-08-14 08:00:16",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.net/lesson/lesson-07-a-good-singer",
      "menu_order": 7,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    },
    {
      "ID": 4428,
      "post_author": "1",
      "post_date": "2017-08-07 15:32:59",
      "post_date_gmt": "2017-08-07 08:32:59",
      "post_content": "\u0110\u1ec3 b\u1eaft \u0111\u1ea7u h\u1ecdc, b\u1ea1n c\u1ea7n\u00a0hi\u1ec3u r\u00f5\u00a03 k\u1ef9 thu\u1eadt n\u1ec1n t\u1ea3ng \u0111\u1ec3 chinh ph\u1ee5c ti\u1ebfng Anh giao ti\u1ebfp.\r\n\r\n\u0110\u00e2y ch\u00ednh l\u00e0 3 k\u1ef9 thu\u1eadt t\u1ea1o n\u00ean s\u1ef1 kh\u00e1c bi\u1ec7t v\u00e0 hi\u1ec7u qu\u1ea3 c\u1ee7a Eng Breaking.\r\n\r\nH\u00e0ng ch\u1ee5c ngh\u00ecn h\u1ecdc vi\u00ean Eng Breaking \u0111\u00e3 thay \u0111\u1ed5i tr\u00ecnh \u0111\u1ed9 ti\u1ebfng Anh giao ti\u1ebfp v\u00e0 th\u00e0nh c\u00f4ng nh\u1edd vi\u1ec7c \u00e1p d\u1ee5ng th\u00e0nh th\u1ea1o 3 k\u1ef9 thu\u1eadt n\u00e0y.\r\n\r\nT\u00f4i tin, n\u00f3 c\u0169ng th\u1ef1c s\u1ef1 h\u1eefu \u00edch v\u1edbi b\u1ea1n.\r\n\r\nH\u00e3y kh\u00e1m ph\u00e1 ngay!\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>L\u01b0u \u00fd:</strong> \u0111\u1ec3 c\u00f3 th\u1ec3 m\u1edf \u0111\u01b0\u1ee3c\u00a0<strong>Lesson 01 </strong>b\u1ea1n vui l\u00f2ng h\u00e3y click v\u00e0o n\u00fat m\u00e0u \u0111\u1ecf\u00a0<span style=\"color: #ff0000;\"><strong>[MARK COMPLETE]</strong></span> ph\u1ea7n d\u01b0\u1edbi c\u00f9ng c\u1ee7a <strong>Lesson</strong> n\u00e0y.[/su_note]\r\n<h2 style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><span style=\"text-decoration: underline;\">#1 - K\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</span></span></h2>\r\nH\u01b0\u1edbng d\u1eabn n\u00e0y s\u1ebd gi\u00fap b\u1ea1n s\u1eed d\u1ee5ng <strong>k\u1ef9 thu\u1eadt\u00a0</strong><b>Nghe Ng\u1ea5m</b> trong vi\u1ec7c luy\u1ec7n nghe ti\u1ebfng Anh m\u1ed9t c\u00e1ch \u0111\u01a1n gi\u1ea3n v\u00e0 hi\u1ec7u qu\u1ea3.\r\n\r\nV\u00e0 \u0111\u00e2y \u2026\r\n\r\n\u2026 l\u00e0 <b>c\u00e1c b\u01b0\u1edbc c\u1ee5 th\u1ec3</b> c\u1ee7a <b>k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</b>.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>H\u00e3y click n\u00fat <span style=\"color: #1fa850;\">M\u00c0U XANH</span></strong>\u00a0b\u00ean d\u01b0\u1edbi \u0111\u1ec3 xem c\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng <strong>K\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</strong>[/su_note]\r\n\r\n[su_spoiler title=\"<strong>C\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n\r\n<b>B\u01b0\u1edbc 1: L\u00e0m quen v\u1edbi b\u00e0i nghe</b>\r\n\r\nB\u1ea1n h\u00e3y luy\u1ec7n nghe b\u00e0i nghe c\u1ee7a Eng Breaking v\u00e0 ch\u01b0a c\u1ea7n hi\u1ec3u n\u1ed9i dung.\r\n\r\nB\u1ea1n kh\u00f4ng s\u1eed d\u1ee5ng transcript, t\u1eeb \u0111i\u1ec3n v\u00e0 kh\u00f4ng d\u1ecbch sang ti\u1ebfng Vi\u1ec7t khi nghe t\u1ea1i b\u01b0\u1edbc n\u00e0y.\r\n\r\n<b>B\u01b0\u1edbc 2: Hi\u1ec3u n\u1ed9i dung</b>\r\n\r\nB\u1ea1n c\u1ea7n s\u1eed d\u1ee5ng gi\u00e1o tr\u00ecnh khi c\u1ea7n v\u00e0 nghe b\u00e0i luy\u1ec7n \u0111\u1ebfn khi hi\u1ec3u \u0111\u01b0\u1ee3c to\u00e0n b\u1ed9 n\u1ed9i dung.\r\n\r\n<b>B\u01b0\u1edbc 3: Nghe v\u00e0 c\u1ea3m nh\u1eadn</b>\r\n\r\nB\u1ea1n kh\u00f4ng s\u1eed d\u1ee5ng gi\u00e1o tr\u00ecnh, nghe v\u00e0 t\u01b0\u1edfng t\u01b0\u1ee3ng theo c\u00e2u chuy\u1ec7n. H\u00e3y nghe \u0111\u1ebfn khi c\u1ea3m \u0111\u01b0\u1ee3c to\u00e0n b\u1ed9 n\u1ed9i dung b\u00e0i nghe m\u1ed9t c\u00e1ch d\u1ec5 d\u00e0ng.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>H\u00e3y nh\u1edb r\u1eb1ng</strong> b\u1ea1n c\u1ea7n hi\u1ec3u \u0111\u01b0\u1ee3c to\u00e0n b\u1ed9 n\u1ed9i dung hay c\u00e2u chuy\u1ec7n l\u00e0 m\u1ee5c ti\u00eau quan tr\u1ecdng nh\u1ea5t c\u1ee7a k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m.[/su_note]\r\n[/su_spoiler]\r\n<h2 style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><span style=\"text-decoration: underline;\">#2 - K\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</span></span></h2>\r\nB\u1ea1n \u0111\u00e3 bi\u1ebft l\u00e0m th\u1ebf n\u00e0o \u0111\u1ec3 luy\u1ec7n nghe hi\u1ec7u qu\u1ea3 trong th\u1eddi gian ng\u1eafn.\r\n\r\nV\u00e0 gi\u1edd l\u00e0 l\u00fac b\u1ea1n s\u1ebd c\u00f3 \u0111\u01b0\u1ee3c ph\u01b0\u01a1ng ph\u00e1p luy\u1ec7n n\u00f3i ti\u1ebfng Anh chu\u1ea9n v\u00e0 t\u1ef1 nhi\u00ean nh\u01b0 ng\u01b0\u1eddi b\u1ea3n x\u1ee9...\r\n\r\n...ch\u1ec9 v\u1edbi <b>3 b\u01b0\u1edbc </b>\u0111\u01a1n gi\u1ea3n...\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>H\u00e3y click n\u00fat <span style=\"color: #1fa850;\">M\u00c0U XANH</span></strong>\u00a0b\u00ean d\u01b0\u1edbi \u0111\u1ec3 xem c\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng <strong>K\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</strong>[/su_note]\r\n\r\n[su_spoiler title=\"<strong>C\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng k\u1ef9 thu\u1eadt N\u00f3i \u0111u\u1ed5i</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n\r\n<b>B\u01b0\u1edbc 1: Luy\u1ec7n tai nh\u1ea1y ti\u1ebfng Anh</b>\r\n\r\nH\u00e3y nghe c\u00e1c b\u00e0i luy\u1ec7n c\u1ee7a ph\u1ea7n n\u00f3i \u0111u\u1ed5i cho \u0111\u1ebfn khi b\u1ea1n hi\u1ec3u \u0111\u01b0\u1ee3c to\u00e0n b\u1ed9 n\u1ed9i dung m\u00e0 kh\u00f4ng c\u1ea7n gi\u00e1o tr\u00ecnh.\r\n\r\nB\u1ea1n c\u1ea7n nghe v\u00e0 n\u00f3i \u0111u\u1ed5i theo t\u1ed1c \u0111\u1ed9 ch\u1eadm cho \u0111\u1ebfn khi b\u1ea1n b\u1eaft k\u1ecbp \u0111\u01b0\u1ee3c t\u1ed1c \u0111\u1ed9 c\u1ee7a gi\u00e1o vi\u00ean v\u00e0 c\u1ea3m th\u1ea5y t\u1ef1 tin trong gi\u1ecdng n\u00f3i.\r\n\r\n[su_note note_color=\"#f9e5e5\"]\u0110\u00e2y l\u00e0 <strong>ph\u1ea7n n\u00e2ng cao</strong> c\u1ee7a k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m.\u00a0\u0110\u1ed1i v\u1edbi k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m, b\u1ea1n c\u1ea7n hi\u1ec3u n\u1ed9i dung c\u1ee7a b\u00e0i luy\u1ec7n.\u00a0\u0110\u1ed1i v\u1edbi b\u01b0\u1edbc luy\u1ec7n tai nh\u1ea1y, b\u1ea1n c\u1ea7n nghe r\u00f5 t\u1eebng \u00e2m v\u00e0 t\u1eeb trong b\u00e0i luy\u1ec7n.[/su_note]\r\n\r\n<b>B\u01b0\u1edbc 2: Luy\u1ec7n N\u00f3i \u0110u\u1ed5i v\u1edbi t\u1ed1c \u0111\u1ed9 ch\u1eadm - Beginner speed.</b>\r\n\r\nB\u1ea1n c\u1ea7n nghe v\u00e0 n\u00f3i \u0111u\u1ed5i theo t\u1ed1c \u0111\u1ed9 ch\u1eadm cho \u0111\u1ebfn khi b\u1ea1n b\u1eaft k\u1ecbp \u0111\u01b0\u1ee3c t\u1ed1c \u0111\u1ed9 n\u00f3i ch\u1eadm c\u1ee7a gi\u00e1o vi\u00ean v\u00e0 c\u1ea3m th\u1ea5y t\u1ef1 tin trong gi\u1ecdng n\u00f3i.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>M\u1ee5c ti\u00eau quan tr\u1ecdng nh\u1ea5t t\u1ea1i b\u01b0\u1edbc n\u00e0y:</strong> C\u1ea3m nh\u1eadn \u0111\u01b0\u1ee3c r\u00f5 r\u00e0ng c\u00e1ch ph\u00e1t \u00e2m c\u1ee7a ng\u01b0\u1eddi b\u1ea3n x\u1ee9 v\u00e0 n\u00f3i theo gi\u1ed1ng nh\u1ea5t c\u00f3 th\u1ec3.[/su_note]\r\n\r\n<b>B\u01b0\u1edbc 3: Luy\u1ec7n N\u00f3i \u0110u\u1ed5i v\u1edbi t\u1ed1c \u0111\u1ed9 c\u1ee7a ng\u01b0\u1eddi b\u1ea3n x\u1ee9 - Native speed.</b>\r\n\r\nH\u00e3y luy\u1ec7n n\u00f3i theo c\u00e1c b\u00e0i luy\u1ec7n cho \u0111\u1ebfn khi b\u1ea1n b\u1eaft k\u1ecbp v\u1edbi t\u1ed1c \u0111\u1ed9 n\u00f3i t\u1ef1 nhi\u00ean c\u1ee7a gi\u00e1o vi\u00ean v\u00e0 t\u1ef1 tin v\u1edbi c\u00e1ch ph\u00e1t \u00e2m c\u1ee7a m\u00ecnh.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>M\u1ee5c ti\u00eau quan tr\u1ecdng nh\u1ea5t t\u1ea1i b\u01b0\u1edbc n\u00e0y:</strong> C\u1ea3m nh\u1eadn \u0111\u01b0\u1ee3c \u00e2m thanh t\u1ef1 nhi\u00ean c\u1ee7a ng\u01b0\u1eddi b\u1ea3n x\u1ee9 v\u00e0 n\u00f3i theo gi\u1ed1ng nh\u1ea5t c\u00f3 th\u1ec3. B\u1ea1n c\u1ea7n h\u1ea1n ch\u1ebf s\u1eed d\u1ee5ng transcript v\u00e0 t\u1eadp trung v\u00e0o nghe n\u00f3i.[/su_note]\r\n\r\n[/su_spoiler]\r\n\r\n[su_spoiler title=\"<strong>Tham kh\u1ea3o video th\u1ef1c h\u00e0nh k\u1ef9 thu\u1eadt n\u00f3i \u0111u\u1ed5i</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n<b style=\"font-size: 1rem;\">N\u00f3i \u0111u\u1ed5i t\u1ed1c \u0111\u1ed9 Beginner Speed</b>\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/UtDwSA4pbGg?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/CQNNE-jmPuo?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<div></div>\r\n&nbsp;\r\n\r\n<b>N\u00f3i \u0111u\u1ed5i t\u1ed1c \u0111\u1ed9 Native Speed</b>\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/cPGyRnE54xU?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/VjxkeIxqZys?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n[/su_spoiler]\r\n<h2 style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><span style=\"text-decoration: underline;\">#3 - K\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</span></span></h2>\r\nB\u1ea1n \u0111\u00e3 c\u00f3 th\u1ec3 nghe hi\u1ec3u ti\u1ebfng Anh \u0111\u01a1n gi\u1ea3n h\u01a1n v\u1edbi <strong>k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m</strong>.\r\n\r\nB\u1ea1n \u0111\u00e3 c\u00f3 th\u1ec3 n\u00f3i ti\u1ebfng anh d\u1ec5 d\u00e0ng h\u01a1n v\u1edbi <strong>k\u1ef9 thu\u1eadt N\u00f3i \u0110u\u1ed5i</strong>.\r\n\r\nV\u00e0 b\u00e2y gi\u1edd, trong h\u01b0\u1edbng d\u1eabn n\u00e0y v\u1edbi k\u1ef9 thu\u1eadt <strong>Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</strong>\u2026\r\n\r\n\u2026 b\u1ea1n s\u1ebd \u0111\u01b0\u1ee3c k\u1ebft h\u1ee3p hi\u1ec7u qu\u1ea3 c\u1ea3 nghe v\u00e0 n\u00f3i \u0111\u1ec3 c\u00f3 th\u1ec3 giao ti\u1ebfp tr\u00f4i ch\u1ea3y nh\u01b0 ng\u01b0\u1eddi b\u1ea3n x\u1ee9.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<strong>H\u00e3y click n\u00fat <span style=\"color: #1fa850;\">M\u00c0U XANH</span></strong>\u00a0b\u00ean d\u01b0\u1edbi \u0111\u1ec3 xem c\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng <strong>K\u1ef9 thu\u1eadt Ph\u1ea3n X\u1ea1 \u0110a Chi\u1ec1u</strong>[/su_note]\r\n\r\n[su_spoiler title=\"<strong>C\u00e1c b\u01b0\u1edbc \u00e1p d\u1ee5ng k\u1ef9 thu\u1eadt Ph\u1ea3n x\u1ea1 \u0110a chi\u1ec1u</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n\r\n<b>B\u01b0\u1edbc 1: Hi\u1ec3u n\u1ed9i dung b\u00e0i luy\u1ec7n t\u1eadp.</b>\r\n\r\nH\u00e3y s\u1eed d\u1ee5ng k\u1ef9 thu\u1eadt Nghe Ng\u1ea5m t\u1ea1i b\u01b0\u1edbc n\u00e0y \u0111\u1ec3 hi\u1ec3u to\u00e0n b\u1ed9 b\u00e0i luy\u1ec7n t\u1eadp.\r\n\r\n<b>B\u01b0\u1edbc 2: Luy\u1ec7n tr\u1ea3 l\u1eddi ng\u1eafn</b>\r\n\r\nB\u1ea1n c\u1ea7n \u0111\u01b0a ra c\u00e2u tr\u1ea3 l\u1eddi ng\u1eafn (t\u1eeb 1-2 t\u1eeb) cho c\u00e1c c\u00e2u h\u1ecfi nhanh nh\u1ea5t c\u00f3 th\u1ec3.\r\nV\u00ed d\u1ee5: Yes.\r\n\r\n<b>B\u01b0\u1edbc 3: Hi\u1ec3u to\u00e0n b\u1ed9 c\u00e2u h\u1ecfi v\u00e0 c\u00e2u tr\u1ea3 l\u1eddi m\u1eabu</b>\r\n\r\nB\u1ea1n h\u00e3y nghe l\u1ea1i v\u00e0 theo d\u00f5i transcript t\u1eeb 2-3 l\u1ea7n.\r\n\r\nB\u1ea1n c\u1ea7n hi\u1ec3u to\u00e0n b\u1ed9 c\u00e2u h\u1ecfi v\u00e0 c\u00e2u tr\u1ea3 l\u1eddi m\u1eabu \u0111\u00e3 \u0111\u01b0a ra.\r\n\r\n<b>B\u01b0\u1edbc 4: Luy\u1ec7n nghe n\u00f3i ph\u1ea3n x\u1ea1 ti\u1ebfng Anh</b>\r\n\r\nB\u1ea1n c\u1ea7n luy\u1ec7n tr\u1ea3 l\u1eddi cho \u0111\u1ebfn khi tr\u1ea3 l\u1eddi \u0111\u1ea7y \u0111\u1ee7 c\u00e1c c\u00e2u h\u1ecfi ngay l\u1eadp t\u1ee9c v\u00e0 d\u1ec5 d\u00e0ng.\r\n\r\nV\u00ed d\u1ee5: Yes. She is American.\r\n\r\n[su_note note_color=\"#f9e5e5\"]<b>M\u1ee5c ti\u00eau quan tr\u1ecdng nh\u1ea5t </b>c\u1ee7a k\u1ef9 thu\u1eadt n\u00e0y l\u00e0 b\u1ea1n c\u1ea7n \u0111\u01b0a ra c\u00e2u tr\u1ea3 l\u1eddi nhanh nh\u1ea5t c\u00f3 th\u1ec3[/su_note]\r\n\r\n[/su_spoiler]\r\n\r\n[su_spoiler title=\"<strong>Tham kh\u1ea3o video th\u1ef1c h\u00e0nh k\u1ef9 thu\u1eadt ph\u1ea3n x\u1ea1 \u0111a chi\u1ec1u</strong>\" style=\"glass-green\" icon=\"plus-circle\"]\r\n<div style=\"width: 100%; margin: 0 auto;\"><iframe src=\"https://www.youtube.com/embed/PP_WQRBKUrM?rel=0&amp;showinfo=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n[/su_spoiler]\r\n\r\nB\u1ea1n \u0111\u00e3 hi\u1ec3u r\u00f5 3 k\u1ef9 thu\u1eadt quan tr\u1ecdng nh\u1ea5t \u0111\u1ec3 luy\u1ec7n giao ti\u1ebfp ti\u1ebfng Anh n\u00e0y ch\u01b0a?\r\n\r\nN\u1ebfu \u0111\u00e3 hi\u1ec3u r\u00f5, h\u00e3y click v\u00e0o n\u00fat m\u00e0u \u0111\u1ecf\u00a0<span style=\"color: #ff0000;\"><strong>[MARK COMPLETE]</strong></span>\u00a0d\u01b0\u1edbi \u0111\u00e2y \u0111\u1ec3 k\u1ebft th\u00fac h\u01b0\u1edbng d\u1eabn quan tr\u1ecdng n\u00e0y v\u00e0 b\u1eaft \u0111\u1ea7u th\u1ef1c h\u00e0nh b\u00e0i h\u1ecdc \u0111\u1ea7u ti\u00ean.",
      "post_title": "Lesson 00 - Getting Started",
      "post_excerpt": "",
      "post_status": "publish",
      "comment_status": "closed",
      "ping_status": "closed",
      "post_password": "",
      "post_name": "getting-started-3-ky-thuat-nen-tang-chinh-phuc-tieng-anh",
      "to_ping": "",
      "pinged": "",
      "post_modified": "2018-09-13 14:10:28",
      "post_modified_gmt": "2018-09-13 07:10:28",
      "post_content_filtered": "",
      "post_parent": 0,
      "guid": "https://learn.x3english.com/?post_type=sfwd-lessons&#038;p=4428",
      "menu_order": 0,
      "post_type": "sfwd-lessons",
      "post_mime_type": "",
      "comment_count": "0",
      "filter": "raw"
    }
  ]';
	
	$result = json_decode($result);
	$response = new WP_REST_Response($result);
    $response->set_status(200);
    return $response;
}




function get_list_category(WP_REST_Request $request)
{
    global $wpdb;
    $list_category = array();
    $results       = $wpdb->get_results("SELECT term_id FROM wp_term_taxonomy WHERE taxonomy LIKE 'category' AND term_id != 1", OBJECT);
    foreach ($results as $key => $value) {
        
        array_push($list_category, get_term($value->term_id));
        
    }
    $response = new WP_REST_Response($list_category);
    $response->set_status(200);
    return $response;
}
function get_post_by_categoryid(WP_REST_Request $request)
{
    global $wpdb;
    $category_id   = $request->get_param('category_id');
    $args = array(
	    'posts_per_page'   => -1,
	    'category'         => $category_id,
	    'orderby'          => 'date',
	    'order'            => 'ASC',
	    'post_type'        => 'post'
	);
	$posts = get_posts($args);
    //$results       = $wpdb->get_row("SELECT * FROM wp_terms WHERE term_id='$category_id'");

    $response = new WP_REST_Response($posts);
    $response->set_status(200);
    return $response;
}

function get_list_post(WP_REST_Request $request)
{
    global $wpdb;
    $results  = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_type = 'post' AND post_status = 'publish'", OBJECT);
    $response = new WP_REST_Response($results);
    $response->set_status(200);
    return $response;
}

function get_post_by_id(WP_REST_Request $request)
{
    
    $post_id  = $request->get_param('post_id');
    $get_post = get_post($post_id);
    $response = new WP_REST_Response($get_post);
    $response->set_status(200);
    return $response;
}

function get_huyen(WP_REST_Request $request)
{
  $tinh = $request->get_param('tinh');

  
    global $wpdb;
    $arrayName = array();
    $results  = $wpdb->get_results("SELECT * FROM abc WHERE Province = '$tinh'", OBJECT);
    foreach ($results as $key => $value) {
      if ( !in_array($value->Amphoe, $arrayName)){
        $arrayName[$key] = $value->Amphoe;
      }
    }
    $response = new WP_REST_Response($arrayName);
    $response->set_status(200);
    return $response;
  }

function get_xa(WP_REST_Request $request)
{
  $huyen = $request->get_param('huyen');

  
    global $wpdb;
    $arrayName = array();
    $results  = $wpdb->get_results("SELECT * FROM abc WHERE Amphoe = '$huyen'", OBJECT);
    foreach ($results as $key => $value) {
      if ( !in_array($value->Address, $arrayName)){
        $arrayName[$key] = $value->Address;
      }
    }
    $response = new WP_REST_Response($arrayName);
    $response->set_status(200);
    return $response;
  }

function get_zipcode(WP_REST_Request $request)
{
   $xa = $request->get_param('xa');

  
    global $wpdb;
    $arrayName = array();
    $results  = $wpdb->get_results("SELECT * FROM abc WHERE Address = '$xa'", OBJECT);
    foreach ($results as $key => $value) {
      if ( !in_array($value->Zipcode, $arrayName)){
        $arrayName[$key] = $value->Zipcode;
      }
    }
    $response = new WP_REST_Response($arrayName);
    $response->set_status(200);
    return $response;
}
?>
