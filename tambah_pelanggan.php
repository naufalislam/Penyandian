<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Tambah User</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 

</head>
<body>
    <br/>
    <br/>
    <center><h2>Tambah User</h2></center>
    <div class="login">
        <br/>
            <form action="prosesdaftar.php" method="post" onsubmit="return validasi()">
                <div>
                    <label>ID : </label>
                    <input type="text" name="id" id="id" autocomplete="off" title="Type an ID" />
                </div>
                <div>
                    <label>Nama Pelanggan: </label>
                    <input type="text" name="name" id="nama" autocomplete="off" title="Type an Name" />
                </div>
                <div>
                    <label>No Hp : </label>
                    <input type="text" name="no_hp" id="no_hp" autocomplete="off" title="Type an Name" />
               </div>
               <div>
                    <label>Alamat : </label>
                    <input type="text" name="alamat" id="alamat" autocomplete="off" title="Type an Name" />
               </div>
               <div>
                    <label>Email : </label>
                    <input type="text" name="email" id="email" autocomplete="off" title="Type an Name" />
               </div>
                <div>
                    <br/>
                    <center>
                    <input type="Submit" value="Registration" class="btn btn-success" title="Registration" />
                    </center>
                </div>
            </form>
    </div>
</body>

<script type="text/javascript">
    function validasi(){
        var username =  document.getElementByid("username").value;
        var password = document.getElementByid("password").value;
        if(username != "" && password !=""){
            return true;
        }else{
            alert('Username or Password Kosong !');
            return false;
        }
    }
</script>

</html>