<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Usuarios</title>
    <!-- BOOSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<nav class="navbar-dark bg-dark">
<div class="container">
      <?php 
                        $sql="SELECT * FROM user";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        
                         
         if ($row[('rol')]=='1') {
       ?> <a href="" class="navbar-brand">Administrador</a>
       <?php
       } else {
          ?><a href="" class="navbar-brand">Usuario</a>
          <?php    
         }
               ?>           
    
</div>

</nav>