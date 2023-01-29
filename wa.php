<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"));

if(
	!empty($data->query) &&
	!empty($data->appPackageName) &&
	!empty($data->messengerPackageName) &&
	!empty($data->query->sender) &&
	!empty($data->query->message)
){
	
	$appPackageName = $data->appPackageName;
	$messengerPackageName = $data->messengerPackageName;
	$sender = $data->query->sender;
	$message = $data->query->message;
	$isGroup = $data->query->isGroup;
	$groupParticipant = $data->query->groupParticipant;
	$ruleId = $data->query->ruleId;
	$isTestMessage = $data->query->isTestMessage;




// Perintah Pesan
if ($message == '@x')
{
echo json_encode(array("replies" => array(
  
  // Pesan
  array("message" => "xnxx")

	)));
}






http_response_code(200);
echo json_encode(array("replies" => array()));
}
?>
