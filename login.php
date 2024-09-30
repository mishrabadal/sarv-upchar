<?php
include("./databases.php");
$email = $_POST['reg_email'];
$category = $_POST['category'];
$psw = $_POST['psw'];
$psw = md5($_POST['psw']);
// echo $email;
// echo $category;
// echo $psw;



$check_user= "SELECT reg_email,category,psw FROM signup_data   WHERE reg_email='$email' && category='$category' && psw='$psw'";
$response = $db->query($check_user);
if($response->num_rows !=0)
{
echo "user found";
$data = $response->fetch_assoc();
// $x = $id['id'];
// session_start();
// $_SESSION['id']= $x;
}
else{
 echo   "user not found";
}


?>