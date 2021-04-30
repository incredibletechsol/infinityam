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
                                <h1>Gallery</h1>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

           <section class="working-process-style2-area" style="background-image:url(images/parallax-background/working-process-bg-style3.jpg);">
            <div class="container">
              
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <?php include('portfolio.php'); ?>
                    </div>


                </div>
            </div>
        </section>
        <!--End Working Process Style2 Area-->
	<?php include('footer.php'); ?>
    </div>
 
   
<?php include('scrolltotop.php'); ?>

<?php include('commonjs.php'); ?>
</body>


<!-- index-2 06:43:55 GMT -->
</html>