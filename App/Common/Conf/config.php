<?php
return array(
	//Mysql
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'www.kushao.com',
	'DB_NAME' => 'kushao',
	'DB_USER' => 'kushao',
	'DB_PWD' => 'YVHmHgFjdYGE',
	'DB_PORT' => '3306',
	'DB_PREFIX' => 'ks_',

	//分组列表
	'MODULE_ALLOW_LIST' => array(
		'Home',
	),
	
	//默认分组
	'DEFAULT_MODULE' => 'Home',
	
	//路由模式
	'URL_MODEL' => 2,
	
	//模版标签
	'TMPL_L_DELIM' => '<{',
	'TMPL_R_DELIM' => '}>',

	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' => array(
		array('a','Home/Index/a'),
	),
);
