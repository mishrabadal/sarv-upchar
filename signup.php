<?php
include("databases.php");
$name = $_POST['name'];
$category = $_POST['category'];
$gender = $_POST['gender'];
$aadhar = $_POST['aadhar'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$reg_email = $_POST['reg_email'];
$psw = $_POST['psw'];

$psw = md5($_POST['psw']);

// echo $name;
// echo $email;
// echo $mobile;
// echo $category;
// echo $password;


$check_table = "SELECT * FROM signup_data";
$response = $db->query($check_table); 
if($response)
{
    // edit by point solution
    $store_data = "INSERT INTO  signup_data(
       name, category,gender,aadhar,dob,phone, reg_email, psw) VALUES ('$name', '$category', '$gender','$aadhar','$dob','$phone','$reg_email', '$psw')";
        $response = $db->query($store_data);
        if($response)
        {
         echo "success";
       // require("sendsms.php");
        }
        else{
            echo $db->error;
        echo "Unable to store data";
        }
          // edit by point solution
}
// else{
//      $create_table = "CREATE TABLE  signup_data(
//      id INT(11) NOT NULL AUTO_INCREMENT,
//     name VARCHAR(50), 
//     category VARCHAR(50), 
//     email VARCHAR(100),
//      mobile VARCHAR(20), 
//      password VARCHAR(150),
//       status VARCHAR(20) DEFAULT 'pending', 
//       reg_date DATETIME DEFAULT CURRENT_TIMESTAMP, 
//       PRIMARY KEY(id)
//       )";
//       $response = $db->query($create_table); 
//       if($response)
//       {
    
//         $store_data = "INSERT INTO  signup_data(
//        name, category, email, mobile, password) VALUES ('$name', '$category', '$email', '$mobile', '$password')";
//             $response = $db->query($store_data);
//             if($response)
//             {
//             echo "success";
//             //require("sendsms.php");
//             }
//             else{
//                 echo $db->error;
//             echo "Unable to store data";
//             }

//       }
//       else{
//       echo "Unable to create table";
//       }
// }


?>
