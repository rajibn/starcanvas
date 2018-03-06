<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<title> Consume Partner WSDL of Salesforce using PHP
</title>
</head>
<body>

<?php
	echo 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define("USERNAME", "rajibnaskar@codaemonsoftwares.com");
define("PASSWORD", "Kolkata2018");
define("SECURITY_TOKEN", "TQoyPnDyU3uBjFjiVVdS4ULjO"); //3MVG9d8..z.hDcPLRQ5Bwzc1G2fOHLOTGFq3OqayThBeUTH24SF5FWDFcSfMEaYojoLBbMjnFTHT_ZyWUBxWt

	echo 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh';
require_once ('soapclient/SforcePartnerClient.php');
	echo 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh';
$mySforceConnection = new SforcePartnerClient();
$mySforceConnection->createConnection("PartnerWSDL.xml");
$mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);

echo $query = "UPDATE Contact set Phone="03321219999" where Id="0037F00000RT4oZQAT"";
$response = $mySforceConnection->query($query);
	print_r($response);
//$query1 = "Update Contact set Phone="03321219999" where Id="0037F00000RT4oZQAT"";
//$response2 = $mySforceConnection->query($query1);
	


?>
<!--<div id="wrapper">
	<div id="page1">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#"> Force.com Toolkit for PHP </a></h2>
						<p class="meta"><span class="date">Using Partner WSDL</span><span class="posted">WebService</span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
								<a href="javascript:void(0);">							
								<?php
									echo "Results of query '$query'<br/><br/>\n";
								?>
								</a>
							<table>
								<tr>
									<th>Contact ID </th>
									<th>First Name</th>
									<th> Last Name </th>
									<th>Phone </th>
								</tr>
								<?php
									foreach ($response->records as $record) {
										echo '<tr> 
													<td>'.$record->Id.'</td>
													<td>'.$record->fields->FirstName.'</td>
													<td>'.$record->fields->LastName.'</td>
													<td>'.$record->fields->Phone.'</td>
											 </tr>';
										 }
								?>
							</table>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				

			</div>
		</div>
	</div>
	
</div>-->

</body>
</html>

