
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ghshop</title>
    <link rel="stylesheet" href="new/css/bootstrap.min.css">
    <script src="js/jquery2.js"></script>
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
                <li><a href="#"><span class="glyphicon glyphicon-home">Home</span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
                <li style="width:300px;top:10px;left:10px"><input type="text" id="search" class="form-control" value=""></li>
                <li style="top:10px;left:20px"><button id="search_btn" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></li>
            </ul>           
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
                <div class="dropdown-menu">    
                    <div style="width:400px" class="panel panel-success">
                        <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">Sl.No</div>
                            <div class="col-xs-3">Product Image</div>
                            <div class="col-xs-3">Product Name</div>
                            <div class="col-xs-3">Price in $</div>
                        </div>
                        </div>
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>SignIn</a>
                    <ul class="dropdown-menu">
                        <div style="width:300px">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Login</div>
                                    <div class="panel-heading">   
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control" required/>
                                        <label for="email">Password</label>
                                        <input type="password" class="form-control" id="password" required/>
                                        <br/>
                                        <a href="#" style="color:white;list-style:none;">Forgot password</a>
                                        <input style="float:right;" type="submit" class="btn btn-success" id="login" value="Login">
                                    </div>
                                <div class="panel-footer" id="e_msg"></div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li><a href="customer_registration.php"><span class="glyphicon glyphicon-user">SignUp</span></a>
                </li>
            </ul>
        </div>
    </div>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div id="get_category"></div>
                    <!--
                    <div class="nav-pills nav nav-stacked">
                     <li class="active"><a href="#"><h4>Categories</h4></a></li>
                    <li><a href="#">categories</a></li>
                    <li><a href="#">categories</a></li>
                    <li><a href="#">categories</a></li>
                    <li><a href="#">categories</a></li> 
                </div>-->
                <div id="get_brand"></div>
                <!--<div class="nav-pills nav nav-stacked">
                    <li class="active"><a href="#"><h4>Brands</h4></a></li>
                    <li><a href="#">brand</a></li>
                    <li><a href="#">brand</a></li>
                    <li><a href="#">brand</a></li>
                    <li><a href="#">brand</a></li>
                </div>-->
            </div>
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">Product</div>
                    <div class="panel-body">
                        <div id="get_product">
                        </div>
                       <!--  <div class="row">
                           <div class="col-md-3">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Home Deco</div>
                                    <div class="panel-body">
                                        <img src="pics/5.jpg" style="width:150px;height:150px" alt="panel-img"/>
                                    </div>
                                    <div class="panel-footer">$20,000.00 <button class="btn btn-xs btn-danger" style="float:right">AddToCart</button></div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="panel-footer">&copy;2019</div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>