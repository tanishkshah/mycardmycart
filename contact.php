
<?php
include_once('hms/include/config.php');
if(isset($_POST['send']))
{	 
		 $name=$_POST['fullname'];
		 $E_mail_id =$_POST['emailid'];
		 $mobile=$_POST['mobileno'];
		 $desc=$_POST['description'];
		 
		 
         $to = "$E_mail_id";
         $subject = "This is your information";
         
         $message = "<h1>YOU ENTERED INFORMATION</h1><br>";
         $message .= "<b>Name</b> = $name <br>";
		 $message = "<b>Mobile Number = $mobile</b><br>";
         $message .= "<b>Your Description</b> = $desc <br>";
		 
		 
         $header = "From:tanishkshah@gmail.com \r\n";
         $header .= "Cc:tanishkshah@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Your information will be sent successfully on <b>$E_mail_id</b>";
         }else {
            echo "Message could not be sent...";
         }
}
?>
	
<!DOCTYPE HTML>
<html>
	<head>
		<title>CMS | Contact us</title>
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
		<a href="index.html" style="font-size: 30px;">Cashback Management system</a> 
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.html">Home</a></li>
					
						<li class="active"><a href="contact.php">contact</a></li>
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
				     	<h2>Address  :</h2>
				     			<p><b>REFERKAR DIGITAL SERVICES LLP</b></p>
						    	<p>1101,11th Floor,Royale Avenue,</p>
						   		<p>Dr. Vigas Street, Chirabazar,Mumbai-400002</p>
						   		<p>India</p>
				   		<p>Phone:(+91) 9820600055</p>
<!--				   		<p>Fax: (000) 000 00 00 0</p>-->
<!--				 	 	<p>Email: <span>info@mycompany.com</span></p>-->
				   	
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
						   		<span><input type="submit" name="send" value="submit"></span>
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
	</body>
</html>

