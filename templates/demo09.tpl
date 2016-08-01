<table bgcolor='#cccccc' cellspacing='1'>
	<tr bgcolor='#ffffff'><td>编号</td><td>分类</td><td>描述</td><td>上级编号</td>
	<td>操作</td>
	</tr>
	{foreach  from=$data item='v'}
		<tr bgcolor='#ffffff'>
			<td>{counter}</td>
			<td>{$v.name}</td>
			<td>{$v.content}</td>
			<td>{$v.pid}</td>
			<td><a href='#' onclick='del({$v.id},{$page})'>删除</a></td>
		</tr>
	{/foreach}
	<tr bgcolor='#ffffff'>
		<td colspan='5'>
			<a href='#' onclick='init(1)'>第一页</a>
			<a href='#' onclick='init({$pagePrev})'>上一页</a>
			<a href='#' onclick='init({$pageNext})'>下一页</a>
			<a href='#' onclick='init({$pageCount})'>最末页</a>
			
			共{$count}条数据
			共{$pageCount}页
			当前第{$page}页
			每页{$pageSize}条数据
		</td>
	</tr>
</table>