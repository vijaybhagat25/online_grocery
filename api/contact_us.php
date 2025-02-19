
<?php    
    session_start();
 include "connection.php" ;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $message = $_POST['message'];
    
    
        $insert = mysqli_query($connect,"INSERT INTO `contect_us` (`name`, `email`, `phone`, `message`)
         VALUES ('$name', '$email', '$mobile', '$message')");
        
      if ($insert) {
        echo'
        <script>
          alert("message send successfull..");
             window.location = "../routes/contact_us.html";
        </script>
        ';
       }
        else {
        echo'
        <script>
          alert("some error message not send.!!");
           window.location = "../routes/contact_us.html";
        </script>
        ';
         }
