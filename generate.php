<?php
include('parts.php');

//include_once('Spyc.php');
#$data = spyc_load_file('ServerListPlus.yml');
//var_dump($data)
//print_r($data['Default']['Description']);

//$yaml = spyc_dump($data);

$stub = "&bsushituesday.club";
//echo($yaml);
$my_file = 'test.yml';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);


 $mysqli = new mysqli("localhost", "root", "pass", "motd");

$query = "SELECT * FROM motds";
$result = $mysqli->query($query);

if(!$result) die("Oh crap...: " . mysql_error());

$motd_all = "";
$i = 1;
$total_num = mysqli_num_rows($result);
foreach($result as $motd){
    $motd = $motd['text'];
    $plug="
    - |-
     &6".$motd."
     ".$stub."&r [".$i."/".$total_num."]";
    $i = $i+1;
$motd_all = $motd_all.$plug;
}




fwrite($handle, $head.$motd_all.$mid.$motd_all.$foot);

copy($my_file, "/root/spigot/plugins/ServerListPlus/ServerListPlus.yml");
?>
