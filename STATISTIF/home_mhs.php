<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STATISTIF | Home</title>
	<link rel="website icon" type="png" href="himatif.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="homemhs.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Didact+Gothic&display=swap" rel="stylesheet">


</head>
<body>
	<input type="checkbox" id="check">
	<label for="check">
		<i class="fa fa-list-ul" id="btn"></i>
		<i class="fa fa-times" id="cancel"></i>
	</label>
	<div class="sidebar">
	<header class="lun"><a href="home.php"><img src="Logo.png"></a></header>
		<ul>
			<li><a href="tif22.php"><i class="fa fa-user fa-fw"></i>TIF 2022</a></li>
			<li><a href="tif21.php"><i class="fa fa-user fa-fw"></i>TIF 2021</a></li>
			<li><a href="tif20.php"><i class="fa fa-user fa-fw"></i>TIF 2020</a></li>
			<li><a href="hasilvotin.php"><i class="fa fa-star"></i>Dosen</a></li>
			<li><a href="hasilvotin2.php"><i class="fa fa-star"></i>Mata Kuliah</a></li>
			<li><a class="logout" href="logout.php"><i class="fa fa-unlock-alt"></i>Log Out</a></li>
		</ul>
	</div>
	<section>
		<table border="0">
		<tr>
			<td>
				<img class="pic1" src="Male.jpg">
			</td>
			<td>
				<h1 class="desc1"><b>Hi <?php echo $_SESSION['name']; ?>, Selamat Datang di STATISTIF</b></h1>
				<p class="desc11">sebuah situs yang memuat data Statistik mahasiswa Teknologi Informasi.</p>
			</td>
		</tr>
		<tr>
			<td>
				<h1 class="desc2">Menyajikan Visualisasi Data</h1>
				<p class="desc21">visualisasi data kedalam bentuk diagram, grafik dan lainnya.</p>	
			</td>
			<td>
				<img class="pic2" src="pic1.jpg">
			</td>
		</tr>		
		</table>
		<div class="vote">Voting</div>
		<div class="descvote">Voting sekarang untuk memenuhi kebutuhan data dalam berbagai jenis kategori</div>
	<div class="container">
		<div class="card">
			<img class="image" src="img/comingsoon.png">	
		</div>
		<div class="card">
			<a href="votin.php"><img class="image" src="img/vdosen.png"></a>	
		</div>
		<div class="card">
			<a href="votin2.php"><img class="image" src="img/vmk.png"></a>		
		</div>
	</div>
			
	</section>
	<table  class="last" border="0">
		<tr>
			<td>
				<div class="leftdesc">STATISTIF adalah sebuah platform online yang menyediakan akses mudah dan cepat ke berbagai data yang disajikan dalam bentuk diagram. Dengan menggunakan alat ini, pengguna dapat dengan mudah membaca, menganalisis, dan memahami informasi yang terkandung dalam data tersebut.</div>
			</td>
			<td>
				<div class="rightdesc">Salah satu fitur unggulan dari STATISTIF adalah kemampuannya untuk mengubah data kompleks menjadi visualisasi yang lebih sederhana dan mudah dipahami. Platform ini menawarkan berbagai jenis diagram yang populer, seperti diagram batang, diagram garis, diagram lingkaran, dan diagram area. Setiap jenis diagram dapat disesuaikan dengan preferensi pengguna, termasuk pemilihan warna, tampilan sumbu, dan label data.</div>
			</td>
		</tr>
	</table>



</body>
<footer>
	<p>Copyright	|	Universitas Teuku Umar</p> 
	<p>Email		|	kampusutu@gmail.com</p> 
</footer>
</html>

<?php
}else{
		header("Location: home.php");
		exit();
}
?>