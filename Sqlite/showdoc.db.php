SQLite format 3   @    �   �   �   Y   ]                                                � .Y   �    ����                                                                                                                                                                                                                                                       i	}W indexsqlite_autoindex_sqlitebrowser_rename_column_new_table_1sqlitebrowser_rename_column_new_table       P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�\�tableuseruserCREATE TABLE `user` (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直   2   	0   ,   (                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              � � ������d                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              )Wsqlitebrowser_rename_column_new_table#item_member� item� 
pagepagecataloguser   page_history %page_history\    �G�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          j !    MM!sfd454dvfdb3ec2ef78a331ba99b289ef3fe5062364dd0b92a8165633e826677852560101b1471249214W:�7W:�>   �#    M tdhtd5e65td92420151b927360e78fb396     M hslb817ea5dc158f4a3e0977d5b11d352390[��@     M heshenglea89da13684490eb9ec9e613f91d24d000[��>[�~= 	    M showdoca89da13684490eb9ec9e613f91d24d000W���\$/�� q G��-�q    �Q��  7�                             k �                             ]�                             [�    l�    4�    7�    �     c                       �/                          
                                                                                      	�            x/    	�            /    \( 	�%985429a936ade8f2541005518b6da3ed8c369cd3950fda541093571cfee6bebe\���192.168.28.1\$/�\' 	�%dbaac33955fdfc2b86e57c956f76ab55d7be089104d6a27cbf3d3f20bded84c0\���192.168.28.1\�\& 	�%c1e641c491b1135ec1f5dca8df85080ef291c4096973198bc241da3253ad02f0\��
192.168.28.1\
\% 	�%4d2c9882653bfd6926fe3da079fc4a82018620b931f85203c0d6dedec8507410\|�$192.168.28.1\'$\$ 	�%efa75cd0b5088e7693c12543edf83737efe8450a2b393d8552398822cff2a17d\=l|192.168.28.1[��|\# 	�%b0190ae6e8b63139e5787bfea858ec6453440c0121bc7eea930c22f301582547\6��192.168.28.1[��   [�%f3af0040396e15d69870a412aab35ea26111285d61f3845fb1378fb099b31173192.168.28.1[�~      �??           Q��  � �     (�*                    ��xsqli��*                    V �renam��*    �A?    �A?    6 Lrowse�A?           Q��  h ��   0�*    �A?    �A?    �W in                        tebrowser_rename_column_n   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )'.; indexsqlite_autoindex_page_1page�>/%%�?tablepa�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
        `template_content` text NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )    i �A? i                                                                                       �(�tableitemitemCREATE TABLE "item" (
	`item_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_name`	TEXT,
	`item_description`	TEXT,
	`uid`	INTEGER,
	`username`	TEXT,
	`password`	TEXT,
	`addtime`	INTEGER,
	`last_update_time`	INTEGER DEFAULT 0
, item_domain text NOT NULL DEFAULT '', item_type INT( 1 ) NOT NULL DEFAULT '1', is_archived INT( 1 ) NOT NULL DEFAULT '0', is_del INT( 1 ) NOT NULL DEFAULT '0')5!I# indexsqlite_autoindex_item_member_1item_member� ##�Etableitem_memberitem_member
CREATE TABLE "item_member" (
	`item_member_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_id`	INTEGER,
	`uid`	INTEGER,
	`username`	TEXT,
	`addtime`	INTEGER DEFAULT 0
, member_group_id INT( 1 ) NOT NULL DEFAULT '1')P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直接下载`	INTEGER
)   & &O��J                     � +�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cook'); indexsqlite_autoindex_item_1item�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)� +�tablecatalogcatalogCREATE TABLE "catalog" (
	`cat_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`cat_name`	TEXT,
	`item_id`	INTEGER,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, parent_cat_id INT( 10 ) NOT NULL DEFAULT '0', level INT( 10 ) NOT NULL DEFAULT '2')-,A indexsqlite_autoindex_catalog_1catalog    �  �5^�                                                                                                                                                                                     �m-�=tablepagepageCREATE TABLE "page" (
	`page_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, page_comments text NOT NULL DEFAULT '', is_del INT( 1 ) NOT NULL DEFAULT '0')'.; indexsqlite_autoindex_page_1page�f/%%�tablepage_historypage_historyCREATE TABLE "page_history" (
	`page_history_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`page_id`	INTEGER,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER,
	`addtime`	INTEGER
, page_comments text NOT NULL DEFAULT '')70K% indexsqlite_autoindex_page_history_1page_history   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             		hsl[�� 		heshengle[��
   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          		   5�    ��������������������������~ytoje`[VQLGB=83.)$��]showdoc登录eNrdk99rGkEQx59v/orFxyNXo7XS+jcUWvrjWSWKPUg8uTtpoFcwIbEt2mjABqMlNMSaPHkJMQ2NUv+Z7O755L/QudvzvEpKIY/d42B35ju7OzOf5a0z9vGaXZ7Rah34oOL0t1ij4UzOZ+MOAA952d532jgBx75mF9uvXzz1BG9Ms5SKRjc3H6xpG9FsSY2Wjbwe1fMF1TDzuq9mBz/puOEFPH/28hXQxjb7Ik4QU9r8LNHJ7rTySeIXI3pUkxx7yNp74O5WzG7kJda2JcPU1WJBEpfCEChlDeOtpufCXmpX+bct8IJosz83s/YVPz0HZ9Ki3SPeu7n9VQMg5B3+hETyuq7p6TUtl4+kyOqKMOayZhaXQoLrsprDZSQWWQks/u08czz2KIHfwjv30OaQX45YfXvhKuhaueRtFyeBEYuWNlV/t8TD5ONkIpZ8sghazxpmel0rqMVAtup734P7i+RERf36her7Z2H9G0hq0fQLykc7am42rsewL86PXX5zygfHvFml++3ZuBtHKzscTCsdoQba+4BcALDukPY64uhp69Cx7dvRCXYAO8+/1qb9g+nxFe/shF0CMO/iIMtL0MkyAVDIHeShNgyfK1RIhvwDQZIB   I[   �Y   [X   =W   oV   xU   �T   wS   �Q   �O   �N   �L   pJ   �H   {E   �C   �B   y@   �>   q<   r7   s5   t4   u3   v0   �-   �,   �*   �#   �    �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �%   �   �
   �!   �"   �   �      7 7�                    �=.    @�*                                         �=.    ��*                                         �=.    p�*                                        �=.                                                   �=.    8C?    I                                   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
        `template_content` text NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )      0�=    ��=    0X\                  Y       �*�     �*�                    Q       0        �=    ��=    0�=                                            �      Q       �)�     �)�     �=    ��=    ��=                                    1       X       ��=                                  1       �&�     �n5    Y       �                      ��=    X�=    0�=     �=                            1                     ��=                   Y       0                     H�=     �=            ��=                            Y       �      �              ��=    ��=    �=    ��=                            1       �E      ��=                          Y       �E      �              (�=    ��=    �=    ��=                            !       F      :       X�=    �      !       x�=    x�=    H�3                    1       ��=    ��=    H�3                    ��=    @�=    0X\                  Y       �*�     �*�                    Q       0       ��=    � ��mC���j@�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    % 		云咻咻showdoc\NZj\N[(% 		坤宏轩showdoc\3�\=G�( %		雷克艾森showdoc\3�\=M|(
 %		绿盛农业showdoc\%�\QF(	 %		绿色果蔬showdoc\%��\4F: 7		小程序小程序项目管理showdoc\��\�M�� #		云咻咻showdoc\NZj" 		项目showdoc[�;�\�( %		绿色建筑showdoc[��\/�" 		团约showdoc[���\ ��   			时" 		新邵showdoc\NJ\P7 %		蚂蚁时工小程序showdoc111111[���\�    q k7f� qE   7                             i#}W indexsqlite_autoindex_sqlitebrowser_rename_column_�w7�Atableitem_topitem_topCREATE TABLE `item_top` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `uid` int(11) NOT NULL DEFAULT '0' ,
        `addtime` int(11) NOT NULL DEFAULT '0' 
        )�I3�itableoptionsoptionsCREATE TABLE `options` (
        `option_id`  INTEGER PRIMARY KEY ,
        `option_name` CHAR(200) NOT NULL UNIQUE ,
        `option_value` CHAR(200) NOT NULL 
        )-4A indexsqlite_autoindex_options_1options�b5!!�tableitem_tokenitem_tokenCREATE TABLE `item_token` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `api_key` CHAR(200) NOT NULL UNIQUE ,
        `api_token` CHAR(200) NOT NULL ,
        `addtime` int(11) NOT NULL DEFAULT '0' ,
        `last_check_time` int(11) NOT NULL DEFAULT '0' 
        )36G! indexsqlite_autoindex_item_token_1item_token   
�    n����������                                                    � !#�}ertgtd4fv4data-副本
    
**简要描述：** 

- 用户注册接口

**�4 			9showdoc注册欢迎使用ShowDoc！c[���� 			�showdoc登录
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    "error_code": 0,
    "data": {
      "uid": "1",
      "username": "12154545",
      "name": "吴系挂",
      "groupid": 2 ,
      "reg_time": "1436864169",
      "last_login_time": "0",
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管�   ,   �   �   �   �   �   �   �   �   
   � ������������������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

				
                                                                              	�            p:!    	�            H=!                          	�            �8!                                                                    	�            >!    	�            �=!                         	�            89!                                               w =                                                          XL    h8!                                        XL    >!                                        XL    �=!                                       XL    �2!                                        XL    89!                                        XL    �9!                                                                                                                                                                                                                                                                        
   � �����������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  

				   ����~aJ0����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         %项目信息c\NZ 接口
c\Jj� 后端c\��	 %项目资料c\N_ api文档c[��W 文档c[�;� %项目信息c[�� %	项目信息c[�� 文档c[���   
 前端c\�� %	数据字典c[��� 	api接口c[���
   � ������������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

				
   X� �����������������~xrlf`ZTNHB<����60*$ ���������������������|vpjd^XRLF@:4.("
���描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBBAA@@??>>==<<;;::99887766554433221100//..--,,++**))((''&&!!  %%$$##""

				   ! �A��!              	�� 	          �K�    	�            XN�     �                   	��           �L�     �                                         w                                                                                                                                                                                                                                                                                                                                             �      �§��  �§��  	�    _ a_6ea6d0119e9004027792a9042cd6889612448238845cfaac33375f804636524e3da77487a8313633641\F��^ __46baa3dcbb38af94b949c4a5af1008036676576799bbc3df0f48aa89423d8fa35314cb699359445620\s] _]8fd87496760ccdad14659c4e4ab352a9417268788f4389380bcaeb09d50187c9965cd37ff88245539\r�] _]d6b5fe7b1f0273b920a6bbe0dd88ea931107876807cc9cc7f11bd58e2004e20c9524f0a3d29901329[�Q^ 	_a3c929085d89fc3ba8ec7360646a2a60e53915931321d429e9b023b13f1382435a892ce6831614369875[��K
    �Iw�                                                                                                              Q     ؾ���  �ќ                            B                     *                                              "                       %       Y               x�             ��    x�      
       ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                    .a6ea6d0119e9004027792a9042cd688961244823884-_46baa3dcbb38af94b949c4a5af100803667657679-_8fd87496760ccdad14659c4e4ab352a9417268788-_d6b5fe7b1f0273b920a6bbe0dd88ea93110787680,_	3c929085d89fc3ba8ec7360646a2a60e539159313� � ������                                                                            �    ���    ؠ�              � �      �3��3�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      00000                    �/                            �/                            `��G                                          �                     ��������                �              �      ��     ��      
          !            	 		\r�
 	\r�
 	\r�   $	\r�   	\r�   	\r�    �  �                                                                                                                                                                                                                           � 			�showdoc登录
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    "error_code": 0,
    "data": {
      "uid": "1",
      "username": "12154545",
      "name": "吴系挂",
      "groupid": 2 ,
      "reg_time": "1436864169",
      "last_login_time": "0",
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 



c[�u     � j                K 			eshowdoc注册eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[����G 				�]showdoc登录eNrdk99rGkEQx59v/orFxyNXo7XS+jcUWvrjWSWKPUg8uTtpoFcwIbEt2mjABqMlNMSaPHkJMQ2NUv+Z7O755L/QudvzvEpKIY/d42B35ju7OzOf5a0z9vGaXZ7Rah34oOL0t1ij4UzOZ+MOAA952d532jgBx75mF9uvXzz1BG9Ms5SKRjc3H6xpG9FsSY2Wjbwe1fMF1TDzuq9mBz/puOEFPH/28hXQxjb7Ik4QU9r8LNHJ7rTySeIXI3pUkxx7yNp74O5WzG7kJda2JcPU1WJBEpfCEChlDeOtpufCXmpX+bct8IJosz83s/YVPz0HZ9Ki3SPeu7n9VQMg5B3+hETyuq7p6TUtl4+kyOqKMOayZhaXQoLrsprDZSQWWQks/u08czz2KIHfwjv30OaQX45YfXvhKuhaueRtFyeBEYuWNlV/t8TD5ONkIpZ8sghazxpmel0rqMVAtup734P7i+RERf36her7Z2H9G0hq0fQLykc7am42rsewL86PXX5zygfHvFml++3ZuBtHKzscTCsdoQba+4BcALDukPY64uhp69Cx7dvRCXYAO8+/1qb9g+nxFe/shF0CMO/iIMtL0MkyAVDIHeShNgyfK1RIhvwDQZIB75glEmUZg10YibtvAKR3uhUUzRJQWqJ2lqidBVZKweHe35uJpUIsxTejYo4GsZBNtAgMiRXAK2RzgpdlRGBMhMrbyJsj0WGVoFqogGCSIbwxQ8hkMuR/oxxzCuUapn25eXd2TfGbhm2bt+tvA0P8FIiF78S13OepzJsjXozP9/2fDcBv2c5/tw==c[��J 				eshowdoc登录eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[���                  |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代    码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---    �  �组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|� 7 !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               E   #p://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)   $     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    ��：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


W:��                                                     &KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   *+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   (QVXQ2rKXJFoX7r2RmbVWN63xlaNteeuRVqFxAkCavT5BLItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAqO04p0b63Tvw4ROSXDb2k9ar1ySXKz4rWMePzN1ply5aZG6qsiSACY5bqKzpCgRBi9XFEepPP1rQc6vkfppZzvQxTXVJccDJMrB7LZyRKFRZnZwAqv5vWB2DERyn5MUiWMYkhyPUayccC+opcDQOnR9cu3GlvvmcYpAXKMLOazcYG5OZpQblQ/F4MYoHG+ScZMGoJWOWJtiZFuSovVJSaolldock98nKrqvYAI/vuiq0dibIo9/qCxV5mNVMp4zRKR/W/Kz5jI0cOR41XxagkU4pfIHvkTl5qAFeLgfRZGQGSC7lSSE6G1D0CUkbCyn9aA0Q6kq7ETuX+bmi29X4mBTFjdvW2E2Tx9MNjNaUusSVPnSMSR4wEmIQf9lqV2FPHfmfmkXWuRRjffl/9cFd2NWifsZx7nBO5juVSqvaC5e739VJmwP047QxnD0BK9V5XOuBsadWBOamysTE2tPKHBeXM86hqeKP3dvVFcnYupoPKvuhXLW2MhawHbFahvoW6Fe5SAQrSlXM9fwsF+ci/RimwOJkikysOJwqT6w1BWNPzOYvBbPwpH6OEzixdoqzsnvWbsItCw3auaTBjQgqmzo1zSFiz+VMgsyMN9iVYDrkVaf/tg9f0Kun8I0ar2tYJgjFaqwf13vkMiOQJ3kznXCbLhxDgVOmRMlzLxqVAMgMYJHWakWMhc0Yzeq/TbsNInbTYCFeUznk/jN6gHEZ3uzC7o9rIq8GBmOVKJQuuamgUVZUTq7ZjJllNa7YhayBCzHsfkZYHbOO52E6g5nopIvmslCjcESjXzKrEKOTowfEIyrV8YH5/Lmeg6C/dtYTIMG2HJeAjvTf1q1fl+DOCVCPxgv1wzLtsPu75uITIznvzKRtFT0dngBEStiBrxUHl5Svopo6oBKfXr3S8dnnHQF1UK3amJPG+qiVfWU8nK1a3   )tnx/ofXOgKxaPXmZV9FVSshF7zCiQ3HfmdO6HmPnhLhfGseLsGB09oZs2ZGPTCOsm/Gwyzc0/Pfs+3RSOyUMgulCsl4MWcWxiAcXbDI/9HVj9mJWIEjMZy4+7WeAEQgeJ3/5hvuU14LlhY1oxB8Qx/JXAzfleTb6KoI3CZBlXI9vMCrQ+hjoLs4BJdpgbKosc/W+Hlnd1d36DoISgoPFMShz1XYIDg5qsC5je5eUB32sRSQ9Nyelf3OnEr+kRjxeGhJTKVI5iEUCTn4uaKGoQOdGNPP9cIWnIov6oWjctJXPciDkJ+2NsSHHdCZBDXG39LtDUaliBKMK3LQvuAHXuAj/ogUBfv8Ssk6f0SENDbbUAyk+HTW2Dh0QLXWQrWegAwJ2N+n8VHsxLHSMIKMswcXDIFdeSucGFY5J5ixvEWOl9lY6TDqQi3YBb8g9fVh2c/T/PVykSqT3tdUSZC4KJZt6bZa6TY/V1lRpX1jkkxOMPOZpLsrVfLUBRvBfuSR3zbWn3g81IjrV/9IDH8q9fER+H+NjmJkIQVsQx/5TG/Rvr7/hLx4yS6yn1AHbDaCUoE1ZPOl9WoL1qj9snQX5PRciowPW5mcdbxIHj1GMlY1WUS9nKBgWl12u/lR+CYXj9+szBc3O7ESB9bnegRcOXKEEZCa+egVxJqBmYUVkvkBxiLzpyzYwQaQRojvx3kHEowA4G0JZnWMWunA/kvAdryqoe1Lfw2cxv9K5QACDUgbLHtgvBwB8oQIF3+csbLDENDiymZx/bGxvGH88sAopK39X5xRBvLne73NJLlpLO1BfBE5Hi+mC+xZ3lecwEOPS7KxvsXwyPewUSyRyTxTgso+Vj3UKz+3iwYETuYGsOCPwDTBBSS5jxXZxUBbcIBhQwTOcAMcL9DM+U8u+mVNwEpzFwPudmS++MM6zH3MHOgfklxpCaEwH41A84dLI1jpbv4n4Bdq9dxBY+lWkI5gQYj3SyKuBoBt3FgDVw+AP8jhXGOMC4DRC82i3oryQ    M1KNQzwOMRKP0o1BmgDgB5OvO10wthIwxLIHYzI9AyWStOZcmGf7jKptFfPLZZylcuH2dMgb5MmQEGIAQrV1Bw2V47IfIqkHpCJ8Ypssw9B9gGQWUEmUmR4tQILOxJZgMl3354WVsydFDNDz080tv4iWA8TzB0N3+J7Q6qsYR8cj8II+hvMN5/lYU0pogA/v22s/Uj2HpK1XRRGTXy0CV1uR001AJIMzOOjN8ONFV8CxXiQV1Tl7RTT3ahOcQ3AWyl+x+ExtLC7c9DE7CBeXBkj9zeM9TRsdIhsj7h4LYbKen2wk6macrnlb0CnWMXRW5x6WdQE4VSD/u6IRI1BJ06/jUEVkP/ToHfBIAGgQnT7gm2sJkg2EYVbfK2+C762MIyS+uEh6zIfIq/3GRd2le53UwoE2kkcQlVSUKC7U+jgPKim9kFKYQs4WmDKmLcw+wL9GXubZG/ZyPwKHaQfbkChnAJH6UXAYp/aDz48OCb5bXbbRyPHboQuWeldczNPG3ItAQ15ydHtH3Zc+3eIvjKAAdjzj3/Sv9QH71mbcXzoLAwN9J8SU26pfOQ2VpvRZXSzdI67WSHhUCjG3cbes3BUU/ztMoa6UVR/O8xnqheausvW12SDslTSJbyMo99W6K3JxxZRjTVrGHGF2spLuJgEZ4maRaIWwzIf+dbJdaHzvtYmHwoGUYXn2NZy/l5rOQpNJ75VI5a1qUPxkkHOminftZNZcauU2hCVoaoda2KcOOS2iBaR76LvUpOnu/k9++0N5MWeZmBeZ08h7auaghHdrMuxv6FhDb/n8dj/Q6E+rF4V6aAZwd5mfzsXjXbQM6P3LP4Mhm0f4mSZG0Jn8QdSdAjuxzWl33v2Dr1X0upHdygSisr8AD23QE/S90ml9zFASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gm/R/Gh8gsRH1KGxIiXzEM9bxlTO5TcUenFFJsyK07BgAFuwN8QxLZX8nY1DTZdbm+hbAkR+ROtSCx+c[��.    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��}   -----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in     �q 	1�showdoc
资料完善接口请求url：
https://hsl.jiaodaoren.com/web/index.php?store_id=2&r=api/user/audit&access_token=goa6IdOzJXJCt165fJtNBQk8UMVcrlMB&_uniacid=-1&_acid=-1&_version=2.6.7

**请求方式：**
- get 

**返回参数：**

 ``` 
 {
  "code": 1,
  "msg": "请去个人中心完善资料!"
} 

 ```


 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |0：资料已完善 1：资料未完善  |


c\Jk�  �{ 	I�showdoc
用户资料是否完善接口请求url：
https://hsl.jiaodaoren.com/web/index.php?store_id=2&r=api/user/audit&access_token=goa6IdOzJXJCt165fJtNBQk8UMVcrlMB&_uniacid=-1&_acid=-1&_version=2.6.7

**请求方式：**
- get 

**返回参数：**

 ``` 
 {
  "code": 1,
  "msg": "请去个人中心完善资料!"
} 

 ```


 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |0：资料已完善 1：资料未完善|


c\Jk�    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   6               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   X码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   0----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   3               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   4员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   5码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    1

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   7员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   8码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    F

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   ;               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   <员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   >码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    w w                                                                                                                                                                                                                                                                                                                                                                             �W 	1�=showdoc
资料完善接口eNp1UMtOGzEU3fsr3CyyiDozBImAIkVIsCISoC6oupu4Y5MYEs9o7AECrlRRukBtgQVEvMSSBRJPgXhK+Zl4CCt+ATsTUirRu5l7z70+c85pn17H58tRWH1+2AUVIQKed5wKr9ozFPkY+SFhtufXnHny1aEMkwU7qATDXOiFS3GhPx0WUECdiJPQQRGmIo08j3DuCn+WsELZR7kxPLlY/FIcFdncwHRRTIx8mh2aGv/shdXxkbQbMYo8zWRl026vmSMhpz4r9Ns5exCATKbdkRk3btXDulaayQALlomAZqfWl+Otsw4KgUwmtfFHqubPp++r8vH8Xh38ku3Ty3h7TQKZt3RBXZ0uGS0orS6sL4wZV9QDAqXaOJSUCSg1zFDtL2KAaVSj1bqLMA61497GUFBMmKCi7nooxO5MxIVZa/b3D1AZUZbcdMmN5+am2jt44w4AWCqVIIBLAMKU52OSysPsRzPUeFn3KR2TWrtv3Ry17u5aN8eq+UOd/FaNlfbVStzY+ZAC32BCAvTn3z8k+ZgI32b4bnhWNzud3mtq/yv9xOjs+DZjnzaSiFHXF4k2mO1h8f5RF9MPAXgB2gMZ2Q==c\J�S   ?

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   9----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   @----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   A

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   B码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    C员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   D               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理    2pWqmGAxyFW+lGqMUAbAPRw4m2nE8ZGGpZA7mBEpmewVJrOlAv7dJdJpb16brGUq1w+zJ4GeZs0AQpCDFCopuawuXJE5lMk9YBMjFdkm30Isg+AzAoykSLDqxVY2JHIAky++/a0sGLupJgZen6isfUXwXqYYO5o+BbfG1JlDfvgeBRG0N9gvvksD2tKEQX4+W1j7Uey95Cs7aIwauKjTehyO2qqAZBkYB4fvRlurPgSKMaDvKIqb6eY7kZ1imsA3krxOw6PoYXdnYMmZgfx4soYub9hrKdho0Nke8TFazFU1uuDnUzVlMstfwM6xSqO3uLUy6ImCKca9HdHJGoMOnH6bQyqgPyfBr0LBgkAFaLbF2xjNUGyiSjc4mv1XfC1hWGU1A8PWZf5EHm9z7iwq3S/m1Ig0E7iEKqSggLdnUIH50E1tQ9SClvA0QJTxryF2Rfoz9jbJHvLRuZX6CD9cAMK5RQ4Si8CFvvUfvDhwTHJb7PbPho5diN0yUrvmpt52pBrCWjIS45u/7Dj2r9D9C8DGIA9//gnfac+eM/ajONDZ2FooB9KTLml8pHbWG1Gl9HN0jnuZoWEQ6EYdxt7z8JRTfG3yxjqRlH97TCfqV5o6i5bX5MNylJJl/Ayjn5bobcmH1tENdasYcQVaisv4WISnCVqFolaDMt85Fsn14XO+1qbfCgYRBWeY1vL+Xut5Sg0nfhWjVjWpg7FSwY5a6Z8105mxa1SakNUhqp2rIlx4pDbIlpEvou+S02e7ub37H9vIC/2NAPzOnsKaV/VFIzoZl2O/Q0Na/g9j8f+DIX6sHpVpINmBHub/e1cNNpBz4zes/gzGLZ9iJNlbgidxR9I0SG4H9eUfu/ZO/ReSasf3aFIKCrzA/TcAj1p/6HEjn5ASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gn/j+JD5T9EfEgZEiNeMg/1vGVM7VByR6U/ptiUWXEKBgxwA95DENteydvVNNh0ub2FsiVE5E+Qciyec[��8   FZ0d7394rSMQi1ZvXvZVVLUScsErnNhw7HfmhJ736CkRDrjm4RKcOK2dMWtm1APjKPtmPMzCPT3/PdsejcROKbNQqpCMF3NmYQzC0QWL/B9d/ZgdiRU4E8ORu1/rCUAEgtf5b77hPuW1YGlRMwrBN/SRzMXwXUm+ja6KwG0SVCnXwwu8OoQ+BrqLQ3CZFiiLGvtsjZ93dnd1h66DoKTwQEEc+lyFDYKTowqc2+juBdVhH0sBSc/tWdnvzKnkH4kRj4eWxFSKZB5CkZCDnytqGDrQiTH9XC9swan4ol44Kid91YM8CPlpa0N82AmdSVBj/C3d3mBUiijBuCIH7Qt+4AU+4o9IUbDPr5Ss80dESGOzDcVAik9njY1DB1RrLVTrCciQgP19Gh/FThwrDSPIOHtywRDYlbfCiWGVc4IZy1vkeJmNlQ6jLtSCXfALUl8flv08zV8vF6ky6X1NlQSJi2LZlm6rlW7zc5UVVdo3JsnkBDOfSbq7UiVPXbAR7Ece+W1j/YnHQ424fvWPxPCnUh8fgc9rdBQjCylgG/rMZ3qL9vX9J+TFS3aR/YQ6YLMRlAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+qy282Pwje5ePxmZb642YmVOLA+1yPgypEjjIDUzEevINYMzCyskMwPMBaZP2XBDjaANEJ8P847kGAEAG9LMKtj1EoH9l8CtuNVDW1f+mvgNP5XKgcQaEDaYNkD4+UIkCdEuPjjjJUdhoAWVzaL64+N5Q3jlwdGIW3t/+KMMpA/3+ttJslNY2kP4ovI8XgxXWAP877iBB56XJKN9S2GR76HjWKJTOaZElT2seqpXvnBXTQgcDI3gAV/BKYJLiDJfazILgbaggMMGyJwhhvgeIFmzn9y0S9rAlaauxhwtyPzxR/WYe5j5kD/kORKSwiF+WgEmj9cGsFKd/M/Ab9Qq+cOGku3gnQEC0K8XxJxNQBs48YauHoA/EEO5xpjXACMXmgW9VaUB   Gl9wNaSmzBWJNqZrb2RWjeV9a2zVWHvuWqRVSJwgoEavTyDbApb1/DSAkM0xc37CejFK8ttkfIvMPXUFhNqOc2qk370DHz4hyWVjP2m9ek1yueKzgnX8yNyddumiReamKksCmOC4hcqarkAQtFhdHKH+9KMFPbdK7qeZ5Uwf01SXFAecLAO918IZiUKV1ckJ4Or/htUxGMFxSl4sgmVMcjhCvXbCsaCeAkfj0PnBtRtX6pvPKQZ5gSLsvHaDsTGZWWpQPhSPF6N4sEHOSRaMWjJmaYKdaUGO2islpZZYZndIcp+s7LqKDfD4rqtCa2eCPPqtvlCRh1nNdMoYnfJizc+az9jIkeNR82UBGumUwhf4HpmThxrg5XIQTUZmgORSnhSiswFFn5C0sZDSj9YAoa60G7FzmZ8rul2Nj0lR3Lhtjd00eTzdwGhNqUtc6UXnmOQBIyEG8ZetdhX21JH/qVlknUsx1pf/Vx/chV0t6mcc5w7nZL5TqbSqvXC5+12dtDlAP04bw9kTsFKdx7UeGHtqRWBuqkxMrD2tzHFxOeMcmir+2L1dXZGMrav5oLIfylVrK2MB2xGrZahvgX6Vi0SwolTFXM/PcnEu0o9hCixOpsjEisOp8shaUzD2yGz+UjALT+rnOIETa6c4K7tn7SbcstCgnUsa3IigsqlT0xwi9mDOJMjMeINdCaZDXnX6b/vwBb16Ct+o8bqGZYJQrMb6cb1HLjMCeZI30wm36cIxFDhlSpQ896JRCYDMABZprVbEWNiM0az+27TbIGI3DRbiNZVD7j+jJxiX4c0u7P64JvJqYDBWiULpkpsKGmVF5eSazZhZVuOKXcgauBDD7meE1THreB6mM5iJTrpoLgs1Cmc0+iWzCjE6OXpAPKJSHR+Yz5/rOQj6a2c9ARJsy3EJ6Ej/bd36dQnunAD1aLxQPyzTDru/ay4+MZLzzkzaVtHj4QlApIQd+FpxcEn5KqqpAyrx6dUrHZ993hFQB9WqjTlprI9a2VfGw9mq5    b  � b                                                                                      S[ 	%eshowdoc资料信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\NZ��FZ 	1�=showdoc
资料完善接口eNp1UkFPE0EUvs+vGHvoobEtkIimSWOCJ5ug8aDxtgy7QzvQzja7U7Q6Ji2RCJLSGsGQWjBRsSYGWhK0SCH8GDu7y8m/4NttxVblXfZ9b7733jezn9fqOAdLBSv786SOMkLk7UQ8nrGzsXlGTIOYFuUx3czFH9HZOOMGfRzLZ/I3bQEHGjOSE2ErSfIsXrCpFacGE2Gi69S2NWEuUJ5Mm2TytnH3Seph6pYYn7w2lxJ3pu4t3Lg//UC3stNTYa3AGdFhUHQ8rF0ki9SymcmTE7HJ2HWEIhEvUOm8+a5OqiA0EkFRnKYC+2equuRstoMqYNmHqlaR6mz5vLQq3YOu2lmTXuvQ2VqXSCaiEBgiyPowimV0UAaGfxlNFPMUS2erJRkXWLobn52VzmAWkpzkBqe2sBhPS9V8DTt/lMqqstk79RO3+9ztvoCi22xDxxzJsWxRI4ZhwfuMtO5/U8d7qtFW2yV/PTMoF0wUNZ1YhjZfsMUw2zv+0uueeq2ys/fhfPv9vw0kTRi/pEdVK9ADLbMFm3H/P2WZTrlNpap9umDXdntHdWe16S43gaozSy9kiaDB+GGi87V8Xqp7+0eq2oLhwM1b5iLjOh1e7jbKwRRRHLn00RJUDeZDfUSsWj/zBYLZAvRnndt9pfZB15rTOFbVjgyMcbah3u4MWQAhPDMzgxF+ijAO6aZBQwk8dtUHOTsNechZqamX766E0DPcJyP4jE7qe+VvP/3XSNGBj8BJvx10WfivAHpwYCiAYyC4LwaPQ6o+HniHuz4NoV+cqKOYc\J�P    �  �|:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码� 8 !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               (    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   K----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   L

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   O               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   P员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   M码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<
   Q----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   R

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   S码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     TDA4+Ar/SjVGKANAHo48bbTCGMjDUsgdtAi0ztYKk17yoV9esqk0l49t1iKVS4fZk+DvE2aAAkhBihUU3PYXDki8ymSekAmxiuyzT4E0QdApgWZSJHh1QosnEhkATrffbtbWDF3UkwNPT/RWPuLoD10MHc0fIvvDamyhn1wPQojqG9Q33yWhzUljwL8/Lax9iPZe0jWdlEYNfHRJnS5HTXVAEgyMI+PToYbb3wJNsaDvKIqb7cxPY3qNq4BeKuN33FYDCXsbhwUMbuIF1fGyP0NYz0NBx0i2yMuVouh8r4+OMlUTbnc8jegU6zi6C1OvSxqgnCqQn93eKJGoROj30ahCsj/qdC7oJAAUCF6fMExVuMkm4jCLb5W3wVfWxhaSf3wkFWZD5HX+4wLu0rz3ZQCgXYSh5CVFBTo7hQ6OA9bU/0gpHAEHC2wzZi10PsC/Rl7m2Rv2cj8ChWkH25AopwCR+lFwGKf2g82PDgm+W027aOeYxOhS1Z619zM04JcS0BBXnJU+4cd1/4don8ZQAPs+cc/6Tu1wXvWZhwfOgtNA/1QYsotlY/cxmozuoxulu5xNyskHArFuNvYexauaoq/XcaQN4rqb4f+TPVCUXfZ+zXZoCyUdAkv4+i3FXpr8rFFdMeaNYy4Qm3lJVxMgrtEzSJRi2GZj3zr5LrQeV9rkw8Fg6jCc+xoOX+vteyFphPbqhHLu6lD8ZJCzpwpz9rBrJhVCm2IytCtHWtinDjktogmke+i71KTp7v5PfvfG4iL3c1Av86eQtqjmoIRPazLvr+hYQ2/5/HYn6FQH1avirTRjGBvs7+di0Y76J3RexZ/Bs22D3GyzA2hs/gDKToE83FN6feevUPnSrv60R2KhKIyP0DvLVCT9h9K7OoHpHTjy44vO2592Hn1q45O+FksPLQym8Zi1pgZhp/2/yg+VP5DxIeUITHiJfOQz1vG1A4ld1T6Y4p1mRWjoMEAM+A9BL7tlbxdTYNNl9tbKFuCR/4EzeE8QQ==c[��O   Uv/wWkcgFq0+vOxRVLUSYsErnNiw7XfGhN736C0Rbr7m4RJcRa2dMWtm1APtKPtmPMzCnJ7/nh2PRmKnFFlIVQjGizmzMAbu6IJF/o+ufszuygpcluEu3q/1BMADwev8N99wn/JasLSoGYXgG/pI5mL4riTfRldF4DYJspTr4QVeHUIfA93FwblsF0iLGv3sHT/v7O7qDl0HQUnhgYI49LkKBwQnRxW4t9HTC7LDvpYCkp7bs7LfmVPJPxIjHg9NiakUyTyEJCEHP1e2YehAJ8b0c72wBbfii3rhqBz0VQ/yIOSnpQ3+YVd3JkGV8bd0e4NRKaIE44octAf8wAt8xB+RoqCfXylp54+IEMZmG4qBFJ/OGhuHDqjWWqjWE5AhAfv7ND6KnThWGlqQcfZIgyGwkbfCiWGVc4IZy1vkeJm1lQ6lLtSCXfALUl8flv08jV8vF6lS6X1NlQSJi2LZlm6rlW7zc5UVVbtvTJLJCaY+k3Q3pUqemmAj2I888tvG+hOPhypx/eofieFPpT4+Ap/XaCtGFlLANvRh0PQWrev7T8iLl2yQ/YQ8YL0RpAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+yyy82Pwje5ePxmpb+42YmVOLA+1yPgypUjjIDUzEevwNcMzCyskMwP0BaZP9HnPKwBaYT4fpx3IEELANaWYFbHqJYO7L8EbPurGtoe+mvg1P9XKhcQKEBaYNkD4+UIkCd4uPjjjJUdBocWVzaL64+N5Q3jlwdGIW3t/+L0MpA/3+ttJslNY2kP/IvI8XgxXWBP+b7iBB5qXJKN9S2GR76Hg2KJTObZJqhsY9XjvvITvWhA4GRuAAv+CHQTXECS+1iSXQy0BQcYNnjgDDfA8QKNnP9k0C9rAlaauxhwtyPyxR/Woe9j6kD9kORKSwiF+WgEij9casFKs/mfgF+o1nMHjaVbQTqCBSHeL4m4GgCOcWMNTD0A/iCHc40xLgBGLxSLeivKAzUr1   VQVXRWrSXJFoYbrWRmbVWN63xlaNteeuSVqFxAkCavT6BKItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAyO04p0b63Svw4ROSXDb2k9ar1ySXKz4rWMePzN1plypaZGaqsiSACo4pVN7pCjhBi9X5EfJPP1rQc6vkfpppzvZjO9UFxQEny8D7tXBGolCldXICSPy/YXUMRnCckhfzYBmTHI5Qq51wzKmnwFE/dH5w7caV+uJzikFcIAk7r91gbExmlhqkD8XjxSgebBBzkgWlloxZGmBnWJAj90pBqSWW2R2S3Ccru65iAzy+67qhtTNBHv1Wn6jIw7Rme8oYnfJixc+Kz9jIkeNR82UBCumUxBf4HpmThxrg5XLgTUZmgOSSnhSiswFFn5C0sZDSj9YAoS61G7FzmZ8re7sqH5OiuHHZGrtp8ni6gdKaUhe40os2OMkDRkIM4i9r7SrsqSP/U6PIKpdirC//rza4C7tq1M84zh3OyXynUmlVeeFy9bsaaXNAqeuqgJXyPK71QNtTKwJ9U6VjYuVpZY6Lyxln01Sxx67t6oxkbF3NB5XzUK5aW2kL2IlYLUNtC/SrXCSCFaXK53p+lotzkX4MXWBxMkUmVhxGlXvZmoSxe2nzl4JZeFLfxwmcWNvFWdk9azfhFoUG5VzawY0IKoc6Vc0hYnfsTILMjDc4laA75FWn/bYNX9DRU/hGjdcVLBOEZDXWj+stcukRyJO8mU64dReOpsApU6LkuReNUgBkBrBIc7UixtxmjGb136bdGhG7aLAQr8kccv8Zvdq4NG92YvfHNZFXA4OxihdKQ25bUC8rKifXHMZMsxpT7ETWwIQYdr8jrI5Zx/PQnUFPdFJFc1nIUbi80S+ZVfDRydUD/BGV6vjAfP5cz4HTXzvzCZDgWI5LQEf6b+vWr0swcwLUo/FCfbNMK+z+rrn4xEjOOyNpa0XvjScAkRJ24GvFwSXlUVSTB1Ti06tXOj77vCOgDqpVB3PSWB+1sq+Mh7NVyzs73   Y

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   Z----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<    �  �                                                                                                                                         �jX 	1�showdoc
资料完善接口eNp1UkFPE0EUvs+vGHvoobGtJRENSWOCJ0nQeNB4W4bdoR1od5vdWbQ6Ji1ClGApRmgQCweN1mBowYitLaQ/xs7ucvIv+HZbsVWZy77vzfve+97s5zWaztGSbWZ+nuygNOc5ayIeT1uZ2DwjhkYMk+ox1cjGH9LZONM1+iiWS+duWBwuFKYlx8JmkuRY3LaoGSe2xniYqCq1LIUbC1RPpgwyfku783jqwdRNnhi/OjfFb0/eXbh+b/q+amamJ8OKrTOiQqdoIqycB4vUtJihJ8di47FrCEUiXiDTqXyXJ2VQGomgKE5Rjv07WV5ytg6DLGDRh3KjJGR35aywKtyjjtxbE17jq7O9LpCYiMLBcIKoD6NYRAdpqPC3UXg+R7FwthuC6RwLd/OT86I56IWETrKDW4ubTE8JWXsNM38UirK01Tv1A7ez7HaeQ9KtHQJjjmRZJq8QTTPhfUao9W+yfSCrh3K34I9nGtU543lFJaamzNsWH6722p97nVOvUXQO3p/tvvuXQFKE6RdwZLkEHKDM2hbT/f+UYSrVLSrkxsfz6o0PvdaOs1pzV2pQqjJTtTOE06D9cKFzXDwr7Hj1liw3oDnU5kxjkekqHR7uVotBF54fWbq1BFmN+VAdESvXu75AcFuA/oxzO69kHXStOdW2LDdFYIzupny7N2QBhPDMzAxG+AnCOKQaGg1N4MRlH2StFMQh8JJc7/Ra+712u9c6kN1nsv5SVpa942Wn8uZSCD3F/SYIPqMT+h7622f/NVh04C9w2G9nXXT81wGdODAawCuwSF+MbH7pa8OJ85xT3R/kgIjQL1UZwnc=c\J��    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|   \+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   ]KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7          $   #   "   #   $��方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	    ^://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    8 8                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      q      8�ٹ�  8�ٹ�          Q      �ٹ�  �ٹ�  �9 			%�3saedfedfc默认页面### ShowDoc介绍
关于ShowDoc的介绍，请访问：[http://blog.star7th.com/2015/11/1816.html](http://blog.star7th.com/2015/11/1816.html)

### 环境依赖

#### 1、必需环境

- PHP5.3以上版本

#### 2、可选环境

- php-mysql模块、php-pdo模块、mysql数据库

- ShowDoc默认使用Sqlite数据库，数据库文件在/Sqlite目录下。PHP环境默认支持Sqlite，无需额外安装其他数�   �   a��库。如果想使用Mysql数据库，则需要安装环境并参考下文的数据库配置说明做相应配置。


##安装和配置

	
#### 1、全新安装

- 克隆或者下载代码：
[https://github.com/star7th/showdoc](https://github.com/star7th/showdoc)

- 文件夹权限
	请确保/Application/Runtime 、 /Public/Uploads 、 /Sqlite 有可写权限

#### 2、升级安装

- 下载新代码后，覆盖原来的代码。请注意保留/Public/Uploads里的文件。此目录保存着你上传的图片文件。如果你没有上传过图片，则可忽略之。
- 先备份数据库。然后在浏览器访问http://xxxx.com/index.php?s=/home/update/db ，以升级数据库结构


### 数据库

####1、Sqlite数据库 or Mysql数据库？

 ShowDoc默认使用Sqlite数据库，并且自动集成到/Sqlite目录下。用户下载代码后即可使用，无需再安装其他数据库环境（PHP环境便可支持Sqlite数据库）。
使用Sqlite数据库是为了方便，尤其对非web开发人    �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<�cW<�                                                 9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��}   d+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   eKkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��}   g+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   hKkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   i    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   leHVyNekuSKRKvasjeyqsbxvja0aa889k7QKiRUE1Oj1CURb4GS9MA0geHPMnJ+wXoziwjYe38JzTz0BIbcTrBrt967Ah09watnYT1mvXuN8vvSsaB0/MnenPapokZqpypIAKrimUHmnK+AELV7nR8g//WhBz6/i+xmqOd2P7lQXFBecLMMhUQtnJItVWqcmgPH/G1bHYJRLEPKiHixj4sMRYrUbjjr1FDjih84Prt24Ul98bjGICyRh57UblI3xzFKD9CF4vBjjBhvEHOdAqSVjlgTYHRbkyj0nKLXEMruDU/t4ZddTbIDn7npuaO1M4Ee/1ScqYqjWdE+ZQ6e8aPHT4jM28vh41HxZhEI6JfEFvkdm5aEGePk8eJOSGSB5pCeB6GxA0SckbSyk9aM1QKhL7UbsXObnyt6eyselGNe4bI3dDH483UBpTakLnPMi3VDqgJIQhfjLWnsKM3Xkf2oUaeUSjPXl/9UGb2FPjfopx3nDuZnvVCqtKi+uXP2eRtoc4DRVFTAnzxNaD7Q9tSLQN1U6JlqeVva4tJx1N00Ve+zars5IytbVfFA5D+WqtZW2gJ6I1TLEtmC/ykajnKJU+VwvzLIJNtrPQRdYmkzjiRWXUeXGtyZh7Mbb/KVoFp/U93ECK9Z2cVZuz9pNekWhQTk7O3gRQeVQJ6q5ROz2nkrgmfEGpxJ0h7zqtt+24QsyegrfqIm6gqWCkKzG+nG9RR49An5SMDNJr+7C1RS4ZRxKnnvRKAVAZoATSa5WxKjbjNGc/tu0VyNiFw0nJGoyB99/Ru5BHs2bndj9CU3k1eBgvOIFZ8hrC+JlRWXlmsOYalZjip3IGpgQ57zvCKtj1vE8dGfQE51U0VwOchRueuRLdhV8dHL1AH/EpDo+MJ8/1/Pg9NfufAIkOJYTEtCR/tu69esSzJwA9Wi8UN8skwq7v2suPjFS8+5I2lqRS+YJQNTBDn6tuLikPIpq8oBIfHr1Ssdnn3cE1UG16mBOGeujVu6V8XC2anlnx   m/sfXusIxmPVh5c9iqpWQix4hRUbtv3umJD7HrklwjXZPFyCe6u1M2bNjDLQjtJvxsMczOmF7+nxaCR3nMhCqkIwXsyZxTFwRxcsCnx09WN6sVbgZg0X936tJwgeCF3nv/mG/ZTXQs6iZhSGb+gjmY1zdyX5NroqArdJkKVsDy/w6hD6GOguAc6lu0Ba1Ohn7/h5Z3dXd/g6CEoKDxTEos9VOCBYOabAvY2cXpAd9rUUkPT8npX7zpxK/ZEcYRiSElNpnH0ISYIPfq5sQ9GBTozp53pxC27FF/XiUTnoqwxiEAqQ0gb/0Hs+lSDKBFq6faGYFFVCCUUO2QMB4AU+GohKMdAvoDjaBaIihLHZhqIgpaezxsahC6q1Fqr1BGRI4AJ9Gh/j3DhWBlqQcfr8gyLQkbfCiXMq6wYzlrfw8TJtK11KXagFuxAQpL4+Tg7wJH69bLRKpfc1VRIkNsbJtnRbrXRbgK2sqNp9YxJPTlD1qaS3KVXyxAQbwX7kUdg21p8wDFHi+tU/ksOfSn18FD6vkVYML6SBbciTo+ktUtf3n+AXL+kg/Vl5rAKpAmvw5kvr1RasUftl6S7I6fk0Hh+2snnreBE/eoxkTtVkEfWygsKR7LLLLYAiN9lE4malv7jZySkJYH22R+AqV44IAlIzH70CX1Mws7iCsz9AW2T+RB4K0QakEeL7Cd6FBC0AWOvArI4RLV3YfwnY9lc1tD3018CJ/69ULiBQgKTAcgfGyxEgT/Bw6ccZKzcMDi2tbJbWHxvLG8YvD4xixtr/xe1lIH++19eMU5vG0h74F+Hj8VKmSB8JfsUKPNS4JBvrWxQPfw8HxRKeLNBNUNnGqmeD5cd/saDAyuwAJwSi0E2wQUnuo0l2MdgWGqDY4IEz7ADLCyRygZPBgKwJnNLcRYG7XZEv/bAOfR9VB+oHp1ZawijCx6JQ/BGnBXNmCz8BvxCt5w4aS7eCdJQThES/JHLVAHCMG2tg6gHwBz6ca4xxATB6oVjUWzEeqFmph    gEeB1/pR+nGAG0A0MOKt91GGBsZWAKxgxaZ3MHSGdJTLuyTUyad8en5RSdW+UKEPg3yNWkCJIQYJFBNzRFz5QjPp3H6AZ4Yr8g2+xFEHwCpFngijYdXK7BwIuEF6Hz37W5hxdxJUzX0wkRj7S+C9tDB3NG4W3xvWJU1zg/XowiC+gb1zWcFWON4FODnt421H/HeQ7y2iyKoiY81ocvtqKkGQJKBefxkMtJ440uwMTfIK6rydhuT06hu4xqAt9r4HZfFUMLexkER04t4aWUM398w1jNw0CG8PeJhtRgu7+uHk0zVlMstfwM65VQudotVL4uaIJyq0N9dnqhR6MTot1GoAvJ/KvQuKCQAVJgcX3CM1TjJJqJIi7/Vf8HfFoFWUj88pFXmR/j1PuXCLme+m1Ag0E7yELKSgALdnUIH52Froh+EFI6AowW6GbUWel+gP2NvE+8tG9lfoYL0ww1IlFPgCL0InNin9oMND45xYZtO+4nn6ET4kpXZNTcLpCDXklCQl1zV/mHHtX+HyV8G0AAz//gneSc2+M7ajONHZ6FpIB9KXLml8tHbnNqMLqObzj3uZoWEw+E4e5vznYWrmhJolznIG0UNtEN/pvqgqLvs/ZpsUBpKsoSXudi3FXpr8tNFZMeaNZS4wm3lJWxcgrtEzSJRi3MyH/3WzXXh8/7WJj8KhVCF5+jRcv5ea9kLTSe2VSOWd1OHEo5C7pwpz9rBrJjlhDZMZMjWrjVxVhzyWkSSyH/Rf6mJ6W5+z/73BuJidzPQr9OnkPaopnCIHNZl39/QOI17j2Hsz3C4j1OviqTRjHK+5kA7G4t1kDuj7yz3GTTbfsTKMjuEznIfSLEhmE9oSr/v7B0y5+waQHcIEorJ/AC5t0BN2v8+0asfkNKNLzu+7Lj1YefVrzo64Wep+NDKbhqLOWNmGH7a/6P4UfkPET9ShsSoD89DPm8ZUzuE3JHzxxTtMitGQYMBZsB7GHzbK/m6mgabLre3ELYEj/wJGwtZ7w==c[��m   � ��                                             ��C 	1�9showdoc
资料完善接口请求url：
https://hsl.jiaodaoren.com/web/index.php?store_id=2&r=api/user/edit&access_token=goa6IdOzJXJCt165fJtNBQk8UMVcrlMB&_uniacid=-1&_acid=-1&_version=2.6.7

**请求方式：**
- get 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|user_type |是|int |用户类型|
|name |是|string|姓名、单位、组织名称|
|family_address|是|string|家庭地址 |
|identity_card_just|是|string|身份证正面 |
|identity_card_against|是|string|身份证反面|
|business_license|否|string|营业执照|
�	 	%�Qshowdoc资料信息阿里云windows系统IP地址：47.92.220.62

帐号：administrator

密码：wancll88.

2、登录账号：root
3、登录密码：HWMfOczgFlRhwSiq6SF6B

http://yunxiu-xiu.top/admin/   账号：super   密码：yunxiuxiu123c\N[(�u 	1�showdoc
资料完善接口请求url：
https://hsl.jiaodaoren.com/web/index.php?store_id=   �                                                                                                                                                                                                                                                                     �rV 	1�showdoc
资料完善接口eNp1Uk1v00AQve+vWHLIIcJ2nCYBRYqQCpdGKogDiJtj7CUxdWzL3vBpKigBtaJNKgERn5UiEKBKkLZqlTYJ5M94jXPqX2DtddoEwVw88+bNzFs9B92ev7tSt/Xj4TtQxdhyCoJQdXT+tiabqmzayOAVsybcRTcFzVDRPd6qWhccTBuSphYzSbsoW5pQd5AtyHVVw0lZUZDjSNhcQkaxYsr5BfXKg9KN0kUs5nO3Svjy/NWl89cWryu2vjiflOqGJit0EycmpZPkDrIdzTSKGT7PnwMglQoimX77iAxbVGkqBThYQRiGPdJa8V/vRCgELqvI5oZLRs/Gj9fc37sDsvXCDbr7/pumC9wCRwPSiDJWctDlYpgyqAroks0vtNAMTNPV53TJwiXWteQKmmlD8vMlWdsYdw7oYchIulbTMIyKaabfbYW0j51TJt0m4fvW7ErRG3wKOt/I0f74V4PstLx+cy5H9p4cD9czM63PXyctxsqmGWtumpVNL2fj6WyMR3MRGMtwZB05TMhfmidaov05f7V3KiK3LMZAeC/yafSKvN+acgQAWC6XIYAPAYQJxVRRogDFs2FRcyo0T1BrSXPgHW57/b53+J2MnpIf66TdCA4afvvtmQR4BNkSQD+zF5inoe3Tvv/TcC72mzo+cfp/Ef4BVCd7Py3T9CFMDOntMW1QPMH8D9sxRgcB+ANV1ISUc\J��    H � H                                                            �+J 	%�showdoc项目信息eNpFkL1Og1AAhff7FIx2gfsDtxcnTbp09gHMFS4WRaGFBNcm2qgNqfFn0JpUYkw6QbfGxtSX8UKZfAUhJrqc4ZzvnOHI2UzeJN8fT6AXRUG4rWm90MPqkct9m/sDcapa/gkAxXMir1P5OG9IN6iVmCqCVMVIV7GOQZW+l9Nss8zl+rxONe65No+4Fsdxs6h5xzwE4NCN5OWouM9r5NcpHhZFksnV3ddnWgwbHzTBftjzAwB2g6Db2ZKLSTkfy9Wk22kp8RmxKTQgtk2BBRJt3lB7whqI6J+U+ai6fWspTCcWtJkg1LFsixmUQs4cxh1EICEHJgDVdCkvxpurdfGa/dURZdSgEDFjp99vHlAUpZ4sX4YcEdY2GDLrOvgBnJONNQ==c\8Z}�I 	%�Mshowdoc项目信息eNpVjk1LAkEYx8/Np+iol92Z2Zltt5OWREJklIeuk7vpmrm+rOhVCJFCjEzoRTAPlSf1EEhS9mWcVU99hWYTRC/PA8//x//58Xab39Z+v55AwnEy+W1ZTuRTipS0mG0wO2empZh9CYDbqvHrDn/seqSVEVPRJQRVCSMiYYLBvPM5fe7Nhn0+vhKpzFKWwRwmF4tFr1G+KKQTdjpeKrA0AHHL4dWKe98X5FrgNgdurcdHjclPxy17MVjL+aA+7d7wUX328cbrQ0+DQIUgHSkkkM3+uy4Z3q9MX8rei0QJYYVQdUsDIJjJhEO+JRQO+TeKJYKggnWIdcOgRCNbHnVixnKm41utm9+9+jehQKHBVJNoSFUVxCg2CKSmoZ+da1iLCctxT/jzZsWtDsFiLWQRxUIEQoKA26hNvlurigEMkQ6CR+Hp+4N4JI4wiZh9HNmnBzRL0V7UTkVzIUoObbKzGz+1In8ALMtpc\=;�    k ��� k                                                                                         �O< 	%�]showdoc
项目信息eNp7snvy012Tn83pfdq18OnMFU/2L3zWuP79nllcxpZ6hgZmekaGJnpGJkZcz6eseNaxHShRlJ9fwvV0fdvzBY1AnkdapbmxoYWpoQEXV3pmydM5G57ObQCKA9kKyTn5eakKQJYDqllW+gVF+VmpySX6JUWVmXmpxRn5BXpAZVxPdi8Gmvq0o+3ZFJATcsqKM1Lz0vPy89IrU6GSL7avf7qvBSipn5iTmZJYkqhfXl6un1Gco4+qmuvZ1A3PetcBvWaF5hMFkAcULE0tjUxMuYDyTyf0otsFACliflE=c\%�QR; 	%eshowdoc	项目信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\%�� : 	%�=showdoc
仓库信息eNpLzyxRSM7Jz0tVSM8scTC21DM0MNMzMjTRMzIxstIvKMrPSk0u0S/MTMxLKU3M0y/OyEzPz0vXAyoGABwQE0Y=c\�1S9 	%eshowdoc
仓库信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\��8 	%�e	showdoc文档信息eNoNyTsKwkAQgOF+DhN2dnazs1Z6lLwUiyQQI0o6BW0U0ltZiYX4QEERr7NGK69gqh++XyJ6qKwnyXiIHSK2AnpxOsyGo7IIyryAcZrJsBooALc4uPrhznWzX7ln/bntXH3/vTYA7+veLdff+bE5XlpArVmw8JXkLvrkRXkK7rRstrN2TiombbSGyZSRQvaVwSgmw3ECbSVqlVgjYhFqG1lKkj4LsgGaQEv4A8OYQ9E=c\�}    � c �                                                                                                                                                                                                                                         l7 	%�	showdoc文档信息eNozMjTUMzSx1DMyNtczNLQyNrawNOByTMnNzMssLilKLMkv4irNzTNKqko3AQDo9Qxqc[�;܅6 		+�mshowdoc服务器信息eNp1UU1v00AQve+v2Kr3jXf9tfYpcAAJITjAAY6uvXEdOf5IjZJy66EBVEIooWqLqhYORUighgNSpbRp/ozXTk78BSYiMkSClVbamXkz772dMOgGTuQnIvK5gTGSo175cefn9YeO13reDLsJZFF5fCUnB1Xp/t89aDY9Kb/szaanxZvzCoItQ2EmQ3L3WznZDxKbUoswlWg6oZQj2dtdpk1GKCcGI7qGWttbafh7hI1XSNaQPDuTb/t2p9MhqQ9An7hxC8GR3wdAL8eD2Y/PcnAJ3JQbpqJojDGrTg11AcS4UuZu+43F5RzcOkkSeAuzXcYUqnLhmYIagmsOvpUkj4TbFhmUPcY2aMNSLOF5pudQizd0wAuhKxsQqwsZB73i5eVSgE5VxjVA4GLYzycnQD5/d27/oV7DGBfvR/nV0bLUvP30CUvbyYPHxh0Ri3uRyR5mjaxl3RWq2GSNBcPNRT79BB+aXx9WXpnOOdAZej1N/2sUmudH0/mL1/l4v+oMVxf/j70jeXGa3+xBrh3HGV7dCMxcX5ev+uVXcDGU4yFoK3ZGyA8y7IZxJDC86qpFqGIQRjXCNGbXknbcFG5WS2GQ98yJalubgR9HPgEw+gX65R+Ic\�   � �                                                                                                                                                                                                                                                                                                                                                                                             �v5 		+�%showdoc服务器信息eNp1UU1v00AQve+v2Kp31zv+WudUOLQSQnCAAxzdeG0SJfE6GCXl1kMDqIRQQkVBVQuHIiRQ00OlSmnT/BmvnZz4C4xFZIgEK+1h37yZ995Oo9atea1QilbIbUqJGvXyzzs/rz91/ObzeqMrESX5xys1OShLd//uIbPpUf5tbzY9zt6clhTq2jo4QNTuj3yyX5MVxlwNDM20NMY4Ub3dBeyAxrhmg2aZpLn9NG78HlGhSyIrRJ2cqLf9SqfT0eIQiaFWjZoEjzofoLwaD2YXX9XgErUZtx1dNwHAXWe2URApLZ1Vt8OguJxjWk/Kml+E7QLozODCdwSzBTc9ekvKB6LaFgmWfYAtFri6K3zf8T3m8sBCvhCWvoVvo7Bx0MteXi4MWMwAbiKDZsN+OjlC8fm708of6RVKafZ+lF4dLkr1248fQdyW9x7aGyISd1oO3E+CpOluCkM8gaBQuDlLp1/wQ9PrD2VWsDhHOdtaj+P/BsXm+eF0/uJ1Ot4vOxvLi//H3ok6O05v9hBrR1FClzeCM1dX1at+/h1TDNV4iN6ynRFZk+2oLqrJWoxc/5nXIr8AF58S6Q==c\k   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                 �B4 		+�=showdoc服务器信息eNp1kbtKA0EUhvt5ivEFlp2zt9lU0UJBRAsttIzZ2TWSy24MJNpZGIUY4y0YJUQtFAsxFkIg15fZyaXyFZzFsBrQgSnmnP+c7/xzkolCIpZ2XJZ2qI4x4s3i6OHws3uXt1IHu8mCK6JodNvhvWqYWvldg8aD+uilNB40hmdPoQSbugwGIH70OupdJNwIIaYEiqRqEiEU8eLRNGyARKikg6SpKLW/5yW/W0TwDGQO8ft7fl6O5PN5yXOE0JHimRQSh79XBJ63K+OPZ15pCTahuiHLKgCYUaIrgRDjcLL4vmMHl1LhNua6CSswWwCQiUKZZTCiM6rG8LzrrrN4luVE2gLYJrYpm8yyDCtGTGprQs+YJm+LtxKMUS0OT1rTATSiAFWFAg+vyn6vLuCTy6fID3oOYzy8bvqd2jS1u7C1CV7WXd3QF1mGLacNWMvZuZS5xBS2A3ZA6L/5g0fxoX73JvQKGqUCp2tRz/vXqCie1AaT41O/fRFWJmcX/8feEX9r+P2SiGUzmRye3Qj6AoRG/sw=c[�P�    �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               �d3 	%�showdoc	项目资料eNp7OWP/y/aeJ7smPt0x4Wn/9vd7Zj2btuFl09anffufTm172rXw6cYGrqfr254vaATKVRRXpFQVlxtaGFpwPZ0//+mEXqBgeXm5XkVxSrFeen6ZXnIeFxfEhGdTNzzrXfd012QFhcwCoDIFY0s9QwMzPSNDEz0jEyMFBaAUxICK4vjk4oz8AgD34kuVc\O��$2 	%�showdoc	项目资料eNoBUgCt/+mYv+mHjOS6keW4kOWPt++8muaWsOmCteWOv+WVhuWKoeWxgArlr4bnoIHvvJp4c3hkenN3MTgxOArln5/lkI3vvJp3d3cueHNkcy5nb3YuY265VDBdc\N�S1 	%eshowdoc	项目资料eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\Ns    E �� E                                                       �V0 	1�]showdoc项目账号信息eNp7snvy012Tn83pfdq18OnMFU/2L3zWuP79nllcxpZ6hgZmekaGJnpGJkZcz6eseNaxHShRlJ9fwvV0fdvzBY1AnkdapbmxoYWpoQEX15Pdi4GCL7avf7qvBSiVnlmikJyTn5eqAGQ5oBpnpV9QlJ+VmlyiX1JUmZmXWpyRX6AHVMb1bGv3i/VT4c4BOSSzAEgaGhnqGVqaAbGRnqGhiQJXaXFqkRXYLQWJxcXl+UUpVooOyhlw5wA5XFzPpm541rsO6D8rLnQDFBRAmhUg1hsaGZuYmnFxAQAx6G/wc[��0C/ 	%E
showdoc接口信息eNozfL9n1rPNK5629QAAJDsGrw==c[��~�. 	�}showdoc文档eNqNT71OwlAU3u9TdOnaUgoEnCgKCdGQKCQqG7nc0NZLi22BwISDGo0GSByMC7joBBg1MQJC4qvApWXyFbzFBDQ6eKZzzne+nyNbVmGN5y2jIgicqmT0bEY3kMZBPc9jOmJFy2GFxyUTVeUiPdD4DBv1s5EYK0XYaIgNethQzN0E/azkXzQUEjnZymMAcorFQKxriKFdWAxxgifAeQUf5/V51/iCoasIWjzUNcvQMUbGwsh1oWYcpfxfwUC/uYC0WqRx+TG8KZfLHDar6oHqfgac45HT7U37TeZrGRYCogswpHdit48oYQEEaQG71ZmOb+kKSBAi09xElXiWjlspKe4L+aP7aRPuJQLFFZxE0EAWPSkVxZycNiVP9TCRlkS4bioq3M1tBJPbhdQOsDsjmm5Sa9iDsXP2OH2rk0Hfvm/OzmuTWhPMr8fz0wsa0nm+I/UXqvf9jlllXUYFZNSlWcmwNrsakdcnUn+g8JL+89f39l8Sn6Z35zA=c[�&l   � ��                                                                                                                                                                                                                                                                                                                                                                                                                YS 	1eshowdoc
资料完善接口eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\Jk��R 	I�%showdoc
用户资料是否完善接口eNp1Tz1PwkAY3u9XnB06NNJaEtGQNCY4SYLGQePW1vYsDdA27RWN1gXZVHBQ4lf4ASSKGA0IJPwZrnbzL3ilhMTBd7nn497nnou6/bBX893yz/gRFDF2soJQrnpFZBm8ZleEY3QomJaOTnin6Gx42HaRbOpSmnUl1TEF30OuoPq6iVlV05DnydguIUsybDWzpe+c5g/ym1jMrB7l8XZut7S+V9jX3HIhx8q+ZaoaTUqJrLwAVeR6pm1JaT7DrwHAcdGsXtj6IuMmbchxIAUNhOHMm9ySpzZp1sK7t8QDUFEUCOAZgJDRbB0xWSgux6TiGRQzNI40RtNBZzocTgcvZHJBXq9Iqx591sPWwxIDzmESAujx94Wo+xHeNziOXggShdxcB9+9EWlfBokZgCCbigfCOQjm9N+hK3FPGJgWjukK/UhShvTfk25QXGjhc2eu0UUAfgEhc7lJc\Jkc   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 �U 	1�5showdoc
资料完善接口eNp1Tz1PwkAY3u9XnB06NNJaEtGQNCY4SYLGQeNWantCBdqmd1WjdUE2FRyU+BV+AIkiRgMCCX+Gq938C14pIXHwXe75uPe558JOL+hWPbf8M3oERUIcnJakIi6Lh6ZmG5rtIkvU7Yp0jPYl0zLQiegUnTVMmKGahpLkXUVzTMnDyJU0zzAJr+k6wlgldglZSsHWUhvG1ml2L7tO5NTyQZZsZrZLqzu5Xd0t5zK86lmmprOkhMyrc3CEXGzalpIUU+IKAIIQTmsGzS86arCmggASsIAInHrjW/rUoo1qcPcWewDm83kI4BmAkNNtA3FpKC9GpIILDHMsjtaHk357MhhM+i90fEFfr2izFn7WgubDAgfOYRwC2PH3hbDzEdzXBYFd8GOF3lz7390hbV36sekDP52IBsIZ8Gf032ErUU/omxaJ6BL7SFyG9t7jblCea8Fze6axRQB+AZFuvFY=c\Jk�    e � e                                                                                         �@ 	�showdoc文档eNqNT71OwlAU3u9TdOnaUgoEmCgKCdGQKCQqG7nc0NZLi22BwISDGo0GSByMC7joBBg1MQKWxFeBS2HyFbxAAhodPNM5388535EtKx/kecsoCwKnKmk9k9YNpHFQz/GYjljRsljhcdFEFblABRqfZiNeNhxlpTAbCbB+FxuIzhG/l5W8i4ZSIidbOQxAVrEYiHUNMbQLiQFOcPk4t+Dh3B53kM8buoqgxUNdswwdY2QsDs2v0GMctfx/g4F+ewFpNkn96nNwWyqVOGxW1EN1/hmYntjTTnfcazBLMCT4xDnBkO6p0zqmhgXhpwWcZns8vKMQkCBEprmFyrEMHbeTUswT8EYOUibcj/sKazqBoIEsKikWxKycMiVX5SiekkS4YSoq3Mtu+hM7+eQucNo2TTeq1p3+cHr+NH6vkX7PeWhMLqqjagPMboazs0sacvpyT2qvdN93HbPOuooKiN2hWcmgOrm2ydszqT1SemX/+etH688Vy/oC+jnndg==c[�QJ�w? 	%�-showdoc
项目信息eNplT8FKw0AUvO9X5At2mzRRk5PH/saSrklK3A3JYsjNgpQiBITWg1KpxUtPpreCFf2ZvK23/oIv6KV6mzczzLxpdzN4m5lFDbcreFi3nyszbg7vj6TvU7t3Qh3bpY7rkP18baZbFHKlNIFmsn8e4zW4qE779pln9wiJEg2LDTxdI4/YClMlhYXo/DgrYFmuRiLUTOdVIkURq4yijbS7F0yF6cTMuxfSqyIWMpJKRpX4Fb+2DXzcoMh4mgy55qwsSxYXKTt2E3O/MfUrTgv+LLG6AZbv+Y7rEdThrv7XRWC5/OFjrbMiYF0DHSVcDbnKhaShuvwGuYCOmA==c\%��   y    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    � � �                                                                                                                                                        �sE 	%�%showdoc项目信息eNp7On/+0wm97/fM4sooKSkottLXzyjOMdLLykzMT0nML0rN00vOz+Xiejan92nXwqczV4BUZhYASWNLPUMDMz0jQxM9IxMjrpcLdz6fve7F9vVP97UAZfUTczJTEksS9cvLy0Em6udkJxZzcaVnljztaHs2ZT1QCUTk2dQNz3rXPd01+cn+hc8aQeJcIIn44oz8AgC3PExvc\3C�cD 	%�showdoc	项目信息eNpdUMtO20AU3c9XzBfYnsHjR1ZB6qLskPgCP8axkesxtkPIDqQqQq3SRA0sWgVBhFplRbKohAR9/EzGhhW/wB0FqqazOnPuueeee1f3E3k3qadD+WEmv8xXf2b1yeLp51e05WrEsDRKTI2aFDVn8/r0FgqFEBWSi0FzdQK/t1Hf3iIOIwZCnaSS06W8OAYeMA5SkXEMqL3p1dLzQuzzoNKrop9kvIxFroEMre6vwVWeDuozFSEtO/0X7uF2IX+/B0730iT0Kk/v9Xp6XKZ6eljG3U5X9LtehlB9vqyHN7BQ67/8GGMVHLvMpSZDoJDjoZqx0Y7k5eWaj6sqL1u6GkGItp94IvREwTMtEO+QHH+So2VzM2vGg4cf39d3We9CDepg/IqJozzPB6CQIyUijBrMcixCMKonw9Wv6d9Lrnva0GRjdd/Hz9+ADZOsE3c9SKjcCCXGJqP8l6Nm/lHejUBuO6YNG1tu++BARf0nCrhu7+7uvAFV74gFlh9FIWeG75mO5SK8ned7PCh4BXWsnuPT0GcsMI2QR5bLGAEYhEYU+Hbo8wihZ2Wy9lU=c\4�   v    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   x://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     YYBHodY6UfpxgBtANDDirfdThgbGVgCuYMRmZzB0hkyUy7sk10mnfHp+UUnV/lChD4N8jVpAhSEGCRQTc0Rc+UIz6dx+gGeGK/INvsRZB8AqRV4Io2HVyuwsCPhBZh89+1pYcXcSVMz9MJEY+svgvUwwdzRuFt8b1iVNc4Px6MIgv4G881nBVjjRBTg57eNtR/x3kO8tosiqImPNaHL7aipBkCSgXn85GakseJLoJgb5BVVeTvFZDeqU1wD8FaK33F5DC3s7Rw0MT2Il1bG8P0NYz0DGx3C2yMeXovhsl4/7GSqplxu+RvQKadysVuselnUBOFUg/7uikSNQSdOv41BFZD/06B3wSABoMJk+4JtrCZINhFFWvyt/gv+tgiMkvrhIe0yP8Kv9ykXdjn3uwkFAu0kD6EqCSjQ3Sl0cB5UE/sgpbAFHC1QZdRbmH2B/oy9Tby3bGR/hQ7SDzegUE6BI/QicGKf2g8+PDjGhW16208iR2+EL1mZXXOzQBpyLQkNecnV7R92XPt3mPxjAAMw849/knfig++szTh+dBaGBvKhxJVbKh+9zanN6DK66ZzjblZIOByOs7c531k4qimBdpmDulHUQDvMZ6oPmrrL1tdkg9JUkiW8zMW+rdBbk58uIhpr1lDiCreVl7BxCc4SNYtELc7JfPRbN9eFz/tbm/woFEIVnqNby/l7reUoNJ34Vo1Y1qYOJRyD3DVTvmsns+KWk9owkSGqXWvirDjktYgUkf+i/1IT0938nv3nDeTFnmZgXqdPIe2rmsIhslmXY39D4zTuPYaxP8PhPk69KpJBM8r5mgPtbCzWQc6MvrPcZzBs+xEry+wQOst9IMWG4H5CU/p9Z++Qe47WALpDkFBM5gfIuQV60v7ziR79gJRufNnxZcetDzuvftXRCT9LxYdWdtNYzBkzw/DT/h/Fj8p/iPiRMiRGfXge6nnLmNoh5A4taftFp8yKUzBggBvwHobY9kq+rqbBpsvtLYQtISJ/AliYXlg=c[��   ~Hj/w2sdwXisevOyr6KqlZALXmHFhmO/OyfkvEdOiXBWNg+X4PBq7YxZM6MMjKP0m/EwB/f0wvd0ezSSO05moVQhGS/mzOIYhKMLFgU+uvoxPV0rcLyG03u/1hOECISu8998w37KayFnUTMKwzf0kczGubuSfBtdFYHbJKhStocXeHUIfQx0l4DgUi1QFjX22Ro/7+zu6g5fB0FJ4YGCWPS5ChsEK8cUOLeR3Quqwz6WApKe37Ny35lTqT+SIwxDSmIqjbMPoUjwwc8VNRQd6MSYfq4Xt+BUfFEvHpWTvsogBqEAaW2IDz3sUwliTKCl2xeKSVEllFDkkH0hALzARwNRKQb2BRTHukBUhDQ221AUpPR01tg4dEG11kK1noAMCVygT+NjnBvHysAIMk4fglAEeuWtcOKcyrrBjOUtfLxMx0qXURdqwS4EBKmvj5MDPMlfLxutMul9TZUEiY1xsi3dVivdFmArK6q0b0ziyQlqPpX0dqVKnrhgI9iPPArbxvoThiFGXL/6R3L4U6mPj8LnNTKK4YU0sA15fDS9Rfr6/hP84iW9SH9WnqpAqcAavPnSerUFa9R+WboLcno+jceHrWzeOl7Ejx4jmVM1WUS9rKBwpLrsdgugyE02kbhZmS9udnJKAlif7RG4ypEjgoDUzEevINYUzCyu4OwPMBaZP5FnQnQAaYT4foJ3IcEIAN46MKtjxEoX9l8CtuNVDW1f+mvgJP5XKgcQaEDSYLkD4+UIkCdEuPTjjJUbhoCWVjZL64+N5Q3jlwdGMWPt/+KOMpA/3+trxqlNY2kP4ovw8XgpU6TPBb9iBR56XJKN9S2Kh7+HjWIJTxaoElT2seoBYfkZYCwosDI7wAmBKEwTbFCS+2iRXQy2hQYoNkTgDDvA8gLJXODkYkDWBE5p7qLA3a7Ml35Yh7mPmgP9g1MrLWEU4WNRaP6IM4I5dws/Ab8Qq+cOGku3gnSUE4REvyRy1QCwjRtr4OoB8Ac+nGuMcQEweqFZ1FsxHqhZq   E3f1cjXlLkikSb27I3sqrG8b42tGmvPPYu0CokVBNTo9QlkW+BkvTANIHhzzJyfsF6M4sI2Ht/Cc089AaG2E6wa7ffuwIdPcGrZ2E9Zr17jfL70rGgdPzJ3pz26aJG6qcqSACa4bqGypisQBC1eF0eoP/1oQc+v4vsZajnVRzXVJcUFJ8uwU9TCGclildWpCaD9/4bVMRjlEoS8aATLmPhwhHjthqNBPQWOxKHzg2s3rtQ3n1sM8gJF2HntBmVjPLPUoHwIHi/GuMEGOcc5MGrJmCUJdqcFuWrPSUotsczu4NQ+Xtn1FBvgubueCq2dCfzot/pCRQy1muqUOXTKizY/bT5jI4+PR82XRWikUwpf4HtkVh5qgJfPQzQpmQGSR3kSiM4GFH1C0sZCWj9aA4S60m7EzmV+ruj2ND4uxbjGbWvsZvDj6QZGa0pd4pwXGYlSB5SEKMRfttpTmKkj/1OzSDuXYKwv/68+eAt7WtRPOc4bzs18p1JpVXtx5e73dNLmAGemqoA5dZ7QemDsqRWBuakyMdH2tLLHpeWse2iq+GP3dnVFUrau5oPKfihXra2MBXRHrJYhvgX7VTYa5RSlKuZ6YZZNsNF+DqbA0mQaT6y4nCpPvzUFY0/f5i9Fs/ikfo4TWLF2irNye9Zu0isLDdrZ0eBFBJVNnZjmErFnfCqBZ8Yb7EowHfKq23/bhy/I1VP4Rk3UNSwVhGI11o/rPfKYEfCTgplJek0XrqHALeNQ8tyLRiUAMgOcSGq1IkbDZozm9N+mvQYRu2k4IVFTOfj+M3IY8hje7MLuT2girwYH45UoOJe8VJAoKyor12zG1LIaV+xC1sCFOOd9Rlgds47nYTqDmeiki+ZyUKNw3CNfsqsQo5OjB8QjJtXxgfn8uZ6HoL921xMgwbackICO9N/WrV+X4M4JUI/GC/XDMumw+7vm4hMjNe/OpG0VOWmeAEQd7ODXiotLyldRTR0QiU+vXun47POOoDqoVm3MKWN91Mq9Mh7OVi3v7   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��{    �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<�cW<                                                 9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<u��用户  |

 **备注** 

- 更多返回错误代    k                                                                                                                                                                                                                                                                           RB 	%eshowdoc项目信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\3΅A 	�mshowdoc文档eNqdUs1u00AQvu9TuAdf139xGucUt6RSBaoEqQTkFm1Xic3GTr1Oo+QUDlBAQBqpSNBDUw5AL20RIFU0bSLxKs3G7olXYJyipBSQEHuame9nvpFdCcNaVlHCoKlp2HVK/lrJD6iHiV9VGLTM8crMUdgGp61KHQieUpLzprywJNsLct6SM6psLSWTjCnb5qQAyMCVsMoQKjuhRJjvUQmqnGFhTU1jXUthPaVnlVrgu5SECvG9MPAZo8FkUbIFlmGQ/LtDQH/XItHria0X3093Go0GZrzlPnCTy1D8aBAfHo1OutLlMKeljQSQxNHjaO8hCCZABh6Kegej4VsYIZsQyvlN2lxeg/bWqr2cssz8/SIn91bS9RlcoCSgIVA26ka5UuS22lpfKdoGWeSOS+6Wb2QKt2urd1B0MIB05+2tqD+Mn34anXVE/yT60B0/a5+3u+ji9fBi8zmEjL+8F51j8LvKk2ZZp1HF4BCiitP2eHsgvn4WnY+ATtW/nvpt708O6D+2IqcGraareN7C5jzW0jpC8XB3/PLdlGyoum6YKHrTF2evEs/t/fGTY7g+G/h+eM01d8nmcwhVm3ydXeVDfV0x+zV/Cgtzf//yyfsB8xBaZw==c\/,   �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     �  � � F                                                        e 	1showdoc项目账号信息代码路径：git@39.106.214.242:\project\tryineshop.gitc[��o6 	9showdoc登录欢迎使用ShowDoc！c[�A� 			�showdoc注册
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    "error_code": 0,
    "data": {
      "uid": "1",
      "username": "12154545",
      "name": "吴系挂",
      "groupid": 2 ,
      "reg_time": "1436864169",
      "last_login_time": "0",
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 



c[���    w^ �                                                                                                                                                                      Y 	1eshowdoc项目创库信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��ƂJ
 	1�Eshowdoc项目账号信息eNp7snvy012Tn83pfdq18OnMFU/2L3zWuP79nllcxpZ6hgZmekaGJnpGJkZcz6eseNaxHShRlJ9fwvV0fdvzBY1AnkdapbmxoYWpoQEX15Pdi4GCL7avf7qvBSiVnlnigGqIVUxBUX5WanJJTElRZWZeanFGfoEeUBnXs63dL9ZPhTsCZH1mAZA0NDLUM7Q0A2IjPUNDEwWu0uLUIiuwCwoSi4vL84tSrBQdlDPgjgByuLieTd3wrHcd0FdWXOgGKCiANCtArDc0MjYxNePiAgAN8Gy1c[���	 	1�]showdoc项目账号信息eNrjKsrPL1EoKarMzEs1NDI2MTXjerJ78fMFjS+2r3+6r+X9nlnpmSUOxpZ6hgZmekaGJnpGJkZWMQVF+VmpySUxEH3FGfkFekBlXM+2dr9YP/XZnN6nXQufzlwB1MyVWQAkDY0M9QwtzYDYSM/Q0ESBq7Q4tcgKZDNXQWJxcXl+UYqVooNyRlqlubGhhamhAZDDxfVs6oZnveue7ppsxYVugIICprO5AEKXTP8=c[��߁ 	1�=showdoc项目账号信息eNp7snvx8wWNL7avf7qv5f2eWemZJQ7GlnqGBmZ6RoYmekYmRlYxBUX5WanJJTElRZWZeanFGfkFekBlADREGPU=c[��o    � r �                                                                                                                                � 	1�=showdoc项目账号信息eNp7snvx8wWNL7avf7qv5f2eWemZJQ7GlnqGBmZ6RoYmekYmRlYxBUX5WanJJTElRZWZeanFGfkFekBlADREGPU=c[��oY 	1eshowdoc项目账号信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��9� 				�eshowdoc登录eNp1Ul1LG0EUfZ9fccnj4nZNmgab31Bo6cdzdnGXuKDZMLuhglOIoUaLqRtBJVWQllr1KVG0lZpg/kxnZn3KX+jdnc1GpL3DwNxzz70zhzNE02S/GZ2uizCMxheT0aGmASE6yL1zsXUjrs55uyN2fvDwOyGaFg1uxGXr3esXKVEHE5aCoF42jNXVJ4veimHVXaPhO9SgTtX1A4eCSQCyVnHwm4/CpBubX7188xbiuTxsif3sdqZS3v3M+HjjvvmJycshP95m0eBa9HYYYWUdAzCSk0p1YHoKIyN+Q81acYCJ3gARP6BurQpM6cLRila3fP+9R+3HNOCDtvy6DoqVDErOvHv6kCV6P+XZhWIRQJHjPX50LE9u/9xto0Jimiag/DUSU3IOpR6tLHq2kyvD/JwCbSuwMFUUzBuujWkun5vLkFRKAhfyz4q4ZtVphXev5dVQdFqzUpV6jXoyrgAZiL5UAjedVnxaWigV86Xns6Zlyw8qy17VrWW0+bT6gcQbNT3QqqxSxjw275+u6alpaNvUrv8FtqQSgLm1IEaUfXL40bUno04ef0z0a0Pensn+N9lt893eZHRUQFR86d83DxV7ag4/2cT/nDySkL8qnyfvc[��0   � �                  �n 	1�showdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlGli8HYu1HW7DoOSVxlZ21y2QdMWYPUoAmjGWVmhCGVcom7MMjggMFgsFHMzY6R7MQBWYLwX5LpmdGT/8KenpbESBopTq0eQPT0+c7969NDJxrgVbL+imwkAvTrv89/4Gs7d9HX3tbha+9oD/hjsvQNDql+VR7hReyDLa5OpB2fGEt7enpKf3Lw7mjtywgvDt747MaFd0dzZnbHKEyRowSZf6AvT+vpZ2R+zEyMo57KLpKZI5N7pS0zs2RqrtcdUdVYwO+/c+eOb5ATQ4IUD/tCoj/KiXFO8KtUNBaJXWh1uc6cQcbjDDl+aBQW9ScTLhdJbpDdWWNtwr5Mdsa03CzY5nLdvXvXBbgI/bfro+L4nnH8M9v47iipJ5fNxCTZXyivzLh+X1r/fSnBxWICH+JUXhKR04fklyAATApExhBiciFJ7OcHkPOnOJkyjjMQFK1wUC1a+sEw8LAqcw7i5vQLklnT3s68J46Mw7zig6jV4HTTdTuGszTX18er12/WAnSX1psCLAEA8vl8TlHQH78hW2uOzlTjVP3FghuFegg7uEQeHGuFLTM9Rw63yeRhQ8wyiiQ6gCAy+ZJMvibTx/rDVw2FaX4bCzfVLEY 	1eshowdoc项目创库信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��Ɓ^ 	1�mshowdoc项目创库信息eNp7tmDH0/3NT3bMetq18OXCnc9nr3u2sO3ZvG0KCumZJQrJOfl5qSCWg7GlnqGBmZ6RoYmekYmRlX5BUX5WanKJfklRZWZeqh5QCdez6duebl8KNaRv+dOObU9nriDWnOT8vJKi/Jyc1CL94ozM9Py8dAwzIY4k3sCiVGSjAMNuY/g=c[��G   �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   �数据库。如果想使用Mysql数据库，则需要安装环境并参考下文的数据库配置说明做相应配置。


##安装和配置

	
### 1、全新安装

- 克隆或者下载代码：
[https://github.com/star7th/showdoc](https://github.com/star7th/showdoc)

- 文件夹权限
	请确保/Application/Runtime 、 /Public/Uploads 、 /Sqlite 有可写权限

### 2、升级安装

- 下载新代码后，覆盖原来的代码。请注意保留/Public/Uploads里的文件。此目录保存着你上传的图片文件。如果你没有上传过图片，则可忽略之。
- 先备份数据库。然后在浏览器访问http://xxxx.com/index.php?s=/home/update/db ，以升级数据库结构


### 数据库

###1、Sqlite数据库 or Mysql数据库？

 ShowDoc默认使用Sqlite数据库，并且自动集成到/Sqlite目录下。用户下载代码后即可使用，无需再安装其他数据库环境（PHP环境便可支持Sqlite数据库）。
使用Sqlite数据库是为了方便，尤其对非web开发�   ��库。如果想使用Mysql数据库，则需要安装环境并参考下文的数据库配置说明做相应配置。


###安装和配置

	
#### 1、全新安装

- 克隆或者下载代码：
[https://github.com/star7th/showdoc](https://github.com/star7th/showdoc)

- 文件夹权限
	请确保/Application/Runtime 、 /Public/Uploads 、 /Sqlite 有可写权限

#### 2、升级安装

- 下载新代码后，覆盖原来的代码。请注意保留/Public/Uploads里的文件。此目录保存着你上传的图片文件。如果你没有上传过图片，则可忽略之。
- 先备份数据库。然后在浏览器访问http://xxxx.com/index.php?s=/home/update/db ，以升级数据库结构


### 数据库

####1、Sqlite数据库 or Mysql数据库？

 ShowDoc默认使用Sqlite数据库，并且自动集成到/Sqlite目录下。用户下载代码后即可使用，无需再安装其他数据库环境（PHP环境便可支持Sqlite数据库）。
使用Sqlite数据库是为了方便，尤其对非web开发人   q q                                                                                                                                                                                                                                                                                                                                                                       � 			�eshowdoc注册eNp1Ul1LG0EUfZ9fccnj4nZNmgab31Bo6cdzdnGXuKDZMLuhglOIoUaLqRtBJVWQllr1KVG0lZpg/kxnZn3KX+jdnc1GpL3DwNxzz70zhzNE02S/GZ2uizCMxheT0aGmASE6yL1zsXUjrs55uyN2fvDwOyGaFg1uxGXr3esXKVEHE5aCoF42jNXVJ4veimHVXaPhO9SgTtX1A4eCSQCyVnHwm4/CpBubX7188xbiuTxsif3sdqZS3v3M+HjjvvmJycshP95m0eBa9HYYYWUdAzCSk0p1YHoKIyN+Q81acYCJ3gARP6BurQpM6cLRila3fP+9R+3HNOCDtvy6DoqVDErOvHv6kCV6P+XZhWIRQJHjPX50LE9u/9xto0Jimiag/DUSU3IOpR6tLHq2kyvD/JwCbSuwMFUUzBuujWkun5vLkFRKAhfyz4q4ZtVphXev5dVQdFqzUpV6jXoyrgAZiL5UAjedVnxaWigV86Xns6Zlyw8qy17VrWW0+bT6gcQbNT3QqqxSxjw275+u6alpaNvUrv8FtqQSgLm1IEaUfXL40bUno04ef0z0a0Pensn+N9lt893eZHRUQFR86d83DxV7ag4/2cT/nDySkL8qnyfvc[���    M1KNQzwOMRKP0o1BmgDgB5OvO10wthIwxLIHYzI9AyWStOZcmGf7jKptFfPLZZylcuH2dMgb5MmQEGIAQrV1Bw2V47IfIqkHpCJ8Ypssw9B9gGQWUEmUmR4tQILOxJZgMl3354WVsydFDNDz080tv4iWA8TzB0N3+J7Q6qsYR8cj8II+hvMN5/lYU0pogA/v22s/Uj2HpK1XRRGTXy0CV1uR001AJIMzOOjN8ONFV8CxXiQV1Tl7RTT3ahOcQ3AWyl+x+ExtLC7c9DE7CBeXBkj9zeM9TRsdIhsj7h4LYbKen2wk6macrnlb0CnWMXRW5x6WdQE4VSD/u6IRI1BJ06/jUEVkP/ToHfBIAGgQnT7gm2sJkg2EYVbfK2+C762MIyS+uEh6zIfIq/3GRd2le53UwoE2kkcQlVSUKC7U+jgPKim9kFKYQs4WmDKmLcw+wL9GXubZG/ZyPwKHaQfbkChnAJH6UXAYp/aDz48OCb5bXbbRyPHboQuWeldczNPG3ItAQ15ydHtH3Zc+3eIvjKAAdjzj3/Sv9QH71mbcXzoLAwN9J8SU26pfOQ2VpvRZXSzdI67WSHhUCjG3cbes3BUU/ztMoa6UVR/O8xnqheausvW12SDslTSJbyMo99W6K3JxxZRjTVrGHGF2spLuJgEZ4maRaIWwzIf+dbJdaHzvtYmHwoGUYXn2NZy/l5rOQpNJ75VI5a1qUPxkkHOminftZNZcauU2hCVoaoda2KcOOS2iBaR76LvUpOnu/k9++0N5MWeZmBeZ08h7auaghHdrMuxv6FhDb/n8dj/Q6E+rF4V6aAZwd5mfzsXjXbQM6P3LP4Mhm0f4mSZG0Jn8QdSdAjuxzWl33v2Dr1X0upHdygSisr8AD23QE/S90ml9zFASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gm/R/Gh8gsRH1KGxIiXzEM9bxlTO5TcUenFFJsyK07BgAFuwN8QxLZX8nY1DTZdbm+hbAkR+ROtSCx+c[��,   �tnx/ofXOgKxaPXmZV9FVSshF7zCiQ3HfmdO6HmPnhLhfGseLsGB09oZs2ZGPTCOsm/Gwyzc0/Pfs+3RSOyUMgulCsl4MWcWxiAcXbDI/9HVj9mJWIEjMZy4+7WeAEQgeJ3/5hvuU14LlhY1oxB8Qx/JXAzfleTb6KoI3CZBlXI9vMCrQ+hjoLs4BJdpgbKosc/W+Hlnd1d36DoISgoPFMShz1XYIDg5qsC5je5eUB32sRSQ9Nyelf3OnEr+kRjxeGhJTKVI5iEUCTn4uaKGoQOdGNPP9cIWnIov6oWjctJXPciDkJ+2NsSHHdCZBDXG39LtDUaliBKMK3LQvuAHXuAj/ogUBfv8Ssk6f0SENDbbUAyk+HTW2Dh0QLXWQrWegAwJ2N+n8VHsxLHSMIKMswcXDIFdeSucGFY5J5ixvEWOl9lY6TDqQi3YBb8g9fVh2c/T/PVykSqT3tdUSZC4KJZt6bZa6TY/V1lRpX1jkkxOMPOZpLsrVfLUBRvBfuSR3zbWn3g81IjrV/9IDH8q9fER+H+NjmJkIQVsQx/5TG/Rvr7/hLx4yS6yn1AHbDaCUoE1ZPOl9WoL1qj9snQX5PRciowPW5mcdbxIHj1GMlY1WUS9nKBgWl12u/lR+CYXj9+szBc3O7ESB9bnegRcOXKEEZCa+egVxJqBmYUVkvkBxiLzpyzYwQaQRojvx3kHEowA4G0JZnWMWunA/kvAdryqoe1Lfw2cxv9K5QACDUgbLHtgvBwB8oQIF3+csbLDENDiymZx/bGxvGH88sAopK39X5xRBvLne73NJLlpLO1BfBE5Hi+mC+xZ3lecwEOPS7KxvsXwyPewUSyRyTxTgso+Vj3UKz+3iwYETuYGsOCPwDTBBSS5jxXZxUBbcIBhQwTOcAMcL9DM+U8u+mVNwEpzFwPudmS++MM6zH3MHOgfklxpCaEwH41A84dLI1jpbv4n4Bdq9dxBY+lWkI5gQYj3SyKuBoBt3FgDVw+AP8jhXGOMC4DRC82i3oryQ   �QVXQ2rKXJFoX7r2RmbVWN63xlaNteeuRVqFxAkCavT5BLItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAqO04p0b63Tvw4ROSXDb2k9ar1ySXKz4rWMePzN1ply5aZG6qsiSACY5bqKzpCgRBi9XFEepPP1rQc6vkfppZzvQxTXVJccDJMrB7LZyRKFRZnZwAqv5vWB2DERyn5MUiWMYkhyPUayccC+opcDQOnR9cu3GlvvmcYpAXKMLOazcYG5OZpQblQ/F4MYoHG+ScZMGoJWOWJtiZFuSovVJSaolldock98nKrqvYAI/vuiq0dibIo9/qCxV5mNVMp4zRKR/W/Kz5jI0cOR41XxagkU4pfIHvkTl5qAFeLgfRZGQGSC7lSSE6G1D0CUkbCyn9aA0Q6kq7ETuX+bmi29X4mBTFjdvW2E2Tx9MNjNaUusSVPnSMSR4wEmIQf9lqV2FPHfmfmkXWuRRjffl/9cFd2NWifsZx7nBO5juVSqvaC5e739VJmwP047QxnD0BK9V5XOuBsadWBOamysTE2tPKHBeXM86hqeKP3dvVFcnYupoPKvuhXLW2MhawHbFahvoW6Fe5SAQrSlXM9fwsF+ci/RimwOJkikysOJwqT6w1BWNPzOYvBbPwpH6OEzixdoqzsnvWbsItCw3auaTBjQgqmzo1zSFiz+VMgsyMN9iVYDrkVaf/tg9f0Kun8I0ar2tYJgjFaqwf13vkMiOQJ3kznXCbLhxDgVOmRMlzLxqVAMgMYJHWakWMhc0Yzeq/TbsNInbTYCFeUznk/jN6gHEZ3uzC7o9rIq8GBmOVKJQuuamgUVZUTq7ZjJllNa7YhayBCzHsfkZYHbOO52E6g5nopIvmslCjcESjXzKrEKOTowfEIyrV8YH5/Lmeg6C/dtYTIMG2HJeAjvTf1q1fl+DOCVCPxgv1wzLtsPu75uITIznvzKRtFT0dngBEStiBrxUHl5Svopo6oBKfXr3S8dnnHQF1UK3amJPG+qiVfWU8nK1a3   �   |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注   �//xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �T 	I�5showdoc
用户资料是否完善接口eNp1Tz1PwkAY3u9XnB06NNJaEtGQNCY4SYLGQeNWantCBdqmd1WjdUE2FRyU+BV+AIkiRgMCCX+Gq938C14pIXHwXe75uPe558JOL+hWPbf8M3oERUIcnJakIi6Lh6ZmG5rtIkvU7Yp0jPYl0zLQiegUnTVMmKGahpLkXUVzTMnDyJU0zzAJr+k6wlgldglZSsHWUhvG1ml2L7tO5NTyQZZsZrZLqzu5Xd0t5zK86lmmprOkhMyrc3CEXGzalpIUU+IKAIIQTmsGzS86arCmggASsIAInHrjW/rUoo1qcPcWewDm83kI4BmAkNNtA3FpKC9GpIILDHMsjtaHk357MhhM+i90fEFfr2izFn7WgubDAgfOYRwC2PH3hbDzEdzXBYFd8GOF3lz7390hbV36sekDP52IBsIZ8Gf032ErUU/omxaJ6BL7SFyG9t7jblCea8Fze6axRQB+AZFuvFY=c\Jk�   �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)      �                 �#H 	%�showdoc项目信息eNpVjr1OwlAAhWfvUzjC0t6/ltZJExZmn+DaW2kV2wIl7UpiiNE0Nf4M/iTQQcNEGUyIxOjLeFuYfAV7HYgsZ/m+nHPEeCyuk5+PR+CEYdDfU1Wn3yHKict8zvye7SmWfwZA8ZyIy0w8TKXpBlUSU0FQVzCiCqYYrLP38mm2WuTi87yiKuu4nIVMjaJINqqnA8/xvXY8YB4AbTcUF6PiLq/MLVDcz4tkJpa3319ZMZQYbHExT8vplVimq7dXkS7kDQoJRSYidL/b/fu6cUQ+KidDOeHECBOq6Q0DgIMgaDVrG6nVrO9EMUWQYBNik3ONGrQhrUPb6tlh7X/d+ualvgsrFXKm29RAuk4Q0zCnULO5eXRsYMP6BcYLmak=c\=;ł?G 	%�=showdoc项目信息eNp7On/+0wm97/fM4sooKSkottLXzyjOMdbLykzMT0nML0rN00vOz+Xiejan92nXwqczV4BUZhYASWNLPUMDMz0jQxM9IxMjrpcLdz6fve7F9vVP97UAZfUTczJTEksS9cvLy0Em6meX5mXk56VXlCbmcXGlZ5Y87Wh7NmU9UCWKxLOpG571rnu6a/KT/QufNYKkuVDkn27of76i++mu/hdblj3t3w5yhomBsYmhpaGxiUNhIditcDVP17c9X9AIsiKjwtDI2MTUzNwCAAdedQU=c\=;��wF 	%�-showdoc项目信息eNp7On/+0wm97/fM4sooKSkottLXzyjOMdbLykzMT0nML0rN00vOz+Xiejan92nXwqczV4BUZhYASWNLPUMDMz0jQxM9IxMjrpcLdz6fve7F9vVP97UAZfUTczJTEksS9cvLy0Em6meX5mXk56VXlCbmcXGlZ5Y87Wh7NmU9UCWKxLOpG571rnu6a/KT/QufNYKkuZDkAXljU3g=c\3�    �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<�                     code        �                �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   $ �$                                                                                                                                                                                                                                                                                        �> 	%�=showdoc	项目信息eNpdT7FOwzAU3N9X+AvsOk2AZGLkN6w0JKlCHMVOo2xUQlWFFAmpZQAVlYqlE+lWiVbwM7HLxi/UESxlu3fv3t29djdTHzO9qNX9Sj2t26+VHjc/+2fou5j2zrBFbWzZFhzmaz3dmkXOuQTVTA6vYzNdXVfnfXrh0B5AGEu12KiXW8MbjPyEpwEy6PLUyyNZzoeBL4nMqzgNRMQzbGTQ7t6Mq5pO9LyrkIiw+uO+t436vDMcYUk8YJKRsixJJBKSjERUhAWvCpYC6MeNrt/NQ96//gihrjhyHdeyHTAK9VB3GSfnoJbLXz6SMhMe6SIoxcOY8QHjeZBin98AHAFm2or2c\%���W= 	%�mshowdoc	项目信息eNp7snvy012Tn83pfdq18OnMFU/2L3zWuP79nllcxpZ6hgZmekaGJnpGJkZcz6eseNaxHShRlJ9fwvV0fdvzBY1AnkdapbmxoYWpoQEXV3pmydM5G57ObQCKA9kKyTn5eakKQJYDqllW+gVF+VmpySX6JUWVmXmpxRn5BXpAZVxPdi8Gmvq0o+3ZFJATcorTK6FiL7avf7qvBSimn5iTmZJYkqhfXl6un1Gco59TVpxRml6aX1mamMfF9Wzqhme964AeskJzv4KCAsjhCpamlkYmplxAFU8n9ILsQNEOAMKUekM=c\%��   H H�$��� " " "��代码�)R 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)Q 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   �   	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   �   n 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   �   n 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)S 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)T 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)U 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)V 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   �   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   \----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    �  �                                                                                                                                                                         �JY 	1�Eshowdoc
资料完善接口eNp1UkFPE0EUvs+vGHvoobEtJbEaksYET5Kg8aDxth12h3agnW12Z9HqmLREIkhKawRDKmCiYk0MlCYoSCH8GJnd5eRf8O22YqvyLvu+N99775vZz28fuJ15xyr8PG6ivBAleyyZzNuFxAwjpkFMi/KEbhaTj+hUknGDPk6U8qWbtoADjRmZ0aiVISWWdGxqJYljMBEluk5tWxPmLOWZnEnSt427TyYeTtwSqfS16QlxZ/ze7I37kw90qzA5HtUczogOk+KpqHaRzFHLZibPjCbSiesIxWJ+KNN9810d10FpLIbiOEcFDs5Ufd5d2wurgGUPqkZNqtOF88qS9DpdtbUs/fa+u74ikRyLQ2CIMOvBOJbxfhkYwW00US5RLN31tmRcYOmtfnYXD/qzkOSk2D+1hcV4TqrWa9j5o1JVtbWzkyDxus+97gsoeq096JgmRVYoa8QwLHifodbdb+poR23sqc1KsJ4ZlAsmyppOLEObcWwxyPaPvpx1T/x21d35cL75/t8GkiOMX9Kj6jXogZYpx2Y8+E8FplNuU6kany7Yje2zw6a71PIWWkDVmaU7BSJoOH6Q6H6tnlea/u6hqrdhOHBLljnHuE4Hl3sb1XCKKA9d+nAeqgYLoD4kVq2cBgLBbSH6s87rvlK7oGvZ3ThS9QMZGuN0Vb3dGrAAQjibzWKEnyKMI7pp0MgYHrkagKKdgzziLjbUy3dXIugZ7pERfIYn9bzyt5/+a6R430fgpN8OuiyCVwA9ODQUwBEQ3BODU5Cqjx1/fzugIfQLMAGkCQ==c\J��    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<%   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    2&r=api/user/edit&user_type=1&name=test&family_address=湖南长沙&access_token=goa6IdOzJXJCt165fJtNBQk8UMVcrlMB&_uniacid=-1&_acid=-1&_version=2.6.7

**请求方式：**
- get 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|user_type |是|int |用户类型|
|name |是|string|姓名、单位、组织名称|
|family_address|是|string|家庭地址 |
|identity_card_just|是|string|身份证正面 |
|identity_card_against|是|string|身份证反面|
|business_license|否|string|营业执照|
|circulate_card|否|string|流通许可证|
|province|是|string|省|
|city|是|string|市|
|district|是|string|县|
|binding|否|string|绑定手机号|

**返回参数：**

 ``` 
 {
  "code": 0,
  "msg": "成功!"
} 

 ```


 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |0：成功 1：失败  |


c\J�                                                                                                                  t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<'   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   � �                                                                                                                                                                                                                                                                                                                                                                                                            �g\ 	%�showdoc
项目信息eNqNkcFq2zAcxu96CsOgN1uRY8d2IHTH9imGLMmxiiN5trrgWwsjtINsgXaHjY4uDEZh0OQwKKxjfZnI7m2vMLlpChkMdhGf9IlP3/+n1e2Z/nFWX0z1m7n+cLW6m9fHi98/P4Ju5KBOz3GR57ieC5rzq/rkxhiFlAroxaT5fGx2e0kVdFHoow4Aeva2+bbogyFX+mKpPx0Z32iLZFIwy6jn25l9mBfygBEFVVFxwcpU5o65Bla3X0y6PpnU522V7FWZMjEU1aNxf7PQv14bA+KMU6wwHI/HMC0zuLkpxbBiwDQ6nZpG/13jJceCHmLxJF5sKlnbyf8o+Phs/X5ZT68N1f5fEK2WnRX5kev5wPh6Nt0aD+jLy/VZqlRe9mE7lHPAsaRYFkw4RI4eMOt3y+Z63swm99+/rn9lTdDtuKFlbTQKDYJNUoZFeojzvM2AYxZD+AxyxUYwlrigLQIlIaNcQSZMwG65TwcoTpKe5wV2ggixvchndsgIsmNGY7+Do8R32U7O6YCGQTf2KbW9sGsWn1E76pHADuMgDEhCaIKSHVXlbDCSMc8Y+ANp1AjTc\I�    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<(    > 'exists_in:order,id,status=1&deleted_at=null' `
     - 额外验证规则9: `list:integer` 验证是否满足`1,2,3,4`类似格式, 并返回[1,2,3,4]给取值的list中
     - 额外验证规则10: `null_if` 当满足条件时，此字段必传空
     - 额外验证规则11: `length` 长度验证, 如length:6表示必需为6位
     - DEMO:
```php
<?php
list($phone, $code, $sms_ticket) = \library\Validator::make($this->request->post(), [
    'phone' => 'required|cellphone',
    'code' => 'required|digits:4',
    'amount' => 'required|numeric|float_digits:0,2', // 小数位允许0~2位
    'sms_ticket' => 'required',
    'type' => 'list:integer',
    'null_one' => 'null_if:type,2',
    'null_many' => 'null_if:type,2,3,4,5,6'
]);
```
 - 

## 入队列
```
use app\library\Queue;

Queue::getInstance()->addEvent($eName, array $eBody)->push($qName);
```
- queue driver 在 .env 配置 ` QUEUE_DRIVER ` 默认支持 ` redis, rabbitMQ, sync(同步执行) `


## 日志
```
use Log;

Log::info(['x'=>1,...]);c[��}    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh50menznfvXp0ftqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/kH2LakXmoww5emAWFozHYx4PSa6TnWlAcF4m2yOgAiLi8dy7d88D3iD0n44PiqO75tHPbOGbw6SRXLIS42RvvnxlyvP74trviwkuHhf4CKfykojcXiS/CGFnUiAyghCTi0hiL9+H3F/MVUiFXtivFi29MQw8qMqci7g1+SPJrOqvp94SR8ZRXglA/GtwOul1J4a7NNfTw6vXbtQCdJaunwqwCAAoEAi4RcF49Ipsrro6U41T9YsFNwZVGHVxiXx3pBc2rfQMOdgi4wcNMcsokugCgsj4czL+kkweGQ9eNBSm+W0sfKpmWdJU7CaLrIOsuXi6sMr1Ka6ypVoE5/Vc3ph6Rl4+YJF1AaJ5iXIq18MpLoZQt1MZk   �    ,  { ,                                M% 	eshowdoc文档eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�ݞr$ 	1�showdoc框架说明文档eNqlWWtT21Ya/q5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYUtQI0sOboQ6HQy5m4CBloIBAIJbrilDXbSpuDYUP5LqyPJn/IX+h4d2ci2zKa7/uCLdN7nvT/nPXI76uNVvPYCryfD5Ou/LrwbbDl/Kdja0hZsbWsNhxKy9DUXVUOqPMSLXBCWMO1IPzo2F3eNzITxeP/N4eoX/bx4+/on1y++OZyxcttmcQIfJvHcd8bSpJF5iudGrOQo6qqswtkZPL7rLJmaxhMz3b5+VU2EQ6G7d+8Gb7NiVJC0WDAqhuKsqLFCSCWiif7ExWaGOXPGnM3hH0aN+T1cLDCRSIQReFEbPCf28eLgufiQckc4B2vfsW+dOaMXn5obw8b0FJ5b0vPTxvoWnp8tjafNo6y5OqYfZ43F17DsTCnz2nyUpTf044wxnDu5TZCiCRTkxIEgN8jGEwKH7F+IYegS8gPc1Yv7IGU8eGGks7iwUIW2N2XjgC4EivDRA7O4YDweYxicWsc70yDnvoy3R8BaCC7D3Lt3j4HAIPSfjg9Ko7vm0c904ZvDlJFaspLjeG++fGWK+X1x7ffFJJtICHyUVXlJRF4vXFiEDFIpEBlBiMpFJbGX70PeL+qO42aVqPNGMbhBVWY9xK3JH3F2VX899ZY4MhfjlSCksgank1x3Y3hLsz09vHrtRi1Ap3P9VIBFAEDBYNArCsajV3hz1dOZapyqXzS4cSjomIdL+LsjvbhpZWbwwRYeP2iIWUaRRA8QhMef4/GXePKIFGAjYZLfxsKnapYlTeW8ZJF1kDMXTxdW2T7FU9apRXBezxeMqWf45QMaWQ8gkpcYq7I9rOJhS   �   V V                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �'C 	%�showdoc	项目信息eNpdUMFKw0AQvc9X7BfsdreNpj159DdCGpOUmA3J1pKbBQlFqAZaD0qlBkF6anIoFKzoz2ST3vwFN1QP9fbmzcyb96bczeT7rFpM5W0mH1flV1aN8++PJ2h3MW2dYEY7mHUY1PNVNdmqRsi5AJkn9ctYVecX8Wmb6hptAdiukItCPl8rXmFkety3kEJnx1o9EoR8YJmCiDB2fStyeIDVGJS7V6UqJ0k1byx4kR3/cvttLj9vFEcMz+0bwiCj0Yg4kUe8q8gZ2kMeDw0foHooqulaBer9848QaoyjrtZlHQ3UhEynzY2jdZDL5YF3hAiiHmlOUIoHrsH7Bg8tH5v8EmR6J++Lep3VabLfvB3+csjCWkxH6A9THeAHu4OhEw==c\%��   / �/                                                                                                                                                                                                                                                                                                   eQ 	Ieshowdoc
用户资料是否完善接口eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\JjՄgP 	%�showdoc
项目信息eNqNkcFq2zAcxu96CsOgN1uRY8d2IHTH9imGLMmxiiN5trrgWwsjtINsgXaHjY4uDEZh0OQwKKxjfZnI7m2vMLlpChkMdhGf9IlP3/+n1e2Z/nFWX0z1m7n+cLW6m9fHi98/P4Ju5KBOz3GR57ieC5rzq/rkxhiFlAroxaT5fGx2e0kVdFHoow4Aeva2+bbogyFX+mKpPx0Z32iLZFIwy6jn25l9mBfygBEFVVFxwcpU5o65Bla3X0y6PpnU522V7FWZMjEU1aNxf7PQv14bA+KMU6wwHI/HMC0zuLkpxbBiwDQ6nZpG/13jJceCHmLxJF5sKlnbyf8o+Phs/X5ZT68N1f5fEK2WnRX5kev5wPh6Nt0aD+jLy/VZqlRe9mE7lHPAsaRYFkw4RI4eMOt3y+Z63swm99+/rn9lTdDtuKFlbTQKDYJNUoZFeojzvM2AYxZD+AxyxUYwlrigLQIlIaNcQSZMwG65TwcoTpKe5wV2ggixvchndsgIsmNGY7+Do8R32U7O6YCGQTf2KbW9sGsWn1E76pHADuMgDEhCaIKSHVXlbDCSMc8Y+ANp1AjTc\I�    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWWtT21Ya/u5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYV9ADWy5OhCoNPJmLsJGGghEAgkuOGWNthJm4JjQ/kvrY4kf8pf6Ht0bCPbMpvu+gPY0nmf9/6c90jtqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/7DtUKTIfZcjRA7OwYDwe83hIcp3sTAOA8zLZHgENEBCP5969ex5wBqH/dHxQHN01j35mC98cJo3kkpUYJ3vz5StTnt8X135fTHDxuMBHOJWXROT2IflFiDqTApERhJhcRBJ7+T7k/mGeQib0wn61aOkPw8CDqsy5iFuTP5LMqv566i1xZBzllQCEvwank153YrhLcz09vHrtRi1AZ+n6qQCLAIACgYBbFIxHr8jmqqsz1ThVv1hwY1CEUReXyHdHemHTSs+Qgy0yftAQs4wiiS4giIw/J+MvyeSR8eBFQ2Ga38bCp2qWJU3FbrLIOsiai6cLq1yf4ipbqkVwXs/ljaln5OUDFlkXIJqXKKdyPZziYgh1O5Uh+   �   � �                                                                                                                                                                                                                                                                                                                                                                                                                            �WO 	%�mshowdoc
项目信息eNqdUUFr2zAYvetXGAa92YocO7YDoTtuP0OWPscujmVsbcG3FUboBtkC7Q4bHV0YlEKhyaEQaEr7ZyK7t/2FyUtzyGCXXcST3sf73nvarE/V3Wl9PlUf5+rr1eZxXh8vft1/Q93AIp2eZRPHsh0bNWdX9clKE4UQEqnFpPlxrG+vosrrEt8lHYTU7FNzveijYSLV+VJ9f6d5jQ2WigwMjV7ua/ZxXogjYBLLokoyKGORW3oMbdY/tbo6mdRnrZX0bRlDNsyqZ+JptVAP7zWBaZpwKikej8c4LlO8mxTZsAKkHX2Yakf/acPYV/uHqedV9ZdlPb3RTfb/Ks5o+zICN7AdF2lezaZ7kZC6uNi+xVLmZR+3QayjhApORQGZxcToT7Xq87K5mTezydPt5fYntnbtju0bxg4TX8feKaU0i9/QPG818BhCjF/gRMIIh4IWvI0tBQaeSAyZFjgsX/MBCaOo5zieGRHGTCdwwfSBETMEHrodGkSuDQd5wgfc97qhy7np+F19uMDNoMc80w8932MR4xGJDmSVw2AkwiQF9BtJ2gQ+c\IE   �文档参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)

##环境搭建
```
linux+nginx+mysql+php7
```
##代码拉取下来后配置的修改
###项目配置信息的修改
```
cp .env.example  .env 

修改.env文件的数据库配置信息等
```

## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application                     应用目录
│  ├─config                       配置文件目录
│  │  │ ├─extra                   自定义配置文件目录
│  │  │ ├─redis.php               Redis配置文件
│  │  │ ├─rabbitMQ.php            RabbitMQ配置文件
│  │  │ └─ ...                    更多自定义配置文件
│  │  │
│  │  ├─command.php               命令行工具配置文件
│  │  ├─common.php                公共函数文件
│  │  ├─config.php                公共配置文件
│  │  ├─route.php                 路由配置文件    � ^ �                                                                                                                                                                                    �N 	%�ushowdoc
项目信息eNpdUMFOg0AUvO9X8AUsbEGBk0d/g9AVaJAlsJFws4khjQlK0nrQ1FRiYnoqHEyaWKM/wy69+QsuwR7qbd6bybyZ1+7m7GPOlwW7rdjjuv2u+LT++XwCI1NWlRMZqZqMNAS6xZrPtoKICaGA1Xn3MhXT+UV2OlINXVUAcH3Klg17vhZ7gSUnICGWBDo79rJgFJMJdiikceaHOPFIJAsZaHevwpXNcr7oIwRXiYdDN8z+iP22Zl83goB24I9tasM0TaGXBPCgJKGbYQD4Q8OLjahl/Wsh9eElUzeRpgPBs7I4ugPYajXsPEqjxIK9uzzxbTK2SYxD2SGXQlTesfum21Rdme/f34a3DFWQggxJOmDVAL/LR6F3c\E���M 	%�}showdoc
项目信息eNpdUMFqg0AQve9X7Be4utFWPfXY3xBj1WDdoEvFWwNFQsFWSHpoSUmlUHKKHgKBprQ/46659Re6YgJtb2/mvZk3b5rdjL3P+CJntyV7XDVfJZ9U3x9PYGBIinwiYUWVsIpBO1/x6VYQESEUsCprXyaiOr9ITweKrikyAK5P2aJmz9eiLzC0AxI6UKCzv7tMNI7IyLEpolHqh07skbEkZKDZvYqtbJrxeXdCcBV7TuiG6YHYbyv2eSMIZAX+0KIWSpIEeXGAjkoSuqkDAH+oeb4Wscx/KWB3PDQ0A6saEDwr8l8+h2m2XPZ9j9JxbKLOQRr5FhlaJHJCySaXQlTcsfu6XZdtke03b/1r+jhYxjqER6zo4AdFTaMgc\E��    � b �                                                                                                                                                                                    �L 	%�}showdoc
项目信息eNpdUMFqg0AQve9X7Be4utFWPfXY3xBj1WDdoEvFWwNFQsFWSHpoSUmlUHKKHgKBprQ/46659Re6YgJtb2/mvZk3b5rdjL3P+CJntyV7XDVfJZ9U3x9PYGBIinwiYUWVsIpBO1/x6VYQESEUsCprXyaiOr9ITweKrikyAK5P2aJmz9eiLzC0AxI6UKCzv7tMNI7IyLEpolHqh07skbEkZKDZvYqtbJrxeXdCcBV7TuiG6YHYbyv2eSMIZAX+0KIWSpIEeXGAjkoSuqkDAH+oeb4Wscx/KWB3PDQ0A6saEDwr8l8+h2m2XPZ9j9JxbKLOQRr5FhlaJHJCySaXQlTcsfu6XZdtke03b/1r+jhYxjqER6zo4AdFTaMgc\E�̓K 	%�ushowdoc
项目信息eNplUMFOg0AUvO9X8AW7QEGBk0d/g9AVaJAlsJFws4khjQlK0nrQ1FRiYnoqHEyaWKM/wy69+QsuQQ/V27w3k5k3r93N2ducLwt2XbH7dftZ8Wn99f4ARiZU5COoKhpUNRV0izWfbQURE0IBq/PuaSqm07PseKQYuiID4PqULRv2eCn2AktOQEIsCXRy6GWhKCYT7FBE48wPceKRCAoZaHfPwpXNcr7oTwguEg+HbkhCN8M/5H5bs48rQSI78Mc2tVGapshLAnSoBvyu4cVGVLP+NJH6ApKpm6qmA8GzsviXBdhqNew9SqPEQn0CnPg2GdskxiF0yLkQlTfstuk2VVfm+9eX4T1DJVVWDUn6xYoBvgG6eKTJc\%��    r  r�                                                                                                    � 	1�kshowdoc项目账号信息仓库服务器信息：
39.106.214.242
用户：root
密码：Hfy7318510

代码路径：git clone git@39.106.214.242:/project/tryineshop.git
测试服务器：
ip：121.196.192.114 
user:root
password:!@#hfy7318510!@#

数据库:
121.196.192.114   root tryine123456

2.阿里云域名：www.tg30.com   
阿里云账号：hi31945147@aliyun.com  密码：751017tg30

c\ �ĸi 	1�showdoc框架说明文档> git地址: git@39.106.214.242:/project/tryine.git
> 使用框架：ThinkPHP5，详细开发   ʂ` 	1�sshowdoc项目创库信息核心业务项目框架  git clone git@39.106.214.242:/project/tryine.git
后台管理框架  git clone git@39.106.214.242:/project/tryineadmin.git
时工项目控制器  git clone git@39.106.214.242:/project/controller/shigong.git
时工项目业务  git clone git@39.106.214.242:/project/core/shigong.gitc[��c   I I I         0
 	%!showdoc接口信息1：注册c[��~Q	 	%cshowdoc文档信息211.149.237.11:33890
Administrator
umn2bzg4c[�;܄b 		+�showdoc服务器信息lixiangpeng86  
密码：wdmzjlxp86 
登录密码：Lixiangpeng86
远程连接密码： 960272
公网ip:119.23.45.118
内网ip:172.18.�4 		+�#showdoc服务器信息lixiangpeng86  
密码：wdmzjlxp86 
登录密码：Lixiangpeng86
远程连接密码： 960272
公网ip:119.23.45.118
内网ip:172.18.62.54
mysql密码: Lixiangpeng86!
域名:www.qgmysg.com



小程序账号：18670042229@163.com  密码：cygfcygf88  
appid：wx220138ed7e16e84a AppSecret：d22b1f909edd7da198f5201ee50b7da3


商户号：1513284201 操作密钥:cygfcygf88!   支付密钥:jBYX2qrpNT6FeoeJn72Otftm9Ge3eh2f


微信公众账号：258815165@qq.com  密码：cygfcygf88


阿里云账号：lixiangpeng86  密码：wdmzjlxp86
实例：root  Lixiangpeng86


##前端仓库信息
git clone git@39.106.214.242:/project/qianduan/shigong.git
c\�                                                                                                                           �n 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdoYO6ccZYzh3MkEwogkU5MSBIDfIxhMCh+xfiGHoEvIDDNWL+yBlPHhhpLO4sFCFtjdl4xDdkfkoi48emMUF4/EYw+DUOt6ZBkH3MN4eAUXBrwxz7949BnyC0H86PiiN7ppHP9OFbw5TRmrJSo7jvfnyyBTz++La74tJNpEQ+Cir8pKIvF64sAjBo1IgMoIQlYtKYi/fh7xf1B7HzipR541icIOqzHqIW5M/4uyq/nrqLXFkLsYrQYhiDU4nGXdjeEuzPT28eu1GLUCnM34qwCIAoGAw6OUF49ErvLnqaUw1TtUv6tw45HLMwyT83ZFe3LQyM/hgC48fNMQso0iiBwjC48/x+Es8eUQysJEwiW9j4VN3liVN5bxkkXWQMxdPF1bZPsVT1slFMF7PF4ypZ/jlA+pZDyASlxirsj2s4qFIT   �    {  {                                                                                                                 �r  	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   i    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWWtT21Ya/u5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYV9ADWy5OhCoNPJmLsJGGghEAgkuOGWNthJm4JjQ/kvrY4kf8pf6Ht0bCPbMpvu+gPY0nmf9/6c90jtqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/7DtUKTIfZcjRA7OwYDwe83hIcp3sTAOA8zLZHgENEBCP5969ex5wBqH/dHxQHN01j35mC98cJo3kkpUYJ3vz5StTnt8X135fTHDxuMBHOJWXROT2IflFiDqTApERhJhcRBJ7+T7k/mGeQib0wn61aOkPw8CDqsy5iFuTP5LMqv566i1xZBzllQCEvwank153YrhLcz09vHrtRi1AZ+n6qQCLAIACgYBbFIxHr8jmqqsz1ThVv1hwY1CEUReXyHdHemHTSs+Qgy0yftAQs4wiiS4giIw/J+MvyeSR8eBFQ2Ga38bCp2qWJU3FbrLIOsiai6cLq1yf4ipbqkVwXs/ljaln5OUDFlkXIJqXKKdyPZziYgh1O5Uh+   �    �  �                                                                                                                                         �Z 	1�eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh506e7z9bl+fXrUjvp4lay9IOuJEP36rwvvBlrOXwq0trQFWttaQ8G4LH2NI2pQlYd4EQdgiacd6UfH5uKukZ4wHu+/OVz9op8Xb1//5PrFN4czVnbbLEyQwwSZ+85YmjTST8nciJUYRV2VVSQzQ8Z3S0umpsnETLe3X1XjoWDw7t27gducGBEkLRqIiMEYJ2qcEFSpaLw/frHZ4zlzxpzNkh9Gjfk9Ush7wuGwR+BFbfCc2MeLg+diQ8od4RysfceeOnNGLzw1N4aN6Skyt6Tnpo31LTI/WxxPmUcZc3VMP84Yi69h2Rk2pB+njeHsyQTFiMRRAIsDATzIxeICRvYvZE9RdZD5KEOOHpiFBePxmMdDkutkZxoQnMNkewT2Bld5PPfu3fOAmQj9p+OD4uiuefQzW/jmMGkkl6zEONmbL49MeX5fXPt9McHF4wIf4VReEpHbi+QXIR5MCkRGEGJyEUns5fuQ+4sZDDHSC/vVoqU3hoEHVZlzEbcmfySZVf311FviyDjKKwEITA1OJx13YrhLcz09vHrtRi1AZ2n8VIBFAECBQMDNC8ajV2Rz1dWYapyqX8y5MUjPqItJ5LsjvbBppWfIwRYZP2iIWUaRRBcQRMafk/GXZPLIePCioTCNb2PhU3eWJU3FbrLIOsiai6cLq1yf4ipbykUwXs/ljaln5OUD5lkXIBqXKKdyPZziogg1O5Uh+   �   �文档参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)

##环境搭建
```
linux+nginx+mysql+php7
```
##代码拉取下来后配置的修改
###项目配置信息的修改
```
cp .env.example  .env 

修改.env文件的数据库配置信息等
```

## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application                     应用目录
│  ├─config                       配置文件目录
│  │  │ ├─extra                   自定义配置文件目录
│  │  │ ├─redis.php               Redis配置文件
│  │  │ ├─rabbitMQ.php            RabbitMQ配置文件
│  │  │ └─ ...                    更多自定义配置文件
│  │  │
│  │  ├─command.php               命令行工具配置文件
│  │  ├─common.php                公共函数文件
│  │  ├─config.php                公共配置文件
│  │  ├─route.php                 路由配置文件    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �   �
│  │  ├─tags.php                  应用行为扩展定义文件
│  │  └─database.php              数据库配置文件
│  │
│  ├─console                      定时脚本文件目录
│  │
│  ├─call                         Handler事件处理调度入口
│  │
│  ├─dispatch                     队列消费常驻进程目录
│  │  └─controller
│  │     ├─Consume.php            具体业务事件消费进程文件
│  │     ├─Correct.php            总队列消费分发进程文件
│  │     ├─ExceptionHandle.php    异常队列消费处理进程文件
│  │     └─RBMQCommand.php        进程文件调用RMQ初始化文件
│  │
│  └─index                       对外接口目录
│     ├─controller               控制器目录
│     ├─view                     视图文件目录
│   
│
├─core                            公共扩展核心类库目录
│  │
│  ├─library                       �  常用工具类目录
│  │  ├─RabbitMQ.php              RabbitMQ操作类
│  │  └─ ...                      更多工具类
│  │
│  ├─model                         模型目录
│  │  ├─user                      用户数据模型
│  │  └─ ...                      更多数据模型
│  │
│  ├─common                       公共业务模块目录
│  │  ├─user                      用户模块目录
│  │  
│  │
│  ├─handler                      事件处理文件目录
│  │
│  │
│  └─exception                    异常信息目录
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         自定义路由文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Th   �ink类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─artisan               命令行入口文件
~~~

## PHP编码规范
本规范是PHP互操作性框架制定小组（[PHP-FIG](https://github.com/PizzaLiu/PHP-FIG) :PHP Framework Interoperability Group）制定的PHP编码规范�   ш[PSR][]:Proposing a Standards Recommendation）中译版。

目前官方已制定的规范包括以下5份文件：
 
  - 基本代码规范[PSR-1](/docs/psr/PSR-1-basic-coding-standard-cn.md)
  - 代码风格规范[PSR-2](/docs/psr/PSR-2-coding-style-guide-cn.md)
  - 补充文档[PSR-2补充](/docs/psr/PSR-2-coding-style-guide-meta-cn.md)
  - 日志接口规范[PSR-3](/docs/psr/PSR-3-logger-interface-cn.md)
  - Autoloader[PSR-4](/docs/psr/PSR-4-autoloader-cn.md)
  - 标准补充[PSR-4补充](/docs/psr/PSR-4-autoloader-meta.md)

## 约束

 - API、Logic、Model响应，若成功就响应成功的数据。若失败就throw，不允许返回 return false。
     - `\app\exception\ResponsableException` 可直接返回给客户端的异常
     - `\app\exception\ApiException` 由API返回的不可直接返给客户端的异常
     - `\app\exception\LogicException` 由Logic返回的不可直接返给客户端的异常

 - Controller中的请求参数验证，除非无法满足，不允许写if()判断。 �   ؿ�须使用Validator来验证和取出参数 
     - 文档参考 (http://d.laravel-china.org/docs/5.4/validation#available-validation-rules)[文档]。
     - 额外验证规则1: `idcard` 用于验证身份证号
     - 额外验证规则2: `cellphone` 用于验证手机号格式
     - 额外验证规则3: `float_digits` 用于验证小数位
     - 额外验证规则4: `bankcard` 用于校验非信用卡的银行卡(且必须为`config('ultron.bank')`白名单内的银行), 不用额外再做银行卡是哪家的这种校验了
     - 额外验证规则5: `unique_if:true,...` 若非空则验证是否未存在 ` 'id' => 'unique_if:true,order,id' `
     - 额外验证规则6: `exists_if:true,...` 若非空则验证是否已存在 ` 'id' => 'exists_if:true,order,id' `
     - 额外验证规则7: `unique_in` 验证是否未存在 可扩展附加条件 如` 'id' => 'unique_in:order,id,status=1&deleted_at=null' `
     - 额外验证规则8: `exists_in` 验证是否已存在 可扩展附加条件 如` 'id' =    YYBHodY6UfpxgBtANDDirfdThgbGVgCuYMRmZzB0hkyUy7sk10mnfHp+UUnV/lChD4N8jVpAhSEGCRQTc0Rc+UIz6dx+gGeGK/INvsRZB8AqRV4Io2HVyuwsCPhBZh89+1pYcXcSVMz9MJEY+svgvUwwdzRuFt8b1iVNc4Px6MIgv4G881nBVjjRBTg57eNtR/x3kO8tosiqImPNaHL7aipBkCSgXn85GakseJLoJgb5BVVeTvFZDeqU1wD8FaK33F5DC3s7Rw0MT2Il1bG8P0NYz0DGx3C2yMeXovhsl4/7GSqplxu+RvQKadysVuselnUBOFUg/7uikSNQSdOv41BFZD/06B3wSABoMJk+4JtrCZINhFFWvyt/gv+tgiMkvrhIe0yP8Kv9ykXdjn3uwkFAu0kD6EqCSjQ3Sl0cB5UE/sgpbAFHC1QZdRbmH2B/oy9Tby3bGR/hQ7SDzegUE6BI/QicGKf2g8+PDjGhW16208iR2+EL1mZXXOzQBpyLQkNecnV7R92XPt3mPxjAAMw849/knfig++szTh+dBaGBvKhxJVbKh+9zanN6DK66ZzjblZIOByOs7c531k4qimBdpmDulHUQDvMZ6oPmrrL1tdkg9JUkiW8zMW+rdBbk58uIhpr1lDiCreVl7BxCc4SNYtELc7JfPRbN9eFz/tbm/woFEIVnqNby/l7reUoNJ34Vo1Y1qYOJRyD3DVTvmsns+KWk9owkSGqXWvirDjktYgUkf+i/1IT0938nv3nDeTFnmZgXqdPIe2rmsIhslmXY39D4zTuPYaxP8PhPk69KpJBM8r5mgPtbCzWQc6MvrPcZzBs+xEry+wQOst9IMWG4H5CU/p9Z++Qe47WALpDkFBM5gfIuQV60v7ziR79gJRufNnxZcetDzuvftXRCT9LxYdWdtNYzBkzw/DT/h/Fj8p/iPiRMiRGfXge6nnLmNoh5A4taftFp8yKUzBggBvwHobY9kq+rqbBpsvtLYQtISJ/AliYXlg=c[��   �Hj/w2sdwXisevOyr6KqlZALXmHFhmO/OyfkvEdOiXBWNg+X4PBq7YxZM6MMjKP0m/EwB/f0wvd0ezSSO05moVQhGS/mzOIYhKMLFgU+uvoxPV0rcLyG03u/1hOECISu8998w37KayFnUTMKwzf0kczGubuSfBtdFYHbJKhStocXeHUIfQx0l4DgUi1QFjX22Ro/7+zu6g5fB0FJ4YGCWPS5ChsEK8cUOLeR3Quqwz6WApKe37Ny35lTqT+SIwxDSmIqjbMPoUjwwc8VNRQd6MSYfq4Xt+BUfFEvHpWTvsogBqEAaW2IDz3sUwliTKCl2xeKSVEllFDkkH0hALzARwNRKQb2BRTHukBUhDQ221AUpPR01tg4dEG11kK1noAMCVygT+NjnBvHysAIMk4fglAEeuWtcOKcyrrBjOUtfLxMx0qXURdqwS4EBKmvj5MDPMlfLxutMul9TZUEiY1xsi3dVivdFmArK6q0b0ziyQlqPpX0dqVKnrhgI9iPPArbxvoThiFGXL/6R3L4U6mPj8LnNTKK4YU0sA15fDS9Rfr6/hP84iW9SH9WnqpAqcAavPnSerUFa9R+WboLcno+jceHrWzeOl7Ejx4jmVM1WUS9rKBwpLrsdgugyE02kbhZmS9udnJKAlif7RG4ypEjgoDUzEevINYUzCyu4OwPMBaZP5FnQnQAaYT4foJ3IcEIAN46MKtjxEoX9l8CtuNVDW1f+mvgJP5XKgcQaEDSYLkD4+UIkCdEuPTjjJUbhoCWVjZL64+N5Q3jlwdGMWPt/+KOMpA/3+trxqlNY2kP4ovw8XgpU6TPBb9iBR56XJKN9S2Kh7+HjWIJTxaoElT2seoBYfkZYCwosDI7wAmBKEwTbFCS+2iRXQy2hQYoNkTgDDvA8gLJXODkYkDWBE5p7qLA3a7Ml35Yh7mPmgP9g1MrLWEU4WNRaP6IM4I5dws/Ab8Qq+cOGku3gnSUE4REvyRy1QCwjRtr4OoB8Ac+nGuMcQEweqFZ1FsxHqhZq   �E3f1cjXlLkikSb27I3sqrG8b42tGmvPPYu0CokVBNTo9QlkW+BkvTANIHhzzJyfsF6M4sI2Ht/Cc089AaG2E6wa7ffuwIdPcGrZ2E9Zr17jfL70rGgdPzJ3pz26aJG6qcqSACa4bqGypisQBC1eF0eoP/1oQc+v4vsZajnVRzXVJcUFJ8uwU9TCGclildWpCaD9/4bVMRjlEoS8aATLmPhwhHjthqNBPQWOxKHzg2s3rtQ3n1sM8gJF2HntBmVjPLPUoHwIHi/GuMEGOcc5MGrJmCUJdqcFuWrPSUotsczu4NQ+Xtn1FBvgubueCq2dCfzot/pCRQy1muqUOXTKizY/bT5jI4+PR82XRWikUwpf4HtkVh5qgJfPQzQpmQGSR3kSiM4GFH1C0sZCWj9aA4S60m7EzmV+ruj2ND4uxbjGbWvsZvDj6QZGa0pd4pwXGYlSB5SEKMRfttpTmKkj/1OzSDuXYKwv/68+eAt7WtRPOc4bzs18p1JpVXtx5e73dNLmAGemqoA5dZ7QemDsqRWBuakyMdH2tLLHpeWse2iq+GP3dnVFUrau5oPKfihXra2MBXRHrJYhvgX7VTYa5RSlKuZ6YZZNsNF+DqbA0mQaT6y4nCpPvzUFY0/f5i9Fs/ikfo4TWLF2irNye9Zu0isLDdrZ0eBFBJVNnZjmErFnfCqBZ8Yb7EowHfKq23/bhy/I1VP4Rk3UNSwVhGI11o/rPfKYEfCTgplJek0XrqHALeNQ8tyLRiUAMgOcSGq1IkbDZozm9N+mvQYRu2k4IVFTOfj+M3IY8hje7MLuT2girwYH45UoOJe8VJAoKyor12zG1LIaV+xC1sCFOOd9Rlgds47nYTqDmeiki+ZyUKNw3CNfsqsQo5OjB8QjJtXxgfn8uZ6HoL921xMgwbackICO9N/WrV+X4M4JUI/GC/XDMumw+7vm4hMjNe/OpG0VOWmeAEQd7ODXiotLyldRTR0QiU+vXun47POOoDqoVm3MKWN91Mq9Mh7OVi3v7    {  {                                                                                                                 �r! 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   %    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   ^    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �    > 'exists_in:order,id,status=1&deleted_at=null' `
     - 额外验证规则9: `list:integer` 验证是否满足`1,2,3,4`类似格式, 并返回[1,2,3,4]给取值的list中
     - 额外验证规则10: `null_if` 当满足条件时，此字段必传空
     - 额外验证规则11: `length` 长度验证, 如length:6表示必需为6位
     - DEMO:
```php
<?php
list($phone, $code, $sms_ticket) = \library\Validator::make($this->request->post(), [
    'phone' => 'required|cellphone',
    'code' => 'required|digits:4',
    'amount' => 'required|numeric|float_digits:0,2', // 小数位允许0~2位
    'sms_ticket' => 'required',
    'type' => 'list:integer',
    'null_one' => 'null_if:type,2',
    'null_many' => 'null_if:type,2,3,4,5,6'
]);
```
 - 

## 入队列
```
use app\library\Queue;

Queue::getInstance()->addEvent($eName, array $eBody)->push($qName);
```
- queue driver 在 .env 配置 ` QUEUE_DRIVER ` 默认支持 ` redis, rabbitMQ, sync(同步执行) `


## 日志
```
use Log;

Log::info(['x'=>1,...]);c[��   ؈[PSR][]:Proposing a Standards Recommendation）中译版。

目前官方已制定的规范包括以下5份文件：
 
  - 基本代码规范[PSR-1](/docs/psr/PSR-1-basic-coding-standard-cn.md)
  - 代码风格规范[PSR-2](/docs/psr/PSR-2-coding-style-guide-cn.md)
  - 补充文档[PSR-2补充](/docs/psr/PSR-2-coding-style-guide-meta-cn.md)
  - 日志接口规范[PSR-3](/docs/psr/PSR-3-logger-interface-cn.md)
  - Autoloader[PSR-4](/docs/psr/PSR-4-autoloader-cn.md)
  - 标准补充[PSR-4补充](/docs/psr/PSR-4-autoloader-meta.md)

## 约束

 - API、Logic、Model响应，若成功就响应成功的数据。若失败就throw，不允许返回 return false。
     - `\app\exception\ResponsableException` 可直接返回给客户端的异常
     - `\app\exception\ApiException` 由API返回的不可直接返给客户端的异常
     - `\app\exception\LogicException` 由Logic返回的不可直接返给客户端的异常

 - Controller中的请求参数验证，除非无法满足，不允许写if()判断。 �    {  {                                                                                                                 �r" 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   f&    &  � 	�ushowdoc文档http://try11.jiaodaoren.com/liaolingli/lvsezhujian/a%E5%BF%AB%E9%80%9F%E5%85%A5%E5%8F%A3.html

git clone git@39.106.214.242:/project/controller/lvsejianzhu.git

git clone git@39.106.214.242:/project/core/lvsejianzhu.git


域名：www.lszjkj.com
腾讯云 lszjkj@163.com 密码： lszj8888
短信：
AccessKeyId：LTAI495EYZscXN6u
AccessKeySecret：vu3ghZsA0zqNZA3cCsijcWgD8SQpTR
签名【绿色住建科技】
阿里云账号：绿色住建  密码：lszj8888
微信开放平台：账号：lszjkj@163.com   密码：lszj8888


阿里云账号：绿色住建  密码：lszj8888

ip：120.79.57.162

连接密码：302235
登录：用户名:root  密码：lszj@302235s!

mysql：用户名：root  密码：lvsezhujian@302235S!

域名：www.lszjkj.com




c\/�   � 	%�mshowdoc文档信息211.149.237.11:33890
Administrator
umn2bzg4

公司小程序账号：

注册邮箱：15580806428@163.com
密码：wz835755
wx813b86471cd378de
cd32154e970d0b59c93eef8039a17a52
c\�    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �   �
│  │  ├─tags.php                  应用行为扩展定义文件
│  │  └─database.php              数据库配置文件
│  │
│  ├─console                      定时脚本文件目录
│  │
│  ├─call                         Handler事件处理调度入口
│  │
│  ├─dispatch                     队列消费常驻进程目录
│  │  └─controller
│  │     ├─Consume.php            具体业务事件消费进程文件
│  │     ├─Correct.php            总队列消费分发进程文件
│  │     ├─ExceptionHandle.php    异常队列消费处理进程文件
│  │     └─RBMQCommand.php        进程文件调用RMQ初始化文件
│  │
│  └─index                       对外接口目录
│     ├─controller               控制器目录
│     ├─view                     视图文件目录
│   
│
├─core                            公共扩展核心类库目录
│  │
│  ├─library                        w��                                                                                               � 	%�Oshowdoc	项目信息仓库服务器信息：
39.106.214.242
用户：root
密码：Hfy7318510

git地址：git clone git@39.106.214.242:/project/tryineshop.git
�W	 	%�mshowdoc文档信息211.149.237.11:33890
Administrator
umn2bzg4

公司小程序账号：

注册邮箱：15580806428@163.com
密码：wz835755
wx813b86471cd378de
cd32154e970d0b59c93eef8039a17a52
c\Ӂ# 	%�showdoc
仓库信息git clone git@39.106.214.242:/project/qianduan/shigong.git

git clone git@39.106.214.242:/project/qianduan/qianduan_shop.gitc\�L�U 	%�ishowdoc	项目资料阿里云帐号：新邵县商务局
密码：xsxdzsw1818
域名：www.xsds.gov.cn

新邵数据库  ip： 39.106.214.242  库名：xs_cshop

域名：https://api.xsds.gov.cnc\P�
 	%�Kshowdoc接口信息1：注册

2:短信验证码
http://local.tryine.com/user/sendSmsCode?type=1&phone=13262957532c[�Q^p    x�a 	%�showdoc	项目信息仓库服务器信息：
39.106.214.242
用户：root
密码：Hfy7318510

git地址：git clone git@39.106.214.242:/project/tryineshop.git
代码分支：lsgy
代码路径：/alidata/www/hsl/lvshuguoyuan

数据库:
39.106.214.242   root 959245
库名：lvshuguoyuan


域名：https://hsl11.jiaodaoren.com
后台管理账户：tryine2028  tryine2018


商户号：1520568611 
操作密码：tryine@2017 
密钥：dinghuaguo20181210dinghuaguo2018


小程序：784721469@qq.com  tryine2017 
APPID：wx5c6bffde50ba4869
 AppSecret：     8b2db55c40def69551c40cd0fcb7dbef

c\4F  ��	� 	%�Kshowdoc
项目信息仓库服务器信息：
39.106.214.242
用户：root
密码：Hfy7318510

git地址：git clone git@39.106.214.242:/project/tryineshop.git
代码分支：lvshengny
代码路径：/alidata/www/hsl/lvshengnongye

数据库:
39.106.214.242 root 959245
库名：lvshengny

域名：https://hsl.jiaodaoren.com

后台管理账户：tryine2028  tryine2018
c\E��                                                                                                                           �n 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdoYO6ccZYzh3MkEwogkU5MSBIDfIxhMCh+xfiGHoEvIDDNWL+yBlPHhhpLO4sFCFtjdl4xDdkfkoi48emMUF4/EYw+DUOt6ZBkH3MN4eAUXBrwxz7949BnyC0H86PiiN7ppHP9OFbw5TRmrJSo7jvfnyyBTz++La74tJNpEQ+Cir8pKIvF64sAjBo1IgMoIQlYtKYi/fh7xf1B7HzipR541icIOqzHqIW5M/4uyq/nrqLXFkLsYrQYhiDU4nGXdjeEuzPT28eu1GLUCnM34qwCIAoGAw6OUF49ErvLnqaUw1TtUv6tw45HLMwyT83ZFe3LQyM/hgC48fNMQso0iiBwjC48/x+Es8eUQysJEwiW9j4VN3liVN5bxkkXWQMxdPF1bZPsVT1slFMF7PF4ypZ/jlA+pZDyASlxirsj2s4qFIT   k   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|    �  �                                                                                                                                         �Z 	1�eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh506e7z9bl+fXrUjvp4lay9IOuJEP36rwvvBlrOXwq0trQFWttaQ8G4LH2NI2pQlYd4EQdgiacd6UfH5uKukZ4wHu+/OVz9op8Xb1//5PrFN4czVnbbLEyQwwSZ+85YmjTST8nciJUYRV2VVSQzQ8Z3S0umpsnETLe3X1XjoWDw7t27gducGBEkLRqIiMEYJ2qcEFSpaLw/frHZ4zlzxpzNkh9Gjfk9Ush7wuGwR+BFbfCc2MeLg+diQ8od4RysfceeOnNGLzw1N4aN6Skyt6Tnpo31LTI/WxxPmUcZc3VMP84Yi69h2Rk2pB+njeHsyQTFiMRRAIsDATzIxeICRvYvZE9RdZD5KEOOHpiFBePxmMdDkutkZxoQnMNkewT2Bld5PPfu3fOAmQj9p+OD4uiuefQzW/jmMGkkl6zEONmbL49MeX5fXPt9McHF4wIf4VReEpHbi+QXIR5MCkRGEGJyEUns5fuQ+4sZDDHSC/vVoqU3hoEHVZlzEbcmfySZVf311FviyDjKKwEITA1OJx13YrhLcz09vHrtRi1AZ2n8VIBFAECBQMDNC8ajV2Rz1dWYapyqX8y5MUjPqItJ5LsjvbBppWfIwRYZP2iIWUaRRBcQRMafk/GXZPLIePCioTCNb2PhU3eWJU3FbrLIOsiai6cLq1yf4ipbykUwXs/ljaln5OUD5lkXIBqXKKdyPZziogg1O5Uh+   W   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��{    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh50menznfvXp0ftqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/kH2LakXmoww5emAWFozHYx4PSa6TnWlAcF4m2yOgAiLi8dy7d88D3iD0n44PiqO75tHPbOGbw6SRXLIS42RvvnxlyvP74trviwkuHhf4CKfykojcXiS/CGFnUiAyghCTi0hiL9+H3F/MVUiFXtivFi29MQw8qMqci7g1+SPJrOqvp94SR8ZRXglA/GtwOul1J4a7NNfTw6vXbtQCdJaunwqwCAAoEAi4RcF49Ipsrro6U41T9YsFNwZVGHVxiXx3pBc2rfQMOdgi4wcNMcsokugCgsj4czL+kkweGQ9eNBSm+W0sfKpmWdJU7CaLrIOsuXi6sMr1Ka6ypVoE5/Vc3ph6Rl4+YJF1AaJ5iXIq18MpLoZQt1MZk   H   �eHVyNekuSKRKvasjeyqsbxvja0aa889k7QKiRUE1Oj1CURb4GS9MA0geHPMnJ+wXoziwjYe38JzTz0BIbcTrBrt967Ah09watnYT1mvXuN8vvSsaB0/MnenPapokZqpypIAKrimUHmnK+AELV7nR8g//WhBz6/i+xmqOd2P7lQXFBecLMMhUQtnJItVWqcmgPH/G1bHYJRLEPKiHixj4sMRYrUbjjr1FDjih84Prt24Ul98bjGICyRh57UblI3xzFKD9CF4vBjjBhvEHOdAqSVjlgTYHRbkyj0nKLXEMruDU/t4ZddTbIDn7npuaO1M4Ee/1ScqYqjWdE+ZQ6e8aPHT4jM28vh41HxZhEI6JfEFvkdm5aEGePk8eJOSGSB5pCeB6GxA0SckbSyk9aM1QKhL7UbsXObnyt6eyselGNe4bI3dDH483UBpTakLnPMi3VDqgJIQhfjLWnsKM3Xkf2oUaeUSjPXl/9UGb2FPjfopx3nDuZnvVCqtKi+uXP2eRtoc4DRVFTAnzxNaD7Q9tSLQN1U6JlqeVva4tJx1N00Ve+zars5IytbVfFA5D+WqtZW2gJ6I1TLEtmC/ykajnKJU+VwvzLIJNtrPQRdYmkzjiRWXUeXGtyZh7Mbb/KVoFp/U93ECK9Z2cVZuz9pNekWhQTk7O3gRQeVQJ6q5ROz2nkrgmfEGpxJ0h7zqtt+24QsyegrfqIm6gqWCkKzG+nG9RR49An5SMDNJr+7C1RS4ZRxKnnvRKAVAZoATSa5WxKjbjNGc/tu0VyNiFw0nJGoyB99/Ru5BHs2bndj9CU3k1eBgvOIFZ8hrC+JlRWXlmsOYalZjip3IGpgQ57zvCKtj1vE8dGfQE51U0VwOchRueuRLdhV8dHL1AH/EpDo+MJ8/1/Pg9NfufAIkOJYTEtCR/tu69esSzJwA9Wi8UN8skwq7v2suPjFS8+5I2lqRS+YJQNTBDn6tuLikPIpq8oBIfHr1Ssdnn3cE1UG16mBOGeujVu6V8XC2anlnx   �/sfXusIxmPVh5c9iqpWQix4hRUbtv3umJD7HrklwjXZPFyCe6u1M2bNjDLQjtJvxsMczOmF7+nxaCR3nMhCqkIwXsyZxTFwRxcsCnx09WN6sVbgZg0X936tJwgeCF3nv/mG/ZTXQs6iZhSGb+gjmY1zdyX5NroqArdJkKVsDy/w6hD6GOguAc6lu0Ba1Ohn7/h5Z3dXd/g6CEoKDxTEos9VOCBYOabAvY2cXpAd9rUUkPT8npX7zpxK/ZEcYRiSElNpnH0ISYIPfq5sQ9GBTozp53pxC27FF/XiUTnoqwxiEAqQ0gb/0Hs+lSDKBFq6faGYFFVCCUUO2QMB4AU+GohKMdAvoDjaBaIihLHZhqIgpaezxsahC6q1Fqr1BGRI4AJ9Gh/j3DhWBlqQcfr8gyLQkbfCiXMq6wYzlrfw8TJtK11KXagFuxAQpL4+Tg7wJH69bLRKpfc1VRIkNsbJtnRbrXRbgK2sqNp9YxJPTlD1qaS3KVXyxAQbwX7kUdg21p8wDFHi+tU/ksOfSn18FD6vkVYML6SBbciTo+ktUtf3n+AXL+kg/Vl5rAKpAmvw5kvr1RasUftl6S7I6fk0Hh+2snnreBE/eoxkTtVkEfWygsKR7LLLLYAiN9lE4malv7jZySkJYH22R+AqV44IAlIzH70CX1Mws7iCsz9AW2T+RB4K0QakEeL7Cd6FBC0AWOvArI4RLV3YfwnY9lc1tD3018CJ/69ULiBQgKTAcgfGyxEgT/Bw6ccZKzcMDi2tbJbWHxvLG8YvD4xixtr/xe1lIH++19eMU5vG0h74F+Hj8VKmSB8JfsUKPNS4JBvrWxQPfw8HxRKeLNBNUNnGqmeD5cd/saDAyuwAJwSi0E2wQUnuo0l2MdgWGqDY4IEz7ADLCyRygZPBgKwJnNLcRYG7XZEv/bAOfR9VB+oHp1ZawijCx6JQ/BGnBXNmCz8BvxCt5w4aS7eCdJQThES/JHLVAHCMG2tg6gHwBz6ca4xxATB6oVjUWzEeqFmph    gEeB1/pR+nGAG0A0MOKt91GGBsZWAKxgxaZ3MHSGdJTLuyTUyad8en5RSdW+UKEPg3yNWkCJIQYJFBNzRFz5QjPp3H6AZ4Yr8g2+xFEHwCpFngijYdXK7BwIuEF6Hz37W5hxdxJUzX0wkRj7S+C9tDB3NG4W3xvWJU1zg/XowiC+gb1zWcFWON4FODnt421H/HeQ7y2iyKoiY81ocvtqKkGQJKBefxkMtJ440uwMTfIK6rydhuT06hu4xqAt9r4HZfFUMLexkER04t4aWUM398w1jNw0CG8PeJhtRgu7+uHk0zVlMstfwM65VQudotVL4uaIJyq0N9dnqhR6MTot1GoAvJ/KvQuKCQAVJgcX3CM1TjJJqJIi7/Vf8HfFoFWUj88pFXmR/j1PuXCLme+m1Ag0E7yELKSgALdnUIH52Froh+EFI6AowW6GbUWel+gP2NvE+8tG9lfoYL0ww1IlFPgCL0InNin9oMND45xYZtO+4nn6ET4kpXZNTcLpCDXklCQl1zV/mHHtX+HyV8G0AAz//gneSc2+M7ajONHZ6FpIB9KXLml8tHbnNqMLqObzj3uZoWEw+E4e5vznYWrmhJolznIG0UNtEN/pvqgqLvs/ZpsUBpKsoSXudi3FXpr8tNFZMeaNZS4wm3lJWxcgrtEzSJRi3MyH/3WzXXh8/7WJj8KhVCF5+jRcv5ea9kLTSe2VSOWd1OHEo5C7pwpz9rBrJjlhDZMZMjWrjVxVhzyWkSSyH/Rf6mJ6W5+z/73BuJidzPQr9OnkPaopnCIHNZl39/QOI17j2Hsz3C4j1OviqTRjHK+5kA7G4t1kDuj7yz3GTTbfsTKMjuEznIfSLEhmE9oSr/v7B0y5+waQHcIEorJ/AC5t0BN2v8+0asfkNKNLzu+7Lj1YefVrzo64Wep+NDKbhqLOWNmGH7a/6P4UfkPET9ShsSoD89DPm8ZUzuE3JHzxxTtMitGQYMBZsB7GHzbK/m6mgabLre3ELYEj/wJGwtZ7w==c[��m    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWWtT21Ya/u5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYV9ADWy5OhCoNPJmLsJGGghEAgkuOGWNthJm4JjQ/kvrY4kf8pf6Ht0bCPbMpvu+gPY0nmf9/6c90jtqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/7DtUKTIfZcjRA7OwYDwe83hIcp3sTAOA8zLZHgENEBCP5969ex5wBqH/dHxQHN01j35mC98cJo3kkpUYJ3vz5StTnt8X135fTHDxuMBHOJWXROT2IflFiDqTApERhJhcRBJ7+T7k/mGeQib0wn61aOkPw8CDqsy5iFuTP5LMqv566i1xZBzllQCEvwank153YrhLcz09vHrtRi1AZ+n6qQCLAIACgYBbFIxHr8jmqqsz1ThVv1hwY1CEUReXyHdHemHTSs+Qgy0yftAQs4wiiS4giIw/J+MvyeSR8eBFQ2Ga38bCp2qWJU3FbrLIOsiai6cLq1yf4ipbqkVwXs/ljaln5OUDFlkXIJqXKKdyPZziYgh1O5Uh+   '   �QVXRWrSXJFoYbrWRmbVWN63xlaNteeuSVqFxAkCavT6BKItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAyO04p0b63Svw4ROSXDb2k9ar1ySXKz4rWMePzN1plypaZGaqsiSACo4pVN7pCjhBi9X5EfJPP1rQc6vkfpppzvZjO9UFxQEny8D7tXBGolCldXICSPy/YXUMRnCckhfzYBmTHI5Qq51wzKmnwFE/dH5w7caV+uJzikFcIAk7r91gbExmlhqkD8XjxSgebBBzkgWlloxZGmBnWJAj90pBqSWW2R2S3Ccru65iAzy+67qhtTNBHv1Wn6jIw7Rme8oYnfJixc+Kz9jIkeNR82UBCumUxBf4HpmThxrg5XLgTUZmgOSSnhSiswFFn5C0sZDSj9YAoS61G7FzmZ8re7sqH5OiuHHZGrtp8ni6gdKaUhe40os2OMkDRkIM4i9r7SrsqSP/U6PIKpdirC//rza4C7tq1M84zh3OyXynUmlVeeFy9bsaaXNAqeuqgJXyPK71QNtTKwJ9U6VjYuVpZY6Lyxln01Sxx67t6oxkbF3NB5XzUK5aW2kL2IlYLUNtC/SrXCSCFaXK53p+lotzkX4MXWBxMkUmVhxGlXvZmoSxe2nzl4JZeFLfxwmcWNvFWdk9azfhFoUG5VzawY0IKoc6Vc0hYnfsTILMjDc4laA75FWn/bYNX9DRU/hGjdcVLBOEZDXWj+stcukRyJO8mU64dReOpsApU6LkuReNUgBkBrBIc7UixtxmjGb136bdGhG7aLAQr8kccv8Zvdq4NG92YvfHNZFXA4OxihdKQ25bUC8rKifXHMZMsxpT7ETWwIQYdr8jrI5Zx/PQnUFPdFJFc1nIUbi80S+ZVfDRydUD/BGV6vjAfP5cz4HTXzvzCZDgWI5LQEf6b+vWr0swcwLUo/FCfbNMK+z+rrn4xEjOOyNpa0XvjScAkRJ24GvFwSXlUVSTB1Ti06tXOj77vCOgDqpVB3PSWB+1sq+Mh7NVyzs73   �v/wWkcgFq0+vOxRVLUSYsErnNiw7XfGhN736C0Rbr7m4RJcRa2dMWtm1APtKPtmPMzCnJ7/nh2PRmKnFFlIVQjGizmzMAbu6IJF/o+ufszuygpcluEu3q/1BMADwev8N99wn/JasLSoGYXgG/pI5mL4riTfRldF4DYJspTr4QVeHUIfA93FwblsF0iLGv3sHT/v7O7qDl0HQUnhgYI49LkKBwQnRxW4t9HTC7LDvpYCkp7bs7LfmVPJPxIjHg9NiakUyTyEJCEHP1e2YehAJ8b0c72wBbfii3rhqBz0VQ/yIOSnpQ3+YVd3JkGV8bd0e4NRKaIE44octAf8wAt8xB+RoqCfXylp54+IEMZmG4qBFJ/OGhuHDqjWWqjWE5AhAfv7ND6KnThWGlqQcfZIgyGwkbfCiWGVc4IZy1vkeJm1lQ6lLtSCXfALUl8flv08jV8vF6lS6X1NlQSJi2LZlm6rlW7zc5UVVbtvTJLJCaY+k3Q3pUqemmAj2I888tvG+hOPhypx/eofieFPpT4+Ap/XaCtGFlLANvRh0PQWrev7T8iLl2yQ/YQ8YL0RpAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+yyy82Pwje5ePxmpb+42YmVOLA+1yPgypUjjIDUzEevwNcMzCyskMwP0BaZP9HnPKwBaYT4fpx3IEELANaWYFbHqJYO7L8EbPurGtoe+mvg1P9XKhcQKEBaYNkD4+UIkCd4uPjjjJUdBocWVzaL64+N5Q3jlwdGIW3t/+L0MpA/3+ttJslNY2kP/IvI8XgxXWBP+b7iBB5qXJKN9S2GR76Hg2KJTObZJqhsY9XjvvITvWhA4GRuAAv+CHQTXECS+1iSXQy0BQcYNnjgDDfA8QKNnP9k0C9rAlaauxhwtyPyxR/Woe9j6kD9kORKSwiF+WgEij9casFKs/mfgF+o1nMHjaVbQTqCBSHeL4m4GgCOcWMNTD0A/iCHc40xLgBGLxSLeivKAzUr1    TDA4+Ar/SjVGKANAHo48bbTCGMjDUsgdtAi0ztYKk17yoV9esqk0l49t1iKVS4fZk+DvE2aAAkhBihUU3PYXDki8ymSekAmxiuyzT4E0QdApgWZSJHh1QosnEhkATrffbtbWDF3UkwNPT/RWPuLoD10MHc0fIvvDamyhn1wPQojqG9Q33yWhzUljwL8/Lax9iPZe0jWdlEYNfHRJnS5HTXVAEgyMI+PToYbb3wJNsaDvKIqb7cxPY3qNq4BeKuN33FYDCXsbhwUMbuIF1fGyP0NYz0NBx0i2yMuVouh8r4+OMlUTbnc8jegU6zi6C1OvSxqgnCqQn93eKJGoROj30ahCsj/qdC7oJAAUCF6fMExVuMkm4jCLb5W3wVfWxhaSf3wkFWZD5HX+4wLu0rz3ZQCgXYSh5CVFBTo7hQ6OA9bU/0gpHAEHC2wzZi10PsC/Rl7m2Rv2cj8ChWkH25AopwCR+lFwGKf2g82PDgm+W027aOeYxOhS1Z619zM04JcS0BBXnJU+4cd1/4don8ZQAPs+cc/6Tu1wXvWZhwfOgtNA/1QYsotlY/cxmozuoxulu5xNyskHArFuNvYexauaoq/XcaQN4rqb4f+TPVCUXfZ+zXZoCyUdAkv4+i3FXpr8rFFdMeaNYy4Qm3lJVxMgrtEzSJRi2GZj3zr5LrQeV9rkw8Fg6jCc+xoOX+vteyFphPbqhHLu6lD8ZJCzpwpz9rBrJhVCm2IytCtHWtinDjktogmke+i71KTp7v5PfvfG4iL3c1Av86eQtqjmoIRPazLvr+hYQ2/5/HYn6FQH1avirTRjGBvs7+di0Y76J3RexZ/Bs22D3GyzA2hs/gDKToE83FN6feevUPnSrv60R2KhKIyP0DvLVCT9h9K7OoHpHTjy44vO2592Hn1q45O+FksPLQym8Zi1pgZhp/2/yg+VP5DxIeUITHiJfOQz1vG1A4ld1T6Y4p1mRWjoMEAM+A9BL7tlbxdTYNNl9tbKFuCR/4EzeE8QQ==c[��O       X   �   /   J   j   S   �   !   4   �   .   3   �       �   �   a   }   b   �   �   |   �   K   2   1   0   �   A   @   �   �   �   c   +   -   ?   >   <   ;   �   �   5   6   7   8   9   :   B   C   D   E   `   �   T   z   R   Z   Y   X   �   �   �            L   M   N   O   P   Q   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   I   [   I   =   o   n   x   �   w   ,   �   �   �   �   �   p   �   z   {   �   �   y   �   �   p   q   r   s   t   u   v   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   ]   �   �   p   �   �   �   �   �   �   �   �   �   �   �   a   a   a   a   �   �-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理    j _�� � j                                                                                        l* 	%�	showdoc文档信息eNozMjTUMzSx1DMyNtczNLQyNrawNOByTMnNzMssLilKLMkv4irNzTNKqko3AQDo9Qxqc[�;Áz) 		+�-showdoc服务器信息eNrLyazITMxLL0jNS7cwU1Dgerq+7fmCxvd7ZpWn5FZl5VQUAEW5ns/c/XTvVLiUD7Ierhf75zxf0f1i/7xnfUvhShQszQyMzI24nraueb53YmaBlaGhpZ6RsZ6JqZ6hoQXX07ZWqLC5kZ6hhZ6ZkZ6pCVduZXFhDsQIKwUUSxS5ns6f/3RCr1V5ebleYTpQYbpecn4uFwClHFVyc[�	�f( 	�showdoc文档eNqNjb0OgzAMhHeegsVrTPipgAmQ4D1QGkGQiVHqVmqfvoGxU7c7352/VeRoESW8tVabm/k+c7BeGd6RoiXnF3JIr4f9rM9Y8DjDWMEwQT/A2ECdQTOdl7qCvrpEjAq1yk5JsjhJDbG3aVRd0Sid3VSuS5WXeYtH4M0aQcNeAhPZcIFOSoSpOPn/Q7C/2y/8fUZtc[�.Y�' 	�showdoc文档eNrLKCkpsNLXLymqNDTUy8pMzE9JzC9KzdNLzs/VzwFyczLz0nMy9XPKilOrMkqBCvL0E1VdTVWd3FQdnVRdLVUtDFQt3UAiFqaqjqZgBlDKWC+jJDcHANKBHOg=c[�l�& 	�showdoc文档eNrLKCkpsNLXLymqNDTUy8pMzE9JzC9KzdNLzs/VzwFyczLz0nMy9XPKilOrMkqBCvL0E1VdTVWd3FQdnVRdLVUtDFQt3UAiFqaqjqZgBlDKWC+jJDcHANKBHOg=c[�	   �l9wNaSmzBWJNqZrb2RWjeV9a2zVWHvuWqRVSJwgoEavTyDbApb1/DSAkM0xc37CejFK8ttkfIvMPXUFhNqOc2qk370DHz4hyWVjP2m9ek1yueKzgnX8yNyddumiReamKksCmOC4hcqarkAQtFhdHKH+9KMFPbdK7qeZ5Uwf01SXFAecLAO918IZiUKV1ckJ4Or/htUxGMFxSl4sgmVMcjhCvXbCsaCeAkfj0PnBtRtX6pvPKQZ5gSLsvHaDsTGZWWpQPhSPF6N4sEHOSRaMWjJmaYKdaUGO2islpZZYZndIcp+s7LqKDfD4rqtCa2eCPPqtvlCRh1nNdMoYnfJizc+az9jIkeNR82UBGumUwhf4HpmThxrg5XIQTUZmgORSnhSiswFFn5C0sZDSj9YAoa60G7FzmZ8rul2Nj0lR3Lhtjd00eTzdwGhNqUtc6UXnmOQBIyEG8ZetdhX21JH/qVlknUsx1pf/Vx/chV0t6mcc5w7nZL5TqbSqvXC5+12dtDlAP04bw9kTsFKdx7UeGHtqRWBuqkxMrD2tzHFxOeMcmir+2L1dXZGMrav5oLIfylVrK2MB2xGrZahvgX6Vi0SwolTFXM/PcnEu0o9hCixOpsjEisOp8shaUzD2yGz+UjALT+rnOIETa6c4K7tn7SbcstCgnUsa3IigsqlT0xwi9mDOJMjMeINdCaZDXnX6b/vwBb16Ct+o8bqGZYJQrMb6cb1HLjMCeZI30wm36cIxFDhlSpQ896JRCYDMABZprVbEWNiM0az+27TbIGI3DRbiNZVD7j+jJxiX4c0u7P64JvJqYDBWiULpkpsKGmVF5eSazZhZVuOKXcgauBDD7meE1THreB6mM5iJTrpoLgs1Cmc0+iWzCjE6OXpAPKJSHR+Yz5/rOQj6a2c9ARJsy3EJ6Ej/bd36dQnunAD1aLxQPyzTDru/ay4+MZLzzkzaVtHj4QlApIQd+FpxcEn5KqqpAyrx6dUrHZ993hFQB9WqjTlprI9a2VfGw9mq5   �Z0d7394rSMQi1ZvXvZVVLUScsErnNhw7HfmhJ736CkRDrjm4RKcOK2dMWtm1APjKPtmPMzCPT3/PdsejcROKbNQqpCMF3NmYQzC0QWL/B9d/ZgdiRU4E8ORu1/rCUAEgtf5b77hPuW1YGlRMwrBN/SRzMXwXUm+ja6KwG0SVCnXwwu8OoQ+BrqLQ3CZFiiLGvtsjZ93dnd1h66DoKTwQEEc+lyFDYKTowqc2+juBdVhH0sBSc/tWdnvzKnkH4kRj4eWxFSKZB5CkZCDnytqGDrQiTH9XC9swan4ol44Kid91YM8CPlpa0N82AmdSVBj/C3d3mBUiijBuCIH7Qt+4AU+4o9IUbDPr5Ss80dESGOzDcVAik9njY1DB1RrLVTrCciQgP19Gh/FThwrDSPIOHtywRDYlbfCiWGVc4IZy1vkeJmNlQ6jLtSCXfALUl8flv08zV8vF6ky6X1NlQSJi2LZlm6rlW7zc5UVVdo3JsnkBDOfSbq7UiVPXbAR7Ece+W1j/YnHQ424fvWPxPCnUh8fgc9rdBQjCylgG/rMZ3qL9vX9J+TFS3aR/YQ6YLMRlAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+qy282Pwje5ePxmZb642YmVOLA+1yPgypEjjIDUzEevINYMzCyskMwPMBaZP2XBDjaANEJ8P847kGAEAG9LMKtj1EoH9l8CtuNVDW1f+mvgNP5XKgcQaEDaYNkD4+UIkCdEuPjjjJUdhoAWVzaL64+N5Q3jlwdGIW3t/+KMMpA/3+ttJslNY2kP4ovI8XgxXWAP877iBB56XJKN9S2GR76HjWKJTOaZElT2seqpXvnBXTQgcDI3gAV/BKYJLiDJfazILgbaggMMGyJwhhvgeIFmzn9y0S9rAlaauxhwtyPzxR/WYe5j5kD/kORKSwiF+WgEmj9cGsFKd/M/Ab9Qq+cOGku3gnQEC0K8XxJxNQBs48YauHoA/EEO5xpjXACMXmgW9VaUB    2pWqmGAxyFW+lGqMUAbAPRw4m2nE8ZGGpZA7mBEpmewVJrOlAv7dJdJpb16brGUq1w+zJ4GeZs0AQpCDFCopuawuXJE5lMk9YBMjFdkm30Isg+AzAoykSLDqxVY2JHIAky++/a0sGLupJgZen6isfUXwXqYYO5o+BbfG1JlDfvgeBRG0N9gvvksD2tKEQX4+W1j7Uey95Cs7aIwauKjTehyO2qqAZBkYB4fvRlurPgSKMaDvKIqb6eY7kZ1imsA3krxOw6PoYXdnYMmZgfx4soYub9hrKdho0Nke8TFazFU1uuDnUzVlMstfwM6xSqO3uLUy6ImCKca9HdHJGoMOnH6bQyqgPyfBr0LBgkAFaLbF2xjNUGyiSjc4mv1XfC1hWGU1A8PWZf5EHm9z7iwq3S/m1Ig0E7iEKqSggLdnUIH50E1tQ9SClvA0QJTxryF2Rfoz9jbJHvLRuZX6CD9cAMK5RQ4Si8CFvvUfvDhwTHJb7PbPho5diN0yUrvmpt52pBrCWjIS45u/7Dj2r9D9C8DGIA9//gnfac+eM/ajONDZ2FooB9KTLml8pHbWG1Gl9HN0jnuZoWEQ6EYdxt7z8JRTfG3yxjqRlH97TCfqV5o6i5bX5MNylJJl/Ayjn5bobcmH1tENdasYcQVaisv4WISnCVqFolaDMt85Fsn14XO+1qbfCgYRBWeY1vL+Xut5Sg0nfhWjVjWpg7FSwY5a6Z8105mxa1SakNUhqp2rIlx4pDbIlpEvou+S02e7ub37H9vIC/2NAPzOnsKaV/VFIzoZl2O/Q0Na/g9j8f+DIX6sHpVpINmBHub/e1cNNpBz4zes/gzGLZ9iJNlbgidxR9I0SG4H9eUfu/ZO/ReSasf3aFIKCrzA/TcAj1p/6HEjn5ASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gn/j+JD5T9EfEgZEiNeMg/1vGVM7VByR6U/ptiUWXEKBgxwA95DENteydvVNNh0ub2FsiVE5E+Qciyec[��7    {  {                                                                                                                 �r# 	1�showdoc框架说明文档eNqlWWtT21Ya/q5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYUtQI0sOboQ6HQy5m4CBloIBAIJbrilDXbSpuDYUP5LqyPJn/IX+h4d2ci2zKa7/uCLdN7nvT/nPXI76uNVvPYCryfD5Ou/LrwbbDl/Kdja0hZsbWsNhxKy9DUXVUOqPMSLXBCWMO1IPzo2F3eNzITxeP/N4eoX/bx4+/on1y++OZyxcttmcQIfJvHcd8bSpJF5iudGrOQo6qqswtkZPL7rLJmaxhMz3b5+VU2EQ6G7d+8Gb7NiVJC0WDAqhuKsqLFCSCWiif7ExWaGOXPGnM3hH0aN+T1cLDCRSIQReFEbPCf28eLgufiQckc4B2vfsW+dOaMXn5obw8b0FJ5b0vPTxvoWnp8tjafNo6y5OqYfZ43F17DsTCnz2nyUpTf044wxnDu5TZCiCRTkxIEgN8jGEwKH7F+IYegS8gPc1Yv7IGU8eGGks7iwUIW2N2XjgC4EivDRA7O4YDweYxicWsc70yDnvoy3R8BaCC7D3Lt3j4HAIPSfjg9Ko7vm0c904ZvDlJFaspLjeG++fGWK+X1x7ffFJJtICHyUVXlJRF4vXFiEDFIpEBlBiMpFJbGX70PeL+qO42aVqPNGMbhBVWY9xK3JH3F2VX899ZY4MhfjlSCksgank1x3Y3hLsz09vHrtRi1Ap3P9VIBFAEDBYNArCsajV3hz1dOZapyqXzS4cSjomIdL+LsjvbhpZWbwwRYeP2iIWUaRRA8QhMef4/GXePKIFGAjYZLfxsKnapYlTeW8ZJF1kDMXTxdW2T7FU9apRXBezxeMqWf45QMaWQ8gkpcYq7I9rOJhS   �   �QVXQ2rKXJFoX7r2RmbVWN63xlaNteeuRVqFxAkCavT5BLItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAqO04p0b63Tvw4ROSXDb2k9ar1ySXKz4rWMePzN1ply5aZG6qsiSACY5bqKzpCgRBi9XFEepPP1rQc6vkfppZzvQxTXVJccDJMrB7LZyRKFRZnZwAqv5vWB2DERyn5MUiWMYkhyPUayccC+opcDQOnR9cu3GlvvmcYpAXKMLOazcYG5OZpQblQ/F4MYoHG+ScZMGoJWOWJtiZFuSovVJSaolldock98nKrqvYAI/vuiq0dibIo9/qCxV5mNVMp4zRKR/W/Kz5jI0cOR41XxagkU4pfIHvkTl5qAFeLgfRZGQGSC7lSSE6G1D0CUkbCyn9aA0Q6kq7ETuX+bmi29X4mBTFjdvW2E2Tx9MNjNaUusSVPnSMSR4wEmIQf9lqV2FPHfmfmkXWuRRjffl/9cFd2NWifsZx7nBO5juVSqvaC5e739VJmwP047QxnD0BK9V5XOuBsadWBOamysTE2tPKHBeXM86hqeKP3dvVFcnYupoPKvuhXLW2MhawHbFahvoW6Fe5SAQrSlXM9fwsF+ci/RimwOJkikysOJwqT6w1BWNPzOYvBbPwpH6OEzixdoqzsnvWbsItCw3auaTBjQgqmzo1zSFiz+VMgsyMN9iVYDrkVaf/tg9f0Kun8I0ar2tYJgjFaqwf13vkMiOQJ3kznXCbLhxDgVOmRMlzLxqVAMgMYJHWakWMhc0Yzeq/TbsNInbTYCFeUznk/jN6gHEZ3uzC7o9rIq8GBmOVKJQuuamgUVZUTq7ZjJllNa7YhayBCzHsfkZYHbOO52E6g5nopIvmslCjcESjXzKrEKOTowfEIyrV8YH5/Lmeg6C/dtYTIMG2HJeAjvTf1q1fl+DOCVCPxgv1wzLtsPu75uITIznvzKRtFT0dngBEStiBrxUHl5Svopo6oBKfXr3S8dnnHQF1UK3amJPG+qiVfWU8nK1a3   �tnx/ofXOgKxaPXmZV9FVSshF7zCiQ3HfmdO6HmPnhLhfGseLsGB09oZs2ZGPTCOsm/Gwyzc0/Pfs+3RSOyUMgulCsl4MWcWxiAcXbDI/9HVj9mJWIEjMZy4+7WeAEQgeJ3/5hvuU14LlhY1oxB8Qx/JXAzfleTb6KoI3CZBlXI9vMCrQ+hjoLs4BJdpgbKosc/W+Hlnd1d36DoISgoPFMShz1XYIDg5qsC5je5eUB32sRSQ9Nyelf3OnEr+kRjxeGhJTKVI5iEUCTn4uaKGoQOdGNPP9cIWnIov6oWjctJXPciDkJ+2NsSHHdCZBDXG39LtDUaliBKMK3LQvuAHXuAj/ogUBfv8Ssk6f0SENDbbUAyk+HTW2Dh0QLXWQrWegAwJ2N+n8VHsxLHSMIKMswcXDIFdeSucGFY5J5ixvEWOl9lY6TDqQi3YBb8g9fVh2c/T/PVykSqT3tdUSZC4KJZt6bZa6TY/V1lRpX1jkkxOMPOZpLsrVfLUBRvBfuSR3zbWn3g81IjrV/9IDH8q9fER+H+NjmJkIQVsQx/5TG/Rvr7/hLx4yS6yn1AHbDaCUoE1ZPOl9WoL1qj9snQX5PRciowPW5mcdbxIHj1GMlY1WUS9nKBgWl12u/lR+CYXj9+szBc3O7ESB9bnegRcOXKEEZCa+egVxJqBmYUVkvkBxiLzpyzYwQaQRojvx3kHEowA4G0JZnWMWunA/kvAdryqoe1Lfw2cxv9K5QACDUgbLHtgvBwB8oQIF3+csbLDENDiymZx/bGxvGH88sAopK39X5xRBvLne73NJLlpLO1BfBE5Hi+mC+xZ3lecwEOPS7KxvsXwyPewUSyRyTxTgso+Vj3UKz+3iwYETuYGsOCPwDTBBSS5jxXZxUBbcIBhQwTOcAMcL9DM+U8u+mVNwEpzFwPudmS++MM6zH3MHOgfklxpCaEwH41A84dLI1jpbv4n4Bdq9dxBY+lWkI5gQYj3SyKuBoBt3FgDVw+AP8jhXGOMC4DRC82i3oryQ    M1KNQzwOMRKP0o1BmgDgB5OvO10wthIwxLIHYzI9AyWStOZcmGf7jKptFfPLZZylcuH2dMgb5MmQEGIAQrV1Bw2V47IfIqkHpCJ8Ypssw9B9gGQWUEmUmR4tQILOxJZgMl3354WVsydFDNDz080tv4iWA8TzB0N3+J7Q6qsYR8cj8II+hvMN5/lYU0pogA/v22s/Uj2HpK1XRRGTXy0CV1uR001AJIMzOOjN8ONFV8CxXiQV1Tl7RTT3ahOcQ3AWyl+x+ExtLC7c9DE7CBeXBkj9zeM9TRsdIhsj7h4LYbKen2wk6macrnlb0CnWMXRW5x6WdQE4VSD/u6IRI1BJ06/jUEVkP/ToHfBIAGgQnT7gm2sJkg2EYVbfK2+C762MIyS+uEh6zIfIq/3GRd2le53UwoE2kkcQlVSUKC7U+jgPKim9kFKYQs4WmDKmLcw+wL9GXubZG/ZyPwKHaQfbkChnAJH6UXAYp/aDz48OCb5bXbbRyPHboQuWeldczNPG3ItAQ15ydHtH3Zc+3eIvjKAAdjzj3/Sv9QH71mbcXzoLAwN9J8SU26pfOQ2VpvRZXSzdI67WSHhUCjG3cbes3BUU/ztMoa6UVR/O8xnqheausvW12SDslTSJbyMo99W6K3JxxZRjTVrGHGF2spLuJgEZ4maRaIWwzIf+dbJdaHzvtYmHwoGUYXn2NZy/l5rOQpNJ75VI5a1qUPxkkHOminftZNZcauU2hCVoaoda2KcOOS2iBaR76LvUpOnu/k9++0N5MWeZmBeZ08h7auaghHdrMuxv6FhDb/n8dj/Q6E+rF4V6aAZwd5mfzsXjXbQM6P3LP4Mhm0f4mSZG0Jn8QdSdAjuxzWl33v2Dr1X0upHdygSisr8AD23QE/S90ml9zFASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gm/R/Gh8gsRH1KGxIiXzEM9bxlTO5TcUenFFJsyK07BgAFuwN8QxLZX8nY1DTZdbm+hbAkR+ROtSCx+c[��.   O O                                                                                                     �' 	%�showdoc项目信息域名：
https://hsl2.jiaodaoren.com

服务器：
ip：39.106.214.242
项目路径：/alidata/www/hsl/lkas

git分支：lkas

数据库信息：
lkas_shop

AppID(小程序ID) wx3d60502�. 	%�showdoc
项目信息仓库服务器信息：
39.106.214.242
用户：root
密码：Hfy7318510

后端:
git地址：git clone git@39.106.214.242:/project/tryineshop.git
代码分支：lvshengny
代码路径：/alidata/www/hsl/lvshengnongye


前端：git clone git@39.106.214.242:/project/qianduan/qianduan_shop.git lvshengnongye
代码分支：lvshengnongye

数据库:
39.106.214.242 root 959245
库名：lvshengny

域名：https://hsl.jiaodaoren.com

后台管理账户：tryine2028  tryine2018


邮箱号码：lvshengagriculture@126.com；登陆密码：lvsheng888
AppID(小程序ID)	wxc249ebeb61c862e6
AppSecret(小程序密钥) 9751db6742b3ef2fe892a409eacb5a96
c\QF   " "                                                                                                                                                                                                                                                                                      �r, 	�-showdoc文档eNqNTz1PwkAY3u9XdOl6pZSS1omikBANiUKispHj0g+PFtsDAhMOajQaYDMu6KITkhgTE1D4MVBbJv+CV0zExMWb3vf5eJ/nDEprG4JA3ZYoQsssO5Wy42IbIqcqELYS09aJKZCGh9tGnQlsocxnZD6d5bU0n1F5Jcar2QhRZF6TVwOjJGjQKgFANymHiGNjjk0pSYViLAnjYgLGE/ENoeY6FkZUQI5NXYcQ7K6CohQWBpnl/xdc/NcL/MHA711/vt02m01IvLZ1ZEU/A+HpNHwaLcZ97htMiUkpIjh/dBbcnTDDilDYA8FguJjdMwhoCGHP28atXIWtO0Utl1DlzGHJQwf5ZH1NFzByMWWSRl3SjZKnxdrH+ZImoU3PtNC+vqUUdmvFPRAMp6zdvNMLJrPw4nnx3vUn4+Cx/3HZmXf6YHkzW55fsZLhy4PffWX3fuu4ddefql9tu8E3c[�e�f+ 	�showdoc文档eNqNjb0OgzAMhHeegsVrTPipgAmQ4D1QGkGQiVHqVmqfvoGxU7c7352/VeRoESW8tVabm/k+c7BeGd6RoiXnF3JIr4f9rM9Y8DjDWMEwQT/A2ECdQTOdl7qCvrpEjAq1yk5JsjhJDbG3aVRd0Sid3VSuS5WXeYtH4M0aQcNeAhPZcIFOSoSpOPn/Q7C/2y/8fUZtc[�?�    q V q !                   N 	I9showdoc
用户资料是否完善接口欢迎使用ShowDoc！c\JjՃb 	%�showdoc项目信息域名：
https://hsl3.jiaodaoren.com

服务器：
ip：39.106.214.242
项目路径：/alidata/www/hsl/kunhongxuan

git分支：kunhongxuan

数据库信息：
kunhongxuan

小程序账号：3403419134@qq.com
小程序密码：khx12345678

AppID(小程序ID)	wx410329029dd54847
AppSecret(小程序密钥) 00320da6e4816631a52d405ed9bf828c

微信商户
商户号：1521230041
操作密码：khx@2019
API秘钥：0j1aoROH5L5q51FTolTrD54No4BCgXiOc\=G��' 	%�showdoc项目信息域名：
https://hsl2.jiaodaoren.com

服务器：
ip：39.106.214.242
项目路径：/alidata/www/hsl/lkas

git分支：lkas

数据库信息：
lkas_shop

AppID(小程序ID) wx3d60502d9e2e1e7a
AppSecret(小程序密钥) 843c0d8e36fcdc85660a8f8af13033b9

雷克艾森小程序1686560185@qq.com   密码a13875819033

商户号：1523746051

API密钥:grs9R7cuiV3z2FHXD7rqavXSsWZtSB4q
c\=M|                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �r- 	�-showdoc文档eNqNTz1PwkAY3u9XdOl6pZSS1omikBANiUKispHj0g+PFtsDAhMOajQaYDMu6KITkhgTE1D4MVBbJv+CV0zExMWb3vf5eJ/nDEprG4JA3ZYoQsssO5Wy42IbIqcqELYS09aJKZCGh9tGnQlsocxnZD6d5bU0n1F5Jcar2QhRZF6TVwOjJGjQKgFANymHiGNjjk0pSYViLAnjYgLGE/ENoeY6FkZUQI5NXYcQ7K6CohQWBpnl/xdc/NcL/MHA711/vt02m01IvLZ1ZEU/A+HpNHwaLcZ97htMiUkpIjh/dBbcnTDDilDYA8FguJjdMwhoCGHP28atXIWtO0Utl1DlzGHJQwf5ZH1NFzByMWWSRl3SjZKnxdrH+ZImoU3PtNC+vqUUdmvFPRAMp6zdvNMLJrPw4nnx3vUn4+Cx/3HZmXf6YHkzW55fsZLhy4PffWX3fuu4ddefql9tu8E3c[�_