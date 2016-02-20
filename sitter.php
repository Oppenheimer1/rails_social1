<?php
require_once __DIR__.'/lib/Sittercity/API/Client.php';

$client = new \Sittercity_API_Client('https://api-staging.sittercity.com/');
$client->registerApp('Your application name');

$results = $client->search( array( 'caretype'=>'babysitter',
                                  'lat'=>41.9218996,
                                  'long'=>-87.6514868,
                                  'size'=>10,
                                  'from'=>0,
                                  'radius'=>25));
// Print results
print_r($results);

// Print errors
print_r($client->getErrors());

?>