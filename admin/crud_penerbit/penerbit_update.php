<?php include_once("../../fucntion.php"); ?>
<!DOCTYPE html>
<html><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>UJIKOM</title>
</head>



  <section class="jumbotron">
  <div class="container-xl">
<center>
<h1>Pembaruan Data Produk</h1>
<?php
if(isset($_POST["TblUpdate"])){
	$db=dbConnect();
	if($db->connect_errno==0){
		// Bersihkan data
		$ID_Penerbit = $db->escape_string($_POST["ID_Penerbit"]);
		$Penerbit     = $db->escape_string($_POST["Penerbit"]);
		$Alamat = $db->escape_string($_POST["Alamat"]);
		$Kota = $db->escape_string($_POST["Kota"]);
		$telepon     = $db->escape_string($_POST["telepon"]);
		// Susun query update
		$sql="UPDATE Penerbit  SET 
			  Penerbit='$Penerbit',Alamat='$Alamat',
			  Kota='$Kota',telepon='$telepon'
			  WHERE ID_Penerbit='$ID_Penerbit'";
		// Eksekusi query update
		$res=$db->query($sql);
		echo $db->error;
		if($res){
			if($db->affected_rows>0){ // jika ada update data
				?>
				Data berhasil diupdate.<br>
				<a href="../admin.php"><button class="btn btn-success btn-sm">View Data</button></a>
				<?php
			}
			else{ // Jika sql sukses tapi tidak ada data yang berubah
				?>
				Data berhasil diupdate tetapi tanpa ada perubahan data.<br>
				<a href="javascript:history.back()"><button class="btn btn-secondary btn-sm">Edit Kembali</button></a>
				<a href="../admin.php"><button class ="btn btn-warning btn-sm">View BDataukDatu</button></a>
				<?php
			}
		}
		else{ // gagal query
			?>
			Data gagal diupdate.
			<a href="javascript:history.back()"><button class="btn btn-secondary btn-sm">Edit Kembali</button></a>
			<?php
		}
	}
	else
		echo "Gagal koneksi".(DEVELOPMENT?" : ".$db->connect_error:"")."<br>";
}
?>
</body>
</html>