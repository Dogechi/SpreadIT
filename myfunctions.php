<?php

function userDetails($firstname,$lastname,$username,$password,$confirmpass)
{
  // code
  $hashpass = md5($password);
  echo "<h2>Your Input:</h2>";
  echo $firstname;
  echo "<br>";
  echo $lastname;
  echo "<br>";
  echo $username;
  echo "<br>";
  echo $password;
  echo "<br>";
  echo $confirmpass;

}

?>
