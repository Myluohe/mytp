<?php /* Smarty version Smarty 3.1.4, created on 2016-08-01 19:04:51
         compiled from ".\templates\demo09.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24748579f2cd3aed584-78540397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bd79df14d5bd03b932c1734df3ae1c78cb32a0d' => 
    array (
      0 => '.\\templates\\demo09.tpl',
      1 => 1461230492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24748579f2cd3aed584-78540397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
    'page' => 0,
    'pagePrev' => 0,
    'pageNext' => 0,
    'pageCount' => 0,
    'count' => 0,
    'pageSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_579f2cd41d4be',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579f2cd41d4be')) {function content_579f2cd41d4be($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'E:\www\ajaxpage\Smarty\plugins\function.counter.php';
?><table bgcolor='#cccccc' cellspacing='1'>
	<tr bgcolor='#ffffff'><td>编号</td><td>分类</td><td>描述</td><td>上级编号</td>
	<td>操作</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<tr bgcolor='#ffffff'>
			<td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
</td>
			<td><a href='#' onclick='del(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
)'>删除</a></td>
		</tr>
	<?php } ?>
	<tr bgcolor='#ffffff'>
		<td colspan='5'>
			<a href='#' onclick='init(1)'>第一页</a>
			<a href='#' onclick='init(<?php echo $_smarty_tpl->tpl_vars['pagePrev']->value;?>
)'>上一页</a>
			<a href='#' onclick='init(<?php echo $_smarty_tpl->tpl_vars['pageNext']->value;?>
)'>下一页</a>
			<a href='#' onclick='init(<?php echo $_smarty_tpl->tpl_vars['pageCount']->value;?>
)'>最末页</a>
			
			共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条数据
			共<?php echo $_smarty_tpl->tpl_vars['pageCount']->value;?>
页
			当前第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页
			每页<?php echo $_smarty_tpl->tpl_vars['pageSize']->value;?>
条数据
		</td>
	</tr>
</table><?php }} ?>