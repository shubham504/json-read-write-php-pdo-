<?php
/*
 * 
 * 
 * 
 * 
 * 
 */

require_once("configure.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="http://www.thesoftwareguy.in/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Read and Write json file using php and myql">
<meta name="keywords" content="read write json file php mysql">
<meta name="author" content="Shahrukh Khan">
<title>Read and write json file with php and mysql - www.thesoftwareguy.in</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="container">
  <div id="body">
    <div class="mainTitle" >Read and write json file with php and mysql</div>
    <div class="height10"></div>
    <article>
	<div style="text-align:left; " >
		<a href="write-json.php" title="Write Json To File" ><img src="images/button2.png" alt="Write Json To File" width="215" height="43"> </a>    
    </div>
	<div class="height10"></div>
	<table style="width:100%;">
	<tr>
		<td width="30%"><div class="grt">json file: file1.json</div></td>
		<td width="70%">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" valign="top">
		<div style="height:300px; background:#CCCCCC; color:#000000; overflow:scroll; float:left">
		<pre>
[
    {
        "player_name": "Sachin Tendulkar",
        "country": "India",
        "sports": "Cricket"
    },
    {
        "player_name": "Roger Federer",
        "country": "Switzerland",
        "sports": "Tennis"
    },
    {
        "player_name": "David Beckham",
        "country": "England",
        "sports": "Football"
    },
    {
        "player_name": "Tiger Woods",
        "country": "USA",
        "sports": "Golf"
    },
    {
        "player_name": "Sebastian Vettel",
        "country": "Germany",
        "sports": "Formula One"
    },
    {
        "player_name": "Maria Sharapova",
        "country": "Russia",
        "sports": "Tennis"
    },
    {
        "player_name": "Viswanathan Anand",
        "country": "India",
        "sports": "Chess"
    },
    {
        "player_name": "Mahendra Singh Dhoni",
        "country": "India",
        "sports": "Cricket"
    },
    {
        "player_name": "Donald Bradman",
        "country": "Australia",
        "sports": "cricket"
    }
]
		</pre>
		</div>
		</td>
		<td valign="top" >
		<?php if (!isset($_GET["read"]) && $_GET["read"] == "") { ?>
		<a href="read-json.php?read=1" style="text-align:center;margin-left:10px;" title="Click to load json file" ><img src="images/button5.png" alt="Click to load json file" width="224" height="40"> </a>
		<?php } else { ?>
		<table class="bordered" style="margin-left:3%; width:96%" >
		<thead>
		<tr> 
			<th style="font-weight:bold;text-align:left;width:34%;">Name</th>
			<th style="width:33%;text-align:center;font-weight:bold;">Country</th>
			<th style="width:33%;text-align:center;font-weight:bold;">Sports</th>
		</tr>
		</thead>
		<?php
		$string = file_get_contents("file1.json");
		$jsonRS = json_decode ($string,true);
		foreach ($jsonRS as $rs) {
		?>
		<tr>
			<td ><?php echo stripslashes($rs["player_name"]) ?></td>
			<td style="text-align:center"><?php echo stripslashes($rs["country"]) ?></td>
			<td style="text-align:center;"><?php echo stripslashes($rs["sports"]) ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
		<?php } ?>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	</table>
	
	  <div class="height10"></div>
	  <div class="height10"></div>
	</article>
    <footer>
      <div class="copyright"> &copy; 2013 <a href="http://www.thesoftwareguy.in" target="_blank">thesoftwareguy</a>. All rights reserved </div>
      <div class="footerlogo"><a href="http://www.thesoftwareguy.in" target="_blank"><img src="http://www.thesoftwareguy.in/thesoftwareguy-logo-small.png" width="200" height="47" alt="thesoftwareguy logo" /></a> </div>
    </footer>
  </div>
</div>
</body>
</html>
