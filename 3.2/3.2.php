<?php

$path_name =  $_SERVER['SCRIPT_NAME'];
$script_url= $_SERVER['SCRIPT_NAME'];
$script_uri=  $_SERVER['REQUEST_URI'];
$http_host = $_SERVER['HTTP_HOST'];
$http_connection= $_SERVER['HTTP_CONNECTION'];
$http_user_agent= $_SERVER['HTTP_USER_AGENT'];
$http_accept= $_SERVER['HTTP_ACCEPT'];
$http_accept_encoding= $_SERVER['HTTP_ACCEPT_ENCODING'];
$http_accept_language= $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$http_cookie =$_SERVER['HTTP_COOKIE'];
$server_signature = $_SERVER['SERVER_SIGNATURE'];
$server_software= $_SERVER['SERVER_SOFTWARE'];
$server_name= $_SERVER['SERVER_NAME'];
$server_addr= $_SERVER['SERVER_ADDR'];
$server_port= $_SERVER['SERVER_PORT'];
$remote_adde= $_SERVER['REMOTE_ADDR'];
$document_root= $_SERVER['DOCUMENT_ROOT'];
$request_scheme= $_SERVER['REQUEST_SCHEME'];
$context_prefix= $_SERVER['CONTEXT_PREFIX'];
$context_document_root= $_SERVER['CONTEXT_DOCUMENT_ROOT'];
$server_admin= $_SERVER['SERVER_ADMIN'];
$script_filename= $_SERVER['SCRIPT_FILENAME'];
$remote_port= $_SERVER['REMOTE_PORT'];
$gateway_interface= $_SERVER['GATEWAY_INTERFACE'];
$server_protocol= $_SERVER['SERVER_PROTOCOL'];
$request_method= $_SERVER['REQUEST_METHOD'];
$query_string= $_SERVER['QUERY_STRING'];
$request_uri= $_SERVER['REQUEST_URI'];
$script_name= $_SERVER['SCRIPT_NAME'];
$php_self= $_SERVER['PHP_SELF'];
$request_time_float= $_SERVER['REQUEST_TIME_FLOAT'];
$request_time= $_SERVER['REQUEST_TIME'];
$html = file_get_contents("3.2.html");
	eval("print \"" . addcslashes(preg_replace("/(---(.+?)---)/", "\\2", $html), '"') . "\";");


?>