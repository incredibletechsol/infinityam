<!DOCTYPE html>
<html lang="en">


<!-- index-2 06:41:43 GMT -->
<head>
    <meta charset="UTF-8">
    <title><?php include('title.php'); ?></title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <?php include('head.php'); 
 require('constant.php');
 ?>
  <script src="component/jquery/jquery-3.2.1.min.js"></script>
 <script>
     
     function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }
       
       function isAlpha(keyCode)
        {
            return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
        }
 </script>
 <script>

	$(document).ready(function (e){
		$("#frmContact").on('submit',(function(e){
			e.preventDefault();
			$("#mail-status").hide();
			$('#send-message').hide();
			$('#loader-icon').show();
			$.ajax({
				url: "contact.php",
				type: "POST",
				dataType:'json',
				data: {
				"name":$('input[name="name"]').val(),
				"email":$('input[name="email"]').val(),
				"phone":$('input[name="phone"]').val(),
				"address":$('input[name="address"]').val(),
				"message":$('textarea[name="message"]').val(),
				"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},				
				success: function(response){
				$("#mail-status").show();
				$('#loader-icon').hide();
				if(response.type == "error") {
					$('#send-message').show();
					$("#mail-status").attr("class","error");				
				} else if(response.type == "message"){
					$('#send-message').hide();
					document.getElementById('frmContact').reset();
					$("#mail-status").attr("class","success");		
					setTimeout(function () {SUCCESS.innerHTML =""}, 10000);
					
				}
				$("#mail-status").html(response.text);	
					$('#send-message').show();
				},
				error: function(){} 
			});
		}));
	});
	</script>
	<style>
	.label {margin: 2px 0;}
	.field {margin: 0 0 20px 0;}	
		.content {width: 960px;margin: 0 auto;}
		h1, h2 {font-family:"Georgia", Times, serif;font-weight: normal;}
		div#central {margin: 40px 0px 100px 0px;}
		@media all and (min-width: 768px) and (max-width: 979px) {.content {width: 750px;}}
		@media all and (max-width: 767px) {
			body {margin: 0 auto;word-wrap:break-word}
			.content {width:auto;}
			div#central {	margin: 40px 20px 100px 20px;}
		}

		#message {  padding: 0px 40px 0px 0px; }
		#mail-status {
			padding: 12px 20px;
			width: 100%;
			display:none; 
			font-size: 1em;
			font-family: "Georgia", Times, serif;
			color: rgb(40, 40, 40);
		}
	  .error{background-color: #F7902D;  margin-bottom: 40px;}
	  .success{background-color: #48e0a4; }
		.g-recaptcha {margin: 0 0 25px 0;}	  
	</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>	
</head>

<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>

        <!--Start Main Header-->
       <?php include('header.php'); ?>
        <!--End Main Header-->

  <!--Start appointment Area-->
        <section class="appointment-area" style="background-image:url(images/resources/appointment-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="map-content-box">
                            <div class="sec-title">
                   
                                <div class="title">How Can We <span>Help You?</span></div>
                            </div>
                            	
                        <div class="single-footer-widget marbtm50">
                            <div class="contact-info-box">
                               
                                <ul>
                                    <li>
                                        <h6>Address</h6>
                                        <p>A/P Koregoan Bhima,Pandharinath Nagar,Tal-Shirur,Dist-Pune,Pin-412216,Maharashtra,India</p>
                                    </li>
                                    <li>
                                        <h6>Phone</h6>
                                        <p>+91 7249510087</p>
                                        <p>Available 24*7</p>
                                    </li>
                                    <li>
                                        <h6>Email</h6>
                                        <p>info@infinityam.in</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
					<div id="loader-icon" style="display:none;"><img src="images/ajax-loader.gif" /></div>
					<div id='SUCCESS'><div id="mail-status"></div></div>
                        <div class="appointment-box wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="title-box">
                                   <h2>Enquiry Form</h2>
                            </div>
                            <div class="appointment">
                                <form class="appointment-form" method="post" action="" id="frmContact" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="single-box">
                                                <input type="text" name="name" value="" placeholder="Name" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="single-box">
                                                <input type="email" name="email" value="" placeholder="Email" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="single-box">
                                                <input type="text" name="phone" value="" placeholder="Phone" required="" onkeypress="return isNumberKey(event)" maxlength="10">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-xl-12">
                                            <div class="single-box">
                                                <input type="text" name="address" value="" placeholder="Address" required="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-xl-12">
                                            <div class="single-box">
                                               <textarea class="form-control" name="message" rows="15" data-rule="required" data-msg="Please write your Enquiry details" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>	
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="single-box">
                                                <input type="submit" class="btn-one"  value="Submit" id="send-message"/>
                                            </div>
                                        </div>
                                    </div>
									  
                                </form>
                            </div>
                        </div>
                    </div>
			

                </div>
            </div>
        </section>
        <!--End appointment Area-->
		  <!--Start home google map area-->
        <section class="home-google-map-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="google-map-box">
                            <div>
                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.3134278880775!2d74.07700371489466!3d18.649926087333842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDM4JzU5LjciTiA3NMKwMDQnNDUuMSJF!5e0!3m2!1sen!2sin!4v1619333174085!5m2!1sen!2sin" style="border:0; width: 100%; height: 384px;" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End home google map area-->
	<?php include('footer.php'); ?>
    </div>
 
   
<?php include('scrolltotop.php'); ?>

<?php include('commonjs.php'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBevTAR-V2fDy9gQsQn1xNHBPH2D36kck0"></script>
	    <script src="js/gmaps.js"></script>
    <script src="js/map-helper.js"></script>
</body>


<!-- index-2 06:43:55 GMT -->
</html>