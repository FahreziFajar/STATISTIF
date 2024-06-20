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
	<link rel="stylesheet" type="text/css" href="speakfree.css">
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
	<header class="lun"><a href="home_dosen.php"><img src="Logo.png"></a></header>
		<ul>
			<li><a href="tif22.php"><i class="fa fa-user fa-fw"></i>TIF 2022</a></li>
			<li><a href="tif21.php"><i class="fa fa-user fa-fw"></i>TIF 2021</a></li>
			<li><a href="notfound.php"><i class="fa fa-user fa-fw"></i>TIF 2020</a></li>
			<li><a href="hasilvotin.php"><i class="fa fa-star"></i>Dosen</a></li>
			<li><a href="matkul.php"><i class="fa fa-star"></i>Mata Kuliah</a></li>
			<li><a href="speakfree.php"><i class="fa fa-user fa-fw"></i>SpeakFree</a></li>
			<li><a class="logout" href="logout.php"><i class="fa fa-unlock-alt"></i>Log Out</a></li>
		</ul>
	</div>

	<div>
		<h1 class="title21">Mahasiswa Teknologi informasi 2021</h1>
		<h2>Universitas Teuku Umar</h2>
  		<div style="position:absolute; top:30%; left:50%; width:450px; height:550px">
    		<canvas id="line-chart"></canvas>
  		</div>
  		<div style="position:absolute; top:30%; left:10%; width:450px; height:550px">
    		<canvas id="bar-chart"></canvas>
  		</div>
  		</div>
  		<div style="position:absolute; top:70%; left:30%; width:450px; height:550px">
    		<canvas id="pie-chart"></canvas>
  		</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
		new Chart(document.getElementById("line-chart"), {
			type : 'line',
			data : {
				labels : [ "Semester 1","Semester 2","Semester 3","Semester 4","Semester 5","Semester 6","Semester 7","Semester 8"],
				datasets : [
						{
							data : [ 4.0, 3.85, 3.93, 0.00, 0.00, 0.00, 0.00, 0.00],
							label : "IPK",
							borderColor : "#3cba9f",
							fill : false
						},
						]
			},
			options : {
				title : {
					display : true,
					text : 'Chart JS Multiple Lines Example'
				}
			}
		});
		new Chart(document.getElementById("bar-chart"), {
			type : 'line',
			data : {
				labels : [ "Semester 1","Semester 2","Semester 3","Semester 4","Semester 5","Semester 6","Semester 7","Semester 8"],
				datasets : [
						{
							data : [ 4.0, 3.85, 3.93, 4.00, 0.00, 4.00, 0.00, 0.00],
							label : "IPK",
							borderColor : "salmon",
							fill : false
						},
						]
			},
			options : {
				title : {
					display : true,
					text : 'Chart JS Multiple Lines Example'
				}
			}
		});

		new Chart(document.getElementById("pie-chart"), {
			type : 'doughnut',
			data : {
				labels : [ "Semester 1","Semester 2","Semester 3"],
				datasets : [
						{
							data : [ 40, 38, 39],
							label : "IPK",
							backgroundColor: ['rgb(4, 0, 64)','rgb(1, 0, 220)','rgb(255, 205, 86)'],
							hoverOffset: 10
						},
						]
			},
			options : {
				title : {
					display : true,
					text : 'Chart JS Multiple Lines Example'
				}
			}
		});

	</script>
</div>
</div>
</body>
</html>

<?php
}else{
		header("Location: home_mhs.php");
		exit();
}
?>