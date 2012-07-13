<?php
$planet = '';
if (isset($_GET['planet'])) {
$planet = strtolower($_GET['planet']);
}

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title> All Planets</title>
<link href="css/general.css" rel="stylesheet">
</head>
<body>


<nav>
<ul>
<li id="earth"<?php if ($planet != 'jupiter' && $planet != 'mars' && $planet != 'pluto') { ?> class="current"<?php } ?>><a href="">Earth</a></li>
<li id="jupiter"<?php if ($planet == 'jupiter') { ?> class="current"<?php } ?>><a href="">Jupiter</a></li>
<li id="mars"<?php if ($planet == 'mars') { ?> class="current"<?php } ?>><a href="">Mars</a></li>
<li id="pluto"<?php if ($planet == 'pluto') { ?> class="current"<?php } ?>><a href="">pluto</a></li>
</ul>
</nav>



<article>
<?php
switch ($planet) {
case 'jupiter' :
include 'includes/jupiter.php';
break;
case 'pluto' :
include 'includes/pluto.php';
break;
case 'mars' :
include 'includes/mars.php';
break;
default :
include 'includes/earth.php';
break;
}
?>
</article>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/allplanets.js"></script>
</body>
</html>

