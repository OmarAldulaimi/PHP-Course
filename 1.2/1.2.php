<?php
header('Content-type: text/plain');
echo "\n";
$iterator = new DirectoryIterator(dirname(__FILE__));
//Utskrift av omgivningsvariabler.
echo "PATH: " . $iterator->getPath() . "\n";
echo "SCRIPT_URL: " . $_SERVER['SCRIPT_NAME']  . "\n";
echo "SCRIPT_URI: " . $_SERVER['REQUEST_URI']  . "\n";
echo "HTTPS: ".$_SERVER['HTTPS']."\n";
echo "HTTP_HOST: ". $_SERVER['HTTP_HOST'] . "\n";
echo "HTTP_CONNECTION: " . $_SERVER['HTTP_CONNECTION'] . "\n";
echo "HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "\n" ;
echo "HTTP_ACCEPT: " . $_SERVER['HTTP_ACCEPT'] . "\n";
echo "HTTP_REFERER: ", getenv('HTTP_REFERER'), "\n";
echo "HTTP_ACCEPT_ENCODING: " . $_SERVER['HTTP_ACCEPT_ENCODING'] . "\n";
echo "HTTP_ACCEPT_LANGUAGE: " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "\n";
echo "HTTP_COOKIE: " .$_SERVER['HTTP_COOKIE']. "\n";
echo "SERVER_SIGNATURE: " .$_SERVER['SERVER_SIGNATURE']. "\n";
echo "\n";
echo "SERVER_SOFTWARE: " . $_SERVER['SERVER_SOFTWARE'] . "\n";
echo "SERVER_NAME: " . $_SERVER['SERVER_NAME'] . "\n";
echo "SERVER_ADDR: " . $_SERVER['SERVER_ADDR'] . "\n";
echo "SERVER_PORT: " . $_SERVER['SERVER_PORT'] . "\n";
echo "REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR'] . "\n";
echo "DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
if ( (! empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') || (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (! empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') ) {
    $server_request_scheme = 'https';
    echo 'REQUEST_SCHEME: https' . "\n";
} else if((! empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'http') || (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (! empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') ){
    $server_request_scheme = 'http';
    echo 'REQUEST_SCHEME: http'. "\n";
}
echo "CONTEXT_PREFIX: " . $_SERVER['CONTEXT_PREFIX']  . "\n";
echo "CONTEXT_DOCUMENT_ROOT: " . $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "\n";
echo "SERVER_ADMIN: " . $_SERVER['SERVER_ADMIN'] . "\n";
echo "SCRIPT_FILENAME: " . $_SERVER['SCRIPT_FILENAME'] . "\n";
echo "REMOTE_PORT: " . $_SERVER['REMOTE_PORT'] . "\n";
echo "GATEWAY_INTERFACE: " . $_SERVER['GATEWAY_INTERFACE'] . "\n";
echo "SERVER_PROTOCOL: " . $_SERVER['SERVER_PROTOCOL'] . "\n";
echo "REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'] . "\n";
echo "QUERY_STRING: " . $_SERVER['QUERY_STRING'] . "\n";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "\n";
echo "SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . "\n";
echo "PHP_SELF: " . $_SERVER['PHP_SELF'] . "\n";
echo "REQUEST_TIME_FLOAT: " . $_SERVER['REQUEST_TIME_FLOAT'] . "\n";
echo "REQUEST_TIME: " . $_SERVER['REQUEST_TIME'] . "\n";


?>