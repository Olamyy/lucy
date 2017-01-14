<?php
// Codeigniter access check, remove it for direct use
if( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

$config["app_name"] = "Lucy";
$config["app_league"] = array('English Premier League','Spanish Laliga','Bundesliga','Italian Serie A','Portuguese Liga','French Ligue');
$config["fetcher_url"] = "http://msisdn.terragonbase.com/tmoniF/get-msisdn/";
$config["fetcher_url_redirect"] = "http://msisdn.terragonbase.com/tmoniF/fetch-msisdn/?redirect_url=";

$config["app_club_icons"] = array('path'=>BASEPATH.'../public/icon_120','url'=>'public/icon_120/');
$config["app_answer_key"] = "#ANS:";
$config["app_question_points"] = 20;
$config["app_leader_pull"] = 20;
$config["sms_credentials"] = array(
    "username" => "eProjectsupervision",
    "password" => "#Segzpair_123",
    "sender_name" => "Soccer Trivia"
);
$config["paginator"] = 12;
$config['amount_per_session'] = 50;
$config['service_id'] = 1130;
$config['sdp_url'] = 'http://192.168.1.11:4010/sdp-etisalat/v1.1/subscription/initialize-msisdn/?msisdn={msisdn}&service-id={service_id}';
$config['game_sessions'] = 2;