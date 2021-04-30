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
	<?php include('head.php'); ?>
</head>

<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>

        <!--Start Main Header-->
       <?php include('header.php'); ?>
        <!--End Main Header-->

  <!--Start appointment Area-->
        <section class="appointment-area" style="background-image:url(images/resources/c.jpg);">
            <div class="container">
                <div class="row">
                   
                    <div class="col-xl-12 ">
                        <div class="appointment-box wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="title-box">
                                 <h2>Download Brochure</h2>
                            </div>
                            <div class="appointment">
                               <form class="appointment-form" method="post" action="brochure1.php">
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
                                                <input type="text" name="phone" value="" placeholder="Phone No" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="single-box">
                                               <input type="submit" class="btn-one"  value="Download" />
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