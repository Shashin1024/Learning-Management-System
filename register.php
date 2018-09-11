<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Registration </title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/RegForm.css" type="text/css"/>    
</head>
      <body background="img/nsbm.jpg">
        
        <div class="reg-form"><center><h1><font color="grey"><b>Create New Account</b></font></h1></center>
        
            <section class="form" >



            <form action="mana.php" method="POST" >
                <div class="input uname1" method="POST">
                    <input type="text" id="entername" name="username" placeholder="Enter Username" required/>
                </div>
                <div class="input uname ">
                    <input type="text" id="entername" name="name" placeholder="Enter Name" required/>
                </div>
                <div class="input email ">
                    <input type="text" id="enteremail" name="email" placeholder="Enter Email" required/>
                </div>
                 <div class="input pass">
                    <input type="password" id="password" name="pwd1" placeholder="Password" required/>
                </div>
                <div class="input pass">
                    <input type="password" id="re-enterpassword" name="pwd2" placeholder="Re-Enter Password" required/>
                </div>
              
                   
             
                 <div>
                    <center><button class="btn" name="submit">Create Account</button></center>
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
          
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#create").click(function(){
                    if($("#name").val() == ""){
                        $(".input").addClass("error");
                        $("#name").css({"border":"2px solid red"});
                    }
                     if($("#ino").val() == ""){
                        $(".ino").addClass("error");
                         $("#ino").css({"border":"2px solid red"});
                    }     
                    })
                $(".input").click(function(){
                   $(".input").removeClass("error");
                    $("#name").css({"border":"2px solid #ddd"});
                    
                    $("#ino").css({"border":"2px solid #ddd"});
                    
                    
                })
                
                                  })              
                              
        </script>
        
 
    </body>

  

</html>









