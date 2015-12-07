<!DOCTYPE html>
<html lang="en">
<head>
<title>Ernst Family Tree</title>
<meta charset="utf-8">
<meta name="author" content="Sam Swanke, Tommy Ernst">
<meta name="description" content="The family lineage of Tommy Ernst. Created for our CS148 Final Project.">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/base.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/extra.css" type="text/css" media="screen">

<?php
// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// PATH SETUP
//
//  $domain = "https://www.uvm.edu" or http://www.uvm.edu;
 $domain = "http://";
if (isset($_SERVER['HTTPS'])) {
    if ($_SERVER['HTTPS']) {
        $domain = "https://";
    }
}

$server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");

$domain .= $server;

$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

$path_parts = pathinfo($phpSelf);

if ($debug){
    print "<p>Domain" . $domain;
    print "<p>php Self". $phpSelf;
    print "<p>Path Parts<pre>";
    print_r($path_parts);
    print "</pre>";
}

// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// inlcude all libraries
//

require_once('lib/security.php');

if ($path_parts['filename'] == "form") {
    include "lib/validation-functions.php";
    include "lib/mail-message.php";
}
?>	

</head>
<!-- ################ body section ######################### -->

<?php

print '<body id="' . $path_parts['filename'] . '">';

include "header.php";
include "nav.php";

?>