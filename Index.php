<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Contact Details</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <style>
        body {
            padding-top: 60px;
        }
    </style>
    
</head>
    <?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
define("USERNAME", "rajibnaskar@codaemonsoftwares.com");
define("PASSWORD", "Kolkata2018");
define("SECURITY_TOKEN", "TQoyPnDyU3uBjFjiVVdS4ULjO"); //3MVG9d8..z.hDcPLRQ5Bwzc1G2fOHLOTGFq3OqayThBeUTH24SF5FWDFcSfMEaYojoLBbMjnFTHT_ZyWUBxWt

require_once ('soapclient/SforcePartnerClient.php');	
$mySforceConnection = new SforcePartnerClient();
$mySforceConnection->createConnection("PartnerWSDL.xml");
$mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);

$query = "SELECT Id, FirstName, LastName, Phone, Email, GiftName__c, GiftUrl__c from Contact";
$response = $mySforceConnection->query($query);
//$query1 = "Update Contact set Phone="03321219999" where Id="0037F00000RT4oZQAT"";
//$response2 = $mySforceConnection->query($query1);
	


?>
<body>
    <!--<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="https://starcanvasphp.herokuapp.com/Test.php">Contact Details</a>
            </div>
        </div>
    </nav>-->
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void();">Star Canvas</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="https://starcanvasphp.herokuapp.com/Test.php">Home</a></li>
      <!--<li><a href="https://starcanvasphp.herokuapp.com/Update.php">Update Contact</a></li>-->
      <li><a href="https://starcanvasphp.herokuapp.com/Test.php" target="_blank"><button type="button" class="btn btn-warning">Click View Canvas App</button></a></li>
      <!--<li><a href="#">Page 3</a></li>-->
    </ul>
  </div>
</nav>
    <div class="container">
        
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Contact Details</h3>
                </div>
                <div class="panel-body">
			<table class="table">
			  <thead class="thead-light">
			    <tr>
			      <!--<th scope="col">Id</th>-->
			      <th scope="col">First Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">Phone</th>
			      <th scope="col">Email</th>
			      <th scope="col">GiftName</th>
			      <th scope="col">GiftUrl</th>
		              <th scope="col">Action</th>    
			    </tr>
			  </thead>
			  <tbody>
			<?php foreach ($response->records as $record) {	  ?>
			    <tr>
			      <!--<th scope="row"><?=$record->Id?></th>-->
			      <td><?=$record->fields->FirstName?></td>
			      <td><?=$record->fields->LastName?></td>
			      <td><?=$record->fields->Phone?></td>
			      <td><?=$record->fields->Email?></td>
			      <td><?=$record->fields->GiftName__c?></td>
			      <td><a href="<?=$record->fields->GiftUrl__c?>" target="_blank" title="<?=$record->fields->GiftName__c?>" ><?=$record->fields->GiftUrl__c?></a></td>
			      <td><a href="https://starcanvasphp.herokuapp.com/Update.php?Id=<?=$record->Id?>">
				  <button type="button" class="btn btn-default btn-sm">
                                  <span class="glyphicon glyphicon-pencil">Edit</span> 
				  </button>
				  </a>
			     </td> 
			    </tr>
			<?php } ?>    
			  </tbody>
			</table> 

                </div>
                
            </div>
    </div>
    
</body>
</html>
