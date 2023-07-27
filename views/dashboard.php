<div class="container-xl">
		<?Php
		$db = dbconnect();
		if ($db->connect_errno == 0) {

			$sql     = $db->query("select * from buku ");
	
			$res     = null;
			if (isset($_GET["cari-data"])) {
				$cari  = isset($_GET["cari-data"]) ? (string) $_GET["cari-data"] : "";
				$res   = CariBuku($cari);
				
			} else {
				$sql = "Select buku.ID_Buku,kategori.Nama_Kategori AS Kategori,buku.Nama_Buku,buku.Harga,buku.Stok,
        penerbit.Penerbit 
        FROM buku
        JOIN penerbit ON buku.Penerbit = penerbit.ID_Penerbit
		JOIN kategori ON buku.Kategori = kategori.ID_Kategori
        order by ID_Buku ";
				$res = $db->query($sql);
			}
			if ($res != null) {

		?>

				<br>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name='cari-data'>
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>

				<div class="container-md">
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