
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
<!DOCTYPE html><html lang=zh-CN><head><meta charset=UTF-8><meta name=viewport content="width=device-width,initial-scale=1"><meta http-equiv=X-UA-Compatible content="ie=edge"><title>首页555 | qd-project</title><meta name=keywords content=""><meta name=description content=""><link href=<?php echo $hostName;?>/pystatic/css/element-ui.css?t=1ca4f408-25cd-11e9-906d-a860b6267236? rel=stylesheet><link href=<?php echo $hostName;?>/pystatic/css/index.css?t=1ca77764-25cd-11e9-97b2-a860b6267236? rel=stylesheet></head><body><div id=app></div><script src=<?php echo $hostName;?>/pystatic/js/manifest.js?t=1ca7793a-25cd-11e9-aa43-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/element-ui.js?t=1ca779ee-25cd-11e9-ad17-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/vue-common.js?t=1ca77a98-25cd-11e9-94a0-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/index.js?t=1ca77b24-25cd-11e9-b679-a860b6267236></script></body></html>