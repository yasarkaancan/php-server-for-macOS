<?php 
error_reporting(E_ERROR | E_PARSE);
    $curFiles = scandir(getcwd().'/htdocs/');
    $pp = array(
        array_search('.', $curFiles) ,
        array_search('..', $curFiles) ,
        array_search('.DS_Store',$curFiles)
    );


for($i = 0; $i < count($pp) ; $i++){
    if($pp[$i] !== false){
        unset($curFiles[$pp[$i]]);
    }
}
rsort($curFiles);
    $arcFiles = scandir(getcwd().'/archive/');
    $aa = array(
        array_search('.', $arcFiles) ,
        array_search('..', $arcFiles) ,
        array_search('.DS_Store',$arcFiles)
    );
for($a = 0; $a < count($aa) ; $a++){
    if($aa[$a] !== false){
        unset($arcFiles[$aa[$a]]);
    }
}
rsort($arcFiles);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<div class="navbar">




		<div class="stuff">
<?php 
echo date("m/d/Y h:i:s a", time());
?>
<br>
				<a href="https://github.com/WangNok/php-server-macOS" target="_blank">github</a><br>
		</div>
	</div>


	<div class="container">
		<div class="cards a">
			<h5>
				Your Projects
			</h5>
<?php 
for($j = 0; $j < count($curFiles) ; $j++){
    echo "<a href='htdocs/".$curFiles[$j]."'>".$curFiles[$j]."</a><br>";
}
if(count($curFiles) === 0){
	echo "<p>htdocs is empty.</p>";
}
?>
		</div>
		<div class="cards b">
			<h5>
				Archive
		<!--	<p>
				<a href="archive">Archive</a> is for storing your old stuff. 
			</p>-->
			</h5>
<?php 
for($r = 0; $r < count($arcFiles) ; $r++){
    echo "<a href='archive/".$arcFiles[$r]."'>".$arcFiles[$r]."</a><br>";
}
if(count($arcFiles) === 0){
	echo "<p>archive is empty.</p>";
}
?>
		</div>
		<div class="cards c">
			<h5>
				Tools
			</h5>
			<a href="phpMyAdmin-5.2.0">phpMyAdmin 5.2.0</a>
			<br>
			<br>
			<a href="adminer-4.8.1.php">Adminer 4.8.1</a>
			<br>
			<br>
			<a href="phpinfo.php" target="_blank">phpinfo()</a>
			<h5>
				Tool Links
			</h5>
			<a href="https://cssgradient.io" target="_blank">CSS Gradient</a><br>
			<a href="https://arraythis.com" target="_blank">ArrayThis</a>
		</div>
	</div>


</body>
</html>