<?php require_once('inc/connection.php') ?>


<?php 

    if(isset($_POST['submit'])){

        $errors = array();

        if(isset($_POST['username']) || strlen(trim($_POST['username'])) <1 ){
         $errors[] = 'Please Cheack Username or Password';
        }

        if(isset($POST['password']) || strlen(trim($_POST['password'])) <1 ){
         $errors[] = 'Please Cheack Username or Password';
        }

        if (empty($errors)){

            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);

            $query = "SELECT * FROM login
                      WHERE user_name = '{$username}' 
                      AND password = '{$password}' 
                      LIMIT 1 ";

  
            $result_set = mysqli_query($connection,$query);

            if($result_set){
                if(mysqli_num_rows($result_set) == 1){
                    //user found
                   // header('location:lms.php');

                }
                else{
                    //didnot found user
                    $errors = 'Invalid Username/Password';
                }
            }else {
                $errors = 'Database failed';
            }

        }



    }

 ?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>NSBM</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/loginstyle.css" type="text/css"/>    
</head>
    <body background="img/nsbm.jpg">
        <div class="login-form">
        <div class="login-face"><img src="img/User_Avatar-512.png"></div>
            <section class="form">
            <form action="lms.php" method="GET" name="signin">


                    <?php 

                        if(isset($errors) && !empty($errors)){
                            echo "Invalid Username/ Password";
                        }
                     ?>

                <div class="input uname ">
                    <input type="text" name="username" placeholder="Username" required/>
                    <i class="fa fa-user"></i>
                </div>
                 <div class="input pass">
                    <input type="password" name="password" placeholder="Password" required/>
                     <i class="fa fa-lock"></i>
                </div>
                <a href="#" style="float:right;color:gray;font-size:14px;text-decoration:none;font-family:sans-serif,fantasy;margin-bottom:10px">Lost Your Password?</a>
                   <p class="error-msg">Wrong Credential</p>
             
                 <div>
                    <input type="submit" id="login" value="LOGIN" name="submit" />
                </div>
                
            </form>
                </section>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#login").click(function(){
                    if($("#username").val() == ""){
                        $(".input").addClass("error");
                        $("#username").css({"border":"2px solid red"});
                    }
                     if($("#password").val() == ""){
                        $(".pass").addClass("error");
                         $("#password").css({"border":"2px solid red"});
                    }     
                    })
                $(".input").click(function(){
                   $(".input").removeClass("error");
                    $("#username").css({"border":"2px solid #ddd"});
                    
                    $("#password").css({"border":"2px solid #ddd"});
                    
                    
                })
                
                                  })              
                              
        </script>

     
    </body>

  

</html>


<?php mysqli_close($connection);  ?>