<html>
    <head>
        <style type="text/css">
            h3
            {
                 text-align: center;
            }
            body
            {
                background-image: url(img/hr-8.jpg) ;
                background-size: cover;
            }
            .form-group
            {
                color: white;
            }
            .volunteer
            {
                background: rgba(0,0,0,0.2);
                padding: 10px;
            }
        </style>
        <title>Employee</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            require("includes/header.php");
        ?>
        <div class="container" style="margin:50px 468px">
            <div class="col-md-6 volunteer" style="border-radius:4px">
                <div class="w3-panel w3-blue w3-card-4" style="border-radius:4px">
                    <h3>Volunteer Registration</h3>
                </div>
                <form action="vol_script.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" required="true">
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input id="contact"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Contact Number" minlength="10"
                        maxlength="10" required="true">
                </div>
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email ID" required="true">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" name="address" type="text" class="form-control" placeholder="Address"
                        required="true">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input id="city" name="city" type="text" class="form-control" placeholder="City"
                        required="true">
                </div>
                <div class="form-group">
                    <label for="skill">Skill</label>
                    <input id="skill" name="skill" type="text" class="form-control" placeholder="Skill"
                        required="true">
                </div>
                <div class="form-group">
                    <label for="organistaion">Organisation</label>
                    <input id="organisation" name="organisation" type="text" class="form-control" placeholder="Organisation"
                        required="true">
                </div>
                <div align="center">
                     <button type="submit" class="btn btn-primary btn-lg" value=”registration_submit”>Submit</button>
                </div>
                </form>
            </div>
        </div>
        <?php
            require("includes/footer.php");
        ?>
    </body>
</html>