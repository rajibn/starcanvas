<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phone Changer</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <style>
        body {
            padding-top: 60px;
        }
    </style>
    
</head>
    <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define("USERNAME", "rajibnaskar@codaemonsoftwares.com");
define("PASSWORD", "Kolkata2018");
define("SECURITY_TOKEN", "TQoyPnDyU3uBjFjiVVdS4ULjO"); //3MVG9d8..z.hDcPLRQ5Bwzc1G2fOHLOTGFq3OqayThBeUTH24SF5FWDFcSfMEaYojoLBbMjnFTHT_ZyWUBxWt
require_once ('soapclient/SforcePartnerClient.php');	
	
?>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Phone Number Changer</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <form id="phoneChangerForm" action="/update" method="post" style="width: 400px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Your Phone Number</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="For verification" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="For verification" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="For verification" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" placeholder="New Phone Number" required>
                    </div>
                </div>
                <div class="panel-footer">
                    <div id="message" class="alert alert-info" role="alert" style="display: none;">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        <span id="messageMessage"></span>
                    </div>
                    <div id="error" class="alert alert-danger" role="alert" style="display: none;">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        <span id="errorMessage"></span>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Phone Number</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>
