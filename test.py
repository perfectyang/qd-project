import re, uuid

teststr = 'index":"2879","./js/index.css":"2879",r.JSON"./index.css"asdfasdfasdf.js./png/asdfatest.png,asdfasdf.wotf'
strsss = re.sub(r'(\.css\?)|(\.js)|\.(png|jpeg|jpg|gif|svg|eot|svg|ttf|woff)', lambda x: x.group(0) + '?t={t}'.format(t=uuid.uuid1()), teststr)
print(strsss)

# s0 = 'BOY and GIRL'
# s1 = re.sub(r'BOY|GIRL', 'HUMAN', s0)
# print(s1)
