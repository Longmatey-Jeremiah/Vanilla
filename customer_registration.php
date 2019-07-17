<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ghshop</title>
    <script src="js/jquery2.js"></script>
    <link rel="stylesheet" href="new/css/bootstrap.min.css">
    <script src="new/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Ghshop</a>
        </div>
            <ul class="nav navbar-nav">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
            </ul>
        </div>
    </div>
    <p><br></p>
    <p><br></p>
    <p><br></p>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 col-xs-1"></div>
            <div class="col-sm-8 col-xs-10">
                <div class="row">
                    <div class="col-md-12" id="signup_msg"></div>
                </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Customer SignUP Form</div>
                <div class="panel-body">
                    <form action="register.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" class="form-control" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" value="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="repassword">Re-Enter Password</label>
                            <input type="password" id="repassword" name="repassword" value="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" id="mobile" name="mobile" value="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="address1">Address 1</label>
                            <input type="text" id="address1" name="address1" value="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="address2">Address 2</label>
                            <input type="text" id="address2" name="address2" value="" class="form-control">
                        </div>
                    </div><br>
                    <button class="btn btn-success btn-lg" id="signup_btn" style="float:right">SignUp</button>
                    </form>
                </div>
                <div class="panel-footer">jkldsjfj</div>
             </div>
            <div class="col-sm-2 col-xs-1"></div>
        </div>
    </div>
    </div>
</body>
</html>