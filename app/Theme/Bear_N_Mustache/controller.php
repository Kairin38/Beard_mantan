<?php
	function indexTheme() {
		global $modelNotice;	// để sử dụng thì phải gọi model  
		// lấy danh sách mới nhất		
		$newNotices = $modelNotice -> getNewNotice(5) ;
		// biến ở đâu tồn tại ở đó để dùng ở  view thì phải dùng setVariable chuyển biến controlller vào view đặt tên tương đương nhau để setVariable("abc")
		setVariable("newNotices", $newNotices);
	}
?>