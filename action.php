<?php
    include "db.php";

    session_start();

    if(isset($_POST["category"])){
        $category_query = "SELECT * FROM categories";//fetch data from the categories table in database
        $run_query  =  mysqli_query($conn,$category_query);
        echo "
            <div class='nav-pills nav nav-stacked'>
            <li class='active'><a href='#'><h4>Categories</h4></a></li>
        ";
        if(mysqli_num_rows($run_query) > 0){
            while($row=mysqli_fetch_array($run_query)){
                $cid    =   $row['cat_id'];
                $cat_name   =$row['cat_title'];
                echo "
                   <li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
                ";   
            }
            echo "
                </div>
            ";
        }
    }
    
    if(isset($_POST["brand"])){
        $brand_query = "SELECT * FROM brands";
        $run_query  =  mysqli_query($conn,$brand_query);
        echo "
            <div class='nav-pills nav nav-stacked'>
            <li class='active'><a href='#'><h4>Brands</h4></a></li>
        ";
      if(mysqli_num_rows($run_query) > 0){
          while($row=mysqli_fetch_array($run_query)){
              $bid = $row['brand_id'];
              $brand_name = $row['brand_title'];
              echo "
                    <li><a href='#' bid='$bid' class='brand'>$brand_name</a></li>
              ";
          }
          echo "
            </div>
          ";
      }
    }

    if(isset($_POST["getProduct"])){
        $product_query  =   "SELECT * FROM product ORDER BY RAND() LIMIT 0,8";
        $run_query  =   mysqli_query($conn,$product_query);
        if(mysqli_num_rows($run_query) > 0){
            while($row=mysqli_fetch_array($run_query)){
                $pro_id =   $row['product_id'];
                $pro_cat  = $row['product_cat'];
                $pro_brand  = $row['product_brand'];
                $pro_name  =   $row['product_title'];
                $pro_price  =   $row['product_price'];
                $pro_desc = $row['product_desc'];
                $pro_image  = $row['product_img'];
                $pro_keywords = $row['product_keywords'];

                echo "
                <div class='col-md-3'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'>$pro_name</div>
                        <div class='panel-body'>
                            <img src='pics/$pro_image' style='width:150px;height:150px' alt='$pro_name'/>
                        </div>
                        <div class='panel-footer'>$$pro_price.00 <button pid='$pro_id' id='product' class='btn btn-xs btn-danger' style='float:right'>AddToCart</button></div>
                    </div>
                </div>
                ";
            }
        }
    }

    if(isset($_POST['get_selected_category']) || isset($_POST['selectedbrand']) || isset($_POST['search']) ){
        if(isset($_POST['get_selected_category'])){
            $id =  $_POST['cat_id'];
            $sql =  "SELECT * FROM product WHERE product_cat='$id'";
        }else if(isset($_POST['selectedbrand'])){
            $id =  $_POST['brand_id'];
            $sql =  "SELECT * FROM product WHERE product_brand='$id'";            
        }else {
            $keyword =  $_POST['keyword'];
            $sql =  "SELECT * FROM product WHERE product_keywords LIKE '%$keyword%'";                
        }
        $run_query =    mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($run_query)){
            $pro_id =   $row['product_id'];
            $pro_cat  = $row['product_cat'];
            $pro_brand  = $row['product_brand'];
            $pro_name  =   $row['product_title'];
            $pro_price  =   $row['product_price'];
            $pro_desc = $row['product_desc'];
            $pro_image  = $row['product_img'];
            $pro_keywords = $row['product_keywords'];

            echo "
            <div class='col-md-3'>
                <div class='panel panel-info'>
                    <div class='panel-heading'>$pro_name</div>
                    <div class='panel-body'>
                        <img src='pics/$pro_image' style='width:150px;height:150px' alt='$pro_name'/>
                    </div>
                    <div class='panel-footer'>$$pro_price.00 <button pid='$pro_id' id='product' class='btn btn-xs btn-danger' style='float:right'>AddToCart</button></div>
                </div>
            </div>
            ";
        }

    }
  
    if(isset($_POST['addToProduct'])){
        $p_id = $_POST['pId'];
        $user_id = $_SESSION['uid'];
        $sql = "SELECT * FROM cart WHERE pro_id='$p_id' AND user_id='$user_id' ";
        $run_query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($run_query);
        if(count > 0){
            echo "Product has already been added to Cart ..!";
        }else{
            $sql = "SELECT * FROM products WHERE product_id='$p_id'";
            $run_query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($run_query);
            $id = $row['product_id'];
            $pro_name = $row['product_title'];
            $pro_image = $row['product_img'];
            $pro_price = $row['product_price'];
            $sql = "INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`,
             `product_title`, `product_image`, `qty`, `price`,
              `total_amount`) VALUES (NULL, '$id', '0','$user_id', '$pro_name',
               '$pro_image', '1', '$pro_price', '$pro_price')";
            if(mysqli_query($conn,$sql)){
                echo "Product has been added..!";
            }
    }

    }

?> 