<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title> 
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        Pilih file: <input type="file" name="berkas" /> <br>
        <button type="submit" name="upload">Upload</button>
    </form>

    <?php
        if($_POST){
            // ambil data nama dan lokasi temporary file
            $namaFile = $_FILES['berkas']['name'];
            $lokasitemp = $_FILES['berkas']['tmp_name'];

            // tentukan lokasi file akan dipindahkan
            $dirsave = "hasil_upload/";

            // pindahkan file
            $uploaded = move_uploaded_file($lokasitemp, $dirsave.$namaFile);

            // cek berhasil
            if ($uploaded) {
                echo "Upload berhasil!<br/>";
                echo "Link: <a href='".$dirsave.$namaFile."'>".$namaFile."</a>";
            } else {
                echo "Upload Gagal!";
            }
        }
	?>
    
</body> 
</html>