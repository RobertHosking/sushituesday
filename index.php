<div class="container">
 <div class="logo"></div>
<link rel="stylesheet" href="style.css"></link>
 <input type="checkbox" id="search" hidden="hidden" checked /> 
<label for="search">
    <span class="fa fa-search"></span>
  </label>
  <main>
    <section class="search">
      <form action="index.php" method="post">
        <input type="search" name="motd" placeholder="Enter an MOTD...">
        <div class="advanced">
        </div>
<style>
p{
font-family: monospace;
}
</style>
<div>
<?php
if ( !empty($_POST) ) {




    if($_POST['motd']==''){
    }else{

         
        



    $mysqli = new mysqli("localhost", "root", "pass", "motd");
$query = "INSERT INTO motds (text) VALUES('".$_POST['motd']."');";
    $result = $mysqli->query($query);
    $says = ["Keep 'em comming!", "Nice one! Got another?", "Another one!", "Bet you can't do that again?", "You're on a roll!"];
    $say = $says[array_rand($says)];
    echo "<h1 style='text-align:center; color:#fff;'>".$say."</h1>";
    echo "<p style='text-align:center; color:#fff'>Added: \"".$_POST['motd']."\"</p>";
    
    //include_once('generate.php');
    }
}else{
    echo'

<hr style="max-width: 33%; border-width:15px;">
<p style="font-weight:bold; font-family:monospace;">
A Minecraft Server
</p>

<hr style="max-width: 33%; border-width:15px;">

<p style"font-size:12px; margin:0;padding:0;"><a style="margin:0; padding:0;font-size:0.6em; color:#fff; margins:0;padding:0;" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=AWPBGQ948BK5A">
Donate using PayPal
</a></p>
<p style="font-size:1em; margin:0; padding:0;">BTC: 1NsNg7f518aDb98RshUnfbax7Hkfwmn9T1</p>
<p style="font-size:1em; margin:0; padding:0;">LTC: LTWcTxBeAnXX3AZCGxaLn45LVnEofJpL2u</p>
<p style="font-size:1em; margin:0; padding:0;">ETH: 0x3cB7F5118A6367f1A303FADd94bDA7f12532dD28</p>
<p style="font-size:1em; margin:0; padding:0;">BTH: 17vFpGcVfb6stFBTNF49iaTb1xJ1UkyEwN</p>
';
}
?>
</div>
      </form>
    </section>
  </main>
  
</div>
