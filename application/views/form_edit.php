<<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>
<table>
	<form method="post" action="<?php echo base_url()."index.php/helloworld/update_data"; ?>">
	<tr>
		<td>Nomor Induk</td>
		<td>:</td>
		<td><input type="text" name="ni" placeholder="Masukan Nomor Induk" value="<?php echo $no_induk; ?>" disabled></td>
		<td><input hidden="" type="text" name="ni" value="<?php echo $no_induk; ?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" placeholder="Masukan Nama Anda" value="<?php echo $nama; ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea style="resize: none;" required name="alamat"><?php echo $alamat; ?></textarea></td>
	</tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="Update"></td>
	</tr>
	</form>
</table>
</body>
</html>