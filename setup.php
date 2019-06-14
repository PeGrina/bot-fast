<?
  if(isset($_POST['sub'])){
    mkdir("frame");
    file_put_contents("frame/index.php",'<?
    include \'vk_api.php\';
    $token="'.$_POST['token'].'";
    $code_server="'.$_POST['code'].'";
    $vk = new vk_api($token,"5.81");
    '.file_get_contents("code.php").'');
    file_put_contents("frame/vk_api.php",file_get_contents("vk_api.php"));
    mkdir("frame/code");
    mkdir("frame/fixed_code");
    file_put_contents("frame/code/message_new.php","");
    file_put_contents("frame/code/payload.php","");
    echo "Фреймворк был успешно загружен!";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Setup</title>
  </head>
  <body>
    <form method="post" action="#">
      <input type="text" name="token" placeholder="Токен группы">
      <input type="text" name="code" placeholder="Код который должен отправить сервер"></input>
      <input type="submit" name="sub"></input>
    </form>
  </body>
</html>
