
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
<!DOCTYPE html><html lang=zh-CN><head><meta charset=UTF-8><meta name=viewport content="width=device-width,initial-scale=1"><meta http-equiv=X-UA-Compatible content="ie=edge"><title>首页555 | qd-project</title><meta name=keywords content=""><meta name=description content=""><link href=<?php echo $hostName;?>/pystatic/css/element-ui.css??t=6254c130-3424-11e9-b9e9-a860b6267236 rel=stylesheet><link href=<?php echo $hostName;?>/pystatic/css/index.css??t=62583e28-3424-11e9-9b86-a860b6267236 rel=stylesheet></head><body><div id=app></div><script src=<?php echo $hostName;?>/pystatic/js/manifest.js?t=6258408a-3424-11e9-84e4-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/element-ui.js?t=625841ac-3424-11e9-984b-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/vue-common.js?t=625842ba-3424-11e9-b9b9-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/index.js?t=625843be-3424-11e9-bc13-a860b6267236></script></body></html>