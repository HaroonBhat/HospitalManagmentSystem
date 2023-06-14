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
		<style>
			.need-to-work{
	padding:8px;
			display:block;
			width:98%;
			background:#fcfcfc;
			border: none;
			outline:none;
			color:rgb(139, 139, 139);
			font-size:0.8125em;
			font-family:Arial, Helvetica, sans-serif;
			box-shadow: inset 0px 0px 3px rgb(199, 199, 199);
			-webkit-box-shadow: inset 0px 0px 3px rgb(199, 199, 199);
			-moz-box-shadow: inset 0px 0px 3px rgb(199, 199, 199);
			-o-box-shadow:inset 0px 0px 3px rgb(199, 199, 199);
}
		</style>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header text-decoration-none">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo ">
		<a href="index.html" style="font-size: 30px;">Hospital Management system</a> 
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav ">
					<ul>
						<li><a href="index.html">Home</a></li>
					
						<li class="active text-decoration-none"><a href="contact.php">contact</a></li>
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
				     	<h2>Hospital Address  :</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>India</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   	
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="emailid" required="true" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
								 <span><input type="numberonly" name="mobileno" required="true" value="" class="need-to-work" onkeypress="return onlyNumberKey(event)"></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
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
						<li><a href="index.html">Home</a></li>
						
						<li><a href="contact.php">contact</a></li>
					</ul>
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
		<script>
        function onlyNumberKey(evt) {
              
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
	</body>
</html>

