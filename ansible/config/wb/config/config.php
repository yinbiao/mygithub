<?php 

define('SERVER','product');//服务器环境：local,test,product

define("SOCKET_ADDR", "tcp://10.10.10.50:8282");//SOCKET服务器地址和端口
define("DOMAIN","nb.nbscreen.com");//域名地址

define("REDIS_PRE_SEP","_");//REDIS键前缀分隔符
define("REDIS_SEP",":");//REDIS键分隔符

define('CODE_TIME', 1800);//短信验证码缓存时间
define('DATA_TIME', 300);//用户数据缓存时间

define('PAGE_SIZE', 10);//页码
define('PAGE_SIZE2', 15);//页码

define("GEOHASH_PRE",3);//经纬度精度范围
define("NEARBY_NUM",3);//附近的用户最少数量

define("IMAGES_FOLDER","images/");//上传图片地址
define("UPLOAD_FOLDER","upload/");//上传原图片地址
define("PRE_FOLDER","pre/");//上传缩略图片地址
define("AUTH_FOLDER","auth/");//上传认证图片地址

define("DB_TABLE_PRE",'wb_');//数据库表前缀

define("IS_EXAMINE",1);//默认是否审核

define("CSV_FENGGE",',');//CSV默认分隔符

define("PWD_SUFFIX",'wangba');//密码后缀，轻易不要修改，否则老密码可能不能使用。

define("SYS_USER",'1');//系统用户ID
define("SYS_PUSH",'欢迎光临');//注册默认推送信息

define("COMPANY",'网吧');//公司名

define("TASK_RND_NUM",'5');//每日随机任务数量

define('REDIS_TF','CONFIG_TF');//停服

/* define('WX_APPID','wx40fc3eacadca5c46');//微信APPID
define('WX_SECRET','35557e4ac12081601731d50f8abffb18');//微信secret
define('WX_MCH_ID','1292154101');//微信支付商户号
define('WX_PAY_KEY','ibeacon20160713ttttttttttttttttt');//微信支付密钥 */

define('WX_APPID','wx9c7fa1f0b8e75e1d');//微信APPID
define('WX_SECRET','84850116156ed4c22b6c4ab35ef02784');//微信secret
define('WX_MCH_ID','1356077602');//微信支付商户号
define('WX_PAY_KEY','ibeacon20160725ttttttttttttttttt');//微信支付密钥

//道具图标地址
define("PROP_ICON","/images/prop/");
//任务图标地址
define("TASK_ICON","/images/task/");

//屏蔽字文件地址
define('FILE_WORDS','config/words.txt');

/** 短信接口* */
define('SMS_URL', 'http://yunpian.com/v1/sms/send.json');
define('SMS_URL_TPL', 'http://yunpian.com/v1/sms/tpl_send.json');
define('SMS_UID', '9ab5703e12daba080745657005f15da3');
define('SMS_UID2', '9ab5703e12daba080745657005f15da3');
define('SMS_PWD', '94bbb5fc2e');

/** 短信接口* */
define('SMS_URL3', 'http://sms.chanzor.com:8001/sms.aspx?action=send');
define('SMS_UID3', 'renpinyingyong');
define('SMS_PWD3', '152431');
define('SMS_SIGN', '【人品应用】');

/** 短信接口* */
define('SMS_URL4', 'http://114.215.196.225:9001/sms.aspx?action=send');
define('SMS_UID4', '1195');
define('SMS_UNAME4', '夏天');
define('SMS_PWD4', '123456');

/** 短信模板* */
define('SMS_TPL1', '您的朋友在人品中给您发了%v1%条私信，赶快登录回复TA吧！');//私信模板
//define('SMS_TPL2', '您的一位朋友匿名发布了一条对您的看法！猜猜TA是谁？快下载[人品]回应TA！%v1% ');//添加新爆料
define('SMS_TPL2', '您在[人品]中有一条您朋友给您的匿名评价未读，快速访问%v1%');//添加新爆料
define('SMS_TPL3', '我们关注到最近三天共有%v1%位朋友对您做出了%v2%次评价，下载[人品]回应TA们！%v3% ');//3天未注册
define('SMS_TPL4', '在您离开的这一周里，朋友们发布的关于您的未读讨论已经累计有%v1%条了，详情戳%v2% ');//7天未注册
//define('SMS_TPL5', '一个月过去了， %v1%条关于您的匿名评价还在静静的等待您的阅读，详情戳%v2% ');//30天未注册
define('SMS_TPL5', '在过去的一个月里，[人品]中您共收到1位朋友的%v1%条匿名评价，这些评价还在默默等待您的访问，快速访问%v2% ');//30天未注册
define('SMS_TPL6', '人品君给您的验证代码是%v1%请于1分钟内登录。');//私信模板

/** 语音短信接口* */
define('SMS_URL_YY', 'http://218.16.129.201:3333/standard/WBService.asmx');
define('SMS_FTPNAME', 'gzyxFTP');
define('SMS_WORKNO', '13918454938');

define('DOWNLOAD_URL', 'imurl.net/RJyBmP');//短消息下载链接

/**苹果推送**/
// 苹果推 cert
//define("ISO_CERT", dirname(__FILE__)."/../conf/test/ck.pem");
define("ISO_CERT", dirname(__FILE__)."/../conf/production/ck.pem");
// cert 密码
define("PASSPHRASE", 'easyhint');
// ios push 地址
//define('IOS_APNS', 'ssl://gateway.sandbox.push.apple.com:2195');
define('IOS_APNS', 'ssl://gateway.push.apple.com:2195');

//苹果第三方推送账号
define("IOS_PUSH_KEY","8abeec4ed6aa3dc3772e8d8e");
define("IOS_PUSH_SECRET","1cf87e2a889079b2534c051c");

define("IOS_PUSH_TXT1","您有一条新的私信");//推送消息：私信

?>