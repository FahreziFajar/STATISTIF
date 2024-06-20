<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STATISTIF | Let2022</title>
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
            <li><a href="notfound.php"><i class="fa fa-user fa-fw"></i>TIF 2020</a></li>
            <li><a href="hasilvotin.php"><i class="fa fa-star"></i>Dosen</a></li>
            <li><a href="hasilvotin2.php"><i class="fa fa-star"></i>Mata Kuliah</a></li>
            <li><a href="speakfree.php"><i class="fa fa-user fa-fw"></i>SpeakFree</a></li>
            <li><a class="logout" href="logout.php"><i class="fa fa-unlock-alt"></i>Log Out</a></li>
        </ul>
    </div>


    <h1>Statistik Mahasiswa Teknologi Informasi</h1>
    <h2>Angkatan 2022</h2>
    <div>
        <div style="position:absolute; top:50%; left:10%; width:450px; height:450px">
            <canvas id="pie-chart"></canvas>
        </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new Chart(document.getElementById("pie-chart"), {
            type : 'doughnut',
            data : {
                labels : [ "Mahasiswa Aktif","Mahasiswa Non Aktif"],
                datasets : [
                        {
                            data : [ 122, 3],
                            label : "IPK",
                            backgroundColor: ['rgb(1, 0, 220)','rgb(255, 205, 86)'],
                            hoverOffset: 10
                        },
                            ]
                    },
        });
    </script>
    </div>

</div>

<div class="item">
    <ul>
        <li><i class="fa fa-square" style="font-size:24px;color:#00004d"></i> Jumlah Mahasiswa Keseluruhan : 125 Mahasiswa</li>
        <li><i class="fa fa-square" style="font-size:24px;color:#0100DC"></i> Mahasiswa Aktif                 : 122 Mahasiswa</li>
        <li><i class="fa fa-square" style="font-size:24px;color:#FFCD56"></i> Mahasiswa non-Aktif               : 3 Mahasiswa</li>
        <li><i class="fa fa-square" style="font-size:24px;color:#6c25be"></i> Rata-rata IPK                   : 3.58</li>
    </ul>
</div>

    <div style="margin-top: 180px;">
    <div class="title221">Daftar Statistik Mahasiswa Angkatan 2022</div>
 <?php
        class Mahasiswa{
        
            public function __construct($nama = "nama", $nim = "nim", $semester = "semester", $ipk = "ipk")
            {
                $this->nama = $nama;
                $this->nim = $nim;
                $this->semester = $semester;
                $this->ipk = $ipk;
            }
        
            public function cetakBiodata()
            {
                return "<div class='mahasiswa'>
                            <h4>Biodata Mahasiswa</h4>
                            <img src='pp.png' class='profil'>
                            <div class='bio'>
                                <p>Nama: $this->nama</p>
                                <p>NIM: $this->nim</p>
                                <p>Semester : $this->semester</p>
                                <p>IPK: $this->ipk</p>

                            </div>
                        </div>";
            }
        }
        
        $mahasiswa1 = new Mahasiswa("M. Hasan Basri", "2205903040041", "2", "3.95");
        $mahasiswa2 = new Mahasiswa("Vaizati Aura", "2205903040085 ", "2", "3.89");
        $mahasiswa3 = new Mahasiswa("Hafis Akbar", "2205903040092", "2", "3.84"); 
        $mahasiswa4 = new Mahasiswa("Aufa Dhafira", "2205903040091", "2", "3.84");  
        $mahasiswa5 = new Mahasiswa("M. Tondy Nugroho M.", "2205903040052", "2", "3.84");  
        $mahasiswa6 = new Mahasiswa("Chantika Putri M.", "2205903040026", "2", "3.84");  
        $mahasiswa7 = new Mahasiswa("Cut Zahara", "2205903040101", "2", "3.71");  
        $mahasiswa8 = new Mahasiswa("Dwi Vandela", "2205903040114", "2", "3.68");  
        $mahasiswa9 = new Mahasiswa("Tiara Monika", "2205903040036", "2", "3.68");  
        $mahasiswa10 = new Mahasiswa("Fariz Saka Datch Syah", "2205903040003", "2", "3.68");      
        
        echo $mahasiswa1->cetakBiodata();
        echo "<a href='mhs2201.php' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa2->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa3->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa4->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa5->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa6->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa7->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa8->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa8->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa9->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
        echo "<br>";
        echo $mahasiswa10->cetakBiodata();
        echo "<a href='#' class='detailmhs'>See more</a>";
    ?>
        </div>

</body>
<footer>
    <p class="cpr">Copyright    |   Universitas Teuku Umar</p> 
    <p>Email        |   kampusutu@gmail.com</p> 
</footer>
</html>

<?php
}else{
        header("Location: home_mhs.php");
        exit();
}
?>