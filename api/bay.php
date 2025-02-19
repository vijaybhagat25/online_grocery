
<?php    
session_start();
 include "connection.php" ;


    $p_name = $_POST['p_name'];
    $kg = $_POST['kg'];
    $price = $_POST['price'];
    $u_id = $_POST['p_id'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $u_phone= $_POST['phone'];

      move_uploaded_file($tmp_name, "../upload/$image");
        $insert = mysqli_query($connect,"INSERT INTO `buy__db` ( `b_name`, `b_price`, `b_kg`, `b_u_id`,`u_phone`) 
        VALUES ( '$p_name', '$price', '$kg', '$u_id', '$u_phone')");
        
      if ($insert) {
       
        echo'
        <script>
          alert("Buy Now");
        window.location = "../";
        </script>
        ';
       }
        else {
        echo'
        <script>
          alert(" not insert some error occured");
        window.location = "../";
        </script>
        ';
         }
