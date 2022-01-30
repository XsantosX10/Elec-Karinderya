<?php
 include 'config.php';
 session_start();
 if(ISSET($_SESSION['username'])){
   header("Location: welcome.php");
 }
error_reporting(0);

 if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);

       if ($password == $cpassword){
         $sql = "SELECT * FROM account WHERE email='$email' ";
         $result = mysqli_query($conn, $sql);
         if (!$result->num_rows > 0){
           $sql = "INSERT INTO account (username, email, password)
                 VALUES ('$username', '$email', '$password')";
           $result = mysqli_query($conn,  $sql);
                       if($result){
                         echo "<script> alert('User Registration Completed')</script>";
                         $username = "";
                         $email = "";
                         $_POST['password'] = "";
                         $_POST['cpassword'] = "";
                       } else {
                        echo "<script> alert('Something Went Wrong.')</script>";
                       }
         } else{
              echo "<script> alert('Email Already Exists.')</script>";
         }

   }else{
     echo "<script> alert('Password Not Matched')</script>";
   }
 }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SignUp.css">
    <title>Sign-up | newResto</title>
  </head>
  <body>
          <section>
            <div class="company">
                  <img src="logo.png" alt="logo">
                  <h3>E-Karinderya</h3>
            </div>
            <h2>Create your Account</h2>
            <div class="signUp-body">
                <form action= "" method="POST" class="signUp-form" action="index.html" method="post">
                          <div class="">
                                  <p>Your Username</p>
                                  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your username" required>
                          </div>
                          <div class="">
                                  <p>Email Address</p>
                                  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email address" required>
                          </div>
                          <div class="">
                                  <p>Password</p>
                                  <input type="password" name="password" value="<?php echo $_POST['password']; ?>" placeholder="Enter your password" required>
                          </div>
                          <div class="">
                                  <p>Confirm Password</p>
                                  <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" placeholder="Re-enter your password" required>
                          </div>

                                  <button name="submit">Register</button>

                          <div class="alreadyMem">
                                      <p>Already a member?</p>
                                      <a href="SignIn.php">Go to Sign-in</a>
                          </div>
                </form>
            </div>

          </section>
  </body>
</html>
