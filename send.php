<?php 

include("lib/Pusher.php");

$pusher = new Pusher('0f12f4175f151876a520', '889319b2023b436cdecf', '84616');

$channel = $_REQUEST['channel'];
$event = $_REQUEST['event'];

// $meta = $_REQUEST['meta'];
// $action = $_REQUEST['action'];
// $pageType = $_REQUEST['pageType'];
// $bundle = $_REQUEST['bundle'];
$payload = $_REQUEST['payload'];

// $payload = array( 
// 	"channel" => $channel ,
// 	"event" => $event ,
// 	"meta" => json_decode($meta) ,
// 	"action" => json_decode($action) , 
// 	"pageType" => json_decode($pageType),
// 	"bundle" => json_decode($bundle)
// 	);

$pusher->trigger($channel , $event , $payload);

echo '{ "status" : "send" }';