<?php include_once('../fucntion.php'); ?>
<?php
$db = dbConnect();
if ($db->connect_errno == 0) {
    if (isset($_POST["TblLogin"])) {
        $username = $db->escape_string($_POST['userid']);
        $pass = $db->escape_string($_POST['pass']);
        $sql = "SELECT * FROM admin WHERE username='$username' AND pass='$pass'";
        $res = $db->query($sql);
        if ($res) {
            if ($res->num_rows == 1) {
                $data = $res->fetch_assoc();
                session_start();
                $_SESSION["id"] = $data["id"];
                $_SESSION["passphrase"] = openssl_random_pseudo_bytes(16);
                $_SESSION["iv"] = openssl_random_pseudo_bytes(16);
                header("Location:../home.php");
            } else
                header("Location: login.php?error=1");
        }
    } else
        header("Location: login.php?error=2");
} else
    header("Location: login.php?error=3");