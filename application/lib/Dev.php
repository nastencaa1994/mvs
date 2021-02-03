<?
ini_set('dicplay_errors',1);
error_reporting(E_ALL);//вывод всех ошибок на экран

function debug($str)
{
	echo '<pre>';
	var_dump($str);
	exit;
}
