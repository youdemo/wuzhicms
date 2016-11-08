#五指CMS网站管理系统
五指cms网站管理系统，网站内容管理系统，php5+mysql开发。

![](http://www.wuzhicms.com/uploadfile/2015/05/18/1431917862749065.png)
#### 服务器要求
Web服务器：apache/nginx/iis

PHP环境要求：支持php5.2、php5.3、php5.4、php5.5、php5.6！（推荐使用5.4或更高版本！）

数据库要求： Mysql 5


#### 产品简介
> 《五指互联网站内容管理系统》简称“五指CMS”，是基于PHP（5.2及以上版本） + Mysql 开发的网站管理系统，系统架构通过MVC实现，可非常灵活的进行二次开发扩展。

> 本系统是由具有10年专职网站管理系统开发经验的王参加担任系统总架构师，聚集数10名开发者共同精心开发，打造！系统从安全，高效，用户体验入手，真正做到了安全第一，性能卓越！


#### 获取帮助
官网：http://www.wuzhicms.com/

开发文档：http://www.wuzhicms.com/doc/

#### 功能特点描述
##### 模型化设计： 

* 全站统一模型，二次开发更方便
* 独创共享模型，独立模型。大小数据全部按需存储
* 模块继承统一模型，只需要改改参数即可实现模块支持模型功能
* 支持10多种不同类型的字段添加：如，文本字段，超级字段，地图字段，滑动条字段，组图字段，下载字段，URL加密字段

##### 数据读写分离：

* 默认支持数据读写分离
* 支持1台主数据，多台从数据库
* 支持按照权重分配数据资源

##### 安全性设计：
- 支持缓存文件目录独立设置
- 支持www目录与核心代码分离部署
- 支持cookie加密存储
- 支持后台程序文件与前台文件分离
- 支持全局Mysql注入过滤
- 支持上传目录自定义，禁用php执行
- 后台登录采用session登录验证，记录所有登录历史
- 后台管理日志记录
- 是否允许修改模版需要有服务器文件管理权限
- 所有菜单都需要进行权限验证

##### 性能设计：

- 缓存支持内存缓存，如：memcache 缓存
- 不重复生成和检查模版缓存，提升性能
- 支持cookie加密存储
- 支持后台程序文件与前台文件分离
- 支持全局Mysql注入过滤
- 支持上传目录自定义，禁用php执行

##### 移动站设计：
- 默认支持移动端访问自适应
- 无需重复发文章，一条记录即可解决
- 支持android／ios手机浏览器模式访问

###程序模块结构说明
```
|-- coreframe                   #框架目录
|   |-- app                     #模块（应用程序）目录
|   |   |-- affiche             #公告模块
|   |   |-- appshop             #应用商城
|   |   |-- attachment          #附件模块
|   |   |-- collect             #采集器
|   |   |-- content             #内容模块
|   |   |-- core                #核心模块
|   |   |-- coupon              #优惠券模块
|   |   |-- credit              #积分模块
|   |   |-- database            #数据库模块
|   |   |-- dianping            #点评模块
|   |   |-- guestbook           #留言板模块
|   |   |-- link                #友情链接模块
|   |   |-- linkage             #联动菜单
|   |   |-- member              #会员模块
|   |   |-- message             #站内短信模块
|   |   |-- mobile              #移动手机模块
|   |   |-- order               #订单模块
|   |   |-- pay                 #支付模块
|   |   |-- ppc                 #推广模块
|   |   |-- receipt             #发票申请模块
|   |   |-- search              #全站搜索模块
|   |   |-- sms                 #短信模块
|   |   |-- tags                #tags模块
|   |   --- template            #在线模板编辑
|   |-- configs                 #框架配置
|   |-- core.php                #框架入口
|   |-- crontab                 #定时脚本目录
|   |-- crontab.php             #定时脚本入口
|   |-- extend                  #扩展目录
|   |-- languages               #语言包
|   --- templates               #模板
|-- caches                      #缓存目录
|   |-- _cache_                 #公共缓存
|   |-- block                   #区块、碎片缓存
|   |-- content                 #内容模块缓存，栏目缓存
|   |-- db_bak                  #数据库备份路径
|   |-- install.check           #安装锁定
|   |-- model                   #模型缓存
|   --- templates               #模板缓存
--- www                         #网站根目录
    |-- 404.html                #404页面
    |-- admin.php               #后台入口
    |-- api                     #api目录
    |-- configs                 #网站配置
    |-- favicon.ico             #浏览器icon
    |-- index.html              #网站首页
    |-- index.php               #动态地址首页
    |-- res                     #静态资源
    |-- robots.txt              #搜索引擎防抓取规则
    |-- uploadfile              #附件
    `-- web.php                 #自定义路由
```

### v3.1.0版本更新说明（2016-11-8）

* 新增：短信验证码测试，测试账号都是 test时，可通过1111通过验证
* 新增：开启调试模式时，跳转时间变为10秒，方便调试
* 新增：栏目访问权限和内容访问权限-提醒模式配置  …
* 新增：站群功能：通过切换站点，可以设置网站基本信息
* 新增：问题反馈模块
* 新增：数据类型字段
* 新增：图片上传时，可直接加水印

* 优化：图片列表访问次数icon
* 优化：自动检测栏目缓存是否存在，模版缓存是否存在
* 优化：邮件配置：发件人不存在时，不请求发送
* 优化：mysqli.class.php 优化
* 优化：站点创建或者修改时，目录创建检测
* 优化：站点创建目录检查
* 优化：删除会员时，不能直接删除管理员账号
* 优化：问题反馈模块
* 优化：更新五指图标
* 优化：二次开发时，文件不存在路径完整提示
* 优化：后台添加会员js验证
* 优化：推荐位按照不同模版显示

* 修复：图片当前位置模版错误
* 修复：图片列表访问次数显示
* 修复：删除多余文件
* 修复：ucenter同步注册
* 修复：注册时，手机号存在时，依然可以发送短信
* 修复：审核文章时出错
* 修复：关于我们等类型，默认为单网页
* 修复：来源管理的logo显示错误
* 修复：栏目图片地址无法显示bug
* 修复栏目绑定域名，路径错误  …
* 修复：栏目添加或修改时，目录名前面空格，生成静态路径错误
* 修复：安装 coreframe 放到 www 下时，同时禁止跨目录浏览时，无法安装问题
* 修复：登录会员名显示错误
* 修复：discuss x3.2 同步登录
* 修复：php7.0版本下面无法安装bug
* 修复：php 7.0版本下面，标签无法解析bug
* 修复：多个推荐位，调用不同栏目的数据，栏目id重复bug
* 修复：推荐位问题
* 修复：会员注册，手机验证
* 修复：tags缓存配置为空时，添加内容报错
* 修复：附件上传提示 Not allow guest upload.
* 修复：后台修改会员必须选择会员组bug
* 修复：删除会员模型后，跳转错误
* 修复：在线升级安装在同一个目录，无法升级bug  …
* 修复：升级SQL／安装SQL
* 修复：editor字段 volidform验证方法错误

### v3.0.4版本更新说明（2016-7-19）
* 新增：留言本功能
* 修复：安装高版本问题
* 优化：会员配置不需要验证手机时，投稿也不需要验证
* 修复：邮件发送配置提示错误时，不提示错误信息
* 修复：后台会员帐号添加激活bug
* 修复：手机号缺少181号码验证
* 修复：修改内容时推荐位选中bug
* 修复：注册无法发送短信验证码
* 修复：后台最新发布内容为空时，报错
* 优化：前台mini登录
* 修复：tag添加和修改无效
* 修复：后台会员添加，缺少主会员组选择
* 修复：wuyoo提供SQL注入bug
* 优化：重置密码工具

### v3.0.3版本更新说明（2016-7-8）

* 新增：公告前台页面显示
* 新增：会员中心显示系统公告
* 新增：团购历史回顾列表
* 新增：水印图片水印／文字水印／设置
* 修复：后台添加功能和修改功能类型不统一
* 修复：安装缺失文件
* 修复：角色无栏目管理权限时报错
* 修复：团购首页价格和促销价格错误
* 修复：基本兑换比例显示错误
* 修复：首页底部链接
* 修复：单网页生成静态bug
* 修复：首页样式
* 修复：远程附件文件名，用户名为空
* 优化：团购排序
* 优化：会员中心首页高度显示
* 优化：验证码字体加大
* 优化：忽略根目录下的 .htaccess

### v3.0.2版本更新说明（2016-7-7）
* 修复：在线升级执行SQL
* 修复：在线升级下载程序出错

### v3.0.1版本更新说明（2016-6-30）

* 修复：公告修改，内容不显示
* 新增：推送内容后的列表出显示“推”
* 修复：修复推送内容SQL报错
* 修复：管理员账户修改后，无法登录后台
* 优化：安装时候显示版本号
* 新增：在线升级可执行SQL逻辑处理
* 替换：删除多余项目名称

### V3.0.0版本更新说明（2016-6-29）

* 新增：在线升级
* 新增：全新3.0门户模版
* 新增：全新3.0手机会员中心模版
* 新增：团购筛选功能演示
* 新增：安装可选是否安装默认演示数据
* 新增：微信扫一扫登录
* 新增：管理员可属于多个角色
* 新增：会员可以属于多个组
* 新增：审批新会员
* 新增：广告统计
* 新增：自定义全局变量功能
* 新增：订单模块可以在不同的模块使用，如，在线充值/消费，客服代充/代扣，积分商城，团购等
* 新增：新增youku／tudou视频播放
* 新增：前台页面动态显示，会员组访问权限设置
* 新增：会员中心里面可以绑定微信／QQ／新浪微博账号
* 新增：在线投稿，投稿多级审核
* 新增：内容标签可调用多表
* 新增：内容标签可按照模型调用
* 新增：推荐位标签可直接使用推送的字段作为变量显示
* 新增：中英多语言版本（授权用户可选）
* 新增：20套企业网站模版（授权用户可选）
* 新增：邮件订阅 ，邮件模板管理、邮件群发（授权用户可选）
* 新增：OA工作流，可多级审批，邮件通知审批（授权用户可选）
* 优化：批量删除内容直接删除无提示 ，感谢 ：https://github.com/lifesign
* 优化：参数过滤！
* 优化：提示样式，支持手机显示
* 优化：栏目设置，广告展示，新增栏目单网页，列表切换
* 优化：邮件发送类，支持gmail邮箱发送
* 优化：单网页／列表／外链 通过颜色区分显示类型
* 优化：畅言评论appid可自定义
* 优化：批量删除文章，给予2次确认提醒
* 修复：生成内容页静态，内容模版为空无法生成bug
* 修复：coreframe／caches 在同一目录无法安装bug
* 修复：安装：copyfrom 来源表缺少字段bug
* 修复：安装脚本正则不规范问题
* 修复：上传组图的时候文件名中有特殊字符，无法上传问题
* 修复：后台mobile-nav导航点击不回折效果
* 修复：tag漏洞
* 修复：过滤不安全的SQL
* 修复：验证码点击加载路径错误
* 修复：安装修改了表前缀，验证码验证错误
* 修复：大栏目生成静态路径
* 修复：数据库备份报错
* 修复：无法把configs／coreframe 放到www目录进行安装


### V2.1.5 版本更新说明（2015-9-15）

* 新增：模型数据录入前，和更新时调用钩子。方便二次扩展
* 修复：搜索模版再次搜索后，无法继承模型
* 修复：联动菜单修改时，无法选中
* 修复：mysql get_one 方法 group by 顺序错误
* 修复：模型修改bug
* 修复：日期字段添加，字段类型选择无效
* 优化：联动菜单字段，可以在一行显示
* 改动：关键词搜索改为标题模糊搜索



### V2.1.2 版本更新说明（2015-8-19）

* 修复：字段输出格式
* 修复：内容参数不正确时，SQL错误显示
* 修复：编辑器xss漏洞
* 修复：批量生成静态，无法生成多页
* 修复：后台循环跳转
* 修复：内容删除SQL报错，升级需要执行update中点sql文件
* 优化：全局xss攻击过滤
* 优化：字段JS验证规则
* 优化：后台css样式，用户体验
* 新增：SQL_LOG常量，可在web_config中配置。记录insert update delete操作


### V2.0.5 版本更新说明（2015-5-22）

*  修复：内容页有分页时，分页地址错误
*  修复：附件模块上传参数错误
*  优化：默认关闭直接显示错误信息
*  修复：页面报错信息显示问题
*  修复：string2array函数问题 ，感谢 沉默の羔羊 提供
*  优化：树状类在无子分类时，循环报错
*  优化：模板目录不可写时，页面空白，打开慢
*  优化：发送邮件检查 sockets extension 是否打开
*  修复：属性下拉列表在数据为空时，无法显示默认下拉


### V2.0.3 版本更新说明 (2015-05-19)

*  修复gzip未配置正确时，报错问题
*  修复后台会员菜单显示问题
*  安装超时优化
*  模板优化bug：php5.2 与 php5.4不兼容问题
*  优化读取字段没有内容时出错
*  修复安装时修改数据库前缀后，后台无法登陆问题
*  默认关闭错误显示
*  修复php5.5+安装失败
*  优化报错显示 …
*  修复php 5.2 后台首页报错

### V2.0 版本更新说明 (2015-05-18)

*  所有源码完全开源！
*  支持php5.2、php5.3、php5.4、php5.5、php5.6！（推荐使用5.4或更高版本！）
*  新增图片模型及前台模板展示
*  新增下载模型及前台模板展示
*  全新会员中心
*  新增短信手机验证
*  新增会员公司模型，机构模型注册
*  新增积分管理、积分配置、积分消费记录
*  新增订单管理
*  新增优惠券管理
*  新增百度地图字段
*  新增下载字段
*  新增管理模型内容字段
*  新增全新门户版PC模板1套
*  新增全新门户版手机模板1套
*  新增云端区块ID添加，后台菜单云端ID，开发者可轻松打包发布！
*  新增微信公众号自动回复功能
*  新增微信公众号菜单设置
*  新增已关注微信公众号通过公众号进入Html5页面自动登录
*  修复php5.2上传附件问题
*  修复php5.3页面部分页面白屏问题
*  修复多处字段输出格式错误问题
*  其它修复项多达50项
