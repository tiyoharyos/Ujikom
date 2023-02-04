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
if(isset($_GET["ID_Penerbit"])){
	$db=dbConnect();
	$ID_Penerbit=$db->escape_string($_GET["ID_Penerbit"]);
	if ($dataproduk1=getDataPenerbit($ID_Penerbit)){// cari data produk, kalau ada simpan di $data
		?>
<a href="../admin.php"><button class="btn btn-secondary btn-sm">View  Data Buku</button></a>
<form method="post" name="frm" action="penerbit_update.php">
<table class="table table-striped table-hover">
<tr id="rowHover"><td>Id Penerbit</td>
    <td><input type="text" name="ID_Penerbit" size="16" maxlength="15"
	     value="<?php echo $dataproduk1["ID_Penerbit"];?>" readonly></td></tr>

	
		
	<tr id="rowHover"><td>Nama Penerbit</td>
	<td><input type="text" name="Penerbit" size="20" maxlength="20"
		 value="<?php echo $dataproduk1["ID_Penerbit"];?>"></td></tr>
		 <tr id="rowHover"><td>Alamat</td>
	<td><input type="text" name="Alamat" size="20" maxlength="20"
		 value="<?php echo $dataproduk1["Alamat"];?>"></td></tr>
		 <tr id="rowHover"><td>Kota</td>
		<td><input type="text" name="Kota" size="25" maxlength="25"
		 value="<?php echo $dataproduk1["Kota"];?>"></td></tr>
		 <tr id="rowHover">
		 <tr id="rowHover"><td>Telepon</td>
         <td><input type="text" name="telepon" size="25" maxlength="25"
		 value="<?php echo $dataproduk1["telepon"];?>"></td></tr>
		 <tr id="rowHover">
		
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
		echo "Produk dengan Id : $ID_Penerbit tidak ada. Pengeditan dibatalkan";
?>
<?php
}
else
	echo "IdProduk tidak ada. Pengeditan dibatalkan.";
?>
</body>
</html>