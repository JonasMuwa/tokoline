<?php 
	session_start();
	$conn = mysqli_connect("localhost:3307", "root", "", "tbl_toko");
	// settings
	$url = "http://localhost/tokokita/";
	$title = "Website Toko Online";
	$no = 1;
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>