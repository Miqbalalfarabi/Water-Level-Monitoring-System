<?php
    include('koneksi.php');
 if(isset($_GET(['tinggi_air']))
 {
	 $sensor = $_GET['tinggi_air'];
 }
    $sensor = $_GET['tinggi_air'];
 
    $sql = "INSERT INTO tbl_water (tinggi_air) VALUES (:tinggi_air)";
 
    $stmt = $PDO->prepare($sql);
 
    $stmt->bindParam(':tinggi_air', $sensor);
 
    if($stmt->execute()) {
        echo "sukses gaes";
    }else{
        echo "gagal gaes";
    }
?>
 
