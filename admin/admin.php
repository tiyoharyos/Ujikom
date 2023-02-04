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
					<a class="nav-link active" aria-current="page" href="../index.php">Home</a>
					<a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
					<a class="nav-link active" aria-current="page" href="../pengadaan/pengadaan.php">Pengadaan</a>
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
		if ($db->connect_errno == 0) {
			$res     = $db->query("Select buku.ID_Buku,kategori.Nama_Kategori AS Kategori,buku.Nama_Buku,buku.Harga,buku.Stok,
			penerbit.Penerbit 
			FROM buku
			JOIN penerbit ON buku.Penerbit = penerbit.ID_Penerbit
			JOIN kategori ON buku.Kategori = kategori.ID_Kategori
			order by ID_Buku");
			if ($res != null) {

				// $res     = $db->query("Select buku.ID_Buku,buku.Kategori,buku.Nama_Buku,buku.Harga,buku.Stok,
				// penerbit.Nama 
				// FROM buku
				// JOIN penerbit ON buku.ID_Penerbit = penerbit.ID_Penerbit");
				// if($res!= null){
				//  
		?>
				<br>
				<h1 class='text-center'>Tabel Buku</h1>
				<div class="container-md">
					<a href="crud_buku/tambahdata.php"><button class="btn btn-secondary btn-sm">Tambah Data</button></a>
					<container>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">ID Buku</th>
									<th scope="col">Kategori</th>
									<th scope="col">Nama Buku</th>
									<th scope="col">Harga</th>
									<th scope="col">Stok</th>
									<th scope="col">Penerbit</th>
									<th scope="col">Aksi</th>
									
								</tr>
							</thead>
							<tbody>
								<?php
								$data = $res->fetch_row();
								do {
									list($ID_Buku, $Kategori, $Nama_Buku, $Harga, $Stok, $ID_Penerbit) = $data;
								?>
									<tr>
										<td><?php echo $ID_Buku; ?></td>
										<td><?php echo $Kategori; ?></td>
										<td><?php echo $Nama_Buku; ?></td>
										<td>Rp. <?php echo number_format($Harga, 0, ",", "."); ?></td>
										<td><?php echo $Stok; ?></td>
										<td><?php echo $ID_Penerbit; ?></td>
										<td><a class="btn btn-secondary btn-sm"href ="crud_buku/buku_edit.php?ID_Buku=<?php echo $ID_Buku ?>">Edit </a> |
				<a class="btn btn-danger btn-sm" href ="crud_buku/buku_konfirmasi_hapus.php?ID_Buku=<?php echo $ID_Buku ?>">Hapus</a> </td>
			</tr>

									<?php
								} while ($data = $res->fetch_row());
									?>
						</table>
				<?php
				$res->free();
			} else
				echo "Gagal Eksekusi SQL : " . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
		} else
			echo "Gagal Koneksi : " . (DEVELOPMENT ? " : " . $db->connect_error : " ") . "<br>";
				?>
				<div class="container-xl">
					<?Php
					$db = dbconnect();
					if ($db->connect_errno == 0) {
		
						$sql     = $db->query("select * from Penerbit ");
						$res     = $db->query("select * from Penerbit");;
						if ($res != null) {

							// $res     = $db->query("Select buku.ID_Buku,buku.Kategori,buku.Nama_Buku,buku.Harga,buku.Stok,
							// penerbit.Nama 
							// FROM buku
							// JOIN penerbit ON buku.ID_Penerbit = penerbit.ID_Penerbit");
							// if($res!= null){
							//  
					?>
							<br>
							<h1 class='text-center'>Tabel Penerbit</h1>
							<div class="container-md">
							<a href="crud_penerbit/tambahdata.php"><button class="btn btn-secondary btn-sm">Tambah Data</button></a>
								<container>
									<table class="table">
										<thead>
											<tr>
												<th scope="col">ID Penerbit</th>
												<th scope="col">Nama</th>
												<th scope="col">Alamat</th>
												<th scope="col">Kota</th>
												<th scope="col">telepon</th>
												<th scope="col">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$data = $res->fetch_row();
											do {
												list($ID_Penerbit, $Nama, $Alamat, $Kota, $telepon) = $data;
											?>
												<tr>
													<td><?php echo $ID_Penerbit; ?></td>
													<td><?php echo $Nama; ?></td>
													<td><?php echo $Alamat; ?></td>
													<td><?php echo $Kota; ?></td>
													<td><?php echo $telepon; ?></td>
													<td><a class="btn btn-secondary btn-sm"href ="crud_penerbit/penerbit_edit.php?ID_Penerbit=<?php echo $ID_Penerbit ?>">Edit </a> |
				<a class="btn btn-danger btn-sm" href ="crud_penerbit/penerbit_konfirmasi_hapus.php?ID_Penerbit=<?php echo $ID_Penerbit ?>">Hapus</a> </td>

												<?php
											} while ($data = $res->fetch_row());
												?>
												<td colspan=9 align=center><?php echo $db->error; ?>


									</table>


							<?php
							$res->free();
						} else
							echo "Gagal Eksekusi SQL : " . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
					} else
						echo "Gagal Koneksi : " . (DEVELOPMENT ? " : " . $db->connect_error : " ") . "<br>";
							?>
</body>

</html>