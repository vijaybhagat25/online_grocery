
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
    body{
        display: flex;
        justify-content: center;
    }
    div{
        height: 400px;
        margin-top: 60px;
        flex-direction: column;
        width: 400px;
        padding: 40px;
        text-align: center;
        box-shadow: 5px 10px 15px;
        border-radius: 10px;

    }
    
     p{
        font-size: 30px;
     }
     button{
        width: 400px;
        font-size: 25px;
        height: 50px;
        font-weight: 500;
        background-color: rgb(47, 178, 30);
    color: white;
    border: none;
    outline: none;
    border-radius: 10px;
    cursor: pointer;
     }
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
    <img src="../img\profile.jpeg" alt="" style="height:150px;">
        <p><?php echo $row['fname']." ". $row['lname']?></p>
       <button>Update Profile</button>
       <br>
       <br>
   
       <form action="../api/logout.php">
       <button>Logout</button>
       </form>
    </div>
</body>
</html>