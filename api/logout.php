<?php
session_start();
if(isset($_SESSION['userphone'])){
    include "connection.php";
    $logout_id=mysqli_real_escape_string($connect,$_GET['logout_id']);
    if (isset($logout_id)) {
      $mobile=$_SESSION['userphone'];
       $status="logout";
       $sql=mysqli_query($connect,"UPDATE data1 SET status = '$status' WHERE data1.phone = $mobile");
       if ($sql) {
       session_unset();
       session_destroy();
       echo '
       <script>
       alert("successfull logout!");
         window.location = "../routes/login.html";
       </script>
       ';
       }
       else {
        header("location:../");
       }
    }
}else{
    header("location:../");
}
?>