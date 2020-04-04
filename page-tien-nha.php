<?php
   /* Template Name: Auto Tien Nha */
   get_header();
   ?>
<?php 
   global $wpdb;
   $table1 = '302_send_mail';
   if(isset($_POST['submitUser'])) {
   	$hoten = $_POST['hoten'];
   	$email = $_POST['email'];
   	$phong = $_POST['phong'];
   	$data = array('hoten' => $hoten , 'email' => $email, 'phong' => $phong);
   	$format = array('%s','%s', '%d');
   	$wpdb->insert($table1,$data,$format);
   }
   $table2 = '302_tien';
   $getUser = $wpdb->get_results( "SELECT * FROM 302_send_mail" );
   $getData = $wpdb->get_results( "SELECT * FROM 302_tien" );
   $sothanhvien = count($getUser) > 0 ? count($getUser) : 8;
   if(isset($_POST['submitTien'])) {
   	$thang = $_POST['thang'];
   	$dien = $_POST['dien'];
   	$nuoc = $_POST['nuoc'];
   	$mang = $_POST['mang'];
   	$guixe = $_POST['guixe'];
   	$nha = $_POST['nha'];
   	$dichvu = $_POST['dichvu'];
   	$khac = $_POST['khac'];
   	$note = $_POST['note'];
   	$data = array(
   		'thang' => $thang, 
   		'sothanhvien' => $sothanhvien, 
   		'dien' => $dien/$sothanhvien, 
   		'nuoc' => $nuoc/$sothanhvien, 
   		'mang' => $mang/$sothanhvien, 
   		'nha' => $nha/$sothanhvien, 
   		'dichvu' => $dichvu/$sothanhvien, 
   		'guixe' => $guixe/$sothanhvien, 
   		'khac' => $khac, 
   		'note' => $note, 
   	);
   	$format = array('%d','%d','%d','%d','%d','%d','%d','%s');
   	$wpdb->insert($table2,$data,$format);
   }
   if(isset($_POST['deleteuser'])) {
   	$emailDelete = $_POST['mail'];
   	$wpdb->delete( $table1, array( 'email' => $emailDelete ) );
   }
   // if(isset($_POST['submitTienPhong'])) {
   // 	$phong1 = $_POST['phong1'];
   // 	$phong2 = $_POST['phong2'];
   // 	$phong3 = $_POST['phong3'];
   // 	$wpdb->update('302_send_mail', array('giaphong' => $phong1), array('phong'=>$id))
   // }
   
   function numbertoVND($number) {
   	$res = '';
   	$len = strlen($number);
   	$counter = 3;
   	while ($len - $counter >= 0) {
   		$con = substr($number, $len - $counter, 3);
   		$res = '.'.$con.$res;
   		$counter += 3;
   	}
   	$con = substr($number, 0, 3 - ($counter - $len));
   	$res = $con.$res;
   	if (substr($res, 0, 1) == '.') {
   		$res = substr($res, 1, $len +1);
   	}
   	return $res.' VND';
   }
   function sendMail($mail, $hoten, $tiennha = 0, $note = '') {
   	global $wpdb;
   	$month = date('m');
   	$getRowbyMonth = $wpdb->get_row( "SELECT * FROM 302_tien WHERE thang = $month" );
   	$to = $mail;
   	$subject = '302 - Tiền nhà tháng '.$month;
   	$body = '<ul>'.
   	'<li>Tiền nhà: '.numbertoVND($tiennha).'</li>'
   	.'<li>Tiền điện: '.numbertoVND($getRowbyMonth->dien).'</li>'
   	.'<li>Tiền nước: '.numbertoVND($getRowbyMonth->nuoc).'</li>'
   	.'<li>Tiền mạng: '.numbertoVND($getRowbyMonth->mang).'</li>'
   	.'<li>Tiền gửi xe: '.numbertoVND($getRowbyMonth->guixe).'</li>'
   	.'<li>Tiền dịch vụ: '.numbertoVND($getRowbyMonth->dichvu).'</li>'
   	.'<li>Tiền khác: '.numbertoVND($getRowbyMonth->khac).'</li>'
   	.'<li>Ghi chú 1: '.$getRowbyMonth->note.'</li>'
   	.'<li>Ghi chú 2: '.$note.'</li>'
   	.'</ul>';
   	$headers = array('Content-Type: text/html; charset=UTF-8');
   	return wp_mail( $to, $subject, $body, $headers );	
   }
   if(isset($_POST['sendmail'])) {
   	$resultMail = sendMail($_POST['mail'], $_POST['hoten'], $_POST['tiennha'], $_POST['note']);	
   }
   if(isset($_POST['sendmailall'])) {
   	$resultArr = [];
   	if (count($getUser) > 0) {
   		foreach ($getUser as $value) {
   			array_push($resultArr, sendMail($value->email, $value->hoten));	
   		}
   	}
   	print_r($resultArr);
   }
   
   foreach ($getUser as $value) {
   	
   	
   }
   
   
   ?>
<style>
   .mb-6 {
   margin-bottom: 6em;
   }
   .mt-6 {
   margin-top: 6em;
   }
   .tien-nha .bootstrap-trongcustom form {
   box-shadow: none !important;
   }
   .tien-nha .bootstrap-trongcustom table {
   width: 100%;
   }
