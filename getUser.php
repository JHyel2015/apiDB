<?php
// Archivo (getUser.php)

require 'conexion.php'; // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB
// $conexion = conexion(); // CREA LA CONEXION
// REALIZA LA QUERY A LA DB
$user = [];
$sql = 'SELECT * FROM users WHERE uid=\''.$_GET["uid"].'\'';

if($result = mysqli_query($con,$sql))
{
  $i = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $user[$i]['user_id']    = $row['user_id'];
    $user[$i]['uid'] = $row['uid'];
    $user[$i]['user_name'] = $row['user_name'];
    $user[$i]['userfullname'] = $row['userfullname'];
    $user[$i]['usercedula'] = $row['usercedula'];
    $user[$i]['useremail'] = $row['useremail'];
    $user[$i]['useraddress'] = $row['useraddress'];
    $user[$i]['userphone'] = $row['userphone'];
    $user[$i]['userphone2'] = $row['userphone2'];
    $user[$i]['userfacebook'] = $row['userfacebook'];
    $user[$i]['userpassword'] = $row['userpassword'];
    $user[$i]['created_at'] = $row['created_at'];
    $i++;
  }

  echo json_encode($user);
}
else
{
  http_response_code(404);
}

header('Content-Type: application/json');
?>
