<?php
	$conn = mysqli_connect("172.20.0.2","root","uaspass","trucorp");
	if (!$conn){
		echo "Tidak bisa connect ke MySQL" . PHP_EOL;
		exit;
	}
?>

<table>
	<?php
		$qry = "SELECT * FROM users";
		$res = $conn->query($qry);
		$count = mysqli_num_rows($res);
		echo "Total jumlah user yang ada di database: " . $count;
	?>
</table>