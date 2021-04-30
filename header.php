 <header class="main-header header-style2 stricky">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <a href="index-2.html">
                        <img src="images/resources/logo.png" alt="Awesome Logo">
                    </a>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu style2 clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <?php
                                  $pageName = basename($_SERVER['PHP_SELF']);
                                	if($pageName == "index.php") {
                                	    echo "<li class='current'><a href='index.php'>Home</a></li>";
                                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                                        echo "<li class='dropdown'><a href='#'>Services</a>";
                                        	echo "<ul>";
                                        		echo "<li><a href='prototype.php'>Prototyping</a></li>";
                                        		echo "<li><a href='miniature.php'>Miniature</a></li>";
                                        		echo "<li><a href='3dprintedtoys.php'>3D Printed Toys</a></li>";
                                        		echo "<li><a href='scimodels.php'>Educational Scientific Models</a></li>";
                                        		echo "<li><a href='medicalequipment.php'>Medical Equipments</a></li>";
                                        		echo "<li><a href='3dprintedgifts.php'>3D Printed Gifts</a></li>";
                                        		echo "<li><a href='homedecor.php'>Home Decor</a></li>";
                                        	echo "</ul>";
                                        echo "</li>";
                                        echo "<li><a href='process.php'>Process</a></li>";     
                                        echo "<li><a href='brochure.php'>Brochure</a></li>";
                                        echo "<li><a href='gallery.php'>Gallery</a></li>";
                                        echo "<li><a href='enquiry.php'>Contact</a></li>";
                                	}
                                	if($pageName == "aboutus.php") {
                                	    echo "<li><a href='index.php'>Home</a></li>";
                                        echo "<li class='current'><a href='aboutus.php'>About Us</a></li>";
                                        echo "<li class='dropdown'><a href='#'>Services</a>";
                                        	echo "<ul>";
                                        		echo "<li><a href='prototype.php'>Prototyping</a></li>";
                                        		echo "<li><a href='miniature.php'>Miniature</a></li>";
                                        		echo "<li><a href='3dprintedtoys.php'>3D Printed Toys</a></li>";
                                        		echo "<li><a href='scimodels.php'>Educational Scientific Models</a></li>";
                                        		echo "<li><a href='medicalequipment.php'>Medical Equipments</a></li>";
                                        		echo "<li><a href='3dprintedgifts.php'>3D Printed Gifts</a></li>";
                                        		echo "<li><a href='homedecor.php'>Home Decor</a></li>";
                                        	echo "</ul>";
                                        echo "</li>";
                                        echo "<li><a href='process.php'>Process</a></li>";     
                                        echo "<li><a href='brochure.php'>Brochure</a></li>";
                                        echo "<li><a href='gallery.php'>Gallery</a></li>";
                                        echo "<li><a href='enquiry.php'>Contact</a></li>";
                                	}
                                	if($pageName == "prototype.php" || $pageName == "miniature.php" || $pageName == "3dprintedtoys.php" || $pageName == "scimodels.php" || $pageName == "medicalequipment.php"
                                	|| $pageName == "3dprintedgifts.php" || $pageName == "homedecor.php") {
                                	    echo "<li><a href='index.php'>Home</a></li>";
                                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                                        echo "<li class='dropdown current'><a href='#'>Services</a>";
                                        	echo "<ul>";
                                        		echo "<li><a href='prototype.php'>Prototyping</a></li>";
                                        		echo "<li><a href='miniature.php'>Miniature</a></li>";
                                        		echo "<li><a href='3dprintedtoys.php'>3D Printed Toys</a></li>";
                                        		echo "<li><a href='scimodels.php'>Educational Scientific Models</a></li>";
                                        		echo "<li><a href='medicalequipment.php'>Medical Equipments</a></li>";
                                        		echo "<li><a href='3dprintedgifts.php'>3D Printed Gifts</a></li>";
                                        		echo "<li><a href='homedecor.php'>Home Decor</a></li>";
                                        	echo "</ul>";
                                        echo "</li>";
                                        echo "<li><a href='process.php'>Process</a></li>";     
                                        echo "<li><a href='brochure.php'>Brochure</a></li>";
                                        echo "<li><a href='gallery.php'>Gallery</a></li>";
                                        echo "<li><a href='enquiry.php'>Contact</a></li>";
                                	}
                                	if($pageName == "process.php") {
                                	    echo "<li><a href='index.php'>Home</a></li>";
                                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                                        echo "<li class='dropdown'><a href='#'>Services</a>";
                                        	echo "<ul>";
                                        		echo "<li><a href='prototype.php'>Prototyping</a></li>";
                                        		echo "<li><a href='miniature.php'>Miniature</a></li>";
                                        		echo "<li><a href='3dprintedtoys.php'>3D Printed Toys</a></li>";
                                        		echo "<li><a href='scimodels.php'>Educational Scientific Models</a></li>";
                                        		echo "<li><a href='medicalequipment.php'>Medical Equipments</a></li>";
                                        		echo "<li><a href='3dprintedgifts.php'>3D Printed Gifts</a></li>";
                                        		echo "<li><a href='homedecor.php'>Home Decor</a></li>";
                                        	echo "</ul>";
                                        echo "</li>";
                                        echo "<li class='current'><a href='process.php'>Process</a></li>";     
                                        echo "<li><a href='brochure.php'>Brochure</a></li>";
                                        echo "<li><a href='gallery.php'>Gallery</a></li>";
                                        echo "<li><a href='enquiry.php'>Contact</a></li>";
                                	}
                                	if($pageName == "brochure.php") {
                                	    echo "<li><a href='index.php'>Home</a></li>";
                                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                                        echo "<li class='dropdown'><a href='#'>Services</a>";
                                        	echo "<ul>";
                                        		echo "<li><a href='prototype.php'>Prototyping</a></li>";
                                        		echo "<li><a href='miniature.php'>Miniature</a></li>";
                                        		echo "<li><a href='3dprintedtoys.php'>3D Printed Toys</a></li>";
                                        		echo "<li><a href='scimodels.php'>Educational Scientific Models</a></li>";
                                        		echo "<li><a href='medicalequipment.php'>Medical Equipments</a></li>";
                                        		echo "<li><a href='3dprintedgifts.php'>3D Printed Gifts</a></li>";
                                        		echo "<li><a href='homedecor.php'>Home Decor</a></li>";
                                        	echo "</ul>";
                                        echo "</li>";
                                        echo "<li><a href='process.php'>Process</a></li>";     
                                        echo "<li class='current'><a href='brochure.php'>Brochure</a></li>";
                                        echo "<li><a href='gallery.php'>Gallery</a></li>";
                                        echo "<li><a href='enquiry.php'>Contact</a></li>";
                                	}
                                	if($pageName == "gallery.php") {
                                	    echo "<li><a href='index.php'>Home</a></li>";
                                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                                        echo "<li class='dropdown'><a href='#'>Services</a>";
                                        	echo "<ul>";
                                        		echo "<li><a href='prototype.php'>Prototyping</a></li>";
                                        		echo "<li><a href='miniature.php'>Miniature</a></li>";
                                        		echo "<li><a href='3dprintedtoys.php'>3D Printed Toys</a></li>";
                                        		echo "<li><a href='scimodels.php'>Educational Scientific Models</a></li>";
                                        		echo "<li><a href='medicalequipment.php'>Medical Equipments</a></li>";
                                        		echo "<li><a href='3dprintedgifts.php'>3D Printed Gifts</a></li>";
                                        		echo "<li><a href='homedecor.php'>Home Decor</a></li>";
                                        	echo "</ul>";
                                        echo "</li>";
                                        echo "<li><a href='process.php'>Process</a></li>";     
                                        echo "<li><a href='brochure.php'>Brochure</a></li>";
                                        echo "<li class='current'><a href='gallery.php'>Gallery</a></li>";
                                        echo "<li><a href='enquiry.php'>Contact</a></li>";
                                	}
                                	if($pageName == "enquiry.php") {
                                	    echo "<li><a href='index.php'>Home</a></li>";
                                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                                        echo "<li class='dropdown'><a href='#'>Services</a>";
                                        	echo "<ul>";
                                        		echo "<li><a href='prototype.php'>Prototyping</a></li>";
                                        		echo "<li><a href='miniature.php'>Miniature</a></li>";
                                        		echo "<li><a href='3dprintedtoys.php'>3D Printed Toys</a></li>";
                                        		echo "<li><a href='scimodels.php'>Educational Scientific Models</a></li>";
                                        		echo "<li><a href='medicalequipment.php'>Medical Equipments</a></li>";
                                        		echo "<li><a href='3dprintedgifts.php'>3D Printed Gifts</a></li>";
                                        		echo "<li><a href='homedecor.php'>Home Decor</a></li>";
                                        	echo "</ul>";
                                        echo "</li>";
                                        echo "<li><a href='process.php'>Process</a></li>";     
                                        echo "<li><a href='brochure.php'>Brochure</a></li>";
                                        echo "<li><a href='gallery.php'>Gallery</a></li>";
                                        echo "<li class='current'><a href='enquiry.php'>Contact</a></li>";
                                	}
                            	?>
                            </ul>
                        </div>
                    </nav>
                    <div class="mainmenu-right style2">
                        <div class="outer-search-box">
                          
                        </div>
                        <div class="cart-box">
                           
                        </div>
                        <div class="button">
                            <a class="btn-one" href="enquiry.php">Place An Enquiry<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>