<?php
/**
 * =================================================
 * @版权所有  网悦时代，并保留所有权利。
 * @网站地址: http://soft.wangyue.cc；
 * -------------------------------------------------
 * @这是一个商业软件！您只能在得到官方的授权才可对程序代码进行修改
 * @使用；不允许对程序代码以任何形式任何目的的再发布。
 * @index.act.php
 * =================================================
*/
if(!defined('PATH_ROOT')){
	exit('Access Denied');
}
$start = intval(request('start',0));
$result=exclist(array('status=1'),'`start` ASC',$start,PAGE);
$exchangelist=array();
if (!empty($result))
{
	$page_url=u('exchange','index',$result['urls']);
	$pages=get_page_number_list($result['total'], $start, PAGE);
	$exchangelist=$result['data'];
}


?>