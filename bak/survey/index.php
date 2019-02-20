
<?php
  header('Access-Control-Allow-Origin:*');
  $slhttp = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
  $backname=$slhttp.$_SERVER['HTTP_HOST'];
  $host_name = "www.webstatic.com/";
  $env = '';
  if (strpos($backname, 'test') !== false) {
    $env = "test_";
  } else if (strpos($backname, 'dev') !== false) {
    $env = "dev_";
  }
  echo "<script>window.\$hostName ='".$slhttp.$env.$host_name."';</script>";
  $hostName = $slhttp.$env.$host_name;
?>
<!DOCTYPE html><html lang=zh-CN><head><meta charset=UTF-8><meta name=viewport content="width=device-width,initial-scale=1"><meta http-equiv=X-UA-Compatible content="ie=edge"><title>在这百在544 | qd-project</title><meta name=keywords content=""><meta name=description content=""><link href=<?php echo $hostName;?>/pystatic/css/element-ui.css??t=8eb5de9c-34da-11e9-a602-a860b6267236 rel=stylesheet><link href=<?php echo $hostName;?>/pystatic/css/survey.css??t=8eb5e040-34da-11e9-9492-a860b6267236 rel=stylesheet></head><body><div id=app></div><script src=<?php echo $hostName;?>/pystatic/js/manifest.js?t=8eb5e0fe-34da-11e9-a3c6-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/element-ui.js?t=8eb5e18a-34da-11e9-b6cf-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/vue-common.js?t=8eb5e218-34da-11e9-8335-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/survey.js?t=8eb5e374-34da-11e9-a348-a860b6267236></script></body></html>