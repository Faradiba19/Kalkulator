<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


//ambil isi form dan simpan ke variabel
$operand1 = $_REQUEST['operand1'];
$operand2 = $_REQUEST['operand2'];
$operator = $_REQUEST['operator'];

//rumus perhitungan
$perhitungan = $operand1.$operator.$operand2;

eval ("\$hasil = $perhitungan;");

echo "Hasil Perhitungan : <b> $hasil </b>";

?>
</body>
</html>

