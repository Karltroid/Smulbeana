<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- meta/seo info-->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="content-language" content='en-US'>
		<meta name="robots" content="index, follow">
		<meta name="title" content="Smulbeana">
		<meta name="description" content="Smulbeana's Minecraft Server, Twitch, Youtube, Discord, Tiktok, Instagram and Twitter">
		<meta name="keywords" content="Smulbeana, Twitch, Streamer, Youtube, Content, Creator, Gamer">
		<meta name="language" content="English">
		<meta name="author" content="Smulbeana">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- stylesheets & scripts -->
		<link rel="stylesheet" type="text/css" href="../../styles/vars.css">
		<link rel="stylesheet" type="text/css" href="../../styles/desktop.css">
		<link rel="stylesheet" type="text/css" media="(max-width: 990px)" href="../../styles/mobile.css">
		<script src="../../scripts/gotopage.js"></script>

		<!-- site title & icon -->
		<link rel="shortcut icon" href="../../images/media/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../../images/emotes/beanaHeart x112.png" type="image/x-icon">
		<title>Smulbeana</title>
	</head>
	<body>

		<?php include "../page_elements/header.html">

		<div id="body-content">
			<div id="device" class="questionare">
				<h1>What device are you playing on?</h1>
				<div class="answers">
					<div onclick="loadprompt('device','edition');" style="background-image: url('../../images/icons/other/computer.png');">
						Computer
					</div>
					<div onclick="loadprompt('device','bedrock-tutorial');" style="background-image: url('../../images/icons/other/mobile.png');">
						Mobile
					</div>
					<div onclick="loadprompt('device','console-tutorial');" style="background-image: url('../../images/icons/other/console.png');">
						Console
					</div>
				</div>
			</div>
			<div id="edition" class="questionare hide">
				<h1>Which Minecraft Edition?</h1>
				<div class="answers">
					<div onclick="loadprompt('edition','java-tutorial');" style="background-image: url('../../images/minecraft/javamenu.jpg');">
						Java Edition
					</div>
					<div onclick="loadprompt('edition','bedrock-tutorial');" style="background-image: url('../../images/minecraft/bedrockmenu.jpg');">
						Bedrock Edition
					</div>
				</div>
			</div>

			<div id="java-tutorial" class="tutorial hide">
				<h1>Step 1</h1>
				<p>Press 'Multiplayer'</p>
				<img src="../../images/minecraft/javatutorial/1.jpg" />

				<h1>Step 2</h1>
				<p>Press 'Add Server'</p>
				<img src="../../images/minecraft/javatutorial/2.jpg" />

				<h1>Step 3</h1>
				<p>Enter the server name and address (mc.smulbeana.net)</p>
				<img src="../../images/minecraft/javatutorial/3.jpg" />

				<h1>Step 4</h1>
				<p>Press 'Join Server' - you're done, have fun!</p>
				<img src="../../images/minecraft/javatutorial/4.jpg" />
			</div>

			<div id="bedrock-tutorial" class="tutorial hide">
				<h1>Step 1</h1>
				<p>Press 'Play'</p>
				<img src="../../images/minecraft/bedrocktutorial/1.jpg" />

				<h1>Step 2</h1>
				<p>Press 'Servers'</p>
				<img src="../../images/minecraft/bedrocktutorial/2.jpg" />

				<h1>Step 3</h1>
				<p>Scroll down and click 'Add Server'</p>
				<img src="../../images/minecraft/bedrocktutorial/3.jpg" />

				<h1>Step 4</h1>
				<p>Enter the server name, address (mc.smulbeana.net), and port (19132)</p>
				<img src="../../images/minecraft/bedrocktutorial/4.jpg" />

				<h1>Step 5</h1>
				<p>Press on the server entry we just created</p>
				<img src="../../images/minecraft/bedrocktutorial/5.jpg" />

				<h1>Step 6</h1>
				<p>Press 'Join Server' - you're done, have fun!</p>
				<img src="../../images/minecraft/bedrocktutorial/6.jpg" />
			</div>

			<div id="console-tutorial" class="tutorial hide">
				<h1>Step 1</h1>
				<p>Make sure your console and phone are on the same internet/wifi connection</p>

				<h1>Step 2</h1>
				<p>Go to the app store and download 'BedrockTogether' - or download 'MC Server Connector' alternatively if BedrockTogether doesn't work for you, they work basically the same</p>
				<img src="../../images/minecraft/consoletutorial/2.jpg" />

				<h1>Step 3</h1>
				<p>Open the app and enter the server IP (mc.smulbeana.net) and port (19132) - then click 'Watch Ad and Run' - Wait for the Ad to finish</p>
				<img src="../../images/minecraft/consoletutorial/3.jpg" />

				<h1>Step 4</h1>
				<p>On your console press 'Play'</p>
				<img src="../../images/minecraft/bedrocktutorial/1.jpg" />

				<h1>Step 5</h1>
				<p>In the 'Friends' tab you should see 'LAN Games' with the BedrockTogether server you started, join it and you're good to join!</p>
				<img src="../../images/minecraft/consoletutorial/5.jpg" />
			</div>
		</div>
		
	</body>
</html>