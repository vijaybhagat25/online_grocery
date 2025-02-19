
<?php    
    session_start();
 include "connection.php" ;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['c_password'];

    
    if ($password==$cpassword) {
  
        $insert = mysqli_query($connect,"INSERT INTO `data1` ( `fname`, `lname`, `phone`, `email`, `password`) 
        VALUES ( '$fname', '$lname', '$mobile', '$email', '$password');");
        
      if ($insert) {
        echo'
        <script>
          alert("registration successfull!");
        window.location = "../routes/login.html";
        </script>
        ';
       }
        else {
        echo'
        <script>
          alert("some error occured");
        window.location = "../routs/registretion.html";
        </script>
        ';
         }
    } 
    else{
        echo'
        <script>
          alert("password and confirm password does not match!");
        window.location = "../routs/registretion.html";
        </script>
        ';
    }