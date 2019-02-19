# 打包配置
import os, shutil, json, re, uuid
with open('./envconfig.js', 'r+', encoding='utf8') as f:
    config = f.read()
    con = re.search(r'({.*?})', config, re.S).group()
    envconfig = json.loads(con.replace("'", '"'))
# print('envconfig', envconfig)
# 后端环境配置
php_tpl = '''
<?php
  header('Access-Control-Allow-Origin:*');
  $slhttp = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
  $backname=$slhttp.$_SERVER['HTTP_HOST'];
  $host_name = "''' + envconfig['cdn'] + '''";
  $env = '';
  if (strpos($backname, 'test') !== false) {
    $env = "test_";
  } else if (strpos($backname, 'dev') !== false) {
    $env = "dev_";
  }
  echo "<script>window.\$hostName ='".$slhttp.$env.$host_name."';</script>";
  $hostName = $slhttp.$env.$host_name;
?>
'''
def recontent(filepath):
    if filepath.endswith(('.html', '.js', '.css')):
        with open(filepath, 'r+', encoding='utf8') as f:
            content = f.read()
            file_dirname = os.path.dirname(os.getcwd() + filepath)
            file_basename = os.path.basename(filepath)
            split_file_name = os.path.splitext(file_basename)
            file_name = split_file_name[0]
            file_extname = split_file_name[1]
            if file_extname == '.js':
                replace_content = content.replace(r'"/' + envconfig["publicPath"] + '/"', r'window.$hostName')
            else:
                replace_content = content.replace(r'/' + envconfig["publicPath"] + '/', '<?php echo $hostName;?>/')

            if not filepath.endswith(('element-ui.js', 'vue-common.js','echarts.js', 'element-ui.css')):
                replace_content = strsss = re.sub(r'(\.css\?)|(\.js)|\.(png|jpeg|jpg|gif|svg|eot|svg|ttf|woff)', lambda x: x.group(0) + '?t={t}'.format(t=uuid.uuid1()), replace_content)

            with open(filepath, 'w+', encoding='utf8') as Fs:
                if filepath.endswith(('.html')):
                    replace_content = php_tpl + replace_content
                    Fs.write(replace_content)
                    fileName = os.path.splitext(filepath)
                    if file_name == 'index':
                        os.renames(filepath, fileName[0] + '.php')
                    else:
                        os.renames(filepath, fileName[0] + '/index.php')
                else:
                    Fs.write(replace_content)

#遍历filepath下所有文件，包括子目录
def searchAllFiles(filepath):
  files = os.listdir(filepath)
  for fi in files:
    fi_d = os.path.join(filepath, fi)
    if os.path.isdir(fi_d):
      searchAllFiles(fi_d)
    else:
      recontent(fi_d)
# 复制文件到指定路径下
def copytree(src, dst, symlinks=False, ignore=None):
    for item in os.listdir(src):
        s = os.path.join(src, item)
        entries = os.path.join(dst['entries'], item)
        static = os.path.join(dst['static'], item)
        d = entries
        if item == envconfig["assetsDir"]:
            d = static
        if os.path.isdir(s):
            if os.path.exists(d):
                # print('删除文件夹', d)
                shutil.rmtree(d)
            shutil.copytree(s, d, symlinks, ignore)
        else:
            if os.path.exists(d):
                # print('删除文件', d)
                os.remove(d)
            shutil.copy(s, d)

def main():
    print('开始布署，请耐心等待-------')
    os.makedirs('bak')
    copytree('dist/', {'entries': 'bak', 'static': 'bak' })
    searchAllFiles('bak')
    copytree('bak/', {'entries': envconfig['entries'], 'static': envconfig['static']})
    print('--------布署s成功!!!!-------------')
    # shutil.rmtree('bak')

if os.path.exists('bak'):
    shutil.rmtree('bak')
    main()
else:
    main()
