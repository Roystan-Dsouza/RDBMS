<html>
    <head>
        <title>Contact Us | Chores Made Easy Home Repairs</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php
            require("includes/header.php");
        ?>
        <section class="page-header-sec" style="background: url(img/hr-15.jpg)">
            <div class="container">
                <div class="page-header-bdy">
                    <h1 style="color: maroon">Contact Us</h1>
                </div>
            </div>
        </section>
        <div class="container" style="padding:45px 0">
            <div class="row">
            <div style="width: 33.33%;float: left">
                <center>
                    <h2><u>Our Corporate Office</u></h2><br>
                    <address>
                        <p><i class="fa fa-map-marker" style="color:red"></i> Address: - G-4/8, G-Block, DLF Phase-1, Bangalore </p>
                        <p><i class="fa fa-phone" style="color:red"></i> Phone: 8972135640 </p>
                    </address>
                    <a href="#">
                        <span class="social-icon">
                            <i class="fa fa-facebook" style="font-size: 32px;padding-right: 24px"></i>
                        </span>
                    </a>
                    <a href="#">
                        <span class="social-icon">
                            <i class="fa fa-linkedin" style="font-size: 32px;padding-right: 24px"></i>
                        </span>
                    </a>
                    <a href="#">
                        <span class="social-icon">
                            <i class="fa fa-twitter" style="font-size: 32px;padding-right: 24px"></i>
                        </span>
                    </a>
                </center>
            </div>
            <div style="width:33.33%;float: left">
                <center>
                    <h2><u>Regional Offices</u></h2><br>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne" style="border-radius: 4px;background-color: #f5f5f5">
                                <h4 class="panel-title" style="padding: 10px 15px">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#Mangalore" aria-expanded="false" aria-controls="headingOne" style="color:black">Mangalore</a>
                                </h4>
                            </div>
                            <div id="Mangalore" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <address>
                                    <p><i class="fa fa-map-marker" style="color: red"></i> Address: – No. 10,000 Feet Ring Road. BMT 1st Stage, Mangalore – 560068</p>
                                    <p><i class="fa fa-phone" style="color: red"></i> Phone: 8882222666</p>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo" style="border-radius: 4px;background-color: #f5f5f5">
                                <h4 class="panel-title" style="padding: 10px 15px">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#Udupi" aria-expanded="true" aria-controls="headingTwo" style="color:black">Udupi</a>
                                </h4>
                            </div>
                            <div id="Udupi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <address>
                                        <p><i class="fa fa-map-marker" style="color: red"></i> Address: – 407-B, B-Wing, Pranik Chambers, Udupi-400072</p>
                                    <p><i class="fa fa-phone" style="color: red"></i> Phone: 8882222666</p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
            <div style="width: 33.33%;float: left;padding-left: 15px">
                <center>
                    <h2><u>Share Your Feedback</u></h2><br>
                        <form id="contact-form" class="contact-form" method="post" action="">
                            <div class="row">
                                <div class="form-group col-sm-6 name-field">
                                    <input type="text" name="name" class="form-control" required="" placeholder="Name">
                                </div>
                                <div class="form-group col-sm-6 email-field">
                                    <input type="text" name="mobile" class="form-control" required="" placeholder="Mobile" maxlength="10" pattern="[789][0-9]{9}">
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="email" name="email" class="form-control" required="" placeholder="Email ID">
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea name="message" id="message" required="" class="form-control" rows="8" placeholder="Your Text"></textarea>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top:15px; width:100%; display:inline-block;">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                </center>
            </div>
            </div>
        </div>
        <?php
            require("includes/footer.php");
        ?>
    </body>
</html>