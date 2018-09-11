


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login page</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sty_loggin.css" type="text/css"/>    
</head>
  <body background="img/nsbm.jpg">
        <div class="login-form"> <center><h1><font color="grey"><b>Student Login</b></font></h1></center>
        <div class="login-face"><img src="img/User_Avatar-512.png"></div>
            <section class="form">

            
            <form action="lms.php" method="POST" name="signin">


                <div class="input uname ">
                    <input type="text" id="username" placeholder="Username" required/>
                    <i class="fa fa-user"></i>
                </div>
                 <div class="input pass">
                    <input type="password" id="password" placeholder="Password" required/>
                     <i class="fa fa-lock"></i>
                </div>
                   <p class="error-msg">Wrong Credential</p>
                <a href="#" style="float:right;color:gray;font-size:14px;text-decoration:none;font-family:sans-serif,fantasy;margin-bottom:10px">Lost Your Password ?</a>
             
                 <div>
                    <input type="submit" id="login" value="LOGIN" />
                </div>
                
                <br/>
                 <a href="Reg-form.php" style="float:right;color:gray;font-size:14px;text-decoration:none;font-family:sans-serif,fantasy;margin-bottom:10px">Create New Account</a>
            </form>
                </section>
        </div>
         <div class="login-form-1"><center><h1><font color="grey"><b>Lecturers Login</b></font></h1></center>
        <div class="login-face"><img src="img/User_Avatar-512.png"></div>
            <section class="form">
            <form>
                <div class="input uname ">
                    <input type="text" id="username" placeholder="Username" required/>
                    <i class="fa fa-user"></i>
                </div>
                 <div class="input pass">
                    <input type="password" id="password" placeholder="Password" required/>
                     <i class="fa fa-lock"></i>
                </div>
                
                   <p class="error-msg">Wrong Credential</p>
                
                <a href="#" style="float:right;color:gray;font-size:14px;text-decoration:none;font-family:sans-serif,fantasy;margin-bottom:10px">Lost Your Password?</a>
             
                 <div>
                    <input type="submit" id="login" value="LOGIN" />
                </div>
                <br/>
                 
                
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

