<?php
$listOfFields = ["station", "fileName", "RCFSeverityFilter", "RCFRxIP_Address", "RCFRxPortNo", "RCFRxSocketType", "RCFRxIOTimeout", "RCFRxConnectionTimeout", "RCFRxRetryDelay", "RCFStationShortName", "RCFReceiverPositionX", "RCFReceiverPositionY", "RCFReceiverPositionZ", "GASMSeverityFilter","GASMLog","GASMConsole","GASMGui","ICMSeverityFilter", "ICMTxIP_Address", "ICMTxPortNo", "ICMTxSocketType", "ICMTxIOTimeout", "ICMTxConnectionTimeout", "ICMTxRetryDelay", "GRCSMSeverityFilter", "GRDSMSeverityFilter", "GRDSMSampleRate", "GESMSeverityFilter", "ProcessingSeverityFilter", "ProcessingDopplerTolerance", "ProcessingFilterFreq", "OutputSeverityFilter", "OutputRootDirectory"];

//list of all the existing severity filters truncated names. Will be used to add debug and/or notice to their value.
$severityFilters = ["RCF","GASM","ICM","GRCSM","GRDSM","GESM","Processing","Output"];

//connection to the database
function dbConnect() {
	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "myDB";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die('<div class="row">
					<div class="col-lg-12">
						<div class="alert alert-dismissable alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<h1><strong>Unable to connect to the database: '.mysqli_connect_error().'</strong></h1><br/>
							<p class="lead">You may still be able to send configuration files to the station, but the database will not
							keep track of your changes. That can cause problems next time you connect.</p>
						</div>
					</div>
				</div>');
		}
	
	return $conn;

}

?>
