
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
<!DOCTYPE html><html lang=zh-CN><head><meta charset=UTF-8><meta name=viewport content="width=device-width,initial-scale=1"><meta http-equiv=X-UA-Compatible content="ie=edge"><title>首页555 | qd-project</title><meta name=keywords content=""><meta name=description content=""><link href=<?php echo $hostName;?>/pystatic/css/element-ui.css??t=12a9a306-25d5-11e9-85d1-a860b6267236 rel=stylesheet><link href=<?php echo $hostName;?>/pystatic/css/index.css??t=12acd9f4-25d5-11e9-85c4-a860b6267236 rel=stylesheet></head><body><div id=app></div><script src=<?php echo $hostName;?>/pystatic/js/manifest.js?t=12acdb8c-25d5-11e9-a662-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/element-ui.js?t=12acdc2e-25d5-11e9-a3a5-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/vue-common.js?t=12acdce2-25d5-11e9-b736-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/index.js?t=12acdd64-25d5-11e9-8fd0-a860b6267236></script></body></html>