SQLite format 3   @    �             ]                                                � .Y   �    ����                                                                                                                                                                                                                                                       i	}W indexsqlite_autoindex_sqlitebrowser_rename_column_new_table_1sqlitebrowser_rename_column_new_table       P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�\�tableuseruserCREATE TABLE `user` (
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
pagepage cataloguser   page_history%page_history �    �G�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          j !    MM!sfd454dvfdb3ec2ef78a331ba99b289ef3fe5062364dd0b92a8165633e826677852560101b1471249214W:�7W:�>   �#    M tdhtd5e65td92420151b927360e78fb396     M hslb817ea5dc158f4a3e0977d5b11d352390[��@     M heshenglea89da13684490eb9ec9e613f91d24d000[��>[�~= 	    M showdoca89da13684490eb9ec9e613f91d24d000W���\|��   
 T �D��*�n � T                                                        \D 	�%671acf4749ccac5d01c4f2d1f22b81a9b70522ebd1269aee8098c4cb7bdf4631\�C�192.168.28.1\|��\C 	�%9f8c5a8763f4f2f4c8c4302af1aa07b84a3c0eb2b802661a441fffef13f4a6f9\���192.168.28.1\vU�\B 	�%887eee40993aec0e00d6725329832cbfd1e7b09e92a9001a2b018731b5590ade\쎦192.168.28.1\u�\A 	�%d08d2ab15ff75041cae3a488e2d0cbb12c49b37e77733d2dc65dffbd4f4cc5ca\�Rn192.168.28.1\t�n\@ 	�%b1c4597ae8b86ce4fc4cd3f2928dee82dc477286dd48f66245f2c9a26ee6a75c\�W_192.168.28.1\s�_\? 	�%beaa4bd8e750352eb7687799798f8501fe86ea804059e82e715bd4202f78653c\�W^192.168.28.1\s�^\> 	�%ef0a31051bcd445fa4c9fb6bac36dc76e6cd72638a39120cbcaf5712d19fddb1\��192.168.28.1\sd�\= 	�%29e3d7f93394c299d9264ed8ed947c935775564c4283d91baf7df7d73e07ee40\��192.168.28.1\sF\< 	�%d97efc1ea62198f1528435262304aec88d6fd9c46a18b5767e6f5691c39eece0\�&L192.168.28.1\oL\; 	�%ea97256a2cdf4a5b6703a1b4563d955ba12115c6d06df50979b6e8c45c55b8f2\㤟192.168.28.1\l��      �??           Q��  � �     (�*                    ��xsqli��*                    V �renam��*    �A?    �A?    6 Lrowse�A?           Q��  h ��   0�*    �A?    �A?    �W in                        tebrowser_rename_column_n   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
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
   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          		   SX   �������������������������~ytoje`[VQLGB=83.)$�������������������������|vpjd^X8uTtpoFcwIbEt2mjABqMlNMSaPHkJMQ2NUv+Z7O755L/QudvzvEpKIY/d42B35ju7OzOf5a0z9vGaXZ7Rah34oOL0t1ij4UzOZ+MOAA952d532jgBx75mF9uvXzz1BG9Ms5SKRjc3H6xpG9FsSY2Wjbwe1fMF1TDzuq9mBz/puOEFPH/28hXQxjb7Ik4QU9r8LNHJ7rTySeIXI3pUkxx7yNp74O5WzG7kJda2JcPU1WJBEpfCEChlDeOtpufCXmpX+bct8IJosz83s/YVPz0HZ9Ki3SPeu7n9VQMg5B3+hETyuq7p6TUtl4+kyOqKMOayZhaXQoLrsprDZSQWWQks/u08czz2KIHfwjv30OaQX45YfXvhKuhaueRtFyeBEYuWNlV/t8TD5ONkIpZ8sghazxpmel0rqMVAtup73  �  �   8�   9�   :�
   B�	   D�   z�   Z�   �   �|   {   z   Lx   Nu   Ot   Ps   Qq   �o   �m   �i   �h   �f   �e   �d   �c   �a   �`   �_   �]   I[   �Y   [X   =W   oV   xU   �T   wS   �Q   �O   �N   �L   pJ   �H   {E   �C   �B   y@   �>   q<   r7   s5   t4   u3   v0   �-   �,   �*   �#   �    �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �%   �   �
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
        )      0�=    ��=    0X\                  Y       �*�     �*�                    Q       0        �=    ��=    0�=                                            �      Q       �)�     �)�     �=    ��=    ��=                                    1       X       ��=                                  1       �&�     �n5    Y       �                      ��=    X�=    0�=     �=                            1                     ��=                   Y       0                     H�=     �=            ��=                            Y       �      �              ��=    ��=    �=    ��=                            1       �E      ��=                          Y       �E      �              (�=    ��=    �=    ��=                            !       F      :       X�=    �      !       x�=    x�=    H�3                    1       ��=    ��=    H�3                    ��=    @�=    0X\                  Y       �*�     �*�                    Q       0       ��=    � ��mC���j@�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    % 		云咻咻showdoc\NZj\�E\% 		坤宏轩showdoc\3�\=G�( %		雷克艾森showdoc\3�\=M|(
 %		绿盛农业showdoc\%�\c�`(	 %		绿色果蔬showdoc\%��\4F: 7		小程序小程序项目管理showdoc\��\�M�� #		云咻咻showdoc\NZj" 			项目showdoc[�;�\l�[( %		绿色建筑showdoc[��\/�" 		团约showdoc[���\ ��   			时" 		新邵showdoc\NJ\u��7 %		蚂蚁时工小程序showdoc111111[���\�    q k7f� qE   7                             i#}W indexsqlite_autoindex_sqlitebrowser_rename_column_�w7�Atableitem_topitem_topCREATE TABLE `item_top` (
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
        )36G! indexsqlite_autoindex_item_token_1item_token   �    C����������������������                            � !#�}ertgtd4fv4data-副本
    
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
|:-----  |:-----|-----                 E   `   R   Y   X   �   �   �   �   �   �   n   ,   �   �   �   �   �   �   �   �   
   H ���������������������~xrlf`ZTNH                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    

				
                                                                              	�            p:!    	�            H=!                          	�            �8!                                                                    	�            >!    	�            �=!                         	�            89!                                               w =                                                          XL    h8!                                        XL    >!                                        XL    �=!                                       XL    �2!                                        XL    89!                                        XL    �9!                                                                                                                                                                                                                                                                        
   � �����������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  

				   ����~aJ0�����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                接口c\l�� %项目信息c\NZ 接口
c\Jj� 后端c\��	 %项目资料c\N_ api文档c[��W 文档c[�;� %项目信息c[�� %	项目信息c[�� 文档c[���   
 前端c\�� %	数据字典c[��� 	api接口c[���
   � �������������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  

				   �    !���������������~xrlf`ZTNHB<����60*$ ���������������������|vpjd^XRLF@:4.("
����������������������ztnhb\VPJD>82,& /use � � � � � �~~}}||{{zzyyxxwwvvuuttssrrqqppoonnmmllkkjjiihhggffeeddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBBAA@@??>>==<<;;::99887766554433221100//..--,,++**))((''&&!!  %%$$##""

		    EE   � �A��!�            	�� 	          �K�    	�            XN�     �                   	��           �L�     �                                         w                                                                                                                                                                                                                                                                             _ _ab0785c3bc9686b11eac179b11e80ba00733290661c44b476c306fabd35107d105d1a6f22d1942023770\l�C_ a_6ea6d0119e9004027792a9042cd6889612448238845cfaac33375f804636524e3da77487a8313633641\F��^ __46baa3dcbb38af94b949c4a5af1008036676576799bbc3df0f48aa89423d8fa35314cb699359445620\s] _]8fd87496760ccdad14659c4e4ab352a9417268788f4389380bcaeb09d50187c9965cd37ff88245539\r�] _]d6b5fe7b1f0273b920a6bbe0dd88ea931107876807cc9cc7f11bd58e2004e20c9524f0a3d29901329[�Q^ 	_a3c929085d89fc3ba8ec7360646a2a60e53915931321d429e9b023b13f1382435a892ce6831614369875[��K
   � �Iw��                                                                                                            Q     ؾ���  �ќ                            B                     *                                              "                       %       Y               x�             ��    x�      
       ��                                                                                                                                                                                                                                                                                                                                                                                                                      -_b0785c3bc9686b11eac179b11e80ba00733290661.a6ea6d0119e9004027792a9042cd688961244823884-_46baa3dcbb38af94b949c4a5af100803667657679-_8fd87496760ccdad14659c4e4ab352a9417268788-_d6b5fe7b1f0273b920a6bbe0dd88ea93110787680,_	3c929085d89fc3ba8ec7360646a2a60e539159313� � ������                                                                            �    ���    ؠ�              � �      �3��3�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      00000                    �/                            �/                            `��G                                          �                     ��������                �              �      ��     ��      
          !            	 		\r�
 	\r�
 	\r�   	\r�   	\r�
 	\l�F    �  �                                                                                                                                                                                                                           � 			�showdoc登录
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



c[�u     � j                K 			eshowdoc注册eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[����G 				�]showdoc登录eNrdk99rGkEQx59v/orFxyNXo7XS+jcUWvrjWSWKPUg8uTtpoFcwIbEt2mjABqMlNMSaPHkJMQ2NUv+Z7O755L/QudvzvEpKIY/d42B35ju7OzOf5a0z9vGaXZ7Rah34oOL0t1ij4UzOZ+MOAA952d532jgBx75mF9uvXzz1BG9Ms5SKRjc3H6xpG9FsSY2Wjbwe1fMF1TDzuq9mBz/puOEFPH/28hXQxjb7Ik4QU9r8LNHJ7rTySeIXI3pUkxx7yNp74O5WzG7kJda2JcPU1WJBEpfCEChlDeOtpufCXmpX+bct8IJosz83s/YVPz0HZ9Ki3SPeu7n9VQMg5B3+hETyuq7p6TUtl4+kyOqKMOayZhaXQoLrsprDZSQWWQks/u08czz2KIHfwjv30OaQX45YfXvhKuhaueRtFyeBEYuWNlV/t8TD5ONkIpZ8sghazxpmel0rqMVAtup734P7i+RERf36her7Z2H9G0hq0fQLykc7am42rsewL86PXX5zygfHvFml++3ZuBtHKzscTCsdoQba+4BcALDukPY64uhp69Cx7dvRCXYAO8+/1qb9g+nxFe/shF0CMO/iIMtL0MkyAVDIHeShNgyfK1RIhvwDQZIB75glEmUZg10YibtvAKR3uhUUzRJQWqJ2lqidBVZKweHe35uJpUIsxTejYo4GsZBNtAgMiRXAK2RzgpdlRGBMhMrbyJsj0WGVoFqogGCSIbwxQ8hkMuR/oxxzCuUapn25eXd2TfGbhm2bt+tvA0P8FIiF78S13OepzJsjXozP9/2fDcBv2c5/tw==c[��J 				eshowdoc登录eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[���   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           �h{ 	=�ushowdoc头部统一请求参数eNrj0lXISE1MSS16sX77s41NT/ubnk3dwMXFVQNhPZ3QW/N84+6n87prXqzf8mxGXw1XjZUuCCgoQBk1UC5OANSSnJOZmleiW1JZkKpQU1xSlJmXXvN03aJnHdufr14PMf9xw4TEgoKaguTHDROBOhJLSzJgSkFmPOvreDa3+fmCxvd7ZjklFmcmx3uWZZmlRgVV+IZUGFVmVpbmRZXluVsEmZkDdZfkZ6fmIWsHCwAlChLTU3XzSnMVajLzSkAST/dOftrZ+3LhVqDRMPmczNzMErCCmmfr+4Fyz+YuBIZFDQCMRoJeb\���   ^ �^                                                                                                                                                                                                                                                                                                                                                  �\z 	=�]showdoc头部统一请求参数eNp1kEsOAUEQhvd9irmAC7iBU8iY6dBBzzOxqQ0LIZ4LIyTisSIShoRMQnAZ3T1uoTsGsVCrv/J9fyoplNIKWDexG4cR39dYr8aDHUIIXon1OyD2ZzZtQRwe+KgLCNIpNZqWBEjWvyMrZStHSlgDz3cJzQNvtvjkxHqRRIZlSkCor0wx29xvi8e6HYdVMa9KbOueV7Fc891VFgvrL+g4WcvGlPxQxxHjM7sEimRMaVVwzijofqK+TWDXrbz1dYlyKTGKWaqX8UcTgxVvRPIPvDHko6NY7uAJQGKKtQ==b\��%�@y 	=�%showdoc头部统一请求参数eNqredrf9GzqhqcTemueb9z9dF53zYv1W57N6KvhqrHSBQEFBSijBsrFCYBacvOTMnNSFWqKS4oy89JrnnV2P5uz62n/dqBUcn4KUCIzrwSk8vn8tU/2L3y5qufF+sbnCxqB0gWJxcXl+UUpML0gVU/Xt0EkCwvj8wtS8zJRZAsLn8/c/XTvVJCMZwpQVXlqUnJGYglUKUxlzdN964B2IdRmgtTmZSZnx+cl5qbClT2fsuJZx3ZgODzrmPZsxtbnyzfUAAAS4H9Pb\���    �求方式：**
- post


**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|mobile |string|手机号|
|password |string   |密码|

**返回参数：**

 ``` 
 {
  "code": 1,
  "msg": "注册会员成功",
  "data": {
    "token": "user&app@218e5745f9afff176a0dc11da1a562e5",
    "refresh_token": "user&app@218e5745f9afff176a0dc11da1a562e5",
    "expire_time": 0,
    "user_id": 2028,
    "user_name": "测试账号1",
    "nick_name": "测试账号1",
    "mobile": "13262957595",
    "avatar": ""
  }
} 

 ```



 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |1：成功 其他值：失败|
|msg |string|提示信息|
|token |string|token|
|refresh_token |string|刷新token|
|expire_time |string|过期时间|
|user_id |int|用户id|
|mobile |string|手机号|


c\��                                                                                                                                   
   @� �����������������~xrlf`ZTNHB<����60*$ ���������������������|vpjd^XRLF@:4.("
����������������������ztnhb\VPJD>82,&      � � � � � �~~}}||{{zzyyxxwwvvuuttssrrqqppoonnmmllkkjjiihhggffeeddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBBAA@@??>>==<<;;::99887766554433221100//..--,,++**))((''&&!!  %%$$##""

				
   J$ ���������������������|vpjd^XRLF@:4.("
��������������������|tld\TLD<4,$                                                                                                                                                                                                                                                                                                                                                                                                         � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �~~}}||{{zzyyxxwwvvuuttssrrqqppoonnmmllkkjjiihhggffeeddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFF   #p://xx.com/api/user/register `
  
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


W:��                                                     &KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   *+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   (QVXQ2rKXJFoX7r2RmbVWN63xlaNteeuRVqFxAkCavT5BLItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAqO04p0b63Tvw4ROSXDb2k9ar1ySXKz4rWMePzN1ply5aZG6qsiSACY5bqKzpCgRBi9XFEepPP1rQc6vkfppZzvQxTXVJccDJMrB7LZyRKFRZnZwAqv5vWB2DERyn5MUiWMYkhyPUayccC+opcDQOnR9cu3GlvvmcYpAXKMLOazcYG5OZpQblQ/F4MYoHG+ScZMGoJWOWJtiZFuSovVJSaolldock98nKrqvYAI/vuiq0dibIo9/qCxV5mNVMp4zRKR/W/Kz5jI0cOR41XxagkU4pfIHvkTl5qAFeLgfRZGQGSC7lSSE6G1D0CUkbCyn9aA0Q6kq7ETuX+bmi29X4mBTFjdvW2E2Tx9MNjNaUusSVPnSMSR4wEmIQf9lqV2FPHfmfmkXWuRRjffl/9cFd2NWifsZx7nBO5juVSqvaC5e739VJmwP047QxnD0BK9V5XOuBsadWBOamysTE2tPKHBeXM86hqeKP3dvVFcnYupoPKvuhXLW2MhawHbFahvoW6Fe5SAQrSlXM9fwsF+ci/RimwOJkikysOJwqT6w1BWNPzOYvBbPwpH6OEzixdoqzsnvWbsItCw3auaTBjQgqmzo1zSFiz+VMgsyMN9iVYDrkVaf/tg9f0Kun8I0ar2tYJgjFaqwf13vkMiOQJ3kznXCbLhxDgVOmRMlzLxqVAMgMYJHWakWMhc0Yzeq/TbsNInbTYCFeUznk/jN6gHEZ3uzC7o9rIq8GBmOVKJQuuamgUVZUTq7ZjJllNa7YhayBCzHsfkZYHbOO52E6g5nopIvmslCjcESjXzKrEKOTowfEIyrV8YH5/Lmeg6C/dtYTIMG2HJeAjvTf1q1fl+DOCVCPxgv1wzLtsPu75uITIznvzKRtFT0dngBEStiBrxUHl5Svopo6oBKfXr3S8dnnHQF1UK3amJPG+qiVfWU8nK1a3   )tnx/ofXOgKxaPXmZV9FVSshF7zCiQ3HfmdO6HmPnhLhfGseLsGB09oZs2ZGPTCOsm/Gwyzc0/Pfs+3RSOyUMgulCsl4MWcWxiAcXbDI/9HVj9mJWIEjMZy4+7WeAEQgeJ3/5hvuU14LlhY1oxB8Qx/JXAzfleTb6KoI3CZBlXI9vMCrQ+hjoLs4BJdpgbKosc/W+Hlnd1d36DoISgoPFMShz1XYIDg5qsC5je5eUB32sRSQ9Nyelf3OnEr+kRjxeGhJTKVI5iEUCTn4uaKGoQOdGNPP9cIWnIov6oWjctJXPciDkJ+2NsSHHdCZBDXG39LtDUaliBKMK3LQvuAHXuAj/ogUBfv8Ssk6f0SENDbbUAyk+HTW2Dh0QLXWQrWegAwJ2N+n8VHsxLHSMIKMswcXDIFdeSucGFY5J5ixvEWOl9lY6TDqQi3YBb8g9fVh2c/T/PVykSqT3tdUSZC4KJZt6bZa6TY/V1lRpX1jkkxOMPOZpLsrVfLUBRvBfuSR3zbWn3g81IjrV/9IDH8q9fER+H+NjmJkIQVsQx/5TG/Rvr7/hLx4yS6yn1AHbDaCUoE1ZPOl9WoL1qj9snQX5PRciowPW5mcdbxIHj1GMlY1WUS9nKBgWl12u/lR+CYXj9+szBc3O7ESB9bnegRcOXKEEZCa+egVxJqBmYUVkvkBxiLzpyzYwQaQRojvx3kHEowA4G0JZnWMWunA/kvAdryqoe1Lfw2cxv9K5QACDUgbLHtgvBwB8oQIF3+csbLDENDiymZx/bGxvGH88sAopK39X5xRBvLne73NJLlpLO1BfBE5Hi+mC+xZ3lecwEOPS7KxvsXwyPewUSyRyTxTgso+Vj3UKz+3iwYETuYGsOCPwDTBBSS5jxXZxUBbcIBhQwTOcAMcL9DM+U8u+mVNwEpzFwPudmS++MM6zH3MHOgfklxpCaEwH41A84dLI1jpbv4n4Bdq9dxBY+lWkI5gQYj3SyKuBoBt3FgDVw+AP8jhXGOMC4DRC82i3oryQ    M1KNQzwOMRKP0o1BmgDgB5OvO10wthIwxLIHYzI9AyWStOZcmGf7jKptFfPLZZylcuH2dMgb5MmQEGIAQrV1Bw2V47IfIqkHpCJ8Ypssw9B9gGQWUEmUmR4tQILOxJZgMl3354WVsydFDNDz080tv4iWA8TzB0N3+J7Q6qsYR8cj8II+hvMN5/lYU0pogA/v22s/Uj2HpK1XRRGTXy0CV1uR001AJIMzOOjN8ONFV8CxXiQV1Tl7RTT3ahOcQ3AWyl+x+ExtLC7c9DE7CBeXBkj9zeM9TRsdIhsj7h4LYbKen2wk6macrnlb0CnWMXRW5x6WdQE4VSD/u6IRI1BJ06/jUEVkP/ToHfBIAGgQnT7gm2sJkg2EYVbfK2+C762MIyS+uEh6zIfIq/3GRd2le53UwoE2kkcQlVSUKC7U+jgPKim9kFKYQs4WmDKmLcw+wL9GXubZG/ZyPwKHaQfbkChnAJH6UXAYp/aDz48OCb5bXbbRyPHboQuWeldczNPG3ItAQ15ydHtH3Zc+3eIvjKAAdjzj3/Sv9QH71mbcXzoLAwN9J8SU26pfOQ2VpvRZXSzdI67WSHhUCjG3cbes3BUU/ztMoa6UVR/O8xnqheausvW12SDslTSJbyMo99W6K3JxxZRjTVrGHGF2spLuJgEZ4maRaIWwzIf+dbJdaHzvtYmHwoGUYXn2NZy/l5rOQpNJ75VI5a1qUPxkkHOminftZNZcauU2hCVoaoda2KcOOS2iBaR76LvUpOnu/k9++0N5MWeZmBeZ08h7auaghHdrMuxv6FhDb/n8dj/Q6E+rF4V6aAZwd5mfzsXjXbQM6P3LP4Mhm0f4mSZG0Jn8QdSdAjuxzWl33v2Dr1X0upHdygSisr8AD23QE/S90ml9zFASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gm/R/Gh8gsRH1KGxIiXzEM9bxlTO5TcUenFFJsyK07BgAFuwN8QxLZX8nY1DTZdbm+hbAkR+ROtSCx+c[��.    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��}   ;��水，长期远在国外的王思聪也不知道自己家里“有矿”。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">青少年时期的他，和大多数青年并无二致。在英国读书那些年，他不太喜欢和富二代们呆在一起，最要好的两个朋友反而是家庭背景一般的普通人，甚至连卖盗版碟的小伙子也因为一来二去的相处，慢慢熟悉而成了好哥们。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"393\" data-backw=\"524\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF82w5ZjSnqo8C30lEt3ctmQsTrj5N6uFpicibYtBOboia42bdDXjXzeJKIA/0?wx_fmt=jpeg\" data-copyright=\"0\" data-ratio=\"0.75\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"604\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF82w5ZjSnqo8C30lEt3ctmQsTrj5N6uFpicibYtBO   � � �q 	1�showdoc
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
|code |int   |0：�* 	I�oshowdoc
用户资料是否完善接口请求url：
https://hsl.jiaodaoren.com/web/index.php?store_id=2&r=api/user/audit&access_token=goa6IdOzJXJCt165fJtNBQk8UMVcrlMB&_uniacid=-1&_acid=-1&_version=2.6.7

**请求方式：**
- get 

**返回参数：**

 ``` 
 {
  "code": 0,
  "audit": 1,
  "msg": "请去个人中心完善资料!"
} 

 ```


 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|audit |int   |0：未填写资料 1：未审核 2：成功 3：失败|
|code |int   ||


c\c�T   +453\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8m4UY1J4mOrXOVPE8nyy4P9iclJpB0AQHzznYCCjFW37Pfoiblib0PUCtg/0?wx_fmt=jpeg\" data-copyright=\"0\" data-ratio=\"1.3068432671081678\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"453\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8m4UY1J4mOrXOVPE8nyy4P9iclJpB0AQHzznYCCjFW37Pfoiblib0PUCtg/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"color: rgb(136, 136, 136);font-size: 12px;\"><strong>一头秀发的王思聪</strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">那几年，王健林旗下的万达还没完全显山�   --box;\"></p>\n<p style=\"box-sizing: border-box;\">也许是那段时间长期不近女色给憋坏了，成年后的王思聪酒肉穿肠过，女友一箩筐。张予曦、雪梨等一众网红在他身边来了又去了，却始终带不走一片云朵。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">和如今纨绔子弟形象不同的是，学生时期的王思聪成绩非常优异，一度是“别人家的孩子”。中学毕业参加美国SAT考试时，总分1600分，王思聪就考了1550分。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">本科时，他就读的是伦敦大学学院，那是英格兰继牛津、剑桥后第三古老的大学。普通人雅思能考到7.5已经是大学霸了，但入学那年王思聪的雅思分数是9分。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"592\" data-backw=\"   .rder-box;\"></p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"393\" data-backw=\"524\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF81oOCcicZrYosGO75BTQkPnC8UNxx7PlYnzIEWZovjtKvZBIcu0RVtuQ/0?wx_fmt=jpeg\" data-copyright=\"0\" data-ratio=\"0.75\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"640\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF81oOCcicZrYosGO75BTQkPnC8UNxx7PlYnzIEWZovjtKvZBIcu0RVtuQ/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"font-size: 12px;\"><strong><span style=\"color: rgb(136, 136, 136);\">小时候的王思聪</span></strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border   /\"><strong>王健林与朋友合影</strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">几年下来，王健林就接连拿下了大连好几个大项目，到了1994年，他实现了自己四年前在香港立下的小目标，在大连拥有了自己第一栋写字楼。</p>\n<p style=\"box-sizing: border-box;\">此后，他的生意越做越大，资金规模如滚雪球般开始迅速增长，只是苦了年幼的王思聪。那些年，忙于生意、分身乏术的王健林把儿子送到了海外。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">5岁那年，王思聪就被送到了新加坡Swiss Cottage读小学。小学一毕业，他又被送到英国温彻斯特公学念中学，那是英伦最顶尖的男校，全封闭式、准军事化管理，学习、吃饭、娱乐统统在学校里面解决。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: bo   0g: border-box;\"><img class=\"\" data-backh=\"322\" data-backw=\"474\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_png/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8oclDdvGeTUAfZXh7y2JgicibNZENLHRWmJEpT0edX9BLNrssybj9fu9A/0?wx_fmt=png\" data-copyright=\"0\" data-oversubscription-url=\"http://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8HInWiaSpRhrzicghPVPUVqeSoMtic5PVNvkBjoGEFric5EhkX49kPYbuJA/0?wx_fmt=jpeg\" data-ratio=\"0.679324894514768\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"474\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8HInWiaSpRhrzicghPVPUVqeSoMtic5PVNvkBjoGEFric5EhkX49kPYbuJA/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"color: rgb(136, 136, 136);font-size: 12px;   1pg/ica0BbQJ0cyd31khM7otqJ40AkTZeK5hFick3QKJzFCnnj3TXdjQbHSjVc4ufVnoqwE4NibdiaAfCaUmYtT7Fo90Mg/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><strong><span style=\"color: rgb(136, 136, 136);font-size: 12px;\">王健林参军</span></strong></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">回到大连，王健林快马加鞭开启了自己的造富之旅。那时王健林相中了大连的一块棚户区，他先是从自己老战友手中拿到了开发指标，后面又从另一个当银行行长的战友处拿到了贷款，轰隆隆地开动了棚户区改造项目，收获了自己的第一桶金。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizin   2ong></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">谁料朋友一盆冷水泼了过来“小王，你就做白日梦吧。”</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">燕雀安知鸿鹄之志哉，就好比鼠目寸光的朋友哪知道小王同志的豪情壮志。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"289\" data-backw=\"524\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF84a3nKhjibVGHficA1WibIZyY0uu3N47asWe41EVqk3Pvx4Dxj1giac5AVg/?wx_fmt=jpeg\" data-copyright=\"0\" data-oversubscription-url=\"http://mmbiz.qpic.cn/mmbiz_jpg/ica0BbQJ0cyd31khM7otqJ40AkTZeK5hFick3QKJzFCnnj3TXdjQbHSjVc4ufVnoqwE4NibdiaAfCaUmYtT7Fo90Mg/0?wx_fmt=jpeg\" data-ratio=\"0.5513626834381551\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"477\" data-src=\"https://mmbiz.qpic.cn/mmbiz_j   3;\">01</strong><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\">大厦将起</strong></p></section></section></section><section style=\"box-sizing: border-box;\" powered-by=\"xiumi.us\"><section style=\"box-sizing: border-box;\"><section style=\"font-size: 15px;line-height: 1.9;letter-spacing: 0px;padding-right: 9px;padding-left: 9px;box-sizing: border-box;\"><p style=\"box-sizing: border-box;\"><br></p>\n<p style=\"box-sizing: border-box;\">第二年，王健林和四个朋友去了趟香港。第一次到香港的他，沉醉在资本主义的灯红酒绿和纸醉金迷中。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">一行人住在尖沙咀的君悦酒店，晚上迎着海风欣赏维多利亚港夜景时，意气风发的王健林指着眼前一栋高楼说道：<strong>“人这一辈子就是应该有这么一栋楼，否则白混了呀。”</str   4-box;\"> </p>\n<p style=\"box-sizing: border-box;\">在那个一毛线就可以填饱肚子的年代，王健林接手了负债150万的西岗区住宅开发公司，自己当上了总经理，早早便成为了“百万负翁”。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">创办公司后，思聪母亲林宁也成为了王健林的贤内助，夫妻双双把家还的直接结果便是，2岁的王思聪无人看护，只能被送进寄宿幼儿园，自力更生。</p>\n<p style=\"box-sizing: border-box;\"> </p></section></section></section><section style=\"box-sizing: border-box;\" powered-by=\"xiumi.us\"><section style=\"margin-top: 10px;margin-bottom: 10px;text-align: center;box-sizing: border-box;\"><section style=\"padding: 3px;display: inline-block;border-bottom: 5px solid rgb(255, 129, 36);color: rgb(255, 129, 36);line-height: 1.9;box-sizing: border-box;\"><p style=\"box-sizing: border-box;\"><strong style=\"letter-spacing: 0px;box-sizing: border-box   5e-height: 1.9;letter-spacing: 0px;padding-right: 9px;padding-left: 9px;box-sizing: border-box;\"><p style=\"box-sizing: border-box;\">作者：原来是KK</p>\n<p style=\"box-sizing: border-box;\">来源：国王与王后（ID：kingandqueen2018）</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">地处北纬39度的大连是个好地方，背依东北腹地，北太平洋的温润气团夹杂着海风呼啸而至，实在养人。<br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">可惜这样的好地方，王思聪并没有久留的福气，他出生第二年便赶上父亲离职下海。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">彼时从军队转业而来、在大连市西岗区人民政府任办公室主任的王健林在1989年作出了一个让旁人瞠目结舌的决定。</p>\n<p style=\"box-sizing: border   6qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8CzV5ib8ewIHAbwUaz8yeOOexSrYTdS8iacjj3eOnUeMYkhptVNuCumpw/?wx_fmt=jpeg\" data-copyright=\"0\" data-oversubscription-url=\"http://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8CzV5ib8ewIHAbwUaz8yeOOexSrYTdS8iacjj3eOnUeMYkhptVNuCumpw/0?wx_fmt=jpeg\" data-ratio=\"0.716390423572744\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"543\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8CzV5ib8ewIHAbwUaz8yeOOexSrYTdS8iacjj3eOnUeMYkhptVNuCumpw/640?wx_fmt=jpeg\" style=\"line-height: 27.2px;white-space: normal;widows: 1;letter-spacing: 0.5px;text-align: center;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p><br></p>\n<section style=\"box-sizing: border-box;font-size: 16px;\"><section style=\"box-sizing: border-box;\" powered-by=\"xiumi.us\"><section style=\"box-sizing: border-box;\"><section style=\"font-size: 15px;lin   � �                                                                                                                                                                                                                                                                                                                                                                                            �v� 	1� showdoc文章详情接口eNq1UttO20AQfd+vWPnRClk7MTXJr+CKOLYJWzm2ZW8kKhapgGh6EU2QIEIg0bSCJyRCJNRyieBn2E144hc6tiNQkPrWjvwwx2dnduacnQx+y+FmK/afRodohbGoSsj7VrBKW/AVnbBJ7Igu2TGjju8l5DmJPdtFSFUnWb3sXYtRB1qoKprDUZiwF050NuX+Rc4hniPR3eHj4a04/song0t58I0jXp1LA+NpwqfwrwEljDLfwzxhMQ0aXPba47O+7Lcffx4A6YQB8wL2ihYft8X5NdC02Ugwf5eEARdHd+PP7QLMJXfOZX+Ur7KoZHJYxCJOcUYSi7QiP7Rdi0RhzGzfIiVNr2glvWwRc36htFwxy3VH8+q25laMBU2fXzY1403dLBuVYhQ0lML/a/2WZ8rf74mj4xnlca1WwwivIYwVJ3Q9pYr1QgqaSQNyZSpPZ1dcbclPXfHlu5LRrs1s4NM6QNSF3DQME+A6Wsd5XwSBZ2/NbVVV/K89T2fHnIKxAHVYLh8Wi+1fD7c98WEEv8TJcHJ5Codhtxf/O93xyc3D/Q+5MUj9d7Mu02dBXZ4u8QcOgzrYc\�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                              �4� 	=�showdoc头部统一请求参数eNqtkstOwkAYhfd9ir5Ak3IJGpdujAs3xBUb02ADVRgbaAkksygYYtVwMSpBAyoqCYnR2gTFCMaHgZmWla/glClxMHHnZBZ/5zvndHpSTuCTsrQtZ1xrgO0SqpXw+TPHcZBOqF6Bjj1EV8fQtfq4WYUcXBG8xfP+AP3HPxexxFOKDDRBK6gyD7NaRgEJiJ5usTlwHiyaPzbqkqqOjaIaHxsnxCPpWnIu9lJw1cTtfeem+DW6XJWySnxrPbcTkWPR/MZmPlhQCjqI5cDacjSyRNza3q4MWPvsgABVSsgC0NM8VIDmAfRxig4r084LiZ7zlJJWtJkAYqtGGG53SBuQ4wQelXvINmg907ML17KcUYN4SWd0+I/CAqJI9s8dF7tyRu/o3p7LAp7qt2TyVkGPTdTqUVWICfOKZRNCYmCB0Y+iLMz4Zg2yxjB9tU8WbUGGuJ8HuHVNiIjNBiq/ToYNvynv4vTHw9Uuqt2RaLff9TKonWXYrKMjkvINruQ6WA==b\�4   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  � �
 	=�%showdoc头部统一请求参数eNrj0lXISE1MSS16sX77s41NT/ubnk3dwMXFVQNhPZ3QW/N84+6n87prXqzf8mxGXw1XjZUuCCgoQBk1UC5OANSSnJOZmleiW1JZkKpQU1xSlJmXXvN03aJnHdufr14PMf9xw4TEgoLHDY0FyY8bJgL1JJaWZMAUg0x51tfxbG7z8wWN7/fMckoszkyO9yzLMkuNCqrwDakwqsysLM2LKstztwgyMwfqLsnPTs1D1g4WAEoUJKan6uaV5irUZOaVgCSe7p38tLP35cKtQKNh8jmZuZklYAU1z9b3A+WezV0IDI0aLi5dhadLtrxsXgEJnpdTZr5Yv/75nmlAvcAwgzCoEWCGBgZAhHAjalg937Pr6ZKNMGWGIFXoSp7s6H26dsbTOSsgqoyRDAMFLLIJxgaGKHIQT0HkTJD0gUMQWaMJxGqoDKo2IySZF/vbn82ZX8MFAKXnDyc=b\��   <boia42bdDXjXzeJKIA/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><strong><span style=\"color: rgb(136, 136, 136);font-size: 12px;\">大学时期的王思聪</span></strong></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">尚未社会化的王思聪少了几分世俗功利的色彩，那时他的爱好还不是开游艇豪车、炫富玩女人。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">他喜欢混字幕组，在论坛上用英文写诗，在学校唱诗班担任男高音，加入乐队吹长笛，俨然一个十足的文艺青年。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p styl   >e=\"box-sizing: border-box;\">这一切在王思聪16岁那年发生变化。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">2004年，也不知道是从哪收到了风，一直被蒙在鼓里的王思聪才知道自己家里很有钱，他跑去向父亲王健林求证，王健林笑着回答“这都被你发现了。”</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">那一年，万达在宁波鄞州开建首个第三代万达广场。在首创“城市综合体”开发模式的口号下，全国各地的万达广场、万达五星级酒店和高级写字楼拔地而起，随之而来的是王健林在富豪榜单上肉眼可见的快速攀升。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p></section></section></section><section style=\"box-sizing: border-box;\" powered-by=\"xiumi.us\"><section style=\"margin-top: 10px;margin-bottom: 10px;text-align: center;box-sizing: border-box;\"><s   w w                                                                                                                                                                                                                                                                                                                                                                             �W 	1�=showdoc
资料完善接口eNp1UMtOGzEU3fsr3CyyiDozBImAIkVIsCISoC6oupu4Y5MYEs9o7AECrlRRukBtgQVEvMSSBRJPgXhK+Zl4CCt+ATsTUirRu5l7z70+c85pn17H58tRWH1+2AUVIQKed5wKr9ozFPkY+SFhtufXnHny1aEMkwU7qATDXOiFS3GhPx0WUECdiJPQQRGmIo08j3DuCn+WsELZR7kxPLlY/FIcFdncwHRRTIx8mh2aGv/shdXxkbQbMYo8zWRl026vmSMhpz4r9Ns5exCATKbdkRk3btXDulaayQALlomAZqfWl+Otsw4KgUwmtfFHqubPp++r8vH8Xh38ku3Ty3h7TQKZt3RBXZ0uGS0orS6sL4wZV9QDAqXaOJSUCSg1zFDtL2KAaVSj1bqLMA61497GUFBMmKCi7nooxO5MxIVZa/b3D1AZUZbcdMmN5+am2jt44w4AWCqVIIBLAMKU52OSysPsRzPUeFn3KR2TWrtv3Ry17u5aN8eq+UOd/FaNlfbVStzY+ZAC32BCAvTn3z8k+ZgI32b4bnhWNzud3mtq/yv9xOjs+DZjnzaSiFHXF4k2mO1h8f5RF9MPAXgB2gMZ2Q==c\J�S   ?ection style=\"padding: 3px;display: inline-block;border-bottom: 5px solid rgb(255, 129, 36);color: rgb(255, 129, 36);line-height: 1.9;box-sizing: border-box;\"><p style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\">02</strong></p>\n<p style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\">叱咤风云</strong></p></section></section></section><section style=\"box-sizing: border-box;\" powered-by=\"xiumi.us\"><section style=\"box-sizing: border-box;\"><section style=\"font-size: 15px;line-height: 1.9;letter-spacing: 0px;padding-right: 9px;padding-left: 9px;box-sizing: border-box;\"><p style=\"box-sizing: border-box;\"><br></p>\n<p style=\"box-sizing: border-box;\">或许是出于多年未能陪伴儿子的愧疚，<strong>2009年，王健林拿出了5个亿，让王思聪自主支配，任他投资练手。</strong></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">一向以治理公司令行禁止而出名的王健林，在   @儿子面前也难得露出慈爱的一面。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">面对媒体，他宠溺地说道“我不过问他任何投资计划，就准备一些钱，让他自己干5年，上20次当，看看能不能成。”</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"287\" data-backw=\"524\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8IqUA48ibtt1ZG0EicTrJ4Vmg7fAkzZj7xaSiaz7Q7CvWyVwsPtFEwW6Nw/0?wx_fmt=jpeg\" data-copyright=\"0\" data-ratio=\"0.5474452554744526\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"548\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8IqUA48ibtt1ZG0EicTrJ4Vmg7fAkzZj7xaSiaz7Q7CvWyVwsPtFEwW6Nw/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width   A: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"font-size: 12px;\"><strong><span style=\"color: rgb(136, 136, 136);\">王思聪与父母</span></strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">毕竟是毕业于伦敦大学学院的高材生，王思聪的表现没有让老父亲失望。拿着王健林给的5个小目标，王思聪转身成立了普思投资，首期基金就投了环球数码、云游控股、九好集团和无锡海古德四个不错的项目。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">2010年，王思聪进军微博，开启了他“中国第一网红”的封神之路。10月27日，王思聪发了自己的第一条微博“三十万的电脑就这么报废了”</p>\n<p style=\   J"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">12个字，平均每个字平摊2.5万，炫富色彩浓厚。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;text-align: center;\"><img class=\"\" data-backh=\"464\" data-backw=\"524\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8l9yxp2Z3sq4EicSa0kayNa7iczR0yrGibbyZenBfI6D0KLtwHcFA2xBIg/0?wx_fmt=jpeg\" data-copyright=\"0\" data-ratio=\"0.8850574712643678\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"696\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8l9yxp2Z3sq4EicSa0kayNa7iczR0yrGibbyZenBfI6D0KLtwHcFA2xBIg/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-si     �                   �l�	 	=�}showdoc头部统一请求参数eNrj0lXISE1MSS16sX77s41NT/ubnk3dwMXFVQNhPZ3QW/N84+6n87prXqzf8mxGXw1XjZUuCCgoQBk1UC5OANSSnJOZmleiW1JZkKpQU1xSlJmXXvN03aJnHdufr14PMf9xw4TEgoLHDY0FyY8bJgL1JJaWZMAUg0x51tfxbG7z8wWN7/fMckoszkyO9yzLMkuNCqrwDakwqsysLM2LKstztwgyMwfqLsnPTs1D1g4WAEoUJKan6uaV5irUZOaVgCSe7p38tLP35cKtQKNh8jmZuZklYAU1z9b3A+WezV0IDI0aAOLPg8Y=b\�緄n� 	1� showdoc文章详情接口eNq1UlFr2lAUfr+/4uJLIViTaLqof2WMGZPU3RGTkFxhZVdYO1q7DaeFTcoEa4d7KtQKss0p9c94r+5pf6EnJkws9K095OF8+e4595zvu6vhLzE6qgXOv9k39IpSvyjLBzX3DanBlzG9qmz45KURUGI6dij/TwLbsBCSpNW6XnQmfNaCFpKEdrHvhXTD8daR+HoTc4jFiLebbDma8t4nthqOxflnhlhxNwqMk4Ql8MGAEkqoY2MW0oC4FSY6jeVVX/Qbf7+fA2l6LrVdeo/mJ8f8egI0qVZCzF6Hnst493b5oZGGuUTzWvRn8SrPdxI5zMy2IDXf8QxL9r2AGo6cVdSCklVzsr6Xz+4X9FzZVOyyoVgFLa+oe/u6oj0r6zmtkPHdyk76KZq+YGu15194t7elNi6VShjhtwjjlOlZdqqI1XQEqmEF8lQiSeuM/34vTtv840VqTVsGNYCP6gARC3Jd03SAdVTHcV8Egbdvja2UJPzYPkezY0bATIAqLBcPi/nxz8W0w9/N4BcfjFbjH3AYdtt43movB38W80txOIw8t9ZdkqdALBYtcQfnrDacc\���    O  O                                                                     ��a  	1��sshowdoc文章详情接口请求url：
http://yunxiuxiu.com/api_articles/articles/read

**请求方式：**
- post

**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|id |int|文章id|

**返回参数：**


 ``` 
 {
  "code": 1,
  "msg": "success",
  "data": {
    "article": {
      "id": 7446,
      "company_id": 0,
      "user_id": 2029,
      "title": "负债4205亿，王健林到底错哪了？",
      "ad": null,
      "content": "<p style=\"text-align: center;\"><img class=\"\" data-copyright=\"0\" data-ratio=\"0.3125\" data-s=\"300,640\" data-src=\"https://mmbiz.qpic.cn/mmbiz_png/icX2xXgZQYEpcC4hYLQiaZArxeJfPPQHF5xhjrJBEU5IDHZ6J5SN5gX86MZxlia2tNibtc3ucUzibLUVxoyfGibBz2fQ/640?wx_fmt=png\" data-type=\"png\" data-w=\"960\" style=\"\"></p>\n<p><br></p>\n<p><img class=\"\" data-backh=\"457\" data-backw=\"637\" data-before-oversubscription-url=\"https://mmbiz.   7   & �&                                                                                                                                                                                                                                                                                          Y� 	1e showdoc文章详情接口eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\����z� 	1�%showdoc发布文章接口eNq1Ul1P2lAYvj+/4oQbkgZoC3UF/ooxUtqCx5S2oYc54zGZGmRqEEwcMZowtrCrJTIS48ck8894Duxqf2FvadWwZHfuTS/e5zw9T9/3eTob3YjxbqPu/J6cozVK/aIsbzbcd6QBT8b0arLhk1WjTonp2IH83Lj2xtPpamC8tRGSpNlcS/Tu+KQDcpKE0tj3AvrC8c6u+Pg94hCLEO+22XR8z/tHbDa6EmfHDLFiOiyM44bF8J8FVyihjo1ZQOvErTLRa02/DcSg9evLGZCm51LbpX/RfL/JL++AJrVqgNl64LmMX/ycHrRSMJdoX4rBJFplORlbY2YWzWn4jmdYsu/VqeHIWUUtKFk1J+tL+WyloOfKpmKXDcUqaHlFXaroivamrOe0QsZ3q8nU/xBdYXO3H075RX/BbVwqlTDCWwjjhOlZdqKI1VQIakEV+kRsSeeE3+6JD11++Ckxpy2DGsCH9wARC3pd03SA22gbR7oICi9+NYpSkvBr5xzOjhmBMAGqsFw0LObN68f7Hn8/gSM+HM+uvsLLsNtL5p3udPjj8eGz2BmFmVtzlfhXIBYLl/gDIA07mw==c\��H   � � ~                                                                                                                  B  	19showdoc文章详情接口欢迎使用ShowDoc！c\����; 	1�)showdoc发布文章接口请求url：
http://yunxiuxiu.com/api_articles/articles/new_article_save

**请求方式：**
- post

**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|title |strin�+ 	1�	showdoc发布文章接口请求url：
http://yunxiuxiu.com/api_articles/articles/new_article_save

**请求方式：**
- post

**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|title |string|文章标题|
|content |string|文章内容|
|imgs |json|图片,数据格式：['http://c.yunxiuxiu.com/upload/portal/20190213/7582f973bc0eba0d948015f7046b7349.png','http://c.yunxiuxiu.com/upload/portal/20190213/7582f973bc0eba0d948015f7046b7349.png']|

**返回参数：**


 ``` 
{
    "code": 1,
    "msg": "�  	    2pWqmGAxyFW+lGqMUAbAPRw4m2nE8ZGGpZA7mBEpmewVJrOlAv7dJdJpb16brGUq1w+zJ4GeZs0AQpCDFCopuawuXJE5lMk9YBMjFdkm30Isg+AzAoykSLDqxVY2JHIAky++/a0sGLupJgZen6isfUXwXqYYO5o+BbfG1JlDfvgeBRG0N9gvvksD2tKEQX4+W1j7Uey95Cs7aIwauKjTehyO2qqAZBkYB4fvRlurPgSKMaDvKIqb6eY7kZ1imsA3krxOw6PoYXdnYMmZgfx4soYub9hrKdho0Nke8TFazFU1uuDnUzVlMstfwM6xSqO3uLUy6ImCKca9HdHJGoMOnH6bQyqgPyfBr0LBgkAFaLbF2xjNUGyiSjc4mv1XfC1hWGU1A8PWZf5EHm9z7iwq3S/m1Ig0E7iEKqSggLdnUIH50E1tQ9SClvA0QJTxryF2Rfoz9jbJHvLRuZX6CD9cAMK5RQ4Si8CFvvUfvDhwTHJb7PbPho5diN0yUrvmpt52pBrCWjIS45u/7Dj2r9D9C8DGIA9//gnfac+eM/ajONDZ2FooB9KTLml8pHbWG1Gl9HN0jnuZoWEQ6EYdxt7z8JRTfG3yxjqRlH97TCfqV5o6i5bX5MNylJJl/Ayjn5bobcmH1tENdasYcQVaisv4WISnCVqFolaDMt85Fsn14XO+1qbfCgYRBWeY1vL+Xut5Sg0nfhWjVjWpg7FSwY5a6Z8105mxa1SakNUhqp2rIlx4pDbIlpEvou+S02e7ub37H9vIC/2NAPzOnsKaV/VFIzoZl2O/Q0Na/g9j8f+DIX6sHpVpINmBHub/e1cNNpBz4zes/gzGLZ9iJNlbgidxR9I0SG4H9eUfu/ZO/ReSasf3aFIKCrzA/TcAj1p/6HEjn5ASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gn/j+JD5T9EfEgZEiNeMg/1vGVM7VByR6U/ptiUWXEKBgxwA95DENteydvVNNh0ub2FsiVE5E+Qciyec[��8   FZ0d7394rSMQi1ZvXvZVVLUScsErnNhw7HfmhJ736CkRDrjm4RKcOK2dMWtm1APjKPtmPMzCPT3/PdsejcROKbNQqpCMF3NmYQzC0QWL/B9d/ZgdiRU4E8ORu1/rCUAEgtf5b77hPuW1YGlRMwrBN/SRzMXwXUm+ja6KwG0SVCnXwwu8OoQ+BrqLQ3CZFiiLGvtsjZ93dnd1h66DoKTwQEEc+lyFDYKTowqc2+juBdVhH0sBSc/tWdnvzKnkH4kRj4eWxFSKZB5CkZCDnytqGDrQiTH9XC9swan4ol44Kid91YM8CPlpa0N82AmdSVBj/C3d3mBUiijBuCIH7Qt+4AU+4o9IUbDPr5Ss80dESGOzDcVAik9njY1DB1RrLVTrCciQgP19Gh/FThwrDSPIOHtywRDYlbfCiWGVc4IZy1vkeJmNlQ6jLtSCXfALUl8flv08zV8vF6ky6X1NlQSJi2LZlm6rlW7zc5UVVdo3JsnkBDOfSbq7UiVPXbAR7Ece+W1j/YnHQ424fvWPxPCnUh8fgc9rdBQjCylgG/rMZ3qL9vX9J+TFS3aR/YQ6YLMRlAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+qy282Pwje5ePxmZb642YmVOLA+1yPgypEjjIDUzEevINYMzCyskMwPMBaZP2XBDjaANEJ8P847kGAEAG9LMKtj1EoH9l8CtuNVDW1f+mvgNP5XKgcQaEDaYNkD4+UIkCdEuPjjjJUdhoAWVzaL64+N5Q3jlwdGIW3t/+KMMpA/3+ttJslNY2kP4ovI8XgxXWAP877iBB56XJKN9S2GR76HjWKJTOaZElT2seqpXvnBXTQgcDI3gAV/BKYJLiDJfazILgbaggMMGyJwhhvgeIFmzn9y0S9rAlaauxhwtyPzxR/WYe5j5kD/kORKSwiF+WgEmj9cGsFKd/M/Ab9Qq+cOGku3gnQEC0K8XxJxNQBs48YauHoA/EEO5xpjXACMXmgW9VaUB   Gl9wNaSmzBWJNqZrb2RWjeV9a2zVWHvuWqRVSJwgoEavTyDbApb1/DSAkM0xc37CejFK8ttkfIvMPXUFhNqOc2qk370DHz4hyWVjP2m9ek1yueKzgnX8yNyddumiReamKksCmOC4hcqarkAQtFhdHKH+9KMFPbdK7qeZ5Uwf01SXFAecLAO918IZiUKV1ckJ4Or/htUxGMFxSl4sgmVMcjhCvXbCsaCeAkfj0PnBtRtX6pvPKQZ5gSLsvHaDsTGZWWpQPhSPF6N4sEHOSRaMWjJmaYKdaUGO2islpZZYZndIcp+s7LqKDfD4rqtCa2eCPPqtvlCRh1nNdMoYnfJizc+az9jIkeNR82UBGumUwhf4HpmThxrg5XIQTUZmgORSnhSiswFFn5C0sZDSj9YAoa60G7FzmZ8rul2Nj0lR3Lhtjd00eTzdwGhNqUtc6UXnmOQBIyEG8ZetdhX21JH/qVlknUsx1pf/Vx/chV0t6mcc5w7nZL5TqbSqvXC5+12dtDlAP04bw9kTsFKdx7UeGHtqRWBuqkxMrD2tzHFxOeMcmir+2L1dXZGMrav5oLIfylVrK2MB2xGrZahvgX6Vi0SwolTFXM/PcnEu0o9hCixOpsjEisOp8shaUzD2yGz+UjALT+rnOIETa6c4K7tn7SbcstCgnUsa3IigsqlT0xwi9mDOJMjMeINdCaZDXnX6b/vwBb16Ct+o8bqGZYJQrMb6cb1HLjMCeZI30wm36cIxFDhlSpQ896JRCYDMABZprVbEWNiM0az+27TbIGI3DRbiNZVD7j+jJxiX4c0u7P64JvJqYDBWiULpkpsKGmVF5eSazZhZVuOKXcgauBDD7meE1THreB6mM5iJTrpoLgs1Cmc0+iWzCjE6OXpAPKJSHR+Yz5/rOQj6a2c9ARJsy3EJ6Ej/bd36dQnunAD1aLxQPyzTDru/ay4+MZLzzkzaVtHj4QlApIQd+FpxcEn5KqqpAyrx6dUrHZ993hFQB9WqjTlprI9a2VfGw9mq5    b  � b                                                                                      S[ 	%eshowdoc资料信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\NZ��FZ 	1�=showdoc
资料完善接口eNp1UkFPE0EUvs+vGHvoobEtkIimSWOCJ5ug8aDxtgy7QzvQzja7U7Q6Ji2RCJLSGsGQWjBRsSYGWhK0SCH8GDu7y8m/4NttxVblXfZ9b7733jezn9fqOAdLBSv786SOMkLk7UQ8nrGzsXlGTIOYFuUx3czFH9HZOOMGfRzLZ/I3bQEHGjOSE2ErSfIsXrCpFacGE2Gi69S2NWEuUJ5Mm2TytnH3Seph6pYYn7w2lxJ3pu4t3Lg//UC3stNTYa3AGdFhUHQ8rF0ki9SymcmTE7HJ2HWEIhEvUOm8+a5OqiA0EkFRnKYC+2equuRstoMqYNmHqlaR6mz5vLQq3YOu2lmTXuvQ2VqXSCaiEBgiyPowimV0UAaGfxlNFPMUS2erJRkXWLobn52VzmAWkpzkBqe2sBhPS9V8DTt/lMqqstk79RO3+9ztvoCi22xDxxzJsWxRI4ZhwfuMtO5/U8d7qtFW2yV/PTMoF0wUNZ1YhjZfsMUw2zv+0uueeq2ys/fhfPv9vw0kTRi/pEdVK9ADLbMFm3H/P2WZTrlNpap9umDXdntHdWe16S43gaozSy9kiaDB+GGi87V8Xqp7+0eq2oLhwM1b5iLjOh1e7jbKwRRRHLn00RJUDeZDfUSsWj/zBYLZAvRnndt9pfZB15rTOFbVjgyMcbah3u4MWQAhPDMzgxF+ijAO6aZBQwk8dtUHOTsNechZqamX766E0DPcJyP4jE7qe+VvP/3XSNGBj8BJvx10WfivAHpwYCiAYyC4LwaPQ6o+HniHuz4NoV+cqKOYc\J�P   Kzing: border-box;text-align: center;\"><span style=\"font-size: 12px;\"><strong><span style=\"color: rgb(136, 136, 136);\">王思聪发第一条微博</span></strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">王思聪的微博签名是“年少轻狂、口无遮拦”，这些年他也用自己的实际行动践行着这一准则。他嘲讽买私人飞机的赵本山是农民，骂姜文、冯小刚的电影难看，与范冰冰的粉丝掀骂战，在微博上闹得好不热闹，俨然娱乐圈纪检委。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">除了插手娱乐圈之外，他还喜欢嘲讽各路家底没王家厚的企业家。俏江南董事长张兰、小米掌门人雷军等一众人都未能幸免。看着王思聪这么肆无忌惮，王健林也免不了捏一把冷汗，他叮嘱儿子不要骂自己的朋友。</p>\n<p style=\"box-sizing: border-box;\"> </   Mp>\n<p style=\"box-sizing: border-box;\">但过不了多久，王思聪便发现八面玲珑的父亲朋友实在太多了，这个不能骂、那个不能骂，太憋屈。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\"><strong>宽容的王健林只能提醒他“你别指名道姓的骂。”</strong></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">加入微博第二年，闲不住的王思聪在微博上宣布强势进入电竞界。彼时中国的电竞大环境不容乐观，电竞选手得不到社会认可，“戒网瘾”的运动仍在盛行，资本对电竞避之不及，但认准了目标的王思聪一头往电竞里面扎。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"259\" data-backw=\"524\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8BdZ2kEfzwEiaVE2DfFGaEl9tibV4KrAia4280qGlaTib5dCmM96N    � �4 �                                                                                                                                                                                                     _x 	=eshowdoc头部统一请求参数eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==b\���_w 	=eshowdoc头部统一请求参数eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\�䲄hv 	%�showdoc注册接口eNqtUctO4zAU3fsrPF1GQHjs+gfzFW1Io2JBkzR2BAjPAgah8hjKAioKCKgEAhXRUgnU0jLTn+l1Mqv5Ba6bAgMSOyzLusfn+No+J262VWstDBb+PR2ROSH8tGkuh+4SC3FO2F7BtHyWCbkTcFOvGcu2vdAV3AycPOPCCQgxjHjYRVUe4amMjQyDjFPf44K8kVBeUwd3CSkTAHu/ZNTqwem2jJv36nBXEpke14PSUSFH8NOBRwreLFtwqOQiYG5eqs1tddKFchsp28shwVyhldHZ7aBf+1vfiZur0fkq0r7F+aIX5F7OahU0NxKyWMx4vuOyd2yxGFV78PtAM99zqFp0Zu05S4ykL0oJfxp415uWaa3L7PmMaxWcV1m0f61KbfRBlSrq8CG6upNDx/r7cHz6v2OEZrNZSugKoTSlf5VK08kxDawwxwSiqSEq8DzWKbQcdnuDTn3Q7Q46t9D/CY0dqKzHD+uqUv2WIj9o0hIDou/vS5IwDBR8bUzDh76GMYn/Uid1qN3ARjV5Fp0a7TVq6rxDpzUq7cHWGZ3BEi5a8f3lx0zRLvIMZVw66Q==c\��   S5AoLCQ/0?wx_fmt=jpeg\" data-copyright=\"0\" data-ratio=\"0.49333333333333335\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"900\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8BdZ2kEfzwEiaVE2DfFGaEl9tibV4KrAia4280qGlaTib5dCmM96N5AoLCQ/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"color: rgb(136, 136, 136);font-size: 12px;\"><strong>王思聪</strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><strong>他收购濒临解散的CCM战队，组建iG电竞俱乐部，给员工开数倍工资；入股移动电竞研发商英雄互娱；投资游戏直播平台熊猫TV和ImbaTV；拿下最大赛事LPL承办权；牵头成   � �                                                                                                                                                                                                                                                                                                                                                                                                           �hu 	%�showdoc注册接口eNqtUctO4zAU3fsrPF1GQHjs+gfzFW1Io2JBkzR2BAjPAgah8hjKAioKCKgEAhXRUgnU0jLTn+l1Mqv5Ba6bAgMSOyzLusfn+No+J262VWstDBb+PR2ROSH8tGkuh+4SC3FO2F7BtHyWCbkTcFOvGcu2vdAV3AycPOPCCQgxjHjYRVUe4amMjQyDjFPf44K8kVBeUwd3CSkTAHu/ZNTqwem2jJv36nBXEpke14PSUSFH8NOBRwreLFtwqOQiYG5eqs1tddKFchsp28shwVyhldHZ7aBf+1vfiZur0fkq0r7F+aIX5F7OahU0NxKyWMx4vuOyd2yxGFV78PtAM99zqFp0Zu05S4ykL0oJfxp415uWaa3L7PmMaxWcV1m0f61KbfRBlSrq8CG6upNDx/r7cHz6v2OEZrNZSugKoTSlf5VK08kxDawwxwSiqSEq8DzWKbQcdnuDTn3Q7Q46t9D/CY0dqKzHD+uqUv2WIj9o0hIDou/vS5IwDBR8bUzDh76GMYn/Uid1qN3ARjV5Fp0a7TVq6rxDpzUq7cHWGZ3BEi5a8f3lx0zRLvIMZVw66Q==c\��Z   = =                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   �@t 	%�=showdoc注册接口eNq9j8tKw0AUhvfzFMcsgzWt7voyTUhDDdgkJBNQHDe1iHhpu9BgVaoF3bTYGqgY20JfJmfMzldwcsHLwq2HYTjfXP7//Mn0lYct3935WF6TbUqdqqLs+dau6Yu1odtNRXPMmu8Zrqeke03Tddu3qKe4RsP0qOESIstJpsKDN1x2hZAskxI4tkfJ9yV2W/zyOb9kOWDvnL2HCxycsmQ641cdRli1lBZA0bAC/yzxRfPrJgVmWjTlsrDgt6PceXWBN4OfzgRUVQUC+wRA0u26IVWhvJ5CpiKoklHTa4heEqNjZxFHo3g+j6MnXB3i5AyDdvLS5kF/TSIHkEsKO/jtlyeSZfHgH+LicIxH/XwsqBRnkyG/j2AzpeMentzBlmjxIUxmj0InTf8lw0SAT1Wg3xM=c\��     z = z                                                                                                              �@s 	%�=showdoc注册接口eNq9j8tKw0AUhvfzFMcsgzWt7voyTUhDDdgkJBNQHDe1iHhpu9BgVaoF3bTYGqgY20JfJmfMzldwcsHLwq2HYTjfXP7//Mn0lYct3935WF6TbUqdqqLs+dau6Yu1odtNRXPMmu8Zrqeke03Tddu3qKe4RsP0qOESIstJpsKDN1x2hZAskxI4tkfJ9yV2W/zyOb9kOWDvnL2HCxycsmQ641cdRli1lBZA0bAC/yzxRfPrJgVmWjTlsrDgt6PceXWBN4OfzgRUVQUC+wRA0u26IVWhvJ5CpiKoklHTa4heEqNjZxFHo3g+j6MnXB3i5AyDdvLS5kF/TSIHkEsKO/jtlyeSZfHgH+LicIxH/XwsqBRnkyG/j2AzpeMentzBlmjxIUxmj0InTf8lw0SAT1Wg3xM=c\�� �@r 	%�=showdoc注册接口eNq9j8tKw0AUhvfzFMcsgzWt7voyTUhDDdgkJBNQHDe1iHhpu9BgVaoF3bTYGqgY20JfJmfMzldwcsHLwq2HYTjfXP7//Mn0lYct3935WF6TbUqdqqLs+dau6Yu1odtNRXPMmu8Zrqeke03Tddu3qKe4RsP0qOESIstJpsKDN1x2hZAskxI4tkeBfN9it8Uvn/NblgP2ztl7uMDBKUumM37VYYRVS2kBFA0r8M8SXzS/blJgpkVTLgsLfjvKnVcXeDP46UxAVVUgsE8AJN2uG1IVyuspZCqCKhk1vYboJTE6dhZxNIrn8zh6wtUhTs4waCcvbR701yRyALmksIPffnkiWRYP/iEuDsd41M/HgkpxNhny+wg2Uzru4ckdbIkWH8Jk9ih00vRfMkwE+AS2XN8zc\���    � I �                                                                                                                                      �4q 	%�%showdoc注册接口eNp1T8tKw0AU3c9XXLMM1rS6y880JQ01YJOQzIDiuKlFxEfbhQarUi3opmJroGJsC/2Z3DE7f8HJA8GFl2HmnHtmztyTzj5E1GH+3vfqluxS6umadsCcfZvJtWW6ba3h2XUWWH6gZXu9YZouc2ig+VbLDqjlE6Kqae4iwk9c9aWRqpIKeG5AIRfXV3g3wn5HXL8VIgHDMIDAIQFQTLdpKTpUNzPSYE2bSlbLWTtoSaxId+wtk3iSLBZJ/IrrY5xeYNhN37siHG4o5AgKSyKPv/+ls7m46amqvMCLDg4u+Ve0xNE5L0ROuF7JCqAEvKT/lnySDwrcdmjGqzKXuJ/g+AVPhsVYUCt707F4jGE7Y6cDPHuAHQnxKUrnz9InS/9rw2WAH5n9sA8=c\��׃4p 	%�%showdoc注册接口eNp1T8tKw0AU3c9XXLMM1rS6y880JQ01YJOQzIDiuKlFxEfbhQarUi3opmJroGJsC/2Z3DE7f8HJA8GFl2HmnHtmztyTzj5E1GH+3vfqluxS6umadsCcfZvJtWW6ba3h2XUWWH6gZXu9YZouc2ig+VbLDqjlE6Kqae4iwk9c9aWRqpIKeG5AIRfXV3g3wn5HXL8VIgHDMIDAIQFQTLdpKTpUNzPSYE2bSlbLWTtoSaxId+wtk3iSLBZJ/IrrY5xeYNhN37siHG4o5AgKSyKPv/+ls7m46amqvMCLDg4u+Ve0xNE5L0ROuF7JCqAEvKT/lnySDwrcdmjGqzKXuJ/g+AVPhsVYUCt707F4jGE7Y6cDPHuAHQnxKUrnz9InS/9rw2WAH5n9sA8=c\���    ;                                                                                                                                                                                                                                                                                                               B 	19showdoc粘贴文章接口欢迎使用ShowDoc！c\�4A�~ 	7�)showdoc修改手机号接口请求url：
http://yunxiuxiu.com/api_users/user_accounts/change_mobile

**请求方式：**
- post

**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|old_mobile |string|旧手机号|
|new_mobile |string   |新手机号|
|new_code |int   |新手机号验证码|

**返回参数：**

 ``` 
 {
  "code": 1,
  "msg": "修改手机号成功",
  "data": []
} 

 ```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |1：成功 其他值：失败|
|msg |string|提示信息|



c\��   T立中国移动电竞联盟，只用几年时间就崛起成为中国电竞圈的绕不开的一方霸主。</strong></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">作为王健林的儿子，王思聪遭受的争议从未停止，大众质疑他没有父亲连个屁都不是。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">当被问及“人生中遇到最大的困难是什么”时，这个在微博上嬉笑怒骂的“娱乐圈纪检委”收起了平日的嚣张跋扈，认真地回答道</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\"><strong>“作为首富的儿子，最大的挑战一定是不要辜负大家的期望，能超过父亲。所以我最大的挑战就是在有生之年，超过我父亲成功的高度。”</strong></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">所幸，普思资本成为他撬动父辈世界的一个支点。   a</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">2017年，王思聪身价高达63亿，与沈南鹏、熊晓鸽、李开复等投资圈顶级大佬荣登“中国顶级投资人排行榜TOP50榜单”。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">如今的他已经是20家公司的法定代表人，并在31家公司担任股东、26家公司担任高管。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">从拿到5个亿创办普思资本以来，不过7年时光，他迅速建立起了集游戏、娱乐、影视、音乐、体育等为一体的顶级泛娱乐文化战舰，投资回报高达12倍。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">儿子旗开得胜的时候，老父亲也春风得意。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing:     TDA4+Ar/SjVGKANAHo48bbTCGMjDUsgdtAi0ztYKk17yoV9esqk0l49t1iKVS4fZk+DvE2aAAkhBihUU3PYXDki8ymSekAmxiuyzT4E0QdApgWZSJHh1QosnEhkATrffbtbWDF3UkwNPT/RWPuLoD10MHc0fIvvDamyhn1wPQojqG9Q33yWhzUljwL8/Lax9iPZe0jWdlEYNfHRJnS5HTXVAEgyMI+PToYbb3wJNsaDvKIqb7cxPY3qNq4BeKuN33FYDCXsbhwUMbuIF1fGyP0NYz0NBx0i2yMuVouh8r4+OMlUTbnc8jegU6zi6C1OvSxqgnCqQn93eKJGoROj30ahCsj/qdC7oJAAUCF6fMExVuMkm4jCLb5W3wVfWxhaSf3wkFWZD5HX+4wLu0rz3ZQCgXYSh5CVFBTo7hQ6OA9bU/0gpHAEHC2wzZi10PsC/Rl7m2Rv2cj8ChWkH25AopwCR+lFwGKf2g82PDgm+W027aOeYxOhS1Z619zM04JcS0BBXnJU+4cd1/4don8ZQAPs+cc/6Tu1wXvWZhwfOgtNA/1QYsotlY/cxmozuoxulu5xNyskHArFuNvYexauaoq/XcaQN4rqb4f+TPVCUXfZ+zXZoCyUdAkv4+i3FXpr8rFFdMeaNYy4Qm3lJVxMgrtEzSJRi2GZj3zr5LrQeV9rkw8Fg6jCc+xoOX+vteyFphPbqhHLu6lD8ZJCzpwpz9rBrJhVCm2IytCtHWtinDjktogmke+i71KTp7v5PfvfG4iL3c1Av86eQtqjmoIRPazLvr+hYQ2/5/HYn6FQH1avirTRjGBvs7+di0Y76J3RexZ/Bs22D3GyzA2hs/gDKToE83FN6feevUPnSrv60R2KhKIyP0DvLVCT9h9K7OoHpHTjy44vO2592Hn1q45O+FksPLQym8Zi1pgZhp/2/yg+VP5DxIeUITHiJfOQz1vG1A4ld1T6Y4p1mRWjoMEAM+A9BL7tlbxdTYNNl9tbKFuCR/4EzeE8QQ==c[��O   Uv/wWkcgFq0+vOxRVLUSYsErnNiw7XfGhN736C0Rbr7m4RJcRa2dMWtm1APtKPtmPMzCnJ7/nh2PRmKnFFlIVQjGizmzMAbu6IJF/o+ufszuygpcluEu3q/1BMADwev8N99wn/JasLSoGYXgG/pI5mL4riTfRldF4DYJspTr4QVeHUIfA93FwblsF0iLGv3sHT/v7O7qDl0HQUnhgYI49LkKBwQnRxW4t9HTC7LDvpYCkp7bs7LfmVPJPxIjHg9NiakUyTyEJCEHP1e2YehAJ8b0c72wBbfii3rhqBz0VQ/yIOSnpQ3+YVd3JkGV8bd0e4NRKaIE44octAf8wAt8xB+RoqCfXylp54+IEMZmG4qBFJ/OGhuHDqjWWqjWE5AhAfv7ND6KnThWGlqQcfZIgyGwkbfCiWGVc4IZy1vkeJm1lQ6lLtSCXfALUl8flv08jV8vF6lS6X1NlQSJi2LZlm6rlW7zc5UVVbtvTJLJCaY+k3Q3pUqemmAj2I888tvG+hOPhypx/eofieFPpT4+Ap/XaCtGFlLANvRh0PQWrev7T8iLl2yQ/YQ8YL0RpAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+yyy82Pwje5ePxmpb+42YmVOLA+1yPgypUjjIDUzEevwNcMzCyskMwP0BaZP9HnPKwBaYT4fpx3IEELANaWYFbHqJYO7L8EbPurGtoe+mvg1P9XKhcQKEBaYNkD4+UIkCd4uPjjjJUdBocWVzaL64+N5Q3jlwdGIW3t/+L0MpA/3+ttJslNY2kP/IvI8XgxXWBP+b7iBB5qXJKN9S2GR76Hg2KJTObZJqhsY9XjvvITvWhA4GRuAAv+CHQTXECS+1iSXQy0BQcYNnjgDDfA8QKNnP9k0C9rAlaauxhwtyPyxR/Woe9j6kD9kORKSwiF+WgEij9casFKs/mfgF+o1nMHjaVbQTqCBSHeL4m4GgCOcWMNTD0A/iCHc40xLgBGLxSLeivKAzUr1   VQVXRWrSXJFoYbrWRmbVWN63xlaNteeuSVqFxAkCavT6BKItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAyO04p0b63Svw4ROSXDb2k9ar1ySXKz4rWMePzN1plypaZGaqsiSACo4pVN7pCjhBi9X5EfJPP1rQc6vkfpppzvZjO9UFxQEny8D7tXBGolCldXICSPy/YXUMRnCckhfzYBmTHI5Qq51wzKmnwFE/dH5w7caV+uJzikFcIAk7r91gbExmlhqkD8XjxSgebBBzkgWlloxZGmBnWJAj90pBqSWW2R2S3Ccru65iAzy+67qhtTNBHv1Wn6jIw7Rme8oYnfJixc+Kz9jIkeNR82UBCumUxBf4HpmThxrg5XLgTUZmgOSSnhSiswFFn5C0sZDSj9YAoS61G7FzmZ8re7sqH5OiuHHZGrtp8ni6gdKaUhe40os2OMkDRkIM4i9r7SrsqSP/U6PIKpdirC//rza4C7tq1M84zh3OyXynUmlVeeFy9bsaaXNAqeuqgJXyPK71QNtTKwJ9U6VjYuVpZY6Lyxln01Sxx67t6oxkbF3NB5XzUK5aW2kL2IlYLUNtC/SrXCSCFaXK53p+lotzkX4MXWBxMkUmVhxGlXvZmoSxe2nzl4JZeFLfxwmcWNvFWdk9azfhFoUG5VzawY0IKoc6Vc0hYnfsTILMjDc4laA75FWn/bYNX9DRU/hGjdcVLBOEZDXWj+stcukRyJO8mU64dReOpsApU6LkuReNUgBkBrBIc7UixtxmjGb136bdGhG7aLAQr8kccv8Zvdq4NG92YvfHNZFXA4OxihdKQ25bUC8rKifXHMZMsxpT7ETWwIQYdr8jrI5Zx/PQnUFPdFJFc1nIUbi80S+ZVfDRydUD/BGV6vjAfP5cz4HTXzvzCZDgWI5LQEf6b+vWr0swcwLUo/FCfbNMK+z+rrn4xEjOOyNpa0XvjScAkRJ24GvFwSXlUVSTB1Ti06tXOj77vCOgDqpVB3PSWB+1sq+Mh7NVyzs73   � �F                                                                                                                                                                                                                                                                                                                          H 	=9showdoc修改登录密码接口欢迎使用ShowDoc！c\��m 	=�showdoc重置登录密码接口请求url：
http://yunxiuxiu.com/api_users/user_accounts/reset_password

**请求方式：**
- post


**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|mobile |string|手机号|
|password |string   |密码|
|code |int   |短信验证码|

**返回参数：**

 ``` 
 {
  "code": 1,
  "msg": "设置登录密码成功",
  "data": []
} 

 ```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |1：成功 其他值：失败|
|msg |string|提示信息|



c\��   � �I                                                                                                                                                                                                                                                                                                                             E 	79showdoc修改手机号接口欢迎使用ShowDoc！c\�e�m 	=�showdoc修改登录密码接口请求url：
http://yunxiuxiu.com/api_users/user_accounts/mod_password

**请求方式：**
- post


**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|mobile |string|手机号|
|password |string   |密码|
|old_password |int   |旧密码|

**返回参数：**

 ``` 
 {
  "code": 1,
  "msg": "修改登录密码成功",
  "data": []
} 

 ```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |1：成功 其他值：失败|
|msg |string|提示信息|



c\��    +  � +                             �r� 	1�showdoc企业后台管理eNp7OWP/y/aeJ7smlmfmpeSXFz/fvPv57vmeAU/nbHg6t+H9nlkm5nqWRnpGRgZ6ZkZcXE93THjavx0onJiSm5mXWVxSlFiSXwQUX9/2fEEjULw8MS85J8fCQo+Ly+hxQ+Pzmbuf7p36YssyiK6i/PwSLmO4OFyXR7hvmn9yVbpbTlBGeXBmoVmwm5kTF1dGSUmBlb5+ZWleRWapLhDrleQX6IOt1leAG1pcWpBapAA3C6IaiAyNjLm4uNIzSxSSc/LzUhWALAdjSz1DAzM9I0MTPSMTIyv9gqL8rNTkEn24pvjk/NyCxLxKPaBqADp9g48=c\v`3\� 	7eshowdoc修改手机号接口eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\�e�|�  	=�showdoc修改登录密码接口eNqtUMtKw0AU3c9XDFkGa+i2vyLSxqTUQJMJmQkqjmAKilo1Wdjii1ahbgQbC8ViH/ZnOpO48hecaVpKF+68DMO999xzHyeNB7xX873qz/ge7BLiFjTtwHf2LV+8TQPZmu5aRR+XPazJv6gbBvIdgjUbmUVXx3gPeSYAqprOO/HmJxuHopmqghx0ESZgBbKwxhvvGQhoFrHoiia9EWvVaRr3+e01BbSQkwbhwqGL8E8TFBvtWNUypJh4llOh/LzOH4csHAhoueQSlAQWnyZPgQANZAqW5RCZTdpvs+nz9+tlGgdzWG4+vWEPrbXNYalUggAeAggVyVcKML8hAxtXhK+k3a9k0k3uRmzSyAbxs4hdtJV5kakTXVRtbYMjmPUS//qcTAhVhf+t0tq1eXFOthhkJx+zUZMdj0WKdXpp/0VKiisrPcMo6QyFODyIhSwA/ALX1vT5c\�    �  �                                                                                                                                         �jX 	1�showdoc
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
|uid	  |int(10)     |否	|	 |	    � �e                                                                                                                                                                                                                                                                                                                                                         B 	19showdoc发布文章接口欢迎使用ShowDoc！c\�Ë�T 	1�[showdoc粘贴文章接口请求url：
http://yunxiuxiu.com/api_articles/articles/paste_save

**请求方式：**
- post

**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|article_link |文�D 	1�;showdoc粘贴文章接口请求url：
http://yunxiuxiu.com/api_articles/articles/paste_save

**请求方式：**
- post

**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|article_link |文章链接|旧手机号|

**返回参数：**

 ``` 
{
    "code": 1,
    "msg": "粘     bborder-box;\">2013年王健林以净资产860亿人民币问鼎福布斯中国富豪榜，此后几年他便长期盘踞在首富的宝座上，仍由马老师、小马哥和许教授奋力追赶。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"341\" data-backw=\"500\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8UQTdRMcTViaDoCrYdvIfe3wib8rKscia5dIcbSYep5ibwAmMSqgsr72wibg/0?wx_fmt=jpeg\" data-copyright=\"0\" data-oversubscription-url=\"http://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8RyoKZOBOJcG9fjhtiaKn2Z0uOpdHiaOc914ib9TEIPiaOHiadLGpIaIOQeQ/0?wx_fmt=jpeg\" data-ratio=\"0.682\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"500\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8RyoKZOBOJcG9fjhtiaKn2Z0uOpdHiaOc914ib9TEIPiaOHiadLGpIaIOQeQ/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;   cwhite-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"font-size: 12px;\"><strong><span style=\"color: rgb(136, 136, 136);\">中国首富之争</span></strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">从大连走出来的小王同志已经变身中国财富的象征，神通广大的他靠着资本空手道聚拢了大量的资金，这为各地万达广场的动工提供了源源不断的资金炮弹。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">这些年，外界关于王健林背景以及资金来源的小道消息满天飞，但王健林从未承认、也未曾否认。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-si   jzing: border-box;\">聪明如他，深知这种神秘感给公司带来的好处。这种放任自流的办法，加剧了外界对王家显赫家世的印象。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">2014年，万达商业如愿在香港上市，王健林的身价直接翻了一番。频频出海的他将资本的触角扩展到全世界，美国第二大院线AMC、世界铁人公司、盈方体育传媒集团、马德里竞技足球俱乐部等优质资产相继被王健林囊入怀中。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">征服全球的感觉确实容易让人迷失，此前25年谨言慎行的王健林无疑是陶醉于自己的骄人战绩，他开始飘了，嘴巴开始碎了。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">都说虎父无犬子，相比儿子仅仅只是面对娱乐圈开炮，王健林的胆子就大多了，他居然敢挑战上级权威�    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��}   d+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   eKkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��}   g+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   hKkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   |��</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">那段时间，出席各大场合，王健林张口就是“把中国文化输出到全球”，把自己包装成国家意志的象征。他甚至在公开场合肆无忌惮地叫嚣：<strong>“万达进入的行业，无论国企央企，都没机会做老大。”</strong></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"288\" data-backw=\"524\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8ouYQS1aiapRt8zDf6KPpGz7x2NFJ6jlm6E8AlLIdJ5tR55Xbia1zzR2g/0?wx_fmt=jpeg\" data-copyright=\"0\" data-oversubscription-url=\"http://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF866X78Ou0wibR9xZPnoaMCLJ4G8ejA5iaU9986QnzuVvc9mgnJX6poEWA/0?wx_fmt=jpeg\" data-ratio=\"0.5494505494505495\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"546\" data-src=\"https://mmbiz.qpi   leHVyNekuSKRKvasjeyqsbxvja0aa889k7QKiRUE1Oj1CURb4GS9MA0geHPMnJ+wXoziwjYe38JzTz0BIbcTrBrt967Ah09watnYT1mvXuN8vvSsaB0/MnenPapokZqpypIAKrimUHmnK+AELV7nR8g//WhBz6/i+xmqOd2P7lQXFBecLMMhUQtnJItVWqcmgPH/G1bHYJRLEPKiHixj4sMRYrUbjjr1FDjih84Prt24Ul98bjGICyRh57UblI3xzFKD9CF4vBjjBhvEHOdAqSVjlgTYHRbkyj0nKLXEMruDU/t4ZddTbIDn7npuaO1M4Ee/1ScqYqjWdE+ZQ6e8aPHT4jM28vh41HxZhEI6JfEFvkdm5aEGePk8eJOSGSB5pCeB6GxA0SckbSyk9aM1QKhL7UbsXObnyt6eyselGNe4bI3dDH483UBpTakLnPMi3VDqgJIQhfjLWnsKM3Xkf2oUaeUSjPXl/9UGb2FPjfopx3nDuZnvVCqtKi+uXP2eRtoc4DRVFTAnzxNaD7Q9tSLQN1U6JlqeVva4tJx1N00Ve+zars5IytbVfFA5D+WqtZW2gJ6I1TLEtmC/ykajnKJU+VwvzLIJNtrPQRdYmkzjiRWXUeXGtyZh7Mbb/KVoFp/U93ECK9Z2cVZuz9pNekWhQTk7O3gRQeVQJ6q5ROz2nkrgmfEGpxJ0h7zqtt+24QsyegrfqIm6gqWCkKzG+nG9RR49An5SMDNJr+7C1RS4ZRxKnnvRKAVAZoATSa5WxKjbjNGc/tu0VyNiFw0nJGoyB99/Ru5BHs2bndj9CU3k1eBgvOIFZ8hrC+JlRWXlmsOYalZjip3IGpgQ57zvCKtj1vE8dGfQE51U0VwOchRueuRLdhV8dHL1AH/EpDo+MJ8/1/Pg9NfufAIkOJYTEtCR/tu69esSzJwA9Wi8UN8skwq7v2suPjFS8+5I2lqRS+YJQNTBDn6tuLikPIpq8oBIfHr1Ssdnn3cE1UG16mBOGeujVu6V8XC2anlnx   m/sfXusIxmPVh5c9iqpWQix4hRUbtv3umJD7HrklwjXZPFyCe6u1M2bNjDLQjtJvxsMczOmF7+nxaCR3nMhCqkIwXsyZxTFwRxcsCnx09WN6sVbgZg0X936tJwgeCF3nv/mG/ZTXQs6iZhSGb+gjmY1zdyX5NroqArdJkKVsDy/w6hD6GOguAc6lu0Ba1Ohn7/h5Z3dXd/g6CEoKDxTEos9VOCBYOabAvY2cXpAd9rUUkPT8npX7zpxK/ZEcYRiSElNpnH0ISYIPfq5sQ9GBTozp53pxC27FF/XiUTnoqwxiEAqQ0gb/0Hs+lSDKBFq6faGYFFVCCUUO2QMB4AU+GohKMdAvoDjaBaIihLHZhqIgpaezxsahC6q1Fqr1BGRI4AJ9Gh/j3DhWBlqQcfr8gyLQkbfCiXMq6wYzlrfw8TJtK11KXagFuxAQpL4+Tg7wJH69bLRKpfc1VRIkNsbJtnRbrXRbgK2sqNp9YxJPTlD1qaS3KVXyxAQbwX7kUdg21p8wDFHi+tU/ksOfSn18FD6vkVYML6SBbciTo+ktUtf3n+AXL+kg/Vl5rAKpAmvw5kvr1RasUftl6S7I6fk0Hh+2snnreBE/eoxkTtVkEfWygsKR7LLLLYAiN9lE4malv7jZySkJYH22R+AqV44IAlIzH70CX1Mws7iCsz9AW2T+RB4K0QakEeL7Cd6FBC0AWOvArI4RLV3YfwnY9lc1tD3018CJ/69ULiBQgKTAcgfGyxEgT/Bw6ccZKzcMDi2tbJbWHxvLG8YvD4xixtr/xe1lIH++19eMU5vG0h74F+Hj8VKmSB8JfsUKPNS4JBvrWxQPfw8HxRKeLNBNUNnGqmeD5cd/saDAyuwAJwSi0E2wQUnuo0l2MdgWGqDY4IEz7ADLCyRygZPBgKwJnNLcRYG7XZEv/bAOfR9VB+oHp1ZawijCx6JQ/BGnBXNmCz8BvxCt5w4aS7eCdJQThES/JHLVAHCMG2tg6gHwBz6ca4xxATB6oVjUWzEeqFmph    gEeB1/pR+nGAG0A0MOKt91GGBsZWAKxgxaZ3MHSGdJTLuyTUyad8en5RSdW+UKEPg3yNWkCJIQYJFBNzRFz5QjPp3H6AZ4Yr8g2+xFEHwCpFngijYdXK7BwIuEF6Hz37W5hxdxJUzX0wkRj7S+C9tDB3NG4W3xvWJU1zg/XowiC+gb1zWcFWON4FODnt421H/HeQ7y2iyKoiY81ocvtqKkGQJKBefxkMtJ440uwMTfIK6rydhuT06hu4xqAt9r4HZfFUMLexkER04t4aWUM398w1jNw0CG8PeJhtRgu7+uHk0zVlMstfwM65VQudotVL4uaIJyq0N9dnqhR6MTot1GoAvJ/KvQuKCQAVJgcX3CM1TjJJqJIi7/Vf8HfFoFWUj88pFXmR/j1PuXCLme+m1Ag0E7yELKSgALdnUIH52Froh+EFI6AowW6GbUWel+gP2NvE+8tG9lfoYL0ww1IlFPgCL0InNin9oMND45xYZtO+4nn6ET4kpXZNTcLpCDXklCQl1zV/mHHtX+HyV8G0AAz//gneSc2+M7ajONHZ6FpIB9KXLml8tHbnNqMLqObzj3uZoWEw+E4e5vznYWrmhJolznIG0UNtEN/pvqgqLvs/ZpsUBpKsoSXudi3FXpr8tNFZMeaNZS4wm3lJWxcgrtEzSJRi3MyH/3WzXXh8/7WJj8KhVCF5+jRcv5ea9kLTSe2VSOWd1OHEo5C7pwpz9rBrJjlhDZMZMjWrjVxVhzyWkSSyH/Rf6mJ6W5+z/73BuJidzPQr9OnkPaopnCIHNZl39/QOI17j2Hsz3C4j1OviqTRjHK+5kA7G4t1kDuj7yz3GTTbfsTKMjuEznIfSLEhmE9oSr/v7B0y5+waQHcIEorJ/AC5t0BN2v8+0asfkNKNLzu+7Lj1YefVrzo64Wep+NDKbhqLOWNmGH7a/6P4UfkPET9ShsSoD89DPm8ZUzuE3JHzxxTtMitGQYMBZsB7GHzbK/m6mgabLre3ELYEj/wJGwtZ7w==c[��m   � �� �                                           ��C 	1�9showdoc
资料完善接口请求url：
https://hsl.jiaodaoren.com/web/ind�o 	1�showdoc
申请拼团接口请求url：
https://hsl.jiaoda�% 	1�}showdoc
申请拼团接口请求url：
https://hsl.jiaodaoren.com/web/index.php?store_id=2&r=api/group/order/submit

**请求方式：**
- post

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


c\bD�	 	%�Qshowdoc资料信息阿里云windows系统IP地址：47.92.220.62

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
项目信息eNplT8FKw0AUvO9X5At2mzRRk5PH/saSrklK3A3JYsjNgpQiBITWg1KpxUtPpreCFf2ZvK23/oIv6KV6mzczzLxpdzN4m5lFDbcreFi3nyszbg7vj6TvU7t3Qh3bpY7rkP18baZbFHKlNIFmsn8e4zW4qE779pln9wiJEg2LDTxdI4/YClMlhYXo/DgrYFmuRiLUTOdVIkURq4yijbS7F0yF6cTMuxfSqyIWMpJKRpX4Fb+2DXzcoMh4mgy55qwsSxYXKTt2E3O/MfUrTgv+LLG6AZbv+Y7rEdThrv7XRWC5/OFjrbMiYF0DHSVcDbnKhaShuvwGuYCOmA==c\%��   V �HV                                                                                                                                                                                                                                                                                                                                        �n� 	1�showdoc发布文章接口eNqtUF1LAkEUfZ9fcdnHJVsEQfDP6LK72JCuiztG0QglRB+SK1QmFVag9NCDGUuSSv4ZZ3Z76i9094PCh966zMM9c+aeOeeG46mctBr1ytfihmwx5hQ0ba9h79IGnk2jVtV0hxb1OqNGxXK1n8bRXWYVXX3HIkRVw1hF9t7FwkMhVSUZcGou++WE15JXLwlHeIJE95wHk7kYtHk49mW/wwkvZKICSBuewj8LR1JPxQq1t4HL3nHw/PB58SE7Iy6vn+RpW97NhDflsZnlpbgdrJmBUqkEBPYJgGLUTEspQHYjAlW3jL0SvPZD309k5UlXnN0rMW3qTEc+mkNETezzuVweYZM0IdElWLD+a5JUVeG/1xB5B05tFsEshkvMgjh6W8174mCBV2I4Cf0RPsZswF1Wp3aZS68bDGer5aM8HCNFzVglXSQ1eRTiG+dV6PE=c\�ÝY� 	1eshowdoc发布文章接口eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\�ËY� 	1eshowdoc粘贴文章接口eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\�4A    � � �                                                                                                                                                        �sE 	%�%showdoc项目信息eNp7On/+0wm97/fM4sooKSkottLXzyjOMdLLykzMT0nML0rN00vOz+Xiejan92nXwqczV4BUZhYASWNLPUMDMz0jQxM9IxMjrpcLdz6fve7F9vVP97UAZfUTczJTEksS9cvLy0Em6udkJxZzcaVnljztaHs2ZT1QCUTk2dQNz3rXPd01+cn+hc8aQeJcIIn44oz8AgC3PExvc\3C�cD 	%�showdoc	项目信息eNpdUMtO20AU3c9XzBfYnsHjR1ZB6qLskPgCP8axkesxtkPIDqQqQq3SRA0sWgVBhFplRbKohAR9/EzGhhW/wB0FqqazOnPuueeee1f3E3k3qadD+WEmv8xXf2b1yeLp51e05WrEsDRKTI2aFDVn8/r0FgqFEBWSi0FzdQK/t1Hf3iIOIwZCnaSS06W8OAYeMA5SkXEMqL3p1dLzQuzzoNKrop9kvIxFroEMre6vwVWeDuozFSEtO/0X7uF2IX+/B0730iT0Kk/v9Xp6XKZ6eljG3U5X9LtehlB9vqyHN7BQ67/8GGMVHLvMpSZDoJDjoZqx0Y7k5eWaj6sqL1u6GkGItp94IvREwTMtEO+QHH+So2VzM2vGg4cf39d3We9CDepg/IqJozzPB6CQIyUijBrMcixCMKonw9Wv6d9Lrnva0GRjdd/Hz9+ADZOsE3c9SKjcCCXGJqP8l6Nm/lHejUBuO6YNG1tu++BARf0nCrhu7+7uvAFV74gFlh9FIWeG75mO5SK8ned7PCh4BXWsnuPT0GcsMI2QR5bLGAEYhEYU+Hbo8wihZ2Wy9lU=c\4�   }c.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF866X78Ou0wibR9xZPnoaMCLJ4G8ejA5iaU9986QnzuVvc9mgnJX6poEWA/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"font-size: 12px;\"><strong><span style=\"color: rgb(136, 136, 136);\">创业初期的王健林</span></strong></span></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">老王到底还是脑子进水了，他忘了自己口袋里的钱其实都是从国家主管的银行借来的。上级一个不高兴，大手一挥，资金一断，万达便是死路一条。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">只可惜，那时的王健林在全球坐拥1300家影院、200个多万达广场、80多家五星�   ��店、10多个万达城、上千幅名画……到哪都是前呼后拥、花团锦簇的他，哪晓得这一切，不过是凛冬来临前的一时繁荣。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">山雨欲来风满楼，一切伏笔在2015年便早早埋下。</p>\n<p style=\"box-sizing: border-box;\"> </p></section></section></section><section style=\"box-sizing: border-box;\" powered-by=\"xiumi.us\"><section style=\"margin-top: 10px;margin-bottom: 10px;text-align: center;box-sizing: border-box;\"><section style=\"padding: 3px;display: inline-block;border-bottom: 5px solid rgb(255, 129, 36);color: rgb(255, 129, 36);line-height: 1.9;box-sizing: border-box;\"><p style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\">03</strong></p>\n<p style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\">风雨飘零</strong></p></section></section></section><section style=\"box-sizing: border-box;\" powered-by=\"xiumi.us\"><sec    YYBHodY6UfpxgBtANDDirfdThgbGVgCuYMRmZzB0hkyUy7sk10mnfHp+UUnV/lChD4N8jVpAhSEGCRQTc0Rc+UIz6dx+gGeGK/INvsRZB8AqRV4Io2HVyuwsCPhBZh89+1pYcXcSVMz9MJEY+svgvUwwdzRuFt8b1iVNc4Px6MIgv4G881nBVjjRBTg57eNtR/x3kO8tosiqImPNaHL7aipBkCSgXn85GakseJLoJgb5BVVeTvFZDeqU1wD8FaK33F5DC3s7Rw0MT2Il1bG8P0NYz0DGx3C2yMeXovhsl4/7GSqplxu+RvQKadysVuselnUBOFUg/7uikSNQSdOv41BFZD/06B3wSABoMJk+4JtrCZINhFFWvyt/gv+tgiMkvrhIe0yP8Kv9ykXdjn3uwkFAu0kD6EqCSjQ3Sl0cB5UE/sgpbAFHC1QZdRbmH2B/oy9Tby3bGR/hQ7SDzegUE6BI/QicGKf2g8+PDjGhW16208iR2+EL1mZXXOzQBpyLQkNecnV7R92XPt3mPxjAAMw849/knfig++szTh+dBaGBvKhxJVbKh+9zanN6DK66ZzjblZIOByOs7c531k4qimBdpmDulHUQDvMZ6oPmrrL1tdkg9JUkiW8zMW+rdBbk58uIhpr1lDiCreVl7BxCc4SNYtELc7JfPRbN9eFz/tbm/woFEIVnqNby/l7reUoNJ34Vo1Y1qYOJRyD3DVTvmsns+KWk9owkSGqXWvirDjktYgUkf+i/1IT0938nv3nDeTFnmZgXqdPIe2rmsIhslmXY39D4zTuPYaxP8PhPk69KpJBM8r5mgPtbCzWQc6MvrPcZzBs+xEry+wQOst9IMWG4H5CU/p9Z++Qe47WALpDkFBM5gfIuQV60v7ziR79gJRufNnxZcetDzuvftXRCT9LxYdWdtNYzBkzw/DT/h/Fj8p/iPiRMiRGfXge6nnLmNoh5A4taftFp8yKUzBggBvwHobY9kq+rqbBpsvtLYQtISJ/AliYXlg=c[��   ~Hj/w2sdwXisevOyr6KqlZALXmHFhmO/OyfkvEdOiXBWNg+X4PBq7YxZM6MMjKP0m/EwB/f0wvd0ezSSO05moVQhGS/mzOIYhKMLFgU+uvoxPV0rcLyG03u/1hOECISu8998w37KayFnUTMKwzf0kczGubuSfBtdFYHbJKhStocXeHUIfQx0l4DgUi1QFjX22Ro/7+zu6g5fB0FJ4YGCWPS5ChsEK8cUOLeR3Quqwz6WApKe37Ny35lTqT+SIwxDSmIqjbMPoUjwwc8VNRQd6MSYfq4Xt+BUfFEvHpWTvsogBqEAaW2IDz3sUwliTKCl2xeKSVEllFDkkH0hALzARwNRKQb2BRTHukBUhDQ221AUpPR01tg4dEG11kK1noAMCVygT+NjnBvHysAIMk4fglAEeuWtcOKcyrrBjOUtfLxMx0qXURdqwS4EBKmvj5MDPMlfLxutMul9TZUEiY1xsi3dVivdFmArK6q0b0ziyQlqPpX0dqVKnrhgI9iPPArbxvoThiFGXL/6R3L4U6mPj8LnNTKK4YU0sA15fDS9Rfr6/hP84iW9SH9WnqpAqcAavPnSerUFa9R+WboLcno+jceHrWzeOl7Ejx4jmVM1WUS9rKBwpLrsdgugyE02kbhZmS9udnJKAlif7RG4ypEjgoDUzEevINYUzCyu4OwPMBaZP5FnQnQAaYT4foJ3IcEIAN46MKtjxEoX9l8CtuNVDW1f+mvgJP5XKgcQaEDSYLkD4+UIkCdEuPTjjJUbhoCWVjZL64+N5Q3jlwdGMWPt/+KOMpA/3+trxqlNY2kP4ovw8XgpU6TPBb9iBR56XJKN9S2Kh7+HjWIJTxaoElT2seoBYfkZYCwosDI7wAmBKEwTbFCS+2iRXQy2hQYoNkTgDDvA8gLJXODkYkDWBE5p7qLA3a7Ml35Yh7mPmgP9g1MrLWEU4WNRaP6IM4I5dws/Ab8Qq+cOGku3gnSUE4REvyRy1QCwjRtr4OoB8Ac+nGuMcQEweqFZ1FsxHqhZq   E3f1cjXlLkikSb27I3sqrG8b42tGmvPPYu0CokVBNTo9QlkW+BkvTANIHhzzJyfsF6M4sI2Ht/Cc089AaG2E6wa7ffuwIdPcGrZ2E9Zr17jfL70rGgdPzJ3pz26aJG6qcqSACa4bqGypisQBC1eF0eoP/1oQc+v4vsZajnVRzXVJcUFJ8uwU9TCGclildWpCaD9/4bVMRjlEoS8aATLmPhwhHjthqNBPQWOxKHzg2s3rtQ3n1sM8gJF2HntBmVjPLPUoHwIHi/GuMEGOcc5MGrJmCUJdqcFuWrPSUotsczu4NQ+Xtn1FBvgubueCq2dCfzot/pCRQy1muqUOXTKizY/bT5jI4+PR82XRWikUwpf4HtkVh5qgJfPQzQpmQGSR3kSiM4GFH1C0sZCWj9aA4S60m7EzmV+ruj2ND4uxbjGbWvsZvDj6QZGa0pd4pwXGYlSB5SEKMRfttpTmKkj/1OzSDuXYKwv/68+eAt7WtRPOc4bzs18p1JpVXtx5e73dNLmAGemqoA5dZ7QemDsqRWBuakyMdH2tLLHpeWse2iq+GP3dnVFUrau5oPKfihXra2MBXRHrJYhvgX7VTYa5RSlKuZ6YZZNsNF+DqbA0mQaT6y4nCpPvzUFY0/f5i9Fs/ikfo4TWLF2irNye9Zu0isLDdrZ0eBFBJVNnZjmErFnfCqBZ8Yb7EowHfKq23/bhy/I1VP4Rk3UNSwVhGI11o/rPfKYEfCTgplJek0XrqHALeNQ8tyLRiUAMgOcSGq1IkbDZozm9N+mvQYRu2k4IVFTOfj+M3IY8hje7MLuT2girwYH45UoOJe8VJAoKyor12zG1LIaV+xC1sCFOOd9Rlgds47nYTqDmeiki+ZyUKNw3CNfsqsQo5OjB8QjJtXxgfn8uZ6HoL921xMgwbackICO9N/WrV+X4M4JUI/GC/XDMumw+7vm4hMjNe/OpG0VOWmeAEQd7ODXiotLyldRTR0QiU+vXun47POOoDqoVm3MKWN91Mq9Mh7OVi3v7   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��{   W W                                                                                                                                                                                                                                                                                                                                             �&` 	1�}showdoc
申请拼团接口eNp1UUFPE0EUvs+vGHvw0Lhd6rEJMfFCOGlMOHhql51pO9Kd2czMqsQxAUSNESmJ0qAiwYsHEi0YDQhN+md21nLyL/hmtzWF4LvsvO9779vv5Rv1j7OjtUR2/gw+oLbWsar5flt1Kg9YIEggJOWVUET+I7roM07o40rcjm8pDUSdkdmb1+VsEDO/JUUS+0ISKn2VLEZMI1Quj3LxrPfLDrqgXy4jD8dCaaBsdy3bPsxBjJApWrv1xtjh8/OVV+b30Znde21G/R/ZzqZBpuZBYaj8VbQeNt4YhgnRbHYYp9hkO33DuMYmHexXgQgIkVQpsFtwdvfQflphxPEzwLeEIMDypshppSXjLWO3X9i3q+nwc7bad/I8iSbKYw4Mn7/sOk4vx3R6tzAP8nju3p2Fu/XbC/fdWBwsRxTWpybHFppCRvPE2K0vE8L5DkNnW4slyi9R9YSzIIQTpqQcfBX2kErFBL8Iu3CG7+zHvakcEMKNRgMj/ARhXAoFoaUart5wTaRa8C5BnnbzLD05SE9P05OvdvjMftuwvfXRz/Ws9/5aCT3FhQiCz8U/FEFeDvvKlL1xyBDzJN7/Faw4nzjPG9oZOKQwY4+/F95w9R+W7R4UGNyP/gK1QlqXc\bE    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   W W                                                                                                                                                                                                                                                                                                                                             �&a 	1�}showdoc
申请拼团接口eNp1UUFPE0EUvs+vGHvw0Lhd6rEJMfFCOGlMOHhql51pO9Kd2czMqsQxAUSNESmJ0qAiwYsHEi0YDQhN+md21nLyL/hmtzWF4LvsvO9779vv5Rv1j7OjtUR2/gw+oLbWsar5flt1Kg9YIEggJOWVUET+I7roM07o40rcjm8pDUSdkdmb1+VsEDO/JUUS+0ISKn2VLEZMI1Quj3LxrPfLDrqgXy4jD8dCaaBsdy3bPsxBjJApWrv1xtjh8/OVV+b30Znde21G/R/ZzqZBpuZBYaj8VbQeNt4YhgnRbHYYp9hkO33DuMYmHexXgQgIkVQpsFtwdvfQflphxPEzwLeEIMDypshppSXjLWO3X9i3q+nwc7bad/I8iSbKYw4Mn7/sOk4vx3R6tzAP8nju3p2Fu/XbC/fdWBwsRxTWpybHFppCRvPE2K0vE8L5DkNnW4slyi9R9YSzIIQTpqQcfBX2kErFBL8Iu3CG7+zHvakcEMKNRgMj/ARhXAoFoaUart5wTaRa8C5BnnbzLD05SE9P05OvdvjMftuwvfXRz/Ws9/5aCT3FhQiCz8U/FEFeDvvKlL1xyBDzJN7/Faw4nzjPG9oZOKQwY4+/F95w9R+W7R4UGNyP/gK1QlqXc\bT�   �tion style=\"box-sizing: border-box;\"><section style=\"font-size: 15px;line-height: 1.9;letter-spacing: 0px;padding-right: 9px;padding-left: 9px;box-sizing: border-box;\"><p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">2015年11月，二号人物出席完东亚合作领导人会议，专程去了一趟位于马六甲唐人街尽头的郑和文化馆。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">那时高层正在谋划一个野心勃勃的东南亚高铁计划，打算开通从昆明经泰国、抵达马来西亚和新加坡的高铁线路，铁轨上跑的自然是大天朝的和谐号。</p>\n<p style=\"box-sizing: border-box;\">二号人物回国后38天，央企中铁和马来西亚一家公司组成了联合运营体，以196亿元人民币的价格收购了马来西亚首都吉隆坡地标大马城60%的股权。</p>\n<p style=\"box-sizing: border-box    k                                                                                                                                                                                                                                                                           RB 	%eshowdoc项目信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\3΅A 	�mshowdoc文档eNqdUs1u00AQvu9TuAdf139xGucUt6RSBaoEqQTkFm1Xic3GTr1Oo+QUDlBAQBqpSNBDUw5AL20RIFU0bSLxKs3G7olXYJyipBSQEHuame9nvpFdCcNaVlHCoKlp2HVK/lrJD6iHiV9VGLTM8crMUdgGp61KHQieUpLzprywJNsLct6SM6psLSWTjCnb5qQAyMCVsMoQKjuhRJjvUQmqnGFhTU1jXUthPaVnlVrgu5SECvG9MPAZo8FkUbIFlmGQ/LtDQH/XItHria0X3093Go0GZrzlPnCTy1D8aBAfHo1OutLlMKeljQSQxNHjaO8hCCZABh6Kegej4VsYIZsQyvlN2lxeg/bWqr2cssz8/SIn91bS9RlcoCSgIVA26ka5UuS22lpfKdoGWeSOS+6Wb2QKt2urd1B0MIB05+2tqD+Mn34anXVE/yT60B0/a5+3u+ji9fBi8zmEjL+8F51j8LvKk2ZZp1HF4BCiitP2eHsgvn4WnY+ATtW/nvpt708O6D+2IqcGraareN7C5jzW0jpC8XB3/PLdlGyoum6YKHrTF2evEs/t/fGTY7g+G/h+eM01d8nmcwhVm3ydXeVDfV0x+zV/Cgtzf//yyfsB8xBaZw==c\/,   �;\"> </p>\n<p style=\"box-sizing: border-box;\">醉翁之意不在酒，中铁的终极目标自然不是大马城，而是大马城作为东南亚地区交通枢纽的关键地理位置，这将直接影响中国是否能在吉隆坡-新加坡高铁的竞争中脱颖而出。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"345\" data-backw=\"500\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8EYj5BlDINhicjKlIfy6KxWdpFanzuzQaOIJcRWd2RpSicichv5pdFjOrg/0?wx_fmt=jpeg\" data-copyright=\"0\" data-oversubscription-url=\"http://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8ibGo6CMdmfkkoKIWGYNFfYSP0xmWKooCaDZLe6Tnb6TJDVjerDlHh4w/0?wx_fmt=jpeg\" data-ratio=\"0.69\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"500\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8ibGo6CMdmfkkoKIWGYNFfYSP0xmWKooCaDZLe6Tnb6TJDVjerDlHh4w/640?wx_fmt=jpeg\" style=\"letter-spa    �  � � F                                                        e 	1showdoc项目账号信息代码路径：git@39.106.214.242:\project\tryineshop.gitc[��o6 	9showdoc登录欢迎使用ShowDoc！c[�A� 			�showdoc注册
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
 	1�Eshowdoc项目账号信息eNp7snvy012Tn83pfdq18OnMFU/2L3zWuP79nllcxpZ6hgZmekaGJnpGJkZcz6eseNaxHShRlJ9fwvV0fdvzBY1AnkdapbmxoYWpoQEX15Pdi4GCL7avf7qvBSiVnlnigGqIVUxBUX5WanJJTElRZWZeanFGfoEeUBnXs63dL9ZPhTsCZH1mAZA0NDLUM7Q0A2IjPUNDEwWu0uLUIiuwCwoSi4vL84tSrBQdlDPgjgByuLieTd3wrHcd0FdWXOgGKCiANCtArDc0MjYxNePiAgAN8Gy1c[���	 	1�]showdoc项目账号信息eNrjKsrPL1EoKarMzEs1NDI2MTXjerJ78fMFjS+2r3+6r+X9nlnpmSUOxpZ6hgZmekaGJnpGJkZWMQVF+VmpySUxEH3FGfkFekBlXM+2dr9YP/XZnN6nXQufzlwB1MyVWQAkDY0M9QwtzYDYSM/Q0ESBq7Q4tcgKZDNXQWJxcXl+UYqVooNyRlqlubGhhamhAZDDxfVs6oZnveue7ppsxYVugIICprO5AEKXTP8=c[��߁ 	1�=showdoc项目账号信息eNp7snvx8wWNL7avf7qv5f2eWemZJQ7GlnqGBmZ6RoYmekYmRlYxBUX5WanJJTElRZWZeanFGfkFekBlADREGPU=c[��o    � r �                                                                                                                                � 	1�=showdoc项目账号信息eNp7snvx8wWNL7avf7qv5f2eWemZJQ7GlnqGBmZ6RoYmekYmRlYxBUX5WanJJTElRZWZeanFGfkFekBlADREGPU=c[��oY 	1eshowdoc项目账号信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��9� 				�eshowdoc登录eNp1Ul1LG0EUfZ9fccnj4nZNmgab31Bo6cdzdnGXuKDZMLuhglOIoUaLqRtBJVWQllr1KVG0lZpg/kxnZn3KX+jdnc1GpL3DwNxzz70zhzNE02S/GZ2uizCMxheT0aGmASE6yL1zsXUjrs55uyN2fvDwOyGaFg1uxGXr3esXKVEHE5aCoF42jNXVJ4veimHVXaPhO9SgTtX1A4eCSQCyVnHwm4/CpBubX7188xbiuTxsif3sdqZS3v3M+HjjvvmJycshP95m0eBa9HYYYWUdAzCSk0p1YHoKIyN+Q81acYCJ3gARP6BurQpM6cLRila3fP+9R+3HNOCDtvy6DoqVDErOvHv6kCV6P+XZhWIRQJHjPX50LE9u/9xto0Jimiag/DUSU3IOpR6tLHq2kyvD/JwCbSuwMFUUzBuujWkun5vLkFRKAhfyz4q4ZtVphXev5dVQdFqzUpV6jXoyrgAZiL5UAjedVnxaWigV86Xns6Zlyw8qy17VrWW0+bT6gcQbNT3QqqxSxjw275+u6alpaNvUrv8FtqQSgLm1IEaUfXL40bUno04ef0z0a0Pensn+N9lt893eZHRUQFR86d83DxV7ag4/2cT/nDySkL8qnyfvc[��0   � �                  �n 	1�showdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlGli8HYu1HW7DoOSVxlZ21y2QdMWYPUoAmjGWVmhCGVcom7MMjggMFgsFHMzY6R7MQBWYLwX5LpmdGT/8KenpbESBopTq0eQPT0+c7969NDJxrgVbL+imwkAvTrv89/4Gs7d9HX3tbha+9oD/hjsvQNDql+VR7hReyDLa5OpB2fGEt7enpKf3Lw7mjtywgvDt747MaFd0dzZnbHKEyRowSZf6AvT+vpZ2R+zEyMo57KLpKZI5N7pS0zs2RqrtcdUdVYwO+/c+eOb5ATQ4IUD/tCoj/KiXFO8KtUNBaJXWh1uc6cQcbjDDl+aBQW9ScTLhdJbpDdWWNtwr5Mdsa03CzY5nLdvXvXBbgI/bfro+L4nnH8M9v47iipJ5fNxCTZXyivzLh+X1r/fSnBxWICH+JUXhKR04fklyAATApExhBiciFJ7OcHkPOnOJkyjjMQFK1wUC1a+sEw8LAqcw7i5vQLklnT3s68J46Mw7zig6jV4HTTdTuGszTX18er12/WAnSX1psCLAEA8vl8TlHQH78hW2uOzlTjVP3FghuFegg7uEQeHGuFLTM9Rw63yeRhQ8wyiiQ6gCAy+ZJMvibTx/rDVw2FaX4bCzfVLEY 	1eshowdoc项目创库信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��Ɓ^ 	1�mshowdoc项目创库信息eNp7tmDH0/3NT3bMetq18OXCnc9nr3u2sO3ZvG0KCumZJQrJOfl5qSCWg7GlnqGBmZ6RoYmekYmRlX5BUX5WanKJfklRZWZeqh5QCdez6duebl8KNaRv+dOObU9nriDWnOT8vJKi/Jyc1CL94ozM9Py8dAwzIY4k3sCiVGSjAMNuY/g=c[��G   �cing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"font-size: 12px;\"><strong><span style=\"color: rgb(136, 136, 136);\">王健林豪言先挣一个亿</span></strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><strong>正当中铁志在必得的时候，马来西亚政府却在2017年5月3日给了它一记当头棒喝，原因是一家中国私企以两倍的报价拦路杀出。这家和中央亲儿子抬杠的企业不是别人，正是万达。</strong></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">2017年5月13日，北京的天还是灰蒙蒙的，尚未苏醒过来。前来北京参加“一带一路”高峰论坛的马来西亚总理�   ��吉布刚下飞机，便赶上长安街。<strong>他拜访的首个目标并不是哪个国家机构的哪位高层领导，而是中国首富、万达集团董事长王健林。</strong></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">两人的见面隆重得宛若两国元首会面。会后，纳吉布对媒体表示王健林对大马城项目“兴趣浓厚”。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">而王健林则开心地在“一带一路”高峰论坛上高调宣布“今年万达要落地两个超过百亿美元级别的项目，一个是马来西亚的大马城，还有一个项目在印尼，目前还在谈。”</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"300\" data-backw=\"504\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8bG1V2Ihpf0AkTTM82mTZ    �  �                                                                                                                                                                                                   �0| 	%�showdoc注册接口eNqtU0Fz0kAUvu+v2OHggbFCUKBw8uqvCNtkgZ2WJCTB1jE90ENFqUJnCsXaKTpTteOMBkYqY4vyZ7qb9ORfcDeBUA5cHHcymX3v+97L7ve++O6YDfdq5tafyQko27aRTySe1bQdUuPPA0WvJJBB5JqFTSsh3jJSFL2m2VbCxCVi2dgEIB73gy6s+5NOWrxRPA7WoKFbNliAtLXHOoMQBE4Y0fZrxxte07Om47sj1nvjACe/JhaEs40zC1cuXlLRN8gWho5lm0QrOexlk51e0daYQ4qucoBotmB6/a830w+3Xw58t+69r3PYQJa1rZvqvFawqLsfgtWqrBtYI0toteq9vaa/OgJ5onLWNt5QysieUedMh/7+xr+14BLB1YiyKWuogiOad3TBGmOuA2t0We/S+zxwAsmmR/Td2ZJksFAoQACfAwhj4laxPJTui6Bilfg+xr5f0P2Dm8kJPeyxRpu+6scCWEU24rio45Gtb2JN0MUs7yHDeJyS1nE6+yhdzKFisShlMyipKpKkIgmlMymcDrrwShMXTWyV5X/vgHcMYmLZJhVx+OQsG5iKqDyTSqbW7yaFUMHNLpu+2/FHn/hIpXmzSMqVjNAVApYepjKpXDqbzkVnQU+5LKYAYzyxC3ZhqDA3LIDL+ofOjMfh/7btkjclPuZwbDDJt/R86I8+Cm9bpYWxW23v/IrbitVdDgWTiMAg4tmlOUUobYxZdzDn3JlExPCnL9hpnx3/uD0eccpsLMH5Zi4NLLz6XwPgL1NavjU=c\��j   q q                                                                                                                                                                                                                                                                                                                                                                       � 			�eshowdoc注册eNp1Ul1LG0EUfZ9fccnj4nZNmgab31Bo6cdzdnGXuKDZMLuhglOIoUaLqRtBJVWQllr1KVG0lZpg/kxnZn3KX+jdnc1GpL3DwNxzz70zhzNE02S/GZ2uizCMxheT0aGmASE6yL1zsXUjrs55uyN2fvDwOyGaFg1uxGXr3esXKVEHE5aCoF42jNXVJ4veimHVXaPhO9SgTtX1A4eCSQCyVnHwm4/CpBubX7188xbiuTxsif3sdqZS3v3M+HjjvvmJycshP95m0eBa9HYYYWUdAzCSk0p1YHoKIyN+Q81acYCJ3gARP6BurQpM6cLRila3fP+9R+3HNOCDtvy6DoqVDErOvHv6kCV6P+XZhWIRQJHjPX50LE9u/9xto0Jimiag/DUSU3IOpR6tLHq2kyvD/JwCbSuwMFUUzBuujWkun5vLkFRKAhfyz4q4ZtVphXev5dVQdFqzUpV6jXoyrgAZiL5UAjedVnxaWigV86Xns6Zlyw8qy17VrWW0+bT6gcQbNT3QqqxSxjw275+u6alpaNvUrv8FtqQSgLm1IEaUfXL40bUno04ef0z0a0Pensn+N9lt893eZHRUQFR86d83DxV7ag4/2cT/nDySkL8qnyfvc[���    M1KNQzwOMRKP0o1BmgDgB5OvO10wthIwxLIHYzI9AyWStOZcmGf7jKptFfPLZZylcuH2dMgb5MmQEGIAQrV1Bw2V47IfIqkHpCJ8Ypssw9B9gGQWUEmUmR4tQILOxJZgMl3354WVsydFDNDz080tv4iWA8TzB0N3+J7Q6qsYR8cj8II+hvMN5/lYU0pogA/v22s/Uj2HpK1XRRGTXy0CV1uR001AJIMzOOjN8ONFV8CxXiQV1Tl7RTT3ahOcQ3AWyl+x+ExtLC7c9DE7CBeXBkj9zeM9TRsdIhsj7h4LYbKen2wk6macrnlb0CnWMXRW5x6WdQE4VSD/u6IRI1BJ06/jUEVkP/ToHfBIAGgQnT7gm2sJkg2EYVbfK2+C762MIyS+uEh6zIfIq/3GRd2le53UwoE2kkcQlVSUKC7U+jgPKim9kFKYQs4WmDKmLcw+wL9GXubZG/ZyPwKHaQfbkChnAJH6UXAYp/aDz48OCb5bXbbRyPHboQuWeldczNPG3ItAQ15ydHtH3Zc+3eIvjKAAdjzj3/Sv9QH71mbcXzoLAwN9J8SU26pfOQ2VpvRZXSzdI67WSHhUCjG3cbes3BUU/ztMoa6UVR/O8xnqheausvW12SDslTSJbyMo99W6K3JxxZRjTVrGHGF2spLuJgEZ4maRaIWwzIf+dbJdaHzvtYmHwoGUYXn2NZy/l5rOQpNJ75VI5a1qUPxkkHOminftZNZcauU2hCVoaoda2KcOOS2iBaR76LvUpOnu/k9++0N5MWeZmBeZ08h7auaghHdrMuxv6FhDb/n8dj/Q6E+rF4V6aAZwd5mfzsXjXbQM6P3LP4Mhm0f4mSZG0Jn8QdSdAjuxzWl33v2Dr1X0upHdygSisr8AD23QE/S90ml9zFASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gm/R/Gh8gsRH1KGxIiXzEM9bxlTO5TcUenFFJsyK07BgAFuwN8QxLZX8nY1DTZdbm+hbAkR+ROtSCx+c[��,   �tnx/ofXOgKxaPXmZV9FVSshF7zCiQ3HfmdO6HmPnhLhfGseLsGB09oZs2ZGPTCOsm/Gwyzc0/Pfs+3RSOyUMgulCsl4MWcWxiAcXbDI/9HVj9mJWIEjMZy4+7WeAEQgeJ3/5hvuU14LlhY1oxB8Qx/JXAzfleTb6KoI3CZBlXI9vMCrQ+hjoLs4BJdpgbKosc/W+Hlnd1d36DoISgoPFMShz1XYIDg5qsC5je5eUB32sRSQ9Nyelf3OnEr+kRjxeGhJTKVI5iEUCTn4uaKGoQOdGNPP9cIWnIov6oWjctJXPciDkJ+2NsSHHdCZBDXG39LtDUaliBKMK3LQvuAHXuAj/ogUBfv8Ssk6f0SENDbbUAyk+HTW2Dh0QLXWQrWegAwJ2N+n8VHsxLHSMIKMswcXDIFdeSucGFY5J5ixvEWOl9lY6TDqQi3YBb8g9fVh2c/T/PVykSqT3tdUSZC4KJZt6bZa6TY/V1lRpX1jkkxOMPOZpLsrVfLUBRvBfuSR3zbWn3g81IjrV/9IDH8q9fER+H+NjmJkIQVsQx/5TG/Rvr7/hLx4yS6yn1AHbDaCUoE1ZPOl9WoL1qj9snQX5PRciowPW5mcdbxIHj1GMlY1WUS9nKBgWl12u/lR+CYXj9+szBc3O7ESB9bnegRcOXKEEZCa+egVxJqBmYUVkvkBxiLzpyzYwQaQRojvx3kHEowA4G0JZnWMWunA/kvAdryqoe1Lfw2cxv9K5QACDUgbLHtgvBwB8oQIF3+csbLDENDiymZx/bGxvGH88sAopK39X5xRBvLne73NJLlpLO1BfBE5Hi+mC+xZ3lecwEOPS7KxvsXwyPewUSyRyTxTgso+Vj3UKz+3iwYETuYGsOCPwDTBBSS5jxXZxUBbcIBhQwTOcAMcL9DM+U8u+mVNwEpzFwPudmS++MM6zH3MHOgfklxpCaEwH41A84dLI1jpbv4n4Bdq9dxBY+lWkI5gQYj3SyKuBoBt3FgDVw+AP8jhXGOMC4DRC82i3oryQ   �QVXQ2rKXJFoX7r2RmbVWN63xlaNteeuRVqFxAkCavT5BLItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAqO04p0b63Tvw4ROSXDb2k9ar1ySXKz4rWMePzN1ply5aZG6qsiSACY5bqKzpCgRBi9XFEepPP1rQc6vkfppZzvQxTXVJccDJMrB7LZyRKFRZnZwAqv5vWB2DERyn5MUiWMYkhyPUayccC+opcDQOnR9cu3GlvvmcYpAXKMLOazcYG5OZpQblQ/F4MYoHG+ScZMGoJWOWJtiZFuSovVJSaolldock98nKrqvYAI/vuiq0dibIo9/qCxV5mNVMp4zRKR/W/Kz5jI0cOR41XxagkU4pfIHvkTl5qAFeLgfRZGQGSC7lSSE6G1D0CUkbCyn9aA0Q6kq7ETuX+bmi29X4mBTFjdvW2E2Tx9MNjNaUusSVPnSMSR4wEmIQf9lqV2FPHfmfmkXWuRRjffl/9cFd2NWifsZx7nBO5juVSqvaC5e739VJmwP047QxnD0BK9V5XOuBsadWBOamysTE2tPKHBeXM86hqeKP3dvVFcnYupoPKvuhXLW2MhawHbFahvoW6Fe5SAQrSlXM9fwsF+ci/RimwOJkikysOJwqT6w1BWNPzOYvBbPwpH6OEzixdoqzsnvWbsItCw3auaTBjQgqmzo1zSFiz+VMgsyMN9iVYDrkVaf/tg9f0Kun8I0ar2tYJgjFaqwf13vkMiOQJ3kznXCbLhxDgVOmRMlzLxqVAMgMYJHWakWMhc0Yzeq/TbsNInbTYCFeUznk/jN6gHEZ3uzC7o9rIq8GBmOVKJQuuamgUVZUTq7ZjJllNa7YhayBCzHsfkZYHbOO52E6g5nopIvmslCjcESjXzKrEKOTowfEIyrV8YH5/Lmeg6C/dtYTIMG2HJeAjvTf1q1fl+DOCVCPxgv1wzLtsPu75uITIznvzKRtFT0dngBEStiBrxUHl5Svopo6oBKfXr3S8dnnHQF1UK3amJPG+qiVfWU8nK1a3    t


**请求参数：**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|mobile |string|手机号|
|code |int   |短信验证码|
|password |string   |密码|
|qq_openid |string   |qq登录openId|
|webchat_openid|string |微信登录openid|
|nick_name|string |用户名或昵称|

**返回参数：**

 ``` 
 {
  "code": 1,
  "msg": "注册会员成功",
  "data": {
    "token": "user&app@218e5745f9afff176a0dc11da1a562e5",
    "refresh_token": "user&app@218e5745f9afff176a0dc11da1a562e5",
    "expire_time": 0,
    "user_id": 2028,
    "user_name": "测试账号1",
    "nick_name": "测试账号1",
    "mobile": "13262957595",
    "avatar": ""
  }
} 

 ```



 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |1：成功 其他值：失败|
|msg |string|提示信息|
|token |string|token|
|refresh_token |string|刷新token|
|expire_time |string|过期时间|
|user_id |int|用户id|
|mobile |string|手机号|


c\��   �rdqD2kCoQv2Oat9EEBDQkrcoKIqjiaLzn0Q/0?wx_fmt=jpeg\" data-copyright=\"0\" data-ratio=\"0.5952380952380952\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"504\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8bG1V2Ihpf0AkTTM82mTZrdqD2kCoQv2Oat9EEBDQkrcoKIqjiaLzn0Q/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"color: rgb(136, 136, 136);font-size: 12px;\"><strong>王健林在酒桌上</strong></span></p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">聪明一世的王健林断然想不到，纳吉布在与他亲密会晤后，转身就和高层领导见面了。那次见面以后，万达就从大马城项目的赌桌上“除名”，直接出局。</p>\n<p style=\"box   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �T 	I�5showdoc
用户资料是否完善接口eNp1Tz1PwkAY3u9XnB06NNJaEtGQNCY4SYLGQeNWantCBdqmd1WjdUE2FRyU+BV+AIkiRgMCCX+Gq938C14pIXHwXe75uPe558JOL+hWPbf8M3oERUIcnJakIi6Lh6ZmG5rtIkvU7Yp0jPYl0zLQiegUnTVMmKGahpLkXUVzTMnDyJU0zzAJr+k6wlgldglZSsHWUhvG1ml2L7tO5NTyQZZsZrZLqzu5Xd0t5zK86lmmprOkhMyrc3CEXGzalpIUU+IKAIIQTmsGzS86arCmggASsIAInHrjW/rUoo1qcPcWewDm83kI4BmAkNNtA3FpKC9GpIILDHMsjtaHk357MhhM+i90fEFfr2izFn7WgubDAgfOYRwC2PH3hbDzEdzXBYFd8GOF3lz7390hbV36sekDP52IBsIZ8Gf032ErUU/omxaJ6BL7SFyG9t7jblCea8Fze6axRQB+AZFuvFY=c\Jk�   �-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">张艺谋的电影《满城尽带黄金甲》里，周润发饰演的皇帝对杰王子说道<strong>“天地万物﹐朕赐给你的才是你的﹐朕不给﹐你不能抢。”</strong></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">对呀，钱是国家的，国家不给你，你不能抢。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">拿着银行的贷款，满世界撒钱扫货，买的是高层喜欢的高精尖科技重工业倒还好，可偏偏王健林却唯独喜欢购买毫无战略价值的文化资产，这不是撞在上级防止资本外流的枪口上了吗？</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">惩罚来得比想象中的还要快。6月22日，万达遭遇“股债双杀”，王健林的身家半天便蒸发了60亿。</p>\n<p style=\"box-sizing: bord   �er-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">这还没完，中国银监会直接将批斗的矛头对准万达，排查其授信风险，这直接导致万达6份境外项目融资遭到严格管控。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"300\" data-backw=\"507\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8Q3jyGhQ4kkB6krVoPPKXmEXxouJcO2qzJ9abKSicVNwZupicOL9lz0ZQ/0?wx_fmt=jpeg\" data-copyright=\"0\" data-oversubscription-url=\"http://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8Bu2s2pTIiaPft1MKdFXxDrLic3uaQmULDqLic5d4IwTuakuNba6Bpof4w/0?wx_fmt=jpeg\" data-ratio=\"0.591715976331361\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"507\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8Bu2s2pTIiaPft1MKdFXxDrLic3uaQmULDqLic5d4IwTuakuNba6Bpof4w/640?wx_fmt=jpe    X  X   H 	1Eshowdoc企业后台管理管理欢迎使用ShowDoc！c\v_G�% 	7�wshowdoc
团成员列表接口请求url：
https://hsl.jiaodaoren.com/web/index.php?store_id=2&r=api/group/order/goods-pt-member&access_token=-VMvbsP_jYT1sbydcMS4tdwVcirwaKPL&order_id=7

**请求方式：**
- post
**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|order_id|是| int|团id |

**返回参数：**

 ``` 
 {
  "code": 0,
  "msg": "success",
  "data": [
    {
      "id": "8",
      "limit_time": "1544158934",
      "nickname": null,
      "avatar_url": null,
      "pay_time": "1544155409",
      "num": 1,
      "time1": "2018/12/07",
      "time2": "12:03:29"
    }
  ]
} 

 ```


 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |0：成功，其他：失败|
|nickname |int   |昵称|
|avatar_url |int   |头像|
|num |string   |份数|
|time1 |string   |年月日|
|time2 |int   |时分秒|


**c\c�`     �                 �#H 	%�showdoc项目信息eNpVjr1OwlAAhWfvUzjC0t6/ltZJExZmn+DaW2kV2wIl7UpiiNE0Nf4M/iTQQcNEGUyIxOjLeFuYfAV7HYgsZ/m+nHPEeCyuk5+PR+CEYdDfU1Wn3yHKict8zvye7SmWfwZA8ZyIy0w8TKXpBlUSU0FQVzCiCqYYrLP38mm2WuTi87yiKuu4nIVMjaJINqqnA8/xvXY8YB4AbTcUF6PiLq/MLVDcz4tkJpa3319ZMZQYbHExT8vplVimq7dXkS7kDQoJRSYidL/b/fu6cUQ+KidDOeHECBOq6Q0DgIMgaDVrG6nVrO9EMUWQYBNik3ONGrQhrUPb6tlh7X/d+ualvgsrFXKm29RAuk4Q0zCnULO5eXRsYMP6BcYLmak=c\=;ł?G 	%�=showdoc项目信息eNp7On/+0wm97/fM4sooKSkottLXzyjOMdbLykzMT0nML0rN00vOz+Xiejan92nXwqczV4BUZhYASWNLPUMDMz0jQxM9IxMjrpcLdz6fve7F9vVP97UAZfUTczJTEksS9cvLy0Em6meX5mXk56VXlCbmcXGlZ5Y87Wh7NmU9UCWKxLOpG571rnu6a/KT/QufNYKkuVDkn27of76i++mu/hdblj3t3w5yhomBsYmhpaGxiUNhIditcDVP17c9X9AIsiKjwtDI2MTUzNwCAAdedQU=c\=;��wF 	%�-showdoc项目信息eNp7On/+0wm97/fM4sooKSkottLXzyjOMdbLykzMT0nML0rN00vOz+Xiejan92nXwqczV4BUZhYASWNLPUMDMz0jQxM9IxMjrpcLdz6fve7F9vVP97UAZfUTczJTEksS9cvLy0Em6meX5mXk56VXlCbmcXGlZ5Y87Wh7NmU9UCWKxLOpG571rnu6a/KT/QufNYKkuZDkAXljU3g=c\3�    � 7 �                                                                                                                                                                                                             \c 	7eshowdoc
商品的拼团列表eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\bl��Fb 	1�=showdoc
申请拼团接口eNp1Uk1vEzEQvftXmBw4RGy24RipQuoFcQIh9cAp2a6dxJBdr2wvUGGktpQvFZpKtGmBUsGFQyVIC4WWNlL+zNokJ/4Cs7sJSqMyF3vemxm/8cyge2wPV2LR+tN7h5pKRbLiuk3ZKt1lHiceFzQs+TxwH9AFl4WEPixFzeiaVEBUGZm9elnMehFzG4LHkcsFocKV8ULAFELF4iArbju/TK8N9YtF5OCISwWUaa/YrYMMxAjp3DUbr7XpPx0uvdS/D8/M3poedI/szrpGuuKAYbDslrsO1s4Ihgher7dYSLG2O13NQoV10vtYBsIjRFApQW7Omd0D82GJkZSfAb7BOQE2rPOMlkqwsKHN1jPzZjnpf7LL3bR8GAfjyiMOBA+ft1NOLUZ0MjcXD+Xx9ds3529V5+bvpGGRtxhQSJ+IHEloMfixqmLBlHy7/XO4fWRffIeYOhfBDaLNxudxctqb76etKX6PhlNUNQ6Z50ObE8+l8EXYfSok4+F5OB1gf9O835uYFUK4VqthhB8hjAs+J7RQweUrqRPIBtwLMHOzfpac7Cenp8nJF9N/Yr6+Mp3VwY9V23l7qYAe47wIguP8C/mwpxfiwk1wRosAqzBegf8ZpKQ6cfap4M5AI7kYc/wt14bL/zC7u59j0D/6Czjdbbo=c\bU-   | |                                                                                                                   ��2 	%�#showdoc注册接口请求url：
http://yunxiuxiu.com/api_users/user_accounts/register

**请求方式：**
- post


**请求参数：**
|参数名|类型|说明|
|:-----  |:-----|-----                           |
|audit |int   |0：未


**返回参数：**

 ``` 
 {
  "code": 0,
  "audit": 1,
  "msg": "请去个人中心完善资料!"
} 

 ```


 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|audit |int   |0：未填写资料 1：� 	1�5showdoc企业后台管理阿里云windows系统IP地址：47.92.220.62

帐号：administrator

密码：wancll88.

2、登录账号：root
3、登录密码：HWMfOczgFlRhwSiq6SF6B

http://yunxiu-xiu.top/admin/ 账号：super 密码：yunxiuxiu123


git clone git@39.106.214.242:/project/yunxiuxiu_company.git

git clone git@39.106.214.242:/project/yunxiuxiu_h5.gitc\�0�    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   $ �$                                                                                                                                                                                                                                                                                        �> 	%�=showdoc	项目信息eNpdT7FOwzAU3N9X+AvsOk2AZGLkN6w0JKlCHMVOo2xUQlWFFAmpZQAVlYqlE+lWiVbwM7HLxi/UESxlu3fv3t29djdTHzO9qNX9Sj2t26+VHjc/+2fou5j2zrBFbWzZFhzmaz3dmkXOuQTVTA6vYzNdXVfnfXrh0B5AGEu12KiXW8MbjPyEpwEy6PLUyyNZzoeBL4nMqzgNRMQzbGTQ7t6Mq5pO9LyrkIiw+uO+t436vDMcYUk8YJKRsixJJBKSjERUhAWvCpYC6MeNrt/NQ96//gihrjhyHdeyHTAK9VB3GSfnoJbLXz6SMhMe6SIoxcOY8QHjeZBin98AHAFm2or2c\%���W= 	%�mshowdoc	项目信息eNp7snvy012Tn83pfdq18OnMFU/2L3zWuP79nllcxpZ6hgZmekaGJnpGJkZcz6eseNaxHShRlJ9fwvV0fdvzBY1AnkdapbmxoYWpoQEXV3pmydM5G57ObQCKA9kKyTn5eakKQJYDqllW+gVF+VmpySX6JUWVmXmpxRn5BXpAZVxPdi8Gmvq0o+3ZFJATcorTK6FiL7avf7qvBSimn5iTmZJYkqhfXl6un1Gco59TVpxRml6aX1mamMfF9Wzqhme964AeskJzv4KCAsjhCpamlkYmplxAFU8n9ILsQNEOAMKUekM=c\%��    �v                                                                                                                                                                                                                                                                       _ 	=eshowdoc修改登录密码接口eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\�Y~ 	1eshowdoc重置登录密码eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\�|�,} 	%�showdoc登录接口eNp1T81OwkAYvO9TrBx6aKQFjGhIiAmeJEHjQeMNartCBVrSLmq0XpAY4w9wUCJqUBK9YARJMCKQ8DJs7c1XcNsSEg9+l535Znd2xmp/mp1CXsv8DO9ACuOcHuL5lJ7hdmVBlQRVQwonqll+H23zsiKhAy6Xyi3pmApxWQoHGC0s5GQ+ryONF/KSjBlBFJGux7GaRko4qQrBFWntMLoVXcb+4PxOFK9G1tOLG7FNUcvEIkw8r8iCSJ28fiY+BXtI02VVCQe4ILcAAMtaTkyz+kWGZZqUZYEXJhGGjja6Jvd1Ui6YN++uBmAikYAAHgEIPaIqIU8I+mZt4kSkzO+wrJ6k2EPNSWkw7jXH/f6490ZGJ6R1SapF66NoVmszHnAMXUtAj7//We2ueVtiWXrBcDekcmV8dwakfmG4ogGMkNceCCfAmNB/hz5xgkJDVrDNfbSX+dAkjVdyWnNjQf9k12qYTz0YsNlZhZw/wjkKyXPH6r5QH7v91MagBX4B7jTPFg==c\}�>   �g\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"color: rgb(136, 136, 136);font-size: 12px;\"><strong>王健林流年不利</strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">少了银行的子弹支持，28年来专注于资金腾挪的王健林被直接断了现金流，半年前还是一片大好光景的万达瞬间被打回原型。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">一个月后，大马城项目重新招标，马来西亚政府收到来自中国的7份标书和日本的2份标书。这一次，濒临弹尽粮绝的万达终于识趣地没有去凑热闹，代表中国参加的是央企门面：中国建   �筑、中交建和葛洲坝等企业。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">至于后面发生的事情，想必大家都清楚。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">为了回笼资金，王健林拿出了壮士断腕的决心，他相继将13个万达城、70多家酒店、一大堆万达广场和长白山度假区等项目打包转售。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">兄弟有难，怎能不帮？</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">一支穿云箭、千军万马来相见。融创的孙宏斌、富力的李思廉、合生创展的朱孟依和一方的孙喜双纷纷站了出来，平日里竞争拼刺刀见红的同行选择“倾囊相助”，以极低的价格收下了王首富的大礼。</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizi   �ng: border-box;\"><img class=\"\" data-backh=\"375\" data-backw=\"500\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF80gD5xZEOxqiaibbFfhFtlmUFuS7gjTT4icSIXa2Wf8vDCmKyVyKzemYNA/0?wx_fmt=jpeg\" data-copyright=\"0\" data-oversubscription-url=\"http://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8ibCV2icn33QFlyibwBYOEeKBIWX6DZtPFvPSHSS2ibBRxqicAIBsSfD0ZCQ/0?wx_fmt=jpeg\" data-ratio=\"0.75\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"500\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8ibCV2icn33QFlyibwBYOEeKBIWX6DZtPFvPSHSS2ibBRxqicAIBsSfD0ZCQ/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"color: rgb(136, 136, 136);font-size: 12px;\"><stro   �ng>王健林与孙宏斌、李思廉</strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">不知道在抛售资产的那一刻，王健林心中是否在滴血，不过孙宏斌等人的小雀跃却是写在脸上。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">只是，万达的颓势还是没有止住，一切并没有朝着好的方向发展。“股债双杀”后两年间，万达文旅被抛售，万达网科面临裁员，而万达电影也经历了复牌即跌停的噩梦时刻。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">2018年的万达面临4205亿的债务，王健林不再稳坐首富之位，他被“二马一许”从首富宝座上赶了下来，还被戴上“首负”的帽子。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">父子毕竟是命运共同体。看瞅着父亲不�    �  �                                                                                                                                                                         �JY 	1�Eshowdoc
资料完善接口eNp1UkFPE0EUvs+vGHvoobEtJbEaksYET5Kg8aDxth12h3agnW12Z9HqmLREIkhKawRDKmCiYk0MlCYoSCH8GJnd5eRf8O22YqvyLvu+N99775vZz28fuJ15xyr8PG6ivBAleyyZzNuFxAwjpkFMi/KEbhaTj+hUknGDPk6U8qWbtoADjRmZ0aiVISWWdGxqJYljMBEluk5tWxPmLOWZnEnSt427TyYeTtwSqfS16QlxZ/ze7I37kw90qzA5HtUczogOk+KpqHaRzFHLZibPjCbSiesIxWJ+KNN9810d10FpLIbiOEcFDs5Ufd5d2wurgGUPqkZNqtOF88qS9DpdtbUs/fa+u74ikRyLQ2CIMOvBOJbxfhkYwW00US5RLN31tmRcYOmtfnYXD/qzkOSk2D+1hcV4TqrWa9j5o1JVtbWzkyDxus+97gsoeq096JgmRVYoa8QwLHifodbdb+poR23sqc1KsJ4ZlAsmyppOLEObcWwxyPaPvpx1T/x21d35cL75/t8GkiOMX9Kj6jXogZYpx2Y8+E8FplNuU6kany7Yje2zw6a71PIWWkDVmaU7BSJoOH6Q6H6tnlea/u6hqrdhOHBLljnHuE4Hl3sb1XCKKA9d+nAeqgYLoD4kVq2cBgLBbSH6s87rvlK7oGvZ3ThS9QMZGuN0Vb3dGrAAQjibzWKEnyKMI7pp0MgYHrkagKKdgzziLjbUy3dXIugZ7pERfIYn9bzyt5/+a6R430fgpN8OuiyCVwA9ODQUwBEQ3BODU5Cqjx1/fzugIfQLMAGkCQ==c\J��    sKIa6RGkYxVGTualVKwKQhVrSIgS9UmUvaIvc8lECkjtSvT5nTJNhJ0B3u2gB1VcwQdY9VN2iRpIJe0yYqiuW6Z4HOa1ZUc7BuvuAPl0VMnRLcyqSp9JYmo1UEFOVX56MCxtnAt2zjPce3tjVBd8OAzXZsFge3tXJK3sUsgRGengtpSCPIc50dTeve2T9evbl6c9jeWv9CnM35jcSWYu+NzfmcSBg8j/IqmSd5PbsHAaKb2g7lFn0cW8WntGr13CakQZWLW79P5py15OY4fHh7mOf48x/MJBataopNP72UT09XhO+F64eETIabKRAbwNMdUnA/fgDazMno+JIZweJNbsJiJcUs2WZZE8GGmsVhrwT0zpMaIjRSGNGtarVZTOXHS04gnQ0mtsKCebWBZdQVkyromFIrwFDNSPqNmpUIhkxalvFhUVEnLVDpEsXBWUjqKBVHMSJXUqK3HqQxkIlImKJRmeYYRi9CwbWhlBXsWYWrS8SJHM2VklSPh0aI9DJfH4Z6cMrTkDvkTqTED65gpN01sa5YwjsrZjIBkMjCmducO9o+P7e85VMJ4YH+JZHWvONh//KSBlAOn7MkjQ71pVFEOT/T1nOgdEju6Dbskpc/mRk6WhtSjo6p57FC3MtF7RDooV/WiguQs7q8KYpZd/B52u0g5F918oqexdDkRnuHC3r+vZPbPK5lO//taJsRcTszmO/I7xPxtTf+jksL7DHeBj/5seO/86yMz+dlwdnWa5JbRgNU0LeZ3A5Yw7+B9sBw2TYO5BDfu0pvPvq/dolc/1r88AIS+WG6svGyxqW1+06Ug1uy17Vjj/QK9XQOg/vkZXVoGZ6PzCyGVnZ33XeIgS2fM+uor2AXOs/FqCcLQcbtE579tTF9n0ZYW2M4VvHtOn7wOZtYgxcbjK/XVVbggIMdNEUueflP/+iiiAmnz+izw4s6Lt7zxNni3EDz8uPlwhWneqlmrMthhs7YezH2IdMet9iuJvlihlyETx/0AJPuBdA==c\c�J    ZdKjdmLGCcxIJ4Fawg8cia3oNw/132",
	  "nickname":"D调"
    },
    {
      "goods_id": "6",
      "order_id": "13",
      "name": "测试",
      "num": "100",
      "pic": "https://www.51yuetuan.cn/web/uploads/image/78/7882462d34772014618cd4e2b9117f4c9871124b.jpg",
      "limit_time": "1551369600",
      "people_count": "0",
      "remain_num": null,
	  "avatar_url": "https://wx.qlogo.cn/mmopen/vi_32/iatPqdC5FNvqADGSooPASt3gu8VNRUlicBYpyJZI0ibcHxMDTIZ19ClpS40f5hUSZdKjdmLGCcxIJ4Fawg8cia3oNw/132",
	  "nickname":"D调"
    }
  ]
} 

 ```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |0：成功，其他：失败|
|goods_id |int   |商品id|
|order_id |int   |订单id 也就是团id|
|name |string   |产品名称|
|pic |string   |产品图片|
|people_count |int   |正在拼团的人数|
|remain_num |int   |剩余拼团数量|
|limit_time |int   |截止时间|
|nickname |string   |团长昵称|
|avatar_url |string   |团长头像|


> c\c�R    �  �                                                                                                                                                                                                                                        �i 	+�Mshowdoc
团成员列表eNp1UltLG0EUfp9fMexDHkI3ezFiEgj9Aa0gtAillGSzuySj2Qu7E1NxhGJR0muktBpqsVAUH2MgtUhS/DPOJn3yL/Ts5Gpo52F2zvd9c87Z882w/Svq7NWC6l3/K6pQ6oc5RamE1dQGMTzL8ALbTZmeo9TtkkJcy36Z8iv+w5ACUSBWXk8EecMnSjnwar7iBZYdKGXPs0LZp7JjOyU7SBimaYdhgXqbtpuX11e3SuFaYePZUy0sbVvm6pM0terrJgnqxqO1xwmRI069glAyORTtRUfXvN+EDpNJJGPfCylQvLkXfbkUIEaIjUJ++IHxm/0/r96wQafHT9+xYbsbtT4yxHIyLAxLnEahjJk8hkExKc2iVpth4lLGT34QC6i4k5vP/OR0rihCuFgsYoR3EMaS6Vm2lMPqgzhwwjKcpbAm/lwSmGVQA8DnKG5hR+yAEisWZoREAFXiEFqgxImzSdpyOq0tZ7JL6ZnCJeamawjerVWrU9zYggpBAaxcZHxjeyHjclrNzmWsOUBp0zjWarFYV7WMoumKuiLdI3WRSc+pSzk9KwlmF/YXaBePpoLgc39kIxsWrfqnR/LYIjBpYs7/FlyJB48ZmBWHKjgTNQ752+93/fd8/+q2dwQIP+sMu+egnYxuqo9aPwcXl8DMhjfl+FmXv27Gt2oOZiENiFuO8dveb+gecDGmeYZfd6Nvjej4fEzqszrHV7xxMLj4BE8J/QUVYEMYc\c�   z z                                                                                                                                                                                                                                                                         �j 	%�showdoc注册接口请求url：
http://yunxiuxiu.com/api_users/user_accounts/register

**请求方式：**
- post


**请求参数：**
|参数名|类型|说明|
|:-----  |:-----|-----                           |
|mobile |string|手机号|
|code |int   |短信验证码|
|password |string   |密码|
|qq_openid |string   |qq登录openId|
|webchat_openid|string |微信登录openid|
|nick_name|string |用户名或昵称|

**返回参数：**

 ``` 
 {
  "code": 0,
  "audit": 1,
  "msg": "请去个人中心完善资料!"
} 

 ```


 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-�{ 	%�5showdoc注册接口请求url：
http://yunxiuxiu.com/api_users/user_accounts/register

**请求方式：**
- pos   �    � � �                                                                                                                                                        �,o 	%�showdoc注册接口eNp1T81OwkAYvO9TrBx6aKQFjGhIiAmeJEHjQeMNartCBVrSLmq0XpAY4w9wUCJqUBK9YARJMCKQ8DJs7c1XcNsSEg9+l535Znd2xmp/mp1CXsv8DO9ACuOcHuL5lJ7hdmVBlQRVQwonqll+H23zsiKhAy6Xyi3pmApxWQoHGC0s5GQ+ryONF/KSjBlBFJGux7GaRko4qQrBFWntMLoVXcb+4PxOFK9G1tOLG7FNUcvEIkw8r8iCSJ28fiY+BXtI02VVCQe4ILcAAMtaTkyz+kWGZZqUZYEXJhGGjja6Jvd1Ui6YN++uBmAikYAAHgEIPaIqIU8I+mZt4kSkzO+wrJ6k2EPNSWkw7jXH/f6490ZGJ6R1SapF66NoVmszHnAMXUtAj7//We2ueVtiWXrBcDekcmV8dwakfmG4ogGMkNceCCfAmNB/hz5xgkJDVrDNfbSX+dAkjVdyWnNjQf9k12qYTz0YsNlZhZw/wjkKyXPH6r5QH7v91MagBX4B7jTPFg==c\}�.�*n 	1�showdoc企业后台管理eNp7OWP/y/aeJ7smlmfmpeSXFz/fvPv57vmeAU/nbHg6t+H9nlkm5nqWRnpGRgZ6ZkZcXE93THjavx0onJiSm5mXWVxSlFiSXwQUX9/2fEEjULw8MS85J8fCQo+Ly+hxQ+Pzmbuf7p36YssyiK6i/PwSLmO4OFyXR7hvmn9yVbpbTlBGeXBmoVmwm5kTF1dGSUmBlb5+ZWleRWapLhDrleQX6IOt1leAG1pcWpBapAA3C6IaiAyNjAEJm289c\v`    � � �N                                                                                                             �g 	�a 	=�ishowdoc头部统一请�f 	=�sshowdoc头部统一请求参数
- header请求参数


|参数名|类型|说明|
|:-----  |:-----|-----                           |
|client-type |string|客户端类型【app、pc】|
|auth |string   |授权码：Basic_Ivj6eZRxMTx2yiyunZvnG8R67|
|token |string   |token|
|page-num |int   |当前页码|
|page-limit|int |每页条数|

- 全局参数错误编码

|编码|类型|说明|
|:-----  |:-----|-----                           |
|1|int |请求接口成功|
|100100 |int   |客户端类型缺失|
|100101|int|客户端类型不存在|
|100300 |int   |auth缺失|
|100301 |int   |auth错误|
|100400 |int   |token缺失|
|100401|int |token错误|
|100402|int |token过期|
|0或其他编码|int|请求接口失败|

b\�A�` 	%�showdoc登录接口请求url：
http://yunxiuxiu.com/api_users/user_accounts/login

**�       2&r=api/user/edit&user_type=1&name=test&family_address=湖南长沙&access_token=goa6IdOzJXJCt165fJtNBQk8UMVcrlMB&_uniacid=-1&_acid=-1&_version=2.6.7

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


c\J�                                                                                                                  �  � �                                                                                                                                  ? 	+9showdoc
团成员列表欢迎使用ShowDoc�. 	C�}showdoc
商品的拼团列表接口请求url：
https://hsl.jiaodaoren.com//web/index.php?store_id=2&r=api/group/order/goods-pt-list&access_token=-VMvbsP_jYT1sbydcMS4tdwVcirwaKPL&goods_id=6

**请求方式：**
- post
**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|goods_id|是| int|商品id |

**返回参数：**

 ``` 
 {
  "code": 0,
  "msg": "success",
  "data": [
    {
      "goods_id": "6",
      "order_id": "12",
      "name": "测试",
      "num": "1",
      "pic": "https://www.51yuetuan.cn/web/uploads/image/78/7882462d34772014618cd4e2b9117f4c9871124b.jpg",
      "limit_time": null,
      "people_count": "0",
      "remain_num": null,
	   "avatar_url": "https://wx.qlogo.cn/mmopen/vi_32/iatPqdC5FNvqADGSooPASt3gu8VNRUlicBYpyJZI0ibcHxMDTIZ19ClpS40f5hUS   �   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �d 	I�5showdoc
用户资料是否完善接口eNp1Tz1PwkAY3u9XnB06NNJaEtGQNCY4SYLGQeNWantCBdqmvarRc0E2FRyU+BV+AIkiRgMCCX+Gq938C14pIXHwXe75uPe558JOL+hWfbf8M3oERYwdLy1JRa8sHpqabWi2iyxRtyvSMdqXTMtAJ6JTdNY8zAzVNJQk7yqaY0q+h1xJ8w0T85quI89TsV1CllKwtdSGsXWa3cuuYzm1fJDFm5nt0upObld3y7kMr/qWqeksKSHz6hwcIdczbUtJiilxBQBBCKc1g+YXHTVYU0EACVhAGE698S19atFGNbh7iz0A8/k8BPAMQMjptoG4NJQXI1LxCgxzLI7Wh5N+ezIYTPovdHxBX69osxZ+1oLmwwIHzmEcAtjx94Ww8xHc1wWBXSCxQm+uyXd3SFuXJDYJIOlENBDOAJnRf4etRD0hMS0c0SX2kbgM7b3H3aA814LndqwR1u8XGQe8Fg==c\Jk�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                     �>e 	I�showdoc
用户资料是否完善接口eNp1T81OwkAYvO9TrBx6aKQFjGhIiAmeJEHjQeMNartCBVrSLmq0XpAY4w9wUCJqUBK9YARJMCKQ8DJs7c1XcNsSEg9+l535Znd2xmp/mp1CXsv8DO9ACuOcHuL5lJ7hdmVBlQRVQwonqll+H23zsiKhAy6Xyi3pmApxWQoHGC0s5GQ+ryONF/KSjBlBFJGux7GaRko4qQrBFWntMLoVXcb+4PxOFK9G1tOLG7FNUcvEIkw8r8iCSJ28fiY+BXtI02VVCQe4ILcAAMtaTkyz+kWGZZqUZYEXJhGGjja6Jvd1Ui6YN++uBmAikYAAHgEIPaIqIU8I+mZt4kSkzO+wrJ6k2EPNSWkw7jXH/f6490ZGJ6R1SapF66NoVmszHnAMXUtAj7//We2ueVtiWXrBcDekcmV8dwakfmG4ogGMkNceCCfAmNB/hz5xgkJDVrDNfbSX+dAkjVdyWnNjQf9k12qYTz0YsNlZhZw/wjkKyXPH6r5QH7v91MagBX4B7jTPFg==c\c�A    ,  ,                                  �Qf 	7�Mshowdoc
商品的拼团列表eNrFVGFP00AY/n6/4rIPfFjoupayDRLiD1ASEg2JMWZ0bR2HXdu0VyehJkpEQERIdIBgIEENaoJjCWKAKX9m141P/AXf3hgdBhP55KW59J73uXufvu89bVV/hLVp3zXP6utonFLHGxTFcc9MTRDV1lXbNayUZpdEsWwURGLpxuOUM+7c8ChE8kQfknvcIdUhYtG1fUe0Xd1wxaJt657gUMEkHu1RNc3wvDy1HxrWkDA6/KjgjeQn7t6RvMKkrg3fVqheHtWIW1Zvjtzq4XujgzMIJZMtri5cOWT1JRCYTCIBO7ZHIcSWpsPKHgcxQkF7yZYXA3Yyc/p0PmjWjtnmQtCq7odrrwMUDAowMAz+1l4KOBDOYWB0UgfhWjXAxKIBq7xgb54RHaKRmJO3bGOzKy9CeGxsDCM8hTBOaLZuJAZxujdalLwivCc8n398gmO6SlUA76FIxRSfAe1kjegZTuQwr+Q5LMkxbqmlKEsi/L7Qqla6cL/EqTHiEC1COj0tl8upfmnSN6ivQkst3lDfMW1V90RSUouGmM3Bk5OVjKz3KdmsnJaUjJTTdMWQCwOSlH2gaAO5rCTJSiE14RTjVCYpEZqnhEuzfNOMRRi2Yxp5zfYtGqlJx5tco6QSK98WHm3igSe91y9P37+XJ53+/wVKSP39Ul9mIHNJzLULBfN99AS3LyHMly9o+97/6Y0rTSGcewJc0XHD3wZsia45DsAd0TINPgjnltnLrbP6KzZz0DheAYR9rLX2P3U56oLfMRTEOh28iLW+bbPFCgCNwy22VwMTso1tTo2aigOPusQqRszG0Q6cAt/T3NmDMPTxiujGr+b8bBTtKuxFrnD3A3v/OVyoQ4rm+vPG0REUCMhxqWPJ818aP9+1qUA6nV0CXtzP+Mi5r+Hudrh6cLq6D78L9BuDs+89c\b��     � w     am 	1ushowdoc企业后台管理eNoBHADj/+euoeeQhuasoui/juS9v+eUqFNob3dEb2PvvIEYNBIDc\v_G�Hl 	%�Mshowdoc	项目资料eNp7OWP/y/aeJ7smPt0x4Wn/9vd7Zj2btuFl09anffufTm172rXw6cYGrqfr254vaATKVRRXpFQVlxtaGFpwPZ0//+mEXqBgeXm5XkVxSrFeen6ZXnIeFxfEhGdTNzzrXfd012QFhcwCoDIFY0s9QwMzPSNDEz0jEyMFBaAUxICK4vjk4oz8Ai6EmRklJQXFVvr6iQWZqGZzPV2y/OnG/qc7p6KryswrzkjMBypNzs/VL09N0s/MS0mt0CvIKLAvsi0uScxLUTVyK04uSk3NAzLAkgCGj3rhc\u�C�<k 	%�5showdoc	项目资料eNp7OWP/y/aeJ7smPt0x4Wn/9vd7Zj2btuFl09anffufTm172rXw6cYGrqfr254vaATKVRRXpFQVlxtaGFpwPZ0//+mEXqBgeXm5XkVxSrFeen6ZXnIeFxfEhGdTNzzrXfd012QFhcwCoDIFY0s9QwMzPSNDEz0jEyMFBaAUxICK4vjk4oz8Ai6EmRklJQXFVvr6iQWZqGZzPV2y/OnG/qc7p+JWpV+emqSfmZeSWqFXkFFgX2RbXJKYl6Jq5FacXJSamgdkgCUBhER53g==c\dඁ|j 	%�5showdoc	项目资料eNp7OWP/y/aeJ7smPt0x4Wn/9vd7Zj2btuFl09anffufTm172rXw6cYGrqfr254vaATKVRRXpFQVlxtaGFpwPZ0//+mEXqBgeXm5XkVxSrFeen6ZXnIeFxfEhGdTNzzrXfd012QFhcwCoDIFY0s9QwMzPSNDEz0jEyMFBaAUxICK4vjk4oz8Ai6EmRklJQXFVvr6iQWZyGYDAB7eWoE=c\P   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �5h 	7�showdoc
商品的拼团列表eNrVVF1P1EAUfba/otkHHoi73e52PyAhRiEqKoS4SiLGLN22lsG2U9opC7Emip+IiomuohhNUONHokCCGhHlz+yU5cm/4J2WpYtiok/GSdN0zj0z98zc29NY/BQsT3mO8X3tMTdCiO12C   �Vg 	+eshowdoc
团成员列表eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\c�d   A �A                                                                                                                                                                                                                                                                                                                     S] 	%eshowdoc
申请拼团eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\b?��g\ 	%�showdoc
项目信息eNqNkcFq2zAcxu96CsOgN1uRY8d2IHTH9imGLMmxiiN5trrgWwsjtINsgXaHjY4uDEZh0OQwKKxjfZnI7m2vMLlpChkMdhGf9IlP3/+n1e2Z/nFWX0z1m7n+cLW6m9fHi98/P4Ju5KBOz3GR57ieC5rzq/rkxhiFlAroxaT5fGx2e0kVdFHoow4Aeva2+bbogyFX+mKpPx0Z32iLZFIwy6jn25l9mBfygBEFVVFxwcpU5o65Bla3X0y6PpnU522V7FWZMjEU1aNxf7PQv14bA+KMU6wwHI/HMC0zuLkpxbBiwDQ6nZpG/13jJceCHmLxJF5sKlnbyf8o+Phs/X5ZT68N1f5fEK2WnRX5kev5wPh6Nt0aD+jLy/VZqlRe9mE7lHPAsaRYFkw4RI4eMOt3y+Z63swm99+/rn9lTdDtuKFlbTQKDYJNUoZFeojzvM2AYxZD+AxyxUYwlrigLQIlIaNcQSZMwG65TwcoTpKe5wV2ggixvchndsgIsmNGY7+Do8R32U7O6YCGQTf2KbW9sGsWn1E76pHADuMgDEhCaIKSHVXlbDCSMc8Y+ANp1AjTc\I�    N � N                                                                  �*_ 	1�showdoc
申请拼团接口eNp1T0tOwzAU3PsUJgsWFo0py0gVRyFpEzVGTW3ZiUDCbEp3QMsCIn7qASpBKQK1tJV6mdhkxxVwcIXEgrfxm5n3xvPKyUxPexnvfK3uQZymTHgYx6LjHpKAhgHlUddt0QQfRU1MumF07LKY7YvUCAckbOxt80bACG5zmjFMeRhxLLJmQlIAECp/zHX+oVZD448QqEFGhdXW1+phpIY9ffNiNQB934cAngAInRYNI8eD9Z0KJKJtesfYqcGymI+LxaKYP6n1mXq+UHm/fO/r/G7LAafQmgDz/P2hnLzp2wFCZkBaRl1dys/pUo3OpRUlkF6tKgg3jdzAf8usVDmhJN20grvmEBtGzV5tNlj/5fTj2HLS5PsGRvakWg==c\bD�^ 	1�5showdoc
申请拼团接口eNp1Tz1PwkAY3u9XnB06NNJaEtGQNCY4SYLGQeNWantCBdqmvarRc0E2FRyU+BV+AIkiRgMCCX+Gq938C14pIXHwXe75uPe558JOL+hWfbf8M3oERYwdLy1JRa8sHpqabWi2iyxRtyvSMdqXTMtAJ6JTdNY8zAzVNJQk7yqaY0q+h1xJ8w0T85quI89TsV1CllKwtdSGsXWa3cuuYzm1fJDFm5nt0upObld3y7kMr/qWqeksKSHz6hwcIdczbUtJiilxBQBBCKc1g+YXHTVYU0EACVhAGE698S19atFGNbh7iz0A8/k8BPAMQMjptoG4NJQXI1LxCgxzLI7Wh5N+ezIYTPovdHxBX69osxZ+1oLmwwIHzmEcAtjx94Ww8xHc1wWBXSCxQm+uyXd3SFuXJDYJIOlENBDOAJnRf4etRD0hMS0c0SX2kbgM7b3H3aA814LndqwR1u8XGQe8Fg==c\b?�   ٽ过，平日在微博上张扬得不行的王思聪也低调了起来，他在微博上消失的100多天，吃瓜群众表示很想念他，没有了他的嬉笑怒骂，微博黯然失色。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">后来尽管重新发声，但也少了昔日“娱乐圈纪检委”的风采，王思聪也开始学着收敛地对待这个世界。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">这两年，王氏父子的新闻少了许多。前不久，王思聪凭借旗下IG俱乐部在英雄联盟S8全球总决赛中勇夺总冠军又火了一把。而万达的最新动态则是12月17日王健林出售百年人寿股权，变现27.18亿。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\"><img class=\"\" data-backh=\"342\" data-backw=\"500\" data-before-oversubscription-url=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8kfRZUxiaD8PMibeoOdIUQ    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh50menznfvXp0ftqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/kH2LakXmoww5emAWFozHYx4PSa6TnWlAcF4m2yOgAiLi8dy7d88D3iD0n44PiqO75tHPbOGbw6SRXLIS42RvvnxlyvP74trviwkuHhf4CKfykojcXiS/CGFnUiAyghCTi0hiL9+H3F/MVUiFXtivFi29MQw8qMqci7g1+SPJrOqvp94SR8ZRXglA/GtwOul1J4a7NNfTw6vXbtQCdJaunwqwCAAoEAi4RcF49Ipsrro6U41T9YsFNwZVGHVxiXx3pBc2rfQMOdgi4wcNMcsokugCgsj4czL+kkweGQ9eNBSm+W0sfKpmWdJU7CaLrIOsuXi6sMr1Ka6ypVoE5/Vc3ph6Rl4+YJF1AaJ5iXIq18MpLoZQt1MZk   �    ,  { ,                                M% 	eshowdoc文档eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�ݞr$ 	1�showdoc框架说明文档eNqlWWtT21Ya/q5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYUtQI0sOboQ6HQy5m4CBloIBAIJbrilDXbSpuDYUP5LqyPJn/IX+h4d2ci2zKa7/uCLdN7nvT/nPXI76uNVvPYCryfD5Ou/LrwbbDl/Kdja0hZsbWsNhxKy9DUXVUOqPMSLXBCWMO1IPzo2F3eNzITxeP/N4eoX/bx4+/on1y++OZyxcttmcQIfJvHcd8bSpJF5iudGrOQo6qqswtkZPL7rLJmaxhMz3b5+VU2EQ6G7d+8Gb7NiVJC0WDAqhuKsqLFCSCWiif7ExWaGOXPGnM3hH0aN+T1cLDCRSIQReFEbPCf28eLgufiQckc4B2vfsW+dOaMXn5obw8b0FJ5b0vPTxvoWnp8tjafNo6y5OqYfZ43F17DsTCnz2nyUpTf044wxnDu5TZCiCRTkxIEgN8jGEwKH7F+IYegS8gPc1Yv7IGU8eGGks7iwUIW2N2XjgC4EivDRA7O4YDweYxicWsc70yDnvoy3R8BaCC7D3Lt3j4HAIPSfjg9Ko7vm0c904ZvDlJFaspLjeG++fGWK+X1x7ffFJJtICHyUVXlJRF4vXFiEDFIpEBlBiMpFJbGX70PeL+qO42aVqPNGMbhBVWY9xK3JH3F2VX899ZY4MhfjlSCksgank1x3Y3hLsz09vHrtRi1Ap3P9VIBFAEDBYNArCsajV3hz1dOZapyqXzS4cSjomIdL+LsjvbhpZWbwwRYeP2iIWUaRRA8QhMef4/GXePKIFGAjYZLfxsKnapYlTeW8ZJF1kDMXTxdW2T7FU9apRXBezxeMqWf45QMaWQ8gkpcYq7I9rOJhS   �   V V                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �'C 	%�showdoc	项目信息eNpdUMFKw0AQvc9X7BfsdreNpj159DdCGpOUmA3J1pKbBQlFqAZaD0qlBkF6anIoFKzoz2ST3vwFN1QP9fbmzcyb96bczeT7rFpM5W0mH1flV1aN8++PJ2h3MW2dYEY7mHUY1PNVNdmqRsi5AJkn9ctYVecX8Wmb6hptAdiukItCPl8rXmFkety3kEJnx1o9EoR8YJmCiDB2fStyeIDVGJS7V6UqJ0k1byx4kR3/cvttLj9vFEcMz+0bwiCj0Yg4kUe8q8gZ2kMeDw0foHooqulaBer9848QaoyjrtZlHQ3UhEynzY2jdZDL5YF3hAiiHmlOUIoHrsH7Bg8tH5v8EmR6J++Lep3VabLfvB3+csjCWkxH6A9THeAHu4OhEw==c\%��   / �/                                                                                                                                                                                                                                                                                                   eQ 	Ieshowdoc
用户资料是否完善接口eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c\JjՄgP 	%�showdoc
项目信息eNqNkcFq2zAcxu96CsOgN1uRY8d2IHTH9imGLMmxiiN5trrgWwsjtINsgXaHjY4uDEZh0OQwKKxjfZnI7m2vMLlpChkMdhGf9IlP3/+n1e2Z/nFWX0z1m7n+cLW6m9fHi98/P4Ju5KBOz3GR57ieC5rzq/rkxhiFlAroxaT5fGx2e0kVdFHoow4Aeva2+bbogyFX+mKpPx0Z32iLZFIwy6jn25l9mBfygBEFVVFxwcpU5o65Bla3X0y6PpnU522V7FWZMjEU1aNxf7PQv14bA+KMU6wwHI/HMC0zuLkpxbBiwDQ6nZpG/13jJceCHmLxJF5sKlnbyf8o+Phs/X5ZT68N1f5fEK2WnRX5kev5wPh6Nt0aD+jLy/VZqlRe9mE7lHPAsaRYFkw4RI4eMOt3y+Z63swm99+/rn9lTdDtuKFlbTQKDYJNUoZFeojzvM2AYxZD+AxyxUYwlrigLQIlIaNcQSZMwG65TwcoTpKe5wV2ggixvchndsgIsmNGY7+Do8R32U7O6YCGQTf2KbW9sGsWn1E76pHADuMgDEhCaIKSHVXlbDCSMc8Y+ANp1AjTc\I�    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWWtT21Ya/u5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYV9ADWy5OhCoNPJmLsJGGghEAgkuOGWNthJm4JjQ/kvrY4kf8pf6Ht0bCPbMpvu+gPY0nmf9/6c90jtqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/7DtUKTIfZcjRA7OwYDwe83hIcp3sTAOA8zLZHgENEBCP5969ex5wBqH/dHxQHN01j35mC98cJo3kkpUYJ3vz5StTnt8X135fTHDxuMBHOJWXROT2IflFiDqTApERhJhcRBJ7+T7k/mGeQib0wn61aOkPw8CDqsy5iFuTP5LMqv566i1xZBzllQCEvwank153YrhLcz09vHrtRi1AZ+n6qQCLAIACgYBbFIxHr8jmqqsz1ThVv1hwY1CEUReXyHdHemHTSs+Qgy0yftAQs4wiiS4giIw/J+MvyeSR8eBFQ2Ga38bCp2qWJU3FbrLIOsiai6cLq1yf4ipbqkVwXs/ljaln5OUDFlkXIJqXKKdyPZziYgh1O5Uh+   �   � �                                                                                                                                                                                                                                                                                                                                                                                                                            �WO 	%�mshowdoc
项目信息eNqdUUFr2zAYvetXGAa92YocO7YDoTtuP0OWPscujmVsbcG3FUboBtkC7Q4bHV0YlEKhyaEQaEr7ZyK7t/2FyUtzyGCXXcST3sf73nvarE/V3Wl9PlUf5+rr1eZxXh8vft1/Q93AIp2eZRPHsh0bNWdX9clKE4UQEqnFpPlxrG+vosrrEt8lHYTU7FNzveijYSLV+VJ9f6d5jQ2WigwMjV7ua/ZxXogjYBLLokoyKGORW3oMbdY/tbo6mdRnrZX0bRlDNsyqZ+JptVAP7zWBaZpwKikej8c4LlO8mxTZsAKkHX2Yakf/acPYV/uHqedV9ZdlPb3RTfb/Ks5o+zICN7AdF2lezaZ7kZC6uNi+xVLmZR+3QayjhApORQGZxcToT7Xq87K5mTezydPt5fYntnbtju0bxg4TX8feKaU0i9/QPG818BhCjF/gRMIIh4IWvI0tBQaeSAyZFjgsX/MBCaOo5zieGRHGTCdwwfSBETMEHrodGkSuDQd5wgfc97qhy7np+F19uMDNoMc80w8932MR4xGJDmSVw2AkwiQF9BtJ2gQ+c\IE    z  z 3                                       E 	79showdoc
商品的拼团列表欢迎使用ShowDoc！c\bl�� 	1�9showdoc
申请拼团接口请求url：
https://hsl.jiaodaoren.com/web/index.php?store_id=2&r=api/group/order/submit

**请求方式：**
- post
**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|offline |是|int |传1|
|address_id |是|地址id|传0|
|goods_info|是|string|商品信息 |
|num|是|int|商品数量 |
|type|是|string|类型传 GROUP_BUY |
|payment|是|string|传0|
|limit_time |是|int |传时间戳|
|formId|否|string||
|access_token|否|string||
|_uniacid|是|string||
|_acid|是|string||
|_version|是|string||

**返回参数：**

 ``` 
 {
  "code": 0,
  "msg": "订单提交成功",
  "data": {
    "order_id": 15
  }
} 

 ```




 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |0：成功，其他：失败|
|order_id |int   |订单id 也就是团id|


c\bl�    � ^ �                                                                                                                                                                                    �N 	%�ushowdoc
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

Log::info(['x'=>1,...]);c[��   �58WsJd5CibBFDlytcat0icErL1SIWUunAjXsQ/0?wx_fmt=jpeg\" data-copyright=\"0\" data-ratio=\"0.684\" data-s=\"300,640\" data-type=\"jpeg\" data-w=\"500\" data-src=\"https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8kfRZUxiaD8PMibeoOdIUQ58WsJd5CibBFDlytcat0icErL1SIWUunAjXsQ/640?wx_fmt=jpeg\" style=\"letter-spacing: 0.5px;line-height: 29.75px;white-space: normal;widows: 1;width: 660px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;\"></p>\n<p style=\"box-sizing: border-box;text-align: center;\"><span style=\"color: rgb(136, 136, 136);font-size: 12px;\"><strong>IG俱乐部夺冠</strong></span></p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">往日叱咤风云的王首富不再高调，他放弃了所有休息时间来学习新趋势，每天早晨5点晨光熹微的时候便抵达办公室，而在晚上12点，王思聪出发到夜店�    {  {                                                                                                                 �r" 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   f&    &  � 	�ushowdoc文档http://try11.jiaodaoren.com/liaolingli/lvsezhujian/a%E5%BF%AB%E9%80%9F%E5%85%A5%E5%8F%A3.html

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
c\�    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �   ��欢那会儿，他才缓缓回到家中。</p>\n<p style=\"box-sizing: border-box;\"> </p>\n<p style=\"box-sizing: border-box;\">不知道站在北京嘉里中心的顶层，举目远眺的王首富，能否看到万达的未来？</p>\n<p style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></p>\n<p style=\"box-sizing: border-box;\">本文转自微信公众号 国王与王后（ID：kingandqueen2018），深度的八卦，有料的故事。</p></section></section></section></section><p><br></p>\n<p style=\"max-width: 100%;min-height: 1em;font-size: 15px;letter-spacing: 0.544px;white-space: normal;font-family: -webkit-standard;caret-color: rgb(0, 0, 0);text-align: center;widows: 1;line-height: 27px;color: rgb(62, 62, 62);background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;\"><strong style=\"max-width: 100%;box-sizing: border-box !important;word-wrap: break-word !important;\"><span style=\"max-width: 100%;caret-color: rgb(255, 104, 39    � &� ��                                                                                                                                                                                                �$ 	%�showdoc	项目资料阿里云帐号：新邵县商务局
密码：xsxdzsw1818
域名：www.xsds.gov.cn

新邵数据库  ip： 39.106.214.242  库名：xs_cshop

域名：https://api.xsds.gov.cn


大屏幕：https://api.xinshaods.com/web/index.php?r=stand%2Fscreen%2Findexc\u��# 	%�showdoc
仓库信息git clone git@39.106.214.242:/project/qianduan/shigong.git

git clone git@39.106.214.242:/project/qianduan/qianduan_shop.gitc\�L�
 	%�Kshowdoc接口信息1：注册

2:短信验证码
http://local.tryine.com/user/sendSmsCode?type=1&phone=13262957532c[�Q^�W	 	%�mshowdoc文档信息211.149.237.11:33890
Administrator
umn2bzg4

公司小程序账号：

注册邮箱：15580806428@163.com
密码：wz835755
wx813b86471cd378de
cd32154e970d0b59c93eef8039a17a52
c\�p    x�a 	%�showdoc	项目信息仓库服务器信息：
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
c\E��                                                                                                                           �n 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdoYO6ccZYzh3MkEwogkU5MSBIDfIxhMCh+xfiGHoEvIDDNWL+yBlPHhhpLO4sFCFtjdl4xDdkfkoi48emMUF4/EYw+DUOt6ZBkH3MN4eAUXBrwxz7949BnyC0H86PiiN7ppHP9OFbw5TRmrJSo7jvfnyyBTz++La74tJNpEQ+Cir8pKIvF64sAjBo1IgMoIQlYtKYi/fh7xf1B7HzipR541icIOqzHqIW5M/4uyq/nrqLXFkLsYrQYhiDU4nGXdjeEuzPT28eu1GLUCnM34qwCIAoGAw6OUF49ErvLnqaUw1TtUv6tw45HLMwyT83ZFe3LQyM/hgC48fNMQso0iiBwjC48/x+Es8eUQysJEwiW9j4VN3liVN5bxkkXWQMxdPF1bZPsVT1slFMF7PF4ypZ/jlA+pZDyASlxirsj2s4qFIT   k   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|    �  �                                                                                                                                         �Z 	1�eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh506e7z9bl+fXrUjvp4lay9IOuJEP36rwvvBlrOXwq0trQFWttaQ8G4LH2NI2pQlYd4EQdgiacd6UfH5uKukZ4wHu+/OVz9op8Xb1//5PrFN4czVnbbLEyQwwSZ+85YmjTST8nciJUYRV2VVSQzQ8Z3S0umpsnETLe3X1XjoWDw7t27gducGBEkLRqIiMEYJ2qcEFSpaLw/frHZ4zlzxpzNkh9Gjfk9Ush7wuGwR+BFbfCc2MeLg+diQ8od4RysfceeOnNGLzw1N4aN6Skyt6Tnpo31LTI/WxxPmUcZc3VMP84Yi69h2Rk2pB+njeHsyQTFiMRRAIsDATzIxeICRvYvZE9RdZD5KEOOHpiFBePxmMdDkutkZxoQnMNkewT2Bld5PPfu3fOAmQj9p+OD4uiuefQzW/jmMGkkl6zEONmbL49MeX5fXPt9McHF4wIf4VReEpHbi+QXIR5MCkRGEGJyEUns5fuQ+4sZDDHSC/vVoqU3hoEHVZlzEbcmfySZVf311FviyDjKKwEITA1OJx13YrhLcz09vHrtRi1AZ2n8VIBFAECBQMDNC8ajV2Rz1dWYapyqX8y5MUjPqItJ5LsjvbBppWfIwRYZP2iIWUaRRBcQRMafk/GXZPLIePCioTCNb2PhU3eWJU3FbrLIOsiai6cLq1yf4ipbykUwXs/ljaln5OUD5lkXIBqXKKdyPZziogg1O5Uh+   W   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��{    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh50menznfvXp0ftqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/kH2LakXmoww5emAWFozHYx4PSa6TnWlAcF4m2yOgAiLi8dy7d88D3iD0n44PiqO75tHPbOGbw6SRXLIS42RvvnxlyvP74trviwkuHhf4CKfykojcXiS/CGFnUiAyghCTi0hiL9+H3F/MVUiFXtivFi29MQw8qMqci7g1+SPJrOqvp94SR8ZRXglA/GtwOul1J4a7NNfTw6vXbtQCdJaunwqwCAAoEAi4RcF49Ipsrro6U41T9YsFNwZVGHVxiXx3pBc2rfQMOdgi4wcNMcsokugCgsj4czL+kkweGQ9eNBSm+W0sfKpmWdJU7CaLrIOsuXi6sMr1Ka6ypVoE5/Vc3ph6Rl4+YJF1AaJ5iXIq18MpLoZQt1MZk   H   �eHVyNekuSKRKvasjeyqsbxvja0aa889k7QKiRUE1Oj1CURb4GS9MA0geHPMnJ+wXoziwjYe38JzTz0BIbcTrBrt967Ah09watnYT1mvXuN8vvSsaB0/MnenPapokZqpypIAKrimUHmnK+AELV7nR8g//WhBz6/i+xmqOd2P7lQXFBecLMMhUQtnJItVWqcmgPH/G1bHYJRLEPKiHixj4sMRYrUbjjr1FDjih84Prt24Ul98bjGICyRh57UblI3xzFKD9CF4vBjjBhvEHOdAqSVjlgTYHRbkyj0nKLXEMruDU/t4ZddTbIDn7npuaO1M4Ee/1ScqYqjWdE+ZQ6e8aPHT4jM28vh41HxZhEI6JfEFvkdm5aEGePk8eJOSGSB5pCeB6GxA0SckbSyk9aM1QKhL7UbsXObnyt6eyselGNe4bI3dDH483UBpTakLnPMi3VDqgJIQhfjLWnsKM3Xkf2oUaeUSjPXl/9UGb2FPjfopx3nDuZnvVCqtKi+uXP2eRtoc4DRVFTAnzxNaD7Q9tSLQN1U6JlqeVva4tJx1N00Ve+zars5IytbVfFA5D+WqtZW2gJ6I1TLEtmC/ykajnKJU+VwvzLIJNtrPQRdYmkzjiRWXUeXGtyZh7Mbb/KVoFp/U93ECK9Z2cVZuz9pNekWhQTk7O3gRQeVQJ6q5ROz2nkrgmfEGpxJ0h7zqtt+24QsyegrfqIm6gqWCkKzG+nG9RR49An5SMDNJr+7C1RS4ZRxKnnvRKAVAZoATSa5WxKjbjNGc/tu0VyNiFw0nJGoyB99/Ru5BHs2bndj9CU3k1eBgvOIFZ8hrC+JlRWXlmsOYalZjip3IGpgQ57zvCKtj1vE8dGfQE51U0VwOchRueuRLdhV8dHL1AH/EpDo+MJ8/1/Pg9NfufAIkOJYTEtCR/tu69esSzJwA9Wi8UN8skwq7v2suPjFS8+5I2lqRS+YJQNTBDn6tuLikPIpq8oBIfHr1Ssdnn3cE1UG16mBOGeujVu6V8XC2anlnx   �/sfXusIxmPVh5c9iqpWQix4hRUbtv3umJD7HrklwjXZPFyCe6u1M2bNjDLQjtJvxsMczOmF7+nxaCR3nMhCqkIwXsyZxTFwRxcsCnx09WN6sVbgZg0X936tJwgeCF3nv/mG/ZTXQs6iZhSGb+gjmY1zdyX5NroqArdJkKVsDy/w6hD6GOguAc6lu0Ba1Ohn7/h5Z3dXd/g6CEoKDxTEos9VOCBYOabAvY2cXpAd9rUUkPT8npX7zpxK/ZEcYRiSElNpnH0ISYIPfq5sQ9GBTozp53pxC27FF/XiUTnoqwxiEAqQ0gb/0Hs+lSDKBFq6faGYFFVCCUUO2QMB4AU+GohKMdAvoDjaBaIihLHZhqIgpaezxsahC6q1Fqr1BGRI4AJ9Gh/j3DhWBlqQcfr8gyLQkbfCiXMq6wYzlrfw8TJtK11KXagFuxAQpL4+Tg7wJH69bLRKpfc1VRIkNsbJtnRbrXRbgK2sqNp9YxJPTlD1qaS3KVXyxAQbwX7kUdg21p8wDFHi+tU/ksOfSn18FD6vkVYML6SBbciTo+ktUtf3n+AXL+kg/Vl5rAKpAmvw5kvr1RasUftl6S7I6fk0Hh+2snnreBE/eoxkTtVkEfWygsKR7LLLLYAiN9lE4malv7jZySkJYH22R+AqV44IAlIzH70CX1Mws7iCsz9AW2T+RB4K0QakEeL7Cd6FBC0AWOvArI4RLV3YfwnY9lc1tD3018CJ/69ULiBQgKTAcgfGyxEgT/Bw6ccZKzcMDi2tbJbWHxvLG8YvD4xixtr/xe1lIH++19eMU5vG0h74F+Hj8VKmSB8JfsUKPNS4JBvrWxQPfw8HxRKeLNBNUNnGqmeD5cd/saDAyuwAJwSi0E2wQUnuo0l2MdgWGqDY4IEz7ADLCyRygZPBgKwJnNLcRYG7XZEv/bAOfR9VB+oHp1ZawijCx6JQ/BGnBXNmCz8BvxCt5w4aS7eCdJQThES/JHLVAHCMG2tg6gHwBz6ca4xxATB6oVjUWzEeqFmph    gEeB1/pR+nGAG0A0MOKt91GGBsZWAKxgxaZ3MHSGdJTLuyTUyad8en5RSdW+UKEPg3yNWkCJIQYJFBNzRFz5QjPp3H6AZ4Yr8g2+xFEHwCpFngijYdXK7BwIuEF6Hz37W5hxdxJUzX0wkRj7S+C9tDB3NG4W3xvWJU1zg/XowiC+gb1zWcFWON4FODnt421H/HeQ7y2iyKoiY81ocvtqKkGQJKBefxkMtJ440uwMTfIK6rydhuT06hu4xqAt9r4HZfFUMLexkER04t4aWUM398w1jNw0CG8PeJhtRgu7+uHk0zVlMstfwM65VQudotVL4uaIJyq0N9dnqhR6MTot1GoAvJ/KvQuKCQAVJgcX3CM1TjJJqJIi7/Vf8HfFoFWUj88pFXmR/j1PuXCLme+m1Ag0E7yELKSgALdnUIH52Froh+EFI6AowW6GbUWel+gP2NvE+8tG9lfoYL0ww1IlFPgCL0InNin9oMND45xYZtO+4nn6ET4kpXZNTcLpCDXklCQl1zV/mHHtX+HyV8G0AAz//gneSc2+M7ajONHZ6FpIB9KXLml8tHbnNqMLqObzj3uZoWEw+E4e5vznYWrmhJolznIG0UNtEN/pvqgqLvs/ZpsUBpKsoSXudi3FXpr8tNFZMeaNZS4wm3lJWxcgrtEzSJRi3MyH/3WzXXh8/7WJj8KhVCF5+jRcv5ea9kLTSe2VSOWd1OHEo5C7pwpz9rBrJjlhDZMZMjWrjVxVhzyWkSSyH/Rf6mJ6W5+z/73BuJidzPQr9OnkPaopnCIHNZl39/QOI17j2Hsz3C4j1OviqTRjHK+5kA7G4t1kDuj7yz3GTTbfsTKMjuEznIfSLEhmE9oSr/v7B0y5+waQHcIEorJ/AC5t0BN2v8+0asfkNKNLzu+7Lj1YefVrzo64Wep+NDKbhqLOWNmGH7a/6P4UfkPET9ShsSoD89DPm8ZUzuE3JHzxxTtMitGQYMBZsB7GHzbK/m6mgabLre3ELYEj/wJGwtZ7w==c[��m    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWWtT21Ya/u5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYV9ADWy5OhCoNPJmLsJGGghEAgkuOGWNthJm4JjQ/kvrY4kf8pf6Ht0bCPbMpvu+gPY0nmf9/6c90jtqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/7DtUKTIfZcjRA7OwYDwe83hIcp3sTAOA8zLZHgENEBCP5969ex5wBqH/dHxQHN01j35mC98cJo3kkpUYJ3vz5StTnt8X135fTHDxuMBHOJWXROT2IflFiDqTApERhJhcRBJ7+T7k/mGeQib0wn61aOkPw8CDqsy5iFuTP5LMqv566i1xZBzllQCEvwank153YrhLcz09vHrtRi1AZ+n6qQCLAIACgYBbFIxHr8jmqqsz1ThVv1hwY1CEUReXyHdHemHTSs+Qgy0yftAQs4wiiS4giIw/J+MvyeSR8eBFQ2Ga38bCp2qWJU3FbrLIOsiai6cLq1yf4ipbqkVwXs/ljaln5OUDFlkXIJqXKKdyPZziYgh1O5Uh+   '   �QVXRWrSXJFoYbrWRmbVWN63xlaNteeuSVqFxAkCavT6BKItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAyO04p0b63Svw4ROSXDb2k9ar1ySXKz4rWMePzN1plypaZGaqsiSACo4pVN7pCjhBi9X5EfJPP1rQc6vkfpppzvZjO9UFxQEny8D7tXBGolCldXICSPy/YXUMRnCckhfzYBmTHI5Qq51wzKmnwFE/dH5w7caV+uJzikFcIAk7r91gbExmlhqkD8XjxSgebBBzkgWlloxZGmBnWJAj90pBqSWW2R2S3Ccru65iAzy+67qhtTNBHv1Wn6jIw7Rme8oYnfJixc+Kz9jIkeNR82UBCumUxBf4HpmThxrg5XLgTUZmgOSSnhSiswFFn5C0sZDSj9YAoS61G7FzmZ8re7sqH5OiuHHZGrtp8ni6gdKaUhe40os2OMkDRkIM4i9r7SrsqSP/U6PIKpdirC//rza4C7tq1M84zh3OyXynUmlVeeFy9bsaaXNAqeuqgJXyPK71QNtTKwJ9U6VjYuVpZY6Lyxln01Sxx67t6oxkbF3NB5XzUK5aW2kL2IlYLUNtC/SrXCSCFaXK53p+lotzkX4MXWBxMkUmVhxGlXvZmoSxe2nzl4JZeFLfxwmcWNvFWdk9azfhFoUG5VzawY0IKoc6Vc0hYnfsTILMjDc4laA75FWn/bYNX9DRU/hGjdcVLBOEZDXWj+stcukRyJO8mU64dReOpsApU6LkuReNUgBkBrBIc7UixtxmjGb136bdGhG7aLAQr8kccv8Zvdq4NG92YvfHNZFXA4OxihdKQ25bUC8rKifXHMZMsxpT7ETWwIQYdr8jrI5Zx/PQnUFPdFJFc1nIUbi80S+ZVfDRydUD/BGV6vjAfP5cz4HTXzvzCZDgWI5LQEf6b+vWr0swcwLUo/FCfbNMK+z+rrn4xEjOOyNpa0XvjScAkRJ24GvFwSXlUVSTB1Ti06tXOj77vCOgDqpVB3PSWB+1sq+Mh7NVyzs73   �v/wWkcgFq0+vOxRVLUSYsErnNiw7XfGhN736C0Rbr7m4RJcRa2dMWtm1APtKPtmPMzCnJ7/nh2PRmKnFFlIVQjGizmzMAbu6IJF/o+ufszuygpcluEu3q/1BMADwev8N99wn/JasLSoGYXgG/pI5mL4riTfRldF4DYJspTr4QVeHUIfA93FwblsF0iLGv3sHT/v7O7qDl0HQUnhgYI49LkKBwQnRxW4t9HTC7LDvpYCkp7bs7LfmVPJPxIjHg9NiakUyTyEJCEHP1e2YehAJ8b0c72wBbfii3rhqBz0VQ/yIOSnpQ3+YVd3JkGV8bd0e4NRKaIE44octAf8wAt8xB+RoqCfXylp54+IEMZmG4qBFJ/OGhuHDqjWWqjWE5AhAfv7ND6KnThWGlqQcfZIgyGwkbfCiWGVc4IZy1vkeJm1lQ6lLtSCXfALUl8flv08jV8vF6lS6X1NlQSJi2LZlm6rlW7zc5UVVbtvTJLJCaY+k3Q3pUqemmAj2I888tvG+hOPhypx/eofieFPpT4+Ap/XaCtGFlLANvRh0PQWrev7T8iLl2yQ/YQ8YL0RpAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+yyy82Pwje5ePxmpb+42YmVOLA+1yPgypUjjIDUzEevwNcMzCyskMwP0BaZP9HnPKwBaYT4fpx3IEELANaWYFbHqJYO7L8EbPurGtoe+mvg1P9XKhcQKEBaYNkD4+UIkCd4uPjjjJUdBocWVzaL64+N5Q3jlwdGIW3t/+L0MpA/3+ttJslNY2kP/IvI8XgxXWBP+b7iBB5qXJKN9S2GR76Hg2KJTObZJqhsY9XjvvITvWhA4GRuAAv+CHQTXECS+1iSXQy0BQcYNnjgDDfA8QKNnP9k0C9rAlaauxhwtyPyxR/Woe9j6kD9kORKSwiF+WgEij9casFKs/mfgF+o1nMHjaVbQTqCBSHeL4m4GgCOcWMNTD0A/iCHc40xLgBGLxSLeivKAzUr1    TDA4+Ar/SjVGKANAHo48bbTCGMjDUsgdtAi0ztYKk17yoV9esqk0l49t1iKVS4fZk+DvE2aAAkhBihUU3PYXDki8ymSekAmxiuyzT4E0QdApgWZSJHh1QosnEhkATrffbtbWDF3UkwNPT/RWPuLoD10MHc0fIvvDamyhn1wPQojqG9Q33yWhzUljwL8/Lax9iPZe0jWdlEYNfHRJnS5HTXVAEgyMI+PToYbb3wJNsaDvKIqb7cxPY3qNq4BeKuN33FYDCXsbhwUMbuIF1fGyP0NYz0NBx0i2yMuVouh8r4+OMlUTbnc8jegU6zi6C1OvSxqgnCqQn93eKJGoROj30ahCsj/qdC7oJAAUCF6fMExVuMkm4jCLb5W3wVfWxhaSf3wkFWZD5HX+4wLu0rz3ZQCgXYSh5CVFBTo7hQ6OA9bU/0gpHAEHC2wzZi10PsC/Rl7m2Rv2cj8ChWkH25AopwCR+lFwGKf2g82PDgm+W027aOeYxOhS1Z619zM04JcS0BBXnJU+4cd1/4don8ZQAPs+cc/6Tu1wXvWZhwfOgtNA/1QYsotlY/cxmozuoxulu5xNyskHArFuNvYexauaoq/XcaQN4rqb4f+TPVCUXfZ+zXZoCyUdAkv4+i3FXpr8rFFdMeaNYy4Qm3lJVxMgrtEzSJRi2GZj3zr5LrQeV9rkw8Fg6jCc+xoOX+vteyFphPbqhHLu6lD8ZJCzpwpz9rBrJhVCm2IytCtHWtinDjktogmke+i71KTp7v5PfvfG4iL3c1Av86eQtqjmoIRPazLvr+hYQ2/5/HYn6FQH1avirTRjGBvs7+di0Y76J3RexZ/Bs22D3GyzA2hs/gDKToE83FN6feevUPnSrv60R2KhKIyP0DvLVCT9h9K7OoHpHTjy44vO2592Hn1q45O+FksPLQym8Zi1pgZhp/2/yg+VP5DxIeUITHiJfOQz1vG1A4ld1T6Y4p1mRWjoMEAM+A9BL7tlbxdTYNNl9tbKFuCR/4EzeE8QQ==c[��O   �);color: rgb(255, 104, 39);letter-spacing: 0.544px;box-sizing: border-box !important;word-wrap: break-word !important;\">- END -</span></strong></p>\n<p style=\"max-width: 100%;min-height: 1em;font-size: 15px;letter-spacing: 0.544px;white-space: normal;font-family: -webkit-standard;caret-color: rgb(0, 0, 0);text-align: center;widows: 1;line-height: 27px;color: rgb(62, 62, 62);background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;\"><br style=\"max-width: 100%;box-sizing: border-box !important;word-wrap: break-word !important;\"></p>\n<p style=\"max-width: 100%;min-height: 1em;font-size: 15px;letter-spacing: 0.544px;white-space: normal;font-family: -webkit-standard;caret-color: rgb(0, 0, 0);widows: 1;line-height: 27px;color: rgb(62, 62, 62);text-align: center;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;\"><span style=\"max-width: 100%;box-sizing: border-box !important;word-wrap: break-word !importa    j _�� � j                                                                                        l* 	%�	showdoc文档信息eNozMjTUMzSx1DMyNtczNLQyNrawNOByTMnNzMssLilKLMkv4irNzTNKqko3AQDo9Qxqc[�;Áz) 		+�-showdoc服务器信息eNrLyazITMxLL0jNS7cwU1Dgerq+7fmCxvd7ZpWn5FZl5VQUAEW5ns/c/XTvVLiUD7Ierhf75zxf0f1i/7xnfUvhShQszQyMzI24nraueb53YmaBlaGhpZ6RsZ6JqZ6hoQXX07ZWqLC5kZ6hhZ6ZkZ6pCVduZXFhDsQIKwUUSxS5ns6f/3RCr1V5ebleYTpQYbpecn4uFwClHFVyc[�	�f( 	�showdoc文档eNqNjb0OgzAMhHeegsVrTPipgAmQ4D1QGkGQiVHqVmqfvoGxU7c7352/VeRoESW8tVabm/k+c7BeGd6RoiXnF3JIr4f9rM9Y8DjDWMEwQT/A2ECdQTOdl7qCvrpEjAq1yk5JsjhJDbG3aVRd0Sid3VSuS5WXeYtH4M0aQcNeAhPZcIFOSoSpOPn/Q7C/2y/8fUZtc[�.Y�' 	�showdoc文档eNrLKCkpsNLXLymqNDTUy8pMzE9JzC9KzdNLzs/VzwFyczLz0nMy9XPKilOrMkqBCvL0E1VdTVWd3FQdnVRdLVUtDFQt3UAiFqaqjqZgBlDKWC+jJDcHANKBHOg=c[�l�& 	�showdoc文档eNrLKCkpsNLXLymqNDTUy8pMzE9JzC9KzdNLzs/VzwFyczLz0nMy9XPKilOrMkqBCvL0E1VdTVWd3FQdnVRdLVUtDFQt3UAiFqaqjqZgBlDKWC+jJDcHANKBHOg=c[�	   �l9wNaSmzBWJNqZrb2RWjeV9a2zVWHvuWqRVSJwgoEavTyDbApb1/DSAkM0xc37CejFK8ttkfIvMPXUFhNqOc2qk370DHz4hyWVjP2m9ek1yueKzgnX8yNyddumiReamKksCmOC4hcqarkAQtFhdHKH+9KMFPbdK7qeZ5Uwf01SXFAecLAO918IZiUKV1ckJ4Or/htUxGMFxSl4sgmVMcjhCvXbCsaCeAkfj0PnBtRtX6pvPKQZ5gSLsvHaDsTGZWWpQPhSPF6N4sEHOSRaMWjJmaYKdaUGO2islpZZYZndIcp+s7LqKDfD4rqtCa2eCPPqtvlCRh1nNdMoYnfJizc+az9jIkeNR82UBGumUwhf4HpmThxrg5XIQTUZmgORSnhSiswFFn5C0sZDSj9YAoa60G7FzmZ8rul2Nj0lR3Lhtjd00eTzdwGhNqUtc6UXnmOQBIyEG8ZetdhX21JH/qVlknUsx1pf/Vx/chV0t6mcc5w7nZL5TqbSqvXC5+12dtDlAP04bw9kTsFKdx7UeGHtqRWBuqkxMrD2tzHFxOeMcmir+2L1dXZGMrav5oLIfylVrK2MB2xGrZahvgX6Vi0SwolTFXM/PcnEu0o9hCixOpsjEisOp8shaUzD2yGz+UjALT+rnOIETa6c4K7tn7SbcstCgnUsa3IigsqlT0xwi9mDOJMjMeINdCaZDXnX6b/vwBb16Ct+o8bqGZYJQrMb6cb1HLjMCeZI30wm36cIxFDhlSpQ896JRCYDMABZprVbEWNiM0az+27TbIGI3DRbiNZVD7j+jJxiX4c0u7P64JvJqYDBWiULpkpsKGmVF5eSazZhZVuOKXcgauBDD7meE1THreB6mM5iJTrpoLgs1Cmc0+iWzCjE6OXpAPKJSHR+Yz5/rOQj6a2c9ARJsy3EJ6Ej/bd36dQnunAD1aLxQPyzTDru/ay4+MZLzzkzaVtHj4QlApIQd+FpxcEn5KqqpAyrx6dUrHZ993hFQB9WqjTlprI9a2VfGw9mq5   �Z0d7394rSMQi1ZvXvZVVLUScsErnNhw7HfmhJ736CkRDrjm4RKcOK2dMWtm1APjKPtmPMzCPT3/PdsejcROKbNQqpCMF3NmYQzC0QWL/B9d/ZgdiRU4E8ORu1/rCUAEgtf5b77hPuW1YGlRMwrBN/SRzMXwXUm+ja6KwG0SVCnXwwu8OoQ+BrqLQ3CZFiiLGvtsjZ93dnd1h66DoKTwQEEc+lyFDYKTowqc2+juBdVhH0sBSc/tWdnvzKnkH4kRj4eWxFSKZB5CkZCDnytqGDrQiTH9XC9swan4ol44Kid91YM8CPlpa0N82AmdSVBj/C3d3mBUiijBuCIH7Qt+4AU+4o9IUbDPr5Ss80dESGOzDcVAik9njY1DB1RrLVTrCciQgP19Gh/FThwrDSPIOHtywRDYlbfCiWGVc4IZy1vkeJmNlQ6jLtSCXfALUl8flv08zV8vF6ky6X1NlQSJi2LZlm6rlW7zc5UVVdo3JsnkBDOfSbq7UiVPXbAR7Ece+W1j/YnHQ424fvWPxPCnUh8fgc9rdBQjCylgG/rMZ3qL9vX9J+TFS3aR/YQ6YLMRlAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+qy282Pwje5ePxmZb642YmVOLA+1yPgypEjjIDUzEevINYMzCyskMwPMBaZP2XBDjaANEJ8P847kGAEAG9LMKtj1EoH9l8CtuNVDW1f+mvgNP5XKgcQaEDaYNkD4+UIkCdEuPjjjJUdhoAWVzaL64+N5Q3jlwdGIW3t/+KMMpA/3+ttJslNY2kP4ovI8XgxXWAP877iBB56XJKN9S2GR76HjWKJTOaZElT2seqpXvnBXTQgcDI3gAV/BKYJLiDJfazILgbaggMMGyJwhhvgeIFmzn9y0S9rAlaauxhwtyPzxR/WYe5j5kD/kORKSwiF+WgEmj9cGsFKd/M/Ab9Qq+cOGku3gnQEC0K8XxJxNQBs48YauHoA/EEO5xpjXACMXmgW9VaUB    2pWqmGAxyFW+lGqMUAbAPRw4m2nE8ZGGpZA7mBEpmewVJrOlAv7dJdJpb16brGUq1w+zJ4GeZs0AQpCDFCopuawuXJE5lMk9YBMjFdkm30Isg+AzAoykSLDqxVY2JHIAky++/a0sGLupJgZen6isfUXwXqYYO5o+BbfG1JlDfvgeBRG0N9gvvksD2tKEQX4+W1j7Uey95Cs7aIwauKjTehyO2qqAZBkYB4fvRlurPgSKMaDvKIqb6eY7kZ1imsA3krxOw6PoYXdnYMmZgfx4soYub9hrKdho0Nke8TFazFU1uuDnUzVlMstfwM6xSqO3uLUy6ImCKca9HdHJGoMOnH6bQyqgPyfBr0LBgkAFaLbF2xjNUGyiSjc4mv1XfC1hWGU1A8PWZf5EHm9z7iwq3S/m1Ig0E7iEKqSggLdnUIH50E1tQ9SClvA0QJTxryF2Rfoz9jbJHvLRuZX6CD9cAMK5RQ4Si8CFvvUfvDhwTHJb7PbPho5diN0yUrvmpt52pBrCWjIS45u/7Dj2r9D9C8DGIA9//gnfac+eM/ajONDZ2FooB9KTLml8pHbWG1Gl9HN0jnuZoWEQ6EYdxt7z8JRTfG3yxjqRlH97TCfqV5o6i5bX5MNylJJl/Ayjn5bobcmH1tENdasYcQVaisv4WISnCVqFolaDMt85Fsn14XO+1qbfCgYRBWeY1vL+Xut5Sg0nfhWjVjWpg7FSwY5a6Z8105mxa1SakNUhqp2rIlx4pDbIlpEvou+S02e7ub37H9vIC/2NAPzOnsKaV/VFIzoZl2O/Q0Na/g9j8f+DIX6sHpVpINmBHub/e1cNNpBz4zes/gzGLZ9iJNlbgidxR9I0SG4H9eUfu/ZO/ReSasf3aFIKCrzA/TcAj1p/6HEjn5ASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gn/j+JD5T9EfEgZEiNeMg/1vGVM7VByR6U/ptiUWXEKBgxwA95DENteydvVNNh0ub2FsiVE5E+Qciyec[��7    {  {                                                                                                                 �r# 	1�showdoc框架说明文档eNqlWWtT21Ya/q5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYUtQI0sOboQ6HQy5m4CBloIBAIJbrilDXbSpuDYUP5LqyPJn/IX+h4d2ci2zKa7/uCLdN7nvT/nPXI76uNVvPYCryfD5Ou/LrwbbDl/Kdja0hZsbWsNhxKy9DUXVUOqPMSLXBCWMO1IPzo2F3eNzITxeP/N4eoX/bx4+/on1y++OZyxcttmcQIfJvHcd8bSpJF5iudGrOQo6qqswtkZPL7rLJmaxhMz3b5+VU2EQ6G7d+8Gb7NiVJC0WDAqhuKsqLFCSCWiif7ExWaGOXPGnM3hH0aN+T1cLDCRSIQReFEbPCf28eLgufiQckc4B2vfsW+dOaMXn5obw8b0FJ5b0vPTxvoWnp8tjafNo6y5OqYfZ43F17DsTCnz2nyUpTf044wxnDu5TZCiCRTkxIEgN8jGEwKH7F+IYegS8gPc1Yv7IGU8eGGks7iwUIW2N2XjgC4EivDRA7O4YDweYxicWsc70yDnvoy3R8BaCC7D3Lt3j4HAIPSfjg9Ko7vm0c904ZvDlJFaspLjeG++fGWK+X1x7ffFJJtICHyUVXlJRF4vXFiEDFIpEBlBiMpFJbGX70PeL+qO42aVqPNGMbhBVWY9xK3JH3F2VX899ZY4MhfjlSCksgank1x3Y3hLsz09vHrtRi1Ap3P9VIBFAEDBYNArCsajV3hz1dOZapyqXzS4cSjomIdL+LsjvbhpZWbwwRYeP2iIWUaRRA8QhMef4/GXePKIFGAjYZLfxsKnapYlTeW8ZJF1kDMXTxdW2T7FU9apRXBezxeMqWf45QMaWQ8gkpcYq7I9rOJhS   �   �QVXQ2rKXJFoX7r2RmbVWN63xlaNteeuRVqFxAkCavT5BLItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAqO04p0b63Tvw4ROSXDb2k9ar1ySXKz4rWMePzN1ply5aZG6qsiSACY5bqKzpCgRBi9XFEepPP1rQc6vkfppZzvQxTXVJccDJMrB7LZyRKFRZnZwAqv5vWB2DERyn5MUiWMYkhyPUayccC+opcDQOnR9cu3GlvvmcYpAXKMLOazcYG5OZpQblQ/F4MYoHG+ScZMGoJWOWJtiZFuSovVJSaolldock98nKrqvYAI/vuiq0dibIo9/qCxV5mNVMp4zRKR/W/Kz5jI0cOR41XxagkU4pfIHvkTl5qAFeLgfRZGQGSC7lSSE6G1D0CUkbCyn9aA0Q6kq7ETuX+bmi29X4mBTFjdvW2E2Tx9MNjNaUusSVPnSMSR4wEmIQf9lqV2FPHfmfmkXWuRRjffl/9cFd2NWifsZx7nBO5juVSqvaC5e739VJmwP047QxnD0BK9V5XOuBsadWBOamysTE2tPKHBeXM86hqeKP3dvVFcnYupoPKvuhXLW2MhawHbFahvoW6Fe5SAQrSlXM9fwsF+ci/RimwOJkikysOJwqT6w1BWNPzOYvBbPwpH6OEzixdoqzsnvWbsItCw3auaTBjQgqmzo1zSFiz+VMgsyMN9iVYDrkVaf/tg9f0Kun8I0ar2tYJgjFaqwf13vkMiOQJ3kznXCbLhxDgVOmRMlzLxqVAMgMYJHWakWMhc0Yzeq/TbsNInbTYCFeUznk/jN6gHEZ3uzC7o9rIq8GBmOVKJQuuamgUVZUTq7ZjJllNa7YhayBCzHsfkZYHbOO52E6g5nopIvmslCjcESjXzKrEKOTowfEIyrV8YH5/Lmeg6C/dtYTIMG2HJeAjvTf1q1fl+DOCVCPxgv1wzLtsPu75uITIznvzKRtFT0dngBEStiBrxUHl5Svopo6oBKfXr3S8dnnHQF1UK3amJPG+qiVfWU8nK1a3   �tnx/ofXOgKxaPXmZV9FVSshF7zCiQ3HfmdO6HmPnhLhfGseLsGB09oZs2ZGPTCOsm/Gwyzc0/Pfs+3RSOyUMgulCsl4MWcWxiAcXbDI/9HVj9mJWIEjMZy4+7WeAEQgeJ3/5hvuU14LlhY1oxB8Qx/JXAzfleTb6KoI3CZBlXI9vMCrQ+hjoLs4BJdpgbKosc/W+Hlnd1d36DoISgoPFMShz1XYIDg5qsC5je5eUB32sRSQ9Nyelf3OnEr+kRjxeGhJTKVI5iEUCTn4uaKGoQOdGNPP9cIWnIov6oWjctJXPciDkJ+2NsSHHdCZBDXG39LtDUaliBKMK3LQvuAHXuAj/ogUBfv8Ssk6f0SENDbbUAyk+HTW2Dh0QLXWQrWegAwJ2N+n8VHsxLHSMIKMswcXDIFdeSucGFY5J5ixvEWOl9lY6TDqQi3YBb8g9fVh2c/T/PVykSqT3tdUSZC4KJZt6bZa6TY/V1lRpX1jkkxOMPOZpLsrVfLUBRvBfuSR3zbWn3g81IjrV/9IDH8q9fER+H+NjmJkIQVsQx/5TG/Rvr7/hLx4yS6yn1AHbDaCUoE1ZPOl9WoL1qj9snQX5PRciowPW5mcdbxIHj1GMlY1WUS9nKBgWl12u/lR+CYXj9+szBc3O7ESB9bnegRcOXKEEZCa+egVxJqBmYUVkvkBxiLzpyzYwQaQRojvx3kHEowA4G0JZnWMWunA/kvAdryqoe1Lfw2cxv9K5QACDUgbLHtgvBwB8oQIF3+csbLDENDiymZx/bGxvGH88sAopK39X5xRBvLne73NJLlpLO1BfBE5Hi+mC+xZ3lecwEOPS7KxvsXwyPewUSyRyTxTgso+Vj3UKz+3iwYETuYGsOCPwDTBBSS5jxXZxUBbcIBhQwTOcAMcL9DM+U8u+mVNwEpzFwPudmS++MM6zH3MHOgfklxpCaEwH41A84dLI1jpbv4n4Bdq9dxBY+lWkI5gQYj3SyKuBoBt3FgDVw+AP8jhXGOMC4DRC82i3oryQ    M1KNQzwOMRKP0o1BmgDgB5OvO10wthIwxLIHYzI9AyWStOZcmGf7jKptFfPLZZylcuH2dMgb5MmQEGIAQrV1Bw2V47IfIqkHpCJ8Ypssw9B9gGQWUEmUmR4tQILOxJZgMl3354WVsydFDNDz080tv4iWA8TzB0N3+J7Q6qsYR8cj8II+hvMN5/lYU0pogA/v22s/Uj2HpK1XRRGTXy0CV1uR001AJIMzOOjN8ONFV8CxXiQV1Tl7RTT3ahOcQ3AWyl+x+ExtLC7c9DE7CBeXBkj9zeM9TRsdIhsj7h4LYbKen2wk6macrnlb0CnWMXRW5x6WdQE4VSD/u6IRI1BJ06/jUEVkP/ToHfBIAGgQnT7gm2sJkg2EYVbfK2+C762MIyS+uEh6zIfIq/3GRd2le53UwoE2kkcQlVSUKC7U+jgPKim9kFKYQs4WmDKmLcw+wL9GXubZG/ZyPwKHaQfbkChnAJH6UXAYp/aDz48OCb5bXbbRyPHboQuWeldczNPG3ItAQ15ydHtH3Zc+3eIvjKAAdjzj3/Sv9QH71mbcXzoLAwN9J8SU26pfOQ2VpvRZXSzdI67WSHhUCjG3cbes3BUU/ztMoa6UVR/O8xnqheausvW12SDslTSJbyMo99W6K3JxxZRjTVrGHGF2spLuJgEZ4maRaIWwzIf+dbJdaHzvtYmHwoGUYXn2NZy/l5rOQpNJ75VI5a1qUPxkkHOminftZNZcauU2hCVoaoda2KcOOS2iBaR76LvUpOnu/k9++0N5MWeZmBeZ08h7auaghHdrMuxv6FhDb/n8dj/Q6E+rF4V6aAZwd5mfzsXjXbQM6P3LP4Mhm0f4mSZG0Jn8QdSdAjuxzWl33v2Dr1X0upHdygSisr8AD23QE/S90ml9zFASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gm/R/Gh8gsRH1KGxIiXzEM9bxlTO5TcUenFFJsyK07BgAFuwN8QxLZX8nY1DTZdbm+hbAkR+ROtSCx+c[��.   O O                                                                                                     �' 	%�showdoc项目信息域名：
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
c\=M|                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �r- 	�-showdoc文档eNqNTz1PwkAY3u9XdOl6pZSS1omikBANiUKispHj0g+PFtsDAhMOajQaYDMu6KITkhgTE1D4MVBbJv+CV0zExMWb3vf5eJ/nDEprG4JA3ZYoQsssO5Wy42IbIqcqELYS09aJKZCGh9tGnQlsocxnZD6d5bU0n1F5Jcar2QhRZF6TVwOjJGjQKgFANymHiGNjjk0pSYViLAnjYgLGE/ENoeY6FkZUQI5NXYcQ7K6CohQWBpnl/xdc/NcL/MHA711/vt02m01IvLZ1ZEU/A+HpNHwaLcZ97htMiUkpIjh/dBbcnTDDilDYA8FguJjdMwhoCGHP28atXIWtO0Utl1DlzGHJQwf5ZH1NFzByMWWSRl3SjZKnxdrH+ZImoU3PtNC+vqUUdmvFPRAMp6zdvNMLJrPw4nnx3vUn4+Cx/3HZmXf6YHkzW55fsZLhy4PffWX3fuu4ddefql9tu8E3c[�_   �nt;\">首席商业评论联系方式：</span></p>\n<p style=\"max-width: 100%;min-height: 1em;font-size: 15px;letter-spacing: 0.544px;white-space: normal;font-family: -webkit-standard;caret-color: rgb(0, 0, 0);widows: 1;line-height: 27px;color: rgb(62, 62, 62);text-align: center;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;\"><span style=\"max-width: 100%;box-sizing: border-box !important;word-wrap: break-word !important;\">投稿及内容合作｜editor@chreview.cn</span></p>\n<p style=\"max-width: 100%;min-height: 1em;font-size: 15px;letter-spacing: 0.544px;white-space: normal;font-family: -webkit-standard;caret-color: rgb(0, 0, 0);widows: 1;line-height: 27px;color: rgb(62, 62, 62);text-align: center;background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;\"><span style=\"max-width: 100%;box-sizing: border-box !important;word-wrap: break-word !important;\">广告及商务合作｜bd@chreview.cn</s   �pan></p>\n<p style=\"max-width: 100%;min-height: 1em;font-size: 15px;letter-spacing: 0.544px;white-space: normal;font-family: -webkit-standard;caret-color: rgb(0, 0, 0);widows: 1;line-height: 27px;color: rgb(62, 62, 62);background-color: rgb(255, 255, 255);box-sizing: border-box !important;word-wrap: break-word !important;\"><span style=\"max-width: 100%;box-sizing: border-box !important;word-wrap: break-word !important;\"><img class=\"\" data-ratio=\"0.5\" data-s=\"300,640\" data-type=\"png\" data-w=\"1000\" data-src=\"https://mmbiz.qpic.cn/mmbiz_png/icX2xXgZQYEpMJvOwOiaYoj60s5E9TEXhVwH8P9U4GYPmRYXfjmWulEuPPY8px86UgapqibQIt4iagibAeSK6UJXt1A/640?wx_fmt=png\" style=\"box-sizing: border-box !important;word-wrap: break-word !important;visibility: visible !important;width: 677px !important;\"></span></p>",
      "article_link": "https://mp.weixin.qq.com/s/t0BExH8L5lD1haOvaa58pg",
      "status": 1,
      "open_business_card": 0,
      "open_dialing": 1,
      "open_qrcode": 1,
      "red_packet_money": "0",
         "red_packet_num": 0,
      "red_packet_max": "0",
      "red_packet_min": "0",
      "open_red_packet": 0,
      "open_directional_red_packet": 1,
      "directional_city": null,
      "open_enroll": 1,
      "slogan": "我要报名",
      "source": "微信公众号",
      "type": 2,
      "click_num": 1,
      "relay_num": 0,
      "articles_imgs": [
        "https://mmbiz.qpic.cn/mmbiz_png/icX2xXgZQYEpcC4hYLQiaZArxeJfPPQHF5xhjrJBEU5IDHZ6J5SN5gX86MZxlia2tNibtc3ucUzibLUVxoyfGibBz2fQ/640?wx_fmt=png",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8CzV5ib8ewIHAbwUaz8yeOOexSrYTdS8iacjj3eOnUeMYkhptVNuCumpw/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/ica0BbQJ0cyd31khM7otqJ40AkTZeK5hFick3QKJzFCnnj3TXdjQbHSjVc4ufVnoqwE4NibdiaAfCaUmYtT7Fo90Mg/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8HInWiaSpRhrzicghPVPUVqeSoMtic5PVNvkBjoGEFric5EhkX49kPYbuJA/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkq  otxFCmpCwmTJWqF81oOCcicZrYosGO75BTQkPnC8UNxx7PlYnzIEWZovjtKvZBIcu0RVtuQ/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8m4UY1J4mOrXOVPE8nyy4P9iclJpB0AQHzznYCCjFW37Pfoiblib0PUCtg/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF82w5ZjSnqo8C30lEt3ctmQsTrj5N6uFpicibYtBOboia42bdDXjXzeJKIA/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8IqUA48ibtt1ZG0EicTrJ4Vmg7fAkzZj7xaSiaz7Q7CvWyVwsPtFEwW6Nw/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8l9yxp2Z3sq4EicSa0kayNa7iczR0yrGibbyZenBfI6D0KLtwHcFA2xBIg/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8BdZ2kEfzwEiaVE2DfFGaEl9tibV4KrAia4280qGlaTib5dCmM96N5AoLCQ/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8RyoKZOBOJcG9fjhtiaKn2Z0uOpdHiaOc914ib9TEIPiaOHiadLGpIaIOQeQ/640?wx_fmt=jpeg",
        "https://mmbiz.qpic  .cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF866X78Ou0wibR9xZPnoaMCLJ4G8ejA5iaU9986QnzuVvc9mgnJX6poEWA/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8ibGo6CMdmfkkoKIWGYNFfYSP0xmWKooCaDZLe6Tnb6TJDVjerDlHh4w/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8bG1V2Ihpf0AkTTM82mTZrdqD2kCoQv2Oat9EEBDQkrcoKIqjiaLzn0Q/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8Bu2s2pTIiaPft1MKdFXxDrLic3uaQmULDqLic5d4IwTuakuNba6Bpof4w/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8ibCV2icn33QFlyibwBYOEeKBIWX6DZtPFvPSHSS2ibBRxqicAIBsSfD0ZCQ/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_jpg/MwyxPuRdiaLwHPlkqotxFCmpCwmTJWqF8kfRZUxiaD8PMibeoOdIUQ58WsJd5CibBFDlytcat0icErL1SIWUunAjXsQ/640?wx_fmt=jpeg",
        "https://mmbiz.qpic.cn/mmbiz_png/icX2xXgZQYEpMJvOwOiaYoj60s5E9TEXhVwH8P9U4GYPmRYXfjmWulEuPPY8px86UgapqibQIt4iagibAeSK6UJXt1A/640?wx_fmt=png"
          ],
      "author": "首席商业评论",
      "red_packet_balance": 0,
      "check_status": 1,
      "new_content": null,
      "date": "2019-01-18",
      "thum": null,
      "create_time": "2019-03-11 10:08:08",
      "update_time": "2019-03-11 10:08:08",
      "user_mobile": "13262957500",
      "business_card": {
        "money": "0.00"
      },
      "article_qr_code": "http://yunxiuxiu.com/admin/ueditor/other_article?aid=7446"
    }
  }
} 

 ```


 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |1：成功 其他值：失败|
|company_id |int|所属公司id|
|user_id |int|发布用户id|
|title |string|文章标题|
|content |string|文章内容|
|status |int|1：未发布，2：已发布|
|source |string|文章来源|
|type |int|1为发表文章  2为粘贴文章|
|author |string|作者|
|date |string|第三方发表的日期|
|slogan |string|我要报名|
|click_num |int|点击次数|
|relay_num |int|转发次数|



c\�
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        �n� 	1�showdoc粘贴文章接口eNqtUF1LAkEUfZ9fcdnHJVsEQfDP6LK72JCuiztG0QglRB+SK1QmFVag9NCDGUuSSv4ZZ3Z76i9094PCh966zMM9c+aeOeeG46mctBr1ytfihmwx5hQ0ba9h79IGnk2jVtV0hxb1OqNGxXK1n8bRXWYVXX3HIkRVw1hF9t7FwkMhVSUZcGou++WE15JXLwlHeIJE95wHk7kYtHk49mW/wwkvZKICSBuewj8LR1JPxQq1t4HL3nHw/PB58SE7Iy6vn+RpW97NhDflsZnlpbgdrJmBUqkEBPYJgGLUTEspQHYjAlW3jL0SvPZD309k5UlXnN0rMW3qTEc+mkNETezzuVweYZM0IdElWLD+a5JUVeG/1xB5B05tFsEshkvMgjh6W8174mCBV2I4Cf0RPsZswF1Wp3aZS68bDGer5aM8HCNFzVglXSQ1eRTiG+dV6PE=c\��r  贴文章成功",
    "data": {
        "id": 7482,
        "company_id": 0,
        "user_id": 2029,
        "title": "最高法：纠正五周杀人案等重大冤错案十件，宣告819人无罪",
        "ad": null,
        "content": "<p class=\"text\">最高人民法院院长周强12日作工作报告时表示，2018年，全国各级法院完善冤假错案防范纠正机制，严格落实非法证据排除规则，按照审判监督程序再审改判刑事案件1821件，其中依法纠正“五周杀人案”等重大冤错案件10件，依法宣告517名公诉案件被告人和302名自诉案件被告人无罪。</p><p class=\"text\">周强在工作报告中介绍，全国各级法院认真落实总体国家安全观,积极推进平安中国建设,审结一审刑事案件119.8万件,判处罪犯142.9万人。</p><p class=\"text\">同时，加强人权司法保障。坚持法律面前一律平等，坚持以事实为根据、以法律为准绳，落实宽严相济刑事政策，坚持程序公�  �和实体公正相统一，坚持严格公正司法。严把死刑案件质量关，确保死刑只适用于极少数罪行极其严重的犯罪分子。完善冤假错案防范纠正机制，严格落实非法证据排除规则，各级法院按照审判监督程序再审改判刑事案件1821件，其中依法纠正“五周杀人案”等重大冤错案件10件。审结国家赔偿案件1.5万件。对生活困难当事人发放司法救助款10.8亿元,减免诉讼费2.6亿元。</p><p class=\"text\">各级法院还会同司法部加强律师执业权利保障，积极推进刑事案件律师辩护全覆盖。落实罪刑法定、疑罪从无等原则，依法宣告517名公诉案件被告人和302名自诉案件被告人无罪。</p>",
        "article_link": "https://xw.qq.com/cmsid/20190312A095HB00",
        "status": 1,
        "open_business_card": 0,
        "open_dialing": 1,
        "open_qrcode": 1,
        "red_packet_money": "0",
        "red_packet_num": 0,
        "red_packet_max": "0",
            "red_packet_min": "0",
        "open_red_packet": 0,
        "open_directional_red_packet": 1,
        "directional_city": null,
        "open_enroll": 1,
        "slogan": "我要报名",
        "source": "腾讯新闻",
        "type": 2,
        "click_num": 0,
        "relay_num": 0,
        "articles_imgs": null,
        "author": "",
        "red_packet_balance": 0,
        "check_status": 1,
        "new_content": null,
        "date": "2019-03-12 10:19:22",
        "thum": null,
        "create_time": "2019-03-12 13:32:36",
        "update_time": "2019-03-12 13:32:36",
        "user_mobile": "13262957500",
        "business_card": {
            "money": "0.00"
        }
    }
}
 ```



 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |1：成功 其他值：失败|
|msg |string|提示信息|
|id |int|文章id|
|content|string|文章内容|
|date|string|发布时间|
|source|string|来源|
|date|string|发布时间|


c\�D�   � �                                                                                                                                                                                                                                                                                                                                                                                        �z� 	1�%showdoc发布文章接口eNq1Ul1P2lAYvj+/4oQbkgZoC3UF/ooxUtqCx5S2oYc54zGZGmRqEEwcMZowtrCrJTIS48ck8894Duxqf2FvadWwZHfuTS/e5zw9T9/3eTob3YjxbqPu/J6cozVK/aIsbzbcd6QBT8b0arLhk1WjTonp2IH83Lj2xtPpamC8tRGSpNlcS/Tu+KQDcpKE0tj3AvrC8c6u+Pg94hCLEO+22XR8z/tHbDa6EmfHDLFiOiyM44bF8J8FVyihjo1ZQOvErTLRa02/DcSg9evLGZCm51LbpX/RfL/JL++AJrVqgNl64LmMX/ycHrRSMJdoX4rBJFplORlbY2YWzWn4jmdYsu/VqeHIWUUtKFk1J+tL+WyloOfKpmKXDcUqaHlFXaroivamrOe0QsZ3q8nU/xBdYXO3H075RX/BbVwqlTDCWwjjhOlZdqKI1VQIakEV+kRsSeeE3+6JD11++Ckxpy2DGsCH9wARC3pd03SA22gbR7oICi9+NYpSkvBr5xzOjhmBMAGqsFw0LObN68f7Hn8/gSM+HM+uvsLLsNtL5p3udPjj8eGz2BmFmVtzlfhXIBYLl/gDIA07mw==c\��\   � �                                                                                                                                                                                                                                                                                                                                                                                        �z� 	1�%showdoc发布文章接口eNq1Ul1P2lAYvj+/4oQbkgZoC3UF/ooxUtqCx5S2oYc54zGZGmRqEEwcMZowtrCrJTIS48ck8894Duxqf2FvadWwZHfuTS/e5zw9T9/3eTob3YjxbqPu/J6cozVK/aIsbzbcd6QBT8b0arLhk1WjTonp2IH83Lj2xtPpamC8tRGSpNlcS/Tu+KQDcpKE0tj3AvrC8c6u+Pg94hCLEO+22XR8z/tHbDa6EmfHDLFiOiyM44bF8J8FVyihjo1ZQOvErTLRa02/DcSg9evLGZCm51LbpX/RfL/JL++AJrVqgNl64LmMX/ycHrRSMJdoX4rBJFplORlbY2YWzWn4jmdYsu/VqeHIWUUtKFk1J+tL+WyloOfKpmKXDcUqaHlFXaroivamrOe0QsZ3q8nU/xBdYXO3H075RX/BbVwqlTDCWwjjhOlZdqKI1VQIakEV+kRsSeeE3+6JD11++Ckxpy2DGsCH9wARC3pd03SA22gbR7oICi9+NYpSkvBr5xzOjhmBMAGqsFw0LObN68f7Hn8/gSM+HM+uvsLLsNtL5p3udPjj8eGz2BmFmVtzlfhXIBYLl/gDIA07mw==c\�E/  
�贴文章成功",
    "data": {
        "id": 7482,
        "company_id": 0,
        "user_id": 2029,
        "title": "最高法：纠正五周杀人案等重大冤错案十件，宣告819人无罪",
        "ad": null,
        "content": "<p class=\"text\">最高人民法院院长周强12日作工作报告时表示，2018年，全国各级法院完善冤假错案防范纠正机制，严格落实非法证据排除规则，按照审判监督程序再审改判刑事案件1821件，其中依法纠正“五周杀人案”等重大冤错案件10件，依法宣告517名公诉案件被告人和302名自诉案件被告人无罪。</p><p class=\"text\">周强在工作报告中介绍，全国各级法院认真落实总体国家安全观,积极推进平安中国建设,审结一审刑事案件119.8万件,判处罪犯142.9万人。</p><p class=\"text\">同时，加强人权司法保障。坚持法律面前一律平等，坚持以事实为根据、以法律为准绳，落实宽严相济刑事政策，坚持程序公�  ��和实体公正相统一，坚持严格公正司法。严把死刑案件质量关，确保死刑只适用于极少数罪行极其严重的犯罪分子。完善冤假错案防范纠正机制，严格落实非法证据排除规则，各级法院按照审判监督程序再审改判刑事案件1821件，其中依法纠正“五周杀人案”等重大冤错案件10件。审结国家赔偿案件1.5万件。对生活困难当事人发放司法救助款10.8亿元,减免诉讼费2.6亿元。</p><p class=\"text\">各级法院还会同司法部加强律师执业权利保障，积极推进刑事案件律师辩护全覆盖。落实罪刑法定、疑罪从无等原则，依法宣告517名公诉案件被告人和302名自诉案件被告人无罪。</p>",
        "article_link": "https://xw.qq.com/cmsid/20190312A095HB00",
        "status": 1,
        "open_business_card": 0,
        "open_dialing": 1,
        "open_qrcode": 1,
        "red_packet_money": "0",
        "red_packet_num": 0,
        "red_packet_max": "0",    
        "red_packet_min": "0",
        "open_red_packet": 0,
        "open_directional_red_packet": 1,
        "directional_city": null,
        "open_enroll": 1,
        "slogan": "我要报名",
        "source": "腾讯新闻",
        "type": 2,
        "click_num": 0,
        "relay_num": 0,
        "articles_imgs": null,
        "author": "",
        "red_packet_balance": 0,
        "check_status": 1,
        "new_content": null,
        "date": "2019-03-12 10:19:22",
        "thum": null,
        "create_time": "2019-03-12 13:32:36",
        "update_time": "2019-03-12 13:32:36",
        "user_mobile": "13262957500",
        "business_card": {
            "money": "0.00"
        }
    }
}
 ```



 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|code |int   |1：成功 其他值：失败|
|msg |string|提示信息|
|id |int|文章id|
|content|string|文章内容|
|date|string|发布时间|
|source|string|来源|
|date|string|发布时间|

c\�E\