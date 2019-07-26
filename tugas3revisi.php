<?php
	$nama = "";
	$nim = "";
	$namaslh = "";
	$nimslh = "";
	$nimslh2 = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["nama"])) {
			$namaslh = "Nama masih kosong";
		}
		else{
			$nama = test_input($_POST["nama"]);
		}

		if (empty($_POST["nim"])) {
			$nimslh = "Nim masih kosong";
		}
		else{
			$nim = test_input($_POST["nim"]);
		}

		if (strlen($nim) < 10) {
			$nimslh2 = "Tidak boleh kurang dari 10 digit";
		}
		else{
			$nim = test_input($_POST["nim"]);
		}
	}

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Nama : <input type="text" name="nama">
		<span class="error">* <?php echo $namaslh;?> </span><br><br>
	Nime : <input type="number" name="nim">
		<span class="error">* <?php echo $nimslh;?> <?php echo $nimslh2;?> </span><br><br>
	<input type="submit" name="submit" value="Submit">
</form>