<?php
session_start();
include "connection.php";
$mobile = $_POST['phone'];
$password = $_POST['password'];

$admin_m="admin";
$admin_p=123;

$check = mysqli_query($connect, "SELECT * FROM data1 WHERE phone = '$mobile' AND password = '$password'" );

$check2 = mysqli_query($connect, "SELECT * FROM data1 WHERE  fname= 'admin' AND password = '$password'" );


if (mysqli_num_rows($check) > 0) {


$status="Login";
$sql=mysqli_query($connect,"UPDATE data1 SET status = '$status' WHERE data1.phone = $mobile");


    $userdata = mysqli_fetch_array($check);
    // $_SESSION['userdata'] = $userdata;
    $_SESSION['userphone'] = $mobile;


  echo '
        <script>
        alert("successfull login!");
          window.location = "../";
        </script>
        ';
}
elseif (mysqli_num_rows($check2) > 0) {
 
  echo '
        <script>
        alert(" login in admin");
          window.location = "../routes_admin/home.html";
        </script>
        ';
}

else {
  echo '
      <script>
        alert("invalid Credentials or user not found!");
        window.location = "../routes/login.html";
      </script>
      ';    
}


?>