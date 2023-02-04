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
		<h1>Penyimpanan Data Penerbit</h1>
		<?php
		$db = dbconnect();
		if ($db->connect_errno == 0) {
			// bersihkan data
			$ID_Penerbit = $db->escape_string($_POST["ID_Penerbit"]);
			$Penerbit = $db->escape_string($_POST["Penerbit"]);
			$Alamat = $db->escape_string($_POST["Alamat"]);
			$Kota = $db->escape_string($_POST["Kota"]);
			$telepon     = $db->escape_string($_POST["telepon"]);
	


			$sql = "insert into Penerbit(ID_Penerbit,Penerbit,Alamat,Kota,telepon) values
			('$ID_Penerbit','$Penerbit','$Alamat','$Kota ','$telepon') ";

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