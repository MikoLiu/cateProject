	/*
	*查找指定数据在指定数组中出现的下标
	*公共方法
	*
	*/
		function findIndex(msg,array)
		{
			var index=-1;
			for(var i=0;i<array.length;i++)
			{
				if(msg==array[i])
				{
					index=i;
				}
			}
			return index;
		}
			/*
			 *根据指定的ID值，获取对应的HTML元素
			 *参数：元素id值
			 *返回值：HTML元素
			*/
			function $(id)
			{
				return document.getElementById(id);
			}
			/*
			*创建XML异步对象
			*
			*/

			function createXhr()
			{
				if(window.XMLHttpRequest)
				{
					 xhr=new XMLHttpRequest();
				}else
				{
					xhr=new ActiveXObject("Microsoft.XMLHttp");
				}
				return xhr;
			}