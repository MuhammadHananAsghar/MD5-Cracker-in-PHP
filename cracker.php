<!DOCTYPE HTML>
<html>
<head>
<title>Muhammad Hanan Asghar MD5 Cracker</title>
</head>
<bodY>
<h1>MD5 Cracker By MH</h1>
<p>This application takes an MD5 hash of a four digit pin and check all 9999 or 10000 possible four digit PINs to determine the PIN.</p>
<pre>
Debug Ouptut:
<?php
$defaulttext = "Not found";
$start = microtime(true);
if(isset($_GET['md5'])){
$flag = 1;
$md5 = $_GET['md5'];
for($i=0;$i<10000;$i++){

	$md5_hash = hash('md5',strval($i));
	if($i < 15){
		print($md5_hash." ".$i."\n");
	}
	if($md5_hash == $md5){
		global $flag;
		$flag = 0;
		print("\n"."Total Checks : 9999"."\n"."\n");
		break;
		}
	
}
$time_elapsed_secs = microtime(true) - $start;
print('Time Elapsed : '.$time_elapsed_secs."\n"."\n");
print('PIN: '.$i."\n");
if($flag == 1){
	print('PIN: '.$defaulttext);
	}
	
}

?>
</pre>
<form>
<input type="text" name="md5" size="60"/>
<input type="submit" value="Check MD5"/>
</form>
</bodY>
</html>
