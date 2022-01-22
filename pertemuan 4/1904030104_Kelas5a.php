<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 4</title>
</head>
<body>
	<h1>membuat array</h1>
	<?php 
	$values = array(1,2,3,4,5.60);
	var_dump($values);
	echo"<br>";
	echo($values[1]);

	echo"<br>";

	$prodi = ["Sipil","Industri","Informatika","Kimia"];
	var_dump($prodi);
	echo"<br>";
	echo($prodi[2]);

	echo"<br>";
	//mengganti isi value
	$prodi[0] = "Nuklir";
	var_dump($prodi);

	echo"<br>";
	//menambahkan value
	$prodi[] = "T.Komputer";
	var_dump($prodi);
	echo"<br>";

	//menghapus salah satu value
	unset($prodi[0]);
	var_dump($prodi);

	echo"<br>";
	//menghitung total array
	var_dump(count($prodi));

	?>
<hr>
	<h1>map dengan array</h1>
<?php 
$samsul = array(
			"id" =>"samsul",
			"nama" =>"M.samsul",
			"umur" =>"21"
			);
var_dump($samsul);
echo"<br>";

$tommy = [
		"id" =>"TommyS",
		"nama" =>"Tommy S.",
		"umur" =>54,
		"alamat" => [
				"kota" => "Salatiga",
				"prov" => "Jawa tengah"
				]
		];
var_dump($tommy);
echo"<br>";
echo("nama id :" . $tommy["id"]);
echo"<br>";
echo("nama lengkap : " . $tommy["nama"]);
echo"<br>";
echo("umur : " . $tommy["umur"]);

 ?>

<hr>
<h1>Operator MTK</h1>
<?php 
$tambah = 10 + 11;
$kurang = 150 - 41;
$kali = 5*120;
$bagi = 150 / 2;
$modular = 100 % 3;
$pangkat = 5**6;
echo "tambah: "  . $tambah . "<br>";
echo "kurang: "  . $kurang . "<br>";
echo "kali: "  . $kali . "<br>";
echo "bagi: "  . $bagi . "<br>";
echo "modular: "  . $modular . "<br>";
echo "pangkat: "  . $pangkat . "<br>";

 ?>
<hr>
<h2>Increment</h2>
<?php 
$a = 10;
$a++;
$a--;

echo($a);
 ?>
</body>
</html>