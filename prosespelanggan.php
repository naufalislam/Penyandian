<html>
<head>
    <title>Proses Insert Data</title>
    <link rel="stylesheet" href="css/style.com" type="text/css">
</head>
<body>
    <?php require_once("config.php");

    // ambil data input
    $id = $_POST['id'];
    $name = $_POST['name'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $email = MD5($_POST['email']);

    $cekuser = mysqli_query($link,"SELECT * FROM pelanggan WHERE id_pel = '$id'");
    if(mysqli_num_rows($cekuser) <> 0){
        echo "Username Sudah Terdaftar !";
        echo '<a href="index.php">Back</a>';
    }else{
        if(!$username || !$pass || !$name){
            echo "Masih ada data yang kosong !";
            echo '<a href="daftar.php">Back</a>';
        }else{
            $simpan = mysqli_query ($link,"INSERT INTO user(id,nama,username,password) VALUES('$id','$name','$username','$pass')");
            if($simpan){
                echo 'Pendaftaran sukses, Tambah <a href="/penyandian/index.php"> Data</a>';
                echo '<br/><br/>Password Sebelum Enkripsi = '.$pas;
                echo '<br/>Password Setelah Enkripsi = '.$pass;
            }else{
                echo "Proses Gagal !";
            }
        }
    }
    ?>
</body>
</html>