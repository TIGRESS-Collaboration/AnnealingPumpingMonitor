<html>
    <head>
        <title>GRSPi01@TRIUMF</title>
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
        <p>Datalog files can be downloaded from the dropdown list. A few things to note:
            <ul>
				<li>currentReading.txt is only the most up-to-date measurement (used on the index page)
                <li>datalog.csv is a cummulative datalog file from EVERY run (you probably don't want this one)
                <li>The rest of the files are identifiable by their timestamp in the filename, datalog_YYYYMMDD_hhmmss.csv, which serves as the start time of the run
                <ul><li>Example: datalog_20160302_145213.csv started 2 March, 2016 at 14:52:13 (2:52:13pm)</ul>
				<li>A new datalog file is generated daily at midnight
                <li>The first few measurements of the run will seem off. This effect is due to the lowpass filter, which eliminates any rapid, high-frequency noise
				<li>The Thermocouple and ConvecTorr Gauge 2 (TC2) measures pressure from  1.0E-01 Torr to 1.0E03 Torr
                <li>The Ion Gauge (IG) measures pressure from 4.0E-11 Torr to 1.0E-01 Torr
            </ul>
		</p>
		<p>Please select a datalog file to download: <br>
		<form onsubmit="this.action = document.getElementById('file').value">
        <select id="file">
            <option value=""> Select File </option>
            <?php
                foreach(glob(dirname(__FILE__) . '/datalogs/*') as $filename){
                    $filename = basename($filename);
                    echo "<option value='/datalogs/" . $filename . "'>".$filename."</option>";
                }
            ?>
        </select>
		<input type="submit" value="Download" class="grey-btn" />
		</form>
		</p>
        <p><a href="index.php">Homepage (Current Measurement)</a>    </p>
    </body>
</html>

