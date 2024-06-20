<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if(isset($_POST["vote"])){
  if(empty($_POST["dosen"])) {
    echo
    "
    <script>
    alert('Ada kesalahan dalam Voting...');
    document.location.href = '';
    </script>
    ";
  }
  else{
    $dosen = $_POST["dosen"];
    $conn = mysqli_connect("localhost", "root", "", "login_db");

    $query = "INSERT INTO tb_dosen VALUES('', '$dosen')";
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
    <title>STATISTIF | Voting Dosen</title>
    <link rel="website icon" type="png" href="himatif.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="votee.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Didact+Gothic&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
     <div class="container">
      <h1>Dosen Teknologi Informasi</h1>
      <h2>Universitas Teuku Umar</h2>
      <p>Vote Dosen Favoritmu sekarang !!!</p>

      <div class="option-wrapper">
        <div class="option-group">
          <img src="pp.png" alt="">
          <button class="option-btn btn-dosen" value="Suryadi">
            <div>Suryadi, ST., M.Cs</div>
            <div class="nidn">NIDN : 0013068805</div>
          </button>
        </div>
        <div class="option-group">
          <img src="pp.png" alt="">
          <button class="option-btn btn-dosen" value="Cukri">
            <div>Cukri Rahmi Niani, S.Pd., M.Si</div>
            <div class="nidn">NIDN : 0004049003</div>
          </button>
        </div>
        <div class="option-group">
          <img src="pp.png" alt="">
          <button class="option-btn btn-dosen" value="Mirna">
            <div>Mirna Ria Andini, ST., M.Sc</div>
            <div class="nidn">NIDN : 0031018806</div>
          </button>
        </div>
      </div>
      <div class="option-wrapper">
        <div class="option-group">
          <img src="pp.png" alt="">
          <button class="option-btn btn-dosen" value="CutMutia">
            <div>Cut Mutia, SST., M.T</div>
            <div class="nidn">NIDN : 1312078801</div>
          </button>
        </div>
        <div class="option-group">
          <img src="pp.png" alt="">
         <button class="option-btn btn-dosen" value="Firah">
            <div>Hayatun Maghfirah, SST., MT</div>
            <div class="nidn">NIDN : 0027049007</div>
          </button>
        </div>
        <div class="option-group">
          <img src="pp.png" alt="">
         <button class="option-btn btn-dosen" value="Sanusi">
            <div>Sanusi, S.Pd., M.Kom</div>
            <div class="nidn">NIDN : 1307088801</div>
          </button>
        </div>
      </div>
      <div class="option-wrapper">
        <div class="option-group">
          <img src="pp.png" alt="">
          <button class="option-btn btn-dosen" value="Ilham">
            <div>Ilham Juliwardi, S.pd., M.Pd.T</div>
            <div class="nidn">NIDN : 0028079501</div>
          </button>
        </div>
        <div class="option-group">
          <img src="pp.png" alt="">
         <button class="option-btn btn-dosen" value="Ridho">
            <div>Abdurrahman Ridho, S.Kom., M.Kom</div>
            <div class="nidn">NIDN : 0020019402</div>
          </button>
        </div>
        <div class="option-group">
          <img src="pp.png" alt="">
         <button class="option-btn btn-dosen" value="Ardi">
            <div>Muhammad Ardiansyah, ST., M.M.S.I</div>
            <div class="nidn">NIDN : 0018089303</div>
          </button>
        </div>
      </div>
      <div class="option-wrapper">
        <div class="option-group">
          <img src="pp.png" alt="">
          <button class="option-btn btn-dosen" value="Isya">
            <div>Isyatur Raziah, S.T., M.T</div>
            <div class="nidn">NIDN : -</div>
          </button>
        </div>
        <div class="option-group">
          <img src="pp.png" alt="">
         <button class="option-btn btn-dosen" value="Putri">
            <div>Andriani Putri, S.Kom., M.Sc</div>
            <div class="nidn">NIDN : 0021099203</div>
          </button>
        </div>
        <div class="option-group">
          <img src="pp.png" alt="">
         <button class="option-btn btn-dosen" value="Ana">
            <div>Ana Elvia Jakfar, S.Pd., M.Ed</div>
            <div class="nidn">NIDN : 0016099304</div>
          </button>
        </div>
      </div>
      <div class="option-wrapper">
        <div class="option-group">
          <img src="pp.png" alt="">
          <button class="option-btn btn-dosen" value="Nica">
            <div>Nica Astrianida, S.ST., M.Sc</div>
            <div class="nidn">NIDN : 0009108907</div>
          </button>
        </div>
        <div class="option-group">
          <img src="pp.png" alt="">
         <button class="option-btn btn-dosen" value="Rivan">
            <div>Rivansyah Suhendra, S.Kom., M.T</div>
            <div class="nidn">NIDN : -</div>
          </button>
        </div>
      </div>

      <form class="" action="" method="post">
        <input type="hidden" name="dosen" id="dosen">
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
          $('#dosen').val(clickedOption);
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