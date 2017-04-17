<?php 
/**
 * MYSQL配置
 * @author jinzhonghao <954299193@qq.com> created 2015-09-01
 */

return array(
		'wb'	=> array(//表名
		        'character_set'	=>	'utf8',	//字符集
				'master'	=>	array(//主
							'host'	=>	'10.10.10.201',
							'user'	=>	'wb',
                            'pwd'	=>	'fdsew432423@!$#Q@D_32s',
							),
		          'slav'	=>	array(//从
		                     'host'	=>	'10.10.10.200',
		                     'user'	=>	'wb',
		                     'pwd'	=>	'fdsew432423@!$#Q@D_32s',      
		                  ),
				),
    
);
    
        




?>