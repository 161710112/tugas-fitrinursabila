@extends('layouts.master2')
@extends('layouts.app')
@section('gallery')
<!DOCTYPE html>
<html>
<head>
	<title>Foto Budak Culun</title>
</head>

<body background="gambar/5.png"></body>
<center><h2>BENGET CALUDIH</h2>
<?php
$image=glob("gambar/01.jpg");
$gg=glob("gambar/02.jpg");
$ww=glob("gambar/03.jpg");
$aa=glob("gambar/04.jpg");
$zz=glob("gambar/05.jpg");
$app=glob("gambar/06.jpg");
for($i=0;$i<count($image);$i++)
for($i=0;$i<count($gg);$i++)
for($i=0;$i<count($zz);$i++)	
for($i=0;$i<count($app);$i++)	

{
	$single_image = $image[$i];
	$double = $gg[$i];
	$three = $ww[$i];
	$four = $aa[$i];
	$five = $zz[$i];
	$six = $app[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<img src="<?php echo $three;?>" width="260" heigth="260"/?>
	<img src="<?php echo $four;?>" width="360" heigth="260"/?>
	<img src="<?php echo $five;?>" width="260" heigth="260"/?>
	<img src="<?php echo $six;?>" width="260" heigth="360"/?>
	<?php
}
	?>
</center>
</html>
@endsection