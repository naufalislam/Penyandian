<!DOCTYPE html>
<html>
<head>
    <title>Penyandian</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body>
<!-- Tambah Data User -->
<div class="container">
	<br>
	<h2>User</h2>
	<br>
	<a href="tambah_user.php">+ Add User</a>
	<br><br>
	<table class="table tab-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Username</th>
            <th>Password</th>
            <th>Opsi</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		include 'config.php';
		$data1 = mysqli_query($link,"select * from user");
		while($d = mysqli_fetch_array($data1)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td>
					<a href="deleteuser.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
		</tbody>
    </table>
</div>

<!-- Tambah Data Pelanggan -->
<div class="container">
	<br>
	<h2>Pelanggan</h2>
	<br>
	<a href="tambah_user.php">+ Add Pelanggan</a>
	<br><br>
	<table class="table tab-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Handphone</th>
            <th>alamat</th>
            <th>email</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		include 'config.php';
		$data2 = mysqli_query($link,"select * from pelanggan");
		while($dd = mysqli_fetch_array($data2)){
			?>
			<tr>
				<td><?php echo $dd['id_pel']; ?></td>
				<td><?php echo $dd['nama_pel']; ?></td>
				<td><?php echo $dd['no_hp']; ?></td>
				<td><?php echo $dd['email']; ?></td>
				<td>
					<a href="deletepelanggan.php?id=<?php echo $dd['id_pel']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
		</tbody>
    </table>
</div>

<!-- Tambah Data -->
<div class="container">
	<br>
	<h2>Data</h2>
	<br>
	<a href="tambah_user.php">+ Add Data </a>
	<br><br>
	<table class="table tab-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Handphone</th>
            <th>alamat</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		include 'config.php';
		$data2 = mysqli_query($link,"select * from data");
		while($dd = mysqli_fetch_array($data2)){
			?>
			<tr>
				<td><?php echo $dd['id_pel']; ?></td>
				<td><?php echo $dd['jumlah_hutang']; ?></td>
				<td><?php echo $dd['jumlah_piutang']; ?></td>
				<td>
					<a href="deletedata.php?id=<?php echo $dd['id_pel']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
		</tbody>
    </table>
</div>

<!-- Tambah Akun Pelanggan -->
<div class="container">
	<br>
	<h2>Akun Pelanggan</h2>
	<br>
	<a href="tambah_user.php">+ Add Akun Pelanggan </a>
	<br><br>
	<table class="table tab-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
            <th>Password Recovery</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		include 'config.php';
		$data2 = mysqli_query($link,"select * from akun_pelanggan");
		while($dd = mysqli_fetch_array($data2)){
			?>
			<tr>
				<td><?php echo $dd['id_pel']; ?></td>
				<td><?php echo $dd['username']; ?></td>
				<td><?php echo $dd['password']; ?></td>
				<td><?php echo $dd['password_recovery']; ?></td>
				<td>
					<a href="deleteakun.php?id=<?php echo $dd['id_pel']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
		</tbody>
    </table>
</div>

</body>
</html>
