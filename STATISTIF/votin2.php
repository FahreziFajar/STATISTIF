<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if(isset($_POST["vote"])){
  if(empty($_POST["mata_kuliah"])) {
    echo
    "
    <script>
    alert('Ada kesalahan dalam Voting...');
    document.location.href = '';
    </script>
    ";
  }
  else{
    $mata_kuliah = $_POST["mata_kuliah"];
    $conn = mysqli_connect("localhost", "root", "", "login_db");

    $query = "INSERT INTO tb_matakuliah VALUES('', '$mata_kuliah')";
    mysqli_query($conn, $query);
    echo
    "
    <script>
    alert('Voting Berhasil :)');
    document.location.href = 'home_mhs.php';
    </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STATISTIF | Voting Mata Kuliah</title>
    <link rel="website icon" type="png" href="himatif.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vote2.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Didact+Gothic&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
     <div class="container">
      <h1>Mata Kuliah Program Studi Teknologi Informasi</h1>
      <h2>Universitas Teuku Umar</h2>
      <p>Pilih Mata Kuliah Favoritmu sekarang !!!</p>

      <div class="option-wrapper">
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Kalkulus Dasar">
            <div>Kalkulus Dasar</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Algoritma dan Pemrograman I">
            <div>Algoritma dan Pemrograman I</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Praktikum Algoritma dan Pemrograman I">
            <div>Praktikum Algoritma dan Pemrograman I</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Pengantar Teknologi Informasi">
            <div>Pengantar Teknologi Informasi</div>
          </button>
        </div>
      </div>

      <div class="option-wrapper">
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Aplikasi Sosial Media">
            <div>Aplikasi Sosial Media</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Pancasila">
            <div>Pancasila</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Bahasa Indonesia">
            <div>Bahasa Indonesia</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Aplikasi Komputer">
            <div>Aplikasi Komputer</div>
          </button>
        </div>
      </div>

      <div class="option-wrapper">
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Jaringan Komputer">
            <div>Jaringan Komputer</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Praktikum Jaringan Komputer">
            <div>Praktikum Jaringan Komputer</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Matematika Diskrit">
            <div>Matematika Diskrit</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Dasar Pengembangan Sistem Informasi">
            <div>Dasar Pengembangan Sistem Informasi</div>
          </button>
        </div>
      </div>

      <div class="option-wrapper">
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Dasar-dasar Arsitektur Komputer">
            <div>Dasar-dasar Arsitektur Komputer</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Algoritma dan Pemrograman II">
            <div>Algoritma dan Pemrograman II</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Agama">
            <div>Agama</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Kewarganegaraan">
            <div>Kewarganegaraan</div>
          </button>
        </div>
      </div>

      <div class="option-wrapper">
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Kepemimpinan Teuku Umar">
            <div>Kepemimpinan Teuku Umar</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Bahasa Inggris">
            <div>Bahasa Inggris</div>
          </button>
        </div>
        <div class="option-group">
          <button class="option-btn btn-dosen" value="Praktikum Algoritma dan Pemrograman II">
            <div>Praktikum Algoritma dan Pemrograman II</div>
          </button>
        </div>
      </div>

      <form class="" action="" method="post">
        <input type="hidden" name="mata_kuliah" id="mata_kuliah">
        <button type="submit" name="vote" class = "btn-submit">Vote</button>
      </form>

    </div>

    <script type="text/javascript">
      $(function() {
        $('.btn-dosen').click(function(){
          $('.btn-dosen').removeClass('active').addClass('inactive');
          $(this).removeClass('inactive').addClass('active');
        });
        $('.btn-dosen').click(function(){
          var clickedOption = $(this).attr('value');
          $('#mata_kuliah').val(clickedOption);
        });
      });
    </script>
  </body>
</body>
<!--
<footer>
    <p>Copyright    |   Universitas Teuku Umar</p> 
    <p>Email        |   kampusutu@gmail.com</p> 
</footer>
-->
</html>

<?php
}else{
        header("Location: home_mhs.php");
        exit();
}
?>