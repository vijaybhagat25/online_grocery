
<?php
  session_start();
  include "../api/connection.php";
  if(!isset($_SESSION['userphone'])){
    header("location:../");
  }

  $userphone=$_SESSION['userphone'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
</style>
<body>
    <div>
    <?php
            $sql=mysqli_query($connect,"SELECT * FROM data1 WHERE phone=$userphone");
            if(mysqli_num_rows($sql)>0){
              $row=mysqli_fetch_assoc($sql);
             $_SESSION['userphone']=$userphone;
            
            }
            ?>
       <form action="../api/logout.php">
       <button>Logout</button>
       </form>
    </div>
</body>
</html>