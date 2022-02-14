<?php
	$conn = mysqli_connect("172.20.0.2","root","uaspass","trucorp");
	if (!$conn){
		echo "Tidak bisa connect ke MySQL" . PHP_EOL;
		exit;
	}
?>

<table>
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jabatan</th>
	</tr>
	<?php
		$qry = "SELECT * FROM users";
		$res = $conn->query($qry);
		while($row = $res->fetch_assoc()){
		?>
			<tr>
				<td><?= $row["ID"] ?></td>
				<td><?= $row["Nama"] ?></td>
				<td><?= $row["Alamat"] ?></td>
				<td><?= $row["Jabatan"] ?></td>
			</tr>
		<?php
		}
		?>
</table>
