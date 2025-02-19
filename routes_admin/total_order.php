
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
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    h2{
        text-align: center;
        font-size: 50px;
    }
    table, th, td {
      border:1px solid black;
     
    }
    th{
        font-size: 30px;
        padding-left: 30px;
        padding-right: 30px;

    }
td{
    font-size: 20px;
    padding-left: 30px;
    padding-right: 30px;
}
h1{
    text-align: center;
    font-size: 40px;
}
    </style>
<body>
<h1>total Orders</h1>

    <section>
       
        <div>
           
<table style="width:100%">
    <tr>
    <th>No</th>

      <th>Phone.no</th>
      <th>Product id</th>
      <th>Name</th>
      <th>price</th>
      <th>kg</th>
      <th>Completea</th>
    </tr>
    <?php
    include "../api/connection.php";
    $sql=mysqli_query($connect,"SELECT * FROM `buy__db` ");
    if (mysqli_num_rows($sql) > 0) {
      // print_r($query);
      $no=1;
  
      while($row=mysqli_fetch_assoc($sql)){
        echo' 
                  <form action="../api/delet_total_order.php" method="post">
        <tr>
         <td>'.$no.'</td>
            <input type="number" name="u_id" value="'.$row['b_u_id'].'" hidden />
 
          <td>'.$row['u_phone'].'</td>
            <td>'.$row['b_u_id'].'</td>
      <td>'.$row['b_name'].'</td>
      <td>'.$row['b_price'].'</td>
      <td>'.$row['b_kg'].'</td>
      <td><button>complete</button></td>
    </tr>
    </form>
    ';
    $no=$no + 1;
      }
      }
    
        ?>
  </table>
        </div>
    </section>
</body>
</html>