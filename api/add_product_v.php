
<?php    
    session_start();
 include "connection.php" ;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['categary'];
    $diteil = $_POST['detail'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];


    move_uploaded_file($tmp_name, "../p_upload/$image");
    $uniq_id=rand(time(),100000000);
    $vegitable="vegitable";
            $insert = mysqli_query($connect,"INSERT INTO `add_product_v` (`p_name`, `p_img`, `p_price`, `p_details`, `p_id`, `category`)
             VALUES ('$name','$image', '$price', '$diteil',   '$uniq_id','$vegitable')");
        
      if ($insert) {
        echo'
        <script>
          alert("Add successfull!");
        window.location = "../routes_admin/add_vegitable.html";
        </script>
        ';
       }
        else {
        echo'
        <script>
          alert("some error not add product");
      window.location = "../routes_admin/add_vegitable.html";
        </script>
        ';
         }
?>