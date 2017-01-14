<?php
// Codeigniter access check, remove it for direct use
if( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

$config['redis'] = array (  "scheme"=>"tcp",
                            "host"=>"127.0.0.1",
                            "port"=>6379,
                            "user"=>"",
                            "password" => "",
                            "database"=>5 );