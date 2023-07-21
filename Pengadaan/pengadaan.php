<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	    <div class="container">
		  <a class="navbar-brand" href="#">UNIBOOKSTORE</a>
		 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		   <div class="navbar-nav ms-auto">
		   <a class="nav-link active" aria-current="page" href="../home.php">Home</a>
       <a class="nav-link active" aria-current="page" href="../admin/admin.php">Admin</a>
       <a class="nav-link active" aria-current="page" href="pengadaan.php">Pengadaan</a>
		   </div>
		 </div>
	    </div>
	  </nav>
    <?php
	include_once("../fucntion.php");
	?>
	<div class="container-xl">
		<?Php
	$db = dbconnect();
	if($db->connect_errno == 0 ){
		$sql     = $db->query("select * from buku ");
    $res     = $db->query("Select buku.Nama_Buku,buku.Harga,buku.Stok,
    penerbit.Penerbit 
    FROM buku
    JOIN penerbit ON buku.Penerbit = penerbit.ID_Penerbit ORDER BY stok ASC");;
		if($res!= null){

  ?>
<br>
<h1>Tabel Buku</h1>
<div class="container-md">
        <container>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Penerbit</th>
                  </tr>
                </thead>
                <tbody>
                <?php
		$data = $res->fetch_row();
		do{
				list($Nama_Buku,$Harga,$Stok,$ID_Penerbit) = $data;
	?>
                  <tr>
                  <td><?php echo $Nama_Buku; ?></td>
                  <td><?php echo $Stok; ?></td>
                  <td><?php echo $ID_Penerbit; ?></td>
  
                  <?php
		}
		while($data = $res->fetch_row());
	?>

	
	
		</table>

    
	<?php
		$res->free();
	}else
			echo "Gagal Eksekusi SQL : ".(DEVELOPMENT?" : ".$db->error:"")."<br>";
	}else
			echo "Gagal Koneksi : ".(DEVELOPMENT?" : ".$db->connect_error:" ")."<br>";
		?>
</body>
</html>

