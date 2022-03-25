<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IT-support</title>
	<link rel="stylesheet" href="https://fonts.xz.style/serve/inter.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@exampledev/new.css@1.1.2/new.min.css">
</head>
<body>
<header>
	<h1>IT-support</h1>
</header>
 
<p>Har du frågor om din enhet? Kontakta Rasmus Pettersson Vik.</p>

<p>Skriv på Teams eller skicka ett mejl. Om det är akut går det bra att ringa. Ta gärna en titt i <a target="_blank" href="https://kanslistod.svenskakyrkan.se">Kanslistöds serviceportal</a> om ditt ärende kan hanteras där.</p>

<br>
<hr>
<br>
<h4>Namn Namn</h4>
<p>
<ul style="list-style-type:square">
	<li>📧 <a href="ms-outlook://compose?to=rasmus.pettersson-vik@svenskakyrkan.se">Skicka ett mail</a></li>
	<li>💬 <a href="https://teams.microsoft.com/l/chat/0/0?users=rasmus.pettersson-vik@svenskakyrkan.se">Chatta på Teams</a></li>
	<li>📞 <a href="tel:+4661128854" Ring helst 0611-288 54</a>, jag nås också på <a href="tel:+46703647910">070-364 79 10</a></li>
</ul>
</p>
<br>
<hr>
<br>
<?php if (isset($_GET['metadata'])) { ?> 
<table>
	<tbody>
		<?php if (isset($_GET['DEVICENAME'])) { ?>
		<tr>
			<td>Enhetsnamn</td>
			<td><?php echo $_GET['DEVICENAME']; ?></td>
		</tr><?php } ?>
		<?php if (isset($_GET['DEVICEMODEL'])) { ?>
		<tr>
			<td>Modellnamn</td>
			<td><?php echo $_GET['DEVICEMODEL']; ?></td>
		</tr><?php } ?>
		<?php if (isset($_GET['DEVICESERIAL'])) { ?>
		<tr>
			<td>Serienummer</td>
			<td><?php echo $_GET['DEVICESERIAL']; ?></td>
		</tr><?php } ?>
		<?php if (isset($_GET['IMEI'])) { ?>
		<tr>
			<td>IMEI</td>
			<td><?php echo $_GET['IMEI']; ?></td>
		</tr><?php } ?>
		<?php if (isset($_GET['MACADDRESS'])) { ?>
		<tr>
			<td>Wi-Fi-adress</td>
			<td><?php echo $_GET['MACADDRESS']; ?></td>
		</tr><?php } ?>
		<?php if (isset($_GET['OWNEREMAIL'])) { ?>
		<tr>
			<td>Mejladress</td>
			<td><?php echo $_GET['OWNEREMAIL']; ?></td>
		</tr><?php } ?>
		<?php if (isset($_GET['USERNAME'])) { ?>
		<tr>
			<td>Användarnamn</td>
			<td><?php echo $_GET['USERNAME']; ?></td>
		</tr><?php } ?>
	</tbody>
</table>
<br>
<hr>
<br>
<a href="si.360.emeetings://settings?url_preference=https%3A%2F%2Femeetings.svenskakyrkan.se&Username=<?php echo $_GET['USERNAME']; ?>&Domain=knet">Aktivera eMeetings-appen</a>
<?php } ?>
</body>
</html>
