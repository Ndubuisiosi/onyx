<?php
require ("dbsetup.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Onyx Test </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   
</head>
<body>
<div class='container-fluid'>
  <div class='row'>
    <div class='col-12'>
      <div class ='card'>

          <div class='card-header'>
            <h3 class='card-title'> JSON Placeholder Post</h3>
          </div>
    
            <div class ='card-body'>
              <table id='1' class='table table-hover table-responsive'>
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                  </tr>
                </thead>
                  
                <tbody>
                  <?php 
                
                  $sql = "SELECT * FROM onyx ORDER BY userId ASC LIMIT 10";
                  $result = mysqli_query($connection, $sql);
                  
                  while($row = mysqli_fetch_assoc($result)){
                    
                    $userId = $row['userId'];
                    $id = $row['id'];
                    $title = $row['title'];
                    $body = $row['body'];
        
                ?>
                                    
                <tr style="width: 1px; white-space: nowrap;" >
                  <td> <?php echo $userId ?> </td> 
                  <td> <?php echo $id ?> </td> 
                  <td> <?php echo $title ?> </td> 
                  <td> <?php echo $body ?> </td> 
                </tr>
        
                <?php } ?>
        
                </tbody>
              </table>
            </div>
       </div>
    </div>
  </div>
</div>
      <script src="test.js"></script>
</body>
</html>



