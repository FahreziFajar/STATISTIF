<?php
session_start();
include "db_conf.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Username tidak boleh kosong...");
		exit();
	}else if (empty($pass)) {
		header("Location: index.php?error=Password tidak boleh kosong...");
		exit();
	}else {
		$sql = "SELECT * FROM users WHERE user_name ='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['user_name'] == $uname && $row['password'] == $pass && $row ['level'] == "1") {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("Location: home_mhs.php");
				exit();
			}
			else if ($row['user_name'] == $uname && $row['password'] == $pass && $row ['level'] == "2") {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("Location: home_dosen.php");
				exit();

			}

			else{
				header("Location: index.php?error=Kesalahan pada Username atau Password !");
				exit();
			}
		}else{
			header("Location: index.php?error=Kesalahan pada Username atau Password !");
			exit();
		}
	}	

}else{
	header("Location: index.php");
	exit();
}