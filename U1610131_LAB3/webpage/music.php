<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>

<?php
$files=glob("songs/*.{m3u,txt}", GLOB_BRACE); 
$music=glob("songs/*.mp3");?>

		<div id="listarea"><ul id="musiclist"><?php
			foreach($music as $music){?><li class="mp3item">
					<a href=" songs/<?= basename($music)?>"><?= basename($music)?></a>
				<?php } ?></li>

<?php foreach($files as $files){ ?>
				<li class="playlistitem">
					<a href="songs/<?=basename($files)?>"><?= basename($files)?></a>
				
</li><?php }?></ul></div></body>
</html>