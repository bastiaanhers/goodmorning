<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript" src="style.css"></script>
	<title>good morning</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<script> 
	var timeOut = setTimeout(loadlink, 1000);

		function loadlink(){
	   	 $('#banaan').load('banaan.php #banaan',function () {
	   	 	$(this).unwrap();
			timeOut = setTimeout(loadlink, 1000);
	    	});

		}
	</script>
	<div id="banaan">
	<?php
	date_default_timezone_set("Europe/Amsterdam");
	$time = date("H:i:s");
	if ($time >= "06" and $time < "12") {
		echo "<style> body{background-image: url(backgrounds/morning.png);} </style>"; 
		echo "<h1> Good Morning $time</h1>";
	} elseif ($time >="12" and $time <"18") {
		echo "<style> body{background-image: url(backgrounds/afternoon.png);} </style>"; 
		echo "<h1> Good Afternoon $time</h1>";
	} elseif ($time >="18" and $time <"24") {
		echo "<style> body{background-image: url(backgrounds/evening.png);} </style>"; 
		echo "<h1> Good Evening $time</h1>";
	}else {	
		echo "<style> body{background-image: url(backgrounds/night.png);} </style>"; 
		echo "<h1> Good Night $time</h1>";
	}

	  ?> 
	</div>

</body>
</html>