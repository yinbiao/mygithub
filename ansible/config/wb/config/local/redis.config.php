<?php 
/**
 * redis配置
 * @author jinzhonghao <954299193@qq.com> created 2015-09-01
 */

return array(
    'ib'	=> array(//键名
        'master'	=>	array(//主
            'host'	=>	'127.0.0.1',
            'port'	=>	'6379',
            'db'	=>	'0',
        ),
        'slav'	=>	array(//从
            'host'	=>	'127.0.0.1',
            'port'	=>	'6379',
            'db'	=>	'0',
        ),
    ),
    'user'	=> array(//键名
        'master'	=>	array(//主
            'host'	=>	'127.0.0.1',
            'port'	=>	'6379',
            'db'	=>	'0',
        ),
        'slav'	=>	array(//从
            'host'	=>	'127.0.0.1',
            'port'	=>	'6379',
            'db'	=>	'0',
        ),
    ),
    'default'	=> array(//键名
        'master'	=>	array(//主
            'host'	=>	'127.0.0.1',
            'port'	=>	'6379',
            'db'	=>	'0',
        ),
        'slav'	=>	array(//从
            'host'	=>	'127.0.0.1',
            'port'	=>	'6379',
            'db'	=>	'0',
        ),
    ),
);





?>