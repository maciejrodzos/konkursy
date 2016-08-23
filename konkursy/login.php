<?php

session_start();


if((!isset($_POST['login']))  || (!isset($_POST['password'])))
{
  header('Location: index.php');
  exit;
}

require_once "connect.php";

$connecting = @new mysqli($host, $db_user, $db_password, $db_name);

if ($connecting->connect_errno!=0)
{
  echo "Error: ".$connecting->connect_errno;
}
else
{
  $login = $_POST['login'];
  $password = $_POST['password'];

  $login = htmlentities($login, ENT_QUOTES, "UTF-8");
  $password = htmlentities($password, ENT_QUOTES, "UTF-8");

  if ($result = @$connecting->query(
  sprintf("SELECT * FROM users WHERE login='%s' AND password='%s'",
  mysqli_real_escape_string($connecting, $login),
  mysqli_real_escape_string($connecting, $password))))
  {
      $hmu = $result->num_rows;
      if($hmu>0)
      {
        $_SESSION['logged'] = true;
        $line = $result->fetch_assoc();
        $_SESSION['id'] = $line['id'];
        $_SESSION['login'] = $line['login'];
        $_SESSION['password'] = $line['password'];
        unset($_SESSION['error']);
        $result->close();
        header('Location: userui.php');
      }
      else
      {
        /* $_SESSION['error'] = '<span style="color: red; font-weight: bold;">Nieprawidłowy login lub hasło!</span>'; */
        header('Location: index.php');
      }
  }
  $connecting->close();
}

?>
