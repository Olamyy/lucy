<?php
// Codeigniter access check, remove it for direct use
if( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );


$config["rmq"] = array("host"=>"192.168.1.3",
                        "port"=>"5672",
                        "username"=>"guest",
                        "password"=>"guest");


$config["rmq-queue"] = array("ver-queue" => "verification-queue");

$config["rmq-msg"] = array(
    "ver-msg" => "Use access code {CODE} to gain entry when next you login, you can however change it from profile update.",
);
