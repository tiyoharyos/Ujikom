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
<h1>Hapus Data Buku</h1>
<?php
if(isset($_GET["ID_Penerbit"])){
	$db=dbConnect();
	$ID_Penerbit=$db->escape_string($_GET["ID_Penerbit"]);
	if($dataproduk=getDataPenerbit($ID_Penerbit)){// cari data produk, kalau ada simpan di $data
		?>



<form method="post" name="frm" action="penerbit_hapus.php">
<input type="hidden" name="ID_Penerbit" value="<?php echo $dataproduk["ID_Penerbit"];?>">
<table class="table table-striped table-hover">
<tr id="rowHover"><td>ID_Penerbit</td><td><?php echo $dataproduk["ID_Penerbit"];?></td></tr>
<tr id="rowHover"><td>Nama Penerbit</td><td><?php echo $dataproduk["Penerbit"];?></td></tr>
<tr id="rowHover"><td>Alamat</td><td><?php echo $dataproduk["Alamat"];?></td></tr>
<tr id="rowHover"><td>Kota</td><td><?php echo $dataproduk["Kota"];?></td></tr>
<tr id="rowHover"><td>telepon</td><td><?php echo $dataproduk["telepon"];?></td></tr>

<tr id="rowHover"><td>&nbsp;</td><td><input class="btn btn-danger btn-sm" type="submit" name="TblHapus" value="Hapus"></td></tr>
</table>
</form>
		<?php
	}
	else
		echo "produk dengan Id : $ID_Penerbit tidak ada. Penghapusan dibatalkan";
?>
<?php
}
else
	echo "ID_Buku tidak ada. Penghapusan dibatalkan.";
?>
</body>
</html>