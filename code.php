  $data = json_decode(file_get_contents("php://input"));
  $type = $data->type;
  if($type == "confirmation"){
    exit($code_server);
  }elseif($type == "message_new"){
    $object = $data->object;
    $peer_id = $object->peer_id;
    $from_id = $object->from_id;
    $message = $object->text;
    $message_id = $object->id;
    $mess = $object->text;
    include "code/message_new.php";
    if(isset($object->$payload)){
      include "code/payload.php";
    }
  }elseif(isset($type)){
    $path = "code/".$type.".php";
    if(file_exists($path)){
      include $path;
    }
  }
  $vk->sendOK();
?>
