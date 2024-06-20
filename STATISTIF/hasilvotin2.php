<?php
session_start();
require 'db_conf.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STATISTIF | Result Mata Kuliah</title>
    <link rel="website icon" type="png" href="himatif.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="hasilvotin2.css">
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
            <li><a href="tif20.php"><i class="fa fa-user fa-fw"></i>TIF 2020</a></li>
            <li><a href="hasilvotin.php"><i class="fa fa-star"></i>Dosen</a></li>
            <li><a href="hasilvotin2.php"><i class="fa fa-star"></i>Mata Kuliah</a></li>
            <li><a class="logout" href="logout.php"><i class="fa fa-unlock-alt"></i>Log Out</a></li>
        </ul>
    </div>

    <div>
    <h1 class="title21">Hasil Voting Mata Kuliah Teknologi Informasi</h1>
    <h2>Universitas Teuku Umar</h2>
<div style="position:absolute; top:40%; left:15%; width:1000px; height:30px">
<canvas id="barchart"></canvas>
</div>

<script  type="text/javascript">
   <?php
$conn    = mysqli_connect("localhost", "root", "", "login_db");
$jumlah_vote  = mysqli_query($conn, "SELECT jumlah_vote FROM detail_matakuliah order by jumlah_vote desc");
$nm_matakuliah = mysqli_query($conn, "SELECT nm_matakuliah FROM detail_matakuliah order by jumlah_vote desc");
?>
  var ctx = document.getElementById("barchart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($nm_matakuliah)) { echo '"' . $p['nm_matakuliah'] . '",';}?>],
            datasets: [
            {
              label: "Jumlah Vote",
              data: [<?php while ($p = mysqli_fetch_array($jumlah_vote)) { echo '"' . $p['jumlah_vote'] . '",';}?>],
              backgroundColor: [
                '#00FFFF',
                '#00008B',
                '#FFD700',
                '#8B008B',
                'blue',
                'yellow',
                'navy',
                '#00FFFF',
                '#00008B',
                '#FFD700',
                '#8B008B',
                'blue',
                'yellow',
                'cyan',
                '#FFD700',
                'blue',
                'navy',
                'cyan'

              ]
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: data,
            options: {
            legend: {
              display: false
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>
</div>

<h3 style="margin-top: 50%;">Detail Vote</h3>

<div style="margin-top: 2%;">
<?php
$sql = "SELECT * FROM detail_matakuliah ORDER BY jumlah_vote DESC";
$result = $conn->query($sql);

// Menampilkan tabel dan isinya
if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0'> 
            <thead>
                <tr>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Jumlah Vote</th>
                </tr>
            </thead>
            <tbody>";
    // Looping untuk setiap baris data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nm_matakuliah"] . "</td>
                <td class='sks'>" . $row["sks"] . "</td>
                <td class='semester'>" . $row["semester"] . "</td>
                <td class='jml'>" . $row["jumlah_vote"] . "</td>
            </tr>";
    }
    echo "</tbody>
        </table>";
} else {
    echo "Tidak ada data dalam tabel.";
}
?>
</div>

</body>
<footer>
    <p>Copyright    |   Universitas Teuku Umar</p> 
    <p>Email        |   kampusutu@gmail.com</p> 
</footer>
</html>

<?php
}else{
        header("Location: home_mhs.php");
        exit();
}
?>