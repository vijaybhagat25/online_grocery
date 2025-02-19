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
        font-size: 40px;
        padding-left: 10px;
        padding-right: 10px;

    }
td{
    font-size: 30px;
    padding-left: 10px;
    padding-right: 10px;
}
    </style>
<body>
    <div>

<h2>Total User</h2>

<table style="width:100%">
  <tr>
  <th>No</th>
    <th>Name</th>
    <th> phone </th>
    <th>email</th>
  </tr>
  <?php
  include "../api/connection.php";
  $sql=mysqli_query($connect,"SELECT * FROM `data1`");
  if (mysqli_num_rows($sql) > 0) {
    // print_r($query);
    $no=1;

    while($row=mysqli_fetch_assoc($sql)){
      echo' <tr>
       <td>'.$no.'</td>
    <td>'.$row['fname'].' '.' '.$row['lname'].'</td>
    <td>'.$row['phone'].'</td>
     <td>'.$row['email'].'</td>
  </tr>';
  $no=$no + 1;
    }
    }
  
      ?>
</table>
