<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap-grid.css">
  
    <title>list</title>
</head>
<style>
    h1{
        text-align: center;
    }
    .div-main{
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }






/* _____________________________ */

.section-therd{
  padding-top: 50px;
  padding-bottom: 70px;
 display: flex;
 flex-direction: column;
 justify-content: center;
}
.section-therd-H1{
    text-align: center;
}
.section-therd-div-main{
    display: flex;
    padding-left: 100px;
    padding-right: 100px;
    justify-content: center;
}
.section-therd-div1{
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 6px;
    padding-bottom: 20px;
    box-shadow: 2px 2px 10px 2px;
    margin-left: 15px;
    margin-right: 15px;
    background-color: white;
    border-radius: 5px; 
    display: flex;
    flex-direction: column;
        justify-content: center;
        align-items: center;  
}
.therd-section-img{
    height: 150px;
}
.ection-therd-div1{
    text-align: center;
}
.section-therd-div1 input{
    width: 205px;
    margin-bottom: 5px;
   padding: 5px;
   outline: none;
}
.section-therd-div1 button{
 width: 220px;
 margin-bottom: 5px;
padding: 5px;
outline: none;
border: none;
font-size: 18px;
font-weight: 600;
background-color: rgb(47, 178, 30);
color: white;
border-radius: 4px;
}  
section{
  padding-bottom: 60px;
}
</style>
<body>
    <header>
        <h1>PRODUCTS ADDED</h1>
    </header>
    <hr>
    <section>
      <div class="div-main">
      <!-- div-1 -->
