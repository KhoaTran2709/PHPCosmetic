<div class="content">
	<div class="content_left">
		<?php
		include('modules/left/list.php');
		?>
	</div>
	<div class="content_right">
		<?php
		if (isset($_GET['quanli']) && ($_GET['quanli']) != '') {
			$tam = $_GET['quanli'];
		} else {
			$tam = '';
		}
		if ($tam == 'chitietnuochoa') {
			include('modules/right/chitietnuochoa.php');
		} else if ($tam == 'loainuochoa') {
			include('modules/right/loainuochoa.php');
		} else if ($tam == 'dangki') {
			include('modules/right/dangki.php');
		} else if ($tam == 'thongbao') {
			include('modules/right/thongbao.php');
		} else if ($tam == 'giohang') {
			include('modules/right/giohang.php');
		} else if ($tam == 'login') {
			include('modules/right/login.php');
		} else if ($tam == 'camon') {
			include('modules/right/camon.php');
		} else if ($tam == 'thanhtoan') {
			include('thanhtoan.php');
		}  else if ($tam == 'aboutus') {
			include('modules/right/aboutus.php');
		}else if (isset($_POST['search'])) {
			include('modules/right/search.php');
		} else {
			include('modules/right/tatcasp.php');
		}
		?>
	</div>
	<div class="clear"></div>