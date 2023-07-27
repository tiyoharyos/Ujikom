<?php include_once('../../../config/functions.php'); ?>

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
            if ($res) {
				if ($db->affected_rows > 0) {
					header("Location: ../../../main.php?module=Buku");
					exit; // Tambahkan exit untuk menghentikan eksekusi skrip setelah redirect
				} else {
					// Jika tidak ada baris yang terpengaruh, berikan pesan kesalahan
					echo "Gagal menambahkan data. Silahkan cek kembali.";
				}
			} else {
				// Jika query gagal, tampilkan pesan kesalahan
				echo "Error query : " . $db->error . "<br>";
			}
		} else {
			echo "Error database connection: " . $db->connect_error . "<br>";
		}

		?>
