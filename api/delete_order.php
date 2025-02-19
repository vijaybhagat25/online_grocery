
<?php    
session_start();
 include "connection.php" ;


    $u_no = $_POST['u_id'];


 
        $delete = mysqli_query($connect,"DELETE FROM `buy__db` WHERE b_u_id='$u_no'");
        
      if ($delete) {
       
        echo'
        <script>
          alert("delet order");
   window.location = "../routes/Orders.php";
        </script>
        ';
       }
        else {
        echo'
        <script>
          alert("not delete order");
    window.location = "../routes/Orders.php";
        </script>
        ';
         }