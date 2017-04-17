<?php 
/**
 * MYSQL配置
 * @author jinzhonghao <954299193@qq.com> created 2015-09-01
 */

return array(
		'wb'	=> array(//表名
		        'character_set'	=>	'utf8',	//字符集
				'master'	=>	array(//主
							'host'	=>	'127.0.0.1',
							'user'	=>	'root',
                            'pwd'	=>	'Aa1qa2wsjin',
							),
		          'slav'	=>	array(//从
		                     'host'	=>	'127.0.0.1',
		                     'user'	=>	'root',
		                     'pwd'	=>	'Aa1qa2wsjin',      
		                  ),
				),
);
        




?>