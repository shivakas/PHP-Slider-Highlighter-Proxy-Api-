<?php 
$data=array("username"=>"api@innosabi.com",
"password"=>"0thRuch0");

$ch = curl_init("https://demo.innosabi.com/login");//intialized the cURL session with TARGET URL
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);// Allow redirection
curl_setopt($ch, CURLOPT_POST, true);//making post request
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);// Posting user credentials
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');// storing login data in cookie
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//storing the request
$output = curl_exec($ch);
$info = curl_getinfo($ch);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_setopt($ch, CURLOPT_URL, 'https://demo.innosabi.com/api/v2/project/filter');
$output = curl_exec($ch);
$image=json_decode($output,true);
$img_data=[];

//Fetching description, name, hash of images
foreach($image['data'] as $images){	
		$hash=[];
		$img_data[]['name']=$images['name'];
		$img_data[]['description']=$images['description'];	
		foreach($images['media'] as $media){
			$hash[]=$media['hash'];				
		}
		$img_data[]=$hash;
	}
curl_close ($ch);
?>


</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
	img {height: 60%;
	width:100%;}
	img {width:100%;}
	h2  {color: black;}
	p   {color: black;}
 </style>
 
</head>
<body  style="background-image: url('https://htmlcolorcodes.com/assets/images/html-color-codes-color-tutorials-hero-00e10b1f.jpg');">

	<div class="container">
		<h2 style="color:yellow;">Innosabi Slider</h2>  
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		
			<div class="item active"  height="42">
				<img src="https://demo.innosabi.com/api/v4/media/<?=$img_data['2']['0']?>/thumbnail/width/500/height/500/strategy/crop" style="width:100%;height: 60%;">
				<div class="carousel-caption d-none d-md-block">
					<h2><?=$img_data['0']['name']?></h2>
					<p><?=$img_data['1']['description']?></p>
				</div>
		
			</div>

			<div class="item">
				<img src="https://demo.innosabi.com/api/v4/media/<?=$img_data['2']['1']?>/thumbnail/width/500/height/500/strategy/crop"  style="width:100%;height: 60%;">
				<div class="carousel-caption d-none d-md-block">
					<h2><?=$img_data['0']['name']?></h2>
					<p><?=$img_data['1']['description']?></p>
				</div>
			</div>

			<div class="item">
				<img src="https://demo.innosabi.com/api/v4/media/<?=$img_data['5']['0']?>/thumbnail/width/500/height/500/strategy/crop"  style="width:100%;height: 60%;">
				<div class="carousel-caption d-none d-md-block">
					<h2><?=$img_data['3']['name']?></h2>
					<p><?=$img_data['4']['description']?></p>
				</div>
			</div>
			
			<div class="item"  height="42">
				<img src="https://demo.innosabi.com/api/v4/media/<?=$img_data['5']['1']?>/thumbnail/width/500/height/500/strategy/crop"  style="width:100%;height: 60%;" >
				<div class="carousel-caption d-none d-md-block">
					<h2><?=$img_data['3']['name']?></h2>
					<p><?=$img_data['4']['description']?></p>
				</div>
			</div>
			
			<div class="item">
				<img src="https://demo.innosabi.com/api/v4/media/<?=$img_data['8']['0']?>/thumbnail/width/500/height/500/strategy/crop"  style="width:100%;height: 60%;" >
				<div class="carousel-caption d-none d-md-block">
					<h2><?=$img_data['6']['name']?></h2>
					<p><?=$img_data['7']['description']?></p>
				</div>
			</div>
			
			<div class="item">
				<img src="https://demo.innosabi.com/api/v4/media/<?=$img_data['8']['1']?>/thumbnail/width/500/height/500/strategy/crop"  style="width:100%;height: 60%;" >
				<div class="carousel-caption d-none d-md-block">
					<h2><?=$img_data['6']['name']?></h2>
					<p><?=$img_data['7']['description']?></p>
				</div>
			</div>
			
			<div class="item">
				<img src="https://demo.innosabi.com/api/v4/media/<?=$img_data['11']['0']?>/thumbnail/width/500/height/500/strategy/crop"  style="width:100%;height: 60%;">
				<div class="carousel-caption d-none d-md-block">
					<h2><?=$img_data['9']['name']?></h2>
					<p><<?=$img_data['10']['description']?><</p>
				</div>
			</div>  
			
			<div class="item">
				<img src="https://demo.innosabi.com/api/v4/media/<?=$img_data['11']['1']?>/thumbnail/width/500/height/500/strategy/crop"  style="width:100%;height: 60%;">
				<div class="carousel-caption d-none d-md-block">
					<h2><?=$img_data['9']['name']?></h2>
					<p><?=$img_data['10']['description']?></p>
			</div>
		</div>
	</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
		</a>
		</div>
	</div>
</body>
</html>
