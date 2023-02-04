<?php include_once("../../fucntion.php"); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>UJIKOM</title>
</head>
<br>

<body>
  <h1 class='text-center'>Tambah Data</h1>
  <div class='container-md'>
    <form method="Post" name="frm" action="simpan.php">
      <table class="table table-striped table-hover">
      
        <tr id="rowHover">
          <td>ID Buku</td>
          <td><input type="text" name="ID_Buku" size="72" maxlength="8"></td>
        </tr>
        <tr id="rowHover">
          <td>Kategori</td>
          <td><select class="form-select" aria-label="Default select example" name="Kategori">
              <option selected> Kategori</option>
              <?php
              $dataproduk = getListKategori();
              foreach ($dataproduk as $data) {
                echo "<option value=\"" . $data["ID_Kategori"] . "\">" . $data["Nama_Kategori"] . "</option>.\n";
              }
              ?>
            </select>
          </td>
        </tr>
        <tr id="rowHover">
          <td>Nama Buku</td>
          <td><input type="text" name="Nama_Buku" size="72" maxlength="8"></td>
        </tr>
        <tr id="rowHover">
          <td>Harga</td>
          <td><input type="number" name="Harga" size="25" maxlength="25"></td>
        </tr>
        <tr id="rowHover">
          <td>Stok</td>
          <td><input type="text" name="Stok" size="25" maxlength="25"></td>
        </tr>

        <tr id="rowHover">
          <td>Penerbit</td>
          <td><select class="form-select" aria-label="Default select example" name="Penerbit">
              <option selected>pilih Supplier</option>
              <?php
              $dataPenerbit = getListPenerbit();
              foreach ($dataPenerbit as $data) {
                echo "<option value=\"" . $data["ID_Penerbit"] . "\">" . $data["Penerbit"] . "</option>.\n";
              }
              ?>
            </select>
          </td>
        </tr>


        <tr id="rowHover">
          <td></td>
          <td><input class="btn btn-secondary btn-sm" type="submit" name="TblSimpan" value="Simpan"></td></textarea>
        </tr>
      </table>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>