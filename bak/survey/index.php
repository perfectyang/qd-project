
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
<!DOCTYPE html><html lang=zh-CN><head><meta charset=UTF-8><meta name=viewport content="width=device-width,initial-scale=1"><meta http-equiv=X-UA-Compatible content="ie=edge"><title>在这百在544 | qd-project</title><meta name=keywords content=""><meta name=description content=""><link href=<?php echo $hostName;?>/pystatic/css/element-ui.css??t=625f0a1e-3424-11e9-adb6-a860b6267236 rel=stylesheet><link href=<?php echo $hostName;?>/pystatic/css/survey.css??t=625f0c4c-3424-11e9-b608-a860b6267236 rel=stylesheet></head><body><div id=app></div><script src=<?php echo $hostName;?>/pystatic/js/manifest.js?t=625f0d70-3424-11e9-b189-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/element-ui.js?t=625f0e58-3424-11e9-9f99-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/vue-common.js?t=625f0f34-3424-11e9-a03d-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/survey.js?t=625f100c-3424-11e9-b16e-a860b6267236></script></body></html>