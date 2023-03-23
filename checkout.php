<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <div class="row" style="padding: 100px 300px;">
        <div class="col-50">
            <div class="container">
                <form action="payscript.php" method="post" style="padding: 25px;">
                    <div class="row">
                        <div class="col-25">
                            <h3 style="text-align: center;margin: 20px 10px;font-family: lato;">Checkout Form</h3>
                            <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                            <input type="text" id="fname" name="name" placeholder="Nishant Kumar">
                            <label for="email" id="fname"><i class="fa fa-envelope"></i>Email</label>
                            <input type="text" id="email" name="email" placeholder="nishant@example.com">
                            <input type="hidden" value="<?php echo 'OID'.rand(10,100);?>" name="orderid">
                            <input type="hidden" value="<?php echo 1;?>" name="amount">
                        </div>
                        
                    </div>
                    <input type="submit" value="Pay Now" class="btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>