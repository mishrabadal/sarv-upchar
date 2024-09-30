<?php
include("databases.php");
$email = $_POST['email'];
$password = $_POST['password'];
//create
// $sql = "INSERT INTO student(email,password)VALUES('$email','$password')";
// $result = $db->query($sql);
// if($result)
// {
// echo "data inserted";
// }
// else{
//     echo $db->error;
// }
//read
$sql = "SELECT * FROM student";
$response= $db->query($sql);
echo "<table border='1'>
  <tr>
    <th>email</th>
    <th>password</th>
  </tr>";

 while($data = $response->fetch_assoc())
{
    echo "<tr><td>".$data['email']."</td>";
    echo "<td>".$data['password']."</td>";
    echo "</tr>";
}
echo "</table>"


// echo $email;
// echo $password;

?>