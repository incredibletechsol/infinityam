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

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/breadcrumb-bg-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <h1>Home Decor</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li class="active">Home Decor</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Single Service Area-->
        <section class="single-service-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                        <div class="single-service-sidebar">
                            <!--Start Single sidebar-->
                            <?php include('servicesidebar.php');  ?>
                            <!--End Single sidebar-->
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="single-service-top">
                           
                            <div class="text">
                                <h2>Home Decor</h2>
                                <div class="inner">
                                    <p align="justify">Apart from all of the other applications now a day there is lot more scope of use of 3D printing in home decors too where there are various applications like partitions, wall mounts and flower vase or frames etc. </p>
                                </div>
                            </div>
                             <div class="single-service-image-box">
                                <img src="images/services/main/Home Decor Items.jpg" alt="Awesome Image">
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        <!--End Single Service Area-->
	<?php include('footer.php'); ?>
    </div>
 
   
<?php include('scrolltotop.php'); ?>

<?php include('commonjs.php'); ?>
</body>


<!-- index-2 06:43:55 GMT -->
</html>