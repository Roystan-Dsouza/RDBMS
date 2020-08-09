<html>
    <head>
        <style type="text/css">
            h3
            {
                     text-align: center;
            }
            body
            {
                    background-image: url(img/hr-9.jpg);
                    background-size: cover;
            }
            .form-group
            {
              color: white;
            }
            .sponsor
            {
                    background: rgba(0,0,0,0.2);
                    padding: 10px;
            }
        </style>
        <title>Sponsor</title>
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
            <div class="col-md-6 sponsor" style="border-radius:4px">
                <div class="w3-panel w3-blue w3-card-4" style="border-radius:4px">
                    <h3>Sponsor</h3>
                </div>
                <form action="sreg_script.php" method="POST">
                <div class="form-group">
                    <label for="">Name</label>
                    <input id="Name" name="Name" type="text" class="form-control" placeholder="Name" required="true">
                </div>
                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input id="contact"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Contact" minlength="10"
                        maxlength="10" required="true">
                </div>
                <div class="form-group">
                    <label for="">Email ID</label>
                    <input id="Email" name="Email" type="text" class="form-control" placeholder="Email ID" required="true">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input id="Addresss" name="Address" type="text" class="form-control" placeholder="Address" required="true">
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input id="city" name="city" type="text" class="form-control" placeholder="City"
                        required="true">
                </div>
                <div class="form-group">
                    <label for="DonationAmount">Donation Amount</label>
                    <input id="DonationAmount" name="DonationAmount" type="text" class="form-control" placeholder="Donation Amount" required="true">
                </div>
                <div class="form-group">
                    <label for="Payment Type">Payment Type</label>
                    <input type="radio" name="PaymentType" value="cash"> Cash <br>
                    <input type="radio" name="PaymentType" value="cheque"> Cheque <br>
                    <input type="radio" name="PaymentType" value="Debit/creditcard"> Debit/Credit Card
                    </div>
                <div align="center">
                     <button type="submit" class="btn btn-primary btn-lg" value=”registration_submit”>Submit</button>
                </div>                </form>
            </div>
        </div>
        <?php
            require("includes/footer.php");
        ?>
    </body>
</html>
