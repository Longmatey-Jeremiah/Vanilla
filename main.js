$(document).ready(function(){
    //after loading the page
    cat();//call cat() function
    brand();//call brand() function
    product();//call product() function
    function diplay_categories(){
        $.ajax({
            url     :   "action.php",
            method  :   "POST",
            data    :   {category:1},
            success :   function(data){
                $("#get_category").html(data);
            }
        })
    }
    function display_brands(){
        $.ajax({
            url     :   "action.php",
            method  :   "POST",
            data    :   {brand:1},
            success :   function(data){
                $("#get_brand").html(data);
            }
        })

    }
    function product(){
        $.ajax({
            url     :   "action.php",
            method  :   "POST",
            data    :   {getProduct:1},
            success :   function(data){
                $("#get_product").html(data);
            }
        })
    }

    $("body").on("click",".category",function(event){
        event.preventDefault();
        var cid =  $(this).attr('cid');
        $.ajax({
            url     :   "action.php",
            method  :   "POST",
            data    :   {get_selected_category:1,cat_id:cid},
            success :   function(data){
                $("#get_product").html(data);
            }
        })
    })

    $("body").on("click",".brand",function(event){
        event.preventDefault();
        var bid =  $(this).attr("bid");
        $.ajax({
            url     :   "action.php",
            method  :   "POST",
            data    :   {selectedbrand:1,brand_id:bid},
            success :   function(data){
                $("#get_product").html(data);
            }
        })
    })

    $("#search_btn").click(function(){
        var keyword =$("#search").val();
        if(keyword!=""){
            $.ajax({
                url     :   "action.php",
                method  :   "POST",
                data    :   {search:1,keyword:keyword},
                success :   function(data){
                    $("#get_product").html(data);
                }
            })
        }
    })

    $("#signup_btn").click(function(event){
        event.preventDefault();
        $.ajax({
            url     :   "register.php",
            method  :   "POST",
            data    :   $("form").serialize(),
            success :   function(data){
                $("#signup_msg").html(data);
            }
        })
    })
    //onclick of login button this should happen 
    $("#login").click(function(event){
        event.preventDefault();
        var email   = $("#email").val();//assign data inputed in the email input to a variable
        var passw    = $("#password").val();//assign data inputed in the password input to a variable
        $.ajax({
            url     :   "login.php",//send data to this page
            method  :   "POST",
            data    :   {userLogin:1,userEmail:email,userPassword:passw},//data to be sent to action page
            success :   function(data){ 
                // what should happen if data is sent to action page successfully 
                if(data == "Hello"){
                   window.location.href = "profile.php";   /*send user to this(if email 
                                                           and password exist in the the database and it is 
                                                           only one user that has that email and password)*/                                                        
             }
                
            }
        })
    })

    $("body").delegate("#product","click",function(event){
        event.preventDefault();
        var p_id = $(this).attr('pid');
        $.ajax({
            url     :   "action.php",
            method  :   "POST",
            data    :   {addToProduct:1,pId:p_id},
            success :   function(data){
                alert(data);
            }
        })
    })
})
