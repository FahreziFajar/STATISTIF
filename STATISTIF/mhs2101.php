<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STATISTIF | Statistik Mahasiswa</title>
	<link rel="website icon" type="png" href="himatif.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylestats.css">
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

	<div>
		<h1>Detail Mahasiswa</h1>
		<h2>Angkatan 2021</h2>
  		<div style="position:absolute; top:41%; left:49%; width:500px; height:650px">
    		<canvas id="line-chart"></canvas>
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
							label : "Indeks Prestasi Kumulatif",
							borderColor : "navy",
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

	</script>
</div>

	<div class="stat">
        <img src='pp.png' class='profil'>
        <h4>Fajar Syarul Fahrezi</h4>
        <div class='bio'>
            <p><i class="fa fa-square" style="font-size:16px;color:#00004d"></i>  NIM : 2105903040086</p>
            <p><i class="fa fa-square" style="font-size:16px;color:#00004d"></i>  Pembimbing Akademik : Ana Elvia jakfar, S.Pd., M.Ed.</p>
            <p><i class="fa fa-square" style="font-size:16px;color:#00004d"></i>  Semester : 4</p>
            <p><i class="fa fa-square" style="font-size:16px;color:#00004d"></i>  IPK : 3.92</p>
        </div>
	</div>

	<h3>Transkrip Nilai</h3>

	<div class="tabeltsk">
	<?php
$conn    = mysqli_connect("localhost", "root", "", "login_db");
?>
	
<?php
$sql = "SELECT * FROM transkrip_nilai";
$result = $conn->query($sql);

// Menampilkan tabel dan isinya
if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='20' class='tabel'>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>";
    // Looping untuk setiap baris data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td class='no'>" . $row["id"] . "</td>
                <td class='mk'>" . $row["mata_kuliah"] . "</td>
                <td class='sks'>" . $row["sks"] . "</td>
                <td class='mhs'>" . $row["mhs21a"] . "</td>
            </tr>";
    }
    echo "</tbody>
        </table>";
} else {
    echo "Tidak ada data dalam tabel.";
}
?>
</div>
</div>

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