</style>
<link rel="stylesheet" href="https://th.engbreaking.com/wp-content/themes/Newspaper-child/css/bootstrap-trongcustom.css">
<!DOCTYPE html>
<html>
   <head>
      <title>Send Mail</title>
   </head>
   <body class="tien-nha">
      <div class="bootstrap-trongcustom">
         <div class="container mt-6 mb-6">
            <div class="row mb-6">
               <div class="col-6">
                  <form autocomplete="on" id="dat_hang_test" action="" method="POST" style="width: 100%">
                     <div class="form-group">
                        <input autocomplete="on" name="hoten" type="text" class="form-control" placeholder="Họ và Tên" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="on" name="email" type="email" class="form-control" placeholder="Email" required>
                     </div>
                     <select class="custom-select my-1 mr-sm-2" name="phong">
                        <option selected>Choose...</option>
                        <option value="1">Trọng, Long, Chương</option>
                        <option value="2">Hà, Cúc</option>
                        <option value="3">Hường, Huế</option>
                     </select>
                     <button class="btn btn-info" name="submitUser" type="submit">Submit</button>
                  </form>
               </div>
               <div class="col-6">
                  <h3>List User</h3>
                  <table class="table table-striped history-table">
                     <thead>
                        <tr>
                           <th scope="col">Tên</th>
                           <th scope="col">Email</th>
                           <th scope="col">Phòng</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($getUser as $value) {
                           echo '<tr><form action="" method="post">';
                           echo '<th scope="row">'.$value->hoten.'</th><td>'.$value->email.'</td>'.'<td>'.$value->phong.'</td>'.'<td><input name="mail" type="hidden" value='.$value->email.'><button class="btn btn-info" name="deleteuser">Xóa</button></td>';
                           echo '</form></tr>';
                           } ?>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="row">
               <div class="col-4">
                  <h3>Form tính tiền</h3>
                  <form autocomplete="off" id="dat_hang_test" action="" method="POST" style="width: 100%">
                     <div class="form-group">
                        <input autocomplete="off" name="thang" type="number" class="form-control" placeholder="Tháng" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="off" name="nuoc" type="number" class="form-control" placeholder="Tiền nước" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="off" name="dien" type="number" class="form-control" placeholder="Tiền điện" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="off" name="dichvu" type="number" class="form-control" placeholder="Tiền dịch vụ" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="off" name="mang" type="number" class="form-control" placeholder="Tiền mạng" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="off" name="guixe" type="number" class="form-control" placeholder="Gửi xe" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="off" name="khac" type="number" class="form-control" placeholder="Tiền khác" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="off" name="note" type="text" class="form-control" placeholder="Ghi chú thêm" required>
                     </div>
                     <button class="btn btn-info" name="submitTien">Submit</button>
                  </form>
               </div>
               <div class="col-8">
                  <table class="table table-striped history-table">
                     <thead>
                        <tr>
                           <th scope="col">Tháng</th>
                           <th scope="col">Số người</th>
                           <th scope="col">Tiền điện</th>
                           <th scope="col">Tiền nước</th>
                           <th scope="col">Tiền mạng</th>
                           <th scope="col">Tiền dịch vụ</th>
                           <th scope="col">Tiền gửi xe</th>
                           <th scope="col">Tiền khác</th>
                           <th scope="col">Ghi chú</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($getData as $value) {
                           echo '<tr>';
                           echo '<th scope="row">'.$value->thang.'</th><td>'.numbertoVND($value->sothanhvien).'</td>'.'<td>'.numbertoVND($value->dien).'</td>'.'<td>'.numbertoVND($value->nuoc).'</td>'.'<td>'.numbertoVND($value->mang).'</td>'.'<td>'.numbertoVND($value->dichvu).'</td>'.'<td>'.numbertoVND($value->guixe).'</td>'.'<td>'.numbertoVND($value->khac).'</td>'.'<td>'.$value->note.'</td>';
                           echo '</tr>';
                           } ?>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="row mt-6">
               <div class="col-6">
                  <h3>Form gửi mail</h3>
                  <table class="table table-striped history-table">
                     <thead>
                        <tr>
                           <th scope="col">Tên</th>
                           <th scope="col">Email</th>
                           <th scope="col">Tiền nhà</th>
                           <th scope="col">Ghi chú</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($getUser as $value) {
                           echo '<tr><form action="" method="post">';
                           echo '<th scope="row">'.$value->hoten.'</th><td>'.$value->email.'</td>'.'<td><input name="tiennha" placeholder="Tiền nhà"></td>'.'<td><input name="note" placeholder="Note"></td>'.'<td><input name="hoten" type="hidden" value='.$value->hoten.'><input name="mail" type="hidden" value='.$value->email.'><button class="btn btn-info" name="sendmail">Gửi</button></td>';
                           echo '</form></tr>';
                           } ?>
                     </tbody>
                  </table>
                  <form action="" method="post"><button class="btn btn-info" name="sendmailall">Gửi toàn bộ</button></form>
               </div>
               <div class="col-6">
                  <h3>Tiền nhà theo phòng</h3>
                  <form action="" method="post">
                     <div class="form-group">
                        <input autocomplete="off" name="phong1" type="number" class="form-control" placeholder="Tiền phòng 1" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="off" name="phong2" type="number" class="form-control" placeholder="Tiền phòng 2" required>
                     </div>
                     <div class="form-group">
                        <input autocomplete="off" name="phong3" type="number" class="form-control" placeholder="Tiền phòng 3" required>
                     </div>
                     <button class="btn btn-info" name="submitTienPhong">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         if ( window.history.replaceState ) {
         	  window.history.replaceState( null, null, window.location.href );
         	}
      </script>
   </body>
</html>
<?php get_footer(); ?>