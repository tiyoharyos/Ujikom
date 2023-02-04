<?php include_once("../../fucntion.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>UJIKOM</title>
</head>


<section class="jumbotron">
	<div class="container-xl">
		<h1>Penyimpanan Data Buku</h1>
		<?php
		$db = dbconnect();
		if ($db->connect_errno == 0) {
			// bersihkan data
			$ID_Buku = $db->escape_string($_POST["ID_Buku"]);
			$Kategori = $db->escape_string($_POST["Kategori"]);
			$Nama_Buku = $db->escape_string($_POST["Nama_Buku"]);
			$Harga = $db->escape_string($_POST["Harga"]);
			$Stok     = $db->escape_string($_POST["Stok"]);
			$Penerbit    = $db->escape_string($_POST["Penerbit"]);


			$sql = "insert into Buku(ID_Buku,Kategori,Nama_buku,Harga,Stok,Penerbit) values
			('$ID_Buku','$Kategori','$Nama_Buku','$Harga ','$Stok','$Penerbit') ";

			$res = $db->query($sql);
			echo $db->error;
			if ($res) {
				if ($db->affected_rows > 0) {
		?>
					penyimpanan data sukses.<br>
					<a href="../admin.php"><button class="btn btn-success" id="view">View Data</button></a>
				<?php
				}
			} else {
				?>
				penyimpanan data gagal mungkin karena idproduk sudah ada.<br>
				<a href="javascript:history.back();"><button class="btn btn-secondary" id='view'>kembali</button></a>
		<?php
			}
		} else
			echo "Error query : " . $db->error . "<br>";


		?>
		</body>

</html>