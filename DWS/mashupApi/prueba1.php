<?php

/**https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UCvmF_tzu-eK6FRfMlOp6-Fg&maxResults=6&key=AIzaSyCeUN1SkTP9Xyk14trr32Rin4jR6b5RRQo */
$API_key = "key";
$canal = "UCJx5KP-pCUmL9eZUv-mIcNw";
$max = 6;
$videos = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=' . $canal . '&maxResults=' . $max . '&key=' . $API_key . ''));
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
	<div class="container-fluid">
		<form>
			<div class="form-group">
				<label for="buscador">Nombre del videojuego que quieras</label>
				<input type="text" class="form-control" id="buscador" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">A ver si tengo suerte y lo encuentro</small>
			</div>
			<button type="submit" class="btn btn-primary">Buscar</button>
		</form>
		<div class="row">
			<?php
			foreach ($videos->items as $video) {
				if (isset($video->id->videoId)) {
					echo '
					<div class="col-md-4">
					<h2>' . $video->snippet->title . ' </h2>
						<iframe width="100%" height="500" src="https://www.youtube.com/embed/' . $video->id->videoId . '" frameborder="0" allowfullscreen></iframe>
					
					</div>';
				}
			}
			?>
		</div>
	</div>
</body>

</html>