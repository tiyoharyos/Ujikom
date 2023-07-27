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
		?>
				<br>
				<h1 class='text-center'>Daftar Buku</h1>
				<div class="container-md">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#TambahDataBuku">
                    Tambah Data
                    </button>
					<!-- <a href="views/crud_buku/tambahdata.php"><button class="btn btn-secondary btn-sm">Tambah Data</button></a> -->
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
<div class="modal fade" id="TambahDataBuku" tabindex="-1" aria-labelledby="TambahDataBuku" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TambahDataBuku">Tambah Data Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form method="Post" name="frm" action="simpan.php">
	  <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID_Buku" required>
              </div>
			  <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kategori</label>
                <select name="pendidikan" id="Kategori" class="form-control">
					<option selected>Pilih Kategori</option>
					<?php
					$dataproduk = getListKategori();
					foreach ($dataproduk as $data) {
						echo "<option value=\"" . $data["ID_Kategori"] . "\">" . $data["Nama_Kategori"] . "</option>.\n";
					}
					?>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Buku</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Nama_Buku" required>
              </div>
			  <div class="mb-3">
			   <label for="exampleInputPassword1" class="form-label">Harga</label>
			   <input type="number" class="form-control" id="exampleInputPassword1" name="Harga" required>
			 </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stok Buku</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Stok" required>
              </div>
			  <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Penerbit</label>
                <select name="Penerbit" id="Penerbit" class="form-control">
					<option selected>Pilih Penerbit</option>
					<?php
					$dataPenerbit = getListPenerbit();
					foreach ($dataPenerbit as $data) {
						echo "<option value=\"" . $data["ID_Penerbit"] . "\">" . $data["Penerbit"] . "</option>.\n";
					}
					?>
                </select>
              </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                      </button>
                      <input type="submit" class="btn btn-primary" name="TblUpdate" value="Edit Data"></input>
                    </div>
                  </form>
    </div>
  </div>
</div>