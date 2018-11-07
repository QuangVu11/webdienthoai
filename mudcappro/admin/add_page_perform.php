<?php 
	//  Kết nối đến CSDL
	include("../config/dbconfig.php");
	
	//Lấy các dữ liệu bên trang Thêm mới bài viết
	$title = $_POST['title'];
	$content = $_POST['content'];

	// Upload hình ảnh
	

	// Chèn dữ liệu vào bảng tbl_product
	$sql="insert into tbl_page (title,content) value('$title','$content',)";

	// Cho thực thi câu lệnh SQL trên
	$run = mysqli_query($conn, $sql);
	echo '
		<script type="text/javascript">
			alert("Thêm mới trang thành công!!!");
			window.location.href="http://localhost/mudcappro/admin/list_page.php";
		</script>';
;?>