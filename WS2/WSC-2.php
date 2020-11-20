  <!-- ******* WS2_Client ******* -->
<?php
require_once('lib/nusoap.php');
$wsdl = "http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL";
$client = new nusoap_client($wsdl, 'wsdl');
$err = $client->getError();
if ($err) {
   echo '<h2>L\'erreur est :</h2>' . $err;
   exit();
}

$result=$client->call('CountryFlag', array('sCountryISOCode'=>"TN"));
echo "<h2>Result<h2/>";
echo " The Flag of Tunisia :</br>";
echo " <img src='".($result['CountryFlagResult'])."'>";


$r = ($result['CountryFlagResult']);

  if( $r =='Country not found in the database' ){
    echo '<font color="red"><h4>Country not found in the database !!! Enter a correct country Name</h4></font></br>';
  }



// Display the request and response (SOAP messages)
echo '<h2>Request</h2>';
echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
echo '<h2>Response</h2>';
echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
// Display the debug messages
echo '<h2>Debug</h2>';
echo '<pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';
?>
