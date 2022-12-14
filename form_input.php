<!DOCTYPE html>
<html>
<head>
	<title>GET & POST Method</title>
</head>
<body>
	<form action="catch_post.php" method="POST">
        Nama: <input type="text" name="nama"><br>
        Umur: <input type="number" name="umur"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
 
    <?php
        if ($_POST){
            $nama = $_POST["nama"];
            $umur = $_POST["umur"];

            echo "Hallo $nama ($umur). Salam wlewlowlewlo";
        }
    ?>
</body>
</html>