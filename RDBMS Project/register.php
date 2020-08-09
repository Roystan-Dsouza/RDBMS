<html>
    <head>
        <style type="text/css">
            h3
            {
                 text-align: center;
            }
            body
            {
                background-image: url(img/hr-6.jpg);
                background-size: cover;
            }
            .form-group
            {
              color: white;
            }
            .register
            {
                background: rgba(0,0,0,0.2);
                padding: 10px;
            }
        </style>
        <title>Register | Chores Made Easy Home Repairs</title>
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
            <div class="col-md-6 register" style="border-radius:4px">
                <div class="w3-panel w3-blue w3-card-4" style="border-radius:4px">
                    <h3>Registration Form</h3>
                </div>
                <form action="reg_script.php" method="POST">
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
                <!--div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="City"
                        required="true">
                </div-->
                <div class="form-group">
                    <label for="can_afford">Can you afford the service?</label><br>
                    <input type="radio" name="can_afford" value="Yes">Yes
                    <input type="radio" name="can_afford" value="No">No
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="8"
                        placeholder="Description" required="true"></textarea>
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