<html>
	<head>
		<title>GRSPi01@TRIUMF</title>
		<META HTTP-EQUIV="refresh" CONTENT="15">
		<style>
			body {
				width: 50em;
				margin: 0 auto;
				font-family: Tahoma, Verdana, Arial, sans-serif;
			}
		</style>
	</head>
	<body>
		<h1>GRSPi01@TRIUMF</h1>

		<p><b>Current Location:</b> Detector Hospital, ISAC-II<br>
		<b>Currently Monitoring:</b> GRIF12 HPGe Heating/Pumping Cycle (Maintenance) <br>
		<b>Last Calibrated:</b> 2016-07-29 17:29 <br>
		<b>Notes:</b> PT100 (1) is the temperature of the detector. IG and TC2 are pressure from the Ion Gauge and Thermocouple 2 (respectively). Ignore PT100 (2), it is not connected. <br>
		<b>Info Last Updated:</b> 2016-08-10 10:55 <br></p>

		<p><b>The most up-to-date measurement was at...</b><br> <?php include "../../mnt/EXFAT/datalogs/currentReading.txt"; ?>
		<br>The page automatically refreshes every 15 seconds.</p>

		<p><a href="plots.html">Up-to-date Temperature and Pressure Plots</a></p>
		<p><a href="datalogs.php">Download Datalog Files</a>	</p>

		<p>Email alexander.kurkjian@carleton.ca if there are any problems.</p>
	</body>
</html>
