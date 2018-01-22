@extends('layouts.master3')
@extends('layouts.app')
@section('biodata')
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">

<body background="gambar/fitri.png">

      <div class="page-header">
        <center><h1>Biodata Seorang Teman</h1></center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
<tr>
              <tr>
              <center>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>cita-cita</th>
                <th>Hobi</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1233</td>
                <td>Fitri Nur Sabila</td>
                <td>bandung</td>
                <td>2000-12-26</td>
                <td>bahuan</td>
                <td>polisi</td>
                <td>solawatan</td>
                <td><?php
$image=glob("gambar/011.png");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</td>
              </tr>
              <tr>
                <td>4532</td>
                <td>asep warlan</td>
                <td>Bandung</td>
                <td>1997-07-05</td>
                <td>bjng koneng</td>
                <td>brimob</td>
                <td>solawatan</td>
                <td><?php
$image=glob("gambar/09.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
 
	</center>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      </div>
</div>
</div>
</body>
</html>
@endsection