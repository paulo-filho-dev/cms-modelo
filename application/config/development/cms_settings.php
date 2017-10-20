<?php
$config['cms_title'] = 'CMS PCC';
$config['cms_dev'] = 'pccnf21@gmail.com';
$config['index_page'] = '';
$config['language']	= 'portuguese';

//$root  = "http://".$_SERVER['HTTP_HOST'];
$root  = "http://localhost:8181";
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$config['base_url']    = $root;