<?php

/** NOTES **
@TODO rename all request files to match class name (to use autoload)
@TODO ting_client_validate_xsd is drupal specific - do something
*/
require_once('ting_client_class.php');
//require_once('includes/nanosoap/nanosoap.inc');

// @TODO get class in a smarter way
//require_once('ting-client/lib/request/open_adhl.request.inc');

/*$url = 'http://lakiseks.dbc.dk/openadhl/3.0/';*/
$params = array(
'outputType' => 'xml',
'action' => 'adhlRequest',
'id' => array('pid'=>'870970-basis:27262589'),
'numRecords'=>10,
);

/*$params = array(
'action' => 'forsRightsRequest',
'userIdAut' => 'netpunkt',
'groupIdAut' => '010100',
'passwordAut' => '20Koster',
);*/

$client = new ting_client_class();
//$client->do_request('forsrights',$params);
$client->do_request('adhl',$params);

// initialize request object
//$adhl = new OpenAdhlRequest($url);
//set parameters
//$adhl->setParameters($params);
// initiialize soap client 
//$client = new TingNanoClient($url);
// initialize request adapter
//$adapter = new TingClientRequestAdapter($client);
// initialize ting client
//$client = new TingClient($adapter);
// execute the request
//$result = $client->execute($adhl);
//$result = $client->execute($adhl);

//var_dump($result);
