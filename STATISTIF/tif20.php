<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STATISTIF | Let2021</title>
    <link rel="website icon" type="png" href="himatif.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="tifstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Didact+Gothic&display=swap" rel="stylesheet">
      <style>
          body {
            background-image: url("img/maintenance.png");
            background-repeat: no-repeat;
            background-size: cover;
          }
  </style>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fa fa-list-ul" id="btn"></i>
        <i class="fa fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header class="lun"><a href="home_mhs.php"><img src="Logo.png"></a></header>
        <ul>
            <li><a href="tif22.php"><i class="fa fa-user fa-fw"></i>TIF 2022</a></li>
            <li><a href="tif21.php"><i class="fa fa-user fa-fw"></i>TIF 2021</a></li>
            <li><a href="tif20.php"><i class="fa fa-user fa-fw"></i>TIF 2020</a></li>
            <li><a href="hasilvotin.php"><i class="fa fa-star"></i>Dosen</a></li>
            <li><a href="hasilvotin2.php"><i class="fa fa-star"></i>Mata Kuliah</a></li>
            <li><a class="logout" href="logout.php"><i class="fa fa-unlock-alt"></i>Log Out</a></li>
        </ul>
    </div>


</body>
</html>

<?php
}else{
        header("Location: home_mhs.php");
        exit();
}
?>