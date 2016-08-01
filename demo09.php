<?php
mysql_connect ( 'localhost', 'root', 'mengyu' );
mysql_select_db ( 'studym' );
mysql_query ( 'set names utf8' );
$result = mysql_query ( "select count(*) as num from study_comment" );
$row = mysql_fetch_assoc ( $result );
// 获取当前表总行数
$count = $row ['num'];
// 获取当前页页码
$page = isset ( $_GET ['page'] ) ? $_GET ['page'] : 1;
// 定义页尺寸
$pageSize = 5;
// 计算总页数
$pageCount = ceil ( $count / $pageSize );
// 上一页
$pagePrev = $page - 1;
// 下一页
$pageNext = $page + 1;
// 判断页码越界
if ($pagePrev < 1) {
	$pagePrev = 1;
}
if ($pageNext > $pageCount) {
	$pageNext = $pageCount;
}
// 定义偏移量
$offset = ($page - 1) * $pageSize;
// 生成sql
$sql = "select * from study_comment order by id limit $offset,$pageSize";
// 发送sql语句
$result = mysql_query ( $sql );
$data = array ();
while ( $row = mysql_fetch_assoc ( $result ) ) {
	$data [] = $row;
}
include ('Smarty/Smarty.class.php');
$smarty = new Smarty ();
$smarty->assign ( 'count', $count );
$smarty->assign ( 'pageCount', $pageCount );
$smarty->assign ( 'pageSize', $pageSize );
$smarty->assign ( 'page', $page );
$smarty->assign ( 'pagePrev', $pagePrev );
$smarty->assign ( 'pageNext', $pageNext );
$smarty->assign ( 'data', $data );
$str = $smarty->fetch ( 'demo09.tpl' );
echo $str;





