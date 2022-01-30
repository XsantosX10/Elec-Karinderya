<?php
      include 'config.php';

      session_start();
      if(ISSET($_SESSION['username'])){
        header("Location: welcome.php");
      }

      if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $sql = "SELECT * FROM account WHERE email='$email' AND password='$password' ";
            $result = mysqli_query($conn, $sql);
            if($result->num_rows > 0){
                  $row = mysqli_fetch_assoc($result);
                  $_SESSION['username'] = $row['username'];
                  header("Location: welcome.php");
            } else {
                  echo "<script> alert('Wrong Email or Password!')</script>";
            }
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="SignIn.css">
    <title>Sign in | newResto</title>
  </head>
  <body>
          <section class="signIn">
                    <div class="signIn-body">
                                  <form class="signIn-form" action="" method="POST">
                                          <div class="company">
                                                <img src="logo.png" alt="logo">
                                                <h3>E-Karinderya</h3>
                                          </div>
                                          <h2>Sign In</h2>
                                          <div class="signIn-user">
                                                <p>Email</p>
                                                <input type="email" name="email" placeholder="Enter your email" required>
                                          </div>

                                          <div class="signIn-password">
                                                <p>Password</p>
                                                <input type="password" name="password"  placeholder="Enter your password" required>
                                          </div>

                                            <button name="submit">Sign In</button>

                                            <div class="account">
                                                <p>Don't have an account?</p>
                                                <a href="SignUp.php">Create account</a>
                                            </div>
                                  </form>

                                  <article class="signIn-side">
                                        <h1>Welcome back !</h1>
                                        <div class="companyName">
                                          <img src="logo.png" alt="">
                                          <h2>E-Karinderya</h2>
                                        </div>
                                        <p>A Simple, Convenient and Cost - Efficient Web-based Food Market </p>
                                  </article>
                    </div>
          </section>

          <section>

          </section>
  </body>
</html>
