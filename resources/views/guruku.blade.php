@extends('layouts.master6')
@extends('layouts.app')
@section('guruku')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Guru Idola. <span class="text-muted">Bapak.Agung.</span></h2>
          <p class="lead">"Beliau mungkin guru paling killer di jurusan teknik informatikan,,tapi menurut saya beliau sangat baik ketika kita bertanya padanya beliau tidak mungkin untuk tidak menjawab"..</p>
        </div>
        <div class="col-md-5">
          <?php
$image=glob("gambar/1.png");
for($i=0;$i<count($image);$i++)	
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Guru lucu. <span class="text-muted">bapak.wildan.</span></h2>
          <p class="lead">"Beliau mungkin sangat cuek ,, tapi dibalik itu semua beliau sangat lucu dan murah senyum".</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$gg=glob("gambar/2.png");
for($i=0;$i<count($gg);$i++)	
{
	$double = $gg[$i];
?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<?php
}
	?>        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">guru cakep. <span class="text-muted">Bapak.Ute juli kurnia.</span></h2>
          <p class="lead">"Beliau adalah satu-satunya guru paling cakep mungkin,,,juga smua murid mengaguminya".
.</p>
        </div>
        <div class="col-md-5">
            <?php
$ww=glob("gambar/3.png");
for($i=0;$i<count($ww);$i++)	
{
	$ampun = $ww[$i];
?>
	<img src="<?php echo $ampun;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

</body>
</html>
@endsection