<?php
// define variables and set to empty values
$firstname = $lastname = $username =$password = $confirmpass ="";
$firstnameErr = $lastnameErr = $usernameErr =$passwordErr = $confirmpassErr ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["FirstName"])) {
    $firstnameErr = "Name is required";
  } else {
    $firstname = test_input($_POST["FirstName"]);
  }

  if (empty($_POST["LastName"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lastname = test_input($_POST["LastName"]);
  }

  if (empty($_POST["UserName"])) {
    $usernameErr = "Input username";
  } else {
    $username = test_input($_POST["UserName"]);
  }

  if (empty($_POST["Password"])) {
    $password = "Input password";
  } else {
    $password = test_input($_POST["Password"]);
  }

  if (empty($_POST["Confirmpass"])) {
    $confirmpass = "input password";
  } elseif ($_POST["Password"] != $_POST["Confirmpass"]) {
    $passwordErr = "Passwords dont match";
  }else {
    $confirmpass = test_input($_POST["Confirmpass"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sign up form</title>
   </head>
   <body>
     <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       <label for="">First Name:</label>
       <input type="text" name="FirstName" ><br>
       <?php echo $firstnameErr;?>
       <br><br>

       <label for="">Last Name:</label>
       <input type="text" name="LastName"><br>
       <?php echo $lastnameErr;?>
       <br>

       <label for="">User Name:</label>
       <input type="text" name="UserName"><br>
       <?php echo $usernameErr;?>
       <br>

       <label for="">Password:</label>
       <input type="password" name="Password"><br>
       <?php echo $passwordErr;?>
       <br>

       <label for="">Confirm Password:</label>
       <input type="password" name="Confirmpass"><br>
       <?php echo $confirmpassErr;?>
       <br>

       <input type="radio" name="gender" value="male"> Male
       <input type="radio" name="gender" value="female"> Female
       <input type="radio" name="gender" value="other"> Other

       <br>


       <input type="submit">

     </form>

   </body>
 </html>


 <?php

 // include('myfunctions.php');
 // include('validation.php');

 if(isset($_POST['FirstName']) && isset($_POST['LastName'])){

    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $username = $_POST['UserName'];
    $password = $_POST['Password'];
    $confirmpass = $_POST['Confirmpass'];

  }

  echo "<h2>Your Input:</h2>";
  $hashpass = md5($password);
  echo $firstname;
  echo "<br>";
  echo $lastname;
  echo "<br>";
  echo $username;
  echo "<br>";
  echo $password;
  echo "<br>";
  echo $confirmpass;
?>
