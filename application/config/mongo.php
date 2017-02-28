<?php
// Codeigniter access check, remove it for direct use
if( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

$config['mongo'] = array('host'=>'localhost',
    'port'=>'27017',
    'user'=>'',
    'password'=>'',
    'database'=>'soccer_Trivial');

$config['mongo_indexes'] = array(
    'admin' =>[
        [ 'key' => [ 'password' => 1 ], 'unique' => true ],
    ],
    'users'=>[
       ['key'=>['username'=>1],'unique'=>true],
       ['key'=>['msisdn'=>1],'unique'=>true],
    ],
    //'clubs'=>array(array('key'=>array('abbrev'=>true},'unique'=>true))
    'clubs'=> [
        [ 'key' => [ 'name' => 1 ], 'unique' => true ],
    ],
    'question' => array(
        array('key'=>array('question'=>1), 'unique' => true, 'expire'=>'' , )
    )

);

$config['mongo_models'] = array(
    'admin' => 'admin',
    'users'=> 'user_profile',
    'leagues' => 'league_info',
    'clubs'=>'club_details',
    'question' => 'questions',
    'history'=>'history',
    'payment'=>'payment',
);


