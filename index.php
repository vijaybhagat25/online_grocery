


<?php
  session_start();
  include "api/connection.php";
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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap-grid.css">
    
    <title>Groco</title>
</head>
<style>
    
</style>
<body>
    <header>
        <nav>
            <ul>
                <a href="">Groco</a>
            </ul>
            <ul>
                <li><a href="">Home</a></li>

                <li><a href="routes/Orders.php">Orders</a></li>
                <li><a href="routes/about_us.php">About US</a></li>
                <li><a href="routes/contact_us.html">Contact US</a></li>
            </ul>
            <ul>
        
                <a class="user_id" href="routes/logout.php " style="color:black; font-size:18px;  cursor: pointer;">user</a>
                
             

                <a href="routes/login.html" class="header-first-button-login">login</a>
            </ul>
        </nav>
    </header>
    <div class="" style="height: 90px;"></div>
    <section class="section-first">
        <div class="section-first-div1">
            <h2 class="section-first-div1-h2">dont panic go organice.</h2>
            <h1>REACH FOR A HEALTHIER YOU WITH ORGANIC VEGITABLES</h1>
            <P class="section-first-div1-p"> A SUPERMARKET OR GROCERY STORE THAT ALLOWS ORDERING VIA WEBSITES
            </P>
            <a href="routes/about_us.php"><button class="section-first-button-about">About US </BUtton></a>
        </div>
    </section>
    <section class="section-second">
        <h1 class="section-second-h1">SHOP BY CATEGORY</h1>
        <div class="section-second-div-main">
            <!-- div_1 -->
            <div class="section-second-div1">
                <img src="img/frutes.jpg" class="second-section-img" alt="">
                <h2 class="section-second-h2">FRUITS</h2>
                <P class="section-second-p">GODD QALITY FRUITS ARE HERE   </P>
                <a href="routes/shopping_card_fruit.php" class="section-second-a">FRUITS VIEW</a>
            </div>
            <!-- div_2 -->
            <div class="section-second-div1">
                <img src="img/fish.jpg" alt="" class="second-section-img">
                <h2 class="section-second-h2">MEAT/FISH</h2>
                <P class="section-second-p">BEST QUALITY CHIKAEN AND FISH PICES HERE  </P>
                <a href="routes/shopping_card_meat.php">MEAT VIEW</a>
            </div>
            <!-- div_3 -->
            <div class="section-second-div1">
                <img src="img/vegitable.jpeg" alt="" class="second-section-img">
                <h2 class="section-second-h2">VEGITEBLE</h2>
                <P class="section-second-p">ORGANIC AND HEALDY VEGITABLE HERE  </P>
                <a href="routes/shopping_card_vegitable.php">VEGITE VIEW</a>
            </div>
            <!-- div_4 -->
            <div class="section-second-div1">
                <img src="img/rady.jpg" alt="" class="second-section-img">
                <h2 class="section-second-h2">READY TO EAT</h2>
                <P class="section-second-p">RADY PRODUCT AS A WEFAR BISKIT SODA CHIPS ARE HERE ORDER AND EAT  </P>
                <a href="routes/shopping_card_ready.php">RADY PRODUCTS</a>
            </div>

        </div>
    </section>
    <section class="container-fluid">
        <h1 class="section-therd-H1">LETEST FOODS</h1>
        <div class="container col-12 d-flex">

            <section class="container-fluid sectio5">
                <div class="container">
                  <div class="row">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php
            include "api/connection.php";
            $sql=mysqli_query($connect,"SELECT * FROM `add_product`");
            if (mysqli_num_rows($sql) > 0) {
              // print_r($query);
              $no=1;
          
              while($row=mysqli_fetch_assoc($sql)){

          
            echo'
              <div class="col">
                        <div class="card section5-img1">
                            <div class="section-therd-div1 ">
                                <form action="api/bay.php" method="post" enctype="multipart/form-data">
                                    <img src="p_upload/'.$row['p_img'].'"  class="therd-section-img" alt="">
                                    <h3 class="ection-therd-div1-p">Name:'.$row['p_name'].'</h3>
                                      <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">Price:'.$row['p_orice'].'</h3>
                                    <input type="number" name="kg" placeholder="Enter vlaue per KG..">
                                    <br>
                                       <input type="file" name="photo" value="'.$row['p_img'].'" hidden />
                                      <input type="text" name="p_name" value="'.$row['p_name'].'" hidden />
                                          <input type="number" name="price" value="'.$row['p_orice'].'" hidden />
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
            
       
                
        </div>
    </section>
    
       
    </footer>
</body>
<script src="bootstrap-5/js/bootstrap.bundle.js"></script>
</html>