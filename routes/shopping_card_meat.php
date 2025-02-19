


<?php
  session_start();
  include "../api/connection.php";
  if(!isset($_SESSION['userphone'])){
    header("location:routes/login.html");
  }

  $userphone=$_SESSION['userphone'];
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../bootstrap-5/css/bootstrap-grid.css">
  <title>Document</title>
</head>
<body>
  <section class="container-fluid">
    <h1 class="section-therd-H1">MEAT/FISH</h1>



    <section class="container-fluid sectio5">
                <div class="container">
                  <div class="row">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php
            include "../api/connection.php";
            $sql=mysqli_query($connect,"SELECT * FROM `add_product_m`");
            if (mysqli_num_rows($sql) > 0) {
              // print_r($query);
              $no=1;
          
              while($row=mysqli_fetch_assoc($sql)){

          
            echo'
              <div class="col">
                        <div class="card section5-img1">
                            <div class="section-therd-div1 ">
                                <form action="../api/bay_m.php" method="post" enctype="multipart/form-data">
                                    <img src="../p_upload/'.$row['p_img'].'"  class="therd-section-img" alt="">
                                    <h3 class="ection-therd-div1-p">Name:'.$row['p_name'].'</h3>
                                      <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">Price:'.$row['p_price'].'</h3>
                                      <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">'.$row['p_details'].'</h3>
                                    <input type="number" name="kg" placeholder="Enter vlaue per KG..">
                                    <br>
                                       <input type="file" name="photo" value="'.$row['p_img'].'" hidden />
                                      <input type="text" name="p_name" value="'.$row['p_name'].'" hidden />
                                          <input type="number" name="price" value="'.$row['p_price'].'" hidden />
                                           <input type="number" name="phone" value="'.$userphone.'" hidden />
                                       <input type="number" name="p_id" value="'.$row['p_id'].'" hidden />
                                 <select name="u_id" style="display:none;" id="dropbox">
                                     <option value="">buy</option>
                               
                                    </select>
                                    <button class="therd-a">Buy Now</button>
                                    </form>
                                </div>
                        </div>
                      </div>
            ';
    
              }
              }
            
                ?>
           
              
                </div>
              </div>
            </div>
          </section>
        
   
            

</section>
</body>
<script src="../bootstrap-5/js/bootstrap.bundle.js"></script>
</html>