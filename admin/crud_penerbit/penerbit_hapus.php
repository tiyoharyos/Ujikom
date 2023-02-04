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

<h1>Hapus Data Produk</h1>
<?php
if(isset($_POST["TblHapus"])){
	$db=dbConnect();
	if($db->connect_errno==0){
		$ID_Penerbit  =$db->escape_string($_POST["ID_Penerbit"]);
		// Susun query delete
		$sql="DELETE FROM Penerbit WHERE ID_Penerbit='$ID_Penerbit'";
		// Eksekusi query delete
		$res=$db->query($sql);
		if($res){
			if($db->affected_rows>0) // jika ada data terhapus
				echo "Data berhasil dihapus.<br>";
			else // Jika sql sukses tapi tidak ada data yang dihapus
				echo "Penghapusan gagal karena data yang dihapus tidak ada.<br>";
		}
		else{ // gagal query
			echo "Data gagal dihapus. <br>";
		}
		?>
		<a href="../admin.php"><button class="btn btn-secondary">View Data</button></a>
		<?php
	}
	else
		echo "Gagal koneksi".(DEVELOPMENT?" : ".$db->connect_error:"")."<br>";
}
?>
</body>
</html>