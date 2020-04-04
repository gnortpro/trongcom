<?php
/* Template Name: Test Ajax Form */
?>


<link rel="stylesheet" href="https://th.engbreaking.com/wp-content/themes/Newspaper-child/css/bootstrap-trongcustom.css">
<style>
   p.title span {
   color: #ff0000;
   font-weight: 600;
   }
   button.btn.btn-primary.dat_hang_btn_test {
   font-weight: bold;
   padding: 1em;
   color: #FFF;
   background-color: #cd282f;
   text-align: center;
   font-size: 25px;
   line-height: 21px;
   text-decoration: none;
   width: 100%;
   border: none;
   cursor: pointer;
   margin-top: 20px;
   }
   .in.darkSec {
   background: #EAEAEA;
   padding: 20px 35px;
   }
   .bootstrap-trongcustom {
   font-family: Arial, sans-serif !important;
   }
</style>
<div class="bootstrap-trongcustom">
   <div class="container">
      <div class="row">
         <p class="title" style="margin-bottom:10px">นักเรียนมากกว่า <span>67.200</span> คนเป็นผู้เริ่มต้นที่ไม่มีพื้นฐานหรือไม่มีเวลา.</p>
         <form autocomplete="on" id="dat_hang_test" action="/" method="POST" style="width: 100%">
            <div class="form-group">
               <input autocomplete="on" type="text" class="form-control" id="hoten" placeholder="กรุณากรอกชื่อของคุณ" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </div>
            <div class="form-group">
               <input autocomplete="on" type="number" class="form-control" id="phone" placeholder="หมายเลขโทรศัพท์" required="">
            </div>
            <div class="form-group">
               <input autocomplete="on" type="email" class="form-control" id="email" placeholder="อีเมล" required="">
            </div>
            <div class="row">
               <div class="col-12 col-md-4 col-lg-4">
                  <div class="form-group">
                     <label for="zipcode">Tỉnh</label>
                     <select autocomplete="on" id="tinhtp" class="form-control" required="">
                        <option value="" selected="selected" class="gf_placeholder">Chọn tỉnh</option>
                        <option value="Bangkok">Bangkok</option>
                        <option value="Nonthaburi">Nonthaburi</option>
                        <option value="Pathum Thani">Pathum Thani</option>
                        <option value="Samut Prakarn">Samut Prakarn</option>
                        <option value="Amnat Charoen">Amnat Charoen</option>
                        <option value="Ang Thong">Ang Thong</option>
                        <option value="Ayuttaya">Ayuttaya</option>
                        <option value="Bueng Kan">Bueng Kan</option>
                        <option value="Buri Ram">Buri Ram</option>
                        <option value="Chachoengsao">Chachoengsao</option>
                        <option value="Chai Nat">Chai Nat</option>
                        <option value="Chaiyaphum">Chaiyaphum</option>
                        <option value="Chanthaburi">Chanthaburi</option>
                        <option value="Chiang Mai">Chiang Mai</option>
                        <option value="Chiang Rai">Chiang Rai</option>
                        <option value="Chonburi">Chonburi</option>
                        <option value="Chumphon">Chumphon</option>
                        <option value="Kalasin">Kalasin</option>
                        <option value="Kamphaeng Phet">Kamphaeng Phet</option>
                        <option value="Kanchanaburi">Kanchanaburi</option>
                        <option value="Khon Kaen">Khon Kaen</option>
                        <option value="Krabi">Krabi</option>
                        <option value="Lampang">Lampang</option>
                        <option value="Lamphun">Lamphun</option>
                        <option value="Loei">Loei</option>
                        <option value="Lop Buri">Lop Buri</option>
                        <option value="Maha Sarakham">Maha Sarakham</option>
                        <option value="Mukdahan">Mukdahan</option>
                        <option value="Nakhon Nayok">Nakhon Nayok</option>
                        <option value="Nakhon Phanom">Nakhon Phanom</option>
                        <option value="Nakhon Ratchasima">Nakhon Ratchasima</option>
                        <option value="Nakhon Sawan">Nakhon Sawan</option>
                        <option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option>
                        <option value="Nakornpathom">Nakornpathom</option>
                        <option value="Nan">Nan</option>
                        <option value="Nong Bua Lam Phu">Nong Bua Lam Phu</option>
                        <option value="Nong Khai">Nong Khai</option>
                        <option value="Phangnga">Phangnga</option>
                        <option value="Phatthalung">Phatthalung</option>
                        <option value="Phayao">Phayao</option>
                        <option value="Phetchabun">Phetchabun</option>
                        <option value="Phetchaburi">Phetchaburi</option>
                        <option value="Phichit">Phichit</option>
                        <option value="Phitsanulok">Phitsanulok</option>
                        <option value="Phrae">Phrae</option>
                        <option value="Phuket">Phuket</option>
                        <option value="Prachin Buri">Prachin Buri</option>
                        <option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option>
                        <option value="Ranong">Ranong</option>
                        <option value="Ratchaburi">Ratchaburi</option>
                        <option value="Rayong">Rayong</option>
                        <option value="Roi Et">Roi Et</option>
                        <option value="Sa Kaeo">Sa Kaeo</option>
                        <option value="Sakon Nakhon">Sakon Nakhon</option>
                        <option value="Samut Sakhon">Samut Sakhon</option>
                        <option value="Samut Songkhram">Samut Songkhram</option>
                        <option value="Saraburi">Saraburi</option>
                        <option value="Satun">Satun</option>
                        <option value="Si Sa Ket">Si Sa Ket</option>
                        <option value="Sing Buri">Sing Buri</option>
                        <option value="Songkhla">Songkhla</option>
                        <option value="Sukhothai">Sukhothai</option>
                        <option value="Suphan Buri">Suphan Buri</option>
                        <option value="Surat Thani">Surat Thani</option>
                        <option value="Surin">Surin</option>
                        <option value="Tak">Tak</option>
                        <option value="Trang">Trang</option>
                        <option value="Trat">Trat</option>
                        <option value="Ubon Ratchathani">Ubon Ratchathani</option>
                        <option value="Udon Thani">Udon Thani</option>
                        <option value="Uthai Thani">Uthai Thani</option>
                        <option value="Uttaradit">Uttaradit</option>
                        <option value="Yasothon">Yasothon</option>
                        <option value="Mae Hong Son">Mae Hong Son</option>
                        <option value="Narathiwat">Narathiwat</option>
                        <option value="Pattani">Pattani</option>
                        <option value="Yala">Yala</option>
                     </select>
                  </div>
               </div>
               <div class="col-12 col-md-3 col-lg-3">
                  <div class="form-group">
                     <label for="zipcode">Huyện</label>
                     <select autocomplete="on" id="huyen" class="form-control" required="">
                        <option value="" selected="selected" class="gf_placeholder">Huyện</option>
                     </select>
                  </div>
               </div>
               <div class="col-12 col-md-3 col-lg-3">
                  <div class="form-group">
                     <label for="zipcode">Xã</label>
                     <select autocomplete="on" id="xa" class="form-control" required="">
                        <option value="" selected="selected" class="gf_placeholder">Xã</option>
                     </select>
                  </div>
               </div>
                <div class="col-12 col-md-2 col-lg-2">
                  <div class="form-group">
                     <label for="zipcode">Zip Code</label>
                     <select autocomplete="on" id="zipcode" class="form-control" required="">
                        <option value="" selected="selected" class="gf_placeholder">Zip Code</option>
                     </select>
                      <!-- <input type="number" id="zipcode" class="form-control" required> -->
                  </div>
               </div>
            </div>
            <div class="form-group">
               <select autocomplete="on" id="chonhinhthucthanhtoan" class="form-control" required="">
                  <option value="" selected="selected" class="gf_placeholder">ช่องทางการชำระเงิน</option>
                  <option value="1">เก็บเงินปลายทาง (COD)</option>
                  <option value="2">ชำระเงินผ่านบัตร (โอนผ่านธนาคาร)</option>
               </select>
            </div>
           
            <div class="form-group">
               <input autocomplete="on" type="text" class="form-control" id="address" placeholder="ที่อยู่สำหรับจัดส่ง" required="">
            </div>
            <div class="thrv_wrapper thrv_content_container_shortcode tve-droppable" id="wrap-info-donhang1">
               <div class="tve_clear"></div>
               <div class="tve_content_inner tve_empty_dropzone tve_left" style="min-width: 50px; min-height: 2em; width: 679px;">
                  <div class="thrv_wrapper thrv_page_section tve-droppable" data-tve-style="1" id="uudai1">
                     <div class="out" style="background-color: #EAEAEA">
                        <div class="in darkSec">
                           <div class="cck tve_clearfix tve_empty_dropzone">
                              <div class="thrv_wrapper thrv-columns tve-droppable">
                                 <div class="tcb-flex-row tcb--cols--2 tcb-flex-center" style="margin-bottom: 0 !important; padding-bottom: 0px !important; padding-left: 1px !important; margin-left: 0px !important;">
                                    <div class="tcb-flex-col tve_empty_dropzone ui-resizable">
                                       <div class="tcb-col">
                                          <p style="margin-bottom: 0px !important; margin-top: 0px !important;">ราคาปกติ: <span class="strikethrough_text">3040 บาท</span></p>
                                       </div>
                                       <div class="ui-resizable-handle ui-resizable-e" style="z-index: 100; display: block; padding: 0px; margin-left: -3px;"></div>
                                    </div>
                                    <div class="tcb-flex-col tve_empty_dropzone ui-resizable">
                                       <div class="tcb-col">
                                          <p class="tve_p_right" style="font-weight:600;margin-top: 0px !important; margin-bottom: 0px !important;"><span class="">ลดราคา 51%: 1490 บาท</span></p>
                                       </div>
                                       <div class="ui-resizable-handle ui-resizable-e" style="z-index: 100; display: block; padding: 0px; margin-left: -3px;"></div>
                                    </div>
                                 </div>
                              </div>
                              <!--div class="thrv_wrapper" style="margin-top: 0px !important; margin-bottom: 0px !important;">
                                 <hr class="tve_sep tve_sep1">
                                 </div>
                                 <div class="thrv_wrapper thrv-columns"><div class="tcb-flex-row tcb--cols--2 tcb-flex-center" style="margin-bottom: 0px !important; padding-bottom: 0px !important; margin-top: 10px !important; margin-left: 0px !important;">
                                 <div class="tcb-flex-col tve_empty_dropzone">
                                    <div class="tcb-col"><p style="margin-bottom: 0px !important; margin-top: 0px !important; line-height: 24px;" data-unit="px"><span class="bold_text">Ưu Đãi Đặc Biệt</span></p></div>
                                 </div>
                                 <div class="tcb-flex-col tve_empty_dropzone">
                                    <div class="tcb-col"><p class="tve_p_right" style="margin-top: 0px !important; margin-bottom: 0px !important; line-height: 24px;" data-unit="px"><span class="bold_text">Chỉ Còn: 490.000 VNĐ <font color="#e60e0e">(Giảm 51%)</font></span><span class="strikethrough_text underline_text"><span class="bold_text"></span></span></p></div>
                                 </div>
                                 </div></div-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tve_clear"></div>
            </div>
            <!-- test -->
            <p id="keugoi" style="text-align:center;color:red;font-weight:600;margin-top:13px;margin-bottom:13px;">
               อย่ารอช้า! สินค้าและของขวัญเหลือเพียง <span id="number_rand">3</span> ชุดเท่านั้น!
            </p>
            <button style="margin-top:0;border-radius: 8px;overflow: hidden;box-shadow: rgba(0, 0, 0, 0.4) 0px 8px 12px 0px;" type="submit" class="btn btn-primary dat_hang_btn_test">สั่งซื้อเลย</button>
         </form>
      </div>
   </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
   var min=2; 
   var max=3;  
   var random = Math.floor(Math.random() * (max - min + 1) + min);
   jQuery("#number_rand").text(random);

   jQuery(document).ready(function($){
   		$("#tinhtp").change(function(){
   			var selectedTinh = $(this).children("option:selected").val();
   			$.get( "https://trongggg.com/wp-json/thailan/get_huyen?tinh="+selectedTinh, function( data ) {
   				 var items_huyen = [];
			       $.each( data, function( key, val ) {
				       items_huyen.push( "<option value='" + val + "'>" + val + "</option>" );
				    });
			       $('#huyen').html(items_huyen);

			       $.get( "https://trongggg.com/wp-json/thailan/get_xa?huyen="+data[0], function( data1 ) {
						var items_xa = [];
							$.each( data1, function( key, val1 ) {
							   items_xa.push( "<option value='" + val1 + "'>" + val1 + "</option>" );
							});
						$('#xa').html(items_xa);

						$.get( "https://trongggg.com/wp-json/thailan/get_zipcode?xa="+data1[0], function( data2 ) {
                     var items_zipcode = [];
                     $.each( data2, function( key2, val2 ) {
                        items_zipcode.push( "<option value='" + val2 + "'>" + val2 + "</option>" );
                     });
                  $('#zipcode').html(items_zipcode);
                  });
		   			});

			       
			  });
   		});


   		$("#huyen").change(function(){
   			var selectedHuyen = $(this).children("option:selected").val();
   			$.get( "https://trongggg.com/wp-json/thailan/get_xa?huyen="+selectedHuyen, function( data ) {
				var items_xa = [];
					$.each( data, function( key, val ) {
					   items_xa.push( "<option value='" + val + "'>" + val + "</option>" );
					});
				$('#xa').html(items_xa);

				$.get( "https://trongggg.com/wp-json/thailan/get_zipcode?xa="+data[0], function( data1 ) {
               var items_zipcode = [];
               $.each( data1, function( key1, val1 ) {
                  items_zipcode.push( "<option value='" + val1 + "'>" + val1 + "</option>" );
               });
            $('#zipcode').html(items_zipcode);
            });
   			});
   		});

   		$("#xa").change(function(){
   			var selectedXa = $(this).children("option:selected").val();
   			$.get( "https://trongggg.com/wp-json/thailan/get_zipcode?xa="+selectedXa, function( data ) {
               var items_zipcode = [];
               $.each( data, function( key, val ) {
                  items_zipcode.push( "<option value='" + val + "'>" + val + "</option>" );
               });
				$('#zipcode').html(items_zipcode);
   			});
   		});

   		
   })
</script>