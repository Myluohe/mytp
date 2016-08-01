(function() {

	// 获取dom元素
	var $ = function(id) {
		return document.getElementById(id);
	};

	// 获取Ajax对象
	$.init = function() {
		try {
			return new XMLHttpRequest();
		} catch (e) {
		}
		try {
			return new ActiveXObject('Microsoft.XMLHTTP');
		} catch (e) {

		}
	}

	// 封装get请求
	$.get = function(url, data, callback, type) {
		// url：表示请求地址
		// data：传递的参数
		// callback：回调函数
		// type：期望得到返回值类型
		var xhr = $.init();
		url += '?_=' + new Date().getTime();
		if (data != null) {
			url += '&' + data;
		}
		xhr.open('get', url);
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
				if (type == null) {
					type = 'text';
				}
				if (type == 'text') {
					callback(xhr.responseText);
				}
				if (type == 'xml') {
					callback(xhr.responseXML);
				}
				if (type == 'json') {
					callback(eval('(' + xhr.responseText + ')'));
				}
			}
		};
		xhr.send(null);
	};

	// 封装post请求
	$.post = function(url, data, callback, type) {
		// url：表示请求地址
		// data：传递的参数
		// callback：回调函数
		// type：期望得到返回值类型
		var xhr = $.init();
		xhr.open('post', url);
		xhr.setRequestHeader('Content-Type',
				'Application/x-www-form-urlencoded');
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
				if (type == null) {
					type = 'text';
				}
				if (type == 'text') {
					callback(xhr.responseText);
				}
				if (type == 'xml') {
					callback(xhr.responseXML);
				}
				if (type == 'json') {
					callback(eval('(' + xhr.responseText + ')'));
				}
			}
		}
		xhr.send(data);

	}

	// 为全局作用域中添加$属性
	window.$ = $;
})();