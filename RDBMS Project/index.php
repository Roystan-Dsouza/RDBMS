<?php
require("includes/common.php");
?>
<html>
    <head>
        <title>Home | Chores Made Easy Home Repairs</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .carousel-inner img {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <?php
            require("includes/header.php");
        ?>
        <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/hr-2.jpg" alt="image" width="1100" height="500">
                        <div class="carousel-caption center">                           
                            <p style="font-size:60px;padding-bottom: 220px">DAMAGED?DESTROYED?<br>WE’LL GET IT <strong><span style="color: red;">Back To Beautiful</span></strong>
                        </div>                      
                </div>
                <div class="carousel-item">
                    <img src="img/hr-3.jpg" alt="image" width="1100" height="500">
                        <div class="carousel-caption">
                            <p style="font-size:32.5px;color: black"><b>We take pride in sending</b></p><p style="font-size:58px;color:brown;"><strong>VERIFIED SERVICEMEN.</strong></p><p style="font-size:32.5px;padding-bottom: 222px">No project is too small!
                        </div>
                </div>
                <div class="carousel-item">
                    <img src="img/hr-4.jpg" alt="image" width="1100" height="500">
                        <div class="carousel-caption">
                            <p style="font-size:32.5px;color: darkgreen"><b>We understand the value of</b></p><p style="font-size:58px;color:darkgoldenrod;padding-bottom: 252px"><strong>PRECISE BILLING</strong></p>
                        </div>
                </div>
                <div class="carousel-item">
                    <img src="img/hr-5.jpg" alt="image" width="1100" height="500">
                        <div class="carousel-caption">
                            <p style="font-size:58px;color: purple"><strong>COMPLETE SERVICES FOR YOUR HOME</strong><p style="font-size:30px;color:darkorange;padding-bottom: 252px"><b>We do everything from changing a light bulb to remodeling your kitchen.</b>                               
                        </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <br><br><br>
        <div class="container">
            <center><p style="font-size:38px"><b>Why Choose Us for Your Home Repair Needs?</b></p></center>           
            <div class="list_box">
                <div class="box">
                    <div class="thumbnail"> 
                        <h3><span class="fas fa-check-square" style="color:red"></span> TRUSTWORTHY</h3>
                        <p style="font-size: 18px">Our workers are reliable and can be entrusted to complete the given job in an accurate, responsible and safe manner.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="thumbnail">
                        <h3><span class="fas fa-check-square" style="color:red"></span> GUARANTEED</h3>
                        <p style="font-size: 18px">We believe in exceptional service and quality workmanship which is why we back every job we do with our worry-free guarantee.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="thumbnail">
                        <h3><span class="fas fa-check-square" style="color:red"></span> EXPERIENCED</h3>
                        <p style="font-size: 18px">Our workers have an average of 10 years' experience in their given fields of carpentry, electrical, plumbing and structural.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="thumbnail">
                        <h3><span class="fas fa-check-square" style="color:red"></span> CHARITY</h3>
                        <p style="font-size: 18px">We also provide free services for those who cannot afford home repairs and there are volunteers too who help us out in their free time.</p>
                    </div>
                </div>
            </div>
            <br>
            <center><a href="about.php" class="btn btn-info" role="button" style="font-size:30px;background-color: red">LEARN MORE ABOUT US</a></center>
            <br><br><br>
            <center id="Services"><p style="font-size:38px"><b>What Can Our Home Improvement Professionals Do For You?</b></p></center>
            <div class="list_box">
                <div class="box">
                    <div class="thumbnail" style="width: 90%;height: auto"> 
                        <img src="img/hr-10.png" alt="carpentry_image" style="height:100px;width:100px">
                        <h4>CARPENTRY</h4>
                        <p>Nothing makes a home look more unique or beautiful than professional,custom carpentry.We can install and build new features such as mantels,cabinets,shelves and more.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="thumbnail" style="width: 90%;height: auto"> 
                        <img src="img/hr-11.png" alt="electrical_image" style="height:100px;width:100px">
                        <h4>ELECTRICAL</h4>
                        <p>Have household projects that involve electrical components? If it feels like overkill to hire an electrician, hire our handymen instead. We can install new features and fix existing ones.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="thumbnail" style="width: 90%;height: auto"> 
                        <img src="img/hr-12.png" alt="plumbing_image" style="height:100px;width:100px">
                        <h4>PLUMBING</h4>
                        <p>Plumbing problems are not only annoying - they can harm your home if not taken care of accordingly. Let us offer you the services you need to keep your home in working order.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="thumbnail" style="width: 90%;height: auto"> 
                        <img src="img/hr-13.png" alt="structural_image" style="height:100px;width:100px">
                        <h4>STRUCTURAL</h4>
                        <p>It’s simple—if something is broken in your home, we can fix it. Our repair services can not only keep your home looking its best, but can also save you time and money.</p>
                    </div>
                </div>
            </div>
            <br>
            <center><a href="register.php" class="btn btn-info" role="button" style="font-size:30px;background-color: red">BOOK A SERVICE NOW</a></center>
            <br><br><br>
            <center><p style="font-size:38px"><b>Quick Links</b></p></center>
            <div style="width: 25%;float: left"><center>
                    <a href="employee.php" class="btn btn-info" role="button" style="font-size:30px;background-color: red">Work with us</a></center>
            </div>
            <div style="width: 25%;float: left"><center>
            <a href="volunteer.php" class="btn btn-info" role="button" style="font-size:30px;background-color: red">Volunteer</a></center>
            </div>
            <div style="width: 25%;float: left"><center>
            <a href="sregister.php" class="btn btn-info" role="button" style="font-size:30px;background-color: red">Donate</a></center>
            </div>
            <div style="width: 25%;float: left"><center>
                    <a href="contact.php.php" class="btn btn-info" role="button" style="font-size:30px;background-color: red">Contact Us</a></center>
            </div>
            <br><br><br><br>
        </div>
        <?php
            require("includes/footer.php");
        ?>
    </body>
</html>  