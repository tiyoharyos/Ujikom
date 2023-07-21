<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-white">
<?php
	if (isset($_GET["error"])) {
		$error = $_GET["error"];
		if ($error == 1)
			showError("Id Akun dan password tidak sesuai");
		else if ($error == 2)
			showError("Error Database. Silahkan Hubungi Administrator");
		else if ($error == 3)
			showError("Koneksi ke Database gagal.Autentikasi Gagal");
		else
			showError("Unknown Error");
	}
	?>
    <div class="container">
        <center>
            <div class="card mt-4  shadow p-3 mb-5 bg-white rounded" style="width: 45%;">
                <h1>Login</h1>
                <div class=" card-body">
                    <div class="mt-3">
                        <form  action="Login/belakanglogin.php" method="post">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" name="userid" id="username" class="form-control" placeholder="Input Your ID" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="exampleInputEmail1" class="form-label">password</label>
                                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Input Your Passoword" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><button type="submit" name="TblLogin" value="Login" class="btn btn-primary">Login</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </center>
    </div>
</body>
</html>