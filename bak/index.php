
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
<!DOCTYPE html><html lang=zh-CN><head><meta charset=UTF-8><meta name=viewport content="width=device-width,initial-scale=1"><meta http-equiv=X-UA-Compatible content="ie=edge"><title>首页555 | qd-project</title><meta name=keywords content=""><meta name=description content=""><link href=<?php echo $hostName;?>/pystatic/css/element-ui.css??t=8e8ea0fa-34da-11e9-8a11-a860b6267236 rel=stylesheet><link href=<?php echo $hostName;?>/pystatic/css/index.css??t=8eab9f36-34da-11e9-afa2-a860b6267236 rel=stylesheet></head><body><div id=app></div><script src=<?php echo $hostName;?>/pystatic/js/manifest.js?t=8eaba27e-34da-11e9-bac0-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/element-ui.js?t=8eaba45e-34da-11e9-a7a9-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/vue-common.js?t=8eaba738-34da-11e9-ab5d-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/index.js?t=8eaba88c-34da-11e9-a04f-a860b6267236></script></body></html>