<!-- _____________________LETEST FOOD__________________________ -->
             <h1>LETEST FOOD</h1>
             <section class="container-fluid sectio5">
                <div class="container">
                  <div class="row">
                    <div class="row row-cols-1 row-cols-md-4 g-4">        
                      <!-- ________________________________ -->
                      <?php
            include "../api/connection.php";
            $sql=mysqli_query($connect,"SELECT * FROM `add_product`");
            if (mysqli_num_rows($sql) > 0) {
              // print_r($query);
              $no=1;
          
              while($row=mysqli_fetch_assoc($sql)){

            echo'
             <div class="col">
                        <div class="card section5-img6">
            
                            <div class="section-therd-div1 ">
                         
                                    <img src="../p_upload/'.$row['p_img'].'"  class="therd-section-img" alt="">
                                    <h3 class="ection-therd-div1-p">Name:'.$row['p_name'].'</h3>
                                     <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">Price:'.$row['p_orice'].'</h3>
                                       <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">'.$row['p_details'].'</h3>
                                   
                                   
                            
                                </div>
                        </div>
                      </div>
            
            ';
    
              }
              }
            
                ?>
                     
                      <!-- _____________ -->
                    </div>
                  </div>
                </div>
             
              </section>
           
              <!-- __________________FRUETS_____________________________ -->
              <h1>FRUETS</h1>
              <section class="container-fluid sectio5">
                <div class="container">
                  <div class="row">
                    <div class="row row-cols-1 row-cols-md-4 g-4">        
                      <!-- ________________________________ -->
                      <?php
            include "../api/connection.php";
            $sql=mysqli_query($connect,"SELECT * FROM `add_product_f`");
            if (mysqli_num_rows($sql) > 0) {
              // print_r($query);
              $no=1;
          
              while($row=mysqli_fetch_assoc($sql)){

            echo'
             <div class="col">
                        <div class="card section5-img6">
            
                            <div class="section-therd-div1 ">
                         
                                    <img src="../p_upload/'.$row['p_img'].'"  class="therd-section-img" alt="">
                                    <h3 class="ection-therd-div1-p">Name:'.$row['p_name'].'</h3>
                                     <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">Price:'.$row['p_price'].'</h3>
                                       <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">'.$row['p_details'].'</h3>
                                   
                                   
                            
                                </div>
                        </div>
                      </div>
            
            ';
    
              }
              }
            
                ?>
                     
                      <!-- _____________ -->
                    </div>
                  </div>
                </div>
              </section>
              
              <!-- __________________MEATS/FISH_____________________________ -->
              <h1>MEATS/FISH</h1>
              <section class="container-fluid sectio5">
                <div class="container">
                  <div class="row">
                    <div class="row row-cols-1 row-cols-md-4 g-4">        
                      <!-- ________________________________ -->
                      <?php
            include "../api/connection.php";
            $sql=mysqli_query($connect,"SELECT * FROM `add_product_m`");
            if (mysqli_num_rows($sql) > 0) {
              // print_r($query);
              $no=1;
          
              while($row=mysqli_fetch_assoc($sql)){

            echo'
             <div class="col">
                        <div class="card section5-img6">
            
                            <div class="section-therd-div1 ">
                         
                                    <img src="../p_upload/'.$row['p_img'].'"  class="therd-section-img" alt="">
                                    <h3 class="ection-therd-div1-p">Name:'.$row['p_name'].'</h3>
                                     <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">Price:'.$row['p_price'].'</h3>
                                       <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">'.$row['p_details'].'</h3>
                                   
                                   
                            
                                </div>
                        </div>
                      </div>
            
            ';
    
              }
              }
            
                ?>
                     
                      <!-- _____________ -->
                    </div>
                  </div>
                </div>
              </section>
              
              <!-- __________________VEGITABLES_____________________________ -->
              <h1>VEGITABLES</h1>
              <section class="container-fluid sectio5">
                <div class="container">
                  <div class="row">
                    <div class="row row-cols-1 row-cols-md-4 g-4">        
                      <!-- ________________________________ -->
                      <?php
            include "../api/connection.php";
            $sql=mysqli_query($connect,"SELECT * FROM `add_product_v`");
            if (mysqli_num_rows($sql) > 0) {
              // print_r($query);
              $no=1;
          
              while($row=mysqli_fetch_assoc($sql)){

            echo'
             <div class="col">
                        <div class="card section5-img6">
            
                            <div class="section-therd-div1 ">
                         
                                    <img src="../p_upload/'.$row['p_img'].'"  class="therd-section-img" alt="">
                                    <h3 class="ection-therd-div1-p">Name:'.$row['p_name'].'</h3>
                                     <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">Price:'.$row['p_price'].'</h3>
                                       <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">'.$row['p_details'].'</h3>
                                   
                                   
                            
                                </div>
                        </div>
                      </div>
            
            ';
    
              }
              }
            
                ?>
                     
                      <!-- _____________ -->
                    </div>
                  </div>
                </div>
              </section>
              
              <!-- __________________READY TO EAT_____________________________ -->
              <h1>READY TO EAT</h1>
              <section class="container-fluid sectio5">
                <div class="container">
                  <div class="row">
                    <div class="row row-cols-1 row-cols-md-4 g-4">        
                      <!-- ________________________________ -->
                      <?php
            include "../api/connection.php";
            $sql=mysqli_query($connect,"SELECT * FROM `add_product_r`");
            if (mysqli_num_rows($sql) > 0) {
              // print_r($query);
              $no=1;
          
              while($row=mysqli_fetch_assoc($sql)){

            echo'
             <div class="col">
                        <div class="card section5-img6">
            
                            <div class="section-therd-div1 ">
                         
                                    <img src="../p_upload/'.$row['p_img'].'"  class="therd-section-img" alt="">
                                    <h3 class="ection-therd-div1-p">Name:'.$row['p_name'].'</h3>
                                     <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">Price:'.$row['p_price'].'</h3>
                                       <h3 class="ection-therd-div1-p" style=" margin-top: -10px;">'.$row['p_details'].'</h3>
                                   
                                   
                            
                                </div>
                        </div>
                      </div>
            
            ';
    
              }
              }
            
                ?>
                     
                      <!-- _____________ -->
                    </div>
                  </div>
                </div>
              </section>
      </div>
    </section>
    <script src="../bootstrap-5/js/bootstrap.bundle.js"></script>
</body>
</html>