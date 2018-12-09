<html>
<head>
<title>1337</title>
<link rel="icon" href="hacker.png">
</head>
<body style="background-color: #031617">
<?php
$file="users.txt";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

	fclose($handle);
?>
<center>
<p style="font-size: 64px;">1337</p>
<p style="font-size: 18px;">Discord: ❤ 𝙻𝚞𝚔𝚊𝚜 ❤#8364</p>
<img width="300" height="300" src="head.gif"/>
</center>
<table>
  <tr>
    <th>IP-Adress</th>
    <th>UserAgent</th>
    <th>Timestamp</th>
  </tr>
  <?php
	$lines = file($file);
	for($i == 0; $i <= $linecount - 2; $i++) {
		?>
		<tr>
		<td>
		<?php
		$linefinished = explode("*", $lines[$i]);
		echo $linefinished[0];
		?>
		</td>
		<td>
		<?php
		echo($linefinished[1]);
		?>
		</td>
		<td>
		<?php
		echo($linefinished[2]);
		?>
		</td>
		</tr>
		<?php
	}
		?>
	
  
</table>
</body>
</html>

<style>
* {
	color: white;
	font-family: Arial;
	text-decoration: none;
}

table {
	margin: auto;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  padding: 10px;
  border: 1px solid #dddddd;
}

td, th {
  border: 1px solid #dddddd;
  text-align: right;
  padding: 2px;
}


</style>