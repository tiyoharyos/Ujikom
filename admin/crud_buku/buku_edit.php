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
<h1>Edit Data Buku</h1>
<?php
if(isset($_GET["ID_Buku"])){
	$db=dbConnect();
	$ID_Buku=$db->escape_string($_GET["ID_Buku"]);
	if ($dataproduk1=getDataBuku($ID_Buku)){// cari data produk, kalau ada simpan di $data
		?>
<a href="../admin.php"><button class="btn btn-secondary btn-sm">View  Data Buku</button></a>
<form method="post" name="frm" action="buku_update.php">
<table class="table table-striped table-hover">
<tr id="rowHover"><td>Id Buku</td>
    <td><input type="text" name="ID_Buku" size="16" maxlength="15"
	     value="<?php echo $dataproduk1["ID_Buku"];?>" readonly></td></tr>
		
		 <tr id="rowHover">
		<td>Kategori</td>
		<td><select name="Kategori">
		<option>Pilih Kategori</option>
<?php
     $datakategori = getListKategori();
		foreach($datakategori as $data){
			echo "<option value=\"". $data["ID_Kategori"]. "\"";
		if($data["ID_Kategori"] == $dataproduk1["Nama_Kategori"])
				echo "selected"; //default sesuai kategori sebelumnya
			echo ">" . $data["Nama_Kategori"]. "</option>";
	}
?>
	</select>
	
		
	<tr id="rowHover"><td>Nama Buku</td>
	<td><input type="text" name="Nama_Buku" size="11" maxlength="10"
		 value="<?php echo $dataproduk1["Nama_Buku"];?>"></td></tr>
		 <tr id="rowHover"><td>Harga</td>
	<td><input type="text" name="Harga" size="11" maxlength="10"
		 value="<?php echo $dataproduk1["Harga"];?>"></td></tr>
		 <tr id="rowHover"><td>Stok</td>
		<td><input type="number" name="Stok" size="25" maxlength="25"
		 value="<?php echo $dataproduk1["Stok"];?>"></td></tr>
		 <tr id="rowHover">
		<td>Penerbit</td>
		<td><select name="ID_Penerbit">
		<option>Pilih Penerbit</option>
<?php
	$data_penerbit= getListPenerbit();
		foreach($data_penerbit as $data){
		echo "<option value=\"". $data["ID_Penerbit"]. "\"";
		if($data["ID_Penerbit"] == $dataproduk1["Penerbit"])
				echo "selected"; //default sesuai kategori sebelumnya
			echo ">" . $data["Penerbit"]. "</option>";
	}
?>
	</select>
	</td>
	</tr>	 
	<tr id="rowHover"><td>&nbsp;</td>
	<td><input class="btn btn-secondary btn-sm "type="submit" name="TblUpdate" value="Update">
	    <input class="btn btn-danger btn-sm" type="reset"></td></tr>
</table>
</form>
		<?php
	}
	else
		echo "Produk dengan Id : $ID_Buku tidak ada. Pengeditan dibatalkan";
?>
<?php
}
else
	echo "IdProduk tidak ada. Pengeditan dibatalkan.";
?>
</body>
</html>