
<?php
include 'layout/header.php';
?>
	<!---->
	<div class="container"> 
			         
		<div class="register">
		  	  <form action="suakhachhang.php" method="post"> 
				 <div class="  register-top-grid">
					<h3>THÔNG TIN KHÁCH HÀNG</h3>
					<div class="mation">	
					
						<span>Tên đăng nhập :</span>
						<input type="text" name="tendangnhap" value="<?php echo  isset($_SESSION['se'])?$_SESSION['se']: "Tài khoản" ?>"> 

						<span>Họ tên :</span>
						<input type="text" name="tenkh"> 
					 
						 <span>Địa chỉ :</span>
						 <input type="text" name ="diachi"> 

						 <span>Số điện thoại :</span>
						 <input type="text" name="sdt"> 


						</div>
					 </div>
					 <form>
					  <button class="acount-btn" type="submit" name="submit">Sửa</button>
				
				   </form>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   
				</div>
		   </div>
		      
	</div>
	<!---->
<?php
include 'layout/footer.php';
?>