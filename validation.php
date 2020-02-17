
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
