<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>HMS | Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
                <a href="index.html" style="font-size: 30px;">
                    <img src="images/logo55.png">

                </a>
            </div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.html">Trang Chủ</a></li>
					
						<li class="active"><a href="contact.php">Liên Hệ</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>Địa Chỉ  :</h2>
						    	<p>Đại Học HUTECH Khu D</p>
						   		<!-- <p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>India</p> -->
				   		<p>Phone:(00) 222 666 444</p>
						<p>Fax: (000) 000 00 00 0</p>
						
						  <p>Email: <span>fo4@hutech.com</span></p>
						  <p>Nhóm FO4 Thực Hiện</p>
						  <p>Programmer: Duy Dũng</p>
						  <p>Coder: Thành Hậu</p>
						  <p>Coder: Văn Long</p>
						  <p>COder: Huỳnh Ý</p>
				   	
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<!-- <h2>Contact Us</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
					</div> -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.158914856985!2d106.70430861462269!3d10.799138092306125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752928c00763bd%3A0x9ae9db69155653f9!2zSHV0ZWNoIC0gxJDhuqFpIGjhu41jIEPDtG5nIE5naOG7hyBUcCBIQ00gLSBLaHUgRA!5e0!3m2!1svi!2s!4v1611373066124!5m2!1svi!2s" width="600" height="290" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Trang Chủ</a></li>
						
						<li><a href="contact.php">Liên Hệ</a></li>
					</ul>
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

