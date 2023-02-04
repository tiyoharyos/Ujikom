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
<h1>Tambah Data</h1>
<body>
  <div class='container-md'>
    <form method="Post" name="frm" action="simpan.php">
      <table class="table table-striped table-hover">

        <tr id="rowHover">
          <td>ID Penerbit</td>
          <td><input type="text" name="ID_Penerbit" size="72" maxlength="8"></td>
        </tr>
       
       
        <tr id="rowHover">
          <td>Nama Penerbit</td>
          <td><input type="text" name="Penerbit" size="72" maxlength="8"></td>
        </tr>
        <tr id="rowHover">
          <td>Alamat</td>
          <td><input type="text" name="Alamat" size="25" maxlength="25"></td>
        </tr>
        <tr id="rowHover">
          <td>Kota</td>
          <td><input type="text" name="Kota" size="25" maxlength="25"></td>
        </tr>

        <tr id="rowHover">
          <td>Telepon</td>
          <td><input type="text" name="telepon" size="25" maxlength="25"></td>
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