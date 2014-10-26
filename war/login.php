<?php 
session_start();
$username = $_POST['uname'];
$password = $_POST['pwd'];
$user = 'admin';
$pass = '12345';

if(($user == $username ) && ($pass==$password))
{
 //ถ้าถูกต้อง
 $_SESSION['user']=$username;
 $_SESSION['status']="Online";
 $_SESSION['logged_in'] = 1;
  header("Location: Status.php");

}
else
{
//ถ้าไม่ถูกต้องให้กลับไปหน้าแรก
 header("Location: CNX.html");
}
 ?>