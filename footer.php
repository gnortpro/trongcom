


<footer class="footer section">
  <div class="container footer-widget">
    <div class="row">
      <div class="col col-sm-3">
        <h6 class="typo-light hd">Sản phẩm dịch vụ</h6>
        <ul class="list-1">
          <li><a href="/thiet-ke-web/">Thiết kế website</a></li>
          <li><a href="/domain/">Dịch vụ tên miền</a></li>
          <li><a href="/hosting/">Dịch vụ hosting/vps</a></li>
          <li><a href="/ssl/">Chứng chỉ bảo mật SSL</a></li>
        </ul>
      </div>
      <div class="col col-sm-3">
        <h6 class="typo-light hd">Thông tin hữu ích</h6>
        <ul class="list-1">
          <li><a href="/huong-dan-thanh-toan/">Hướng dẫn thanh toán</a></li>
          <li><a href="/#">Hướng dẫn sử dụng</a></li>
          <li><a href="/#">Câu hỏi thường gặp</a></li>
          <li><a href="/#">Hướng dẫn gửi ticket hỗ trợ</a></li>
        </ul>
      </div>
      <div class="col col-sm-3">
        <h6 class="typo-light hd">Thông tin chính sách</h6>
        <ul class="list-1">
          <li><a href="/#">Quy định sử dụng</a></li>
          <li><a href="/#">Chính sách bảo mật</a></li>
          <li><a href="/#">Chính sách hoàn tiền</a></li>
          <li><a href="/#">Chính sách riêng tư</a></li>
        </ul>
      </div>
      <div class="col col-sm-3">
        <div class="company-info">
          <a href="/"><img src="" alt="" class="footer-logo img-responsive"></a>
          <p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Hanoi University</p>
          <p class="address"><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại: ...</p>
          <p class="address"><i class="fa fa-phone" aria-hidden="true"></i> Hotline: ...</p>
          <p class="address"><i class="fa fa-envelope" aria-hidden="true"></i> Email: nvtrong.hanu@gmail.com</p>
        </div>
      </div>
    </div><!-- /.row -->
  </div>
  <div class="copyright">Copyright © 2011-2018. Made by NVTrong</div>
</footer>
	<div class="wrap-menu-support">
        <nav class="menu-support show">
          <input type="checkbox" class="menu-open" name="menu-open" id="check-support">
          <label class="menu-open-button" for="check-support" title="Gọi cho chúng tôi"></label>
          <a href="javascripts:void(0)" class="contact-menu-item zalo-item"><span>Zalo</span></a>
          <a href="skype:vanlam.vlsc?chat" class="contact-menu-item skype-item"><span>Skype</span></a>
          <a href="javascripts:void(0)" class="contact-menu-item viber-item"><span>Viber</span></a>
          <div class="circle-shadow selected"></div>  
          <div class="panel-support panel-zalo">
              <span>Dùng Zalo trên điện thoại để quét mã QR</span>
              <div class="wrap-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/zaloqr.jpg" class="qr">
                  <div class="slider-note zalo" data-slider="/zalo-slider.gif">
                      <img class="img-slider">
                  </div>
              </div> 
              <span>Hoặc thêm bằng SĐT<br><b>0983014454</b></span>
          </div>
          <div class="panel-support panel-viber">
              <span>Dùng Viber trên điện thoại để quét mã QR</span>
              <div class="wrap-img">
                <img src="/uploads/viber-mua-cay-canh.jpg" class="qr">
                  <div class="slider-note" data-slider="/viber-slider.gif">
                      <img class="img-slider">
                  </div>
              </div>  
              <span>Hoặc thêm bằng SĐT<br><b>0983014454</b></span>
          </div>    
          <a href="javascripts:void(0)" class="close-panel-support" title="Đóng"></a>  
        </nav>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
                    $('.menu-support').addClass("show");
                } else {
                    $('.menu-support').removeClass("show");
                }
            });

            $('.wrap-menu-support input:checkbox').change(function () {
                if ($(this).is(':checked')) {
                    $('.circle-shadow').addClass('selected');
                    $('.panel-support').removeClass("show");
                }
                else
                    $('.circle-shadow').removeClass('selected')
            });

            // Click call Zalo
            $(".menu-support .zalo-item").click(function (event) {
                $("#check-support").prop('checked', false);
                $('.circle-shadow').removeClass('selected');
                $('.panel-zalo').addClass("show");
                $('.menu-support').addClass("panel-is-open");
            });
            // Click call Skype
            $(".menu-support .skype-item").click(function (event) {
                $("#check-support").prop('checked', false);
                $('.circle-shadow').removeClass('selected');
            });
            // Click call Viber
            $(".menu-support .viber-item").click(function (event) {
                $("#check-support").prop('checked', false);
                $('.circle-shadow').removeClass('selected');
                $('.panel-viber').addClass("show");
                $('.menu-support').addClass("panel-is-open");
            });
            // Close Panel Zalo, Viber
            $(".menu-support .close-panel-support").click(function (event) {
                $('.panel-support').removeClass("show");
                $('.menu-support').removeClass("panel-is-open");
            });
            // Load image Slider
            $(".menu-support .wrap-img").hover(function () {
                var mainImage = $(".slider-note", this).attr("data-slider"); //Find Image Name
                $(".img-slider", this).attr({ src: mainImage });
                return false;
            });
            console.log("\n %c Trongggg.com %c Learning Wordpress Together - Copyright by https://trongggg.com \n\n","color: #FFFFFF; background: red; padding:5px 0;","color: #FFFFFF; background: #adabab; padding:5px 0;");

        });
    </script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery-3.3.1.slim.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/custom.js"></script>
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=183454789121960&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<?php wp_footer(); ?>
      <!-- Hitsteps TRACKING CODE - Manual 2018-12-10 - DO NOT CHANGE -->
  <script type="text/javascript">(function(){var hstc=document.createElement('script'); hstc.src='https://log.hitsteps.com/track.php?code=f0f6dc5fae0142622225bf6cb7cc950e';hstc.async=true;var htssc = document.getElementsByTagName('script')[0];htssc.parentNode.insertBefore(hstc, htssc);})();
  </script><noscript><a href="http://www.hitsteps.com/"><img src="//log.hitsteps.com/track.php?mode=img&amp;code=f0f6dc5fae0142622225bf6cb7cc950e" alt="website tracking" width="1" height="1" />Realtime website statistics</a></noscript>
  <!-- Hitsteps TRACKING CODE - DO NOT CHANGE -->
</body>
</html>
		<?php wp_footer(); ?>

	</body>
</html>