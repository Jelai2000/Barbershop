<?php
session_start();

include("connect.php");
include("function.php");


 if($_SERVER['REQUEST_METHOD'] == "POST")
 
 {
   // something is posted
   $email= $_POST['email'];
   $password = $_POST['password'];
   

   if(!empty($email) && !empty($password) )
   {
     //read from database
     
     $query = "select * from users where email = '$email' limit 1";
     $result = mysqli_query($con,$query);
     
     if($result)
     {
      if ($result && mysqli_num_rows($result) > 0)
         {

          $user_data = mysqli_fetch_assoc($result);
          if($user_data['password'] == $password)
            {

             $_SESSION['user_id'] = $user_data['user_id'];
             header("Location: index.php");
             die;
            }
        
         }
     }
     else
      {
      echo "Invalid information";
      }
   }
 }


?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/x-icon" href="../gallery/favicon.png">

    <title>BRANDO</title>
</head>
<body>
    <div class="main">
  
        <a href="./homepage.php"><img src="../gallery/about-us/close-tab.png" alt="close-button"></a>
           
            

        <div class="login">
         
          
         <div class="login-text">
          <h2>Log in</h2>
         </div>
         <form action="#" class="form" method="POST">
                <div class="section">
                    <input type="text" placeholder="Email" name="email" id="email"  required maxlength="55">
                </div>
               
               

                <div class="section">
                    <input type="password" placeholder="Password" name="password" id="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                </div>


                <div class="sections">
                    <input type="checkbox" name="remember" id="remember" value="Remember Me">
                    <label for="remember">Remember Me</label>
                       
                </div>
                  
                <div class="buttons">
                    <input type="submit" value="Log in">
                    <p>or use your social media account</p> 
                </div>
                <div class="social-media">
                 <div class="sections">
                  <img src="../gallery/about-us/facebook.png" alt="facebook-icon">
                 </div>
                 <div class="sections">
                  <img src="../gallery/about-us/gmail.png" alt="gmail-icon">
                 </div>
                 
                 <div class="sections">
                  <img src="../gallery/about-us/linkedin.png" alt="linkedin-icon">
                 </div>
                </div>
                <div class="footer">
                 <hr>
                 <span>Not a member yet? <a href="signup.php">Sign Up.</a></span>
                </div>
                </div>
            </form>

           
            





        </div>

        




    </div>
</body>
</html>