<?php

## Simple command-line script to show examples

require $_SERVER['DOCUMENT_ROOT']."/daemon.php";

$config = array(
    'user' => 'dogecoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '22555' );

// create client conncetion
$doge = new Doge( $config );


// create a new address
$address = $doge->get_address( 'DreamingCoders' );
print( "Address: $address \n" );

// list accounts in wallet
print_r( $doge->list_accounts() );

// get balance in wallet
print( "DreamingCoders: " . $doge->get_balance( 'DreamingCoders' ) );

// move money from accounts in wallet
// moves from 'example' to account 'DreamingCoders'
//$doge->move( 'example', 'DreamingCoders', 10000 ); // Line to move doge

// send money externally (withdrawl?)
// send from account to external address
//$doge->send( 'DreamingCoders', 'ANdx1GL4sbCyikaVgYrf2Gfi8N', 100 ); // Line to send doge

?>
