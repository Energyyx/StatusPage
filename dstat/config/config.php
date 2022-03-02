<?php
//EN
//CONFIGURATION
//SITE NAME (THE TITLE)
$sitename = 'EnergyyxDev - Dstat';



$zone = 'US';

//Data transferred or received
//RX = received          TX = transferred
$datatype = 'RX';

//Language - Langue
//EN = english
$lang = 'EN';

//Name of interface
//Usually is 'eth0', otherwise relpace with your
$interface = 'eth0';

// Ip of your server
$ip = gethostbyname('' . $_SERVER['HTTP_HOST'] . ''); //if u wanna change, replace with $ip = "IP_OF_THE_SERVER";
$port = "80";

//Graph title
$Layer4Title = "Layer 4 ==> {$ip} PORT {$port} <==";
$Layer7Title = "Layer 7 ==> {$ip} PORT {$port} <==";
