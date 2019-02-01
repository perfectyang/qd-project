
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
<!DOCTYPE html><html lang=zh-CN><head><meta charset=UTF-8><meta name=viewport content="width=device-width,initial-scale=1"><meta http-equiv=X-UA-Compatible content="ie=edge"><title>在这百在544 | qd-project</title><meta name=keywords content=""><meta name=description content=""><link href=<?php echo $hostName;?>/pystatic/css/element-ui.css??t=12b2e6d2-25d5-11e9-8961-a860b6267236 rel=stylesheet><link href=<?php echo $hostName;?>/pystatic/css/survey.css??t=12b2e928-25d5-11e9-8beb-a860b6267236 rel=stylesheet></head><body><div id=app></div><script src=<?php echo $hostName;?>/pystatic/js/manifest.js?t=12b2eaa6-25d5-11e9-86e1-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/element-ui.js?t=12b2ebe6-25d5-11e9-b79d-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/vue-common.js?t=12b2ecf4-25d5-11e9-b309-a860b6267236></script><script src=<?php echo $hostName;?>/pystatic/js/survey.js?t=12b2edf8-25d5-11e9-87ae-a860b6267236></script></body></html>