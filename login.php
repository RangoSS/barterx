<?php
 include "hedds.php"
?>

<link rel="stylesheet" type="text/css" href="css/login2Style.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <div class="container bg-white " >
    <div class="" id="login" style="background-color: #4863A0" >
       
        <div class="container" id="login" >
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form shadow-lg p-3 mb-5 rounded" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-control errors" style=" background-color: #8E2121;display: none">
                            <span style="color: red;">error! check if your username or password is correct</span>
                            </div>
                            <div class="form-group">
                                <label for="Email" class="text-info">Email:</label><br>
                                <input type="email" name="email2" id="email2" class="form-control">
                                <span class="error_password" style="display: none;color: red">put correct email</span>
                            </div>
                            <div class="form-group">
                                <label for="passwords" class="text-info">Password:</label><br>
                                <input type="password" name="pwp" id="pwp" class="form-control">
                                <span class="error_password" style="display: none;color: red">put the correct passwors</span>
                            </div>
                            
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="button" name="submit" class="btn btn-info btn-md" value="submit" onclick="login();">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info" id="goToRegister" onclick="$('#login2').show();$('#login').hide()">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    <script type="text/javascript">
      //  $(document).ready(function(){
      //   $("#goToRegister").click(function(){
     //       location.href="register.php";
     //    });
    //    });
    </script>
<br>
<div class="container" style="background-color: #4863A0">
    <div id="login2" style="color: brown;display: none;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="height: auto;">
                        <form id="login-form" class="form mb-2" action="" method="post" style="height: auto;">
                            <input type="submit"name="submit" class="btn btn-info btn-md" value="Back" style="padding-top: 5%;" />
                            <h3 class="text-center text-info">Registration</h3>
                            <!--serial number div-->
                             <div class="form-group">
                               
                            </div>
                            <div class="form-group">
                                <label for="first_name" class="text-info">First Name:<span style="color: red;display: none">fill name*</span></label><br>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="last_name" class="text-info">Last Name:<span style="color: red;display: none">fill last name*</span></label><br>
                                <input type="text" name="last_name" id="last_name" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="radio" class="radio-inline" name="gender" id="gender" value="male" class="form-control">Male
                                <input type="radio" class="radio-inline" name="gender" id="gender" value="female" class="form-control">Female
                            </div>
                            
   
                            <div class="form-group">
                                <label for="username" class="text-info">Email:<span style="color: red;display: none">fill email*</span></label><br>
                                <input type="email" name="user_email" id="user_email" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="p_password" class="text-info">Passwords:<span style="color: red;display: none">fill Password*</span></label><br>
                                <input type="password" name="p_password" id="p_password" class="form-control stringed">
                            </div>
                    
                            <div class="form-group">
                                <label for="home_address" class="text-info">Home Address:<span style="color: red;display: none">fill address*</span></label><br>
                                <input type="text" name="home_address" id="home_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="postal_address" class="text-info"> Postal Address:<span style="color: red;display: none">fill address*</span></label><br>
                                <input type="text" name="postal_address" id="postal_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact" class="text-info">Contact:<span style="color: red;display: none">fill Contact*</span></label><br>
                                <input type="text" name="cellphone" id="cellphone" class="form-control numbers">
                            </div>
                             <div class="form-group">
                                <label for="contact" class="text-info">locations:<span style="color: red;display: none">fill Location*</span></label><br>
                                <input type="text" name="locations" id="locations" class="form-control numbers">
                            </div> 
                            
                            <div class="form-group">
                                <label for="user_type" class="text-info">Occupation:</label><br>
                                <input type="radio" class="radio-inline" name="user_type" id="user_type" value="student" class="form-control" >Student
                                <input type="radio" class="radio-inline" name="user_type" id="user_type" value="employee" class="form-control">Employee
                            </div>
                            <div class="file-field">
                           <div class="btn btn-outline-info waves-effect btn-sm float-left">
                           <span>Upload profile Image</span>
                           <input id="file" name="file" type="file">
                           </div><br><br>
                            <div class="form-group">
                                
                                <input type="submit" id="regis" name="submit" class="btn btn-info btn-md" value="submit" onclick="validateAfter();" />
                                <input type="button" id="display" name="display" class="btn btn-info btn-md" value="display" onclick="displayAlls();"  />
                                
                                <input type="reset" id="regis" name="submit" class="btn btn-info btn-md" value="Reset"  />
                                
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ends of forms-->
    <div id="displayForm" style="margin-right: 10%;border-style: solid;border-left-width: red;width: 40%;margin-top: -36%;float: right;color: white;background-color: grey;padding:5%;display: none;">
        <h1>Check if u entered correct Values</h1>
        <div class="displayme"></div>
    </div>
    </div>

</body>


<script>

//////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function login(){
  var emailt=$("#email2").val();
  var pwp=$("#pwp").val();
     
     console.log(emailt);
     console.log(pwp);
     
  $.ajax({

      url:"back_end.php",
      method:"POST",
      async:false,
      data:{action:"login",
            emailt:emailt,
            pwp:pwp },
     success:function(response){
  
    window.location.href=response;
  

      var ret =response;
      console.log(ret);
 
       
     }
  });
}

</script>




</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->




 


