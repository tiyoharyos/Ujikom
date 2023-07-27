<?php include_once("../../fucntion.php"); ?>
<!DOCTYPE html>
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
<h1>Hapus Data Buku</h1>
<?php
if(isset($_GET["ID_Buku"])){
	$db=dbConnect();
	$ID_Buku=$db->escape_string($_GET["ID_Buku"]);
	if($dataproduk=getDataBuku($ID_Buku)){// cari data produk, kalau ada simpan di $data
		?>

<form method="post" name="frm" action="buku_hapus.php">
<input type="hidden" name="ID_Buku" value="<?php echo $dataproduk["ID_Buku"];?>">
<table class="table table-striped table-hover">
<tr id="rowHover"><td>ID_Buku</td><td><?php echo $dataproduk["ID_Buku"];?></td></tr>
<tr id="rowHover"><td>Nama barang</td><td><?php echo $dataproduk["Nama_Buku"];?></td></tr>
<tr id="rowHover"><td>Kategori</td><td><?php echo $dataproduk["Kategori"];?></td></tr>
<tr id="rowHover"><td>Supplier</td><td><?php echo $dataproduk["Harga"];?></td></tr>
<tr id="rowHover"><td>Stok</td><td><?php echo $dataproduk["Penerbit"];?></td></tr>

<tr id="rowHover"><td>&nbsp;</td><td><input class="btn btn-danger btn-sm" type="submit" name="TblHapus" value="Hapus"></td></tr>
</table>
</form>
		<?php
	}
	else
		echo "produk dengan Id : $ID_Buku tidak ada. Penghapusan dibatalkan";
?>
<?php
}
else
	echo "ID_Buku tidak ada. Penghapusan dibatalkan.";
?>
</body>
</html>